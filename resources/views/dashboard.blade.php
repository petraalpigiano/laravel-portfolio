@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container d-flex space-between justify-content-between my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Dashboard') }}
            </h2>
            <button type="button" class="btn btn-outline-primary">Aggiungi</button>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @for ($i = 0; $i < 5; $i++)
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nome progetto</h5>
                            <p class="card-text">Opzionale commento sul progetto, es stack tech che ho usato, quanto ci ho
                                messo ecc</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">mettere qui esattamente il momento in cui ho
                                caricato il progetto, compreso di giorno e ora, a mano o da dentro l'array se metto
                                l'opzione</small>
                            <br>
                            <div class="my-2">
                                <button type="button" class="btn btn-outline-info ">Modifica</button>
                                <button type="button" class="btn btn-outline-danger">Cancella</button>
                            </div>
                        </div>

                    </div>

                </div>
            @endfor



        </div>


        {{-- <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div> --}}

    </div>
@endsection
