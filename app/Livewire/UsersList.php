<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
class UsersList extends Component
{
    use WithPagination;
    public $query = "";
    #[On('user-created')]
    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::latest()
                ->where('name', 'like', "%{$this->query}%")
                ->paginate(6),
        ]);
    }
}
