<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $image;
    public $status;
    public $link;
    public $price;
    public $slide_id;
    public $newImage;

    public function mount($slide_id)
    {
        $slider=HomeSlider::find($slide_id);
        $this->title=$slider->title;
        $this->subtitle=$slider->subtitle;
        $this->image=$slider->image;
        $this->status=$slider->status;
        $this->link=$slider->link;
        $this->price=$slider->price;
        $this->slide_id=$slider->id;
    }

    public function updateSlide()
    {
        $slider=HomeSlider::find($this->slide_id);
        $slider->title=$this->title;
        $slider->subtitle=$this->subtitle;
        if ($this->newImage) {
            $imageName=Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('sliders',$imageName);
            $slider->image=$imageName;
        }
        $slider->status=$this->status;
        $slider->link=$this->link;
        $slider->price=$this->price;
        $slider->save();
        session()->flash('msg','Slider Edited Succesfully');
    }
    
    public function render()
    {
        $sliders=HomeSlider::all();
        return view('livewire.admin.admin-edit-home-slider-component',['sliders'=>$sliders])->layout('layouts.web');
    }
}
