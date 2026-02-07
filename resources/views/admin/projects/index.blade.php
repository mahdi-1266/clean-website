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
                  <th class="border">Photo</th>
                  <th class="border">Action</th>
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
                    <td class="border"><img src="{{ asset($project->image) }}" width="100px" height="50" alt=""></td>
                    <td class="border">
                      <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.project', $project->id) }}"><i class="ri-edit-line"></i></a>
                        <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.project', $project->id) }}"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <a href="{{ route('add.project') }}" class="btn btn-primary mt-3">Add Project</a>
        <!-- Table end -->

      </div>
    </div>
  </div>
@endsection