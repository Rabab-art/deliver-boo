{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
<section class="container">
    <h1>Questa è la edit degli ingredienti </h1>
    @include('admin.includes.ingredients.form')
</section>
@endsection
