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
                  <th class="border">Title</th>
                  <th class="border">Description</th>
                  <th class="border">Button</th>
                  <th class="border">Photo</th>
                  <th class="border">Action</th>
                </tr>
              </thead>

              @php
                $hero = App\Models\HeroSection::get();
              @endphp

              <tbody>
                @foreach ($hero as $hero)
                  <tr class="text-center">
                    <td class="border">{{ $hero->id }}</td>
                    <td class="border">{{ $hero->title }}</td>
                    <td class="border">{{ $hero->description }}</td>
                    <td class="border">{{ $hero->button }}</td>
                    <td class="border"><img src="{{ $hero->image}}" width="100" height="100" alt="Image"></td>
                    <td class="border">
                      <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-primary btn-sm btn-icon" href="{{ route('edit.hero.section', $hero->id) }}"><i class="ri-edit-line"></i></a>
                        <a class="btn btn-danger btn-sm btn-icon" href="{{ route('delete.hero.section', $hero->id) }}"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <a href="{{ route('add.hero.section') }}" class="btn btn-primary mt-3">Add Hero Section</a>
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