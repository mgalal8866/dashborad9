<?php

namespace App\Http\Livewire\Dashboard\Users;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public function render()
    {
       $roles = Role::get();
        return view('livewire.dashboard.users.roles' ,['roles'=>$roles ])->layout('layouts.dashboard.layout');
    }
}
