<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Marketplace extends Component
{
    use WithPagination;

    public $n = 9;
    
    public $tags = [
        "OS",
        "Antivirus",
        "Productivity",
        "Graphics",
        "Audio and Music",
        "Video and Animation",
        "Browsers",
        "Programming",
        "Database",
        "Project Management"
    ];
    
    public function render()
    {
        $products = Product::paginate($this->n);

        return view('livewire.marketplace', compact('products'))->layout('layouts.ui');
    }

    public function mount()
    {

    }

    public function loadMore()
    {
        $this->n += 9;
    }
}
