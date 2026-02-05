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
                  <th class="border">Facebook Icon</th>
                  <th class="border">Instagram Icon</th>
                  <th class="border">Twitter Icon</th>
                  <th class="border">Linkedin Icon</th>
                  <th class="border">Photo</th>
                  <th class="borde">Action</th>
                </tr>
              </thead>

              @php
                $ourTeams = App\Models\OurTeam::get();
              @endphp

              <tbody>
                @foreach ($ourTeams as $ourTeam)
                  <tr class="text-center">
                    <td class="border">{{ $ourTeam->id }}</td>
                    <td class="border">{{ $ourTeam->name }}</td>
                    <td class="border">{{ $ourTeam->role }}</td>
                    <td class="border">{{ $ourTeam->facebook_link }}</td>
                    <td class="border">{{ $ourTeam->instagram_link }}</td>
                    <td class="border">{{ $ourTeam->twitter_link }}</td>
                    <td class="border">{{ $ourTeam->linkedin_link }}</td>
                    <td class="border"><img src="{{ asset($ourTeam->image) }}" width="100px" height="50" alt=""></td>
                    <td class="border">
                      <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.our-team', $ourTeam->id) }}"><i class="ri-edit-line"></i></a>
                        <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.our-team', $ourTeam->id) }}"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <a href="{{ route('add.our-team') }}" class="btn btn-primary mt-3">Add Team Member</a>
        <!-- Table end -->

        <!-- Pagination start -->
        <div class="mt-3">
          <ul class="pagination justify-content-start">
            <li class="page-item"><a href="#" class="page-link">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#" aria-current="page">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </div>
        <!-- Pagination end -->

      </div>
    </div>
  </div>
@endsection