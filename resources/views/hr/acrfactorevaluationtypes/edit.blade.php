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


<form action="{{route('hr.acrfactorevaluationtypes.update', ['id' => $queryData->FETID])}}"  id="FETID" class="js-validation" method="POST" novalidate="novalidate">
<input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
<input type="hidden" id="ACRGID" name="FETID" value={{$queryData->FETID}}>
<div class="col-lg-8 col-xl-5">
    <div class="form-group">
        <label>Question type title</label>
        <input type="text" class="form-control" value = {{$queryData->QuestionTypeTitle}} name="QuestionTypeTitle" placeholder="Please Enter the QuestionTypeTitle">
    </div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
