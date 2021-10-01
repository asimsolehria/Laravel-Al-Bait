@extends('layouts2.app')


@section('contents')
<br>
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Edit Acr Evaluation Factor</h3>

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



<form action="{{route('hr.acrevaluationfactor.update', ['id' => $queryData->FETID])}}"  id="FETID" class="js-validation" method="POST" novalidate="novalidate">
    <input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
    <input type="hidden" id="ACRGID" name="FETID" value={{$queryData->FETID}}>
<div class="form-group form-row">

    <label class="col-md-2">Factor Evaluation type</label>
    <div class="col-md-4">
        <select class="form-control" name="FETID" id="FETID">
            <option value="{{ old('FETID') }}" >Please select</option>
            @foreach($acrfactortypes as $factortype)
            <option value="{{$factortype->FETID}}" {{( $factortype->FETID == $factortype->FETID ) ? 'selected' : '' }}>{{$factortype->QuestionTypeTitle}}</option>
            @endforeach
        </select>
    </div>
    <label class="col-md-2">Main question</label>
    <div class="col-md-4">
        <textarea name="MainQuestion" id="MainQuestion" autocomplete="off" value="{{ $queryData->MainQuestion }}" type="text" class="form-control"></textarea>
    </div>

</div>
<div class="form-group form-row">

    <label class="col-md-2">Sub question</label>
    <div class="col-md-4">
        <textarea name="SubQuestion" id="SubQuestion" autocomplete="off" value="{{ $queryData->SubQuestion }}" type="text" class="form-control"></textarea>
    </div>
    <label class="col-md-2">option1</label>
    <div class="col-md-4">
        <input name="option1" id="option1" autocomplete="off"   value="{{ $queryData->option1 }}" type="textarea" class="form-control">
    </div>
</div>
<div class="form-group form-row">

    <label class="col-md-2">option2</label>
    <div class="col-md-4">
        <input name="option2" id="option2" autocomplete="off"  value="{{ $queryData->option2 }}" type="textarea" class="form-control">
    </div>
    <label class="col-md-2">option3</label>
    <div class="col-md-4">
        <input name="option3" id="option3"  value="{{ $queryData->option3 }}" autocomplete="off"  type="textarea" class="form-control">
    </div>
</div>
<div class="form-group form-row">

    <label class="col-md-2">option4</label>
    <div class="col-md-4">
        <input name="option4" id="option4" autocomplete="off" value="{{ $queryData->option4 }}" type="textarea" class="form-control">
    </div>

    <label class="col-md-2">option5</label>
    <div class="col-md-4">
        <input name="option5" id="option5" value="{{ $queryData->option4 }}" autocomplete="off"  type="text" class="form-control">
    </div>
</div>
<div class="form-group form-row">


    {{-- <div class="form-group form-row"> --}}
        <label class="col-md-2">option5</label>
        <div class="col-md-4">
            <input name="option6" id="option6" value="{{ $queryData->option4 }}" autocomplete="off"  type="textarea" class="form-control"></textarea>
        </div>
        <label class="col-md-2">FEStatus</label>
        <div class="col-md-4">
    <select class="form-control"  value="{{ $queryData->FEStatus }}"  name="FEStatus" id="FEStatus">
        <option selected>Please select</option>
        <option value="0">Active</option>
        <option value="1">Inactive</option>
      </select>
    </div>
</div>




    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection
