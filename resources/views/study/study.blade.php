@extends('layouts.admin-master')

@section('title')
Study
@endsection

@section('css')
.card-custom{
	background-color: #007bff !important;
	cursor: pointer;
	
}

.selected_card{
  background-color: #23797d !important;
}

.card-custom-normal{
	cursor: pointer;
	overflow-wrap: break-word !important;;
	word-wrap: break-word !important;;
	display: block !important;
}

._hidediv{
  display:none !important;  
}

._selected{
	background-color: #0095ff40 !important;
}

.card-custom h4{
	color: white !important;
}

.badge{
  background-color: rgba(255, 255, 255, 0.25);
  color: #fff;
  padding: 2px 12px;
  border-radius: 5px;
}

@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Patient Study @if (!empty($diagnosis)) - {{$diagnosis->Description}} @endif</h1>
  </div>

  <div id="formlink" data-formlink="{{url('/studyv2')}}">

  <div class="section-body">
    <!-- <a id="newdiagnosis" href="/diagnosis/{{$pat_mast->MRN}}" class="btn btn-primary float-right">Select  Diagnosis</a> -->
    <h2 class="section-title">
      {{$pat_mast->Name}} - MRN {{str_pad($pat_mast->MRN,7,"0",STR_PAD_LEFT)}}
      <button class="btn btn-icon btn-success" style="float: right;" tabindex="0" role="button" data-toggle="popover" data-trigger="hover" data-content="Add New Assessment"><i class="fas fa-plus"></i></button>
    </h2>
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-12">
        <div class="card">
          <div id="baseline" class="card-header card-custom selected_card">
            <h4>Baseline</h4>
          </div>
          <div class="card-header card-custom-normal baseline @if(empty($diagnosis)){{'_selected'}}@endif" data-description='diagnosis_select' id="tab_diagnosis_select">
              Diagnosis
          </div>

          <div class="card-header card-custom-normal baseline" data-description='biodata' id="tab_biodata">
              Biodata
          </div>

          @if(empty($diagnosis))
            <script type="text/javascript">
              var current_tab = 'tab_diagnosis_select'; 
              var current_div = 'div_diagnosis_select';
              var current_card = 'baseline';
            </script>
            @endif

          @if(!empty($diagnosis))

            <script type="text/javascript">
              var current_tab = 'tab_{{$asses_master[0]->description}}_0'; 
              var current_div = 'div_{{$asses_master[0]->description}}_0';
              var current_card = 'baseline';
            </script>

            @foreach ($asses_master as $asses_key => $asses_each)

              @if($asses_each->progress == 'Baseline')
              <div class="card-header card-custom-normal baseline _selected" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment Baseline
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='1st_Month' class="card-header card-custom">
              <h4>1st Month</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '1st Month')
              <div class="card-header card-custom-normal _hidediv 1st_Month" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 1st Month
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='3rd_Month' class="card-header card-custom">
              <h4>3rd Month</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '3rd Month')
              <div class="card-header card-custom-normal _hidediv 3rd_Month" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 3rd Month
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='6th_Month' class="card-header card-custom">
              <h4>6th Month</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '6th Month')
              <div class="card-header card-custom-normal _hidediv 6th_Month" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 6th Month
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='1_year' class="card-header card-custom">
              <h4>1 year</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '1 Year')
              <div class="card-header card-custom-normal _hidediv 1_year" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 1 Year
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='2_year' class="card-header card-custom">
              <h4>2 year</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '2 year')
              <div class="card-header card-custom-normal _hidediv 2_year" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 2 year
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='3_year' class="card-header card-custom">
              <h4>3 year</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '3 year')
              <div class="card-header card-custom-normal _hidediv 3_year" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 3 year
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

            <div id='4_year' class="card-header card-custom">
              <h4>4 year</h4>
            </div>

            @foreach ($asses_master as $asses_key => $asses_each)
              @if($asses_each->progress == '4 year')
              <div class="card-header card-custom-normal _hidediv 4_year" data-description='{{$asses_each->description}}_{{$asses_key}}' id="tab_{{$asses_each->description}}_{{$asses_key}}">
                Assessment - 4 year
                <div class="font-weight-500 text-muted text-small">{{$asses_each->regdate}}</div>
              </div>
              @endif
            @endforeach

          @endif
        </div>
      </div>


      <div class="col-md-9 col-lg-9 col-sm-12  @if(!empty($diagnosis)){{'_hidediv'}}@endif" data-description="diagnosis_select" id="div_diagnosis_select">
        <div class="card">
          <div class="card-header">
            <h4>Select Diagnosis</h4>
          </div>

          <div class="card-body">
            <form method="POST" action="{{url('/diagnosis')}}">
              {!! csrf_field() !!}
              <div class="form-group">
                <label>MRN</label>
                <input type="hidden" name="mrn" value="{{$pat_mast->MRN}}">
                <input type="text" name="mrn_dummy" class="form-control" value="{{str_pad($pat_mast->MRN,7,'0',STR_PAD_LEFT)}}" readonly="">
              </div>

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$pat_mast->Name}}" readonly="">
              </div>

              <div class="form-group">
                <label>Diagnosis</label>
                <select class="form-control" name="diagcode">
                  @foreach ($diagnosis_all as $diag)
                    <option value="{{$diag->diagcode}}">{{$diag->Description}}</option>
                  @endforeach
                </select>
              </div>
               <hr>
              <button type="submit" class="btn btn-primary">Select</button>
            </form>
          </div>

        </div>
      </div>

      <div class="col-md-9 col-lg-9 col-sm-12 _hidediv" data-description="biodata" id="div_biodata">
        <div class="card">
          <div class="card-header">
            <h4>Patient Biodata</h4>
          </div>

          <div class="card-body">
            <div class="row">
              <table class="table table-bordered table-md">
                <tbody>
                  <tr>
                    <th>Name</th>
                    <td>{{$pat_mast->Name}}</td>
                  </tr>
                  <tr>
                    <th>Episode</th>
                    <td>{{$pat_mast->Episno}}</td>
                  </tr>
                  <tr>
                    <th>Telephone</th>
                    <td>{{$pat_mast->telh}}</td>
                  </tr>
                  <tr>
                    <th>Handphone</th>
                    <td>{{$pat_mast->telhp}}</td>
                  </tr>
                  <tr>
                    <th>I/C</th>
                    <td>{{$pat_mast->Newic}}</td>
                  </tr>
                  <tr>
                    <th>DOB</th>
                    <td>{{$pat_mast->DOB}}</td>
                  </tr>
                  <tr>
                    <th>Sex</th>
                    <td>{{$pat_mast->Sex}}</td>
                  </tr>
                  <tr>
                    <th>Race</th>
                    <td>{{$pat_mast->RaceCode}}</td>
                  </tr>
                  <tr>
                    <th>Address</th>
                    <td>{{$pat_mast->Address1}}</td>
                  </tr>
                  <tr>
                    <th> </th>
                    <td colspan="2">{{$pat_mast->Address2}}</td>
                  </tr>
                  <tr>
                    <th> </th>
                    <td>{{$pat_mast->Address3}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>

      @if (!empty($gkcasses))
      
      <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        @foreach ($asses_master as $key => $visit)

          @component('study.'.$diagnosis->diagcode, ['pat_mast' => $pat_mast, 'mrn' => $pat_mast->MRN, 'key' => $key ,'visit' => $visit, 'rowdata' => $visit->rowdata])
          @endcomponent

        @endforeach

        <script type="text/javascript">
          var gkcasses_count = {{$key}}; 
        </script>
      @endif

    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/study.js') }}"></script>
<script src="{{ asset('assets/node_modules/izitoast/dist/js/iziToast.min.js') }}" type="text/javascript"></script>

@if (!empty($diagnosis))
  @if($diagnosis->diagcode == 'AVM')
    <script src="{{ asset('assets/js/AVM.js') }}"></script>
  @elseif ($diagnosis->diagcode == 'AcousticNeuroma')
    <script src="{{ asset('assets/js/AcousticNeuroma.js') }}"></script>
  @elseif ($diagnosis->diagcode == 'TN')
    <script src="{{ asset('assets/js/TN.js') }}"></script>
  @endif
@endif

@endsection

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/node_modules/izitoast/dist/css/iziToast.min.css') }}">
@endsection
