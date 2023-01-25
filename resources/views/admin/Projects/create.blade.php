@extends('layouts.admin')

@section('content')
<h1 class="my-4">Create a New Project</h1>
<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Project Title</label>
        <input class="form-control" type="text" placeholder="Name" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="costumer" class="form-label">Project Title</label>
        <input class="form-control" type="text" placeholder="costumer" id="costumer" name="client" required>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection