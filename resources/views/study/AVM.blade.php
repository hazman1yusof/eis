<div data-description="Assesment_AVM" id="div_Assesment_AVM_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">
    <div class="card-header">
      <h4>Assesment AVM {{$key+1}}
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div>

    <div class="card-body">
      <div id="form_Assesment_AVM" action="/study" method="POST">
        <input type="hidden" name_="mrn" value="{{$mrn}}">
        <input type="hidden" name_="diagcode" value="AVM">
        <input type="hidden" name_="description" value="Assesment_AVM">

        <div class="row">

          <div class="col-form-label col-4"> AVM Characteristic </div>

          <div class="col-8">
            <div class="form-group">
              <select name_="AVM Characteristic" 
                ques_num='0'
                id="Assesment_AVM_AVM Characteristic_{{$key}}" 
                data-format="dd" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
              
                <option value="dd1">Compact</option> 
                <option value="dd2">Diffuse</option>
              </select>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Size of AVM </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Size of AVM" 
                ques_num='1'
                id="Assesment_AVM_Size of AVM_0_{{$key}}" 
                value="@if($rowdata[1]->tf1 != ''){{$rowdata[1]->tf1}}@endif" 
                data-format="tf"
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Spetzler Martin Grading Scale - Size </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='2'
                name_="Spetzler Martin Grading Scale - Size" 
                name="Spetzler Martin Grading Scale - Size_{{$key}}"
                id="Assesment_AVM_Spetzler Martin Grading Scale - Size_0_{{$key}}" 
                value="op1" 
                data-point="1"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Size_0_{{$key}}" class="form-check-label">
                Size&lt;3cm
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='2'
                name_="Spetzler Martin Grading Scale - Size" 
                name="Spetzler Martin Grading Scale - Size_{{$key}}"
                id="Assesment_AVM_Spetzler Martin Grading Scale - Size_1_{{$key}}" 
                value="op2" 
                data-point="2"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Size_1_{{$key}}" class="form-check-label">
                Size 3-6cm
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='2'
                name_="Spetzler Martin Grading Scale - Size" 
                name="Spetzler Martin Grading Scale - Size_{{$key}}"
                id="Assesment_AVM_Spetzler Martin Grading Scale - Size_2_{{$key}}" 
                value="op3" 
                data-point="3"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op3 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Size_2_{{$key}}" class="form-check-label">
                Size &gt;6cm
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 

        <div class="row">

          <div class="col-form-label col-4"> Spetzler Martin Grading Scale - Location </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='11'
                name_="Spetzler Martin Grading Scale - Location" 
                name="Spetzler Martin Grading Scale - Location_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Location_0_{{$key}}" 
                value="op1" 
                data-point="0"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[11]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Location_0_{{$key}}" class="form-check-label">
                Noneloquent site
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='11'
                name_="Spetzler Martin Grading Scale - Location" 
                name="Spetzler Martin Grading Scale - Location_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Location_1_{{$key}}" 
                value="op2" 
                data-point="1"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[11]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Location_1_{{$key}}" class="form-check-label">
                Eloquent site
              </label>
            </div> 

          </div>

        </div> 
        
          <hr> 

        <div class="row">

          <div class="col-form-label col-4"> Spetzler Martin Grading Scale - Pattern of venous drainage </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='12'
                name_="Spetzler Martin Grading Scale - Pattern of venous drainage" 
                name="Spetzler Martin Grading Scale - Pattern of venous drainage_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Pattern of venous drainage_0_{{$key}}" 
                value="op1" 
                data-point="0"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[12]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Pattern of venous drainage_0_{{$key}}" class="form-check-label">
                Noneloquent site
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='12'
                name_="Spetzler Martin Grading Scale - Pattern of venous drainage" 
                name="Spetzler Martin Grading Scale - Pattern of venous drainage_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Pattern of venous drainage_1_{{$key}}" 
                value="op2" 
                data-point="1"
                data-key="{{$key}}"
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[12]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Pattern of venous drainage_1_{{$key}}" class="form-check-label">
                Eloquent site
              </label>
            </div> 
            
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Spetzler Martin Grading Scale - Venous Drainage </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio"  
                ques_num='3'
                name_="Spetzler Martin Grading Scale - Venous Drainage" 
                name="Spetzler Martin Grading Scale - Venous Drainage_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_0_{{$key}}" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[3]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_0_{{$key}}" class="form-check-label">
                Superficial
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='3'
                name_="Spetzler Martin Grading Scale - Venous Drainage" 
                name="Spetzler Martin Grading Scale - Venous Drainage_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[3]->op2 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_1_{{$key}}" class="form-check-label">
                Deep
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Spetzler Martin Grading Scale - Eloquence </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio"  
                ques_num='4'
                name_="Spetzler Martin Grading Scale - Eloquence" 
                name="Spetzler Martin Grading Scale - Eloquence_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_0_{{$key}}" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op1 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_0_{{$key}}" class="form-check-label">
                Yes
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='4'
                name_="Spetzler Martin Grading Scale - Eloquence" 
                name="Spetzler Martin Grading Scale - Eloquence_{{$key}}" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_1_{{$key}}" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_1_{{$key}}" class="form-check-label">
                No
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Total Score </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                readonly="" 
                name_="Total Score"  
                ques_num='5'
                id="Assesment_AVM_Total_Score_0_{{$key}}" 
                value="@if($rowdata[5]->tf1 != ''){{$rowdata[5]->tf1}}@endif"
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
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
                ques_num='6'
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_0_{{$key}}" 
                value="cb1" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb1 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Previous Treatment_0_{{$key}}" class="form-check-label">
                None
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='6'
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_1_{{$key}}" 
                value="cb2" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb2 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Previous Treatment_1_{{$key}}" class="form-check-label">
                Surgery
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox"
                ques_num='6' 
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_2_{{$key}}" 
                value="cb3" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb3 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Previous Treatment_2_{{$key}}" class="form-check-label">
                Embolism
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='6' 
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_3_{{$key}}" 
                value="cb4" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb4 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Previous Treatment_3_{{$key}}" class="form-check-label">
                Radiotherapy
              </label>
            </div>

          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Date of Previous Treatment </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Date of Previous Treatment"  
                ques_num='7'
                id="Assesment_AVM_Date of Previous Treatment_0_{{$key}}" 
                value="@if($rowdata[7]->tf1 != ''){{$rowdata[7]->tf1}}@endif"
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
            </div>
          </div>
          
        </div> 
          
          <hr>
          
        <div class="row">

          <div class="col-form-label col-4"> Anatomical Location of AVM </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Anatomical Location of AVM" 
                ques_num='8'
                id="Assesment_AVM_Anatomical Location of AVM_0_{{$key}}" 
                value="@if($rowdata[8]->tf1 != ''){{$rowdata[8]->tf1}}@endif"
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Dosage </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Dosage" 
                ques_num='9'
                id="Assesment_AVM_Dosage_0_{{$key}}" 
                value="@if($rowdata[9]->tf1 != ''){{$rowdata[9]->tf1}}@endif" 
                data-format="tf" 
                data-tf_key="tf1"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
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
                ques_num='10'                
                name_="Note" 
                id="Assesment_AVM_Note_0_{{$key}}" 
                data-format="ta" 
                data-ta_key="ta1"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control" 
                style="height: 80px;"
              >@if($rowdata[10]->ta1 != ''){!!$rowdata[9]->ta1!!}@endif
              </textarea>
            </div>
          </div>
        </div>

          <hr>
      </div>
    </div>

  </div>
</div>