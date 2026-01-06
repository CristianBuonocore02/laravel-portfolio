@extends('layouts.project')

@section('title', 'Dettaglio del progetto')

@section('content')

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="col-lg-8 col-md-10">

            <div class="d-flex gap-2 mb-4 justify-content-center">
                <a class="btn btn-warning" href="{{ route('project.edit', $project) }}">
                    ✏️ Modifica
                </a>

                <form action="{{ route('project.destroy', $project) }}" method="POST"
                    onsubmit="return confirm('Sei sicuro di voler eliminare questo post?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        🗑️ Elimina
                    </button>
                </form>
            </div>

            <div class="text-center">

                <h1 class="mb-2">{{ $project->nome }}</h1>

                <p class="text-secondary mb-1">
                    {{ $project->cliente }}
                </p>

                <p class="text-secondary">
                    {{ $project->periodo }}
                </p>

                <hr>

                <p class="lead">
                    {{ $project->riassunto }}
                </p>

                <a href="{{ route('project.index') }}" class="btn btn-primary mt-3">
                    Torna alla lista
                </a>

            </div>

        </div>

    </div>

@endsection
