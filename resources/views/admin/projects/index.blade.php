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
                <tr class="text-center">
                  <th class="border">ID</th>
                  <th class="border">Title</th>
                  <th class="border">Description</th>
                  <th class="border">Icon</th>
                  <th class="border">Photo</th>
                </tr>
              </thead>

              @php
                $projects = App\Models\Projects::get();
              @endphp

              <tbody>
                @foreach ($projects as $project)
                  <tr class="text-center">
                    <td class="border">{{ $project->id }}</td>
                    <td class="border">{{ $project->title }}</td>
                    <td class="border">{{ $project->description }}</td>
                    <td class="border">
                      <img src="{{ asset($project->icon) }}" width="40px" height="40px" alt="">
                    </td>
                    <td class="border">
                      <img src="{{ asset($project->image) }}" width="100px" height="50" alt="">
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <a href="{{ route('add.project') }}" class="btn btn-primary mt-3">Add Project</a>
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