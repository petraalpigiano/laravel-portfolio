@extends('layouts.app')

@section('index')
    <div class="container my-4">
        <div class="container d-flex space-between justify-content-between my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Progetti') }}
            </h2>
            <a class="btn btn-outline-primary" href={{ route('projects.create') }} role="button">Aggiungi</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['title'] }}</h5>
                            <p class="card-text">{{ $project['note'] }}</p>
                        </div>
                        <div class="card-footer">
                            <br>
                            <div class="my-2">
                                <a class="btn btn-outline-primary" href={{ route('projects.show', $project) }}
                                    role="button">Vedi</a>
                                <a class="btn btn-outline-info" href={{ route('projects.edit', $project) }}
                                    role="button">Modifica</a>
                                <form class="d-inline" action="{{ route('projects.destroy', $project) }}" method="POST">
                                    @csrf

                                    @method('DELETE')
                                    <input class="btn btn-outline-danger" type="submit" value="Cancella">
                                </form>



                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
