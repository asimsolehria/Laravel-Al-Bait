@extends('layouts2.app')


@section('contents')
<br>
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Edit Employe</h3>

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

<form action="{{route('hr.employes.update', ['id' => $queryData->EmployeeID])}}"  id="EmployeeID" enctype="multipart/form-data" class="js-validation" method="POST" novalidate="novalidate">
    <input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
    <input type="hidden" id="ItemID" name="EmployeeID" value={{$queryData->EmployeeID}}>

{{-- {!! Form::open(array('route' => 'hr.employes.store','method'=>'POST' , 'enctype'=>'multipart/form-data')) !!} --}}
<div class="form-group form-row">
    <label class="col-md-2">Name</label>
    <div class="col-md-4">
        <input name="Name" id="Name" autocomplete="off" value="{{ $queryData->Name }}" type="text" class="form-control">
    </div>

{{-- </div> --}}
    <label class="col-md-2">father Name</label>
    <div class="col-md-4">
        <input name="Fathername" id="FatherName" autocomplete="off" value="{{ $queryData->FatherName }}" type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Gender</label>
    <div class="col-md-4">
        <select class="form-control" name="GenderID" id="GenderID">
            <option value="{{ old('GenderID') }}" >Please select</option>
            @foreach($genders as $gender)
            <option value="{{$gender->GenderID}}" {{( $gender->GenderID == $queryData->GenderID ) ? 'selected' : '' }}>{{$gender->GenderTitle}}</option>
            @endforeach
        </select>
    </div>
    <label class="col-md-2">DateOfBirth</label>
    <div class="col-md-4">
        <input name="DateOfBirth" id="DateOfBirth" autocomplete="off" value="{{ $queryData->DateOfBirth }}"  type="date" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Cnic</label>
    <div class="col-md-4">
        <input name="Cnic" id="Cnic" autocomplete="off"  value="{{ $queryData->Cnic }}"  type="text" class="form-control">
    </div>
    <label class="col-md-2">Contact number</label>
    <div class="col-md-4">
        <input name="ContactNumber" id="ContactNumber" autocomplete="off"   value="{{ $queryData->ContactNumber }}" type="text" class="form-control">
    </div>


</div>
<div class="form-group form-row">
    <label class="col-md-2">Mobile network</label>
    <div class="col-md-4">
        <select class="form-control" name="MobileNetworkID" id="MobileNetworkID">
            <option value="{{ old('MobileNetworkID') }}">Please select</option>
            @foreach($mobilenetworks as $MobileNetwork)
            <option value="{{$MobileNetwork->MobileNetworkID}}" {{( $MobileNetwork->MobileNetworkID == $queryData->MobileNetworkID  ) ? 'selected' : '' }}>{{$MobileNetwork->MobileNetworkOperator}}</option>
            @endforeach
        </select>
    </div>
    <label class="col-md-2">Present address</label>
    <div class="col-md-4">
        <input name="PresentAddress" id="PresentAddress"   autocomplete="off" value="{{ $queryData->PresentAddress }}" type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">
    <label class="col-md-2">Permanent address</label>
    <div class="col-md-4">
        <input name="PermanentAddress" id="PermanentAddress" autocomplete="off" value="{{ $queryData->PermanentAddress }}" type="text" class="form-control">
    </div>
    <label class="col-md-2">Joining date</label>
    <div class="col-md-4">
        <input name="JoiningDate" id="JoiningDate"  autocomplete="off"  value="{{ $queryData->JoiningDate }}"  type="date" class="form-control">
    </div>

</div>
<div class="form-group form-row">
    <label class="col-md-2">Regularization date</label>
    <div class="col-md-4">
        <input name="RegularizationDate" id="RegularizationDate" autocomplete="off" value="{{ $queryData->RegularizationDate }}"  type="date" class="form-control">
    </div>
    <label class="col-md-2">Job description</label>
    <div class="col-md-4">
        <input name="JobDescription" id="JobDescription" value="{{ $queryData->JobDescription }}" autocomplete="off"  type="text" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Nominee</label>
    <div class="col-md-4">
        <input name="Nominee" id="" autocomplete="off" value="{{ $queryData->Nominee }}"type="text" class="form-control">
    </div>

    <label class="col-md-2">Date of retirement</label>
    <div class="col-md-4">
        <input name="DateOfRetirement" id="DateOfRetirement"  value="{{ $queryData->DateOfRetirement }}" type="date" class="form-control">
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Picture</label>
    <div class="col-md-4">
        <input type="file" accept="image/png, image/jpeg, image/jpg, image/gif" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6"  name="PicturePath" id="id-form-field-focus-4">
        <img src="{{ URL::to('/myfiles') }}/{{ $queryData->PicturePath }}" class="user-image" width="60" />
                  <input type="hidden" name="hidden_image" value="{{ $queryData->PicturePath }}" />
      </div>

</div>


    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

@endsection
