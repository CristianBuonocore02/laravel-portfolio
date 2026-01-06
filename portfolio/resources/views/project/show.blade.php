@extends('layouts.project')

@section('title', 'Dettaglio del progetto')

@section('content')

    <h1>{{ $project->name }}</h1> <!-- Accedi correttamente all'attributo 'name' -->
    <small>{{ $project->cliente }}</small><br>
    <small>{{ $project->persona }}</small>
    <hr>
    <p>{{ $project->riassunto }}</p>

    <!-- Pulsante che torna alla lista dei progetti -->
    <a href="{{ route('project.index') }}" class="btn btn-primary">Torna alla lista</a>

@endsection
