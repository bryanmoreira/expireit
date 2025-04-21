<?php

namespace App\Livewire\Messages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class CreateLink extends Component
{
    public string $text;
    public int $duration;
    public string $link;

    public function createLink(): void
    {
        $this->validate([
            'text' => 'required|string|max:1024',
            'duration' => 'required|integer|min:1|max:60',
        ]);

        $token = Str::random(32);

        $user = User::class::find(Auth::id());

        $user->secretLink()->create([
            'token' => $token,
            'text' => $this->text,
            'expires_at' => now()->addMinutes($this->duration),
        ]);

        $this->link = url('/link/' . $token);
    }

    public function render(): View
    {
        return view('livewire.messages.create-link');
    }
}
