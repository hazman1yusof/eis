<div data-description="Assessment_Meningioma" id="div_Assessment_Meningioma" class="col-md-9 col-lg-9 col-sm-12 div_normal  ">
  <div class="card">
    <div class="card-header">
      <h4>Assessment_Meningioma</h4>
    </div>

    <div class="card-body">
      <div id="form_Assessment_Meningioma" action="/study" method="POST">
        <input type="hidden" name="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name="mrn" value="1"> 
        <input type="hidden" name="diagcode" value="Meningioma"> 
        <input type="hidden" name="description" value="Assessment_Meningioma"> 
        
        <div class="row">        
          <div class="col-form-label col-4">Summary of Sign and Symptoms</div>           
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name="Summary of Sign and Symptoms" 
                id="Assessment_Meningioma_Summary of Sign and Symptoms_0" 
                value="" 
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
                  name="Size of Tumour" 
                  id="Assessment_Meningioma_Size of Tumour_0" 
                  value="" 
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
                  name="Type" 
                  id="Assessment_Meningioma_Type_0" 
                  value="op1" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                >
                <label for="Assessment_Meningioma_Type_0" class="form-check-label">Sporadic</label>
              </div> 
                  
            <div class="form-check">
              <input type="radio" 
                name="Type" 
                id="Assessment_Meningioma_Type_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Meningioma" 
                data-description="Assessment_Meningioma" 
                class="form-check-input"
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
                  name="Location of Tumour" 
                  id="Assessment_Meningioma_Location of Tumour_0" 
                  value="" 
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
                  name="Previous Treatment" 
                  id="Assessment_Meningioma_Previous Treatment_0" 
                  value="op1" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                > 
                <label for="Assessment_Meningioma_Previous Treatment_0" class="form-check-label">None</label>
              </div> 
                    
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment" 
                  id="Assessment_Meningioma_Previous Treatment_1" 
                  value="op2" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                > 
                <label for="Assessment_Meningioma_Previous Treatment_1" class="form-check-label">Surgical</label>
              </div> 
                    
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment" 
                  id="Assessment_Meningioma_Previous Treatment_2" 
                  value="op3" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
                >
                <label for="Assessment_Meningioma_Previous Treatment_2" class="form-check-label">Embolism</label>
              </div> 
                  
              <div class="form-check">
                <input type="radio" 
                  name="Previous Treatment" 
                  id="Assessment_Meningioma_Previous Treatment_3" 
                  value="op4" 
                  data-format="op" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Meningioma" 
                  data-description="Assessment_Meningioma" 
                  class="form-check-input"
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