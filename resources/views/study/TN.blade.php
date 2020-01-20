<div data-description="Assessment_TN" id="div_Assessment_TN" class="col-md-9 col-lg-9 col-sm-12 div_normal">
    <div class="card">
        <div class="card-header">
            <h4>Assessment_TN</h4>
        </div> 
        <div class="card-body">
            <div id="form_Assessment_TN" action="/study" method="POST">
                <input type="hidden" name="mrn" value="{{$mrn}}">
                <input type="hidden" name="diagcode" value="TN">
                <input type="hidden" name="description" value="Assessment_TN">
                <div class="row">

                    <div class="col-form-label col-4">Distribution of Pain</div>

                    <div class="col-8">
                        <div class="form-check">
                            <input type="checkbox" 
                                name="Distribution of Pain" 
                                id="Assessment_TN_Distribution of Pain_0" 
                                value="cb1" 
                                data-format="cb" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-question="Distribution of Pain" 
                                class="form-check-input"
                                @if($use_ans_array[0] == 'true') checked  @endif
                            > 

                            <label for="Assessment_TN_Distribution of Pain_0" class="form-check-label">
                                V1
                            </label>
                        </div> 

                        <div class="form-check">
                            <input type="checkbox" 
                                name="Distribution of Pain" 
                                id="Assessment_TN_Distribution of Pain_1" 
                                value="cb2" 
                                data-format="cb" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-question="Distribution of Pain" 
                                class="form-check-input"
                                @if($use_ans_array[1] == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Distribution of Pain_1" class="form-check-label">
                                V2
                            </label>
                        </div> 

                        <div class="form-check">
                            <input type="checkbox" 
                                name="Distribution of Pain" 
                                id="Assessment_TN_Distribution of Pain_2" 
                                value="cb3" 
                                data-format="cb" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                data-question="Distribution of Pain" 
                                class="form-check-input"
                                @if($use_ans_array[2] == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Distribution of Pain_2" class="form-check-label">
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
                                name="TN Side" 
                                id="Assessment_TN_TN Side_0" 
                                value="op1" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                                @if($use_ans_array[0] == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_TN Side_0" class="form-check-label">
                                Unilateral
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="TN Side" 
                                id="Assessment_TN_TN Side_1" 
                                value="op2" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                                @if($use_ans_array[1] == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_TN Side_1" class="form-check-label">
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
                                name="Typical" 
                                id="Assessment_TN_Typical_0" 
                                value="op1" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                                @if($use_ans_array[1] == 'true') checked  @endif
                            > 
                            <label for="Assessment_TN_Typical_0" class="form-check-label">Typical</label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="Typical" 
                                id="Assessment_TN_Typical_1" 
                                value="op2" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_Typical_1" class="form-check-label">Atypical</label>
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Etiology</div> 
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" 
                                name="Etiology" 
                                id="Assessment_TN_Etiology_0" 
                                value="" 
                                data-format="tf" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
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
                                name="BNI Pain" 
                                id="Assessment_TN_BNI Pain_0" 
                                value="op1" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Pain_0" class="form-check-label">
                                    1 - No Pain, No Medication
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Pain" 
                                id="Assessment_TN_BNI Pain_1" 
                                value="op2" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Pain_1" class="form-check-label">
                                2- Occasional Pain, Not Requiring Medication
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Pain" 
                                id="Assessment_TN_BNI Pain_2" 
                                value="op3" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Pain_2" class="form-check-label">
                                Some Pain, Adequately control by Medicine
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Pain" 
                                id="Assessment_TN_BNI Pain_3" 
                                value="op4" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Pain_3" class="form-check-label">
                                4- Some Pain, Not Adequately control by Medicine
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Pain" 
                                id="Assessment_TN_BNI Pain_4" 
                                value="op5" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Pain_4" class="form-check-label">
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
                                name="BNI Numb" 
                                id="Assessment_TN_BNI Numb_0" 
                                value="op1" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Numb_0" class="form-check-label">
                                1- No Facial Numbness
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Numb" 
                                id="Assessment_TN_BNI Numb_1" 
                                value="op2" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Numb_1" class="form-check-label">
                                2- Mild Facial Numbness, not bothersome
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Numb" 
                                id="Assessment_TN_BNI Numb_2" 
                                value="op3" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Numb_2" class="form-check-label">
                                3- Facial Numbness, somewhat bothersome
                            </label>
                        </div> 
                        <div class="form-check">
                            <input type="radio" 
                                name="BNI Numb" 
                                id="Assessment_TN_BNI Numb_3" 
                                value="op4" 
                                data-format="op" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
                                class="form-check-input"
                            > 
                            <label for="Assessment_TN_BNI Numb_3" class="form-check-label">
                                4- Facial Numbness, very bothersome
                            </label>
                        </div>
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Total BNI Score</div> 
                    <div class="col-8">
                        
                    </div>
                </div> 

                    <hr> 

                <div class="row">
                    <div class="col-form-label col-4">Any Pain Killer Prescribed?</div> 
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" 
                                name="Any Pain Killer Prescribed?" 
                                id="Assessment_TN_Any Pain Killer Prescribed?_0" 
                                value="" 
                                data-format="tf" 
                                data-mrn="{{$mrn}}" 
                                data-diagcode="TN" 
                                data-description="Assessment_TN" 
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