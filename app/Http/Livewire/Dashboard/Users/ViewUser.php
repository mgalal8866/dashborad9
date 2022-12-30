<?php

namespace App\Http\Livewire\Dashboard\Users;

use Livewire\Component;

class ViewUser extends Component
{
    public function render()
    {
        // return view('livewire.dashboard.users.view-user')->extends('layouts.dashboard.layout')->section('content');;
        return view('livewire.dashboard.users.view-user')->layout('layouts.dashboard.layout');
    }
}
