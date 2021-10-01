@extends('layouts2.app')

@section('contents')

<div class="content">
    <div class="block">
        <div class="block-header"><h3>Add Posting and Promotions</h3></div>
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

        {!! Form::open(array('route' => 'hr.postingpromotion.store','method'=>'POST')) !!}
        <input type="hidden" id="EmployeeID" name="EmployeeID" value="{{$EmployeeID}}">
        {{-- <input type="hidden" id="EmployeeID" name="EmployeeID" value={{$EmployeeID}}> --}}
                @csrf

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                    <div class="col-lg-8 col-xl-10">
                    <div class="form-group form-row">

                 <label>Dept Cat</label>
                    <select class="form-control"  name="DeptCatID" id="DeptCatID">
                        <option value="">Please select</option>
                        @foreach($DeptCats as $DeptCat)
                            <option value="{{$DeptCat->DeptCatID}}" {{( $DeptCat->DeptCatID == old('DeptCatID') ) ? 'selected' : '' }}>{{$DeptCat->DeptCategoryTitle}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group form-row">
                <label>Dept</label>
                <select class="form-control"  name="DeptID" id="DeptID">
                    <option value="">Please select</option>
                    @foreach($Depts as $Dept)
                        <option value="{{$Dept->DeptID}}" {{( $Dept->DeptID == old('DeptID') ) ? 'selected' : '' }}>{{$Dept->DeptName}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group form-row">
                <label>Designation</label>
                <select class="form-control"  name="DesignationID" id="DesignationID">
                    <option value="">Please select</option>
                    @foreach($Designations as $Designation)
                        <option value="{{$Designation->DesignationID}}" {{( $Designation->DesignationID == old('DesignationID') ) ? 'selected' : '' }}>{{$Designation->DesignationTitle}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group form-row">
                <label>Pay scale</label>
                <select class="form-control"  name="PayScaleID" id="PayScaleID">
                    <option value="">Please select</option>
                    @foreach($PayScales as $PayScale)
                        <option value="{{$PayScale->PayScaleID}}" {{( $PayScale->PayScaleID == old('PayScaleID') ) ? 'selected' : '' }}>{{$PayScale->PayScaleTitle}}</option>
                    @endforeach
                </select>

            </div>

                <div class="form-group form-row">
                    <label>Date of posting</label>
                    <input type="Date" class="form-control" name="DateOfPosting" placeholder="Please Enter the DateOfPosting">
                </div>

                <div class="form-group form-row">
                    <label>Status</label>
                <select class="form-control"  name="PPStatusID" id="PPStatusID">
                    <option selected>Please select</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  </select>
                </div>

                    <button class="btn btn-rounded btn-primary" type="submit">Save</button>
                    {{-- <a href="{{ route('occupationdetail.index')}}" class="btn btn-rounded btn-dark">Back</a> --}}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
