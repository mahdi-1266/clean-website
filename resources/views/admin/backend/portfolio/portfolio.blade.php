@extends('admin.admin_master')
@section('adminBody')
{{-- 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Datatable</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <a href="{{ route('add.portfolio') }}" class="btn btn-primary mb-2" style="float:right;">Add Patient</a>
                    </div>
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>SID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolio as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->desc }}</td>
                                    <td><img src="{{ asset($item->image) }}" alt="" style="width: 50px; height: 50px;"></td>
                                    <td><a href="{{ route('edit.portfolio', $item->id) }}" class="btn btn-info">Edit</a></td>
                                    <td><a href="{{ route('delete.portfolio', $item->id) }}" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="col-sm-12">
    <div class="card mb-4">
        <div>
            <a href="{{ route('add.portfolio') }}" class="btn btn-primary mb-2" style="float:right;">Add Patient</a>
        </div>
        <div class="card-body">
            
            <!-- Table start -->
            <div class="table-outer">
            <div class="table-responsive">
                <table class="table m-0">
                <thead>
                    <tr>
                        <th>SID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($portfolio as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->desc }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" alt="" style="width: 50px; height: 50px;">
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.portfolio', $item->id) }}"><i class="ri-edit-line"></i></a>
                                <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.portfolio', $item->id) }}"><i
                                    class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <!-- Table end -->

            <!-- Pagination start -->
            <div class="mt-3">
            <ul class="pagination justify-content-start">
                <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                <a class="page-link" href="#" aria-current="page">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </div>
            <!-- Pagination end -->

        </div>
    </div>
</div>

@endsection