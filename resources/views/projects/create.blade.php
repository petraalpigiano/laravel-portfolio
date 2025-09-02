@extends('layouts.app')

@section('create')
    <div class="container text-center">
        <form class="my-3" action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label me-2 mt-2 fw-bold">Titolo</label>
                <input type="text" class="form-control form-input-space" name="title" id="title"
                    aria-describedby="title">

            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="note" class="form-label me-2 mt-2 fw-bold">Note</label>
                <textarea type="text" class="form-control form-input-space" name="note" id="note" aria-describedby="note"> </textarea>
            </div>
            <select name="type_id" class="form-select " aria-label="Default select example">
                <option>Seleziona il tipo</option>
                @foreach ($types as $type)
                    <option value="{{ $type['id'] }}">{{ $type['name'] }}</option>
                @endforeach
            </select>

            <div class="my-2">
                <a class="btn btn-outline-primary" href={{ route('projects.index') }} role="button">Progetti</a>
                <button type="submit" class="btn btn-outline-success">Inserisci</button>
            </div>

        </form>
    </div>
@endsection
