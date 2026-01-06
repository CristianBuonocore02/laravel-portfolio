@extends('layouts.project')

@section('content')
    <!-- HERO / TITOLO -->
    <div class="container-fluid bg-dark text-white py-5 mb-5 w-100">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">
                Portfolio Progetti
            </h1>
            <p class="lead text-secondary mb-4">
                Gestione e visualizzazione dei progetti professionali
            </p>

            <a href="{{ route('project.create') }}" class="btn btn-success btn-lg">
                + Nuovo Progetto
            </a>
        </div>
    </div>

    <!-- CONTENUTO PRINCIPALE -->
    <div class="container mb-5">

        <!-- SEZIONE PROGETTI -->
        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-dark text-white h-100 shadow-lg border-0">

                        <div class="card-body d-flex flex-column p-4">

                            <!-- Titolo progetto -->
                            <h4 class="card-title mb-3">
                                {{ $project->nome }}
                            </h4>

                            <!-- Info progetto -->
                            <div class="mb-4 text-secondary">
                                <p class="mb-1">
                                    <strong>Cliente:</strong> {{ $project->cliente }}
                                </p>
                                <p class="mb-0">
                                    <strong>Periodo:</strong> {{ $project->periodo }}
                                </p>
                            </div>

                            <!-- Azioni -->
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <a href="{{ route('project.show', $project) }}" class="btn btn-outline-light">
                                    Dettagli
                                </a>

                                <span class="badge bg-success">
                                    Attivo
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-black text-secondary py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-2">
                &copy; {{ date('Y') }} — Portfolio Gestionale Progetti
            </p>

            <div>
                <a href="https://www.linkedin.com" class="text-secondary me-3" target="_blank">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>

                <a href="https://github.com" class="text-secondary" target="_blank">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>
        </div>
    </footer>
@endsection
