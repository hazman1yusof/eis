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

@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Patient Study @if (!empty($gkcasses)) - {{$diagnosis->Description}} @endif</h1>

  </div>

  <div class="section-body">
    <!-- <a id="newdiagnosis" href="/diagnosis/{{$pat_mast->MRN}}" class="btn btn-primary float-right">Select  Diagnosis</a> -->
    <h2 class="section-title col-8">
      {{$pat_mast->Name}} - MRN {{str_pad($pat_mast->MRN,7,"0",STR_PAD_LEFT)}}
    </h2>
           
    <div class="row">
      <div class="col-3">
        <div class="card">
          <div id="baseline" class="card-header card-custom selected_card">
            <h4>Baseline</h4>
          </div>
          <div class="card-header card-custom-normal baseline @if(empty($gkcasses)){{'_selected'}}@endif" data-description='diagnosis_select' id="tab_diagnosis_select">
              Diagnosis
          </div>

          <div class="card-header card-custom-normal baseline" data-description='biodata' id="tab_biodata">
              Biodata
          </div>

          @if(empty($gkcasses))
            <script type="text/javascript">
              var current_tab = 'tab_diagnosis_select'; 
              var current_div = 'div_diagnosis_select';
              var current_card = 'baseline';
            </script>
            @endif

          @if (!empty($gkcasses))

            <?php
              if(empty($_GET['description'])){
                $desc_get = $asses_cat[0]->description;
              }else{
                $desc_get = $_GET['description'];
              }
            ?>

            @foreach ($asses_cat as $key => $gkc)

              @if($desc_get==$gkc->description)
              <script type="text/javascript">
                var current_tab = 'tab_{{$gkc->description}}'; 
                var current_div = 'div_{{$gkc->description}}';
                var current_card = 'baseline';
              </script>
              @endif

              @if($gkc->progress == 'Baseline')
              <div class="card-header card-custom-normal baseline @if($desc_get==$gkc->description){{'_selected'}}@endif" data-description='{{$gkc->description}}' id="tab_{{$gkc->description}}">
                {{$gkc->description}}
              </div>
              @endif
            @endforeach

            <div id='1st_Month' class="card-header card-custom">
              <h4>1st Month</h4>
            </div>

            @foreach ($asses_cat as $gkc)
              @if($gkc->progress == '1st Month')
              <div class="card-header card-custom-normal _hidediv 1st_Month @if($desc_get==$gkc->description){{'_selected'}}@endif" data-description='{{$gkc->description}}' id="tab_{{$gkc->description}}">
                {{$gkc->description}}
              </div>
              @endif
            @endforeach

            <div id='3rd_Month' class="card-header card-custom">
              <h4>3rd Month</h4>
            </div>

            @foreach ($asses_cat as $gkc)
              @if($gkc->progress == '3rd Month')
              <div class="card-header card-custom-normal _hidediv 3rd_Month @if($desc_get==$gkc->description){{'_selected'}}@endif" data-description='{{$gkc->description}}' id="tab_{{$gkc->description}}">
                {{$gkc->description}}
              </div>
              @endif
            @endforeach

          @endif

          <div id='6th_Month' class="card-header card-custom">
            <h4>6th Month</h4>
          </div>

          <div id='1_year' class="card-header card-custom">
            <h4>1 year</h4>
          </div>

          <div id='2_year' class="card-header card-custom">
            <h4>2 year</h4>
          </div>

          <div id='3_year' class="card-header card-custom">
            <h4>3 year</h4>
          </div>

          <div id='4_year' class="card-header card-custom">
            <h4>4 year</h4>
          </div>
        </div>
      </div>


      <div class="col-9 div_normal  @if(!empty($gkcasses)){{'_hidediv'}}@endif" data-description="diagnosis_select" id="div_diagnosis_select">
        <div class="card">
          <div class="card-header">
            <h4>Select Diagnosis</h4>
          </div>

          <div class="card-body">
            <form method="POST" action="/diagnosis">
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

      <div class="col-9 div_normal _hidediv" data-description="biodata" id="div_biodata">
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
        @foreach ($asses_cat as $key => $gkc_cat)
            <div class="col-9 div_normal  @if($desc_get!=$gkc_cat->description){{'_hidediv'}}@endif" data-description="{{$gkc_cat->description}}" id="div_{{$gkc_cat->description}}">

              <div class="card">
                <div class="card-header">
                  <h4>{{$gkc_cat->description}}</h4>
                </div>
                <div class="card-body">
                  <div id="form_{{$gkc_cat->description}}" action="/study" method="POST">
                    @csrf
                    <input type="hidden" name="mrn" value="{{$pat_mast->MRN}}">
                    <input type="hidden" name="diagcode" value="{{$diagnosis->diagcode}}">
                    <input type="hidden" name="description" value="{{$gkc_cat->description}}">
                    @foreach ($gkcasses as $gkc)
                      @if($gkc->description == $gkc_cat->description)
                      <div class="row">

                        <div class="col-form-label col-4">
                          {{$gkc->questionnaire}}
                        </div>
                          <?php
                            $use_array = [];
                            $use_ans_array = [];
                            $use_format = '';
                            $cb_array = [];$tf_array=[];$op_array=[];$dd_array=[];$ta_array=[];

                            foreach ($patgkcasses as $key => $value) {
                              // echo $value->questionnaire == $gkc->questionnaire;
                              if($value->questionnaire == $gkc->questionnaire && $value->description == $gkc->description){
                                $patgkc_row = $value;
                              }
                            }

                            if(!empty($gkc->cb1)){
                              $cb_array = [$gkc->cb1,$gkc->cb2,$gkc->cb3,$gkc->cb4,$gkc->cb5,$gkc->cb6,$gkc->cb7,$gkc->cb8];
                              $use_format = 'cb';
                              $use_array = $cb_array;
                              $use_ans_array = [$patgkc_row->cb1,$patgkc_row->cb2,$patgkc_row->cb3,$patgkc_row->cb4,$patgkc_row->cb5,$patgkc_row->cb6,$patgkc_row->cb7,$patgkc_row->cb8];
                            }elseif (!empty($gkc->tf1)) {
                              $tf_array = [$gkc->tf1,$gkc->tf2,$gkc->tf3,$gkc->tf4,$gkc->tf5,$gkc->tf6,$gkc->tf7,$gkc->tf8];
                              $use_format = 'tf';
                              $use_array = $tf_array;
                              $use_ans_array = [$patgkc_row->tf1,$patgkc_row->tf2,$patgkc_row->tf3,$patgkc_row->tf4,$patgkc_row->tf5,$patgkc_row->tf6,$patgkc_row->tf7,$patgkc_row->tf8];
                            }elseif (!empty($gkc->op1)) {
                              $op_array = [$gkc->op1,$gkc->op2,$gkc->op3,$gkc->op4,$gkc->op5,$gkc->op6,$gkc->op7,$gkc->op8];
                              $use_format = 'op';
                              $use_array = $op_array;

                              $use_ans_array = [$patgkc_row->op1,$patgkc_row->op2,$patgkc_row->op3,$patgkc_row->op4,$patgkc_row->op5,$patgkc_row->op6,$patgkc_row->op7,$patgkc_row->op8];
                            }elseif (!empty($gkc->dd1)) {
                              $dd_array = [$gkc->dd1,$gkc->dd2,$gkc->dd3,$gkc->dd4];
                              $use_format = 'dd';
                              $use_array = $dd_array;
                              $use_ans_array = [$patgkc_row->dd1,$patgkc_row->dd2,$patgkc_row->dd3,$patgkc_row->dd4];
                            }elseif (!empty($gkc->ta1)) {
                              $ta_array = [$gkc->ta1,$gkc->ta2,$gkc->ta3,$gkc->ta4];
                              $use_format = 'ta';
                              $use_array = $ta_array;
                              $use_ans_array = [$patgkc_row->ta1,$patgkc_row->ta2,$patgkc_row->ta3,$patgkc_row->ta4];
                            }


                          ?>
                        <!-- _{{$key}} v1 ada tambah ni dkt name -->
                        <div class="col-8">
                          @if($use_format == 'cb')
                            @foreach($use_array as $key => $question)
                            @if(!empty($question))
                            <div class="form-check">
                                <input 
                                  class="form-check-input" 
                                  type="checkbox" 
                                  name="{{$gkc->questionnaire}}" 
                                  id="{{$gkc_cat->description}}_{{$gkc->questionnaire}}_{{$key}}" 
                                  value="cb{{$key+1}}" 
                                  data-format='cb'
                                  data-mrn="{{$pat_mast->MRN}}"
                                  data-diagcode="{{$diagnosis->diagcode}}"
                                  data-description="{{$gkc_cat->description}}"
                                  data-question="{{$gkc->questionnaire}}" 
                                  @if($use_ans_array[$key] == 'true') checked  @endif
                                >
                                <label class="form-check-label" for="{{$gkc_cat->description}}_{{$gkc->questionnaire}}_{{$key}}">
                                {{$question}}
                                </label>
                            </div>
                            @endif
                            @endforeach
                          @endif

                          @if($use_format == 'tf')
                            @foreach($use_array as $key => $question)
                            @if(!empty($question))
                            <div class="form-group">
                                <input 
                                  class="form-control" 
                                  type="text"  
                                  name="{{$gkc->questionnaire}}" 
                                  id="{{$gkc_cat->description}}_{{$gkc->questionnaire}}_{{$key}}" 
                                  value="{{$use_ans_array[0]}}"
                                  data-format='tf'
                                  data-mrn="{{$pat_mast->MRN}}"
                                  data-diagcode="{{$diagnosis->diagcode}}"
                                  data-description="{{$gkc_cat->description}}"
                                >
                            </div>
                            @endif
                            @endforeach
                          @endif

                          @if($use_format == 'op')
                            @foreach($use_array as $key => $question)
                            @if(!empty($question))
                            <div class="form-check">
                                <input 
                                  class="form-check-input" 
                                  type="radio" 
                                  name="{{$gkc->questionnaire}}" 
                                  id="{{$gkc_cat->description}}_{{$gkc->questionnaire}}_{{$key}}" 
                                  value="op{{$key+1}}" 
                                  data-format='op'
                                  data-mrn="{{$pat_mast->MRN}}"
                                  data-diagcode="{{$diagnosis->diagcode}}"
                                  data-description="{{$gkc_cat->description}}"
                                  @if($use_ans_array[$key] == 'true') checked  @endif
                                >
                                <label class="form-check-label" for="{{$gkc_cat->description}}_{{$gkc->questionnaire}}_{{$key}}">
                                {{$question}}
                                </label>
                            </div>
                            @endif
                            @endforeach
                          @endif

                         @if($use_format == 'dd')
                          <div class="form-group">
                            <select 
                              class="form-control" 
                              name="{{$gkc->questionnaire}}" 
                              id="{{$gkc_cat->description}}_{{$gkc->questionnaire}}"
                              data-format='dd'
                              data-mrn="{{$pat_mast->MRN}}"
                              data-diagcode="{{$diagnosis->diagcode}}"
                              data-description="{{$gkc_cat->description}}"
                            >
                              @foreach($use_array as $key => $question)
                                @if(!empty($question))
                                <option value="dd{{$key+1}}"  @if($use_ans_array[$key] == 'true') selected  @endif>{{$question}}</option>
                                @endif
                              @endforeach
                            </select>
                          </div>
                          @endif

                          @if($use_format == 'ta')
                            @foreach($use_array as $key => $question)
                              @if(!empty($question))
                              <div class="form-group">
                                <textarea 
                                  class="form-control" 
                                  name="{{$gkc->questionnaire}}" 
                                  id="{{$gkc_cat->description}}_{{$gkc->questionnaire}}_{{$key}}" 
                                  style="height: 80px"
                                  data-format='ta'
                                  data-mrn="{{$pat_mast->MRN}}"
                                  data-diagcode="{{$diagnosis->diagcode}}"
                                  data-description="{{$gkc_cat->description}}"
                                >{{$use_ans_array[0]}}</textarea>
                              </div>
                              @endif
                            @endforeach
                          @endif
                        </div>

                      </div>
                      <hr>
                      @endif
                    @endforeach
                  </div>
                </div>
              </div>
            
            </div>

        @endforeach

      @endif

    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/study.js') }}"></script>
<script src="{{ asset('assets/node_modules/izitoast/dist/js/iziToast.min.js') }}" type="text/javascript"></script>
@endsection


@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/node_modules/izitoast/dist/css/iziToast.min.css') }}">
@endsection
