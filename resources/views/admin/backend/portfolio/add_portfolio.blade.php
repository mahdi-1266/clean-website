@extends('admin.admin_master')
@section('adminBody')

<div class="container-fluid">
    <form action="{{ route('store.portfolio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-5">
            <div class="col-12">
                <h2>Add a Portfolio</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-xl-4 col-xxl-4 col-lg-4 mx-auto">
                <label for="title" class="form-label">Title: </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4 mx-auto">
                <label for="desc" class="form-label">Description: </label>
                <input type="text" class="form-control" id="desc" name="desc">
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4">
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

@endsection