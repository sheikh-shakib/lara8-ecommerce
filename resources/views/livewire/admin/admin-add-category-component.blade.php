<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Add Category</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.category')}}" class="btn btn-success pull-right">All Categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group control-label">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name">
                                </div>
                            </div>
                            <div class="form-group control-label">
                                <label for="" class="col-md-4">Category Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category slug" class="form-control input-md" wire:model="slug" wire:keyup="slugGenerate">
                                </div>
                            </div>
                            <div class="form-group control-label">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-4" style="text-align: left">
                                    <input type="submit" value="Add Category" class=" btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
