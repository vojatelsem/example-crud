@extends('layout')

@section('title', isset($user) ? 'Update '.$user->name : 'Create user')

@section('content')
    <a class="btn btn-secondary" type="button" href="{{ route('users.index') }}">Back to users</a>
    <form method="post"
          @if(isset($user))
          action="{{ route('users.update',$user) }}"
          @else
          action="{{ route('users.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{old('name', isset($user) ? $user->name : null)  }}"
                       type="text" class="form-control" placeholder="Name" aria-label="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="email"
                       value="{{ old('email', isset($user) ? $user->email : null) }}"
                       type="text" class="form-control" placeholder="Email" aria-label="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button class="btn btn-success" type="submit">Create</button>
            </div>
        </div>
    </form>
@endsection
