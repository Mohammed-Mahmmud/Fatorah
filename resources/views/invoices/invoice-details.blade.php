@extends('layouts.master')
@section('title')
  تفاصيل الفاتورة
@stop
@section('css')
    <!---Internal  Prism css-->
    <link href="{{ URL::asset('assets/plugins/prism/prism.css') }}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{ URL::asset('assets/plugins/inputtags/inputtags.css') }}" rel="stylesheet">
    <!--- Custom-scroll -->
    <link href="{{ URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <div class="col-xl-12">
        <div class="card" id="tabs-style4">
            <div class="card-body">
                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">الفواتير</h4><span
                                class="text-muted mt-1 tx-13 mr-2 mb-0">/ تفاصيل
                                الفاتورة</span>
                        </div>
                    </div>

                </div>
                                <div class="panel panel-primary tabs-style-3">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu ">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li class=""><a href="#tab21" class="active" data-toggle="tab">
                                                    <i class="fa fa-laptop"></i> عرض معلومات الفاتورة</a></li>
                                                <li><a href="#tab22" data-toggle="tab"><i class="fa fa-cube"></i> حالة
                                                        الفاتورة</a></li>
                                                <li><a href="#tab23" data-toggle="tab"><i class="fa fa-cogs"></i> ملحقات
                                                        الفاتورة</a></li>
                                                {{-- <li><a href="#tab24" data-toggle="tab"><i class="fa fa-tasks"></i> Tab Style 04</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="tabs-style-4">
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab21">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example1" class="table key-buttons text-md-nowrap"
                                                        data-page-length='50'style="text-align: center">
                                                        <thead>
                                                         <tr>
                                                                {{-- <th class="border-bottom-0">#</th> --}}
                                                                <th class="border-bottom-0">رقم الفاتورة</th>
                                                                <th class="border-bottom-0">تاريخ القاتورة</th>
                                                                <th class="border-bottom-0">المنتج</th>
                                                                <th class="border-bottom-0">القسم</th>
                                                                <th class="border-bottom-0">المستخدم</th>
                                                                <th class="border-bottom-0">الحالة</th>
                                                                <th class="border-bottom-0">ملاحظات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             <tr>
                                                                {{-- <td>{{ $invoice->id }}</td> --}}
                                                                <td>{{ $invoice_details->invoice_number }} </td>
                                                                <td>{{ $invoice_details->invoice_date }}</td>
                                                                <td>{{ $invoice_details->product }}</td>
                                                                <td>{{ $invoice_details->section }}</td>
                                                                <td>{{ $invoice_details->user }}</td>
                                                                <td>
                                                                    @if ($invoice_details->value_status == 1)
                                                                        <span
                                                                            class="text-success">{{ $invoice_details->status }}</span>
                                                                    @elseif($invoice_details->value_status == 2)
                                                                        <span
                                                                            class="text-danger">{{ $invoice_details->status }}</span>
                                                                    @else
                                                                        <span
                                                                            class="text-warning">{{ $invoice_details->status }}</span>
                                                                    @endif

                                                                </td>
                                                                <td>{{ $invoice_details->note }}</td>

                                                                </td>
                                                            </tr>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab22">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example1" class="table key-buttons text-md-nowrap"
                                                        data-page-length='50'style="text-align: center">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-bottom-0">رقم الفاتورة</th>
                                                                <th class="border-bottom-0">نوع المنتج</th>
                                                                <th class="border-bottom-0">القسم</th>
                                                                <th class="border-bottom-0">حالة الدفع</th>
                                                                <th class="border-bottom-0">تاريخ الدفع</th>
                                                                <th class="border-bottom-0">ملاحظات</th>
                                                                <th class="border-bottom-0">تاريخ الاضافة</th>
                                                                <th class="border-bottom-0">المستخدم</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $invoice_details->invoice_number }} </td>
                                                                <td>{{ $invoice_details->product }} </td>
                                                                <td>{{ $invoice->section->section_name }}</td>
                                                                <td>
                                                                    @if ($invoice_details->value_status == 1)
                                                                    <span
                                                                    class="text-success">{{ $invoice_details->status }}</span>
                                                                    @elseif($invoice_details->value_status == 2)
                                                                    <span
                                                                    class="text-danger">{{ $invoice_details->status }}</span>
                                                                    @else
                                                                    <span
                                                                    class="text-warning">{{ $invoice_details->status }}</span>
                                                                    @endif
                                                                
                                                                    <td>{{ $invoice_details->Payment_Date }}</td>    
                                                                    <td>{{ $invoice_details->note }}</td>    
                                                                    <td>{{ $invoice_details->invoice_date }}</td>    
                                                                    <td>{{ $invoice_details->user }}</td>
                                                                </td>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab23">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example1" class="table key-buttons text-md-nowrap"
                                                        data-page-length='50'style="text-align: center">
                                                        <thead>
                                                            <tr>
                                                                @if ($invoice_attachments == null)
                                                                    <h2>ﻻيوجد ملحقات</h2>
                                                                @else
                                                                    <th class="border-bottom-0">رقم الفاتورة</th>
                                                                    <th class="border-bottom-0">أسم الملف</th>
                                                                    <th class="border-bottom-0"> الملف</th>
                                                                    <th class="border-bottom-0">المستخدم</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>{{ $invoice_attachments->invoice_number }} </td>
                                                                <td>{{ $invoice_attachments->file_name }}</td>
                                                                <td><img src="{{ $file_url }}"  width="100" height="100"></td>
                                                                <td>{{ $invoice_attachments->created_by }}</td>
                                                                @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
        @endsection
        @section('js')
            <!--Internal  Datepicker js -->
            <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
            <!-- Internal Select2 js-->
            <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
            <!-- Internal Jquery.mCustomScrollbar js-->
            <script src="{{ URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <!-- Internal Input tags js-->
            <script src="{{ URL::asset('assets/plugins/inputtags/inputtags.js') }}"></script>
            <!--- Tabs JS-->
            <script src="{{ URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
            <script src="{{ URL::asset('assets/js/tabs.js') }}"></script>
            <!--Internal  Clipboard js-->
            <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
            <!-- Internal Prism js-->
            <script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
        @endsection
