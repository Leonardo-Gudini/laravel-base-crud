@extends('layout.app')

@section('content')

<div class="container">
    <form action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $comics->title }}"/>
        </div>
        <div class="form-group">
          <label for="description">Descrizione</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $comics->description }}"</textarea>
        </div>
        <div class="form-group">
          <label for="thumb">thumb</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comics->thumb }}"/>
        </div>
        <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" class="form-control" id="price" name="price" value="{{ $comics->price }}"/>
        </div>
        <div class="form-group">
          <label for="series">Serie</label>
          <input type="text" class="form-control" id="series" name="series" value="{{ $comics->series }}"/>
        </div>
        <div class="form-group">
          <label for="sale_date">Data Rilascio</label>
          <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comics->sale_date }}"/>
        </div>
        <div class="form-group">
          <label for="type">Tipologia</label>
          <input type="text" class="form-control" id="type" name="type" value="{{ $comics->type }}"/>
        </div>
        <button type="submit" class="btn btn-success">Salva Modifiche</button>
      </form>
</div>

@endsection
