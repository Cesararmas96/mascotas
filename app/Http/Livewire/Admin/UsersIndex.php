<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;


class UsersIndex extends Component
{
    protected $paginationTheme = "bootstrap";
    use WithPagination;

    public  $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $roles = Role::get();

        $users = User::where('name',  'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(10);
        return view('livewire.admin.users-index', compact('users', 'roles'));
    }
}
