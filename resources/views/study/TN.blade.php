<div data-description="Assessment_TN" id="div_Assessment_TN_{{$key}}" class="col-md-9 col-lg-9 col-sm-12 @if($key != 0) _hidediv  @endif">
    <div class="card">
        <div class="card-header">
            <h4>Assessment Trigeminal Neuralgia {{$key+1}} 
            <div class="font-weight-600 text-muted text-small visit-date-upd" data-key="{{$key}}"><b>Visit Date:</b> <span id="regdate-span-{{$key}}">{{$visit->regdate}}</span>
                <div class="form-row regdate-upd-all regdate-upd-{{$key}}" style="display: none;">
                    <input type="date" class="form-control col-md-10 regdate-date-{{$key}}" 
                        name="regdate" 
                        data-diagcode="TN" 
                        data-mrn="{{$mrn}}"
                        data-key="{{$key}}"
                        data-progress="{{$visit->progress}}"
                    >
                    <button type="button" class="btn btn-icon btn-success col-md-2 regdate-save" data-key="{{$key}}">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
            <div class="font-weight-600 text-muted text-small"><b>Patient:</b> {{$pat_mast->Name}}</div></h4>
        </div> 
        <div class="card-body">
            <div id="form_Assessment_TN" action="/study" method="POST_{{$key}}">
                <input type="hidden" name_="mrn" value="{{$mrn}}">
                <input type="hidden" name_="diagcode" value="TN">
                <input type="hidden" name_="description" value="Assessment_TN">
                <div class="row">

                    <div class="col-form-label col-4">Distribution of Pain</div>

                    <div class="col-8">
                        <div class="form-check">
                            <input type="checkbox" 
                                name_="Distribution of Pain" 
                                ques_num='0'
                                id="Assessment_TN_Distribution of Pain_0_{{$key}}" 
                                value="cb1" 
                                data-format="cb" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                data-question="Distribution of Pain" 
                                class="form-check-input"
                                @if($rowdata[0]->cb1 == 'true') checked  @endif
                            > 

                            <label for="Assessment_TN_Distribution of Pain_0_{{$key}}" class="form-check-label">
                                V1
                            </label>
                        </div> 

                        <div class="form-check">
                            <input type="checkbox" 
                                name_="Distribution of Pain" 
                                ques_num='0'
                                id="Assessment_TN_Distribution of Pain_1_{{$key}}" 
                                value="cb2" 
                                data-format="cb" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                data-question="Distribution of Pain" 
                                class="form-check-input"
                                @if($rowdata[0]->cb2 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Distribution of Pain_1_{{$key}}" class="form-check-label">
                                V2
                            </label>
                        </div> 

                        <div class="form-check">
                            <input type="checkbox" 
                                name_="Distribution of Pain" 
                                ques_num='0'
                                id="Assessment_TN_Distribution of Pain_2_{{$key}}" 
                                value="cb3" 
                                data-format="cb" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                data-question="Distribution of Pain" 
                                class="form-check-input"
                                @if($rowdata[0]->cb3 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Distribution of Pain_2_{{$key}}" class="form-check-label">
                                V3
                            </label>
                        </div>
                    </div>

                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">TN Side</div> 
                    <div class="col-8">
                        <div class="form-check">
                            <input type="radio" 
                                name_="TN Side" 
                                name="TN_Side_{{$key}}"
                                ques_num='1'
                                id="Assessment_TN_TN Side_0_{{$key}}" 
                                value="op1" 
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[1]->op1 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_TN Side_0_{{$key}}" class="form-check-label">
                                Unilateral
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="TN Side" 
                                name="TN_Side_{{$key}}"
                                ques_num='1'
                                id="Assessment_TN_TN Side_1_{{$key}}" 
                                value="op2" 
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[1]->op2 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_TN Side_1_{{$key}}" class="form-check-label">
                                Bilateral
                            </label>
                        </div>
                    </div>

                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Typical</div> 
                    <div class="col-8">
                        <div class="form-check">
                            <input type="radio" 
                                name_="Typical" 
                                name="Typical_{{$key}}"
                                ques_num='2'
                                id="Assessment_TN_Typical_0_{{$key}}" 
                                value="op1" 
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[2]->op1 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Typical_0_{{$key}}" class="form-check-label">Typical</label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="Typical" 
                                name="Typical_{{$key}}"
                                ques_num='2'
                                id="Assessment_TN_Typical_1_{{$key}}" 
                                value="op2" 
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[2]->op2 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Typical_1_{{$key}}" class="form-check-label">Atypical</label>
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Etiology</div> 
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" 
                                name_="Etiology" 
                                ques_num='3'
                                id="Assessment_TN_Etiology_0_{{$key}}" 
                                value="@if($rowdata[3]->tf1 != ''){{$rowdata[3]->tf1}}@endif" 
                                data-format="tf" 
                                data-key="{{$key}}"
                                data-tf_key="tf1"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-control"
                                
                            >
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">BNI Pain</div> 
                    <div class="col-8">
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Pain" 
                                name="BNI Pain_{{$key}}"
                                ques_num='4'
                                id="Assessment_TN_BNI Pain_0_{{$key}}" 
                                value="op1" 
                                data-point="0"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[4]->op1 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Pain_0_{{$key}}" class="form-check-label">
                                    1 - No Pain, No Medication
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Pain"  
                                name="BNI Pain_{{$key}}"
                                ques_num='4'
                                id="Assessment_TN_BNI Pain_1_{{$key}}" 
                                value="op2" 
                                data-point="1"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[4]->op2 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Pain_1_{{$key}}" class="form-check-label">
                                2- Occasional Pain, Not Requiring Medication
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Pain"  
                                name="BNI Pain_{{$key}}"
                                ques_num='4'
                                id="Assessment_TN_BNI Pain_2_{{$key}}" 
                                value="op3" 
                                data-point="2"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[4]->op3 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Pain_2_{{$key}}" class="form-check-label">
                                Some Pain, Adequately control by Medicine
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Pain"  
                                name="BNI Pain_{{$key}}"
                                ques_num='4'
                                id="Assessment_TN_BNI Pain_3_{{$key}}" 
                                value="op4" 
                                data-point="3"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[4]->op4 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Pain_3_{{$key}}" class="form-check-label">
                                4- Some Pain, Not Adequately control by Medicine
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Pain"  
                                name="BNI Pain_{{$key}}"
                                ques_num='4'
                                id="Assessment_TN_BNI Pain_4_{{$key}}" 
                                value="op5" 
                                data-point="4"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[4]->op5 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Pain_4_{{$key}}" class="form-check-label">
                                5- Severe Pain / No Pain Relief
                            </label>
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">BNI Numb</div> 
                    <div class="col-8">
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Numb"  
                                name="BNI Numb_{{$key}}"
                                ques_num='5'
                                id="Assessment_TN_BNI Numb_0_{{$key}}" 
                                value="op1" 
                                data-point="0"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[5]->op1 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Numb_0_{{$key}}" class="form-check-label">
                                1- No Facial Numbness
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Numb" 
                                name="BNI Numb_{{$key}}"
                                ques_num='5'
                                id="Assessment_TN_BNI Numb_1_{{$key}}" 
                                value="op2" 
                                data-point="1"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[5]->op2 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Numb_1_{{$key}}" class="form-check-label">
                                2- Mild Facial Numbness, not bothersome
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Numb" 
                                name="BNI Numb_{{$key}}"
                                ques_num='5'
                                id="Assessment_TN_BNI Numb_2_{{$key}}" 
                                value="op3" 
                                data-point="2"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[5]->op3 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Numb_2_{{$key}}" class="form-check-label">
                                3- Facial Numbness, somewhat bothersome
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name_="BNI Numb" 
                                name="BNI Numb_{{$key}}"
                                ques_num='5'
                                id="Assessment_TN_BNI Numb_3_{{$key}}" 
                                value="op4" 
                                data-point="3"
                                data-format="op" 
                                data-key="{{$key}}"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-check-input"
                                @if($rowdata[5]->op4 == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_BNI Numb_3_{{$key}}" class="form-check-label">
                                4- Facial Numbness, very bothersome
                            </label>
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Total BNI Score</div> 
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" 
                                readonly="" 
                                name_="Total BNI Score" 
                                ques_num='6'
                                id="Assessment_TN_Total_BNI_Score_0_{{$key}}" 
                                value="@if($rowdata[6]->tf1 != ''){{$rowdata[6]->tf1}}@endif" 
                                data-format="tf" 
                                data-key="{{$key}}"
                                data-tf_key="tf1"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-control"
                            >
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Any Pain Killer Prescribed?</div> 
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" 
                                name_="Any Pain Killer Prescribed?" 
                                ques_num='7'
                                id="Assessment_TN_Any Pain Killer Prescribed?_0_{{$key}}" 
                                value="@if($rowdata[7]->tf1 != ''){{$rowdata[7]->tf1}}@endif" 
                                data-format="tf" 
                                data-key="{{$key}}"
                                data-tf_key="tf1"
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-regdate="{{$visit->regdate2}}"
                                data-progress="{{$visit->progress}}"
                                class="form-control"
                            >
                        </div>
                    </div>
                </div> 

                    <hr>

                <div class="row">
                  <div class="col-form-label col-4"> Note </div> 
                  <div class="col-8">
                    <div class="form-group">
                      <textarea 
                        ques_num='8'                
                        name_="Note" 
                        id="Assessment_TN_Note_0_{{$key}}" 
                        data-format="ta" 
                        data-key="{{$key}}"
                        data-mrn="{{$mrn}}" 
                        data-diagcode="TN" 
                        data-description="Assessment_TN" 
                        data-regdate="{{$visit->regdate2}}"
                        data-progress="{{$visit->progress}}"
                        data-ta_key="ta1"
                        class="form-control" 
                        style="height: 80px;"
                      >@if($rowdata[8]->ta1 != ''){!!$rowdata[8]->ta1!!}@endif
                      </textarea>
                    </div>
                  </div>
                </div>

                  <hr>

            </div>
        </div>
    </div>
</div>