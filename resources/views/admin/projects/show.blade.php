@extends('layouts/admin')

@section('content')

<div class="main pt-5">
  <div class="d-flex justify-content-between align-items-center">
    <h1>{{$project->title}}</h1>
    @if(empty($project->type->type_name))
    <span class="text-danger fst-italic">Nessuna categoria</span>
    @else
    <a href="{{route('admin.types.index')}}">{{$project->type->type_name}}</a>
    @endif
    
    {{-- <span class="text-danger fst-italic">{{$project->type->type_name ?? 'Nessuna categoria'}}</span> --}}
  </div>
  <hr>
  <h4>{{$project->description}}</h4>
  <p>
    {{$project->content}}
  </p>
</div>
@endsection