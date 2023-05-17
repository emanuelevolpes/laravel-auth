@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center p-4">
            <h2>Projects list</h2>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Create new project</a>
        </div>

        @if (session('message'))
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Notification</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td><a href="{{ route('admin.projects.show', $project->slug) }}"
                                class="btn btn-sm btn-primary">Show</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
