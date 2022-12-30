<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDatatables extends Component
{
    public function render()
    {
        $users = User::get();
        return view('livewire.user-datatables',['users'=>$users]);
    }
}
