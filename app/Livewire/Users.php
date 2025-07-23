<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Users extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')]

    public $name = '';
    #[Validate('required|email:dns|unique:users')]
    public $email = '';
    #[Validate('required|min:5')]
    public $password = '';

    #[Validate('image|max:5000|nullable')]
    public $avatar = '';

    public function createNewUser()
    {
        $this->validate();
        if ($this->avatar) {
            $validated['avatar'] = $this->avatar->store('avatar', 'public');
        }
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'avatar' => $validated['avatar'],
        ]);
        $this->reset();
        session()->flash('success', 'User successfully created.');
    }
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all(),
        ]);
    }
}
