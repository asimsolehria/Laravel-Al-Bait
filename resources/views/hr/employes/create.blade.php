@extends('layouts2.app')


@section('contents')
<br>
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Add Employee</h3>

    </div>

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



{!! Form::open(array('route' => 'hr.employes.store','method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}

<div class="form-group form-row">
    <label class="col-md-2">Employee Name</label>
    <div class="col-md-4">
        <input name="Name" id="Name" autocomplete="off" value="{{ old('Name') }}"  type="text" class="form-control">
    </div>
    <label class="col-md-2">Father Name\Husband</label>
    <div class="col-md-4">
        <input name="FatherName" id="FatherName" autocomplete="off" value="{{ old('FatherName') }}"  type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Gender</label>
    <div class="col-md-4">
        <select class="form-control" name="GenderID" id="GenderID">
            <option value="{{ old('GenderID') }}" >Please select</option>
            @foreach($genders as $gender)
            <option value="{{$gender->GenderID}}" {{( $gender->GenderID == old('gender') ) ? 'selected' : '' }}>{{$gender->GenderTitle}}</option>
            @endforeach
        </select>
    </div>
    <label class="col-md-2">Date of Birth</label>
    <div class="col-md-4">
        <input name="DateOfBirth" id="DateOfBirth" autocomplete="off" value="{{ old('DateOfBirth') }}"  type="date" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">CNIC</label>
    <div class="col-md-4">
        <input name="Cnic" id="Cnic" autocomplete="off" value="{{ old('Cnic') }}" type="text" class="form-control">
    </div>
    <label class="col-md-2">Contact Number</label>
    <div class="col-md-4">
        <input name="ContactNumber" id="ContactNumber" autocomplete="off"   value="{{ old('ContactNumber') }}" type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">
    <label class="col-md-2">Mobile Network</label>
    <div class="col-md-4">
        <select class="form-control" name="MobileNetworkID" id="MobileNetworkID">
            <option value="{{ old('MobileNetworkID') }}">Please select</option>
            @foreach($mobilenetworks as $MobileNetwork)
            <option value="{{$MobileNetwork->MobileNetworkID}}" {{( $MobileNetwork->MobileNetworkID == old('MobileNetwork') ) ? 'selected' : '' }}>{{$MobileNetwork->MobileNetworkOperator}}</option>
            @endforeach
        </select>
    </div>
    <label class="col-md-2">Present Address</label>
    <div class="col-md-4">
        <input name="PresentAddress" id="PresentAddress"  value="{{ old('PresentAddress') }}" autocomplete="off"  type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">
    <label class="col-md-2">Permanent Address</label>
    <div class="col-md-4">
        <input name="PermanentAddress" id="PermanentAddress" autocomplete="off" value="{{ old('PermanentAddress') }}" type="text" class="form-control">
    </div>
    <label class="col-md-2">Joining Date</label>
    <div class="col-md-4">
        <input name="JoiningDate" id="JoiningDate" value="{{ old('JoiningDate') }}" autocomplete="off"  type="date" class="form-control">
    </div>

</div>
<div class="form-group form-row">
    <label class="col-md-2">Regularization Date</label>
    <div class="col-md-4">
        <input name="RegularizationDate" id="RegularizationDate" autocomplete="off" value="{{ old('RegularizationDate') }}"  type="date" class="form-control">
    </div>
    <label class="col-md-2">Job Description</label>
    <div class="col-md-4">
        <input name="JobDescription" id="JobDescription" value="{{ old('JobDescription') }}" autocomplete="off"  type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Picture</label>
    <div class="col-md-4">
        <input type="file" accept="image/png, image/jpeg, image/jpg, image/gif" value="{{ old('PicturePath') }}"  name="PicturePath" id="PicturePath"  class="form-control">
    </div>
    <label class="col-md-2">Nominee</label>
    <div class="col-md-4">
        <input name="Nominee" id="Nominee" value="{{ old('Nominee') }}" autocomplete="off"  type="text" class="form-control">
    </div>

</div>

<div class="form-group form-row">

    <label class="col-md-2">Date Of Retirement</label>
    <div class="col-md-4">
        <input name="DateOfRetirement" id="Nominee" value="{{ old('DateOfRetirement') }}" autocomplete="off"  type="date" class="form-control">
    </div>

</div>


    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function() {
    // $("#ContactNumber").mask("0399-999 9999");
    $("#Cnic").mask("99999-9999999-9");
});
</script>
