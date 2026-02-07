@extends('admin.admin_master')
@section('adminBody')

<div class="container-fluid border">
    <form action="{{ route('update.about') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-5">
            <div class="col-12">
                <h2>Edit About</h2>
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-xl-6 col-xxl-6 col-lg-6 mx-auto">
                <input type="hidden" name="id" value="{{ $about->id }}">

                <label for="title">Title: </label>
                <input type="text" id="title" name="title" value="{{ $about->title }}" class="form-control">
            </div>

            <div class="col-xl-6 col-xxl-6 col-lg-6">
              <label for="image">Photo: </label>
              <input type="file" id="image" name="image" class="form-control">
            </div>


            <div class="col-xl-12 col-xxl-12 col-lg-12 mx-auto">
                <label for="desc">Description: </label>
                <textarea type="text" id="desc" name="desc" class="form-control" cols="30" rows="4">
                  {{ $about->desc }}
                </textarea>
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