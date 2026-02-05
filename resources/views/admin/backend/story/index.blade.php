@extends('admin.admin_master')
@section('adminBody')

<div class="col-sm-12">
    <div class="card mb-4">
        @if (!$story)
            <div>
                <a href="{{ route('add.story') }}" class="btn btn-primary mb-2" style="float:right;">Add Story</a>
            </div>            
        @endif
        <div class="card-body">
            
            <!-- Table start -->
            <div class="table-outer">
            <div class="table-responsive">
                <table class="table m-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$story)
                        <tr>
                            <td></td>
                            <td></td>
                            
                        </tr>
                    @else
                        <tr>
                            <td>{{ $story->title }}</td>
                            <td>{{ $story->desc }}</td>
                            <td>
                                <img src="{{ asset($story->image) }}" alt="" style="width: 50px; height: 50px;">
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.story', $story->id) }}"><i class="ri-edit-line"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endif
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