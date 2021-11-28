<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public $item, $action, $search, $countProduct = '';
    public $selected = [];

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function selectItem($item, $action)
    {
        $this->item = $item;
        
        if($action == 'delete'){
            $this->dispatchBrowserEvent('openModal', ['name' => 'deleteProduct']);
        }else if($action == 'masiveDelete'){
            $this->dispatchBrowserEvent('openModal', ['name' => 'deleteProductMassive']);
            $this->countProduct = count($this->selected);
        }else{
            $this->dispatchBrowserEvent('openModal', ['name' => 'createProduct']);
            $this->emit('getModelId', $this->item);
        }
    }

    public function delete()
    {
        $product = Product::findOrFail($this->item);
        $product->delete();

        $this->dispatchBrowserEvent('closeModal', ['name' => 'deleteProduct']);

    }

    public function massiveDelete()
    {
        $products = Product::whereKey($this->selected);
        $products->delete();

        $this->selected = null;

        $this->dispatchBrowserEvent('closeModal', ['name' => 'deleteProductMassive']);

    }

    public function render()
    {
        return view('livewire.products', 
            ['products' => Product::search('name', $this->search)->paginate(10)]
        );
    }
}