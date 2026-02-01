@extends('admin.admin_master')
@section('adminBody')
<div class="app-body">
  <div class="container-fluid p-0">

    <!-- Row start -->
    <div class="row gx-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title">Orders</h5>
          </div>
          <div class="card-body">

            <!-- Row starts -->
            <div class="row gy-4">
              <!-- Overall Sales -->
              <div class="col-6 col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box lg bg-primary rounded-3">
                        <i class="ri-shopping-bag-2-line fs-4"></i>
                      </div>
                      <div>
                        <p class="m-0 text-muted">Overall Sales</p>
                        <h3 class="m-0 fw-bold">6,890</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Customers -->
              <div class="col-6 col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box lg bg-success rounded-3">
                        <i class="ri-user-2-line fs-4"></i>
                      </div>
                      <div>
                        <p class="m-0 text-muted">Total Customers</p>
                        <h3 class="m-0 fw-bold">2,368</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Products -->
              <div class="col-6 col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box lg bg-primary rounded-3">
                        <i class="ri-box-2-line fs-4"></i>
                      </div>
                      <div>
                        <p class="m-0 text-muted">New Products</p>
                        <h3 class="m-0 fw-bold">549</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Revenue -->
              <div class="col-6 col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box lg bg-success rounded-3">
                        <i class="ri-bar-chart-box-line fs-4"></i>
                      </div>
                      <div>
                        <p class="m-0 text-muted">Total Revenue</p>
                        <h3 class="m-0 fw-bold">$8.8M</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Graph starts -->
            <div class="overflow-hidden mt-4">
              <div id="orders"></div>
            </div>
            <!-- Graph ends -->

          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->
  </div>
</div>
@endsection