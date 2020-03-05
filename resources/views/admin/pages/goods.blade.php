@extends('admin/main')

@section('content')

    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle"> Visos prekės <a href="/myitems">Mano prekės</a></span>
                <h3 class="page-title">Visos prekės</h3>
            </div>
        </div>
            <div class="row">
    @foreach($items as $item)
                    <div class="col-lg-3">
                        <div class="card card-small card-post card-post--1">
                            <div class="card-post__image" style="background-image:url({{Storage::url("{$item->img}")}});">
                                <a href="#" class="card-post__category badge badge-pill badge-warning">{{$item->category}}</a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-fiord-blue" href="#">{{$item->title}}</a>
                                </h5>
                                <p class="card-text d-inline-block mb-3">{{$item->description}}</p>
                                <span class="text-muted">{{$item->created_at}}</span><br>
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-primary" href="/update-item&{{$item->id}}">Redaguoti</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-danger" href="/delete&{{$item->id}}">Šalinti</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

    @endforeach
            </div>
        </div>
    </div>
@stop
