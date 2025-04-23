<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class UserList extends Component
{
    public Collection $users;

    public function mount(): void
    {
        $this->users = User::all();
    }

    public function toggleUserActivity(int $id): void
    {
        $user = User::find($id);

        if ($user) {
            $user->active = !$user->active;
            $user->save();
            $this->users = User::all();
        }
    }

    public function getActivity(int $id)
    {
        $user = User::find($id);

        return $user->active;
    }

    public function render(): View
    {
        return view('livewire.users.user-list');
    }
}
