@extends('layouts2.app')


@section('contents')
<br>


    <div class="block-content block-content-full">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif



@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{{-- {!! Form::open(array('route' => 'hr.acrevaluationfactor.store','method'=>'POST' , 'enctype'=>'multipart/form-data')) !!} --}}
{{-- <input type="hidden" id="UserID" name="UserID" value="{{$UserID}}"> --}}



<!-- Stats -->
<div class="bg-white border-bottom">
    <div class="content content-boxed">
        <div class="row items-push text-center">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        @foreach ($details as $detail)

                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->Name}}</td>
                            <td class="text-left">Job description:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->JobDescription}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Father's Name:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->FatherName}}</td>
                            <td class="text-left">CNIC:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->Cnic}}</td>
                        </tr>


                        <tr>
                            <td class="text-left">Contact number:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->ContactNumber}} </td>
                            <td class="text-left">Mobile Network:</td>
                            <td class="font-w600 font-size-sm">{{$detail->ContactNumber}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Data of Birth:</td>
                            <td class="font-w600 font-size-sm">{{$detail->DateOfBirth}}</td>
                            <td class="text-left">PermanentAddress:</td>
                            <td class="font-w600 font-size-sm">{{$detail->PermanentAddress}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Joining date:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->JoiningDate}} </td>
                            <td class="text-left">Regularization date:</td>
                            <td class="font-w600 font-size-sm">{{$detail->RegularizationDate}}</td>
                        </tr>
                        {{-- <tr>
                            <td class="text-left">Nominee:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->Nominee}} </td>
                            <td class="text-left">DateOfRetirement:</td>
                            <td class="font-w600 font-size-sm">{{$detail->DateOfRetirement}}</td>
                        </tr> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    {{-- </div> --}}
{{-- </div> --}}
    {{-- </div> --}}
<!-- END Stats -->


<div class="row">
    {!! Form::open(array('route' => 'hr.acrpart4.store','method'=>'POST')) !!}


     <form  method="post" action="{{ route('hr.appraisalcases.store') }}">
        <input type="hidden" id="ACRID" name="ACRID" value=" {{ $details[0]->ACRID}}">
        @csrf
    <div class="col-md-12 col-xl-12">
        <!-- Updates -->
        <ul class="timeline timeline-alt py-0">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-warning">
                    <i class="fa fa-cog"></i>
                </div>
                <div class="timeline-event-block block invisible" data-toggle="appear">
                    <div class="block-header">
                        <h3 class="block-title">Performance Evaluation Questions</h3>

                        <div class="block-options">
                            <div class="timeline-event-time block-options-item font-size-sm">

                                {{-- <a href="{{route('hr.postingpromotion.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
                            </div>
                        </div>

                    </div>

                    <p style="text-align: center"><strong>Where deemed necessary on dotted lines notes indicate any relevant strong/weak points may be given. </strong></p>
                    <div class="block-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        {{-- <th class="text-center" style="width: 100px;">
                                            <i class="far fa-user"></i>
                                        </th> --}}

                                    <th style="text-align: center" class="p-3 mb-2 bg-success text-white"><br>Factors Evaluated</th>
                                    {{-- <th >Grading</th>
                                    <th>Rating</th> --}}



                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- {{dd($empeducations)}}/ --}}

                                    @foreach ($acrfactors as $acrfactor)

                                    <tr>
                                        {{-- <td>{{ $detail->EducationID }}</td> --}}
                                        {{-- {{dd($acrfactor)}} --}}
                                        <input type="hidden" id="FEID" name="FEID" value="{{$acrfactor->FEID}}">

                                        <td><strong><u>{{$acrfactor->MainQuestion}}</u></strong>,{{$acrfactor->SubQuestion}}</td>




                                    </tr>


                                    <tr>
                                        <td><input type="checkbox" name="option[]" value="{{$acrfactor->FETID}}">  {{$acrfactor->option1}}</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="option[]" value="{{$acrfactor->FETID}}">  {{$acrfactor->option2}}</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="option[]" value="{{$acrfactor->FETID}}">  {{$acrfactor->option3}}</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="option[]" value="{{$acrfactor->FETID}}">  {{$acrfactor->option4}}</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="option[]" value="{{$acrfactor->FETID}}">  {{$acrfactor->option5}}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td><input type="checkbox" name="option[]" value="{{$acrfactor->option6}}">  {{$acrfactor->option6}}</td>
                                    </tr> --}}
                                    @endforeach

                                    @foreach($acrfactor3 as  $acrfactor)
                                    <tr>
                                    <td><strong><u>{{$acrfactor->MainQuestion}}</u></strong>,{{$acrfactor->SubQuestion}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group form-row">
                                        <textarea class="form-control" name="q3" rows="2" cols="100"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <br>


                                    @endforeach

                                    <th style="text-align: center" class="p-3 mb-2 bg-success text-white"><br><i class="fas fa-pen"></i><br>Pen picture</th>

                                    <tr>

                                        <td>
                                            <div class="form-group form-row">
                                            <textarea class="form-control" name="PenPicture" rows="2" cols="100"></textarea>
                                            </div>

                <div class="form-group form-row">

                    <label class="col-md-2">Mark to reporting Officer 2 </label>
                    <div class="col-md-4">
                        <select class="form-control" name="ReportingOfficer2" id="ReportingOfficer2">
                            <option value="{{ old('GenderID') }}" >Please select</option>
                            @foreach($employesdetail as $detail)
                            <option value="{{$detail->EmployeeID}}" {{( $detail->EmployeeID == old('detail') ) ? 'selected' : '' }}>{{$detail->Name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="col-md-2">Reporting officer 2 designation</label>
                    <div class="col-md-4">
                        <input name="RO2Designation" id="RO2Designation" value="{{ old('RO2Designation') }}" autocomplete="off"  type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group form-row">

                    <label class="col-md-2">Reporting officer status</label>
                    <div class="col-md-4">
                        <select class="form-control"  name="RO2Status" id="RO2Status">
                            <option selected>Please select</option>
                            <option value="0">marked</option>
                            <option value="1">Submitted</option>
                        </select>
                            </div>

                    <label class="col-md-2">Reporting officer Updated_on</label>
                    <div class="col-md-4">
                        <input name="RO2Updated_on" id="RO2Updated_on" value="{{ old('RO2Updated_on') }}" autocomplete="off"  type="date" class="form-control">
                    </div>
                </div>
                {{-- <div class="form-group form-row">

                    <label class="col-md-2">GeneralRemarks</label>
                    <div class="col-md-4">
                        <input name="GeneralRemarks" id="GeneralRemarks" autocomplete="off" value="{{ old('GeneralRemarks') }}" type="text" class="form-control">
                    </div>

                    <label class="col-md-2">CounterSignOfficer</label>
                    <div class="col-md-4">
                        <input name="CounterSignOfficer" id="CounterSignOfficer" value="{{ old('CounterSignOfficer') }}" autocomplete="off"  type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group form-row">

                    <label class="col-md-2">CSDesignation</label>
                    <div class="col-md-4">
                        <input name="CSDesignation" id="CSDesignation" autocomplete="off" value="{{ old('CSDesignation') }}" type="text" class="form-control">
                    </div>

                    <label class="col-md-2">CSStatus</label>
                    <div class="col-md-4">
                <select class="form-control"  name="CSStatus" id="CSStatus">
                    <option selected>Please select</option>
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                </select>
                    </div>
                </div>
                <div class="form-group form-row">

                        <label class="col-md-2">CSUpdated_on</label>
                        <div class="col-md-4">
                            <input name="CSUpdated_on" id="CSUpdated_on" value="{{ old('CSUpdated_on') }}" autocomplete="off"  type="date" class="form-control"></textarea>
                        </div>

                </div>
                                                        </td>
                                                    </tr> --}}


                                <tr>
                                   <td colspan="3" style="text-align: right"> <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                   </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- END Updates -->
    </div>
    {{-- {{-- {!! Form::close() !!} --}}


</form>
</div>

@endsection
