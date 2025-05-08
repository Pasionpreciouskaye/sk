@extends('layouts.dashboard')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-5 rounded-lg shadow text-center">
        <h2 class="text-md font-semibold text-gray-700">Projects</h2>
        <p class="text-3xl font-bold text-pink-600 mt-2">12</p>
    </div>
    <div class="bg-white p-5 rounded-lg shadow text-center">
        <h2 class="text-md font-semibold text-gray-700">Events</h2>
        <p class="text-3xl font-bold text-pink-600 mt-2">7</p>
    </div>
    <div class="bg-white p-5 rounded-lg shadow text-center">
        <h2 class="text-md font-semibold text-gray-700">Budget</h2>
        <p class="text-3xl font-bold text-pink-600 mt-2">₱120k</p>
    </div>
</div>
@endsection