@extends('layouts.app')
@section('content')
    <section class="section unitbox-main-start">
        <div class="container">
            <livewire:pages.home :request="$request" :type="$request->type??1" />
        </div>
    </section>
@endsection
