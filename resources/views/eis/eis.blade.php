@extends('layouts.admin-master')

@section('title')
EIS
@endsection

@section('stylesheet')
    <style id="plotly.js-style-global"></style>
    <link rel="stylesheet" type="text/css" href="https://pivottable.js.org/dist/pivot.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.css">
@endsection


@section('css')
  .form-check{
    padding-right:15px;
  }

  .pvtFilterBox{
      z-index: 120 !important;
  }
  .card-body{
      overflow-x: scroll !important;
  }
  .pvtHorizList li { display: inline-block !important; } 
@endsection


@section('content')
<section class="section">
  <div class="section-header">
    <h1>EIS - Episode Statistics</h1>
  </div>

  <div class="section-body" >
    <div class="card">
      <div class="card-body">

        <form class="form-inline">
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="dis" value="dis" checked>
              <label class="form-check-label" for="dis">
                Discharge
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="reg" value="reg">
              <label class="form-check-label" for="reg">
                Registration
              </label>
            </div>
          </div>
        </form>

        <div id="output"></div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')

    <script src="{{ asset('assets/js/eis.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-basic-latest.min.js"></script>
    <script src="https://pivottable.js.org/dist/pivot.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/c3_renderers.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/plotly_renderers.min.js"></script>
@endsection

@section('stylesheet')
@endsection
