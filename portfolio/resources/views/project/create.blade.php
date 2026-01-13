@extends('layouts.project')

@section('title', 'aggiungi un progetto')

@section('content')

    <div class="container mt-5">
        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Inserisci testo" required>
            </div>

            <div class="mb-3">
                <label for="cliente" class="form-label">cliente</label>
                <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Inserisci testo"
                    required>
            </div>

            <div class="mb-3">
                <label for="periodo" class="form-label">periodo</label>
                <input type="text" class="form-control" name="periodo" id="periodo" placeholder="Inserisci testo"
                    required>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">tipo</label>
                <select class="form-control" name="type_id" id="type_id" placeholder="seleziona il tipo" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="riassunto" class="form-label">riassunto</label>
                <textarea class="form-control" name="riassunto" id="riassunto" rows="4" placeholder="Scrivi qui..." required></textarea>
            </div>

            <input type="submit" value="Salva">
        </form>
    </div>


@endsection
