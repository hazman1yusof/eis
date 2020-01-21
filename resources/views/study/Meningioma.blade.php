<div data-description="Assessment_Meningioma" id="div_Assessment_Meningioma_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">
    <div class="card-header">
      <h4>Assessment Meningioma {{$key+1}} 
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div>

    <div class="card-body">
      <div id="form_Assessment_Meningioma" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="mrn" value="1"> 
        <input type="hidden" name_="diagcode" value="Meningioma"> 
        <input type="hidden" name_="description" value="Assessment_Meningioma"> 
        
        <div class="row">        
          <div class="col-form-label col-4">Summary of Sign and Symptoms</div>           
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Summary of Sign and Symptoms"
                ques_num='0' 
                id="Assessment_Meningioma_Summary of Sign and Symptoms_0"
                value="@if($rowdata[0]->tf1 != '') {{$rowdata[0]->tf1}}  @endif" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
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
                  id="Assessment_Meningioma_Size of Tumour_0" 
                  value="@if($rowdata[1]->tf1 != '') {{$rowdata[1]->tf1}}  @endif" 
                  data-format="tf" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
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
                  name_="Type" 
                  ques_num='2' 
                  id="Assessment_Meningioma_Type_0" 
                  value="op1" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                  @if($rowdata[2]->op1 == 'true') checked  @endif
                >
                <label for="Assessment_Meningioma_Type_0" class="form-check-label">Sporadic</label>
              </div> 
                  
            <div class="form-check">
              <input type="radio" 
                name_="Type"
                ques_num='2' 
                id="Assessment_Meningioma_Type_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
                class="form-check-input"
                @if($rowdata[2]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Meningioma_Type_1" class="form-check-label">Multiple</label>
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
                  id="Assessment_Meningioma_Location of Tumour_0" 
                  value="@if($rowdata[3]->tf1 != '') {{$rowdata[3]->tf1}}  @endif" 
                  data-format="tf" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
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
                  name_="Previous Treatment" 
                  ques_num='4'
                  id="Assessment_Meningioma_Previous Treatment_0" 
                  value="op1" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                  @if($rowdata[4]->op1 == 'true') checked  @endif
                > 
                <label for="Assessment_Meningioma_Previous Treatment_0" class="form-check-label">None</label>
              </div> 
                    
              <div class="form-check">
                <input type="radio" 
                  name_="Previous Treatment" 
                  ques_num='4' 
                  id="Assessment_Meningioma_Previous Treatment_1" 
                  value="op2" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                  @if($rowdata[4]->op2 == 'true') checked  @endif
                > 
                <label for="Assessment_Meningioma_Previous Treatment_1" class="form-check-label">Surgical</label>
              </div> 
                    
              <div class="form-check">
                <input type="radio" 
                  name_="Previous Treatment" 
                  ques_num='4' 
                  id="Assessment_Meningioma_Previous Treatment_2" 
                  value="op3" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                  @if($rowdata[4]->op3 == 'true') checked  @endif
                >
                <label for="Assessment_Meningioma_Previous Treatment_2" class="form-check-label">Embolism</label>
              </div> 
                  
              <div class="form-check">
                <input type="radio" 
                  name_="Previous Treatment"
                  ques_num='4' 
                  id="Assessment_Meningioma_Previous Treatment_3" 
                  value="op4" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                  @if($rowdata[4]->op4 == 'true') checked  @endif
                > 
                <label for="Assessment_Meningioma_Previous Treatment_3" class="form-check-label">Radiotherapy</label>
              </div>
            </div>
          </div>           
        <hr>
      </div>
    </div>
  </div>
</div>