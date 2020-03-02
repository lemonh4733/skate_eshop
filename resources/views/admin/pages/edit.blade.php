@extends('admin/main')

@section('content')

    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Redaguoti</span>
                <h3 class="page-title">Redaguoti prekę</h3>
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
        <form action="/edit/{{$item->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Prekės pavadinimas</label>
                <input class="form-control" type="text" name="title" placeholder="Pavadinimas" value={{$item->title}}>
                <label>Kategorija</label>
                <select class="form-control" name="cat_id" >
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                <label>Kiekis</label>
                <input class="form-control" type="number" name="count" placeholder="Kiekis" value={{$item->count}}>
                <label>Kaina</label>
                <input class="form-control" type="number" name="price" placeholder="Kaina" value={{$item->price}}>
                <label>Nuotrauka</label>
                <input class="form-control" type="file" name="foto">
                <label>Aprašymas</label>
                <input class="form-control" type="text" name="description" placeholder="Aprašymas" value={{$item->description}}><br>
                <input class="btn btn-primary" type="submit" value="Redaguoti">
            </div>
        </form>
    </div>
    </div>
    </div>
@stop
