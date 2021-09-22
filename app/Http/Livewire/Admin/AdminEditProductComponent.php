<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdminEditProductComponent extends Component
{
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
    public $product_slug;
    public $product_id;
    public $newImage;

    public function mount($product_slug)
    {
        $product=Product::where('slug',$product_slug)->first();
        $this->name=$product->name;
        $this->slug=$product->slug;
        $this->short_description=$product->short_description;
        $this->description=$product->description;
        $this->stock_status=$product->stock_status;
        $this->SKU=$product->SKU;
        $this->sale_price=$product->sale_price;
        $this->regular_price=$product->regular_price;
        $this->featured=$product->featured;
        $this->quantity=$product->quantity;
        $this->image=$product->image;
        $this->category_id=$product->category_id;
        $this->product_id=$product->id;
    }

    public function slugGenerator()
    {
        $this->slug=Str::slug($this->name,'-');
    }
    
    public function updateProduct()
    {
        $product=Product::find($this->product_id);
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
        if($this->newImage){
            $imageName=Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->image->storeAs('products',$imageName);
            $product->image=$imageName;
        }
        $product->category_id=$this->category_id;
        $product->save();
        session()->flash('msg','Product has been updated successfully');
    }

    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.web');
    }
}
