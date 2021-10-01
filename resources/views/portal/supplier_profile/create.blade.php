@extends('layouts.portal', [
'menu' => 'accounts',
'sub_menu' => 'chartofaccount'
])
@section('module', 'accounts')
@section('element', 'Add Chart of Account')
@section('title', 'Chart of Account')

@section('content')
<div class="card bcard mt-2 mt-lg-3">
     <div class="card-header">
          <h3 class="card-title text-125">
               <i class="far fa-edit text-dark-l3 mr-1"></i>
               Add Supplier
          </h3>
     </div>
     <div class="card-body px-3 pb-1">
          <form class="mt-lg-3" autocomplete="off" action="{{route('supplier.store')}}"
               method="post">
               @csrf
               {{-- <x-form-errorr :errors="$errors" /> --}}

               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountCode" class="mb-0">Supplier Name</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6" value="{{old('SupplierName')}}"
                              name="SupplierName" id="AccountCode" placeholder="Enter Suplier Name">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountName" class="mb-0">Contact NO</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6" value="{{old('ContactNo')}}"
                              name="ContactNo" id="AccountName" placeholder="Enter Contact NO">
                    </div>
               </div>

               <div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
                         <button class="btn btn-info btn-bold px-4" type="submit">
                              <i class="fa fa-check mr-1"></i>
                              Submit
                         </button>
                         <button class="btn btn-outline-lightgrey btn-bold ml-2 px-4" type="reset">
                              <i class="fa fa-undo mr-1"></i>
                              Reset
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