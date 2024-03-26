@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
<section>
    <div class="container py-4">
        <h1 class="my-3">Comics</h1>

        <a href="{{route('comics.create')}}" class="btn btn-primary my-3">Inserisci nuovo comic</a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Categoria</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->getPrice()}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="ms-3" href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-circle-info"></i></a></td>
                    </td>
                    <td>
                        <a class="ms-3" href="{{route('comics.edit', $comic)}}"><i class="fa-solid fa-pencil"></i></a>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="100">No Comic Found</td>
                </tr>
                @endforelse

            </tbody>
        </table>


        {{$comics->links()}}
    </div>
</section>
@endsection



@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
