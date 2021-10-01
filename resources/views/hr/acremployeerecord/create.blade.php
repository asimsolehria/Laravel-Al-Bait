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
                            <td class="text-left">JobDescription:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->JobDescription}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Father's Name:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->FatherName}}</td>
                            <td class="text-left">CNIC:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->Cnic}}</td>
                        </tr>


                        <tr>
                            <td class="text-left">ContactNumber:</td>
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
                            <td class="text-left">JoiningDate:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->JoiningDate}} </td>
                            <td class="text-left">RegularizationDate:</td>
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

{!! Form::open(array('route' => 'hr.acremployeerecord.store','method'=>'POST')) !!}
<input type="hidden" id="EmployeeID" name="EmployeeID" value="{{$EmployeeID}}">
{{-- <input type="hidden" id="EmployeeID" name="EmployeeID" value={{$EmployeeID}}> --}}
        @csrf

<div class="row">
    <div class="col-md-12" style="padding-bottom: 18px;"><h6 class="block-title" style="font-size: 1.2rem;text-decoration: underline;">Acr Employee Record</h6></div>
</div>
<div class="form-group form-row">


    <label class="col-md-2">Acr IssueDate</label>
    <div class="col-md-4">
        <input name="Acr_IssueDate" id="Acr_IssueDate" autocomplete="off" value="{{ old('Acr_IssueDate') }}"  type="date" class="form-control">
    </div>

    <label class="col-md-2">Additional duties</label>
    <div class="col-md-4">
        <input name="AdditionalDuties" id="AdditionalDuties" autocomplete="off"   value="{{ old('AdditionalDuties') }}" type="text" class="form-control">
    </div>
</div>
<div class="form-group form-row">

    <label class="col-md-2">From Period</label>
    <div class="col-md-4">
        <input name="FromPeriod" id="FromPeriod" autocomplete="off" value="{{ old('FromPeriod') }}" type="date" class="form-control">
    </div>
    <label class="col-md-2">To Period</label>
    <div class="col-md-4">
        <input name="ToPeriod" id="ToPeriod" autocomplete="off"   value="{{ old('ToPeriod') }}" type="date" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Career development</label>
    <div class="col-md-4">
        <input name="CareerDevelopment" id="CareerDevelopment" autocomplete="off" value="{{ old('CareerDevelopment') }}" type="text" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="padding-bottom: 18px;"><h6 class="block-title" style="font-size: 1.2rem;text-decoration: underline;">Leaves</h6></div>
</div>

<div class="form-group form-row">

    <label class="col-md-2">Sick Leave</label>
    <div class="col-md-4">
        <input name="LeaveSick" id="LeaveSick" autocomplete="off" value="{{ old('LeaveSick') }}" type="text" class="form-control">
    </div>
    <label class="col-md-2">Leave Without Full Pay</label>
    <div class="col-md-4">
        <input name="LeaveWithoutFullPay" id="LeaveWithoutFullPay" value="{{ old('LeaveWithoutFullPay') }}" autocomplete="off"  type="text" class="form-control">
    </div>
</div>
<div class="form-group form-row">




    <label class="col-md-2">Short Leave </label>
    <div class="col-md-4">
        <input name="LeaveShort" id="LeaveShort" autocomplete="off" value="{{ old('LeaveShort') }}" type="text" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="padding-bottom: 18px;"><h6 class="block-title" style="font-size: 1.2rem;text-decoration: underline;">Reporting Officer work </h6></div>
</div>
<div class="form-group form-row">




    <label class="col-md-2">Mark to reporting Officer</label>
    <div class="col-md-4">
        <select class="form-control" name="ReportingOfficer1" id="ReportingOfficer1">
            <option value="{{ old('GenderID') }}" >Please select</option>
            @foreach($employesdetail as $detail)
            <option value="{{$detail->EmployeeID}}" {{( $detail->EmployeeID == old('detail') ) ? 'selected' : '' }}>{{$detail->Name}}</option>
            @endforeach
        </select>
    </div>
    <label class="col-md-2">Reporting officer 1 Designation</label>
    <div class="col-md-4">
        <input name="RO1Designation" id="RO1Designation" autocomplete="off" value="{{ old('RO1Designation') }}" type="text" class="form-control">
    </div>
</div>
<div class="form-group form-row">




    <label class="col-md-2">Reporting officer 1 status</label>
    <div class="col-md-4">
<select class="form-control"  name="RO1Status" id="RO1Status">
    <option selected>Please select</option>
    <option value="0">Marked</option>
    <option value="1">Pending</option>
    <option value="2">Submitted</option>

  </select>
    </div>
    <label class="col-md-2">Reporting officer 1 Updated</label>
    <div class="col-md-4">
        <input name="RO1Updated_on" id="RO1Updated_on" autocomplete="off" value="{{ old('RO1Designation') }}" type="date" class="form-control">
    </div>
</div>
{{-- <div class="form-group form-row"> --}}



    {{-- <label class="col-md-2">PenPicture</label>
    <div class="col-md-4">
        <input name="PenPicture" id="PenPicture" value="{{ old('PenPicture') }}" autocomplete="off"  type="text" class="form-control">
    </div>
</div>
<div class="form-group form-row">

    <label class="col-md-2">ReportingOfficer2</label>
    <div class="col-md-4">
        <input name="ReportingOfficer2" id="RO1Updated_on" autocomplete="off" value="{{ old('ReportingOfficer2') }}" type="text" class="form-control">
    </div>

    <label class="col-md-2">RO2Designation</label>
    <div class="col-md-4">
        <input name="RO2Designation" id="RO2Designation" value="{{ old('RO2Designation') }}" autocomplete="off"  type="text" class="form-control">
    </div>
</div>
<div class="form-group form-row">

    <label class="col-md-2">RO2Status</label>
    <div class="col-md-4">
        <input name="RO2Status" id="RO2Status" autocomplete="off" value="{{ old('RO2Status') }}" type="text" class="form-control">
    </div>

    <label class="col-md-2">RO2Updated_on</label>
    <div class="col-md-4">
        <input name="RO2Updated_on" id="RO2Updated_on" value="{{ old('RO2Updated_on') }}" autocomplete="off"  type="date" class="form-control">
    </div>
</div>
<div class="form-group form-row">

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

</div> --}}
</div>



    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection
