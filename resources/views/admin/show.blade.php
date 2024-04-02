@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Show details') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $project->title }}</div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <strong>Type work:</strong>
                                {{ $project->type }}
                            </li>
                            <li>
                                <strong>Description of the project: </strong>
                                {{ $project->description }}
                            </li>
                            <li>
                                <strong>Category of Lenguage used: </strong>
                                {{ $project->category }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="btn btn-primary my-3">
                    <a class="badge text-bg-primary fs-6" href="{{ route('index') }}">Look the projects</a>
                </div>
            </div>
        </div>

    </div>
@endsection