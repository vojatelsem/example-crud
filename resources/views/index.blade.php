@extends('layout')
@section('title', 'Users')

@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('users.create') }}">Create user</a>
    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id  }}</th>
                <td><a href="{{ route('users.show',$user) }}">{{ $user->name }}</a></td>
                <td><a href="{{ route('users.show',$user) }}">{{ $user->email }}</a></td>
                <td>

                    <form method="post" action="{{ route('users.destroy',$user) }}">
                        <a class="btn btn-warning" type="button" href="{{ route('users.edit', $user) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>{{ $users->links() }}</div>
@endsection
