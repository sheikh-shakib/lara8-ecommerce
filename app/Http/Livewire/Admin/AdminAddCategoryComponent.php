<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function slugGenerate()
    {
        $this->slug=Str::slug($this->name);
    }
    public function storeCategory()
    {
        $category=new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('msg','Category has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.web');
    }
}
