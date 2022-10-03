@extends('layout.app')

@section('title', 'Lista fumetti')

@section('content')

    <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Titolo</th>
              <th scope="col">Descrizione</th>
              <th scope="col">Thumb</th>
              <th scope="col">Prezzo</th>
              <th scope="col">Serie</th>
              <th scope="col">Data Rilascio</th>
              <th scope="col">Tipologia</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date}}</td>
                    <td>{{ $comic->type }}</td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection
