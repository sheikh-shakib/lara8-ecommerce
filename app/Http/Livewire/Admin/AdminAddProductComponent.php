<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $stock_status;
    public $SKU;
    public $sale_price;
    public $regular_price;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->featured='0';
        $this->stock_status='instock';
    }

    public function slugGenerator()
    {
        $this->slug=Str::slug($this->name,'-');
    }

    public function addProduct()
    {
        $product=new Product();
        $product->name=$this->name;
        $product->slug=$this->slug;
        $product->short_description=$this->short_description;
        $product->description=$this->description;
        $product->stock_status=$this->stock_status;
        $product->SKU=$this->SKU;
        $product->sale_price=$this->sale_price;
        $product->regular_price=$this->regular_price;
        $product->featured=$this->featured;
        $product->quantity=$this->quantity;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image=$imageName;
        $product->category_id=$this->category_id;
        $product->save();
        session()->flash('msg','Product has been added successfully');
    }

    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.web');
    }
}
