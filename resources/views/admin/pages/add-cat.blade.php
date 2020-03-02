@extends('admin/main')

@section('content')

    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Pridėti</span>
                <h3 class="page-title">Pridėti naują kategoriją</h3>
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
                <form action="/add/cat" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kategorijos pavadinimas</label>
                            <input class="form-control" type="text" name="pavadinimas" placeholder="Pavadinimas"><br>
                        <input class="btn btn-primary" type="submit" value="Įdėti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
