@extends('layouts2.app')

@section('contents')


<div class="content">
    <div class="block">

        <div class="block-content block-content-full">

    <title>ACR Final Report</title>

{{-- <body> --}}
<table>

    @foreach($hrreports as $hrreport)


    <tr>
        <td align="center">
            Perfomance Evaluation Form for Staff from Comparable CPS-02 to 05
        </td>
    </tr>
    <tr>
        <td align="center">
            PARAPLEGIC CENTRE PESHAWAR<BR>
                PERFORMANCE EVALUATION REPORT<BR>
                    FOR THE PERIOD FROM _________________ TO _________________<BR>
                        PART-1
        </td>
    </tr>
    <tr>
        <td>1 . Name (in block letters): {{$hrreport->Name}} </td>
        {{-- <td> {{$hrreport->Name}} </td> --}}
    </tr>
    <tr>
        <td>2 . Father's Name (in block letters): {{$hrreport->FatherName}}  </td>
        {{-- <td>{{$hrreport->FatherName}}</td> --}}
    </tr>
    <tr>
        <td>3 . Designation: {{$hrreport->JobDescription}} </td>
        {{-- <td>{{$hrreport->JobDescription}}</td> --}}
    </tr>
    <tr>
        <td>4 . Section: </td>
        <td></td>
    </tr>
    <tr>
        <td>5 . Date of birth: {{$hrreport->DateOfBirth}} </td>
        {{-- <td>{{$hrreport->DateOfBirth}}</td> --}}
    </tr>
    <tr>
        <td>6 . Qualification: </td>
        <td></td>
    </tr>
    <tr>
        <td>7 . Date of entry in paraplegic service center: </td>
        <td></td>
    </tr>
    <tr>
        <td>8 . Present monthly pay: </td>
        <td></td>
    </tr>
    <tr>
        <td>9 . Persuiing any further studies ? if "Yes" Describe their nature: </td>
        <td></td>
    </tr>
    <tr>
        <td>10 . Do you have any plans for career development?if "Yes" please describe them: </td>
        <td></td>
    </tr>
    <tr>
        <td align="center">PART-2</td>
        {{-- <hr> --}}
        <td></td>
    </tr>
    <tr>
        <td>1 . Particulars of any disciplinary action taken during the period under report: </td>
        <td></td>
    </tr>
    <tr>
        <td>2 . Detail of leave availed during report period: </td>
        <td></td>
    </tr>
     <tr>
        <td>a . Casual/Sick leave ________ days : </td>
        <td></td>
    </tr>
     <tr>
        <td>b . Leave with full pay (LFP) ________days : </td>
        <td></td>
    </tr>
     <tr>
        <td>c . Late Commings : </td>
        <td></td>
    </tr>
     <tr>
        <td>d . Short leave in hours : </td>
        <td></td>
    </tr>
     <tr>
        <td>Employee's Signature : </td>
        <td align="right">Reporting officer Signature:</td>
    </tr>
     <tr>
        <td>Dated : </td>
        <td></td>
    </tr>
     <tr>
        <td align="center">PART-3 : </td>
        <td></td>
    </tr>
    <tr>
        <td align="center">Performance Evaluation : </td>
        <td></td>
    </tr>
    <tr>
        <td>Grading for different factors in column in this Section should be given in Column 2 and numerical Rating assigned in column 3 as follows:- </td>
        <td></td>
    </tr>

    @endforeach

    <table class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                {{-- <th class="text-center" style="width: 100px;">
                    <i class="far fa-user"></i>
                </th> --}}

            {{-- <th>ACRGID</th> --}}
            <th>Grading</th>
            <th>Rating</th>
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
                <td>{{$grading->Definition}}</td>


                {{-- <td class="text-center"> --}}

                         {{-- <a id="{{$postprom->PPID}}-{{$postprom->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-pp" data-toggle="tooltip" title="Delete Item">
                            <i class="far fa-trash-alt"></i> --}}


                {{-- </td> --}}
            </tr>
            @endforeach
        </tbody>
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
                        <td>
                               <div class="col-md-12">

                                {{$acrfactor->gradeinput}}

                               </div>
                    </td>
                        <td>  <div class="col-md-7">
                           {{$acrfactor->rateinput}}
                        </div></td>


                    </tr>

                    @endforeach
            </tbody>
            </table>
      <table>
      <tr>
        <td>Name of reporting officer:</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Signature:______________</td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Dated:__________________ </td>
        <td></td>
    </tr>
      <tr>
        <td align="center">PART-4 : </td>
        <td></td>
    </tr>
      <tr>
        <td align="center">Performance Evaluation Report </td>
        <td></td>
    </tr>
      <tr>
        <td>1 . How would you grade the overall performance for the year? please initial the appropraite box </td>
        <td></td>
    </tr>
      <tr>
        <td><input type="checkbox">Most Outstanting</td>
        <td></td>
    </tr>
      <tr>
        <td><input type="checkbox">very good</td>
        <td></td>
    </tr>
      <tr>
        <td><input type="checkbox">good</td>
        <td></td>
    </tr>
      <tr>
        <td><input type="checkbox">Average </td>
        <td></td>
    </tr>
      <tr>
        <td><input type="checkbox">unstaisfactory</td>
        <td></td>
    </tr>
      <tr>
        <td><input type="checkbox">Poor</td>
        <td></td>
    </tr>
      <tr>
        <td>2 . General Comments regarding personel qualities , capacity and behavior :</td>
        <td></td>
    </tr>
      <tr>
        <td> 3 . Adverse remarks to be communicated to the employee :</td>
        <td></td>
    </tr>
      <tr>
        <td> 4 . date when the employee will complete / has completed 24 years service:_____________________________________________________Is that employe suitable after 24 years______________________________________________
        </td>
        <td></td>
    </tr>
      </table>

    {{-- <tr> --}}
        <div class="form-group form-row">
                         <label class="col-md-2">Name of reporting officer</label>
            <div class="col-md-4">
                <input name="NORO" id="NORO" value="{{ old('NORO') }}" autocomplete="off"  type="text" class="form-control">
            </div>
        {{-- </div> --}}


         <label class="col-md-2">Signature</label>
            <div class="col-md-4">
                <input name="Signature" id="Signature" value="{{ old('Signature') }}" autocomplete="off"  type="text" class="form-control">
            </div>
        </div>

        <div class="form-group form-row">
    {{-- <tr> --}}
        <label class="col-md-2">Designation</label>
            <div class="col-md-4">
                <input name="Designation" id="Designation" value="{{ old('Designation') }}" autocomplete="off"  type="text" class="form-control">
            </div>
        {{-- </div> --}}
        <label class="col-md-2">Dated</label>
            <div class="col-md-4">
                <input name="Dated" id="Dated" value="{{ old('Dated') }}" autocomplete="off"  type="date" class="form-control">
            </div>
        </div>

        <div class="form-group form-row">
            {{-- <tr> --}}
                <label class="col-md-2">General Remarks by CSO</label>
                    <div class="col-md-4">
                        <textarea name="Designation" id="Designation" value="{{ old('Designation') }}" autocomplete="off"  type="text" class="form-control"></textarea>
                    </div>
                {{-- </div> --}}
                <label class="col-md-2">Name of CSO</label>
                    <div class="col-md-4">
                        <input name="namecso" id="Dated" value="{{ old('namecso') }}" autocomplete="off"  type="text" class="form-control">
                    </div>
                </div>
        <div class="form-group form-row">
            {{-- <tr> --}}
                <label class="col-md-2">Signature</label>
                    <div class="col-md-4">
                        <input name="Designation" id="Designation" value="{{ old('Designation') }}" autocomplete="off"  type="text" class="form-control">
                    </div>
                {{-- </div> --}}
                <label class="col-md-2">Designation</label>
                    <div class="col-md-4">
                        <input name="Designation" id="Designation" value="{{ old('Designation') }}" autocomplete="off"  type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group form-row">
                    {{-- <tr> --}}
                        <label class="col-md-2">Dated</label>
                            <div class="col-md-4">
                                <input name="Dated" id="Dated" value="{{ old('Dated') }}" autocomplete="off"  type="text" class="form-control">
                            </div>
                        {{-- </div> --}}
                        </div>


</table>
</body>
</html>


@endsection
