@extends('admin.includes.admin_design')

@section('title') Edit Category {{ $category->category_name }} - {{ config('app.name', 'Laravel') }} @endsection


@section('content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Edit Category</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('category.index') }}" class="btn add-btn" ><i class="fa fa-eye"></i> View All  Category</a>
                    </div>
                </div>
            </div>

            @include('admin.includes._message')
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ route('category.update', $category->id) }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_name">Under Category</label>
                                            <select name="parent_id" id="parent_id" class="form-control">
                                                <option value="0">Main Category</option>
                                                @foreach($categories as $data)
                                                    <option value="{{ $data->id }}" @if($data->id == $category->parent_id) selected @endif>{{ $data->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category->category_name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category_name">Category Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                                                {{ $category->description }}
                                            </textarea>
                                        </div>
                                    </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <div class="form-check" data-children-count="1">
                                              <input class="form-check-input" type="checkbox" value="1" name="status" id="status" @if($category->status == 1) checked @endif>
                                              <label class="form-check-label" for="invalidCheck">
                                                  Mark as Active
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                </div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection

@section('js')
     <!-- Datatable JS -->
    <script src="{{ asset('/adminpanel/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/adminpanel/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $('body').on('click', '.deleteRecord', function (event) {
            event.preventDefault();
            var SITEURL = '{{ URL::to("") }}';
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                title: "Are You Sure? ",
            text: "You will not be able to recover this record again",
            type: "warning",
            showCancelButton: true,
            showdeleteFunctionButton: true,
                confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Delete it!"
        },
            function () {
                window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
            });
        });
    </script>
    @endsection
