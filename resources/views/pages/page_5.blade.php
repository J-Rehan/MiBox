@extends('layouts.app')
@section('content')
<section class="section categories-main">
  <div class="container">
      <livewire:pages.add-on :request="$request" :type="$request->type??1"/>
  </div>
</section>
@endsection
