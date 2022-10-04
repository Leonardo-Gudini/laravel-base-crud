@extends('layout.app')

@section('title', 'Lista fumetti')

@section('content')

    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Prezzo</th>
                  <th scope="col">Serie</th>
                  <th scope="col">Data Rilascio</th>
                  <th scope="col">Tipologia</th>
                  <th scope="col">Azioni</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date}}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Mostra dettagli</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', compact('comic')) }}" method="post">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Elimina</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection
