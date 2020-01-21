<div data-description="Assessment_Dural_AV_Fistula" id="div_Assessment_Dural_AV_Fistula_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif  ">
  <div class="card">
    <div class="card-header">
      <h4>Assessment Dural AV Fistula {{$key+1}
        <div class="font-weight-600 text-muted text-small"><b>Visit Date:</b> {{$visit->regdate}}</div>
        <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </h4>
    </div> 
    <div class="card-body">
      <div id="form_Assessment_Dural_AV_Fistula" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="mrn" value="{{$mrn}}"> 
        <input type="hidden" name_="diagcode" value="Dural AV Fistula"> 
        <input type="hidden" name_="description" value="Assessment_Dural_AV_Fistula"> 
        <div class="row">
        
          <div class="col-form-label col-4"> Location of Fistula </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Location of Fistula" 
                ques_num='0'
                id="Assessment_Dural_AV_Fistula_Location of Fistula_0" 
                value="@if($rowdata[0]->tf1 != '') {{$rowdata[0]->tf1}}  @endif" 
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">

          <div class="col-form-label col-4"> Arterial Feeder </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Arterial Feeder" 
                ques_num='1'
                id="Assessment_Dural_AV_Fistula_Arterial Feeder_0" 
                value="@if($rowdata[1]->tf2 != '') {{$rowdata[1]->tf2}}  @endif"
                data-format="tf" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-control"
              >
            </div>
          </div>

        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Borden Angiographic Grade </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                name_="Borden Angiographic Grade" 
                ques_num='2'
                id="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[2]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_0" class="form-check-label">
                1. Direct communication of meningeal arteries with a meningeal vein or dural venous sinus and exhibit normal antegrade flow
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                name_="Borden Angiographic Grade" 
                ques_num='2'
                id="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[2]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_1" class="form-check-label">
                2. Shunts between the meningeal arteries and dural sinus, with retrograde flow into the subarachnoid veins
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                name_="Borden Angiographic Grade" 
                ques_num='2'
                id="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_2" 
                value="op3" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[2]->op3 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_2" class="form-check-label">
                3. Direct drainage of meningeal arteries into subarachnoid veins or an “isolated” sinus segment
              </label>
            </div>
          </div>
          
        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Barrow Classification </div> 
          
          <div class="col-8">
            <div class="form-group">
              <select name_="Barrow Classification" 
                ques_num='3'
                id="Assessment_Dural_AV_Fistula_Barrow Classification" 
                data-format="dd" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-control"
              >
              
                <option value="dd1">A</option> 
                <option value="dd2">B</option> 
                <option value="dd3">C</option> 
                <option value="dd4">D</option>
              </select>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Corticovenus Drainage </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='4'
                name_="Corticovenus Drainage" 
                id="Assessment_Dural_AV_Fistula_Corticovenus Drainage_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[4]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Corticovenus Drainage_0" class="form-check-label">
                Yes
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                ques_num='4'
                name_="Corticovenus Drainage" 
                id="Assessment_Dural_AV_Fistula_Corticovenus Drainage_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[4]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Corticovenus Drainage_1" class="form-check-label">
                No
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Anatomy of Fistula </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='5'
                name_="Anatomy of Fistula" 
                id="Assessment_Dural_AV_Fistula_Anatomy of Fistula_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[5]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Anatomy of Fistula_0" class="form-check-label">
                Single Hole
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                ques_num='5'
                name_="Anatomy of Fistula" 
                id="Assessment_Dural_AV_Fistula_Anatomy of Fistula_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[5]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Dural_AV_Fistula_Anatomy of Fistula_1" class="form-check-label">
                Multi Hole
              </label>
            </div>
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Pretreatment (Embolization/Surgery) Done </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='6'
                name_="Pretreatment (Embolization/Surgery) Done" 
                id="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_0" 
                value="op1" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[6]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_0" class="form-check-label">
                Yes
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='6'
                name_="Pretreatment (Embolization/Surgery) Done" 
                id="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_1" 
                value="op2" 
                data-format="op" 
                data-mrn="{{$mrn}}" 
                data-diagcode="Dural AV Fistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                class="form-check-input"
                @if($rowdata[6]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_1" class="form-check-label">
                No
              </label>
            </div>
          </div>

        </div> 
        
          <hr>
        
      </div>
    </div>
  </div>
</div>