@extends('layouts2.app')


@section('contents')
<br>


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



{{-- {!! Form::open(array('route' => 'hr.acrevaluationfactor.store','method'=>'POST' , 'enctype'=>'multipart/form-data')) !!} --}}
{{-- <input type="hidden" id="UserID" name="UserID" value="{{$UserID}}"> --}}



<!-- Stats -->
<div class="bg-white border-bottom">
    <div class="content content-boxed">
        <div class="row items-push text-center">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                        @foreach ($details as $detail)

                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->Name}}</td>
                            <td class="text-left">Job description:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->JobDescription}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Father's Name:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->FatherName}}</td>
                            <td class="text-left">CNIC:</td>
                            <td class="font-w600 font-size-sm">{{ $detail->Cnic}}</td>
                        </tr>


                        <tr>
                            <td class="text-left">Contact number:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->ContactNumber}} </td>
                            <td class="text-left">Mobile Network:</td>
                            <td class="font-w600 font-size-sm">{{$detail->ContactNumber}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Data of Birth:</td>
                            <td class="font-w600 font-size-sm">{{$detail->DateOfBirth}}</td>
                            <td class="text-left">Permanent address:</td>
                            <td class="font-w600 font-size-sm">{{$detail->PermanentAddress}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Joining date:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->JoiningDate}} </td>
                            <td class="text-left">Regularization date:</td>
                            <td class="font-w600 font-size-sm">{{$detail->RegularizationDate}}</td>
                        </tr>
                        {{-- <tr>
                            <td class="text-left">Nominee:</td>
                            <td class="font-w600 font-size-sm"> {{ $detail->Nominee}} </td>
                            <td class="text-left">DateOfRetirement:</td>
                            <td class="font-w600 font-size-sm">{{$detail->DateOfRetirement}}</td>
                        </tr> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    {{-- </div> --}}
{{-- </div> --}}
    {{-- </div> --}}
<!-- END Stats -->
<div class="row">
    <div class="col-md-12 col-xl-12">
        <!-- Updates -->
        <ul class="timeline timeline-alt py-0">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-success">
                    <i class="fa fa-cog"></i>
                </div>
                <div class="timeline-event-block block invisible" data-toggle="appear">
                    <div class="block-header">
                        <h3 class="block-title">Performance Evaluation</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item font-size-sm">
                                {{-- <a href="{{route('hr.postingpromotion.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="block-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        {{-- <th class="text-center" style="width: 100px;">
                                            <i class="far fa-user"></i>
                                        </th> --}}

                                    {{-- <th>ACRGID</th> --}}
                                    <th>Grading</th>
                                    <th>Rating From</th>
                                    <th>Rating TO</th>
                                    <th>Defination</th>
                                    {{-- <th>Action</th> --}}

                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- {{dd($empeducations)}}/ --}}

                                    @foreach ($gradings as $grading)

                                    <tr>
                                        {{-- <td>{{ $gradings->grading }}</td> --}}


                                        {{-- <td>{{ $grading->ACRGID }}</td> --}}
                                        <td>{{$grading->Grading}}</td>
                                        <td>{{$grading->RatingFrom}}</td>
                                        <td>{{$grading->RatingTo}}</td>
                                        <td>{{$grading->Definition}}</td>


                                        {{-- <td class="text-center"> --}}

                                                 {{-- <a id="{{$postprom->PPID}}-{{$postprom->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-pp" data-toggle="tooltip" title="Delete Item">
                                                    <i class="far fa-trash-alt"></i> --}}


                                        {{-- </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- END Updates -->
    </div>
</div>

<div class="row">
    {{-- {!! Form::open(array('route' => 'hr.appraisalcases.store','method'=>'POST')) !!}
     --}}

     <form  method="post" action="{{ route('hr.appraisalcases.store') }}">
        <input type="hidden" id="ACRID" name="ACRID" value=" {{ $details[0]->ACRID}}">
        @csrf
    <div class="col-md-12 col-xl-12">
        <!-- Updates -->
        <ul class="timeline timeline-alt py-0">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-warning">
                    <i class="fa fa-cog"></i>
                </div>
                <div class="timeline-event-block block invisible" data-toggle="appear">
                    <div class="block-header">
                        <h3 class="block-title">Performance Evaluation Questions</h3>

                        <div class="block-options">
                            <div class="timeline-event-time block-options-item font-size-sm">

                                {{-- <a href="{{route('hr.postingpromotion.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
                            </div>
                        </div>

                    </div>

                    <p style="text-align: center"><strong>Where deemed necessary on dotted lines notes indicate any relevant strong/weak points may be given. </strong></p>
                    <div class="block-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        {{-- <th class="text-center" style="width: 100px;">
                                            <i class="far fa-user"></i>
                                        </th> --}}

                                    <th style="text-align: center">(1)<br>Factors Evaluaated</th>
                                    <th >Grading</th>
                                    <th>Rating</th>



                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- {{dd($empeducations)}}/ --}}

                                    @foreach ($acrfactors as $acrfactor)

                                    <tr>
                                        {{-- <td>{{ $detail->EducationID }}</td> --}}
                                        {{-- {{dd($acrfactor)}} --}}
                                        <input type="hidden" id="FEID" name="FEID" value="{{$acrfactor->FEID}}">

                                        <td><strong><u>{{$acrfactor->MainQuestion}}</u></strong>,{{$acrfactor->SubQuestion}}</td>
                                        <td>      <div class="col-md-12">
                                            <select class="form-control" name="grading[]" id="grading">
                                                <option value="">Select Grade</option>
                                                @foreach($gradings as $grading)
                                                <option value="{{$grading->ACRGID}}" {{( $grading->ACRGID == old('grading') ) ? 'selected' : '' }}>{{$grading->Grading}}</option>
                                                @endforeach
                                            </select>


                                        </div>
                                    </td>
                                        <td>  <div class="col-md-7">
                                            <input name="rating[]" id="Cnic" autocomplete="off"  type="text" class="form-control">
                                        </div></td>

                                        {{-- <td>{{$acrfactor->SubQuestion}}</td> --}}


                                        {{-- <td class="text-center"> --}}

                                                 {{-- <a id="{{$postprom->PPID}}-{{$postprom->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-pp" data-toggle="tooltip" title="Delete Item">
                                                    <i class="far fa-trash-alt"></i> --}}


                                        {{-- </td> --}}

                                    </tr>

                                    @endforeach


                                <tr>
                                   <td colspan="3" style="text-align: right"> <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right: 0px;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                   </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- END Updates -->
    </div>
    {{-- {{-- {!! Form::close() !!} --}}


</form>
</div>

@endsection
