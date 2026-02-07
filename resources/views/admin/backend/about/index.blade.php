@extends('admin.admin_master')
@section('adminBody')

<div class="col-sm-12">
    <div class="card mb-4">
        @if (!$about)
            <div>
                <a href="{{ route('add.about') }}" class="btn btn-primary mb-2" style="float:right;">Add About</a>
            </div>
        @endif
        <div class="card-body">

            <!-- Table start -->
            <div class="table-outer">
            <div class="table-responsive">
                <table class="table m-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$about)
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-center">No Data</td>
                        </tr>
                    @else
                      <tr>
                        <td>{{ $about->title }}</td>
                        <td>{{ $about->desc }}</td>
                        <td>
                            <img src="{{ asset($about->image) }}" alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                          <div class="d-flex gap-2">
                            <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.about', $about->id) }}"><i class="ri-edit-line"></i></a>
                          </div>
                        </td>
                      </tr>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
            <!-- Table end -->
        </div>
    </div>
</div>

@endsection