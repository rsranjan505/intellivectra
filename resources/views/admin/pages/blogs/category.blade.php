@extends('admin.layouts.app')

@section('content')
@section('page_title', 'IntelliVectra | Category')
@section('blogs', 'menu-open')
@section('blogs_category', 'menu-open')
@section('blogs_category', 'active')
@include('admin._partials.bredcum',['title'=>'Category'] )

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @include('admin.components.category-nav-header' ,['activeTab' => 'list'])
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table" id="category-table">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add category</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
            <form id="add-category-form"  action="{{ route('category.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name*</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description*</label>
                                <textarea type="text" class="form-control" rows="4" id="desc" name="desc" placeholder="Enter name"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent Category</label>
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title*</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Meta title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description*</label>
                                <textarea type="text" class="form-control" rows="4" id="desc" name="desc" placeholder="Meta desc"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Is Active</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="edit-brands" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add brands</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="edit-brands-form"  action="{{ route('category.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="card-body" id="getbrands">

                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin/plugins/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('admin/custom/custom.js')}}"></script>

<script>

     function editModel(id){
        var url = "brands/edit/" + id;
            var modelHtml = "";
            $("#edit-brands").modal('show');

            $.ajax({
                url: url,
                type: "get",
                success: function (res) {

                    let html = '<div class="row"><input type="hidden" class="form-control" id="id" name="id" value="'+res.data.id+'"><div class="col-12"><div class="form-group"><label for="exampleInputEmail1">Name*</label><input type="text" class="form-control" id="name" name="name" value="'+res.data.name+'"></div></div><div class="col-12"><div class="form-group"><label for="exampleInputEmail1">Is Active</label> <select class="form-control" id="is_active" name="is_active"><option value="1">Yes</option><option value="0">No</option></select></div></div></div>';

                    $("#getbrands").html("");
                    $("#getbrands").html(html);
                },
            });

        }
</script>

@endsection