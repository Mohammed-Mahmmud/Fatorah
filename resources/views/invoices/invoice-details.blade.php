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
                                                        {{-- <thead>
                                                         <tr>
                                                                {{-- <th class="border-bottom-0">#</th> 
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
                                                                {{-- <td>{{ $invoice->id }}</td> 
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
                                                          
                                                        </tbody>--}}

<tr>
    <th  bgcolor="lightblue" style="font-size:18px;"><strong>رقم الفاتورة</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{ $invoice->invoice_number }}</td>
    <th style="font-size:18px;" bgcolor="lightblue"><strong>تاريخ الاصدار</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{ $invoice->invoice_date }}</td>
    <th style="font-size:18px;" bgcolor="lightblue" ><strong>تاريخ الاستحقاق</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{ $invoice->Due_date }}</td>
</tr>
<tr>
    <th style="font-size:18px;" bgcolor="lightblue"><strong>المنتج</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{ $invoice->product }}</td>
    <th style="font-size:18px;" bgcolor="lightblue"><strong>القسم</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{$invoice->section->section_name}}</td>
    <th style="font-size:18px;" bgcolor="lightblue"><strong>الخصم</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{ $invoice->discount}}</td>
    </tr>
    <tr>
        <th style="font-size:18px;" bgcolor="lightblue"><strong>مبلغ التحصيل</strong></th>
        <td style="font-size:18px;" bgcolor="pink">{{ $invoice->amount_collection}}</td>
        <th style="font-size:18px;" bgcolor="lightblue"><strong>مبلغ العمولة</strong></th>
        <td style="font-size:18px;" bgcolor="pink">{{ $invoice->amount_Commission }}</td>
        <th style="font-size:18px;" bgcolor="lightblue"><strong>ملاحظات</strong></th>
        <td style="font-size:18px;" bgcolor="pink">{{ $invoice->note }}</td>
        </tr>
    <tr>
        <th style="font-size:18px;" bgcolor="lightblue"><strong>قيمة الضريبة</strong></th>
        <td style="font-size:18px;" bgcolor="pink">{{ $invoice->value_vat}}</td>
        <th style="font-size:18px;" bgcolor="lightblue"><strong>نسبة الضريبة</strong></th>
        <td style="font-size:18px;" bgcolor="pink">{{ $invoice->rate_vat }}</td>
    
     <th style="font-size:18px;" bgcolor="lightblue"><strong>الاجمالي</strong></th>
        <td style="font-size:18px;" bgcolor="pink">{{ $invoice->total }}</td>
    </tr>

<tr>
    <th style="font-size:18px;" bgcolor="lightblue"><strong>المستخدم</strong></th>
    <td style="font-size:18px;" bgcolor="pink">{{ username()  }}</td>
    <th style="font-size:18px;" bgcolor="lightblue"><strong>الحالة</strong></th>
    <td>
        @if ($invoice->value_status == 1)
        <span
        style="font-size:18px;" class="badge badge-pill badge-success" bgcolor="pink">{{ $invoice->status }}</span>
    @elseif($invoice->value_status == 2)
        <span
        style="font-size:20px "    class=" text-danger">{{ $invoice->status }}</span>
    @else
        <span
        style="font-size:18px;"   class="text-warning" >{{ $invoice->status }}</span>
    @endif
</td>
</tr>
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
                                                                <th class="border-bottom-0">#</th> 
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
                                                            <?php $i=0;?>
                                                            @foreach ($invoice_details as $details)
                                                            <?php $i++;?>
                                                            <tr>
                                                                <td>{{ $i }} </td>
                                                                <td>{{ $details->invoice_number }} </td>
                                                                <td>{{ $details->product }} </td>
                                                                <td>{{ $invoice->section->section_name }}</td>
                                                                <td>
                                                                    @if ($details->value_status == 1)
                                                                    <span class="text-success">{{ $details->status }}</span>
                                                                    @elseif($details->value_status == 2)
                                                                    <span class="text-danger">{{ $details->status }}</span>
                                                                    @else
                                                                    <span class="text-warning">{{ $details->status }}</span>
                                                                    @endif
                                                                </td>

                                                                    <td>{{ $details->Payment_Date }}</td>    
                                                                    <td>{{ $details->note }}</td>    
                                                                    <td>{{ $details->invoice_date }}</td>    
                                                                    <td>{{ $details->user }}</td>
                                                                
                                                                </tr>
                                                                @endforeach
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
                                                                    {{-- <th class="border-bottom-0"> الملف</th> --}}
                                                                    <th class="border-bottom-0">قام بالاضافة</th>
                                                                    <th class="border-bottom-0">تاريخ الاضافة</th>
                                                                    <th class="border-bottom-0">العمليات</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>{{ $invoice_attachments->invoice_number }} </td>
                                                                <td>{{ $invoice_attachments->file_name }}</td>
                                                                {{-- <td><img src="{{ $file_url }}"  width="100" height="100"></td> --}}
                                                                <td>{{ $invoice_attachments->created_by }}</td>
                                                                <td>{{ $invoice_attachments->created_at }}</td>
                                                                <td>
                                                                    <a class="btn btn-outline-success btn-sm" href="/view_file/{{ $invoice_attachments->invoice_number }}/{{ $invoice_attachments->file_name }}">عرض</a>
                                                                    <a class="btn btn-outline-info btn-sm">تحميل</a>
                                                                    <a class="btn btn-outline-danger btn-sm">حذف</a>
                                                                </td> 
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
