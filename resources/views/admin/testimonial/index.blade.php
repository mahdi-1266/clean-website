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
                  <th class="border">Name</th>
                  <th class="border">Role</th>
                  <th class="border">Message</th>
                  <th class="border">Rating</th>
                  <th class="border">Photo</th>
                  <th class="borde">Action</th>
                </tr>
              </thead>

              @php
                $testimonials = App\Models\Testimonial::get();
              @endphp

              <tbody>
                @foreach ($testimonials as $testimonial)
                  <tr class="text-center">
                    <td class="border">{{ $testimonial->id }}</td>
                    <td class="border">{{ $testimonial->name }}</td>
                    <td class="border">{{ $testimonial->role }}</td>
                    <td class="border">{{ $testimonial->message }}</td>
                    <td class="border">{{ $testimonial->rating }}</td>
                    <td class="border"><img src="{{ asset($testimonial->image) }}" width="100px" height="50" alt=""></td>
                    <td class="border">
                      <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.testimonial', $testimonial->id) }}"><i class="ri-edit-line"></i></a>
                        <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.testimonial', $testimonial->id) }}"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <a href="{{ route('add.testimonial') }}" class="btn btn-primary mt-3">Add Testimonial</a>
        <!-- Table end -->

      </div>
    </div>
  </div>
@endsection