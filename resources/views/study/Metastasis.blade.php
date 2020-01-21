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
              name_="Known Primary"
              id="Assessment_Metastasis_Known Primary_0" 
              value="op1" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
              @if($rowdata[0]->op1 == 'true') checked  @endif
            > 
            <label for="Assessment_Metastasis_Known Primary_0" class="form-check-label">Yes</label>              
          </div> 
            
          <div class="form-check">
            <input type="radio" 
              ques_num='0'   
              name_="Known Primary"
              id="Assessment_Metastasis_Known Primary_1" 
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
              @if($rowdata[0]->op2 == 'true') checked  @endif
            > 
            <label for="Assessment_Metastasis_Known Primary_1" class="form-check-label">No</label>
          </div>            
        </div>
      </div> 
        
      <hr> 
      <div class="row">
        <div class="col-form-label col-4">Status of Systemic Disease</div> 
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                name_="Status of Systemic Disease" 
                id="Assessment_Metastasis_Status of Systemic Disease_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
              > 
              <label for="Assessment_Metastasis_Status of Systemic Disease_0" class="form-check-label">Active</label>
            </div> 
          
          <div class="form-check">
            <input type="radio" 
              name_="Status of Systemic Disease"
              ques_num='1'    
              id="Assessment_Metastasis_Status of Systemic Disease_1" 
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
              @if($rowdata[1]->op2 == 'true') checked  @endif
            >             
            <label for="Assessment_Metastasis_Status of Systemic Disease_1" class="form-check-label">Non-Active</label>
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
                name_="Chemotherapy done" 
                id="Assessment_Metastasis_Chemotherapy done_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
                @if($rowdata[2]->op1 == 'true') checked  @endif
              >               
              <label for="Assessment_Metastasis_Chemotherapy done_0" class="form-check-label">Yes</label>
            </div> 
            
          <div class="form-check">
            <input type="radio"
              ques_num='2' 
              name_="Chemotherapy done" 
              id="Assessment_Metastasis_Chemotherapy done_1" 
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
              @if($rowdata[2]->op2 == 'true') checked  @endif                
            >               
            <label for="Assessment_Metastasis_Chemotherapy done_1" class="form-check-label">No</label>
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
                id="Assessment_Metastasis_Histology Type_0"
                value="@if($rowdata[3]->tf1 != '') {{$rowdata[3]->tf1}}  @endif"  
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
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
                id="Assessment_Metastasis_Number of Mets_0" 
                value="@if($rowdata[4]->tf1 != '') {{$rowdata[4]->tf1}}  @endif"  
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-control"
              >
            </div>
          </div>
        </div> 
      
      <hr> 
        <div class="row">
          <div class="col-form-label col-4">Location of Tumour</div> 
            <div class="col-8">
            <div class="form-group">
              <input type="text"
                ques_num='5'  
                name_="Location of Tumour" 
                id="Assessment_Metastasis_Location of Tumour_0" 
                value="@if($rowdata[5]->tf1 != '') {{$rowdata[5]->tf1}}  @endif" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
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
                name_="Pre Treatment" 
                id="Assessment_Metastasis_Pre Treatment_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
                @if($rowdata[6]->op1 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Pre Treatment_0" class="form-check-label">Yes</label>
            </div>

            <div class="form-check">
              <input type="radio"
                ques_num='6'   
                name_="Pre Treatment" 
                id="Assessment_Metastasis_Pre Treatment_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
                @if($rowdata[6]->op2 == 'true') checked  @endif
              > 
              <label for="Assessment_Metastasis_Pre Treatment_1" class="form-check-label">No</label>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>