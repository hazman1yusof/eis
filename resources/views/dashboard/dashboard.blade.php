@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('stylesheet')
@endsection


@section('css')
@endsection


@section('content')
<section class="section">

  <div class="section-header">
    <h1>Dashboard</h1>
  </div>


  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h4>Bar Chart</h4>
        </div>
        <div class="card-body">
          <canvas id="myChart2" style="display: block; width: 732px; height: 266px;" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    
    <div class="col-lg-4">
      <div class="card gradient-bottom">
        <div class="card-header">
          <h4>Top 5 Products</h4>
          <div class="card-header-action dropdown">
            <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <li class="dropdown-title">Select Period</li>
              <li><a href="#" class="dropdown-item">Today</a></li>
              <li><a href="#" class="dropdown-item">Week</a></li>
              <li><a href="#" class="dropdown-item active">Month</a></li>
              <li><a href="#" class="dropdown-item">This Year</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body" id="top-5-scroll" tabindex="2" style="height: 315px; overflow: hidden; outline: none;">
          <ul class="list-unstyled list-unstyled-border">
            <li class="media">
              <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Sales</div></div>
                <div class="media-title">oPhone S9 Limited</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                    <div class="budget-price-label">$68,714</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                    <div class="budget-price-label">$38,700</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="../assets/img/products/product-4-50.png" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">67 Sales</div></div>
                <div class="media-title">iBook Pro 2018</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="84%" style="width: 84%;"></div>
                    <div class="budget-price-label">$107,133</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="60%" style="width: 60%;"></div>
                    <div class="budget-price-label">$91,455</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="../assets/img/products/product-1-50.png" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">63 Sales</div></div>
                <div class="media-title">Headphone Blitz</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="34%" style="width: 34%;"></div>
                    <div class="budget-price-label">$3,717</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="28%" style="width: 28%;"></div>
                    <div class="budget-price-label">$2,835</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">28 Sales</div></div>
                <div class="media-title">oPhone X Lite</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="45%" style="width: 45%;"></div>
                    <div class="budget-price-label">$13,972</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="30%" style="width: 30%;"></div>
                    <div class="budget-price-label">$9,660</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">19 Sales</div></div>
                <div class="media-title">Old Camera</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="35%" style="width: 35%;"></div>
                    <div class="budget-price-label">$7,391</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="28%" style="width: 28%;"></div>
                    <div class="budget-price-label">$5,472</div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="card-footer pt-3 d-flex justify-content-center">
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-primary" data-width="20" style="width: 20px;"></div>
            <div class="budget-price-label">Selling Price</div>
          </div>
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
            <div class="budget-price-label">Budget Price</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="card card-hero">
        <div class="card-header p-3">
          <div class="card-icon">
            <i class="fas fa-search-dollar"></i>
          </div>
          <h3>Revenues</h3>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tbody><tr>
                <th>DIVISION</th>
                <th>IN PATIENT</th>
                <th>OUT PATIENT</th>
              </tr>
              <tr>
                <th>INV-87239</th>
                <td>Kusnadi</td>
                <td>Unpaid</td>
              </tr>
              <tr>
                <th>INV-48574</th>
                <td>Hasan Basri</td>
                <td>Paid</td>
              </tr>
              <tr>
                <th>INV-76824</th>
                <td>Muhamad Nuruzzaki</td>
                <td>Unpaid</td>
              </tr>
              <tr>
                <th>INV-84990</th>
                <td>Agung Ardiansyah</td>
                <td>Unpaid</td>
              </tr>
              <tr>
                <th>INV-87320</th>
                <td>Ardian Rahardiansyah</td>
                <td>Paid</td>
              </tr>
            </tbody></table>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection

@section('scripts')
  <script src="{{asset('assets/js/page/modules-chartjs.js')}}"></script>
@endsection

@section('stylesheet')
@endsection
