@extends('layouts/admin')

@section('content')

<div class="main pt-5">
  <h1>{{$project->title}}</h1>
  <hr>
  <h4>{{$project->description}}</h4>
  <p>
    {{$project->content}}
  </p>
</div>
@endsection