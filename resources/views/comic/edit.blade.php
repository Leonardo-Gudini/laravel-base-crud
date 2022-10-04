@extends('layout.app')

@section('content')

<div class="container">
    <form action="{{ route('comic.update', compact('comics')) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"/>
        </div>
        <div class="form-group">
          <label for="description">Descrizione</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $comic->description }}"</textarea>
        </div>
        <div class="form-group">
          <label for="thumb">thumb</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"/>
        </div>
        <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}"/>
        </div>
        <div class="form-group">
          <label for="series">Serie</label>
          <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"/>
        </div>
        <div class="form-group">
          <label for="sale_date">Data Rilascio</label>
          <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"/>
        </div>
        <div class="form-group">
          <label for="type">Tipologia</label>
          <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"/>
        </div>
        <button type="submit" class="btn btn-success">Aggiungi Nuovo Fumetto</button>
      </form>
</div>

@endsection
