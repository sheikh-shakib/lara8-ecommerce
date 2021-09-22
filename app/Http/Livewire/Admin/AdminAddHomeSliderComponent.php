<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $image;
    public $status;
    public $link;
    public $price;

    public function mount()
    {
        $this->status=0;
    }

    public function addSlide()
    {
        $slide=new HomeSlider();
        $slide->title=$this->title;
        $slide->subtitle=$this->subtitle;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slide->image=$imageName;
        $slide->status=$this->status;
        $slide->link=$this->link;
        $slide->price=$this->price;
        $slide->save();

        session()->flash('msg','Slide Has Been Added Successfuly');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.web');
    }
}
