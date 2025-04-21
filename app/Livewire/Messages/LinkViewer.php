<?php

namespace App\Livewire\Messages;

use App\Models\SecretLink;
use Illuminate\View\View;
use Livewire\Component;

class LinkViewer extends Component
{
    public string $token;
    public string $text;
    public string $message;

    public function mount($token): void
    {
        $this->token = $token;

        $link = SecretLink::whereToken($this->token)->first();

        if ($link && (! $link->expires_at || $link->expires_at->isFuture())) {
            $this->text = $link->text;
        } else {
            optional($link)->delete();
            $this->message = $link ? "Link expired." : "Link not found.";
        }
    }


    public function render(): View
    {
        return view('livewire.messages.link-viewer')->layout('components.layouts.blank');
    }
}
