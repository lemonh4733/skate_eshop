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
                        <input class="btn btn-primary" type="submit" value="Redaguoti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
