<div data-description="Assessment_Glomus_Tumour" id="div_Assessment_Glomus_Tumour_{{$key}}" class="col-md-9 col-lg-9 col-sm-1 @if($key != 0) _hidediv  @endif  ">
  <div class="card">

    <div class="card-header"><div class="row">
      <div class="col-12">
          <h4>Assessment Glomus Tumour {{$key+1}} </h4>
      </div>
      <div class="col-12">
        <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Visit Date:</b> <span id="regdate-span-{{$key}}">{{$visit->regdate}}</span>
              <div class="form-row">
                <input type="date" class="form-control col-md-6 regdate-date-{{$key}}"
                    value="{{$visit->regdate2}}"  
                    name="regdate" 
                    data-diagcode="GlomusTumour" 
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
                      data-diagcode="GlomusTumour" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      completed <i class="fas fa-check"></i>
                  </button>
                  &nbsp;
                  <button type="button" class="btn btn-icon btn-danger col-md-3 completed-save"
                      data-value='false'
                      data-diagcode="GlomusTumour" 
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
      <div id="form_Assessment_Glomus_Tumour" action="/study" method="POST}">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="pm_idno" value="{{$pm_idno}}"> <input type="hidden" name_="diagcode" value="GlomusTumour"> 
        <input type="hidden" name_="description" value="Assessment_Glomus_Tumour"> 
        
        <div class="row">

          <div class="col-form-label col-4"> Symptoms </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="checkbox" 
                ques_num='0'
                name_="Symptoms" 
                id="Assessment_Glomus_Tumour_Symptoms_0_{{$key}}" 
                value="cb1" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[0]->cb1 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_0_{{$key}}" class="form-check-label">
                Dysphagia
              </label>
            </div> 

            <div class="form-check">
              <input type="checkbox" 
                ques_num='0'
                name_="Symptoms" 
                id="Assessment_Glomus_Tumour_Symptoms_1_{{$key}}" 
                value="cb2" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[0]->cb2 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_1_{{$key}}" class="form-check-label">
                Hoarseness
              </label>
            </div>

            <div class="form-check">
              <input type="checkbox" 
                ques_num='0'
                name_="Symptoms" 
                id="Assessment_Glomus_Tumour_Symptoms_2_{{$key}}" 
                value="cb3" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[0]->cb3 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_2_{{$key}}" class="form-check-label">
                Hearing loss (+ hearing assessment)
              </label>
            </div>

            <div class="form-check">
              <input type="checkbox" 
                ques_num='0'
                name_="Symptoms" 
                id="Assessment_Glomus_Tumour_Symptoms_3_{{$key}}" 
                value="cb4" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[0]->cb4 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_3_{{$key}}" class="form-check-label">
                Slurred speech
              </label>
            </div>

            <div class="form-check">
              <input type="checkbox" 
                ques_num='0'
                name_="Symptoms" 
                id="Assessment_Glomus_Tumour_Symptoms_4_{{$key}}" 
                value="cb5" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[0]->cb5 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_4_{{$key}}" class="form-check-label">
                Facial weakness
              </label>
            </div>

            <div class="form-check">
              <input type="checkbox" 
                ques_num='0'
                name_="Symptoms" 
                id="Assessment_Glomus_Tumour_Symptoms_5_{{$key}}" 
                value="cb6" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Symptoms" 
                class="form-check-input"
                @if($rowdata[0]->cb6 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_5_{{$key}}" class="form-check-label">
                Pain or bleeding from ear
              </label>
            </div>
            
          </div>
        </div> 
        
          <hr>

        <div class="row">

          <div class="col-form-label col-4"> Location </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="checkbox" 
                ques_num='1'
                name_="Location" 
                id="Assessment_Glomus_Tumour_Location_0_{{$key}}" 
                value="cb1" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Location" 
                class="form-check-input"
                @if($rowdata[1]->cb1 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Location_0_{{$key}}" class="form-check-label">
                Jugular bulb
              </label>
            </div> 

            <div class="form-check">
              <input type="checkbox" 
                ques_num='1'
                name_="Location" 
                id="Assessment_Glomus_Tumour_Location_1_{{$key}}" 
                value="cb2" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Location" 
                class="form-check-input"
                @if($rowdata[1]->cb2 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Location_1_{{$key}}" class="form-check-label">
                Middle ear
              </label>
            </div>

            <div class="form-check">
              <input type="checkbox" 
                ques_num='1'
                name_="Location" 
                id="Assessment_Glomus_Tumour_Symptoms_2_{{$key}}" 
                value="cb3" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Location" 
                class="form-check-input"
                @if($rowdata[1]->cb3 == 'true') checked  @endif
              >

              <label for="Assessment_Glomus_Tumour_Symptoms_2_{{$key}}" class="form-check-label">
                Carotid artery
              </label>
            </div>
            
          </div>
        </div> 
        
          <hr>

        <div class="row">
          <div class="col-form-label col-4"> Invasion </div> 
          
            <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Invasion_{{$key}}"
                  name_="Invasion" 
                  data-key={{$key}}
                  ques_num='2' 
                  id="Assessment_Glomus_Tumour_Invasion_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[2]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Invasion_0_{{$key}}" class="form-check-label">Yes</label>
              </div> 
                
              <div class="form-check">
                <input type="radio" 
                  name="Invasion_{{$key}}"
                  name_="Invasion"
                  data-key={{$key}}
                  ques_num='2' 
                  id="Assessment_Glomus_Tumour_Invasion_1_{{$key}}" 
                  value="op2" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[2]->op2 == 'true') checked  @endif
                > 
                <label for="Assessment_Glomus_Tumour_Invasion_1_{{$key}}" class="form-check-label">No</label>
              </div>

          </div>
        </div>

          <hr>

        <div class="row">
          <div class="col-form-label col-4"> Glasscock-Jackson Classification </div> 
          
            <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Glasscock_{{$key}}"
                  name_="Glasscock-Jackson Classification" 
                  data-key={{$key}}
                  ques_num='3' 
                  id="Assessment_Glomus_Tumour_Glasscock_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[3]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Glasscock_0_{{$key}}" class="form-check-label">Type I : small mass limited to promontory</label>
              </div> 
                
              <div class="form-check">
                <input type="radio" 
                  name="Glasscock_{{$key}}"
                  name_="Glasscock-Jackson Classification"
                  data-key={{$key}}
                  ques_num='3' 
                  id="Assessment_Glomus_Tumour_Glasscock_1_{{$key}}" 
                  value="op2" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[3]->op2 == 'true') checked  @endif
                > 
                <label for="Assessment_Glomus_Tumour_Glasscock_1_{{$key}}" class="form-check-label">Type II : tumour completely filling the middle ear space</label>
              </div>
                
              <div class="form-check">
                <input type="radio" 
                  name="Glasscock_{{$key}}"
                  name_="Glasscock-Jackson Classification"
                  data-key={{$key}}
                  ques_num='3' 
                  id="Assessment_Glomus_Tumour_Glasscock_2_{{$key}}" 
                  value="op3" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[3]->op3 == 'true') checked  @endif
                > 
                <label for="Assessment_Glomus_Tumour_Glasscock_2_{{$key}}" class="form-check-label">Type III : middle ear filled and extending into mastoid process</label>
              </div>
                
              <div class="form-check">
                <input type="radio" 
                  name="Glasscock_{{$key}}"
                  name_="Glasscock-Jackson Classification"
                  data-key={{$key}}
                  ques_num='3' 
                  id="Assessment_Glomus_Tumour_Glasscock_3_{{$key}}" 
                  value="op4" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[3]->op4 == 'true') checked  @endif
                > 
                <label for="Assessment_Glomus_Tumour_Glasscock_3_{{$key}}" class="form-check-label">Type IV : middle ear filled, extending into mastoid or thro TM to fill EAC, may extend anteriorly to ICA</label>
              </div>

          </div>
        </div>

          <hr>

        <div class="row">
          <div class="col-form-label col-4"> Fisch Classification  </div> 
          
            <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Fisch_{{$key}}"
                  name_="Fisch Classification" 
                  data-key={{$key}}
                  ques_num='4' 
                  id="Assessment_Glomus_Tumour_Fisch_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Fisch_0_{{$key}}" class="form-check-label">Type A : tumour limited to middle ear cleft</label>
              </div> 

              <div class="form-check">
                <input type="radio" 
                  name="Fisch_{{$key}}"
                  name_="Fisch Classification" 
                  data-key={{$key}}
                  ques_num='4' 
                  id="Assessment_Glomus_Tumour_Fisch_1_{{$key}}" 
                  value="op2" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op2 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Fisch_1_{{$key}}" class="form-check-label">Type B : tumour limited to tympanomastoid area</label>
              </div> 

              <div class="form-check">
                <input type="radio" 
                  name="Fisch_{{$key}}"
                  name_="Fisch Classification" 
                  data-key={{$key}}
                  ques_num='4' 
                  id="Assessment_Glomus_Tumour_Fisch_2_{{$key}}" 
                  value="op3" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op3 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Fisch_2_{{$key}}" class="form-check-label">Type C : tumours involving infralabyrinthine</label>
              </div> 

              <div class="form-check">
                <input type="radio" 
                  name="Fisch_{{$key}}"
                  name_="Fisch Classification" 
                  data-key={{$key}}
                  ques_num='4' 
                  id="Assessment_Glomus_Tumour_Fisch_3_{{$key}}" 
                  value="op4" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op4 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Fisch_3_{{$key}}" class="form-check-label">Type D1 : tumour with intracranial extension < 2cm</label>
              </div> 

              <div class="form-check">
                <input type="radio" 
                  name="Fisch_{{$key}}"
                  name_="Fisch Classification" 
                  data-key={{$key}}
                  ques_num='4' 
                  id="Assessment_Glomus_Tumour_Fisch_4_{{$key}}" 
                  value="op5" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="GlomusTumour" 
                  data-description="Assessment_Glomus_Tumour" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op5 == 'true') checked  @endif
                >
                <label for="Assessment_Glomus_Tumour_Fisch_4_{{$key}}" class="form-check-label">Type D2 : tumour with intracranial extension > 2cm</label>
              </div> 

          </div>
        </div>

          <hr>

        <div class="row">
          <div class="col-form-label col-4"> Note </div> 
          <div class="col-8">
            <div class="form-group">
              <textarea 
                ques_num='5'                
                name_="Note" 
                id="Assessment_Glomus_Tumour_Note_0_{{$key}}" 
                data-format="ta" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="GlomusTumour" 
                data-ta_key="ta1"
                data-description="Assessment_Glomus_Tumour" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control" 
                style="height: 80px;"
              >@if($rowdata[5]->ta1 != ''){!!$rowdata[5]->ta1!!}@endif</textarea>
            </div>
          </div>
        </div>

          <hr>
          
      </div>
    </div>
  </div>
</div>