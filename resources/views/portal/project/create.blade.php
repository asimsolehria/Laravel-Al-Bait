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
               Add Project
          </h3>
     </div>
     <div class="card-body px-3 pb-1">
          <form class="mt-lg-3" autocomplete="off" action="{{route('project.store')}}"
               method="post">
               @csrf
               {{-- <x-form-errorr :errors="$errors" /> --}}

               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountCode" class="mb-0">Project Code</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6" value="{{old('Project_Code')}}"
                              name="Project_Code" id="AccountCode" placeholder="Enter Project Code">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountName" class="mb-0">Project Title</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6" value="{{old('Project_title')}}"
                              name="Project_title" id="AccountName" placeholder="Enter Project Title">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountName" class="mb-0">Location</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6" value="{{old('location')}}"
                              name="location" id="AccountName" placeholder="Enter Location">
                    </div>
               </div>
               <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right required pr-0">
                         <label for="AccountName" class="mb-0">Project Overview</label>
                    </div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control col-sm-8 col-md-6" value="{{old('Project_Overview')}}"
                              name="Project_Overview" id="AccountName" placeholder="Enter Project Overview">
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