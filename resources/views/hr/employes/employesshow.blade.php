@extends('layouts2.app')

@section('contents')

    {{-- <div class="block-content block-content-full"> --}}

                <!-- Hero -->
                <div class="bg-image" style="background-image: url(/assets/images/photo28.jpg);">
                    <div class="bg-black-50">
                        <div class="content content-full text-center">
                            <div class="my-3">
                                <img class="img-avatar img-avatar-thumb" src="{{url('/myfiles/'.$employes->PicturePath)}}" alt="">
                            </div>
                            <h1 class="h2 text-white mb-0">{{$employes->Name}}</h1>
                            <span class="text-white-75">{{$employes->JobDescription}}</span>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Stats -->
                <div class="bg-white border-bottom">
                    <div class="content content-boxed">
                        <div class="row items-push text-center">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tbody>
                                        @foreach ($details as $detail)
                                        <tr>
                                            <td class="text-left">Father's Name:</td>
                                            <td class="font-w600 font-size-sm">{{ $detail->FatherName}}</td>
                                            <td class="text-left">CNIC:</td>
                                            <td class="font-w600 font-size-sm">{{ $detail->Cnic}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Gender:</td>
                                            <td class="font-w600 font-size-sm"> {{ $detail->GenderTitle}} </td>
                                            <td class="text-left">Data of Birth:</td>
                                            <td class="font-w600 font-size-sm">{{$employes->DateOfBirth}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Contact Number:</td>
                                            <td class="font-w600 font-size-sm"> {{ $detail->ContactNumber}} </td>
                                            <td class="text-left">Mobile Network:</td>
                                            <td class="font-w600 font-size-sm">{{$detail->MobileNetworkOperator}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Present Address:</td>
                                            <td class="font-w600 font-size-sm"> {{ $detail->PresentAddress}} </td>
                                            <td class="text-left">Permanent Address:</td>
                                            <td class="font-w600 font-size-sm">{{$detail->PermanentAddress}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Joining Date:</td>
                                            <td class="font-w600 font-size-sm"> {{ $detail->JoiningDate}} </td>
                                            <td class="text-left">Regularization Date:</td>
                                            <td class="font-w600 font-size-sm">{{$detail->RegularizationDate}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Nominee:</td>
                                            <td class="font-w600 font-size-sm"> {{ $detail->Nominee}} </td>
                                            <td class="text-left">Date Of Retirement:</td>
                                            <td class="font-w600 font-size-sm">{{$detail->DateOfRetirement}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content content-boxed">
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">Academic Records</h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.employeseducation.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>Education Level ID</th>
                                                        <th>Obtained Marks</th>
                                                        <th>Total Marks </th>
                                                        <th>Passing Year </th>
                                                        <th>Institute </th>
                                                        <th>Attachment</th>
                                                        <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($education as $empedu)

                                                        <tr>
                                                            {{-- <td>{{ $detail->EducationID }}</td> --}}
                                                            {{-- <td></td> --}}
                                                            <td>{{ $empedu->EducationLevel }}</td>
                                                            <td>{{ $empedu->ObtainedMarks }}</td>
                                                            <td>{{ $empedu->TotalMarks }}</td>
                                                            <td>{{ $empedu->PassingYear }}</td>
                                                            <td>{{ $empedu->Institute }}</td>
                                                            <td class="text-600 text-orange-d2"><img src="{{url('/myfiles/'.$empedu->Attachment)}}" class="user-image" alt="User Image" width = "30px" ></td>


                                                            <td class="text-center">
                                                                {{-- <div class="btn-group"> --}}
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                                                        {{-- <i class="fa fa-fw fa-pencil-alt"></i> --}}

                                                                    <a id="{{$empedu->EducationID}}-{{$empedu->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-Prov" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                {{-- <div class="content content-boxed"> --}}
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">Employe Experiences</h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.experiences.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>Job Type</th>
                                                        <th>From Date</th>
                                                        <th>To Date </th>
                                                        <th>Reason To Leave </th>
                                                        <th>CPS </th>
                                                        <th>Job Title</th>
                                                        <th>Organization</th>
                                                        <th>Attachment</th>
                                                        <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($experiences as $experience)

                                                        <tr>
                                                            {{-- <td>{{ $detail->EducationID }}</td> --}}


                                                            {{-- <td>{{ $detail->Name }}</td> --}}
                                                            <td>{{ $experience->JobType }}</td>
                                                            <td>{{ $experience->FromDate }}</td>
                                                            <td>{{ $experience->ToDate }}</td>
                                                            <td>{{ $experience->ReasonToLeave }}</td>
                                                            <td>{{ $experience->BPS }}</td>
                                                            <td>{{ $experience->JobTitle }}</td>
                                                            <td>{{ $experience->Organization }}</td>
                                                            <td class="text-600 text-orange-d2"><img src="{{url('/myfiles/'.$experience->Attachment)}}" class="user-image" alt="User Image" width = "30px" ></td>


                                                            <td class="text-center">
                                                                {{-- <div class="btn-group"> --}}
                                                                    <a id="{{$experience->ExperienceID}}-{{$experience->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-exp" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>
                                                                </div>

                                                            </td>
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
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">Employe Posting and promotions</h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.postingpromotion.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>DeptCat</th>
                                                        <th>Dept</th>
                                                        <th>Designation </th>
                                                        <th>Pay Scale</th>
                                                        <th>Date Of Posting</th>
                                                        <th>Status</th>
                                                        <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($postproms as $postprom)

                                                        <tr>
                                                            {{-- <td>{{ $detail->EducationID }}</td> --}}


                                                            {{-- <td>{{ $detail->Name }}</td> --}}
                                                            <td>{{$postprom->DeptName}}</td>
                                                            <td>{{$postprom->DeptCategoryTitle}}</td>
                                                            <td>{{$postprom->DesignationTitle}}</td>
                                                            <td>{{$postprom->PayScaleTitle}}</td>
                                                            <td>{{$postprom->DateOfPosting}}</td>
                                                            <td>{{$postprom->PPStatusID}}</td>


                                                            <td class="text-center">

                                                                     <a id="{{$postprom->PPID}}-{{$postprom->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-pp" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>


                                                            </td>
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
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">ACR Employee Record </h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.acremployeerecord.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
                                                    {{-- <a href="{{route('hr.acremployeerecord.create')}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>ACRID</th>
                                                        <th>ACR Issue Date </th>
                                                        <th>ACR Status</th>
                                                        <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($acremployeerecord as $acremployeerecords)

                                                        <tr>


                                                            <td>{{$acremployeerecords->ACRID}}</td>
                                                            <td>{{$acremployeerecords->Acr_IssueDate}}</td>
                                                            <td>{{$acremployeerecords->RO1Status}}</td>


                                                            <td class="text-center">

                                                                     <a id="{{$acremployeerecords->ACRID}}-{{$acremployeerecords->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-acrid" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>


                                                            </td>
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
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">Rewards </h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.rewards.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
                                                    {{-- <a href="{{route('hr.acremployeerecord.create')}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Date Of Issue</th>
                                                        <th>Issued By Person</th>
                                                        <th>Issued By Orgnization</th>
                                                        <th>Attachment</th>
                                                        <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($rewards as $reward)

                                                        <tr>


                                                            <td>{{$reward->Title}}</td>
                                                            <td>{{$reward->Description}}</td>
                                                            <td>{{$reward->DateOfIssue}}</td>
                                                            <td>{{$reward->IssuedByPerson}}</td>
                                                            <td>{{$reward->IssuedByOrgnization}}</td>
                                                            <td class="text-600 text-orange-d2"><img src="{{url('/myfiles/'.$reward->Attachment)}}" class="user-image" alt="User Image" width = "30px" ></td>


                                                            <td class="text-center">

                                                                     <a id="{{$reward->RewardID}}-{{$reward->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-rid" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>


                                                            </td>
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
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">Disciplinary Action </h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.disciplinaryaction.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
                                                    {{-- <a href="{{route('hr.acremployeerecord.create')}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>Reason</th>
                                                        <th>Date Of Action</th>
                                                        <th>Attachment</th>
                                                        <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($disciplinaryactions as $disciplinaryaction)

                                                        <tr>


                                                            <td>{{$disciplinaryaction->Reason}}</td>
                                                            <td>{{$disciplinaryaction->DateOfAction}}</td>
                                                            <td class="text-600 text-orange-d2"><img src="{{url('/myfiles/'.$disciplinaryaction->Attachment)}}" class="user-image" alt="User Image" width = "30px" ></td>


                                                            <td class="text-center">

                                                                     <a id="{{$disciplinaryaction->DisciplinaryActionID}}-{{$disciplinaryaction->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-daid" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>


                                                            </td>
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
                        <div class="col-md-12 col-xl-12">
                            <!-- Updates -->
                            <ul class="timeline timeline-alt py-0">
                                <li class="timeline-event">
                                    <div class="timeline-event-icon bg-default">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="block-header">
                                            <h3 class="block-title">Bank Details</h3>
                                            <div class="block-options">
                                                <div class="timeline-event-time block-options-item font-size-sm">
                                                    <a href="{{route('hr.bankdetails.create', ['id' => $employes->EmployeeID])}}" class="btn btn-rounded btn-default float-right">Add New</a>
                                                    {{-- <a href="{{route('hr.acremployeerecord.create')}}" class="btn btn-rounded btn-default float-right">Add New</a> --}}
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

                                                        {{-- <th>Employee</th> --}}
                                                        <th>Account No</th>
                                                        <th>Bank branch</th>
                                                        <th>Opening year</th>
                                                        <th>MainSource</th>
                                                        <th>balanceon30june</th>
                                                        <th>year</th>
                                                        <th>Account type</th>
                                                        <th>Status</th>
                                                        <th>Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- {{dd($empeducations)}}/ --}}

                                                        @foreach ($bankdetails as $bankdetail)

                                                        <tr>


                                                            <td>{{$bankdetail->AccountNo}}</td>
                                                            <td>{{$bankdetail->bankBranch}}</td>
                                                            <td>{{$bankdetail->OpeningYear}}</td>
                                                            <td>{{$bankdetail->MainSource}}</td>
                                                            <td>{{$bankdetail->balanceon30june}}</td>
                                                            <td>{{$bankdetail->year}}</td>
                                                            <td>{{$bankdetail->Title}}</td>
                                                            <td>{{$bankdetail->Status}}</td>



                                                            <td class="text-center">

                                                                     <a id="{{$bankdetail->BankdetID}}-{{$bankdetail->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-bid" data-toggle="tooltip" title="Delete Item">
                                                                        <i class="far fa-trash-alt"></i>


                                                            </td>
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

                    {{-- @endsection --}}


<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-Prov').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/employeseducation/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-acrid').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/acremployeerecord/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>
<style>
.myclass{
  float: left;
  margin-top: 1px;
  margin-right: 6px;
}
</style>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-exp').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/experiences/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-pp').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/postingpromotion/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-rid').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/rewards/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>
<style>
.myclass{
  float: left;
  margin-top: 1px;
  margin-right: 6px;
}
</style>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-daid').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/disciplinaryaction/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>
<style>
.myclass{
  float: left;
  margin-top: 1px;
  margin-right: 6px;
}
</style>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-bid').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') )
      {
        var del_route = "<?php echo '/../../hr/bankdetails/destroy/';?>"+$(this).attr('id');
        Swal.fire({
        //html: true,
        title: 'Are you sure?',
        html: "You want to delete?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location = del_route;
          }
        })
        return false;
      }
    });
  });
</script>
<style>
.myclass{
  float: left;
  margin-top: 1px;
  margin-right: 6px;
}
</style>






@endsection
