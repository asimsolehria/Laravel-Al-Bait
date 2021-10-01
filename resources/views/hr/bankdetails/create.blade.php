@extends('layouts2.app')

@section('contents')

<div class="content">
    <div class="block">
        <div class="block-header"><h3>Add Bank details</h3></div>
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

        {!! Form::open(array('route' => 'hr.bankdetails.store','method'=>'POST' )) !!}
        <input type="hidden" id="EmployeeID" name="EmployeeID" value="{{$EmployeeID}}">
        {{-- <input type="hidden" id="EmployeeID" name="EmployeeID" value={{$EmployeeID}}> --}}
                @csrf

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                    <div class="col-lg-8 col-xl-10">


                <div class="form-group form-row">
                    <label>Account no </label>
                    <input type="text" class="form-control" name="AccountNo" placeholder="Please Enter the AccountNo ">
                </div>

                <div class="form-group form-row">
                    <label>Bank Branch </label>
                    <input type="text" class="form-control" name="bankBranch" placeholder="Please Enter the bankBranch ">
                </div>
                <div class="form-group form-row">
                    <label>Opening year</label>
                    <input type="date" class="form-control" name="OpeningYear" placeholder="Please Enter the OpeningYear">
                </div>
                <div class="form-group form-row">
                    <label>Main source</label>
                    <input type="text" class="form-control" name="MainSource" placeholder="Please Enter the MainSource">
                </div>
                <div class="form-group form-row">
                    <label>balanceon30june</label>
                    <input type="text" class="form-control" name="balanceon30june" placeholder="Please Enter the balanceon30june">
                </div>
                <div class="form-group form-row">
                    <label>year</label>
                    <input type="date" class="form-control" name="year" placeholder="Please Enter the year">
                </div>

                <div class="form-group form-row">
                 <label>Action type</label>
                    <select class="form-control"  name="AccountTypeID" id="AccountTypeID">
                        <option value="">Please select</option>
                        @foreach($bankaccounts as $bankaccount)
                            <option value="{{$bankaccount->AccountTypeID}}" {{( $bankaccount->AccountTypeID == old('BankdetID') ) ? 'selected' : '' }}>{{$bankaccount->Title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group form-row">
                 <label>Status</label>
                    <select class="form-control"  name="StatusID" id="StatusID">
                        <option value="">Please select</option>
                        @foreach($statuses as $status)
                            <option value="{{$status->StatusID}}" {{( $status->StatusID == old('StatusID') ) ? 'selected' : '' }}>{{$status->Status}}</option>
                        @endforeach
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
