@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
<section>
    <div class="container py-4">
        <h1 class="my-3">Comics</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                </tr>
                <tr>
                    <td>{{$comic->description}}</td>
                </tr>
                <tr>
                    <td>{{$comic->price}}</td>
                </tr>
                <tr>
                    <td>{{$comic->sale_date}}</td>
                </tr>
                <tr>
                    <td>{{$comic->type}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="100">No Comic Found</td>
                </tr>
                @endforelse

            </tbody>
        </table>

        {{-- <a href="{{route('comics.create')}}" class="btn btn-primary">Inserisci nuovo comic</a> --}}
    </div>
</section>
@endsection
