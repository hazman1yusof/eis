<div data-description="Assessment_Pituitary_Tumour" id="div_Assessment_Pituitary_Tumour_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
  <div class="card">
    <div class="card-header">
      <h4>Assessment Pituitary Tumour {{$key+1}} 
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div> 
    
    <div class="card-body">
      <div id="form_Assessment_Pituitary_Tumour" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="mrn" value="1"> 
        <input type="hidden" name_="diagcode" value="Pituitary Tumour"> 
        <input type="hidden" name_="description" value="Assessment_Pituitary_Tumour">      
        
        <div class="row">     
          <div class="col-form-label col-4">Sign and Symptoms</div>
            <div class="col-8">
            <div class="form-group">
              <input type="text" 
                ques_num='0'
                name_="Sign and Symptoms" 
                id="Assessment_Pituitary_Tumour_Sign and Symptoms_0" 
                value="@if($rowdata[0]->tf1 != '') {{$rowdata[0]->tf1}}  @endif" 
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
                    ques_num='1'               
                    name_="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_0" 
                    value="cb1" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                    @if($rowdata[1]->cb1 == 'true') checked  @endif
                  > 
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_0" class="form-check-label">Secreting</label>          
                </div> 
                
                <div class="form-check">
                  <input type="checkbox"
                    ques_num='1'                
                    name_="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_1" 
                    value="cb2" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                    @if($rowdata[1]->cb2 == 'true') checked  @endif
                  > 
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_1" class="form-check-label">Non-Secreting</label>
                </div> 
              
                <div class="form-check">
                  <input type="checkbox"
                    ques_num='1'                 
                    name_="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_2"
                    value="cb3" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                    @if($rowdata[1]->cb3 == 'true') checked  @endif
                  >
                  <label for="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_2" class="form-check-label">Micro &lt; 1cm</label>
                </div> 
                
                <div class="form-check">
                  <input type="checkbox"
                    ques_num='1'                 
                    name_="Types of Pituitary Tumour" 
                    id="Assessment_Pituitary_Tumour_Types of Pituitary Tumour_3" 
                    value="cb4" 
                    data-format="cb" 
                    data-mrn="{{$mrn}}" 
                    data-diagcode="Pituitary Tumour" 
                    data-description="Assessment_Pituitary_Tumour" 
                    data-question="Types of Pituitary Tumour" 
                    class="form-check-input"
                    @if($rowdata[1]->cb4 == 'true') checked  @endif
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
                      ques_num='2'                
                      name_="Size of Tumour" 
                      id="Assessment_Pituitary_Tumour_Size of Tumour_0" 
                      value="@if($rowdata[2]->tf1 != '') {{$rowdata[2]->tf1}}  @endif" 
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
                      ques_num='3'                 
                      name_="Distance of tumour to Optic Nerve" 
                      id="Assessment_Pituitary_Tumour_Distance of tumour to Optic Nerve_0" 
                      value="@if($rowdata[3]->tf1 != '') {{$rowdata[3]->tf1}}  @endif" 
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
                  <textarea 
                    ques_num='4'                
                    name_="Visual Assessment *Please describe the Visual Acuity, Visual Field and any other test done." 
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
                  <textarea
                    ques_num='5'                 
                    name_="Endocrine Assessment" 
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
                  ques_num='6'                 
                  name_="Previous Treatment" 
                  id="Assessment_Pituitary_Tumour_Previous Treatment_0" 
                  value="cb1" 
                  data-format="cb" 
                  data-mrn="{{$mrn}}" 
                  data-diagcode="Pituitary Tumour" 
                  data-description="Assessment_Pituitary_Tumour" 
                  data-question="Previous Treatment" 
                  class="form-check-input"
                  @if($rowdata[6]->cb1 == 'true') checked  @endif
                > 
                <label for="Assessment_Pituitary_Tumour_Previous Treatment_0" class="form-check-label">None</label>
              </div> 
    
            <div class="form-check">
              <input type="checkbox"
                ques_num='6'                 
                name_="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_1" 
                value="cb2" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb2 == 'true') checked  @endif
              > 
              <label for="Assessment_Pituitary_Tumour_Previous Treatment_1" class="form-check-label">Craniotomy</label>
            </div> 
  
            <div class="form-check">
              <input type="checkbox"
                ques_num='6'                  
                name_="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_2" 
                value="cb3" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb3 == 'true') checked  @endif
              > 
              <label for="Assessment_Pituitary_Tumour_Previous Treatment_2" class="form-check-label">Endoscopic TSS</label>
            </div> 
    
            <div class="form-check">
              <input type="checkbox"
                ques_num='6'                  
                name_="Previous Treatment" 
                id="Assessment_Pituitary_Tumour_Previous Treatment_3" 
                value="cb4" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Pituitary Tumour" 
                data-description="Assessment_Pituitary_Tumour" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[6]->cb4 == 'true') checked  @endif

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
                ques_num='7'                  
                name_="Date of Treatment" 
                id="Assessment_Pituitary_Tumour_Date of Treatment_0" 
                value="@if($rowdata[7]->tf1 != '') {{$rowdata[7]->tf1}}  @endif" 
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