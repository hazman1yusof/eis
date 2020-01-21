<div data-description="Assessment_Gliomas" id="div_Assessment_Gliomas_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif  ">
  <div class="card">
    <div class="card-header">
      <h4>Assessment Gliomas {{$key+1}
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div> 
    <div class="card-body">
      <div id="form_Assessment_Gliomas" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="mrn" value="{{$mrn}}"> <input type="hidden" name_="diagcode" value="Gliomas"> 
        <input type="hidden" name_="description" value="Assessment_Gliomas"> 
        <div class="row">
        
          <div class="col-form-label col-4"> Sign and Symptoms </div> 
          
          <div class="col-8">
            <div class="form-group">
              <textarea name_="Sign and Symptoms" 
                ques_num='0'
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
                name_="Size of Tumour" 
                ques_num='1'
                id="Assessment_Gliomas_Size of Tumour_0" 
                value="@if($rowdata[1]->tf1 != '') {{$rowdata[1]->tf1}}  @endif" 
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
                name_="Location of Tumour" 
                ques_num='2'
                id="Assessment_Gliomas_Location of Tumour_0" 
                value="@if($rowdata[2]->tf2 != '') {{$rowdata[2]->tf2}}  @endif" 
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
                name_="Previous Treatment" 
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_0" 
                value="cb1" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb1 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Gliomas_Previous Treatment_0" class="form-check-label">
                None
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment" 
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_1" 
                value="cb2" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb2 == 'true') checked  @endif
              > 

              <label for="Assessment_Gliomas_Previous Treatment_1" class="form-check-label">
                Whole Brain Radiotherapy
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment" 
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_2" 
                value="cb3" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb3 == 'true') checked  @endif
              > 

              <label for="Assessment_Gliomas_Previous Treatment_2" class="form-check-label">
                Surgery
              </label>
            </div> 
            
            <div class="form-check">
              <input type="checkbox" 
                name_="Previous Treatment"  
                ques_num='3'
                id="Assessment_Gliomas_Previous Treatment_3" 
                value="cb4" 
                data-format="cb" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Gliomas" 
                data-description="Assessment_Gliomas" 
                data-question="Previous Treatment" 
                class="form-check-input"
                @if($rowdata[3]->cb4 == 'true') checked  @endif
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
              name_="Date of Pre Treatment" 
              ques_num='4'
              id="Assessment_Gliomas_Date of Pre Treatment_0" 
              value="@if($rowdata[4]->tf3 != '') {{$rowdata[4]->tf3}}  @endif" 
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