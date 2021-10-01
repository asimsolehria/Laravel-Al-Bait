@extends('layouts.portal', [
'menu' => 'system_setting',
'sub_menu' => 'users'
])
@section('module','Book Information')
@section('element','List of books')

@section('content')


<div role="main" class="page-content container container-plus">
     <div class="page-header">
          <h1 class="page-title text-primary-d2">
               Bootstrap Table
               <small class="page-info text-secondary-d2">
                    <i class="fa fa-angle-double-right text-80"></i>
                    extended tables plugin
               </small>
          </h1>
     </div>


     <div class="card bcard">
          <div class="card-header bgc-primary-d1 text-white border-0">
               <h4 class="text-120">
                    <span class="text-90">
                         Results for
                    </span>
                    "Latest Products"
               </h4>
          </div>

          <div class="card-body p-0 border-x-1 border-b-1 brc-primary-m3 radius-0 overflow-hidden">


               <div class="bootstrap-table bootstrap4">
                    <div class="fixed-table-toolbar">
                         <div class="bs-bars float-left">
                              <div id="table-toolbar">
                                   <button disabled="" id="remove-btn"
                                        class="btn btn-xs p-2 mr-2 bgc-white btn-lighter-red radius-3px">
                                        <i class="fa fa-trash-alt text-125 mx-2px"></i>
                                   </button>
                              </div>
                         </div>
                         <div class="columns columns-right btn-group float-right"><button
                                   class="btn btn-outline-default bgc-white btn-h-light-primary btn-a-outline-primary py-1 px-25 text-95"
                                   type="button" name="fullscreen" aria-label="Fullscreen" title="Fullscreen">
                                   <i class="fa fa fa-expand"></i>

                              </button>
                              <div class="keep-open btn-group" title="Columns">
                                   <button
                                        class="btn btn-outline-default bgc-white btn-h-light-primary btn-a-outline-primary py-1 px-25 text-95 dropdown-toggle"
                                        type="button" data-toggle="dropdown" aria-label="Columns" title="Columns">
                                        <i class="fa fa-th-list text-orange-d1"></i>

                                        <span class="caret"></span>
                                   </button>
                                   <div class="dropdown-menu dropdown-menu-right"><label
                                             class="dropdown-item dropdown-item-marker"><input type="checkbox"
                                                  data-field="id" value="1" checked="checked"> <span>Product
                                                  ID</span></label><label
                                             class="dropdown-item dropdown-item-marker"><input type="checkbox"
                                                  data-field="name" value="2" checked="checked"> <span>Product
                                                  Name</span></label><label
                                             class="dropdown-item dropdown-item-marker"><input type="checkbox"
                                                  data-field="price" value="3" checked="checked">
                                             <span>Price</span></label><label
                                             class="dropdown-item dropdown-item-marker"><input type="checkbox"
                                                  data-field="tools" value="4" checked="checked"> <span><i
                                                       class="fa fa-cog text-secondary-d1 text-130"></i></span></label>
                                   </div>
                              </div>
                              <div class="export btn-group">
                                   <button
                                        class="btn btn-outline-default bgc-white btn-h-light-primary btn-a-outline-primary py-1 px-25 text-95 dropdown-toggle"
                                        aria-label="Export" data-toggle="dropdown" type="button" title="Export data">
                                        <i class="fa fa-download text-blue"></i>

                                        <span class="caret"></span>
                                   </button>
                                   <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item " href="#"
                                             data-type="json">JSON</a><a class="dropdown-item " href="#"
                                             data-type="xml">XML</a><a class="dropdown-item " href="#"
                                             data-type="csv">CSV</a><a class="dropdown-item " href="#"
                                             data-type="txt">TXT</a><a class="dropdown-item " href="#"
                                             data-type="sql">SQL</a><a class="dropdown-item " href="#"
                                             data-type="excel">MS-Excel</a></div>
                              </div><button
                                   class="btn btn-outline-default bgc-white btn-h-light-primary btn-a-outline-primary py-1 px-25 text-95 bs-print"
                                   type="button">
                                   <i class="fa fa-print text-purple-d1"></i>
                              </button>
                         </div>
                         <div class="float-left search btn-group">
                              <input class="form-control
        
        search-input" type="text" placeholder="Search" autocomplete="off">
                         </div>
                    </div>

                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                         <div class="fixed-table-header" style="display: none;">
                              <table></table>
                         </div>
                         <div class="fixed-table-body">
                              <div class="fixed-table-loading table table-bordered table-hover" style="top: 48px;">
                                   <span class="loading-wrap">
                                        <span class="loading-text">Loading, please wait</span>
                                        <span class="animation-wrap"><span class="animation-dot"></span></span>
                                   </span>

                              </div>
                              <table class="table text-dark-m2 text-95 bgc-white table-bordered table-hover" id="table">
                                   <!-- table -->
                                   <thead class="bgc-white text-grey text-uppercase text-80">
                                        <tr>
                                             <th class="detail" rowspan="1">
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                                  <div class="th-inner "><label><input name="btSelectAll"
                                                                 type="checkbox"><span></span></label></div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th style="" data-field="id">
                                                  <div class="th-inner sortable both">Book Cover Pic</div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th style="" data-field="name">
                                                  <div class="th-inner sortable both">Book Title</div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th style="" data-field="price">
                                                  <div class="th-inner sortable both">Author</div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th style="" data-field="price">
                                                  <div class="th-inner sortable both">Status(issued,available)</div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th style="" data-field="price">
                                                  <div class="th-inner sortable both">Self Location</div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                             <th style="text-align: center; width: 140px; " data-field="tools">
                                                  <div class="th-inner "><i
                                                            class="fa fa-cog text-secondary-d1 text-130"></i></div>
                                                  <div class="fht-cell"></div>
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr data-index="0" data-has-detail-view="true">
                                             <td>
                                                  <a class="detail-icon" href="#">
                                                       <i class="fa fa-plus text-blue"></i>
                                                  </a>
                                             </td>
                                             <td class="bs-checkbox " style="width: 36px; "><label>
                                                       <input data-index="0" name="btSelectItem" type="checkbox">
                                                       <span></span>
                                                  </label></td>
                                             <td style="">1</td>
                                             <td style="">2</td>
                                             <td style="">3</td>
                                             <td style="">4</td>
                                             <td style="">5</td>
                                             <td style="text-align: center; width: 140px; ">
                                                  <div class="action-buttons"> <a class="text-blue mx-1" href="#"> <i
                                                                 class="fa fa-search-plus text-105"></i> </a> <a
                                                            class="text-success mx-1" href="#"> <i
                                                                 class="fa fa-pencil-alt text-105"></i> </a> <a
                                                            class="text-danger-m1 mx-1" href="#"> <i
                                                                 class="fa fa-trash-alt text-105"></i> </a> </div>
                                             </td>
                                        </tr>

                                   </tbody>
                              </table>
                         </div>
                         <div class="fixed-table-footer">
                              <table>
                                   <thead>
                                        <tr></tr>
                                   </thead>
                              </table>
                         </div>
                    </div>
                    <div class="fixed-table-pagination">
                         <div class="float-left pagination-detail"><span class="pagination-info">
                                   Showing 1 to 10 of 34 rows
                              </span><span class="page-list"><span class="btn-group dropdown dropup">
                                        <button
                                             class="btn btn-outline-default bgc-white btn-h-light-primary btn-a-outline-primary py-1 px-25 text-95 dropdown-toggle"
                                             type="button" data-toggle="dropdown">
                                             <span class="page-size">
                                                  10
                                             </span>
                                             <span class="caret fa fa-caret-down"></span>
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item active" href="#">10</a><a
                                                  class="dropdown-item " href="#">25</a><a class="dropdown-item "
                                                  href="#">50</a></div>
                                   </span> rows per page</span></div>
                         <div class="float-right pagination">
                              <ul class="pagination">
                                   <li class="page-item page-pre disabled"><a class="page-link"
                                             aria-label="previous page" href="javascript:void(0)">‹</a></li>
                                   <li class="page-item active"><a class="page-link" aria-label="to page 1"
                                             href="javascript:void(0)">1</a></li>
                                   <li class="page-item"><a class="page-link" aria-label="to page 2"
                                             href="javascript:void(0)">2</a></li>
                                   <li class="page-item"><a class="page-link" aria-label="to page 3"
                                             href="javascript:void(0)">3</a></li>
                                   <li class="page-item"><a class="page-link" aria-label="to page 4"
                                             href="javascript:void(0)">4</a></li>
                                   <li class="page-item page-next"><a class="page-link" aria-label="next page"
                                             href="javascript:void(0)">›</a></li>
                              </ul>
                         </div>
                    </div>
               </div>
               <div class="clearfix"></div>
          </div>
     </div>
</div>
@endsection