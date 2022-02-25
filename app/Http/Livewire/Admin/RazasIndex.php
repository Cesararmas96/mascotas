<?php

namespace App\Http\Livewire\Admin;

use App\Models\Raza;
use Livewire\Component;
use Livewire\WithPagination;



class RazasIndex extends Component
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
        $razas = Raza::where('nombre',  'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(10);
        return view('livewire.admin.razas-index', compact('razas'));
    }
}
