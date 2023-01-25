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
                <td>
                    <a href="{{route('admin.projects.show',$project->slug)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('admin.projects.edit',$project->slug)}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('admin.projects.create')}}" class="btn btn-success">Create a New Project</a>
@endsection
