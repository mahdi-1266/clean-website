@extends('admin.admin_master')
@section('adminBody')

<div class="col-sm-12">
    <div class="card mb-4">
        <div class="card-body">
            
            <!-- Table start -->
            <div class="table-outer">
            <div class="table-responsive">
                <table class="table m-0">
                <thead>
                    <tr>
                        <th>SID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($contact as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->lname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->message }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.contact', $item->id) }}"><i
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