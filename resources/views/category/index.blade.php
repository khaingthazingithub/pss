@extends("layouts.admin_master")

@section('title', 'all categories')

@section("content")
   <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">All Categories</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

             @if(\Auth::check())
              @if(\Auth::user()->is_admin == 1)
                <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm">
                     <i class="fa fa-plus"></i> Create new category</a>
              @endif
            @endif

           <table class="table table-bordered" id="categories-table">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
      </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@stop
@push('scripts')
<script>
$(function() {
    $('#categories-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('categories.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'edit', name: 'edit' },
            { data: 'delete', name: 'delete' },
        ]
    });
});
</script>
@endpush
