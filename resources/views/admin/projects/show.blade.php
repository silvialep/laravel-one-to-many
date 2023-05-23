@extends('layouts/admin')

@section('content')

<div class="main pt-5">
  <div class="d-flex justify-content-between align-items-center">
    <h1>{{$project->title}}</h1>
    <span><a href="{{route('admin.types.index')}}">{{$project->type->type_name ?? ''}}</a></span>
  </div>
  <hr>
  <h4>{{$project->description}}</h4>
  <p>
    {{$project->content}}
  </p>
</div>
@endsection