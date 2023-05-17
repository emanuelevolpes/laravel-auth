@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>You are logged in</h1>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary">Projects list</a>
    </div>
@endsection
