<div>
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Categories</div>
                            <div class="col-md-6"><a href="{{route('admin.add.category')}}" class="btn btn-success pull-right">Add Category</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">{{Session::get('msg')}}</div>
                        @endif
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Catergory Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>
                                        <a href="{{route('admin.edit.category',['category_slug'=>$category->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 5px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
