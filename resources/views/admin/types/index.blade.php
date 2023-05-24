@extends('layouts/admin')

@section('content')

<h2 class="text-center mt-5">Tutte le categorie</h2>

<table class="table mt-3" style="height: calc(100vh - 350px)">
    <thead>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Progetti</th>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <td>{{$type->type_name}}</td>
            <td>{{$type->description}}</td>
            @if(count($type->projects) > 0)
            <td>
                <ul style="padding:0">
                    @foreach($type->projects as $item)
                    <li>
                    <a href="{{route('admin.projects.show', $item->slug)}}">{{$item->title}}</a>
                    </li>
                    @endforeach

                </ul>
            </td>
            @else
            <td class="fst-italic text-danger px-3">NN</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

@endsection