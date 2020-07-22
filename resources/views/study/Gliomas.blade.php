<div data-description="Assessment_Gliomas" id="div_Assessment_Gliomas_{{$key}}" class="col-md-9 col-lg-9 col-sm-1 @if($key != 0) _hidediv  @endif  ">
  <div class="card">

    <div class="card-header"><div class="row">
      <div class="col-12">
          <h4>Assessment Gliomas {{$key+1}} </h4>
      </div>
      <div class="col-12">
        <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Visit Date:</b> <span id="regdate-span-{{$key}}">{{$visit->regdate}}</span>
              <div class="form-row">
                <input type="date" class="form-control col-md-6 regdate-date-{{$key}}"
                    value="{{$visit->regdate2}}"  
                    name="regdate" 
                    data-diagcode="Gliomas" 
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
                      data-diagcode="Gliomas" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      completed <i class="fas fa-check"></i>
                  </button>
                  &nbsp;
                  <button type="button" class="btn btn-icon btn-danger col-md-3 completed-save"
                      data-value='false'
                      data-diagcode="Gliomas" 
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
      <div id="form_Assessment_Gliomas" action="/study" method="POST}">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="pm_idno" value="{{$pm_idno}}"> <input type="hidden" name_="diagcode" value="Gliomas"> 
        <input type="hidden" name_="description" value="Assessment_Gliomas"> 
        <div class="row">
        
          <div class="col-form-label col-4"> Sign and Symptoms </div> 
          
          <div class="col-8">
            <div class="form-group">
              <textarea name_="Sign and Symptoms" 
                ques_num='0'
                id="Assessment_Gliomas_Sign and Symptoms_0_{{$key}}" 
                data-key="{{$key}}"
                data-format="ta"
                data-ta_key="ta1" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control" 
                style="height: 80px;"
              >@if($rowdata[0]->ta1 != ''){!!$rowdata[0]->ta1!!}@endif</textarea>
            </div>
          </div>

        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Size of Tumour </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Size of Tumour" 
                ques_num='1'
                id="Assessment_Gliomas_Size of Tumour_0_{{$key}}" 
                data-key="{{$key}}"
                value="@if($rowdata[1]->tf1 != ''){{$rowdata[1]->tf1}}@endif" 
                data-format="tf" 
                data-tf_key="tf1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Location of Tumour </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Location of Tumour" 
                ques_num='2'
                id="Assessment_Gliomas_Location of Tumour_0_{{$key}}" 
                data-key="{{$key}}"
                value="@if($rowdata[2]->tf1 != ''){{$rowdata[2]->tf1}}@endif" 
                data-format="tf"
                data-tf_key="tf1" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Previous Treatment </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment" 
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_0_{{$key}}" 
                data-key="{{$key}}"
                value="cb1" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb1 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Gliomas_Previous Treatment_0_{{$key}}" class="form-check-label">
                None
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment" 
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_1_{{$key}}" 
                data-key="{{$key}}"
                value="cb2" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb2 == 'true') checked  @endif
              > 

              <label for="Assessment_Gliomas_Previous Treatment_1_{{$key}}" class="form-check-label">
                Whole Brain Radiotherapy
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment" 
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_2_{{$key}}" 
                data-key="{{$key}}"
                value="cb3" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb3 == 'true') checked  @endif
              > 

              <label for="Assessment_Gliomas_Previous Treatment_2_{{$key}}" class="form-check-label">
                Surgery
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment"  
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_3_{{$key}}" 
                data-key="{{$key}}"
                value="cb4" 
                data-format="cb" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb4 == 'true') checked  @endif
              > 

              <label for="Assessment_Gliomas_Previous Treatment_3_{{$key}}" class="form-check-label">
                Chemotherapy
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Date of Pre Treatment </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="date" 
              name_="Date of Pre Treatment" 
              ques_num='4'
              id="Assessment_Gliomas_Date of Pre Treatment_0_{{$key}}" 
              data-key="{{$key}}"
              value="@if($rowdata[4]->tf1 != ''){{$rowdata[4]->tf1}}@endif" 
              data-format="tf"
              data-tf_key="tf1" 
              data-pm_idno="{{$pm_idno}}" 
              data-diagcode="Gliomas" 
              data-description="Assessment_Gliomas" 
              data-regdate="{{$visit->regdate2}}"
              data-progress="{{$visit->progress}}"
              class="form-control"
              >
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
                id="Assessment_Gliomas_Note_0_{{$key}}" 
                data-key="{{$key}}"
                data-format="ta" 
                data-ta_key="ta1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
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