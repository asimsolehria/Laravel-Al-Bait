@extends('layouts2.app')

@section('contents')

<div class="block">
    <div class="block-header">
        <h3 class="block-title">ACR Evaluation Factor</h3>
        <a href="{{route('hr.acrevaluationfactor.add')}}" class="btn btn-rounded btn-success float-right">Add New</a>
    </div>

    <div class="block-content block-content-full">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Question type title</th>
                        <th>Main question</th>
                        <th>Sub question</th>
                        <th>FEStatus</th>

                        <th class="d-none d-sm-table-cell" style="width: 30%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($acrfactors as $key=>$acrfactor)

                    <tr>
                    <td class="text-center font-size-sm">{{$key+1}}</td>
                        <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_blank.html">{{$acrfactor->QuestionTypeTitle}}</a>
                        </td>
                        <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_blank.html">{{$acrfactor->MainQuestion}}</a>
                        </td>
                        <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_blank.html">{{$acrfactor->SubQuestion}}</a>
                        </td>
                        <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_blank.html">{{$acrfactor->FEStatus}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">



                            {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Add province</a> --}}
                            <a href="{{route('hr.acrevaluationfactor.edit', ['id' => $acrfactor->FEID])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil-alt"></i>


                              {{-- <a id="{{$province->ProvinceID}}" href="#" class="btn btn-sm btn-danger del-Prov" data-toggle="tooltip" title="Delete Item">
                                        <i class="far fa-trash-alt"></i> --}}
                                        <a id="{{$acrfactor->FETID}}" href="#" class="btn btn-sm btn-danger del-grade" data-toggle="tooltip" title="Delete Item">
                                            <i class="far fa-trash-alt"></i>

                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.del-grade').on('click', function(e){
      e.preventDefault();
      if($(this).attr('id') > 0)
      {
        var del_route = "<?php echo 'acrfactorevaluationtypes/destroy/';?>"+$(this).attr('id');
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

