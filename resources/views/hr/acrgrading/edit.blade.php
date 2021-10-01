@extends('layouts2.app')


@section('contents')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Edit Acr grading</h3>
        </div>
        <div class="pull-right btn-back">
            <a class="btn btn-primary" href="{{ route('hr.acrgrading.index') }}"> Back</a>
        </div>
    </div>
</div>


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


<form action="{{route('hr.acrgrading.update', ['id' => $queryData->ACRGID])}}"  id="ACRGID" class="js-validation" method="POST" novalidate="novalidate">
<input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
<input type="hidden" id="ACRGID" name="ACRGID" value={{$queryData->ACRGID}}>
<div class="col-lg-8 col-xl-5">
    <div class="form-group">
        <label>Grading</label>
        <input type="text" class="form-control" value = {{$queryData->Grading}} name="Grading" placeholder="Please Enter the Grading Name">
    </div>
    <div class="form-group">
        <label>Rating from</label>
        <input type="text" class="form-control" value = {{$queryData->RatingFrom}}  name="RatingFrom" placeholder="Please Enter the RatingFrom">
    </div>
    <div class="form-group">
        <label>Rating to</label>
        <input type="text" class="form-control" value = {{$queryData->RatingTo}}  name="RatingTo" placeholder="Please Enter the RatingTo">
    </div>
    <div class="form-group">
        <label>Definition</label>
        <input type="text" class="form-control" value = {{$queryData->Definition}} name="Definition" placeholder="Please Enter the Definition">
    </div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
