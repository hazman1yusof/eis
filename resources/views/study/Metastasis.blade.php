<div data-description="Assessment_Metastasis" id="div_Assessment_Metastasis_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">
    <div class="card-header">
      <h4>Assessment Metastasis {{$key+1}} 
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div> 
    
    <div class="card-body">
      <div id="form_Assessment_Metastasis" action="/study" method="POST">
      <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
      <input type="hidden" name_="mrn" value="1"> 
      <input type="hidden" name_="diagcode" value="Metastasis"> 
      <input type="hidden" name_="description" value="Assessment_Metastasis"> 
        
      <div class="row">
        <div class="col-form-label col-4">Known Primary</div> 
          <div class="col-8">
          <div class="form-check">
            <input type="radio" 
              ques_num='0'  
              name="Known Primary_{{$key}}"
              name_="Known Primary"
              id="Assessment_Metastasis_Known Primary_0_{{$key}}" 
              data-key="{{$key}}"
              value="op1" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              data-regdate="{{$visit->regdate2}}"
              class="form-check-input"
              @if($rowdata[0]->op1 == 'true') checked  @endif
            > 
            <label for="Assessment_Metastasis_Known Primary_0_{{$key}}" class="form-check-label">Yes</label>              
          </div> 
            
          <div class="form-check">
            <input type="radio" 
              ques_num='0'   
              name="Known Primary_{{$key}}"
              name_="Known Primary"
              id="Assessment_Metastasis_Known Primary_1_{{$key}}" 
              data-key="{{$key}}"
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              data-regdate="{{$visit->regdate2}}"
              class="form-check-input"
              @if($rowdata[0]->op2 == 'true') checked  @endif
            > 
            <label for="Assessment_Metastasis_Known Primary_1_{{$key}}" class="form-check-label">No</label>
          </div>            
        </div>
      </div> 
        
      <hr> 
      <div class="row">
        <div class="col-form-label col-4">Status of Systemic Disease</div> 
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='1'   
                name="Status of Systemic Disease_{{$key}}"
                name_="Status of Systemic Disease" 
                id="Assessment_Metastasis_Status of Systemic Disease_0_{{$key}}" 
                data-key="{{$key}}"
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[1]->op1 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Status of Systemic Disease_0_{{$key}}" class="form-check-label">Active</label>
            </div> 
          
          <div class="form-check">
            <input type="radio" 
              name="Status of Systemic Disease_{{$key}}"
              name_="Status of Systemic Disease"
              ques_num='1'    
              id="Assessment_Metastasis_Status of Systemic Disease_1_{{$key}}" 
              data-key="{{$key}}"
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              data-regdate="{{$visit->regdate2}}"
              class="form-check-input"
              @if($rowdata[1]->op2 == 'true') checked  @endif
            >             
            <label for="Assessment_Metastasis_Status of Systemic Disease_1_{{$key}}" class="form-check-label">Non-Active</label>
          </div>
        </div>
      </div> 
      
      <hr> 
        <div class="row">
          <div class="col-form-label col-4">
            Chemotherapy done
          </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='2'
                name="Chemotherapy done_{{$key}}" 
                name_="Chemotherapy done" 
                id="Assessment_Metastasis_Chemotherapy done_0_{{$key}}" 
                data-key="{{$key}}"
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[2]->op1 == 'true') checked  @endif
              >               
              <label for="Assessment_Metastasis_Chemotherapy done_0_{{$key}}" class="form-check-label">Yes</label>
            </div> 
            
          <div class="form-check">
            <input type="radio"
              ques_num='2' 
              name="Chemotherapy done_{{$key}}"
              name_="Chemotherapy done" 
              id="Assessment_Metastasis_Chemotherapy done_1_{{$key}}" 
              data-key="{{$key}}"
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              data-regdate="{{$visit->regdate2}}"
              class="form-check-input"
              @if($rowdata[2]->op2 == 'true') checked  @endif                
            >               
            <label for="Assessment_Metastasis_Chemotherapy done_1_{{$key}}" class="form-check-label">No</label>
          </div>
        </div>
      </div> 
        
      <hr> 
        <div class="row">
          <div class="col-form-label col-4">Histology Type</div> 
            <div class="col-8">
            <div class="form-group">
              <input type="text"
                ques_num='3'
                name_="Histology Type" 
                id="Assessment_Metastasis_Histology Type_0_{{$key}}"
                data-key="{{$key}}"
                value="@if($rowdata[3]->tf1 != ''){{$rowdata[3]->tf1}}@endif"  
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-control"
              >
            </div>
          </div>
        </div> 
        
      <hr> 
        <div class="row">
          <div class="col-form-label col-4">Number of Mets</div> 
            <div class="col-8">
            <div class="form-group">
              <input type="text"
                ques_num='4' 
                name_="Number of Mets" 
                id="Assessment_Metastasis_Number of Mets_0_{{$key}}" 
                data-key="{{$key}}"
                value="@if($rowdata[4]->tf1 != ''){{$rowdata[4]->tf1}}@endif"  
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-control"
              >
            </div>
          </div>
        </div> 
      
      <hr>

        <div class="row">
          <div class="col-form-label col-4">Location of Mets</div> 
            <div class="col-8">
            <div class="form-group">
              <input type="text"
                ques_num='5'  
                name_="Location of Mets" 
                id="Assessment_Metastasis_Location of Mets_0_{{$key}}" 
                data-key="{{$key}}"
                value="@if($rowdata[5]->tf1 != ''){{$rowdata[5]->tf1}}@endif" 
                value="" 
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-control"
              >
            </div>
          </div>
        </div> 
        
      <hr>

        <div class="row">
          <div class="col-form-label col-4">Pre Treatment</div> 
            <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='6'  
                name="Pre Treatment_{{$key}}" 
                name_="Pre Treatment" 
                id="Assessment_Metastasis_Pre Treatment_0_{{$key}}" 
                data-key="{{$key}}"
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[6]->op1 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Pre Treatment_0_{{$key}}" class="form-check-label">Yes</label>
            </div>

            <div class="form-check">
              <input type="radio"
                ques_num='6'   
                name="Pre Treatment_{{$key}}" 
                name_="Pre Treatment" 
                id="Assessment_Metastasis_Pre Treatment_1_{{$key}}" 
                data-key="{{$key}}"
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[6]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Pre Treatment_1_{{$key}}" class="form-check-label">No</label>
            </div>
          </div>
        </div>

      <hr>

      <div class="row">
          <div class="col-form-label col-4">Radiotherapy</div> 
            <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='8'  
                name="Radiotherapy{{$key}}" 
                name_="Radiotherapy" 
                id="Assessment_Metastasis_Radiotherapy_0_{{$key}}" 
                data-key="{{$key}}"
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[6]->op1 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Radiotherapy_0_{{$key}}" class="form-check-label">Yes</label>
            </div>

            <div class="form-check">
              <input type="radio"
                ques_num='8'   
                name="Radiotherapy{{$key}}" 
                name_="Radiotherapy" 
                id="Assessment_Metastasis_Radiotherapy_1_{{$key}}" 
                data-key="{{$key}}"
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[8]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Radiotherapy_1_{{$key}}" class="form-check-label">No</label>
            </div>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-form-label col-4">Karnofsky Performance Status Scale</div> 
            <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_0_{{$key}}" 
                data-key="{{$key}}"
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op1 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_0_{{$key}}" class="form-check-label">Score: 100%<br> State of Health: Healthy, no symptoms or signs of disease.</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_1_{{$key}}" 
                data-key="{{$key}}"
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_1_{{$key}}" class="form-check-label">Score: 90%<br>
State of Health: Capable of normal activity, few symptoms or signs of disease.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_2_{{$key}}" 
                data-key="{{$key}}"
                value="op3" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op3 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_2_{{$key}}" class="form-check-label">Score: 80%<br>
State of Health: Normal activity with some difficulty, some symptoms or signs.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_3_{{$key}}" 
                data-key="{{$key}}"
                value="op4" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op4 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_3_{{$key}}" class="form-check-label">Score: 70%<br>
State of Health: Caring for self, not capable of normal activity or work.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_4_{{$key}}" 
                data-key="{{$key}}"
                value="op5" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op5 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_4_{{$key}}" class="form-check-label">Score: 60%<br>
State of Health: Requiring some help, can take care of most personal requirements.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_5_{{$key}}" 
                data-key="{{$key}}"
                value="op6" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op6 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_5_{{$key}}" class="form-check-label">Score: 50%<br>
State of Health: Requires help often, requires frequent medical care.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_6_{{$key}}" 
                data-key="{{$key}}"
                value="op7" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op7 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_6_{{$key}}" class="form-check-label">Score: 40%<br>
State of Health: Disabled, requires special care and help.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_7_{{$key}}" 
                data-key="{{$key}}"
                value="op8" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op8 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_7_{{$key}}" class="form-check-label">Score: 30%<br>
State of Health: Severely disabled, hospital admission indicated but no risk of death.
</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                ques_num='9'  
                name="Karnofsky{{$key}}" 
                name_="Karnofsky" 
                id="Assessment_Metastasis_Karnofsky_8_{{$key}}" 
                data-key="{{$key}}"
                value="op9" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-check-input"
                @if($rowdata[9]->op9 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Karnofsky_78_{{$key}}" class="form-check-label">Score: 20%<br>
State of Health: Very ill, urgently requiring admission, requires supportive measures or treatment.
</label>
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
                id="Assessment_Metastasis_Note_0_{{$key}}" 
                data-key="{{$key}}"
                data-format="ta" 
                data-ta_key="ta1"
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                data-regdate="{{$visit->regdate2}}"
                class="form-control" 
                style="height: 80px;"
              >@if($rowdata[7]->ta1 != ''){!!$rowdata[7]->ta1!!}@endif
              </textarea>
            </div>
          </div>
        </div>

          <hr>

      </div>
    </div>
  </div>
</div>