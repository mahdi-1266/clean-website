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

              <!-- Row start -->
              <div class="row">
                <div class="col-xxl-4 col-sm-12">

                  <!-- Row start -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card mb-4">
                        <div class="card-body card-height">
                          <h5 class="card-title mb-1">Sales</h5>
                          <h6 class="small fw-normal text-orange"><i class="ri-circle-fill small"></i>
                            Current Month
                          </h6>
                          <div class="overflow-hidden">
                            <div id="sparkline1"></div>
                          </div>
                          <h3 class="mt-2 mb-1">632k</h3>
                          <div class="badge bg-orange-subtle text-orange rounded-1">+23% Higher</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card mb-4">
                        <div class="card-body card-height">
                          <h5 class="card-title mb-1">$98.6K</h5>
                          <h6 class="small fw-normal text-success"><i class="ri-circle-fill small"></i>
                            Overall Revenue
                          </h6>
                          <div class="overflow-hidden">
                            <div id="sparkline2"></div>
                          </div>
                          <h3 class="mt-2 mb-1">328k</h3>
                          <div class="badge bg-success-subtle text-success rounded-1">+48% Higher</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="card mb-4">
                        <div class="card-body card-height">
                          <h5>Generated Leads</h5>
                          <h6 class="small fw-normal text-muted">Weekly Report</h6>
                          <div class="overflow-hidden">
                            <div id="sparkline3"></div>
                          </div>
                          <div class="d-flex align-items-center gap-3 mt-3">
                            <div class="icon-box md bg-primary-6 rounded-5">
                              <i class="ri-user-add-line fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                              <div>
                                <p class="text-muted small mb-1">Total Leads</p>
                                <h4 class="m-0">987</h4>
                                <span class="badge bg-success-subtle text-success rounded-1 mt-1">+18% This Week</span>
                              </div>
                              <div class="text-end">
                                <p class="text-muted small mb-1">Converted</p>
                                <h4 class="m-0">486</h4>
                                <span class="badge bg-danger-subtle text-danger rounded-1 mt-1">+0.8%</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->

                </div>
                <div class="col-xxl-8 col-sm-12">
                  <div class="card mb-4">
                    <div class="card-body card-505">
                      <h5 class="card-title mb-1">Weekly Income</h5>
                      <h6 class="small fw-normal text-muted">Highest income generated on Friday.</h6>

                      <!-- Row starts -->
                      <div class="row gx-4">
                        <div class="col-xxl-7 col-sm-12">
                          <div class="overflow-hidden">
                            <div id="income"></div>
                          </div>
                        </div>
                        <div class="col-xxl-5 col-sm-12">
                          <ul class="m-0 mt-4 border custom-shadow p-3 rounded-2 d-grid gap-4">
                            <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                <div class="icon-box md bg-primary-subtle text-primary rounded-5">
                                  <i class="ri-shopping-cart-2-line fs-4"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                  <div>
                                    <p class="text-muted small mb-1">Total Sales</p>
                                    <h5 class="m-0">8,000</h5>
                                  </div>
                                  <div class="text-end">
                                    <h5 class="mb-1">325</h5>
                                    <p class="d-flex gap-1 text-danger small m-0 fw-semibold">
                                      <i class="ri-arrow-down-s-line"></i>
                                      30.9%
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                <div class="icon-box md bg-success-subtle text-success rounded-5">
                                  <i class="ri-money-dollar-circle-line fs-4 text-success"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                  <div>
                                    <p class="text-muted small mb-1">Revenue</p>
                                    <h5 class="m-0">$6,200</h5>
                                  </div>
                                  <div class="text-end">
                                    <h5 class="mb-1">+$980</h5>
                                    <p class="d-flex gap-1 text-success small m-0 fw-semibold"><i
                                        class="ri-arrow-up-s-line"></i>
                                      56.2%</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                <div class="icon-box md bg-info-subtle text-info rounded-5">
                                  <i class="ri-gift-line fs-4 text-info"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                  <div>
                                    <p class="text-muted small mb-1">Products</p>
                                    <h5 class="m-0">1,250</h5>
                                  </div>
                                  <div class="text-end">
                                    <h5 class="mb-1">+46</h5>
                                    <p class="d-flex gap-1 text-success small m-0 fw-semibold">
                                      <i class="ri-arrow-up-s-line"></i>
                                      28.8%
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                <div class="icon-box md bg-danger-subtle text-danger rounded-5">
                                  <i class="ri-advertisement-line fs-4 text-danger"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                  <div>
                                    <p class="text-muted small mb-1">Ads Spent</p>
                                    <h5 class="m-0">$380</h5>
                                  </div>
                                  <div class="text-end">
                                    <h5 class="mb-1">-60</h5>
                                    <p class="d-flex gap-1 text-danger small m-0 fw-semibold">
                                      <i class="ri-arrow-down-s-line"></i> 49.3%
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="d-flex align-items-center gap-3">
                                <div class="icon-box md bg-warning-subtle text-warning rounded-5">
                                  <i class="ri-wallet-3-line fs-4 text-warning"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                  <div>
                                    <p class="text-muted small mb-1">Expenses</p>
                                    <h5 class="m-0">$900</h5>
                                  </div>
                                  <div class="text-end">
                                    <h5 class="mb-1">+498</h5>
                                    <p class="d-flex gap-1 text-success small m-0 fw-semibold">
                                      <i class="ri-arrow-up-s-line"></i> 3.9%
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- Row ends -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row starts -->
              <div class="row">
                <div class="col-xxl-4 col-sm-6 col-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Top Selling Products</h5>
                    </div>
                    <div class="card-body">

                      <!-- List start -->
                      <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/products/product1.jpg" alt="Softism UI Design System"
                              class="rounded-2 img-3x">
                            <div>
                              <div class="fw-semibold">iPhone 14 Pro</div>
                              <div class="small text-muted">Smartphone</div>
                            </div>
                          </div>
                          <div class="text-end">
                            <div class="fw-semibold">$1,099</div>
                            <div class="small text-success">2,300 sold</div>
                          </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/products/product2.jpg" alt="Softism UI Design System"
                              class="rounded-2 img-3x">
                            <div>
                              <div class="fw-semibold">MacBook Air M2</div>
                              <div class="small text-muted">Laptop</div>
                            </div>
                          </div>
                          <div class="text-end">
                            <div class="fw-semibold">$1,299</div>
                            <div class="small text-success">1,850 sold</div>
                          </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/products/product3.jpg" alt="Softism UI Design System"
                              class="rounded-2 img-3x">
                            <div>
                              <div class="fw-semibold">Apple Watch Series 8</div>
                              <div class="small text-muted">Smartwatch</div>
                            </div>
                          </div>
                          <div class="text-end">
                            <div class="fw-semibold">$399</div>
                            <div class="small text-success">1,500 sold</div>
                          </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/products/product4.jpg" alt="Softism UI Design System"
                              class="rounded-2 img-3x">
                            <div>
                              <div class="fw-semibold">AirPods Pro 2</div>
                              <div class="small text-muted">Earbuds</div>
                            </div>
                          </div>
                          <div class="text-end">
                            <div class="fw-semibold">$249</div>
                            <div class="small text-success">1,200 sold</div>
                          </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/products/product5.jpg" alt="Softism UI Design System"
                              class="rounded-2 img-3x">
                            <div>
                              <div class="fw-semibold">iPad Air</div>
                              <div class="small text-muted">Tablet</div>
                            </div>
                          </div>
                          <div class="text-end">
                            <div class="fw-semibold">$599</div>
                            <div class="small text-success">950 sold</div>
                          </div>
                        </li>
                      </ul>
                      <!-- List end -->

                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Sales Over Time</h5>
                    </div>
                    <div class="card-body">

                      <!-- Sales over time chart start -->
                      <div class="overflow-hidden">
                        <div id="salesOverTimeChart"></div>
                      </div>
                      <!-- Sales over time chart end -->

                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-sm-6 col-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Low Stock Alerts</h5>
                    </div>
                    <div class="card-body">

                      <!-- Low stock items start -->
                      <div class="d-flex flex-column gap-3">
                        <div class="border border-danger d-flex align-items-center p-3 rounded-3 custom-shadow">
                          <div class="icon-box md rounded-5 me-3 text-danger">
                            <i class="ri-battery-low-line fs-4"></i>
                          </div>
                          <div class="d-flex flex-column align-items-start gap-2 flex-grow-1">
                            <div class="fw-semibold text-danger">Apple Watch Series 8</div>
                            <div class="small text-muted">Smartwatch</div>
                            <span class="badge bg-danger-subtle text-danger">12 left in stock</span>
                          </div>
                        </div>
                        <div class="border border-primary d-flex align-items-center p-3 rounded-3 custom-shadow">
                          <div class="icon-box md rounded-5 me-3 text-primary">
                            <i class="ri-battery-low-line fs-4"></i>
                          </div>
                          <div class="d-flex flex-column align-items-start gap-2 flex-grow-1">
                            <div class="fw-semibold text-primary">AirPods Pro 2</div>
                            <div class="small text-muted">Earbuds</div>
                            <span class="badge bg-primary-subtle text-primary">5 left in stock</span>
                          </div>
                        </div>
                      </div>
                      <!-- Low stock items end -->

                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">New Products Added</h5>
                    </div>
                    <div class="card-body">

                      <!-- New products start -->
                      <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center gap-3">
                          <img src="assets/images/products/product8.jpg" alt="Softism UI Design System"
                            class="rounded-2 img-3x">
                          <div>
                            <div class="fw-semibold">HomePod Mini</div>
                            <div class="small text-muted">Speaker</div>
                          </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center gap-3">
                          <img src="assets/images/products/product9.jpg" alt="Softism UI Design System"
                            class="rounded-2 img-3x">
                          <div>
                            <div class="fw-semibold">Apple Pencil 2</div>
                            <div class="small text-muted">Accessory</div>
                          </div>
                        </li>
                      </ul>
                      <!-- New products end -->

                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Revenue by Category</h5>
                    </div>
                    <div class="card-body">

                      <!-- Revenue by category chart start -->
                      <div class="overflow-hidden">
                        <div id="RevenueByCategory"></div>
                      </div>
                      <!-- Revenue by category chart end -->

                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-sm-12 col-12">

                  <!-- Row start -->
                  <div class="row gx-4">
                    <div class="col-sm-12 col-12">
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="card-title">Out of Stock Items</h5>
                        </div>
                        <div class="card-body">

                          <!-- Out of stock items start -->
                          <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center gap-3">
                                <img src="assets/images/products/product6.jpg" alt="Softism UI Design System"
                                  class="rounded-2 img-3x">
                                <div>
                                  <div class="fw-semibold">Mac Mini M1</div>
                                  <div class="small text-muted">Desktop</div>
                                </div>
                              </div>
                              <span class="badge bg-danger-subtle text-danger">Out of Stock</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center gap-3">
                                <img src="assets/images/products/product7.jpg" alt="Softism UI Design System"
                                  class="rounded-2 img-3x">
                                <div>
                                  <div class="fw-semibold">Magic Keyboard</div>
                                  <div class="small text-muted">Accessory</div>
                                </div>
                              </div>
                              <span class="badge bg-danger-subtle text-danger">Out of Stock</span>
                            </li>
                          </ul>
                          <!-- Out of stock items end -->

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-12">
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="card-title">Inventory Status</h5>
                        </div>
                        <div class="card-body">

                          <!-- Inventory status start -->
                          <div class="d-flex flex-column align-items-center">
                            <div class="icon-box lg bg-info-subtle text-info rounded-5 mb-3">
                              <i class="ri-archive-2-line fs-2"></i>
                            </div>
                            <h4 class="mb-1">Total Inventory</h4>
                            <h2 class="fw-bold mb-2">5,200</h2>
                            <span class="badge bg-success-subtle text-success mb-2">Stable</span>
                            <p class="text-muted small mb-0 text-center">Inventory levels are healthy and stable.</p>
                          </div>
                          <!-- Inventory status end -->

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-12">
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="card-title">Email Campaign CTR</h5>
                        </div>
                        <div class="card-body">

                          <!-- Email campaign chart start -->
                          <div class="overflow-hidden">
                            <div id="emailCampaign"></div>
                          </div>
                          <!-- Email campaign chart end -->

                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->

                </div>
              </div>
              <!-- Row ends -->

            </div>
            </div>
@endsection