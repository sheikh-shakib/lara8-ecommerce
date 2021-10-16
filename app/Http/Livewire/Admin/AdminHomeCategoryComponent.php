<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\HomeCategory;
use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public $sel_catgories=[];
    public $num_of_products;

    public function mount()
    {
        $category=HomeCategory::find(1);
        $this->sel_catgories=explode(',',$category->sel_catgories);
        $this->num_of_products=$category->num_of_products;
    }

    public function updateHomeCategory()
    {
        $category=HomeCategory::find(1);
        dd(explode(',',$category->sel_catgories));
        $category->sel_catgories=implode(',',$this->sel_catgories);
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
