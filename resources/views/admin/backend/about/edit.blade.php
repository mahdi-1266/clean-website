@extends('admin.admin_master')
@section('adminBody')

<div class="container-fluid">
    <form action="{{ route('update.about') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-5">
            <div class="col-12">
                <h2>Edit About/h2>
            </div>
        </div>

        <div class="row mb-5">
            
            <div class="col-xl-4 col-xxl-4 col-lg-4 mx-auto">
                <input type="hidden" name="id" value="{{ $about->id }}">
                <label for="title">Title: </label>
                <input type="text" id="title" name="title" value="{{ $about->title }}" class="form-control">
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4 mx-auto">
                <label for="desc">Description: </label>
                <input type="text" id="desc" name="desc" value="{{ $about->title }}" class="form-control">
            </div>
            <div class="col-xl-4 col-xxl-4 col-lg-4">
                <label for="image">Photo: </label>
                <input type="file" id="image" name="image" class="form-control">
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