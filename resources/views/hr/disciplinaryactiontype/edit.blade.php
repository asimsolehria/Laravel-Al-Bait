@extends('layouts2.app')


@section('contents')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Edit Designation</h3>
        </div>
        <div class="pull-right btn-back">
            <a class="btn btn-primary" href="{{ route('hr.disciplinaryactiontype.index') }}"> Back</a>
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


<form action="{{route('hr.disciplinaryactiontype.update', ['id' => $queryData->ActionID])}}"  id="ActionID" class="js-validation" method="POST" novalidate="novalidate">
<input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
<input type="hidden" id="ActionID" name="ActionID" value={{$queryData->ActionID}}>
<div class="form-group form-row">
    <label class="col-md-2">Action type</label>
    <div class="col-md-4">
        <input name="ActionType" id="ActionType" autocomplete="off" value="{{ $queryData->ActionType }}" type="text" class="form-control">
    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
