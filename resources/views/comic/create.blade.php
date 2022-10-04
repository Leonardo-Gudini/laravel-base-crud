@extends('layout.app')

@section('content')

    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
              <label for="description">Descrizione</label>
              <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
              <label for="thumb">thumb</label>
              <input type="text" class="form-control" id="thumb" >
            </div>
            <div class="form-group">
              <label for="price">Prezzo</label>
              <input type="text" class="form-control" id="price" >
            </div>
            <div class="form-group">
              <label for="series">Serie</label>
              <input type="text" class="form-control" id="series" >
            </div>
            <div class="form-group">
              <label for="sale_date">Data Rilascio</label>
              <input type="text" class="form-control" id="sale_date" >
            </div>
            <div class="form-group">
              <label for="type">Tipologia</label>
              <input type="text" class="form-control" id="type" >
            </div>
            <button type="submit" class="btn btn-success">Aggiungi Nuovo Fumetto</button>
          </form>
    </div>


@endsection
