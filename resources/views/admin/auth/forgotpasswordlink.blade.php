@extends('layouts.app_auth')
@section('content')
    <livewire:auth.link :token="$token">
@endsection

