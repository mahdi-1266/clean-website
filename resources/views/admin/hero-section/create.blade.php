@extends('admin.admin_master')
@section('adminBody')
  <div class="col-lg-6 col-ms-12 m-auto">
    <!-- Basic Input Fields Column -->
    <div class="card mb-4">

      <div class="card-header">
        <h5 class="card-title">Create Hero Section</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('store.hero.section') }}" method="post" enctype="multipart/form-data" class="p-3">
          @csrf

          <!-- Text Input -->
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
          </div>

          <!-- Email Input -->
          <div class="mb-3">
            <label for="button" class="form-label">Button Text</label>
            <input type="text" class="form-control" name="button" id="button" placeholder="Enter button text">
          </div>

          <!-- Email Input -->
          <div class="mb-3">
            <label for="link" class="form-label">Button Link</label>
            <input type="url" class="form-control" name="link" id="link" placeholder="Enter button link">
          </div>

          <!-- Password Input -->
          <div class="mb-3">
            <label for="image" class="form-label">Hero Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>

          <!-- Textarea -->
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"
              placeholder="Enter description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection