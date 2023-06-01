@extends('layouts.app')

@section('content')
<h1>I nostri Comics</h1>
<div class="text-end m-4">
    <a href="{{route('comics.create')}}">Crea il tuo fumetto</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TITOLO</th>
          <th scope="col">PREZZO </th>
          <th scope="col">AZIONI</th>
        </tr>
        <tbody>
            @foreach ($comics as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary">
                        <a href="{{route('comics.show', $item->id)}}">
                            <i class="fa-sharp fa-solid fa-expand fa-fade"></i>
                        </a>
                    </button>
                   
                    <button type="button" class="btn btn-outline-primary">
                        <a href="{{route('comics.edit', $item->id)}}">
                            <i class="fa-solid fa-pen-to-square fa-fade"></i>
                        </a>
                    </button>
                    
                    <form class="d-inline-block" action="{{ route('comics.destroy', $item->id) }}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-danger">
                            <i class="fa-solid fa-trash fa-fade"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
  </table>
    
@endsection