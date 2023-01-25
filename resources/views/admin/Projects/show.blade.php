@extends('layouts.admin')

@section('content')
<h1 class="my-4">{{$project[0]->name}}</h1>
<h4 class="mt-4">Description:</h4>
<p>{{$project[0]->description}}</p>
<h4 class="mt-4">Costumer:</h4>
<span>{{$project[0]->client}}</span>
@endsection