@extends('layouts2.app')

@section('contents')

<div class="content">
    <div class="block">
        <div class="block-header"><h3>Add New Disciplinary Action Type</h3></div>
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

        {!! Form::open(array('route' => 'hr.disciplinaryactiontype.store','method'=>'POST')) !!}
                @csrf

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Action type</label>
                        <input type="text" class="form-control" name="ActionType" placeholder="Please Enter the ActionType">
                    </div>
                    <button class="btn btn-rounded btn-primary" type="submit">Save</button>
                    <a href="{{ route('hr.disciplinaryactiontype.index')}}" class="btn btn-rounded btn-dark">Back</a>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
