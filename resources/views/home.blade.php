@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-8 grid grid-cols-1 lg:grid-cols-4 gap-6">
    <!-- Live -->
    <x-live></x-live>

    <!-- Yangiliklar -->
    <x-news></x-news>
    
    <!-- Minbar -->
    <x-minbar></x-minbar>

</div>

<x-footer></x-footer>

@endsection