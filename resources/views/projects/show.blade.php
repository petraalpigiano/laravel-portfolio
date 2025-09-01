@extends('layouts.app')

@section('show')
    <div class="container text-center my-4">
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['note'] }}</p>
        <div class="my-2">
            <a class="btn btn-outline-primary" href={{ route('projects.index') }} role="button">Progetti</a>
            <a class="btn btn-outline-info" href={{ route('projects.edit', $project) }} role="button">Modifica</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Cancella
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione del
                                progetto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicura di eliminare il progetto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Chiudi</button>
                            <form class="d-inline" action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf

                                @method('DELETE')
                                <input class="btn btn-outline-danger" type="submit" value="Cancella 😓">
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
