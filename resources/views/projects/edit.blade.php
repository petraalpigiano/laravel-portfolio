@extends('layouts.app')

@section('edit')
    <div class="container text-center">
        <form class="my-3" action="{{ route('projects.update', $project) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label me-2 mt-2 fw-bold">Titolo</label>
                <input type="text" class="form-control form-input-space" name="title" value="{{ $project['title'] }}"
                    id="title" aria-describedby="title">

            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="note" class="form-label me-2 mt-2 fw-bold">Note</label>
                <textarea type="text" class="form-control form-input-space " name="note" id="note" aria-describedby="note">{{ $project['note'] }} </textarea>
            </div>
            <select class="form-select " aria-label="Default select example">
                <option selected>Seleziona il tipo</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="my-2">
                <a class="btn btn-outline-primary" href={{ route('projects.index') }} role="button">Progetti</a>
                <button type="submit" class="btn btn-outline-info">Modifica</button>
            </div>
        </form>
    </div>
@endsection
