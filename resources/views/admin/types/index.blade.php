@extends('layouts/admin')

@section('content')


<table class="table mt-3">
    <thead>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Articoli</th>
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
                    <a href="{{route('admin.projects.show', $item)}}">{{$item->title}}</a>
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