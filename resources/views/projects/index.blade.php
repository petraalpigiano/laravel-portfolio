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
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Cancella
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione del
                                                    progetto</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Sei sicura di eliminare il progetto?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Chiudi</button>
                                                <form class="d-inline" action="{{ route('projects.destroy', $project) }}"
                                                    method="POST">
                                                    @csrf

                                                    @method('DELETE')
                                                    <input class="btn btn-outline-danger" type="submit"
                                                        value="Cancella 😓">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
