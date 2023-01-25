@extends('layouts.admin')

@section('content')
<h1 class="my-4">Projects List</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Customer</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->client}}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
