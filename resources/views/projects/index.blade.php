@extends('layouts.app')

@section('index')
    <div class="container my-4">
        <div class="container d-flex space-between justify-content-between my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Progetti') }}
            </h2>
            <button type="button" class="btn btn-outline-primary">Aggiungi</button>
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
                                <button type="button" class="btn btn-outline-info ">Modifica</button>
                                <button type="button" class="btn btn-outline-danger">Cancella</button>

                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
