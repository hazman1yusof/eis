<div data-description="Assessment_Metastasis" id="div_Assessment_Metastasis" class="col-md-9 col-lg-9 col-sm-12 div_normal  ">
  <div class="card">
    <div class="card-header">
      <h4>Assessment_Metastasis</h4>
    </div> 
    
    <div class="card-body">
      <div id="form_Assessment_Metastasis" action="/study" method="POST">
        <input type="hidden" name="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name="mrn" value="1"> 
        <input type="hidden" name="diagcode" value="Metastasis"> 
        <input type="hidden" name="description" value="Assessment_Metastasis"> 
        
      <div class="row">
        <div class="col-form-label col-4">Known Primary</div> 
          <div class="col-8">
          <div class="form-check">
            <input type="radio" 
              name="Known Primary" 
              id="Assessment_Metastasis_Known Primary_0" 
              value="op1" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
            > 
            <label for="Assessment_Metastasis_Known Primary_0" class="form-check-label">Yes</label>              
          </div> 
            
          <div class="form-check">
            <input type="radio" 
              name="Known Primary" 
              id="Assessment_Metastasis_Known Primary_1" 
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
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
                name="Status of Systemic Disease" 
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
              name="Status of Systemic Disease" 
              id="Assessment_Metastasis_Status of Systemic Disease_1" 
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"
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
                name="Chemotherapy done" 
                id="Assessment_Metastasis_Chemotherapy done_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
              >               
              <label for="Assessment_Metastasis_Chemotherapy done_0" class="form-check-label">Yes</label>
            </div> 
            
          <div class="form-check">
            <input type="radio" 
              name="Chemotherapy done" 
              id="Assessment_Metastasis_Chemotherapy done_1" 
              value="op2" 
              data-format="op" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Metastasis" 
              data-description="Assessment_Metastasis" 
              class="form-check-input"                
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
                name="Histology Type" 
                id="Assessment_Metastasis_Histology Type_0" 
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
          <div class="col-form-label col-4">Number of Mets</div> 
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name="Number of Mets" 
                id="Assessment_Metastasis_Number of Mets_0" 
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
          <div class="col-form-label col-4">Location of Tumour</div> 
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name="Location of Tumour" 
                id="Assessment_Metastasis_Location of Tumour_0" 
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
                name="Pre Treatment" 
                id="Assessment_Metastasis_Pre Treatment_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
              > 
              <label for="Assessment_Metastasis_Pre Treatment_0" class="form-check-label">Yes</label>
            </div>

            <div class="form-check">
              <input type="radio" 
                name="Pre Treatment" 
                id="Assessment_Metastasis_Pre Treatment_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Metastasis" 
                data-description="Assessment_Metastasis" 
                class="form-check-input"
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