@extends('layouts.app')
@section('content')
    <section class="section categories-main">
        <div class="container">
            <livewire:pages.delivery-information-controller :request="$request" />
        </div>
    </section>
@endsection
