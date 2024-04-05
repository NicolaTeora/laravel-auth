@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            My Projects
        </h2>

        <div class="container">

            <div class="row mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">description</th>
                            <th scope="col">type</th>
                            <th scope="col">category</th>
                            <th scope="col">option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->type }}</td>
                                <td>{{ $project->category }}</td>

                                <td>
                                    <a class="badge text-decoration-none text-bg-primary fs-6"
                                        href="{{ route('admin.projects.show', $project->id) }}">info</a>
                                    <a class="badge text-decoration-none text-bg-success fs-6"
                                        href="{{ route('admin.projects.edit', $project->id) }}">edit</a>
                                    <a class="badge text-decoration-none text-bg-danger fs-6" data-bs-toggle="modal"
                                        data-bs-target="#idModal"
                                        href="{{ route('admin.projects.destroy', $project->id) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <a class="badge text-bg-warning text-decoration-none fs-6" href="{{ route('admin.dashboard') }}">Back Dashboard</a>
        <a class="badge text-bg-primary text-decoration-none fs-6" href="{{ route('home') }}">Back Home</a>
        <a class="badge text-bg-success text-decoration-none fs-6" href="{{ route('admin.projects.create') }}">Add
            project</a>

    </div>
@endsection
