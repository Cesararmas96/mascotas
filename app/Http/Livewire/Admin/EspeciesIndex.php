<?php

namespace App\Http\Livewire\Admin;

use App\Models\Especie;
use Livewire\Component;
use Livewire\WithPagination;

class EspeciesIndex extends Component
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
        $especies = Especie::where('nombre',  'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(10);

        return view('livewire.admin.especies-index', compact('especies'));
    }
}
