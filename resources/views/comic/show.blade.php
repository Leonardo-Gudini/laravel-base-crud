@extends('layout.app')

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
                    <tr>
                        <th scope="row">{{ $comics->id }}</th>
                        <td>{{ $comics->title }}</td>
                        <td>{{ $comics->description }}</td>
                        <td>
                            <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
                        </td>
                        <td>{{ $comics->price }}</td>
                        <td>{{ $comics->series }}</td>
                        <td>{{ $comics->sale_date}}</td>
                        <td>{{ $comics->type }}</td>
                    </tr>
              </tbody>
        </table>

@endsection
