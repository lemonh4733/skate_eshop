@extends('admin/main')

@section('content')

    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Redaguoti</span>
                <h3 class="page-title">Redaguoti profilį</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                        <div class="mb-3 mx-auto">
                            @if($user->img)
                                <img class="rounded-circle" src={{Storage::url("{$user->img}")}} alt="User Avatar" width="110"> </div>
                            @else
                                <img class="rounded-circle" src="https://www.driven-u.com/wp-content/members/avatar_none.gif" alt="User Avatar" width="110"> </div>
                            @endif

                        <h4 class="mb-0">{{$user->name}}</h4>
                        <span class="text-muted d-block mb-2">{{$user->email}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Profilio informacija</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="/update/prfl/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Vardas</label>
                                            <input class="form-control" type="text" name="name" placeholder="Vardas" value={{$user->name}}>
                                            <label>El.Paštas</label>
                                            <input class="form-control" type="email" name="email" placeholder="El.Paštas" value={{$user->email}}>
                                            <label>Nuotrauka</label>
                                            <input class="form-control" type="file" name="img">
                                            <br>
                                            <input class="btn btn-primary" type="submit" value="Redaguoti">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
@stop
