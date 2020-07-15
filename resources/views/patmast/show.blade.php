@extends('layouts.landing')

@section('title', 'Confirm Patmast')

@section('body')
    
    <script type="text/javascript">
        function closeWindow() {
            window.open('','_parent','');
            window.close();
        }
        var patmast = {!! json_encode($patmast) !!}
    </script>

    <form class="form-horizontal" id="patmast_form" style="padding: 1em 3em 1em 3em; width: 70%; margin: auto" >
        <div class="modal-content" >
            <div class="modal-header label-warning" style="padding: 1em 3em 1em 3em">
                <b style="font-size: 14px;color: white;letter-spacing: 0.5px;">Patient Information</b>
            </div>

            <div class="panel panel-default" style="margin: 1em 3em 1em 3em">
            <table class="table table-striped table-hover table-bordered" style="letter-spacing: 0.3px;">
                <tbody>
                    <tr>
                        <th width="10%" class="warning">MRN</th>
                        <td>{{$patmast->MRN}}</td>
                    </tr>
                    <tr>
                        <th class="warning">Name</th>
                        <td>{{$patmast->Name}}</td>
                    </tr>
                    <tr>
                        <th class="warning">Address</th>
                        <td>{{$patmast->Address1}}</td>
                    </tr>
                    <tr>
                        <th class="warning"> </th>
                        <td>{{$patmast->Address2}}</td>
                    </tr>
                    <tr>
                        <th class="warning"> </th>
                        <td>{{$patmast->Address3}}</td>
                    </tr>
                    <tr>
                        <th class="warning">I/C</th>
                        <td>{{$patmast->Newic}}</td>
                    </tr>
                    <tr>
                        <th class="warning">DOB</th>
                        @if(!empty($patmast->DOB))
                        <td id="dob">{{\Carbon\Carbon::createFromFormat("Y-m-d", $patmast->DOB)->format("d-m-Y")}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th class="warning">Race</th>
                        <td>{{$patmast->RaceCode}}</td>
                    </tr>
                    <tr>
                        <th class="warning">Age</th>
                        @if(!empty($patmast->DOB))
                        <td id="age">{{\Carbon\Carbon::createFromFormat("Y-m-d", $patmast->DOB)->age}}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

            <div class="modal-footer">
                <button id="btn_register_close" type="button" class="btn btn-default" onclick="closeWindow();return false;">Confirm</button>
            </div>
        </div>
    </form>

@endsection

@section('script')

    <script src="{{ asset('assets/js/patmast.js') }}"></script>
@endsection