<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Products</div>
                            <div class="col-md-6"><a href="{{route('admin.add.product')}}" class="btn btn-success pull-right">Add Product</a></div>
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="{{asset('assets')}}/web/assets/images/products/{{$product->image}}" alt="" width="60px"></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.edit.product',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        <a href="#" wire:click.prevent="deleteProduct({{$product->id}})" style="margin-left: 2px"><i class="fa text-danger fa-times fa-2x"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
