{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
    <h1>questa è la show dell'ingrediente {{ $ingredient->id }}</h1>
@endsection
