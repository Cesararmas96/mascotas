<?php

namespace App\Http\Livewire\Admin;

use App\Models\Persona;
use Livewire\Component;
use Livewire\WithPagination;


class PersonasIndex extends Component
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
        $personas = Persona::where('nombre1',  'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(10);

        return view('livewire.admin.personas-index', compact('personas'));
    }
}
