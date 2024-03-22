{{-- @extends('layouts.app')

@section('title', 'Détails de l\'employé')

@section('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Détails d'un Personnel</h1>
        <hr />
        <div class="p-4">
            <p><strong>Nom :</strong> {{ $personnel->nom }}</p>
            <p><strong>Prénom :</strong> {{ $personnel->prenom }}</p>
            <p><strong>Téléphone :</strong> {{ $personnel->telephone }}</p>
            <p><strong>CNI :</strong> {{ $personnel->cni }}</p>
            <p><strong>Horaire de début de travail :</strong> {{ $personnel->horaire_debut_travail }}</p>
            <p><strong>Horaire de fin de travail :</strong> {{ $personnel->horaire_fin_travail }}</p>
            <p><strong>Email :</strong> {{ $personnel->email }}</p>
            <p><strong>QR Code :</strong> {!! DNS1D::getBarcodeHTML($personnel->qr_code, 'PHARMA',2,50, 'blue') !!}</p>
            <p><strong>CJM :</strong> {{ $personnel->cjm }}</p>
        </div>
    </div>
    <a href="{{ route('admin/personnels') }}" class="flex justify-center mt-4 text-sm text-blue-600 hover:text-blue-900 focus:text-blue-900">
        <svg class="h-5 w-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
        </svg>
        Retour à la liste
    </a>
@endsection --}}

@extends('layouts.app')

@section('title', 'Détails du Personnel')

@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Détails du Personnel</h1>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="text-gray-700 font-bold mb-2">Nom :</label>
            <p class="text-gray-900">{{ $personnel->nom }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Prénom :</label>
            <p class="text-gray-900">{{ $personnel->prenom }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Téléphone :</label>
            <p class="text-gray-900">{{ $personnel->telephone }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">CNI :</label>
            <p class="text-gray-900">{{ $personnel->cni }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Horaire de début de travail :</label>
            <p class="text-gray-900">{{ $personnel->horaire_debut_travail }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Horaire de fin de travail :</label>
            <p class="text-gray-900">{{ $personnel->horaire_fin_travail }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Adresse Email :</label>
            <p class="text-gray-900">{{ $personnel->email }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Coût Journalier Moyen (CJM) :</label>
            <p class="text-gray-900">{{ $personnel->cjm }}</p>
        </div>
        <div>
            <label class="text-gray-700 font-bold mb-2">Status Account :</label>
            <p class="text-gray-900">{{ $personnel->status }}</p>
        </div>
    </div>

    <div class="flex justify-between items-center mt-6">
        <a href="{{ route('admin/personnels/edit', $personnel->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modifier</a>
        <a href="{{ route('admin/personnels') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>
    </div>
</div>
@endsection


