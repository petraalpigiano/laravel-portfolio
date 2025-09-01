@extends('layouts.app')

@section('show')
    <div class="container text-center my-4">
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['note'] }}</p>
        <div class="my-2">
            <a class="btn btn-outline-primary" href={{ route('projects.index') }} role="button">Progetti</a>
            <a class="btn btn-outline-info" href={{ route('projects.edit', $project) }} role="button">Modifica</a>
            <form class="d-inline" action="{{ route('projects.destroy', $project) }}" method="POST">
                @csrf

                @method('DELETE')
                <input class="btn btn-outline-danger" type="submit" value="Cancella">
            </form>



        </div>
    </div>
@endsection
