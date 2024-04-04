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
                                    <a href="{{ route('admin.projects.show', $project->id) }}">info</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a class="badge text-bg-primary fs-6" href="{{ route('admin.dashboard') }}">Back Dashboard</a>
    </div>
@endsection
