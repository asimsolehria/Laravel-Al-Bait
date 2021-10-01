@extends('layouts2.app')
@section('contents')
<br>
<div class="block">
    <div class="block-header">
        <h3 class="block-title">List of Employes</h3>
        <a href="{{route('hr.employes.create')}}" class="btn btn-squared btn-success float-right">Add New</a>
    </div>

    <div class="block-content block-content-full">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <form action="/hr/employes" method="GET" role="search" id="search">
            <div class="form-group form-row" style="margin-bottom: 6px;">
              <label class="col-md-2">Cnic</label>
              <div class="col-md-4">
                  <input name="Cnic" id="Cnic" value="{{ $Cnic }}" autocomplete="off" type="text" class="form-control">
              </div>
              <label class="col-md-2">Name</label>
              <div class="col-md-4">
                  <input name="Name" id="Name" value="{{ $Name }}" autocomplete="off" type="text" class="form-control">
              </div>

            </div>
           {{-- {{dd($employes)}} --}}
            <div class="form-group form-row" style="margin-bottom: 6px;">
              <label class="col-md-2">EmployeeID</label>
              <div class="col-md-4">
                  <input name="empid" id="empid" value="{{ $empid }}" autocomplete="off" type="text" class="form-control">
              </div>
                <label class="col-md-2">Dept</label>
                <div class="col-md-4">
                <select class="form-control"  name="DeptID" id="DeptID">
                    <option value="">Please select</option>
                    @foreach($Depts as $Dept)
                        <option value="{{$Dept->DeptID}}" {{( $Dept->DeptID == old('DeptID') ) ? 'selected' : '' }}>{{$Dept->DeptName}}</option>
                    @endforeach
                </select>
                </div>
            </div>
                <div class="form-group form-row" style="margin-bottom: 6px;">

                <label class="col-md-2">Designation</label>
                <div class="col-md-4">
                <select class="form-control"  name="DesignationID" id="DesignationID">
                    <option value="">Please select</option>
                    @foreach($desig as $desigs)
                        <option value="{{$desigs->DesignationID}}" {{( $desigs->DesignationID == old('DesignationID') ) ? 'selected' : '' }}>{{$desigs->DesignationTitle}}</option>
                    @endforeach
                </select>
            </div>
            </div>
              <div class="col-md-12" style="text-align: right;">
                <button type="submit" id="searchbtn" class="btn btn-info">Search</button>
                <button type="button" id="resetbtn" class="btn btn-success" onclick="document.getElementById('EmployeeID').value = null; document.getElementById('searchbtn').click(); return false;">Reset</button>
              </div>
            </div>
            </form>

  <tr>
    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons table_id">
  <thead>
  <tr>
    <th class="p-3 mb-2 bg-success text-white" style="width: 80px;">ID</th>
    <th class="p-3 mb-2 bg-success text-white">Employee ID</th>
    <th class="p-3 mb-2 bg-success text-white">Name</th>

    {{-- <th>Gender</th> --}}
    <th class="p-3 mb-2 bg-success text-white">Date Of Birth</th>
    <th class="p-3 mb-2 bg-success text-white">Cnic</th>
    <th class="p-3 mb-2 bg-success text-white">Contact Number</th>
    {{-- <th>MobileNetwork</th> --}}
    {{-- <th>PresentAddress</th> --}}
    {{-- <th>PermanentAddress</th> --}}
    {{-- <th>JoiningDate</th> --}}
    {{-- <th>RegularizationDate</th> --}}
    <th class="p-3 mb-2 bg-success text-white">Date Of Retirement</th>
    {{-- <th>DateOfRetirement</th> --}}
    <th class="p-3 mb-2 bg-success text-white">Picture Path</th>
    <th class="p-3 mb-2 bg-success text-white">Action</th>
  </tr>
  </thead>
  <tbody>
      {{-- {{dd($employes)}} --}}
  @foreach ($employes as $key=>$employe)
    <tr>
        <td class="text-center font-size-sm">{{$key+1}}</td>
        <td>{{ $employe->EmployeeID }}</td>
        <td>{{ $employe->Name }}</td>
        <td>{{ $employe->DateOfBirth }}</td>
        <td>{{ $employe->Cnic }}</td>
        <td>{{ $employe->ContactNumber }}</td>
        {{-- <td>{{ $employe->PresentAddress }}</td> --}}
        <td>{{ $employe->DateOfRetirement }}</td>
        <td class="text-600 text-orange-d2"><img src="{{url('/myfiles/'.$employe->PicturePath)}}" class="user-image" alt="User Image" width = "60px" ></td>


      <td>
        <div class="btn-group">
          <a href="{{route('hr.employes.edit', ['id' => $employe->EmployeeID])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
            <i class="fa fa-pencil-alt"></i>
          </a>
          <a id="{{$employe->EmployeeID}}" href="#" class="btn btn-sm btn-danger del-employe" data-toggle="tooltip" title="Delete Item">
            <i class="far fa-trash-alt"></i>
          </a>
          <a href="{{ route('hr.employes.show', [ 'id' => $employe->EmployeeID ])}}" id="{{ $employe->EmployeeID}}" class="btn btn-sm btn-success" style="padding: 4px 8px;" data-toggle="tooltip" title="View Employe Detail">
            <i class="far fa-plus-square"></i>
          </a>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-employe').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') > 0)
      {
        var del_route = "<?php echo 'employes/destroy/';?>"+$(this).attr('id');
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
<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<style>
.myclass{
  float: left;
  margin-top: 1px;
  margin-right: 6px;
}
</style>



