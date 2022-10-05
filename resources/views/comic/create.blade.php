@extends('layout.app')

@section('content')

    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}"/>

              @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror

            </div>

            <div class="form-group">
              <label for="description">Descrizione</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>

                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="form-group">
              <label for="thumb">thumb</label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}"/>

              @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="price">Prezzo</label>
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}"/>

              @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="series">Serie</label>
              <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}"/>

              @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="sale_date">Data Rilascio</label>
              <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date') }}"/>

              @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="type">Tipologia</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}"/>

              @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <button type="submit" class="btn btn-success">Aggiungi Nuovo Fumetto</button>
          </form>
    </div>


@endsection
