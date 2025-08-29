@extends('layouts.app')

@section('show')
    <div class="container my-4">
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['note'] }}</p>
    </div>
@endsection
