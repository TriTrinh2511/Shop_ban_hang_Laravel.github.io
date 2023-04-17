@extends('admin.layout')
@section('title', '')

@section('css')

@endsection()


@section('body')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Thống kê tổng quan</h4>
 

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-primary border-primary">
                    <div class="card-body">
                        <div class="mb-4"> 
                            <h5 class="card-title mb-0 text-white">Doanh thu</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white data-turnover"> </h2>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> <!-- end col-->
            <div class="col-md-6 col-xl-3">
                <div class="card bg-success border-success">
                    <div class="card-body">
                        <div class="mb-4"> 
                            <h5 class="card-title mb-0 text-white">Sản phẩm đã bán</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white data-item_sell"> </h2>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> <!-- end col-->

</div>
            
@endsection()


@section('sub_layout')

@endsection()


@section('js')
    <script src="{{ asset('manager/assets/js/page/statistic.js') }}"></script>
@endsection()