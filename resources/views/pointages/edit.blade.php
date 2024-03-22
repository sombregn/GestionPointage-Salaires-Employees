@extends('layouts.app')
 
@section('title', 'Pointage du personnel Edit')
 
@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
@section('title', 'Pointage du personnel Edit')
    <h1 class="text-2xl font-bold mb-6">Pointage du personnel Edit</h1>
    <form action="{{ route('pointages/update', $pointages->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="personnel_id" class="block text-gray-700 font-bold mb-2">Personnel</label>
            <select name="personnel_id" id="personnel_id" class="form-select block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @foreach($personnels as $personnel)
                    <option value="{{ $personnel->id }}" {{ $pointages->personnel_id == $personnel->id ? 'selected' : '' }}>{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="heure_arrivee" class="block text-gray-700 font-bold mb-2">Heure d'arrivée</label>
            <input type="datetime-local" name="heure_arrivee" id="heure_arrivee" class="form-input block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $pointages->heure_arrivee ? $pointages->heure_arrivee->format('Y-m-d\TH:i') : '' }}">
        </div>

        <div class="mb-4">
            <label for="heure_depart" class="block text-gray-700 font-bold mb-2">Heure de départ</label>
            <input type="datetime-local" name="heure_depart" id="heure_depart" class="form-input block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $pointages->heure_depart ? $pointages->heure_depart->format('Y-m-d\TH:i') : '' }}">
        </div>
        
        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
            <a href="{{ route('pointages') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>        </div>
        </div>
    </form>
</div>
@endsection
