@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fs-4 text-secondary my-4">
            {{ __('Edit project') }}
        </h1>
        <form class="row" action="{{ route('admin.projects.update', $project) }}" method="POST">
            @method('PATCH')
            @csrf

            <div class="col-4">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project['title'] }}">
            </div>

            <div class="col-4">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option value="front-end">Front End</option>
                    <option value="back-end">Back End</option>
                    <option value="full-stack">Full-stack</option>
                </select>
            </div>

            <div class="col-4">
                <label for="category" class="form-label">Linguaggio</label>
                <select class="form-select" id="category" name="category">
                    <option value="html">html</option>
                    <option value="css">css</option>
                    <option value="vue">vue</option>
                </select>
            </div>
            <div class="col">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $project['description'] }}"</textarea>
            </div>
            <div class="col-12 my-3">
                <button class="btn btn-success">Modifica</button>
            </div>
        </form>
    </div>
@endsection
