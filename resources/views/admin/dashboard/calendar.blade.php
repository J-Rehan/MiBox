@extends('layouts.admin-app')
@section('content')
        <div class="boxes_square">
            <h3>Calendar</h3>
            <p>Mark unavailable days</p>
{{--            <div id="caleandar"></div>--}}

            <livewire:appointments-calendar />
            @livewireScripts
            @stack('scripts')
        </div>
@endsection('content')
