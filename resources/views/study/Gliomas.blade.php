<div data-description="Assessment_Gliomas" id="div_Assessment_Gliomas" class="col-md-9 col-lg-9 col-sm-12 div_normal  ">
  <div class="card">
    <div class="card-header">
      <h4>Assessment_Gliomas</h4>
    </div> 
    <div class="card-body">
      <div id="form_Assessment_Gliomas" action="/study" method="POST">
        <input type="hidden" name="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name="mrn" value="{{$mrn}}"> <input type="hidden" name="diagcode" value="Gliomas"> 
        <input type="hidden" name="description" value="Assessment_Gliomas"> 
        <div class="row">
        
          <div class="col-form-label col-4"> Sign and Symptoms </div> 
          
          <div class="col-8">
            <div class="form-group">
              <textarea name="Sign and Symptoms" 
                id="Assessment_Gliomas_Sign and Symptoms_0" 
                data-format="ta" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                class="form-control" 
                style="height: 80px;"
              >
                @if($rowdata[0]->ta1 != '') {{$rowdata[0]->ta1}}  @endif
              </textarea>
            </div>
          </div>

        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Size of Tumour </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name="Size of Tumour" 
                id="Assessment_Gliomas_Size of Tumour_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
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
                name="Location of Tumour" 
                id="Assessment_Gliomas_Location of Tumour_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
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
                name="Previous Treatment" 
                id="Assessment_Gliomas_Previous Treatment_0" 
                value="cb1" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 
              
              <label for="Assessment_Gliomas_Previous Treatment_0" class="form-check-label">
                None
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Gliomas_Previous Treatment_1" 
                value="cb2" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 

              <label for="Assessment_Gliomas_Previous Treatment_1" class="form-check-label">
                Whole Brain Radiotherapy
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Gliomas_Previous Treatment_2" 
                value="cb3" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 

              <label for="Assessment_Gliomas_Previous Treatment_2" class="form-check-label">
                Surgery
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Gliomas_Previous Treatment_3" 
                value="cb4" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 

              <label for="Assessment_Gliomas_Previous Treatment_3" class="form-check-label">
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
              <input type="text" 
              name="Date of Pre Treatment" 
              id="Assessment_Gliomas_Date of Pre Treatment_0" 
              value="" 
              data-format="tf" 
              data-mrn="{{$mrn}}" 
              data-diagcode="Gliomas" 
              data-description="Assessment_Gliomas" 
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