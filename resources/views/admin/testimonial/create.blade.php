@extends('admin.admin_master')
@section('adminBody')
<div class="col-lg-6 col-ms-12">
    <!-- Basic Input Fields Column -->
    <div class="card mb-4">

      <div class="card-header">
        <h5 class="card-title">Add Testimonial</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('store.testimonial') }}" method="post" enctype="multipart/form-data" class="p-3">
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

          <!-- Star -->
          <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" id="rating" class="form-control">
              <option value="">Select rating</option>
              <option value="1">⭐</option>
              <option value="2">⭐⭐</option>
              <option value="3">⭐⭐⭐</option>
              <option value="4">⭐⭐⭐⭐</option>
              <option value="5">⭐⭐⭐⭐⭐</option>
            </select>
          </div>

          <!-- Image -->
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>

          <div class="mb-3">
            <label for="linkedin_link" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="3" placeholder="Enter message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>
  </div>
@endsection