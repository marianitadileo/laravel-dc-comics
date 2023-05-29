@extends('layouts.app')

@section('content')
<h1>Comics {{ $comics->title }}</h1>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $comics->thumb }}" class="img-fluid rounded-start"  alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3>Id: {{$comics->id}}</h3>
                <h2 class="card-title">Titolo: {{$comics->title}}</h2>
                <h3 class="card-title">Serie: {{$comics->series}}</h3>
                <h3 class="card-title">Tipo: {{$comics->type}}</h3>
                <p class="card-text">Descrizione: {{$comics->description}}</p>
                <h6 class="card-title">Data: {{$comics->sale_date}}</h6>
                <h6 class="card-title">Prezzo: {{$comics->price}}€</h6>
                <a href="" class="btn btn-danger">BACK TO LIST</a>
            </div>
        </div>
    </div>
</div>
@endsection