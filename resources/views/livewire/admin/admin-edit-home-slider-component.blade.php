<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Add Slider</div>
                            <div class="col-md-6"><a href="{{route('admin.homeSlider')}}" class="btn btn-success pull-right">All Sliders</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('msg'))
                            <div class="alert alert-success">{{Session::get('msg')}}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateSlide">
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label">Title</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="title" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label">Subtitle</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="subtitle" placeholder="Subtitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label">Price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="price" placeholder="Price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label">Link</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="link" placeholder="Link">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label">Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newImage" placeholder="Image">
                                    @if ($newImage)
                                        <img src="{{$newImage->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('assets')}}/web/assets/images/sliders/{{$image}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label">Status</label>
                                <div class="col-md-4">
                                   <select name="" id="" class="form-control" wire:model="status">
                                       <option value="0">Inactive</option>
                                       <option value="1">Active</option>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Title" class="col-md-4 form-label"></label>
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
