@extends('layouts.app')

@section('title', 'Comic detail')

@section('main-content')
<section>
    <div class="container py-4">
        <a href="{{route('comics.index')}}" class="btn btn-primary my-3">Torna alla lista</a>
        <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary my-3">Modifica</a>


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
