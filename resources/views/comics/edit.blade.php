@extends('layouts.app')

@section('title', 'Modifica-{{$comic->series}}')

@section('main-content')
<section>
    <div class="container py-4">
        <h2>Modifica {{$comic->title}}</h2>

        <a href="{{route('comics.index')}}" class="btn btn-primary my-3">Torna alla lista</a>
        <a href="{{route('comics.show', $comic)}}" class="btn btn-primary my-3">Torna alle info</a>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#comic-{{$comic->id}}">
            Elimina
        </button>


        <form action="{{route("comics.update", $comic)}}" method="post" class="row g-3">
            @csrf
            @method('PATCH')

            <div class="col-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" max="200" value="{{ old('title') ?? $comic->title }}" required>

                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" max="100" value="{{ old('series') ?? $comic->series }}" required>

                @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="type" class="form-label">Categoria</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" max="30" value="{{ old("type") ?? $comic->type }}" required>

                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old("sale_date") ?? $comic->sale_date }}">

                @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="price" class="form-label">Prezzo</label>
                <input type='text' class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old("price") ?? $comic->price }}" required>

                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="thumb" class="form-label">Url immagine</label>
                <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old("price") ?? $comic->thumb }}">

                @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old("price") ?? $comic->description }}</textarea>

                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="col-3">
                <button class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>Modifica</button>
            </div>

        </form>

    </div>
</section>
@endsection


@section('modal')

<!-- Modal -->
<div class="modal fade" id="comic-{{$comic->id}}" tabindex="-1" aria-labelledby="comic-{{$comic->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare {{$comic->title}}?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'azione é irreversibile.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
