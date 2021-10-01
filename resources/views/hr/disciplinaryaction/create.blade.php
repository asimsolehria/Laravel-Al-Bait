@extends('layouts2.app')

@section('contents')

<div class="content">
    <div class="block">
        <div class="block-header"><h3>Add Disciplinary action</h3></div>
        <div class="block-content block-content-full">
            @if ($errors->any())

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">Error</h3>
                @foreach ($errors->all() as $error)
                    <p class="mb-0">{{$error}}</p>
                @endforeach
            </div>
        @endif

        {!! Form::open(array('route' => 'hr.disciplinaryaction.store','method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}
        <input type="hidden" id="EmployeeID" name="EmployeeID" value="{{$EmployeeID}}">
        {{-- <input type="hidden" id="EmployeeID" name="EmployeeID" value={{$EmployeeID}}> --}}
                @csrf

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                    <div class="col-lg-8 col-xl-10">
                    <div class="form-group form-row">

                 <label>Action type</label>
                    <select class="form-control"  name="ActionID" id="ActionID">
                        <option value="">Please select</option>
                        @foreach($actions as $action)
                            <option value="{{$action->ActionID}}" {{( $action->ActionID == old('ActionID') ) ? 'selected' : '' }}>{{$action->ActionType}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group form-row">
                    <label>Reason</label>
                    <input type="text" class="form-control" name="Reason" placeholder="Please Enter the Reason">
                </div>
                <div class="form-group form-row">
                    <label>Date of action</label>
                    <input type="date" class="form-control" name="DateOfAction" placeholder="Please Enter the DateOfAction">
                </div>

                <div class="form-group form-row">
                    <label>Attachment</label>
                    <input type="file" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif" name="Attachment" placeholder="Please Enter the Attachment">
                </div>

                    <button class="btn btn-rounded btn-primary" type="submit">Save</button>
                    {{-- <a href="{{ route('occupationdetail.index')}}" class="btn btn-rounded btn-dark">Back</a> --}}
                </div>
                {{-- {!! Form::close() !!} --}}
        </div>
    </div>
</div>

@endsection
