<div data-description="Assesment_AVM" id="div_Assesment_AVM_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">
    <div class="card-header">
      <h4>Assesment AVM {{$key+1}
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div>
    <div class="card-body">
      <div id="form_Assesment_AVM" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO">
        <input type="hidden" name_="mrn" value="{{$mrn}}">
        <input type="hidden" name_="diagcode" value="AVM">
        <input type="hidden" name_="description" value="Assesment_AVM">
        <div class="row">

          <div class="col-form-label col-4"> AVM Characteristic </div>

          <div class="col-8">
            <div class="form-group">
              <select name_="AVM Characteristic" 
                ques_num='0'
                id="Assesment_AVM_AVM Characteristic" 
                data-format="dd" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
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
                id="Assesment_AVM_Size of AVM_0" 
                value="@if($rowdata[1]->tf1 != '') {{$rowdata[1]->tf1}}  @endif" 
                data-format="tf"
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
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
                id="Assesment_AVM_Spetzler Martin Grading Scale - Size_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
                @if($rowdata[2]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Size_0" class="form-check-label">
                Size&lt;3cm
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='2'
                name_="Spetzler Martin Grading Scale - Size" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Size_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
                @if($rowdata[2]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Size_1" class="form-check-label">
                Size 3-6cm
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='2'
                name_="Spetzler Martin Grading Scale - Size" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Size_2" 
                value="op3" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
                @if($rowdata[2]->op3 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Size_2" class="form-check-label">
                Size &gt;6cm
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
                name_="Spetzler Martin Grading Scale - Venous Drainage" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_0" class="form-check-label">
                Superficial
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                name_="Spetzler Martin Grading Scale - Venous Drainage" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
              >

              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Venous Drainage_1" class="form-check-label">
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
                name_="Spetzler Martin Grading Scale - Eloquence" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
              >

              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_0" class="form-check-label">
                Yes
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                name_="Spetzler Martin Grading Scale - Eloquence" 
                id="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-check-input"
              > 
              
              <label for="Assesment_AVM_Spetzler Martin Grading Scale - Eloquence_1" class="form-check-label">
                No
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Total Score </div> 
          
          <div class="col-8">
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
                id="Assesment_AVM_Previous Treatment_0" 
                value="cb1" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb1 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Previous Treatment_0" class="form-check-label">
                None
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='6'
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_1" 
                value="cb2" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb2 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Previous Treatment_1" class="form-check-label">
                Surgery
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox"
                ques_num='6' 
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_2" 
                value="cb3" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb3 == 'true') checked  @endif
              > 
              
              <label for="Assesment_AVM_Previous Treatment_2" class="form-check-label">
                Embolism
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                ques_num='6' 
                name_="Previous Treatment" 
                id="Assesment_AVM_Previous Treatment_3" 
                value="cb4" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb4 == 'true') checked  @endif
              >

              <label for="Assesment_AVM_Previous Treatment_3" class="form-check-label">
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
                id="Assesment_AVM_Date of Previous Treatment_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
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
                id="Assesment_AVM_Anatomical Location of AVM_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
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
                id="Assesment_AVM_Dosage_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="AVM" 
                data-description="Assesment_AVM" 
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr>
        
      </div>
    </div>
  </div>
</div>