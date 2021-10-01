@extends('layouts.portal', [
'menu' => 'accounts',
'sub_menu' => 'chartofaccount'
])
@section('module', 'accounts')
@section('element', 'List all Chart of Accounts')
@section('title', 'Chart of Accounts')

@section('content')
<div class="card bcard mt-2 mt-lg-3">
     <div class="card-header">
          <h3 class="card-title text-125">
               <i class="far fa-edit text-dark-l3 mr-1"></i>
               Upate Chart of Account
          </h3>
     </div>
     <div class="card-body px-3 pb-1">
          <form class="mt-lg-3" autocomplete="off"
               action="{{route('chartofaccount.update', $chartofaccount->SeqID)}}" method="post">
               <input type="hidden" name="_method" value="PATCH" />
               @csrf
               {{-- <x-form-errorr :errors="$errors" /> --}}

               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountCode" class="mb-0">Account Code</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6"
                              value="{{$chartofaccount->Account_Code}}" name="AccountCode" id="AccountCode"
                              placeholder="Enter Account Code">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountName" class="mb-0">Account Name</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6"
                              value="{{$chartofaccount->Account_Name}}" name="AccountName" id="AccountName"
                              placeholder="Enter Account Name">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="Description" class="mb-0">Description</label>
                    </div>
                    <div class="col-sm-9">
                         <textarea class="form-control col-sm-8 col-md-6" name="Description" id="Description"
                              placeholder="Enter Description">{{$chartofaccount->Description}}</textarea>
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="IsFirstLevel" class="mb-0">Is First Level</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="checkbox" {{($chartofaccount->IsFirstLevel == "1") ? 'checked': ''}}
                              class="form-control col-sm-8 col-md-6" value="1" name="IsFirstLevel" id="IsFirstLevel">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="Level" class="mb-0">Level</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="number" min="2" max="5" value="{{$chartofaccount->Level}}"
                              class="form-control col-sm-8 col-md-6" name="Level" id="Level"
                              placeholder="Enter Level Number">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="ParentCode" class="mb-0">Parent Code</label>
                    </div>
                    <div class="col-sm-9">
                         <select id="ParentCode" name="ParentCode" class="select2 form-control col-sm-8 col-md-6"
                              data-placeholder="Select Parent Code">
                              <option value="">Select Parent Code</option>
                              @foreach($parent_accounts as $coa)
                              <option value="{{$coa->Account_Code}}"
                                   {{($chartofaccount->Parent_Code == $coa->Account_Code) ? 'selected': ''}}>
                                   {{$coa->Account_Name}} ({{$coa->Account_Code}})</option>
                              @endforeach
                         </select>
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="IsTransaction" class="mb-0">Is Transaction</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="checkbox" {{($chartofaccount->Is_Transaction == "1") ? 'checked': ''}}
                              class="form-control col-sm-8 col-md-6" value="1" name="IsTransaction" id="IsTransaction">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="IsActive" class="mb-0">Is Active</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="checkbox" {{($chartofaccount->Is_Active == "1") ? 'checked': ''}}
                              class="form-control col-sm-8 col-md-6" value="1" name="IsActive" id="IsActive">
                    </div>
               </div>

               <div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
                         <button class="btn btn-info btn-bold px-4" type="submit">
                              <i class="fa fa-check mr-1"></i>
                              Update
                         </button>
                         <a href="{{route('chartofaccount.index')}}"
                              class="btn btn-outline-lightgrey btn-bold ml-2 px-4">
                              <i class="fa fa-arrow-left mr-1"></i>
                              Cancel
                         </a>
                    </div>
               </div>
          </form>
     </div>
</div>
@endsection
@section('scripts')
<script>
$(function() {
     if ($("#IsFirstLevel").prop("checked") == true) {
          $("#Level").val(1);
          $("#ParentCode").val('');
          $("#Level").attr("disabled", true);
          $("#ParentCode").attr("disabled", true);
     } else if ($("#IsFirstLevel").prop("checked") == false) {
          //$("#Level").val(2);
          $("#Level").attr("disabled", false);
          $("#ParentCode").attr("disabled", false);
     }

     $(document).on("click", "#IsFirstLevel", function() {
          if ($(this).prop("checked") == true) {
               $("#Level").val(1);
               $("#ParentCode").val('');
               $("#Level").attr("disabled", true);
               $("#ParentCode").attr("disabled", true);
          } else if ($(this).prop("checked") == false) {
               $("#Level").val(2);
               $("#Level").attr("disabled", false);
               $("#ParentCode").attr("disabled", false);
          }
     });

});
</script>
@endsection