<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;
class UsersList extends Component
{
    use WithPagination;
    public $query = "";
    #[On('user-created')]
    public function placeholder()
    {
        return view('livewire.placeholders.skeleton');
    }

    #[Computed()]
    public function users()
    {
        return User::latest()
            ->where('name', 'like', "%{$this->query}%")
            ->paginate(6);
    }
    public function render()
    {

        return view('livewire.users-list');
    }
}
