{{-- @extends('layouts.app')

@section('title', 'Edit Personnel')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Edit Personnel</h1>
    <hr />
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin/personnels/update', $personnel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                <div class="mt-2">
                    <input type="text" name="nom" id="nom" value="{{ $personnel->nom }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Prénom</label>
                <div class="mt-2">
                    <input id="prenom" name="prenom" type="text" value="{{ $personnel->prenom }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Téléphone</label>
                <div class="mt-2">
                    <input id="telephone" name="telephone" type="text" value="{{ $personnel->telephone }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">CNI</label>
                <div class="mt-2">
                    <input id="cni" name="cni" type="text" value="{{ $personnel->cni }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Horaire de début de travail</label>
                <div class="mt-2">
                    <input id="horaire_debut_travail" name="horaire_debut_travail" type="time" value="{{ $personnel->horaire_debut_travail }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Horaire de fin de travail</label>
                <div class="mt-2">
                    <input id="horaire_fin_travail" name="horaire_fin_travail" type="time" value="{{ $personnel->horaire_fin_travail }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Adresse Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" value="{{ $personnel->email }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Coût Journalier Moyen (CJM)</label>
                <div class="mt-2">
                    <input id="cjm" name="cjm" type="number" min="0.01" step="0.01" value="{{ $personnel->cjm }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifier</button>
            <a href="{{ route('admin/personnels') }}" class="flex w-full justify-center mt-4 text-sm text-blue-600 hover:text-blue-900 focus:text-blue-900">Retour à la liste</a>
        </form>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('title', 'Modifier Personnel')

@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Modifier Personnel</h1>
    <form action="{{ route('admin/personnels/update', $personnel->id) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6">
            <div>
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ $personnel->nom }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm" required>
            </div>
            <div>
                <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénom</label>
                <input id="prenom" name="prenom" type="text" value="{{ $personnel->prenom }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="telephone" class="block text-gray-700 font-bold mb-2">Téléphone</label>
                <input id="telephone" name="telephone" type="text" value="{{ $personnel->telephone }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="cni" class="block text-gray-700 font-bold mb-2">CNI</label>
                <input id="cni" name="cni" type="text" value="{{ $personnel->cni }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="horaire_debut_travail" class="block text-gray-700 font-bold mb-2">Horaire de début de travail</label>
                <input id="horaire_debut_travail" name="horaire_debut_travail" type="time" value="{{ $personnel->horaire_debut_travail }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="horaire_fin_travail" class="block text-gray-700 font-bold mb-2">Horaire de fin de travail</label>
                <input id="horaire_fin_travail" name="horaire_fin_travail" type="time" value="{{ $personnel->horaire_fin_travail }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-bold mb-2">Adresse Email</label>
                <input id="email" name="email" type="email" value="{{ $personnel->email }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="cjm" class="block text-gray-700 font-bold mb-2">Coût Journalier Moyen (CJM)</label>
                <input id="cjm" name="cjm" type="number" min="0.01" step="0.01" value="{{ $personnel->cjm }}" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
                <a href="{{ route('admin/personnels') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>        </div>
            </div>
        </div>
    </form>
</div>
@endsection
