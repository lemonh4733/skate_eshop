@extends('admin/main')

@section('content')

<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Admin Panel</span>
            <h3 class="page-title">eShop apžvalga</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Prekių</span>
                            <h6 class="stats-small__value count my-3">{{count($items)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Užsakymų</span>
                            <h6 class="stats-small__value count my-3">{{count($orders)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Vartotojų</span>
                            <h6 class="stats-small__value count my-3">{{count($users)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- End Small Stats Blocks -->



    </div>
</div>
@stop
