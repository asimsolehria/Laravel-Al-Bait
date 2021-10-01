@extends('layouts2.app')

@section('contents')

<div class="content">
    <div class="block">
        <div class="block-header"><h3>Add Rewards</h3></div>
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

        {!! Form::open(array('route' => 'hr.rewards.store','method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}
        <input type="hidden" id="EmployeeID" name="EmployeeID" value="{{$EmployeeID}}">
        {{-- <input type="hidden" id="EmployeeID" name="EmployeeID" value={{$EmployeeID}}> --}}
                @csrf

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                    <div class="col-lg-8 col-xl-10">
                    <div class="form-group form-row">

                        <div class="form-group form-row">
                            <label>Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Please Enter the Title">
                        </div>

                        <div class="form-group form-row">
                            <label>Description</label>
                            <input type="text" class="form-control" name="Description" placeholder="Please Enter the Description">
                        </div>
                        <div class="form-group form-row">
                            <label>Date of issue</label>
                            <input type="date" class="form-control" name="DateOfIssue" placeholder="Please Enter the DateOfIssue">
                        </div>

                        <div class="form-group form-row">
                            <label>Issued by Person</label>
                            <input type="text" class="form-control" name="IssuedByPerson" placeholder="Please Enter the IssuedByPerson">
                        </div>
                        <div class="form-group form-row">
                            <label>Issued by orgnization</label>
                            <input type="text" class="form-control" name="IssuedByOrgnization" placeholder="Please Enter the IssuedByOrgnization">
                        </div>
                        <div class="form-group form-row">
                            <label>Attachment</label>
                            <input type="file"  accept="image/png, image/jpeg, image/jpg, image/gif" class="form-control" name="Attachment" placeholder="Please Enter the Attachment">
                        </div>
                            <button class="btn btn-rounded btn-primary" type="submit">Save</button>
                            {{-- <a href="{{ route('occupationdetail.index')}}" class="btn btn-rounded btn-dark">Back</a> --}}
                        </div>
                        {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
