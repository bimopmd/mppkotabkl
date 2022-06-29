@extends('layouts.master')
@section('title','MPP')
@push('css-custom')
<style>
    body{
        font-family: 'Nuninto';
    }
</style>
@endpush

@section('content')
        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
          <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
              <span class="breadcrumb-item active">{{ Breadcrumbs::render('dashboard') }}</span>
            </nav>
          </div>
        </div>
        <!-- END Breadcrumb -->
        <div class="content">
          <!-- Statistics -->
          <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
          <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
          <div class="content-heading">
            <div class="dropdown float-right">
              <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Today
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                <a class="dropdown-item active" href="javascript:void(0)">
                  <i class="fa fa-fw fa-calendar mr-5"></i>Today
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                </a>
              </div>
            </div>
            {{-- Statistics <small class="d-none d-sm-inline">Awesome!</small> --}}
          </div>
          <div class="row gutters-tiny">
            <!-- Earnings -->
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                  <div class="block-options">
                    <div class="block-options-item">
                      <i class="fa fa-users text-white-op"></i>
                    </div>
                  </div>
                  <div class="py-20 text-center">
                    <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{$jumlah_pegawai}}">{{$jumlah_pegawai}}</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Pegawai</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- END Earnings -->

            <!-- Orders -->
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-transparent bg-gd-dusk" href="be_pages_ecom_orders.html">
                <div class="block-content block-content-full block-sticky-options">
                  <div class="block-options">
                    <div class="block-options-item">
                      <i class="fa fa-archive text-white-op"></i>
                    </div>
                  </div>
                  <div class="py-20 text-center">
                    <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{$jumlah_instansi}}">{{$jumlah_instansi}}</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Instansi</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- END Orders -->

            <!-- New Customers -->
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                  <div class="block-options">
                    <div class="block-options-item">
                      <i class="fa fa-users text-white-op"></i>
                    </div>
                  </div>
                  <div class="py-20 text-center">
                    <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="15">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">New Customers</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- END New Customers -->

            <!-- Conversion Rate -->
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                  <div class="block-options">
                    <div class="block-options-item">
                      <i class="fa fa-cart-arrow-down text-white-op"></i>
                    </div>
                  </div>
                  <div class="py-20 text-center">
                    <div class="font-size-h2 font-w700 mb-0 text-white">5.6%</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Conversion</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- END Conversion Rate -->
          </div>
          <!-- END Statistics -->

          <!-- Latest Orders and Top Products -->
          <div class="row gutters-tiny">
            <!-- Latest Orders -->
            <div class="col-xl-6">
              <h2 class="content-heading">Latest Orders</h2>
              <div class="block block-rounded">
                <div class="block-content">
                  <table class="table table-borderless table-striped">
                    <thead>
                      <tr>
                        <th style="width: 100px;">ID</th>
                        <th>Status</th>
                        <th class="d-none d-sm-table-cell">Customer</th>
                        <th class="text-right">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1851</a>
                        </td>
                        <td>
                          <span class="badge badge-danger">Canceled</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Carl Wells</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$143</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1850</a>
                        </td>
                        <td>
                          <span class="badge badge-info">Processing</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Melissa Rice</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$898</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1849</a>
                        </td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Jose Wagner</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$502</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1848</a>
                        </td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Danielle Jones</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$381</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1847</a>
                        </td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Brian Cruz</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$978</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1846</a>
                        </td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Jose Parker</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$339</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1845</a>
                        </td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Barbara Scott</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$994</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1844</a>
                        </td>
                        <td>
                          <span class="badge badge-info">Processing</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Megan Fuller</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$344</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1843</a>
                        </td>
                        <td>
                          <span class="badge badge-danger">Canceled</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Jeffrey Shaw</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$654</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="font-w600" href="be_pages_ecom_order.html">ORD.1842</a>
                        </td>
                        <td>
                          <span class="badge badge-danger">Canceled</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <a href="be_pages_ecom_customer.html">Amanda Powell</a>
                        </td>
                        <td class="text-right">
                          <span class="text-black">$249</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END Latest Orders -->

            <!-- Top Products -->
            <div class="col-xl-6">
              <h2 class="content-heading">Top Products</h2>
              <div class="block block-rounded">
                <div class="block-content">
                  <table class="table table-borderless table-striped">
                    <thead>
                      <tr>
                        <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                        <th>Product</th>
                        <th class="text-center">Orders</th>
                        <th class="d-none d-sm-table-cell text-center">Rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.258</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">912</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.198</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Bioshock Collection</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">895</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.852</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Alien Isolation</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">820</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.741</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Bloodborne</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">793</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.985</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Forza Motorsport 7</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">782</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.056</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Fifa 18</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">776</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.036</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Gears of War 4</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">680</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.682</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Minecraft</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">670</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.478</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Dishonored 2</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">640</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell">
                          <a class="font-w600" href="be_pages_ecom_product_edit.html">PID.952</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Gran Turismo Sport</a>
                        </td>
                        <td class="text-center">
                          <a class="text-gray-dark" href="be_pages_ecom_orders.html">630</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END Top Products -->
          </div>
          <!-- END Latest Orders and Top Products -->
        </div>
@endsection
