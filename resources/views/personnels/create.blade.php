{{-- 
                    
@extends('layouts.app')

@section('title', 'Create Personnel')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Add Personnel</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin/personnels/store') }}" method="POST" enctype="multipart/form-data">

            @if ($errors)
                @foreach ($errors -> all() as $errors )
                    <li style="color : red;">
                        {{ $errors}}
                    </li>
                @endforeach
            @endif

            @csrf
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                <div class="mt-2">
                    <input type="text" name="nom" id="nom" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Prénom</label>
                <div class="mt-2">
                    <input id="prenom" name="prenom" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Téléphone</label>
                <div class="mt-2">
                    <input id="telephone" name="telephone" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">CNI</label>
                <div class="mt-2">
                    <input id="cni" name="cni" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Horaire de début de travail</label>
                <div class="mt-2">
                    <input id="horaire_debut_travail" name="horaire_debut_travail" type="time" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Horaire de fin de travail</label>
                <div class="mt-2">
                    <input id="horaire_fin_travail" name="horaire_fin_travail" type="time" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Adresse Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Coût Journalier Moyen (CJM)</label>
                <div class="mt-2">
                    <input id="cjm" name="cjm" type="number" min="0.01" step="0.01" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Status Account</label>
                <div class="mt-2">
                    <input id="status" name="status" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            
        </form>
    </div>
    <a href="{{ route('admin/personnels') }}" class="flex justify-center mt-4 text-sm text-blue-600 hover:text-blue-900 focus:text-blue-900">
        <svg class="h-5 w-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
        </svg>
        Retour à la liste
    </a>
    
</div>

@endsection --}}


@extends('layouts.app')

@section('title', 'Ajouter un Personnel')

@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Ajouter un Personnel</h1>
    <form action="{{ route('admin/personnels/store') }}" method="POST" enctype="multipart/form-data">

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
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" name="nom" id="nom" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="telephone" class="block text-gray-700 font-bold mb-2">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="cni" class="block text-gray-700 font-bold mb-2">CNI</label>
                <input type="text" name="cni" id="cni" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="horaire_debut_travail" class="block text-gray-700 font-bold mb-2">Horaire de début de travail</label>
                <input type="time" name="horaire_debut_travail" id="horaire_debut_travail" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="horaire_fin_travail" class="block text-gray-700 font-bold mb-2">Horaire de fin de travail</label>
                <input type="time" name="horaire_fin_travail" id="horaire_fin_travail" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-bold mb-2">Adresse Email</label>
                <input type="email" name="email" id="email" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="cjm" class="block text-gray-700 font-bold mb-2">Coût Journalier Moyen (CJM)</label>
                <input type="number" name="cjm" id="cjm" step="0.01" min="0.01" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
            <div>
                <label for="status" class="block text-gray-700 font-bold mb-2">Status Account</label>
                <input type="text" name="status" id="status" class="form-input rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
            </div>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
            <a href="{{ route('admin/personnels') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>        </div>
        </div>
    </form>
</div>
@endsection
