@extends('layouts/admin')

@section('content')


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
        <td><a href="{{route('admin.types.index')}}">{{$project->type?->type_name}}</a></td>
        <td>{{$project->slug}}</td>
        <td>
            <a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a class="text-success" href="{{route('admin.projects.edit', $project->slug)}}"><i class="fa-solid fa-pen"></i></a>
            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <a class="text-danger" data-bs-toggle="modal" data-bs-target="#saveModal" href="{{route('admin.projects.destroy', $project->slug)}}"><i class="fa-solid fa-trash"></i></a>
            
            <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="saveeModalLabel">Operazione richiesta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Sei veramente sicuro di voler eliminare il progetto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Torna indietro</button>
                            <button type="submit" class="btn btn-primary">Elimina</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            
        </td>
    </tr>
    @endforeach


  </tbody>
</table>
@endsection