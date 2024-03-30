@extends('layouts.app')

@section('title', 'Crea Comic')

@section('main-content')
<section>
    <div class="container py-4">
        <h2>Crea il nuovo Comic</h2>

        <form action="{{route("comics.store")}}" method="post" class="row g-3">
            @csrf
            <div class="col-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" max="200" value="{{old("title")}}" required>

                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="col-4">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" max="100" value="{{old("series")}}" required>

                @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="type" class="form-label">Genere</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" max="30" value="{{old("type")}}" required>

                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old("sale_date")}}">

                @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="price" class="form-label">Prezzo</label>
                <input type='text' class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old("price")}}" required>

                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-4">
                <label for="thumb" class="form-label">Url immagine</label>
                <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old("thumb")}}">

                @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{old("description")}}</textarea>

                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="col-3">
                <button class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>Invia</button>
            </div>

        </form>

    </div>
</section>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
