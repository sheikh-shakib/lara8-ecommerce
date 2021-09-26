<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage Home Category</div>
                    <div class="panel-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">{{Session::get('msg')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Choose Category</label>
                                <div class="col-md-4" wire:ignore>
                                    <select name="categories[]" multiple="multiple" id="" wire:model="selected_categories" class="sel_categories form-control">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Number of Product</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="num_of_products">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for=""></label>
                                <div class="col-md-4">
                                   <input type="submit" class="btn btn-success" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.sel_categories').select2();
            $('sel_categories').on('change', function (e) {
                var data=$('.sel_categories').select2("val");
                @this.set('selected_categories',data)
            });
        });
    </script>
@endpush