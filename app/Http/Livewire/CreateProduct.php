<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateProduct extends Component
{
    public $product;
    public $productId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateProduct") ? [
            'product.nama_product' => 'required' . $this->productId
        ] : [
            'product.harga_product' => 'required',
        ];

        return array_merge([
            'product.nama_product' => 'required',
            'product.harga_product' => 'required'
        ], $rules);
    }

    public function createProduct ()
    {
        $this->resetErrorBag();
        $this->validate();

        $no_product = Product::orderBy('no_product', 'desc')->first();
        if ($no_product == null) {
            $no_product = 1;
        } else {
            $no_product = $no_product->no_product + 1;
        }

        $kode_product = "MJA-P-" . str_pad($no_product, 3, "0", STR_PAD_LEFT);


        $nama_product = $this->product['nama_product'];
        $harga_product = $this->product['harga_product'];
        $no_product = $no_product;
        $created_by_product = auth()->user()->name;


        // Product::create($this->product);
        Product::create([
            'nama_product' => $nama_product,
            'harga_product' => $harga_product,
            'no_product' => $no_product,
            'kode_product' => $kode_product,
            'created_by_product' => $created_by_product,
        ]);

        $this->emit('saved');
        $this->reset('product');
    }

    public function updateProduct ()
    {
        $this->resetErrorBag();
        $this->validate();

        User::query()
            ->where('id', $this->productId)
            ->update([
                "nama_product" => $this->product->nama_product,
                "harga_product" => $this->product->harga_product,
            ]);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->product && $this->productId) {
            $this->product = Product::find($this->productId);
        }

        $this->button = create_button($this->action, "Product");
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
