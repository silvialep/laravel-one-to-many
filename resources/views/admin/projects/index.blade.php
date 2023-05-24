@extends('layouts/admin')

@section('content')

<div class="d-flex justify-content-between aling-items-center mt-5">
    <h2>I miei progetti</h2>
    <a href="{{route('admin.projects.create')}}" class="btn btn-success d-flex align-items-center">Nuovo progetto</a>
</div>



<table class="mt-5 table table-hover">
  <thead>
    <th scope="col">Titolo</th>
    <th scope="col">Descrizione</th>
    <th scope="col">Contenuto</th>
    <th scope="col">Tipologia</th>
    <th scope="col">Slug</th>
    <th scope="col">Comandi</th>
  </thead>

  <tbody>

    @foreach($projects as $project)
    <tr>
        <td>{{$project->title}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->content}}</td>
        <td>
            @if(empty($project->type->type_name))
            <span class="text-danger fst-italic">NN</span>
            @else
            <a href="{{route('admin.types.show', $project->type)}}">{{$project->type->type_name}}</a>
            @endif
        </td>
        <td>{{$project->slug}}</td>
        <td>
            <a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a class="text-success" href="{{route('admin.projects.edit', $project->slug)}}"><i class="fa-solid fa-pen"></i></a>
            
        </td>
    </tr>
    @endforeach


  </tbody>
</table>
@endsection