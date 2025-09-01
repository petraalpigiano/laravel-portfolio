@extends('layouts.app')

@section('edit')
    <div class="container">
        <form class="my-3" action="{{ route('projects.update', $project) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" value="{{ $project['title'] }}" id="title"
                    aria-describedby="title">

            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <input type="text" class="form-control" name="note" value="{{ $project['note'] }}" id="note"
                    aria-describedby="note">
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
