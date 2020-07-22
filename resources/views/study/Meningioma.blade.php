<div data-description="Assessment_Meningioma" id="div_Assessment_Meningioma_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">

    <div class="card-header"><div class="row">
      <div class="col-12">
          <h4>Assessment Meningioma {{$key+1}} </h4>
      </div>
      <div class="col-12">
        <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Visit Date:</b> <span id="regdate-span-{{$key}}">{{$visit->regdate}}</span>
              <div class="form-row">
                <input type="date" class="form-control col-md-6 regdate-date-{{$key}}"
                    value="{{$visit->regdate2}}"  
                    name="regdate" 
                    data-diagcode="Meningioma" 
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
                      data-diagcode="Meningioma" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      completed <i class="fas fa-check"></i>
                  </button>
                  &nbsp;
                  <button type="button" class="btn btn-icon btn-danger col-md-3 completed-save"
                      data-value='false'
                      data-diagcode="Meningioma" 
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
      <div id="form_Assessment_Meningioma" action="/study" method="POST"_{{$key}}>
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="pm_idno" value="1"> 
        <input type="hidden" name_="diagcode" value="Meningioma"> 
        <input type="hidden" name_="description" value="Assessment_Meningioma"> 
        
        <div class="row">        
          <div class="col-form-label col-4">Summary of Sign and Symptoms</div>           
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Summary of Sign and Symptoms"
                ques_num='0' 
                id="Assessment_Meningioma_Summary of Sign and Symptoms_0_{{$key}}"
                value="@if($rowdata[0]->tf1 != ''){{$rowdata[0]->tf1}}@endif" 
                data-format="tf" 
                data-tf_key="tf1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
            </div>
          </div>
        </div> 
                
        <hr>
          <div class="row">
            <div class="col-form-label col-4">Size of Tumour</div>            
            <div class="col-8">
              <div class="form-group">
                <input type="text" 
                  name_="Size of Tumour"
                  ques_num='1' 
                  id="Assessment_Meningioma_Size of Tumour_0_{{$key}}" 
                  value="@if($rowdata[1]->tf1 != ''){{$rowdata[1]->tf1}}@endif" 
                  data-format="tf" 
                  data-tf_key="tf1"
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-control"
                >
              </div>
            </div>
          </div> 
              
        <hr> 
          <div class="row">
            <div class="col-form-label col-4">Type</div> 
              <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Type_{{$key}}" 
                  name_="Type" 
                  ques_num='2' 
                  id="Assessment_Meningioma_Type_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[2]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Meningioma_Type_0_{{$key}}" class="form-check-label">Sporadic</label>
              </div> 
                  
            <div class="form-check">
              <input type="radio" 
                name="Type_{{$key}}" 
                name_="Type"
                ques_num='2' 
                id="Assessment_Meningioma_Type_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Meningioma_Type_1_{{$key}}" class="form-check-label">Multiple</label>
            </div>
          </div>
        </div>
              
        <hr> 
          <div class="row">
            <div class="col-form-label col-4">Location of Tumour</div> 
              <div class="col-8">
              <div class="form-group">  
                <input type="text" 
                  name_="Location of Tumour"
                  ques_num='3' 
                  id="Assessment_Meningioma_Location of Tumour_0_{{$key}}" 
                  value="@if($rowdata[3]->tf1 != ''){{$rowdata[3]->tf1}}@endif" 
                  data-format="tf" 
                  data-tf_key="tf1"
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-control"
                >
              </div>
            </div>
          </div> 
                  
        <hr> 
          <div class="row">
            <div class="col-form-label col-4">Previous Treatment</div> 
              <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment_{{$key}}" 
                  name_="Previous Treatment" 
                  ques_num='4'
                  id="Assessment_Meningioma_Previous Treatment_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op1 == 'true') checked  @endif
                > 
                <label for="Assessment_Meningioma_Previous Treatment_0_{{$key}}" class="form-check-label">None</label>
              </div> 
                    
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment_{{$key}}" 
                  name_="Previous Treatment" 
                  ques_num='4' 
                  id="Assessment_Meningioma_Previous Treatment_1_{{$key}}" 
                  value="op2" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op2 == 'true') checked  @endif
                > 
                <label for="Assessment_Meningioma_Previous Treatment_1_{{$key}}" class="form-check-label">Surgical</label>
              </div> 
                    
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment_{{$key}}" 
                  name_="Previous Treatment" 
                  ques_num='4' 
                  id="Assessment_Meningioma_Previous Treatment_2_{{$key}}"
                  value="op3" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op3 == 'true') checked  @endif
                >
                <label for="Assessment_Meningioma_Previous Treatment_2_{{$key}}" class="form-check-label">Embolism</label>
              </div> 
                  
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment_{{$key}}" 
                  name_="Previous Treatment"
                  ques_num='4' 
                  id="Assessment_Meningioma_Previous Treatment_3_{{$key}}" 
                  value="op4" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[4]->op4 == 'true') checked  @endif
                > 
                <label for="Assessment_Meningioma_Previous Treatment_3_{{$key}}" class="form-check-label">Radiotherapy</label>
              </div>
            </div>
          </div>           
        <hr>

        <div class="row">
            <div class="col-form-label col-4">Histology</div> 
              <div class="col-8">
              <div class="form-check">
                <input type="radio" 
                  name="Histology_{{$key}}" 
                  name_="Histology" 
                  ques_num='6' 
                  id="Assessment_Meningioma_Histology_0_{{$key}}" 
                  value="op1" 
                  data-format="op" 
                  data-pm_idno="{{$pm_idno}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  data-regdate="{{$visit->regdate2}}"
                  data-progress="{{$visit->progress}}"
                  class="form-check-input"
                  @if($rowdata[6]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Meningioma_Histology_0_{{$key}}" class="form-check-label">Typical</label>
              </div> 
                  
            <div class="form-check">
              <input type="radio" 
                name="Histology_{{$key}}" 
                name_="Histology_"
                ques_num='6' 
                id="Assessment_Meningioma_Histology_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Meningioma_Histology_1_{{$key}}" class="form-check-label">Atypical</label>
            </div>
                  
            <div class="form-check">
              <input type="radio" 
                name="Histology_{{$key}}" 
                name_="Histology_"
                ques_num='6' 
                id="Assessment_Meningioma_Histology_2_{{$key}}" 
                value="op3" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op3 == 'true') checked  @endif
              > 
              <label for="Assessment_Meningioma_Histology_2_{{$key}}" class="form-check-label">Malignant</label>
            </div>
          </div>
        </div>
              
        <hr>

        <div class="row">        
          <div class="col-form-label col-4">Subtype</div>           
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Subtype"
                ques_num='7' 
                id="Assessment_Meningioma_Subtype_0_{{$key}}"
                value="@if($rowdata[7]->tf1 != ''){{$rowdata[7]->tf1}}@endif" 
                data-format="tf" 
                data-tf_key="tf1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
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
                id="Assessment_Meningioma_Note_0_{{$key}}" 
                data-format="ta" 
                data-ta_key="ta1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
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