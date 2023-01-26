@extends('layouts.admin')

@section('content')
<h1 class="my-4">{{$project->name}}</h1>
<h4 class="mt-4">Description:</h4>
<p>{{$project->description}}</p>
<h4 class="mt-4">Costumer:</h4>
<span>{{$project->client}}</span>
@endsection