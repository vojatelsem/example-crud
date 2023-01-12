@extends('layout')
@section('title','User '.$user->name)

@section('content')
    <a class="btn btn-secondary" type="button" href="{{ route('users.index') }}">Back to users</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{ $user->id }}</li>
            <li class="list-group-item">Name: {{ $user->name }}</li>
            <li class="list-group-item">Email: {{ $user->email }}</li>
            <li class="list-group-item">Created at: {{ $user->created_at->format('d-m-Y H:m:s') }}</li>
            <li class="list-group-item">Update at: {{ $user->updated_at->format('d-m-Y H:m:s') }}</li>
        </ul>
    </div>
    <a class="btn btn-warning mt-3" type="button" href="{{ route('users.edit', $user) }}">Edit</a>
@endsection

