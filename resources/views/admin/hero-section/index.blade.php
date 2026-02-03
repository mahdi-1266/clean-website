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
                  <th class="border">Title</th>
                  <th class="border">Description</th>
                  <th class="border">Button</th>
                  <th class="border">Email</th>
                </tr>
              </thead>

              <tbody>
                <tr class="text-center">
                  <td class="border">Bring Back the Sparkle to Your Space</td>
                  <td class="border">From homes to offices, Cleanysphere delivers spotless results with eco-friendly cleaning you can trust. Enjoy a cleaner, healthier environment every day.</td>
                  <td class="border">Our Services</td>
                  <td class="border">photo</td>
                </tr>
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