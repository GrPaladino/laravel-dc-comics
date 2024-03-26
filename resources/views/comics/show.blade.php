@extends('layouts.app')

@section('title', 'Comic detail')

@section('main-content')
<section>
    <div class="container py-4">
        <a href="{{route('comics.index')}}" class="btn btn-primary my-3">Torna alla lista</a>
        <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary my-3">Modifica</a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#comic-{{$comic->id}}">
            Elimina
        </button>

        <ul>
            <li class="h1">
                {{$comic->title}}
            </li>
            <li>
                {{$comic->series}}
            </li>
            <li>
                {{$comic->description}}
            </li>
            <li>
                {{$comic->type}}
            </li>
            <li>
                {{$comic->sale_date}}
            </li>
            <li>
                {{$comic->getPrice()}}
            </li>
        </ul>
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
