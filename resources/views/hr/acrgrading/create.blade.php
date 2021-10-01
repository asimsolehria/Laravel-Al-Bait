@extends('layouts2.app')

@section('contents')

<div class="content">
    <div class="block">
        <div class="block-header"><h3>Add New Acr Grading</h3></div>
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

        {!! Form::open(array('route' => 'hr.acrgrading.store','method'=>'POST')) !!}
                @csrf

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Grading</label>
                        <input type="text" class="form-control" name="Grading" placeholder="Please Enter the Grading Name">
                    </div>
                    <div class="form-group">
                        <label>Rating from</label>
                        <input type="text" class="form-control" name="RatingFrom" placeholder="Please Enter the RatingFrom">
                    </div>
                    <div class="form-group">
                        <label>Rating to</label>
                        <input type="text" class="form-control" name="RatingTo" placeholder="Please Enter the RatingTo">
                    </div>
                    <div class="form-group">
                        <label>Definition</label>
                        <input type="text" class="form-control" name="Definition" placeholder="Please Enter the Definition">
                    </div>
                    <button class="btn btn-rounded btn-primary" type="submit">Save</button>
                    <a href="{{ route('hr.acrgrading.index')}}" class="btn btn-rounded btn-dark">Back</a>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
