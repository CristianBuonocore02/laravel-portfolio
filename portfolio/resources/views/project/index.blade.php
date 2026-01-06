@extends('layouts.project')

@section('content')
    <h1 class="text-center">Benvenuti nel mio portfolio digitale</h1>

    <div class="container py-5">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4 mb-4">
                    <!-- Card con tema scuro -->
                    <div class="card bg-dark text-white h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->nome }}</h5>
                            <p class="card-text"><strong>Cliente:</strong> {{ $project->cliente }}</p>
                            <p class="card-text"><strong>Periodo:</strong> {{ $project->periodo }}</p>
                            <!-- Aggiungi link o altre azioni -->
                            <a href="{{ route('project.show', $project) }}" class="btn btn-light">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 w-100 fixed-bottom">
        <p>&copy; {{ date('Y') }} - Il mio portfolio digitale</p>
        <p>
            <a href="https://www.linkedin.com" class="text-white" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            |
            <a href="https://github.com" class="text-white" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-github"></i> GitHub
            </a>
        </p>
    </footer>
@endsection
