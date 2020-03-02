@extends('admin/main')

@section('content')

    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle"> Užsakymai</span>
                <h3 class="page-title">Visi užsakymai</h3>
            </div>
        </div>
            <div class="row">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Užsakymo Nr.</th>
            <th scope="col">Prekė</th>
            <th scope="col">Kiekis</th>
            <th scope="col">Užsakovas</th>
            <th scope="col">El.Paštas</th>
            <th scope="col">Tel.Nr</th>
            <th scope="col">Adresas</th>
            <th scope="col">Statusas</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            
    @foreach($orders as $order)
          <tr>
          <th scope="row">{{$order->id}}</th>
            <td>{{$order->item}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->status}}</td>
            <td><a class="btn btn-primary" href="/order/{{$order->id}}">Priimti užsakymą</a></td>
          </tr>
    @endforeach
        </tbody>
      </table>
            </div>
        </div>
    </div>
@stop
