<div data-description="Assessment_Pituitary_Tumour" id="div_Assessment_Pituitary_Tumour" class="col-md-9 col-lg-9 col-sm-12 div_normal  ">
  <div class="card">
    <div class="card-header">
      <h4>Assessment_Pituitary_Tumour</h4>
    </div> 
    
    <div class="card-body">
      <div id="form_Assessment_Pituitary_Tumour" action="/study" method="POST">
        <input type="hidden" name="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name="mrn" value="1"> 
        <input type="hidden" name="diagcode" value="Pituitary Tumour"> 
        <input type="hidden" name="description" value="Assessment_Pituitary_Tumour">      
        
        <div class="row">     
          <div class="col-form-label col-4">Sign and Symptoms</div>
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name="Sign and Symptoms" 
                id="Assessment_Pituitary_Tumour_Sign and Symptoms_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                class="form-control"
              >
            </div>
          </div>
        </div> 
      
            <hr> 
            <div class="row">
              <div class="col-form-label col-4">Types of Pituitary Tumour</div>      
                <div class="col-8">
                <div class="form-check">
                  <input type="checkbox" 
                    name="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_0" 
                    value="cb1" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                  > 
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_0" class="form-check-label">Secreting</label>          
                </div> 
                
                <div class="form-check">
                  <input type="checkbox" 
                    name="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_1" 
                    value="cb2" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                  > 
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_1" class="form-check-label">Non-Secreting</label>
                </div> 
              
                <div class="form-check">
                  <input type="checkbox" 
                    name="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_2"
                    value="cb3" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                  >
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_2" class="form-check-label">Micro &lt; 1cm</label>
                </div> 
                
                <div class="form-check">
                  <input type="checkbox" 
                    name="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_3" 
                    value="cb4" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                  > 
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_3" class="form-check-label">Macro &gt; 1cm</label>
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
                      id="Assessment_Pituitary_Tumour_Size of Tumour_0" 
                      value="" 
                      data-format="tf" 
                      data-mrn="{{$mrn}}" 
                      data-diagcode="Pituitary Tumour" 
                      data-description="Assessment_Pituitary_Tumour" 
                      class="form-control"
                    >
                  </div>
                </div>
              </div> 
      
            <hr> 
              <div class="row">
                <div class="col-form-label col-4">Distance of tumour to Optic Nerve</div>         
                  <div class="col-8">
                  <div class="form-group">
                    <input type="text" 
                      name="Distance of tumour to Optic Nerve" 
                      id="Assessment_Pituitary_Tumour_Distance of tumour to Optic Nerve_0" 
                      value="" 
                      data-format="tf" 
                      data-mrn="{{$mrn}}" 
                      data-diagcode="Pituitary Tumour" 
                      data-description="Assessment_Pituitary_Tumour" 
                      class="form-control"
                    >
                  </div>
                </div>
              </div> 
    
            <hr> 
              <div class="row">
                <div class="col-form-label col-4">Visual Assessment *Please describe the Visual Acuity, Visual Field and any other test done.</div> 
                
                <div class="col-8">
                <div class="form-group">
                  <textarea name="Visual Assessment *Please describe the Visual Acuity, Visual Field and any other test done." 
                            id="Assessment_Pituitary_Tumour_Visual Assessment *Please describe the Visual Acuity, Visual Field and any other test done. _0" 
                            data-format="ta" 
                            data-mrn="{{$mrn}}" 
                            data-diagcode="Pituitary Tumour" 
                            data-description="Assessment_Pituitary_Tumour" 
                            class="form-control" 
                            style="height: 80px;"
                        >
                  </textarea>
                </div>
              </div>
            </div> 
    
            <hr> 
              <div class="row">
                <div class="col-form-label col-4">Endocrine Assessment</div> 
                
                <div class="col-8">
                <div class="form-group">
                  <textarea name="Endocrine Assessment" 
                            id="Assessment_Pituitary_Tumour_Endocrine Assessment_0" 
                            data-format="ta" 
                            data-mrn="{{$mrn}}" 
                            data-diagcode="Pituitary Tumour" 
                            data-description="Assessment_Pituitary_Tumour" 
                            class="form-control" 
                            style="height: 80px;"
                        >
                  </textarea>
                </div>
              </div>
            </div> 
    
            <hr> 
              <div class="row">
              <div class="col-form-label col-4">Previous Treatment</div> 
              
              <div class="col-8">
              <div class="form-check">
                <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_0" 
                value="cb1" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 
              <label for="Assessment_Pituitary_Tumour_Previous Treatment_0" class="form-check-label">None</label>
            </div> 
    
            <div class="form-check">
              <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_1" 
                value="cb2" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 
              <label for="Assessment_Pituitary_Tumour_Previous Treatment_1" class="form-check-label">Craniotomy</label>
            </div> 
  
            <div class="form-check">
              <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_2" 
                value="cb3" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 
              <label for="Assessment_Pituitary_Tumour_Previous Treatment_2" class="form-check-label">Endoscopic TSS</label>
            </div> 
    
            <div class="form-check">
              <input type="checkbox" 
                name="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_3" 
                value="cb4" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
              > 
              <label for="Assessment_Pituitary_Tumour_Previous Treatment_3" class="form-check-label">Radiotherapy</label>
            </div>
          </div>
        </div> 

        <hr> 
          <div class="row">
            <div class="col-form-label col-4">Date of Treatment</div> 
          
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name="Date of Treatment" 
                id="Assessment_Pituitary_Tumour_Date of Treatment_0" 
                value="" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
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