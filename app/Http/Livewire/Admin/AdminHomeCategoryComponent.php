<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\HomeCategory;
use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public $selected_categories=[];
    public $num_of_products;

    public function mount()
    {
        $category=HomeCategory::find(1);
        $this->selected_categories=explode(',',$category->sel_catgories);
        $this->num_of_products=$category->num_of_products;
    }

    public function updateHomeCategory()
    {
        $category=HomeCategory::find(1);
        $category->sel_catgories=implode(',',$this->selected_categories);
        $category->num_of_products=$this->num_of_products;
        $category->save();
        session()->flash('msg','Category has been saved');
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-home-category-component',['categories'=>$categories])->layout('layouts.web');
    }
}
