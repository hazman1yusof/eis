<div data-description="Assessment_Dural_AV_Fistula" id="div_Assessment_Dural_AV_Fistula_{{$key}}" class="col-md-_{{$key}}9
data-key={{$key}} col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif  ">
  <div class="card">

    <div class="card-header"><div class="row">
      <div class="col-12">
          <h4>Assessment DuralAVFistula {{$key+1}} </h4>
      </div>
      <div class="col-12">
        <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Visit Date:</b> <span id="regdate-span-{{$key}}">{{$visit->regdate}}</span>
              <div class="form-row">
                <input type="date" class="form-control col-md-6 regdate-date-{{$key}}"
                    value="{{$visit->regdate2}}"  
                    name="regdate" 
                    data-diagcode="DuralAVFistula" 
                    data-pm_idno="{{$pm_idno}}"
                    data-key="{{$key}}"
                    data-progress="{{$visit->progress}}"
                >
              </div>
          </div>
      </div>

      <div class="col-12">
          <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Status:</b> <span id="completed-span-{{$key}}">{{$visit->completed}}</span>
              <div class="form-row">
                  <button type="button" class="btn btn-icon btn-success col-md-3 completed-save"
                      data-value='true'
                      data-diagcode="DuralAVFistula" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      completed <i class="fas fa-check"></i>
                  </button>
                  &nbsp;
                  <button type="button" class="btn btn-icon btn-danger col-md-3 completed-save"
                      data-value='false'
                      data-diagcode="DuralAVFistula" 
                      data-pm_idno="{{$pm_idno}}"
                      data-key="{{$key}}"
                      data-progress="{{$visit->progress}}"
                  >
                      uncompleted <i class="fas fa-times"></i>
                  </button>
              </div>
          </div>
          <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div>
      </div>
    </div></div>

    <div class="card-body">
      <div id="form_Assessment_Dural_AV_Fistula" action="/study" method="POST">
        <input type="hidden" name_="_token" value="CBb4Y9ThONoAXRrWArHw2v0kU10204PH22aURjBO"> 
        <input type="hidden" name_="pm_idno" value="{{$pm_idno}}"> 
        <input type="hidden" name_="diagcode" value="DuralAVFistula"> 
        <input type="hidden" name_="description" value="Assessment_Dural_AV_Fistula"> 
        <div class="row">
        
          <div class="col-form-label col-4"> Location of Fistula </div> 
          
          <div class="col-8">
            <div class="form-group">
              <input type="text" 
                name_="Location of Fistula" 
                ques_num='0'
                id="Assessment_Dural_AV_Fistula_Location of Fistula_0_{{$key}}"
                data-key={{$key}} 
                value="@if($rowdata[0]->tf1 != ''){{$rowdata[0]->tf1}}@endif" 
                data-format="tf" 
                data-tf_key="tf1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
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
                id="Assessment_Dural_AV_Fistula_Arterial Feeder_0_{{$key}}"
                data-key={{$key}} 
                value="@if($rowdata[1]->tf1 != ''){{$rowdata[1]->tf1}}@endif"
                data-format="tf" 
                data-tf_key="tf1"
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
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
                name="Borden Angiographic Grade_{{$key}}"
                name_="Borden Angiographic Grade" 
                ques_num='2'
                id="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_0_{{$key}}"
                data-key={{$key}} 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op1 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_0_{{$key}}" class="form-check-label">
                1. Direct communication of meningeal arteries with a meningeal vein or dural venous sinus and exhibit normal antegrade flow
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                name="Borden Angiographic Grade_{{$key}}"
                name_="Borden Angiographic Grade" 
                ques_num='2'
                id="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_1_{{$key}}"
                data-key={{$key}} 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_1_{{$key}}" class="form-check-label">
                2. Shunts between the meningeal arteries and dural sinus, with retrograde flow into the subarachnoid veins
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                name="Borden Angiographic Grade_{{$key}}"
                name_="Borden Angiographic Grade" 
                ques_num='2'
                id="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_2_{{$key}}"
                data-key={{$key}} 
                value="op3" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[2]->op3 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Borden Angiographic Grade_2_{{$key}}" class="form-check-label">
                3. Direct drainage of meningeal arteries into subarachnoid veins or an “isolated” sinus segment
              </label>
            </div>
          </div>
          
        </div> 
        
          <hr> 
          
        <div class="row">
        
          <div class="col-form-label col-4"> Barrow Classification </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='3'
                name="Barrow Classification_{{$key}}" 
                name_="Barrow Classification" 
                id="Assessment_Dural_AV_Fistula_Barrow Classification_0_{{$key}}"
                data-key={{$key}} 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[3]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Barrow Classification_0_{{$key}}" class="form-check-label">
                A
              </label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                ques_num='3'
                name="Barrow Classification_{{$key}}" 
                name_="Barrow Classification" 
                id="Assessment_Dural_AV_Fistula_Barrow Classification_1_{{$key}}"
                data-key={{$key}} 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[3]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Barrow Classification_1_{{$key}}" class="form-check-label">
                B
              </label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                ques_num='3'
                name="Barrow Classification_{{$key}}" 
                name_="Barrow Classification" 
                id="Assessment_Dural_AV_Fistula_Barrow Classification_2_{{$key}}"
                data-key={{$key}} 
                value="op3" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[3]->op3 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Barrow Classification_2_{{$key}}" class="form-check-label">
                C
              </label>
            </div> 

            <div class="form-check">
              <input type="radio" 
                ques_num='3'
                name="Barrow Classification_{{$key}}" 
                name_="Barrow Classification" 
                id="Assessment_Dural_AV_Fistula_Barrow Classification_3_{{$key}}"
                data-key={{$key}} 
                value="op4" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[3]->op4 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Barrow Classification_3_{{$key}}" class="form-check-label">
                D
              </label>
            </div> 


            <!-- <div class="form-group">
              <select name_="Barrow Classification" 
                ques_num='3'
                id="Assessment_Dural_AV_Fistula_Barrow Classification_{{$key}}"
                data-key={{$key}} 
                data-format="dd" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-control"
              >
              
                <option value="dd1">A</option> 
                <option value="dd2">B</option> 
                <option value="dd3">C</option> 
                <option value="dd4">D</option>
              </select>
            </div> -->
          </div>

        </div> 
        
          <hr> 
        
        <div class="row">
        
          <div class="col-form-label col-4"> Corticovenus Drainage </div> 
          
          <div class="col-8">
            <div class="form-check">
              <input type="radio" 
                ques_num='4'
                name="Corticovenus Drainage_{{$key}}" 
                name_="Corticovenus Drainage" 
                id="Assessment_Dural_AV_Fistula_Corticovenus Drainage_0_{{$key}}"
                data-key={{$key}} 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Corticovenus Drainage_0_{{$key}}" class="form-check-label">
                Yes
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                ques_num='4'
                name="Corticovenus Drainage_{{$key}}" 
                name_="Corticovenus Drainage" 
                id="Assessment_Dural_AV_Fistula_Corticovenus Drainage_1_{{$key}}"
                data-key={{$key}} 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[4]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Corticovenus Drainage_1_{{$key}}" class="form-check-label">
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
                name="Anatomy of Fistula_{{$key}}" 
                name_="Anatomy of Fistula" 
                id="Assessment_Dural_AV_Fistula_Anatomy of Fistula_0_{{$key}}"
                data-key={{$key}} 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[5]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Corticovenus of Fistula_0_{{$key}}" class="form-check-label">
                Single Hole
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio" 
                ques_num='5'
                name="Anatomy of Fistula_{{$key}}" 
                name_="Anatomy of Fistula" 
                id="Assessment_Dural_AV_Fistula_Anatomy of Fistula_1_{{$key}}"
                data-key={{$key}} 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[5]->op2 == 'true') checked  @endif
              > 
              
              <label for="Assessment_Dural_AV_Fistula_Anatomy of Fistula_1_{{$key}}" class="form-check-label">
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
                name="Pretreatment (Embolization/Surgery) Done_{{$key}}" 
                name_="Pretreatment (Embolization/Surgery) Done" 
                id="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_0_{{$key}}"
                data-key={{$key}} 
                value="op1" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op1 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_0_{{$key}}" class="form-check-label">
                Yes
              </label>
            </div> 
            
            <div class="form-check">
              <input type="radio"  
                ques_num='6'
                name="Pretreatment (Embolization/Surgery) Done_{{$key}}" 
                name_="Pretreatment (Embolization/Surgery) Done" 
                id="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_1_{{$key}}"
                data-key={{$key}} 
                value="op2" 
                data-format="op" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                class="form-check-input"
                @if($rowdata[6]->op2 == 'true') checked  @endif
              > 

              <label for="Assessment_Dural_AV_Fistula_Pretreatment (Embolization/Surgery) Done_1_{{$key}}" class="form-check-label">
                No
              </label>
            </div>
          </div>

        </div> 
        
          <hr>

        <div class="row">
          <div class="col-form-label col-4"> Note </div> 
          <div class="col-8">
            <div class="form-group">
              <textarea 
                ques_num='7'                
                name_="Note" 
                id="Assessment_Dural_AV_Fistula_Note_0_{{$key}}"
                data-key={{$key}} 
                data-format="ta" 
                data-pm_idno="{{$pm_idno}}" 
                data-diagcode="DuralAVFistula" 
                data-description="Assessment_Dural_AV_Fistula" 
                data-regdate="{{$visit->regdate2}}"
                data-progress="{{$visit->progress}}"
                data-ta_key="ta1"
                class="form-control" 
                style="height: 80px;"
              >@if($rowdata[7]->ta1 != ''){!!$rowdata[7]->ta1!!}@endif</textarea>
            </div>
          </div>
        </div>

          <hr>
        
      </div>
    </div>
  </div>
</div>