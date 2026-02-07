@extends('admin.admin_master')
@section('adminBody')
<div class="col-lg-6 col-ms-12">
    <!-- Basic Input Fields Column -->
    <div class="card mb-4">

      <div class="card-header">
        <h5 class="card-title">Add Story</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('store.story') }}" method="post" enctype="multipart/form-data" class="p-3">
          @csrf

          <div class="row mb-5">
            <div class="col-xl-6 col-xxl-12 col-lg-4 mx-auto">
                <label for="title" class="form-label">Title: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>

            <div class="col-xl-4 col-xxl-12 col-lg-4 mx-auto">
                <label for="desc" class="form-label">Description: </label>
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="3" placeholder="Enter description"></textarea>
            </div>

            <div class="col-xl-4 col-xxl-12 col-lg-4">
                <label for="image" class="form-label">Photo: </label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-xxl-4 col-lg-4">
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </div>
        </div>

        </form>
      </div>
    </div>
  </div>
@endsection