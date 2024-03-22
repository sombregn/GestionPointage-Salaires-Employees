@extends('layouts.app')

@section('title', 'Ajouter un Paiement')

@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Ajouter un Paiement</h1>
    <form action="{{ route('admin/paiements/store') }}" method="POST" enctype="multipart/form-data">


        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6">
            <div>
                <label for="personnel_id" class="block text-gray-700 font-bold mb-2">Employé</label>
                <select name="personnel_id" id="personnel_id" class="form-select rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
                    @foreach ($personnels as $personnel)
                        <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="date_paiement" class="block text-gray-700 font-bold mb-2">Date de Paiement</label>
                <input type="date" name="date_paiement" id="date_paiement" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="montant" class="block text-gray-700 font-bold mb-2">Montant</label>
                <input type="number" name="montant" id="montant" step="0.01" min="0.01" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
            <a href="{{ route('admin/paiements') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>        </div>
        </div>
    </form>
</div>
@endsection
