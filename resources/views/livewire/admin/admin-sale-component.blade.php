<div>
    <div class="container" style="padding: 30px 0px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">Sale Setting</div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">{{Session::get('msg')}}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label" >Status</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label">Sale Date</label>
                                <div class="col-md-4">
                                   <input type="text" placeholder="YYY/MMM/DDD H:M:S" wire:model="sale_date" class="form-control input-md" name="" id="sale_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p_name" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                  <input type="submit" value="Update" class="btn btn-success">
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
        $(function(){
        $('#sale_date').datetimepicker({
            format:'Y-MM-DD h:m:s',
        })
        .on('dp.change',function (ev) {
           var data= $('#sale_date').val(); 
           @this.set('sale_date',data);
        });
    });
</script>
@endpush