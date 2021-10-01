@extends('layouts.portal', [
'menu' => 'accounts',
'sub_menu' => 'chartofaccount'
])
@section('module', 'accounts')
@section('element', 'List all Chart of Accounts')
@section('title', 'Chart of Account')

@section('content')
<div class="row">
     <div class="col-12">
          <div class="card bcard">
               <div class="card-body px-1 px-md-3">
                    <div class="d-flex justify-content-between flex-column flex-sm-row mb-3 px-2 px-sm-0">
                         <h3 class="text-130 pl-1  mb-3 mb-sm-0">Project Detail's</h3>
                         
                         @can('project-create')
                         <div class="mb-2 mb-sm-0 d-print-none">
                              <a class="btn btn-outline-success"
                                   href="{{ route('project.create') }}"><i
                                        class="fa fa-fw fa-plus mr-1"></i> Add Project</a>
                         </div>
                         @endcan
                    </div>

                    <table id="simple-table"
                         class="mb-0 table table-borderless table-bordered-x brc-secondary-l3 text-dark-m2 radius-1 overflow-hidden">
                         <thead class="text-white-tp3 text-90 border-b-1 brc-transparent bgc-success-m1">
                              <tr>
                                   <th>Project Code</th>
                                   <th>Project Title</th>
                                   <th>Location</th>
                                   <th>Project Overview</th>
                                   <th>Client</th>
                                   <th>Focal Person</th>
                                   <th>Supervisor</th>
                                   <th>Action</th>
                              </tr>
                         </thead>

                         <tbody class="mt-1">
                              @foreach ($data as $key => $item)
                              <tr class="bgc-h-yellow-l4 d-style"> 
                                   <td>{{ $item->Project_Code }}</td>                                  
                                   <td>{{ $item->Project_title }}</td>
                                   <td>{{ $item->location }}</td>
                                   <td>{{ $item->Project_Overview }}</td>
                                   <td>{{ $item->ClientID }}</td>
                                   <td>{{ $item->Focal_PersonID }}</td>
                                   <td>{{ $item->SupervisorID }}</td>
                                   <td>
                                        <div class="d-lg-flex d-print-none">
                                             {{-- <a href="{{route('chartofaccount.show', $item->SeqID)}}" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-info btn-a-lighter-info">
											<i class="fa fa-eye text-info-d2"></i>
									</a> --}}
                                             @can('project-edit')
                                             <a href="{{route('project.edit', $item->ProjectId)}}"
                                                  class="mx-3px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-orange btn-a-lighter-orange">
                                                  <i class="fa fa-pencil-alt text-orange-d3"></i>
                                             </a>
                                             @endcan
                                             @can('project-delete')
                                             <a id="delete-gender"
                                                  class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                                  <i class="fa fa-trash-alt text-danger"></i>
                                             </a>
                                             <form method="POST" id="delete-gender-form"
                                                  action="{{route('project.destroy', $item->ProjectId)}}"
                                                  style="display:none">
                                                  @csrf
                                                  <input name="_method" type="hidden" value="DELETE">
                                             </form>
                                             @endcan
                                        </div>
                                   </td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>

                    <!-- Data Search Code paste here -->
               </div>
          </div>
     </div>
</div>

@endsection
@section('scripts')
<script>
jQuery(function($) {

     $('a#delete-gender').on('click', function() {
          var $this = $(this);
          var swalWithBootstrapButtons = Swal.mixin({
               customClass: {
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger mx-2'
               },
               buttonsStyling: false
          });
          swalWithBootstrapButtons.fire({
               title: 'Are you sure?',
               text: "Are you sure you want to delete this?",
               showCancelButton: true,
               scrollbarPadding: false,
               confirmButtonText: 'Yes, do it!',
               cancelButtonText: 'No, cancel!',
               reverseButtons: true
          }).then(function(result) {
               if (result.value) {
                    $($this).parents('td').find('#delete-gender-form').submit();
               }
          })
     })
});
</script>
@endsection