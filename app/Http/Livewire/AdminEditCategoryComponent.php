<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $category_slug;
    public $category_id;
    
    public function mount($category_slug)
    {
        $this->category_slug=$category_slug;
        $category=Category::where('slug',$category_slug)->first();
        $this->category_id = $category->id;
        $this->name=$category->name;
        $this->slug=$category->slug; 
    }
    public function slugGenerate()
    {
        $this->slug=Str::slug($this->name);
    }
    public function updateCategory()
    {
        $category=Category::find($this->category_id);
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('msg','Category has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin-edit-category-component')->layout('layouts.web');
    }
}
