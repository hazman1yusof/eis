@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('stylesheet')
@endsection

@section('header')

<script>
  var ip_month = [{{implode(",",$ip_month)}}];
  var op_month = [{{implode(",",$op_month)}}];
  var ip_month_epis = [{{implode(",",$ip_month_epis)}}];
  var op_month_epis = [{{implode(",",$op_month_epis)}}];
  var groupdesc_val_op = [{{implode(",",$groupdesc_val_op)}}];
  var groupdesc_val_ip = [{{implode(",",$groupdesc_val_ip)}}];
  var groupdesc_val = [{{implode(",",$groupdesc_val)}}];
  var pt_cnt = [{{$total_inpt}},{{$total_outpt}}];
  var pt_rev = [{{$total_rev_inpt}},{{$total_rev_outpt}}];
</script>
@endsection

@section('css')
  
  @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@100&display=swap');

  #totaltbl h3{
    font-family: 'Urbanist', sans-serif;
    font-weight: 550;
    font-size: 1em;
    margin: 0px;
  }

  #totaltbl small{
    font-weight: 700;
    color: #6777ef;
  }

  div.tp{
    overflow:hidden;
  }

  .blue{
    color:#47aeff;
    text-align:right;
  }
  .red{
    color:#f44336;
    text-align:right;
  }
  .table:not(.table-sm):not(.table-md):not(.dataTable) td, .table:not(.table-sm):not(.table-md):not(.dataTable) th {
    padding: 0 25px;
    height: 35px;
    vertical-align: middle;
  }
  .list-unstyled-border li {
    border-bottom: 1px solid #f9f9f9;
    /* padding-bottom: 15px; */
    margin-bottom: 5px;
  }
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    height: 80%;
    padding-right: 15px;
    padding-left: 15px;
}
@endsection

@section('content')

<section class="section col-12">

  <div class="row justify-content-center">

    <div class="col-5">
      <div class="card">
        <div class="card-header">
          <h4>Revenue By Services - <i>@if( !empty(request()->get('units'))){{request()->get('units')}}@else{{'UKMSC'}}@endif</i></h4>
        </div>
        <div class="card-body col5">
          <canvas id="myChart2" style="display: block; width: 732px; height: 420px;" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
    </div>

    <div class="col-5">
      <div class="card">
        <div class="card-header">
          <h4>Patient Statistics - <i>@if( !empty(request()->get('units'))){{request()->get('units')}}@else{{'UKMSC'}}@endif</i></h4>
        </div>
        <div class="card-body">
          <canvas id="myChart3" style="display: block; width: 732px; height: 420px;" class="chartjs-render-monitor"></canvas>
        </div>
        <!-- 
            <canvas id="myChart4" style="display: block; width: 132px; height: 55px;" class="chartjs-render-monitor"></canvas> -->
      </div>
    </div>

    <div class="col-2 col2">
      <div class="card">
        <div class="card-header">
          <h4>Year {{$year}}</h4>
        </div>
          <div class="table-responsive table-invoice tp">
            <table class="table table-striped" id="totaltbl">
              <tbody>
              <tr>
                <td><small>Total Patient</small><h3 id="total_pt">{{$total_pt}}</h3>
                </td>
              </tr>
              <tr>
                <td><small>Total In-Patient</small><h3 id="total_inpt">{{$total_inpt}}</h3></td>
              </tr>
              <tr>
                <td><small>Total Out-Patient</small><h3 id="total_outpt">{{$total_outpt}}</h3></td>
              </tr>
              <tr>
                <td><small>Total IP Revenue</small><h3 id="total_rev">{{$total_rev_inpt}}</h3></td>
              </tr>
              <tr>
                <td><small>Total OP Revenue</small><h3 id="total_rev">{{$total_rev_outpt}}</h3></td>
              </tr>
              <tr style="padding: 10px;">
                <td><small>Total Patient (IP vs OP)</small><h3 id="total_rev">
                  <canvas id="myChart4" style="display: block; width: 132px; height: 55px;" class="chartjs-render-monitor"></canvas>
                </td>
              </tr>
              <tr style="padding: 10px;">
                <td><small>Total Revenue (IP vs OP)</small><h3 id="total_rev">
                  <canvas id="myChart5" style="display: block; width: 132px; height: 55px;" class="chartjs-render-monitor"></canvas>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        <div class="card-footer pt-3 d-flex justify-content-center">
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-primary" data-width="20" style="width: 20px;"></div>
            <div class="budget-price-label">IN PATIENT</div>
          </div>
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
            <div class="budget-price-label">OUT PATIENT</div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card card-hero">
        <!-- <div class="card-header p-3">
          <div class="card-icon">
            <i class="fas fa-search-dollar"></i>
          </div>
          <h3>Revenues</h3>
        </div> -->
        <div class="card-body niceScroll btm" style="height: 315px; overflow: hidden; outline: none;">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tbody>
              <tr>
                <th>GROUP ( <i>@if( !empty(request()->get('units'))){{request()->get('units')}}@else{{'UKMSC'}}@endif</i> )</th>
                <th class="blue">IN PATIENT COUNT</th>
                <th class="red">OUT PATIENT COUNT</th>
                <th class="blue">IN PATIENT (RM)</th>
                <th class="red">OUT PATIENT (RM)</th>
                <th>TOTAL (RM)</th>
              </tr>
              @foreach ($groupdesc as $index => $_groupdesc)
                <tr>
                  <th>{{ $_groupdesc }}</th>
                  <th class="blue">{{ number_format($groupdesc_cnt_ip[$index]) }}</th>
                  <th class="red">{{ number_format($groupdesc_cnt_op[$index]) }}</th>
                  <th class="blue">{{ number_format($groupdesc_val_ip[$index],2) }}</th>
                  <th class="red">{{ number_format($groupdesc_val_op[$index],2) }}</th>
                  <th style="text-align:right;">{{ number_format($groupdesc_val[$index],2) }}</th>
                </tr>
              @endforeach
            </tbody></table>
          </div>
        </div>
        <div class="card-footer pt-3 d-flex justify-content-center">
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-primary" data-width="20" style="width: 20px;"></div>
            <div class="budget-price-label">IN PATIENT</div>
          </div>
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
            <div class="budget-price-label">OUT PATIENT</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection

@section('stylesheet')
@endsection
