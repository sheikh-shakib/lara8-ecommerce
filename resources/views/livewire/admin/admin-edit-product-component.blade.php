<div>
    <div class="container" style="padding: 30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Edit Product</div>
                            <div class="col-md-6"><a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">{{Session::get('msg')}}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-4">
                                    <input id="p_name" class="form-control input-md" wire:model="name" wire:keyup="slugGenerator"  placeholder="Product Name" type="text" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Product Slug</label>
                                <div class="col-md-4">
                                    <input id="p_Slug" class="form-control input-md" wire:model="slug" placeholder="Product Slug" type="text" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-4">
                                    <textarea name="" id="" placeholder="Short Description" wire:model="short_description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea name="" id="" placeholder="Description" wire:model="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input id="p_Slug" class="form-control input-md" wire:model="regular_price" placeholder="Regular Price" type="text" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Sale Price</label>
                                <div class="col-md-4">
                                    <input id="p_Slug" class="form-control input-md" wire:model="sale_price" placeholder="Sale Price" type="text" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input id="p_Slug" class="form-control input-md" wire:model="SKU" placeholder="SKU" type="text" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select name="" wire:model="stock_status" id="">
                                        <option value="instock">In Stock</option>
                                        <option value="outofstock">Out Of Stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select name="" wire:model="featured" id="">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input id="p_Slug" class="form-control input-md" wire:model="quantity" placeholder="Quantity" type="text" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input id="p_Slug" class="input-file" wire:model="image" type="file" name="">
                                    @if ($newImage)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @else 
                                        <img src="{{asset('assets')}}/web/assets/images/products/{{$image}}" alt="" width="120">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Select Category</label>
                                <div class="col-md-4">
                                    <select name="" id="" wire:model="category_id">
                                        @foreach ($categories as $category)
                                        <option value="">Select A Category</option>
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                  <input type="submit" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
