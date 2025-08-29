@extends('layouts.app')

@section('index')
    <div class="container my-4">
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
                                <a class="btn btn-outline-primary" href="#" role="button">Vedi</a>

                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
