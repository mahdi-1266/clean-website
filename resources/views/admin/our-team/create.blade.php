@extends('admin.admin_master')
@section('adminBody')
<div class="col-lg-6 col-ms-12">
    <!-- Basic Input Fields Column -->
    <div class="card mb-4">

      <div class="card-header">
        <h5 class="card-title">Add Project</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('store.our-team') }}" method="post" enctype="multipart/form-data" class="p-3">
          @csrf

          <!-- Name -->
          <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter title">
          </div>

          <!-- Role -->
          <div class="mb-3">
            <label for="button" class="form-label">Role</label>
            <input type="text" class="form-control" name="role" id="role" placeholder="Enter role">
          </div>

          <!-- Facebook -->
          <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook Link</label>
            <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Enter facebook link">
          </div>

          <!-- Isntagram -->
          <div class="mb-3">
            <label for="instagram_link" class="form-label">Instagram Link</label>
            <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="Enter instagram link">
          </div>

          <!-- Twitter -->
          <div class="mb-3">
            <label for="twitter_link" class="form-label">Twitter Link</label>
            <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Enter twitter link">
          </div>

          <!-- Linkedin -->
          <div class="mb-3">
            <label for="linkedin_link" class="form-label">Linkedin Link</label>
            <input type="text" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="Enter linkedin link">
          </div>

          <!-- Image -->
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>
  </div>
@endsection