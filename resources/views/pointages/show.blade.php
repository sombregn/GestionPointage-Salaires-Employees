@extends('layouts.app')

@section('title', 'Détails du Pointage')

@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Détails du Pointage</h1>
    <div class="mb-4">
        <label for="personnel" class="block text-gray-700 font-bold mb-2">Personnel</label>
        <p class="text-gray-900">{{ $pointage->personnel->nom }} {{ $pointage->personnel->prenom }}</p>
    </div>

    <div class="mb-4">
        <label for="heure_arrivee" class="block text-gray-700 font-bold mb-2">Heure d'arrivée</label>
        <p class="text-gray-900">{{ $pointage->heure_arrivee ? \Carbon\Carbon::parse($pointage->heure_arrivee)->format('d/m/Y H:i') : '-' }}</p>
    </div>

    <div class="mb-4">
        <label for="heure_depart" class="block text-gray-700 font-bold mb-2">Heure de départ</label>
        <p class="text-gray-900">{{ $pointage->heure_depart ? \Carbon\Carbon::parse($pointage->heure_depart)->format('d/m/Y H:i') : '-' }}</p>
    </div>

    <div class="flex justify-between items-center">
        <a href="{{ route('pointages/edit', $pointage->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modifier</a>
        <a href="{{ route('pointages') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>
    </div>
</div>
@endsection
