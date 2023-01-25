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
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal{{$project->id}}">Delete</button>
                </td>
            </tr>
            <div class="modal fade" id="modal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete {{$project->name}}?
                        </div>
                        <div class="modal-footer">
                            <form action="{{route('admin.projects.destroy',$project->id)}}"    method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>
<a href="{{route('admin.projects.create')}}" class="btn btn-success">Create a New Project</a>
@endsection
