@extends('layouts.project')

@section('title', 'Modifica il Post')

@section('content')

    <div class="container mt-5">
        <form action="{{ route('project.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required value="{{ $project->nome }}">
            </div>

            <div class="mb-3">
                <label for="cliente" class="form-label">cliente</label>
                <input type="text" class="form-control" name="cliente" id="cliente" required
                    value="{{ $project->cliente }}">
            </div>

            <div class="mb-3">
                <label for="periodo" class="form-label">Periodo</label>
                <input type="text" class="form-control" name="periodo" id="periodo" required
                    value="{{ $project->periodo }}">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">tipo</label>
                <select class="form-control" name="type_id" id="type_id" placeholder="seleziona il tipo" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tecnologie</label>

                @foreach ($technologies as $technology)
                    <div>
                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                            @checked($project->technologies->contains($technology->id))>
                        {{ $technology->name }}
                    </div>
                @endforeach
            </div>


            <div class="mb-3">
                <label for="riassunto" class="form-label">Riassunto</label>
                <textarea class="form-control" name="riassunto" id="riassunto" rows="4" required placeholder="Scrivi qui...">{{ $project->riassunto }}</textarea>
            </div>

            <input type="submit" value="Salva">
        </form>
    </div>


@endsection
