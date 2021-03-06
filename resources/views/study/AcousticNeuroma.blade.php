<div data-description="Assessment_Acoustic_Neuroma" id="div_Assessment_Acoustic_Neuroma_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">

    <div class="card-header"><div class="row">
      <div class="col-12">
          <h4>Acoustic Neuroma {{$key+1}} </h4>
      </div>
      <div class="col-12">
        <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Visit Date:</b> <span id="regdate-span-{{$key}}">{{$visit->regdate}}</span>
              <div class="form-row">
                <input type="date" class="form-control col-md-6 regdate-date-{{$key}}"
                    value="{{$visit->regdate2}}"  
                    name="regdate" 
                    data-diagcode="AcousticNeuroma" 
                    data-pm_idno="{{$pm_idno}}"
                    data-key="{{$key}}"
                    data-progress="{{$visit->progress}}"
                >
              </div>
          </div>
      </div>

      <div class="col-12">
          <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Status:</b> <span id="completed-span-{{$key}}">{{$visit->completed}}</span>
              <div class="form-row">
                  <button type="button" class="btn btn-icon btn-success col-md-3 completed-save"
                      data-value='true'
                      data-diagcode="AcousticNeuroma" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      completed <i class="fas fa-check"></i>
                  </button>
                  &nbsp;
                  <button type="button" class="btn btn-icon btn-danger col-md-3 completed-save"
                      data-value='false'
                      data-diagcode="AcousticNeuroma" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      uncompleted <i class="fas fa-times"></i>
                  </button>
              </div>
          </div>
          <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </div>
    </div></div>

    <div class="card-body">
      <div id="form_Assessment_Meningioma" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="pm_idno" value="1"> 
        <input type="hidden" name_="diagcode" value="AcousticNeuroma"> 
        <input type="hidden" name_="description" value="Assessment_Acoustic_Neuroma"> 

        <div class="row">
          <div class="col-form-label col-4">Type</div> 

            <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Type_{{$key}}" 
                  name_="Type" 
                  ques_num='0' 
                  id="Assessment_Acoustic_Neuroma_Type_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[0]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Acoustic_Neuroma_Type_0_{{$key}}" class="form-check-label">Neurofibromatosis (NF)</label>
              </div> 
                
            <div class="form-check">
              <input type="radio" 
                name="Type_{{$key}}" 
                name_="Type"
                ques_num='0' 
                id="Assessment_Acoustic_Neuroma_Type_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[0]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Acoustic_Neuroma_Type_1_{{$key}}" class="form-check-label">Non-neurofibromatosis (non-NF)</label>
            </div>

          </div>
        </div>
              
          <hr>

        <div class="row">

          <div class="col-form-label col-4"> Symptoms </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1'
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_0_{{$key}}" 
                value="cb1" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb1 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_0_{{$key}}" class="form-check-label">
                Hearing loss
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1'
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_1_{{$key}}" 
                value="cb2" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb2 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_1_{{$key}}" class="form-check-label">
                Loss of balance
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox"
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_2_{{$key}}" 
                value="cb3" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb3 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Acoustic_Neuroma__Treatment_2_{{$key}}" class="form-check-label">
                Ataxia (problem with balance)
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_3_{{$key}}" 
                value="cb4" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb4 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_3_{{$key}}" class="form-check-label">
                Vertigo
              </label>
            </div>
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_4_{{$key}}" 
                value="cb5" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb5 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_4_{{$key}}" class="form-check-label">
                Facial numbness (trigeminal)
              </label>
            </div>
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_5_{{$key}}" 
                value="cb6" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb6 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_5_{{$key}}" class="form-check-label">
                Facial weakness
              </label>
            </div>
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_6_{{$key}}" 
                value="cb7" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb7 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_6_{{$key}}" class="form-check-label">
                Taste changes
              </label>
            </div>
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_7_{{$key}}" 
                value="cb8" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb8 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_7_{{$key}}" class="form-check-label">
                Difficulty in swallowing
              </label>
            </div>

            <div class="form-check">
              <input type="checkbox" 
                ques_num='1' 
                name_="Symptoms" 
                id="Assessment_Acoustic_Neuroma__Treatment_8_{{$key}}" 
                value="cb9" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[1]->cb9 == 'true') checked  @endif
              >

              <label for="Assessment_Acoustic_Neuroma__Treatment_8_{{$key}}" class="form-check-label">
                Headaches
              </label>
            </div>
          </div>
        </div> 
        
          <hr> 

        <div class="row">
          <div class="col-form-label col-4"> Previous surgery </div> 
          
            <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Previous Surgery_{{$key}}"
                  name_="Previous Surgery" 
                  data-key={{$key}}
                  ques_num='2' 
                  id="Assessment_Acoustic_Neuroma Previous Surgery_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[2]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Acoustic_Neuroma Previous Surgery_0_{{$key}}" class="form-check-label">Yes</label>
              </div> 
                
              <div class="form-check">
                <input type="radio" 
                  name="Previous Surgery_{{$key}}"
                  name_="Previous Surgery"
                  data-key={{$key}}
                  ques_num='2' 
                  id="Assessment_Acoustic_Neuroma Previous Surgery_1_{{$key}}" 
                  value="op2" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[2]->op2 == 'true') checked  @endif
                > 
                <label for="Assessment_Acoustic_Neuroma Previous Surgery_1_{{$key}}" class="form-check-label">No</label>
              </div>

          </div>
        </div>

          <hr>

        <div class="row" id="row_procedure_{{$key}}">
          <div class="col-form-label col-4"> Procedure </div> 
          <div class="col-8">
            <div class="form-row AcousticNeuroma_procedure_class_{{str_replace(' ','_',$visit->progress)}}">

          @if(!empty($rowdata[3]->at1))
            @foreach ($rowdata[3]->at1 as $key_at1 => $obj_at1)

              <div class="col-md-5 col-xs-12">
                <label>Name</label>
                <input type="text" 
                  name_="Procedure" 
                  ques_num='3'
                  data-at_key='at1'
                  data-at_index='{{$key_at1}}'
                  data-at_field='field1'
                  data-at_id='AcousticNeuroma_procedure_{{$visit->progress}}'
                  id="Assessment_Acoustic_Neuroma Procedure_0_{{$key}}" 
                  value="{{$obj_at1->field1}}"
                  data-format="at" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-control"
                >
              </div>
              <div class="col-md-5 col-xs-12">
                <label>Date</label>
                <input type="date" 
                  name_="Procedure" 
                  ques_num='3'
                  data-at_key='at1'
                  data-at_index='{{$key_at1}}'
                  data-at_field='field_date1'
                  data-at_id='AcousticNeuroma_procedure_{{$visit->progress}}'
                  id="Assessment_Acoustic_Neuroma Procedure_0_{{$key}}" 
                  value="{{$obj_at1->field_date1}}"
                  data-format="at" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-control"
                >
              </div>

            @endforeach

          @else

              <div class="col-md-5 col-xs-12">
                <label>Name</label>
                <input type="text" 
                  name_="Procedure" 
                  ques_num='3'
                  data-at_key='at1'
                  data-at_index='0'
                  data-at_field='field1'
                  data-at_id='AcousticNeuroma_procedure_{{$visit->progress}}'
                  id="Assessment_Acoustic_Neuroma Procedure_0_{{$key}}" 
                  value=""
                  data-format="at" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-control"
                >
              </div>
              <div class="col-md-5 col-xs-12">
                <label>Date</label>
                <input type="date" 
                  name_="Procedure" 
                  ques_num='3'
                  data-at_key='at1'
                  data-at_index='0'
                  data-at_field='field_date1'
                  data-at_id='AcousticNeuroma_procedure_{{$visit->progress}}'
                  id="Assessment_Acoustic_Neuroma Procedure_0_{{$key}}" 
                  value=""
                  data-format="at" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="AcousticNeuroma" 
                  data-description="Assessment_Acoustic_Neuroma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-control"
                >
              </div>

          @endif

              @if(!empty($rowdata[3]->at1))
                <div class="col-md-2 col-xs-12">
                  <button tabindex="0" role="button" class=" btn btn-icon btn-success at_AcousticNeuroma_procedure" data-original-title="" title="" 
                    data-progress="{{$visit->progress}}"
                    data-at1_curr_index = "{{count($rowdata[3]->at1)}}"
                    data-field_key = "{{$key}}"
                    data-regdate = @if(!empty($visit->regdate2)) "{{$visit->regdate2}}" @else "" @endif
                    data-pm_idno = "{{$pm_idno}}"

                    ><i class="fas fa-plus"></i></button>
                </div>
              @else
                <div class="col-md-2 col-xs-12">
                  <button tabindex="0" role="button" class=" btn btn-icon btn-success at_AcousticNeuroma_procedure" data-original-title="" title="" 
                    data-progress="{{$visit->progress}}"
                    data-at1_curr_index="1"
                    data-field_key="{{$key}}"
                    data-regdate = @if(!empty($visit->regdate2))"{{$visit->regdate2}}"@else""@endif 
                    data-pm_idno = "{{$pm_idno}}"
                  ><i class="fas fa-plus"></i></button>
                </div>
              @endif

            </div>

          </div>
        </div>

          <hr id="hr_procedure_{{$key}}">

        <div class="row">
          <div class="col-form-label col-4">
            <div>Koos Grading Scale</div>
            <img src="{{url('/assets/img/gkc/KoosGradingScale.png')}}" alt="KoosGradingScale" style="width: inherit;">
          </div> 

          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                name="Koos Grading Scale_{{$key}}" 
                name_="Koos Grading Scale" 
                ques_num='4' 
                id="Assessment_Acoustic_Neuroma Koos Grading Scale_0_{{$key}}" 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op1 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Koos Grading Scale_0_{{$key}}" class="form-check-label">Stage I (Small)</label>
            </div> 
              
            <div class="form-check">
              <input type="radio" 
                name="Koos Grading Scale_{{$key}}" 
                name_="Koos Grading Scale" 
                ques_num='4' 
                id="Assessment_Acoustic_Neuroma Koos Grading Scale_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op2 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Koos Grading Scale_1_{{$key}}" class="form-check-label">Stage II (Medium)</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Koos Grading Scale_{{$key}}" 
                name_="Koos Grading Scale" 
                ques_num='4' 
                id="Assessment_Acoustic_Neuroma Koos Grading Scale_2_{{$key}}" 
                value="op3" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op3 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Koos Grading Scale_2_{{$key}}" class="form-check-label">Stage III (Medium)</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Koos Grading Scale_{{$key}}" 
                name_="Koos Grading Scale" 
                ques_num='4' 
                id="Assessment_Acoustic_Neuroma Koos Grading Scale_3_{{$key}}" 
                value="op4" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op4 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Koos Grading Scale_3_{{$key}}" class="form-check-label">Stage IV (Big)</label>
            </div> 

          </div>
        </div>
              
          <hr>

        <div class="row">
          <div class="col-form-label col-4">Hearing Assessment – Useful Hearing</div> 

          <div class="col-8">

            <div class="form-check">
              <input type="radio" 
                name="Hearing Assessment – Useful Hearing_{{$key}}" 
                name_="Hearing Assessment – Useful Hearing" 
                ques_num='5' 
                id="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_0_{{$key}}" 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[5]->op1 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_0_{{$key}}" class="form-check-label">26-40dB (Slight/Mild)</label>
            </div> 
              
            <div class="form-check">
              <input type="radio" 
                name="Hearing Assessment – Useful Hearing_{{$key}}" 
                name_="Hearing Assessment – Useful Hearing" 
                ques_num='5' 
                id="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[5]->op2 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_1_{{$key}}" class="form-check-label">41-60dB (Moderate)</label>
            </div> 
              
            <div class="form-check">
              <input type="radio" 
                name="Hearing Assessment – Useful Hearing_{{$key}}" 
                name_="Hearing Assessment – Useful Hearing" 
                ques_num='5' 
                id="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_2_{{$key}}" 
                value="op3" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[5]->op3 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_2_{{$key}}" class="form-check-label">61-80dB (Severe)</label>
            </div> 
              
            <div class="form-check">
              <input type="radio" 
                name="Hearing Assessment – Useful Hearing_{{$key}}" 
                name_="Hearing Assessment – Useful Hearing" 
                ques_num='5' 
                id="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_3_{{$key}}" 
                value="op4" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[5]->op4 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Assessment – Useful Hearing_3_{{$key}}" class="form-check-label">Over 81dB (Profound)</label>
            </div> 

          </div>
        </div>
              
          <hr>

        <div class="row">
          <div class="col-form-label col-4">Facial Nerve Assessment – House-Brackmann Classification of Facial Function</div> 

          <div class="col-8">

            <div class="form-check">
              <input type="radio" 
                name="Facial Nerve Assessment – House-Brackmann Classification of Facial Function_{{$key}}" 
                name_="Facial Nerve Assessment – House-Brackmann Classification of Facial Function" 
                ques_num='6' 
                id="Assessment_Acoustic_Neuroma Hearing Brackmann_0_{{$key}}" 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op1 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Brackmann_0_{{$key}}" class="form-check-label">Grade I (Normal) Normal facial function in all areas</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Facial Nerve Assessment – House-Brackmann Classification of Facial Function_{{$key}}" 
                name_="Facial Nerve Assessment – House-Brackmann Classification of Facial Function" 
                ques_num='6' 
                id="Assessment_Acoustic_Neuroma Hearing Brackmann_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op2 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Brackmann_1_{{$key}}" class="form-check-label">Grade II (Mild dysfunction) Slight weakness noticeable on close inspection; may have very slight synkinesis.</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Facial Nerve Assessment – House-Brackmann Classification of Facial Function_{{$key}}" 
                name_="Facial Nerve Assessment – House-Brackmann Classification of Facial Function" 
                ques_num='6' 
                id="Assessment_Acoustic_Neuroma Hearing Brackmann_2_{{$key}}" 
                value="op3" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op3 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Brackmann_2_{{$key}}" class="form-check-label">Grade III (Moderate dysfunction) Obvious, but not disfiguring, difference between 2 sides; noticeable, but not severe, synkinesis, contracture, or hemifacial spasm; complete eye closure with effort.</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Facial Nerve Assessment – House-Brackmann Classification of Facial Function_{{$key}}" 
                name_="Facial Nerve Assessment – House-Brackmann Classification of Facial Function" 
                ques_num='6' 
                id="Assessment_Acoustic_Neuroma Hearing Brackmann_3_{{$key}}" 
                value="op4" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op4 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Brackmann_3_{{$key}}" class="form-check-label">Grade IV (Moderately severe dysfunction) Obvious weakness of disfiguring asymmetry; normal symmetry and tone at rest; incomplete eye closure.</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Facial Nerve Assessment – House-Brackmann Classification of Facial Function_{{$key}}" 
                name_="Facial Nerve Assessment – House-Brackmann Classification of Facial Function" 
                ques_num='6' 
                id="Assessment_Acoustic_Neuroma Hearing Brackmann_4_{{$key}}" 
                value="op5" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op5 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Brackmann_4_{{$key}}" class="form-check-label">Grade V (Severe dysfunction) Only barely perceptible motion; asymmetry at rest.</label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                name="Facial Nerve Assessment – House-Brackmann Classification of Facial Function_{{$key}}" 
                name_="Facial Nerve Assessment – House-Brackmann Classification of Facial Function" 
                ques_num='6' 
                id="Assessment_Acoustic_Neuroma Hearing Brackmann_5_{{$key}}" 
                value="op6" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op6 == 'true') checked  @endif
              >
              <label for="Assessment_Acoustic_Neuroma Hearing Brackmann_5_{{$key}}" class="form-check-label">Grade VI (Total paralysis) No movement.</label>
            </div> 

            </div>

        </div>
              
          <hr>

        <div class="row">
          <div class="col-form-label col-4"> Note </div> 
          <div class="col-8">
            <div class="form-group">
              <textarea 
                ques_num='7'                
                name_="Note" 
                id="Assessment_Acoustic_Neuroma Note_0_{{$key}}" 
                data-format="ta" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="AcousticNeuroma" 
                data-ta_key="ta1"
                data-description="Assessment_Acoustic_Neuroma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control" 
                style="height: 80px;"
              >@if($rowdata[7]->ta1 != ''){!!$rowdata[7]->ta1!!}@endif</textarea>
            </div>
          </div>
        </div>

          <hr>



      </div>
    </div>
  </div>
</div>