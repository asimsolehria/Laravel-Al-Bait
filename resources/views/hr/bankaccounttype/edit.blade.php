@extends('layouts2.app')


@section('contents')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Edit Account Type</h3>
        </div>
        <div class="pull-right btn-back">
            <a class="btn btn-primary" href="{{ route('hr.bankaccounttype.index') }}"> Back</a>
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


<form action="{{route('hr.bankaccounttype.update', ['id' => $queryData->AccountTypeID])}}"  id="AccountTypeID" class="js-validation" method="POST" novalidate="novalidate">
<input type="hidden" id="csrf_token" name="_token" value={{csrf_token()}}>
<input type="hidden" id="AccountTypeID" name="AccountTypeID" value={{$queryData->AccountTypeID}}>
<div class="form-group form-row">
    <label class="col-md-2">Title</label>
    <div class="col-md-4">
        <input name="Title" id="Title" autocomplete="off" value="{{ $queryData->Title }}" type="text" class="form-control">
    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection
