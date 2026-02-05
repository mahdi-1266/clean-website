@extends('admin.admin_master')
@section('adminBody')
<div class="col-lg-6 col-ms-12">
    <!-- Basic Input Fields Column -->
    <div class="card mb-4">

      <div class="card-header">
        <h5 class="card-title">Add Project</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('update.project') }}" method="post" enctype="multipart/form-data" class="p-3">
          @csrf

          <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="{{ $projectId->id }}">
          </div>

          <!-- Text Input -->
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $projectId->title }}">
          </div>

          <!-- Email Input -->
          <div class="mb-3">
            <label for="button" class="form-label">Icon</label>
            <input type="file" class="form-control" name="icon" id="icon">
          </div>

          <!-- Password Input -->
          <div class="mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>

          <!-- Textarea -->
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"
            >{{ $projectId->description }}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>
  </div>
@endsection