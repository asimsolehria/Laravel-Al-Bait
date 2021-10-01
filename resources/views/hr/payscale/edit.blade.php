@extends('layouts2.app')


@section('contents')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Edit Designation</h3>
        </div>
        <div class="pull-right btn-back">
            <a class="btn btn-primary" href="{{ route('countries.index') }}"> Back</a>
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


<form action="{{route('hr.payscale.update', ['id' => $queryData->PayScaleID])}}"  id="PayScaleID" class="js-validation" method="POST" novalidate="novalidate">
<input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
<input type="hidden" id="PayScaleID" name="PayScaleID" value={{$queryData->PayScaleID}}>
<div class="form-group form-row">
    <label class="col-md-2">Payscale title</label>
    <div class="col-md-4">
        <input name="PayScaleTitle" id="Country" autocomplete="off" value="{{ $queryData->PayScaleTitle }}" type="text" class="form-control">
    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
