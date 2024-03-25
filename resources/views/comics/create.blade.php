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
                <input type="text" class="form-control" id="title" name="title" max="200">
            </div>
            <div class="col-4">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" max="100">
            </div>
            <div class="col-4">
                <label for="type" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" max="30">
            </div>
            <div class="col-4">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="col-4">
                <label for="price" class="form-label">Prezzo</label>
                <input type='text' class="form-control" id="price" name="price">

            </div>
            <div class="col-4">
                <label for="thumb" class="form-label">Url immagine</label>
                <input type="url" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
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
