{{-- 
@extends('layouts.app')
 
@section('title', 'Personnel Pointed')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Personnel Pointed</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('pointages/store') }}" method="POST">
    @csrf
    <div class="sm:col-span-4">
        <label class="block text-sm font-medium leading-6 text-gray-900">Personnel</label>
        <div class="mt-2">
            <select name="personnel_id" id="personnel_id" class="form-control">
                @foreach($personnels as $personnel)
                    <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                @endforeach
            </select>       
        </div>
    </div>

    <div class="form-group">
        <label for="heure_arrivee">Heure d'arrivée</label>
        <input type="datetime-local" name="heure_arrivee" id="heure_arrivee" class="form-control">
    </div>

    <div class="sm:col-span-4">
        <label class="block text-sm font-medium leading-6 text-gray-900">Heure d'arrivée</label>
        <div class="mt-2">
            <input type="datetime-local" name="heure_arrivee" id="heure_arrivee" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>        

    <div class="sm:col-span-4">
        <label class="block text-sm font-medium leading-6 text-gray-900">Heure d'arrivée</label>
        <div class="mt-2">
            <input type="datetime-local" name="heure_depart" id="heure_depart" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>  
    <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
    

</form>
@endsection --}}

{{-- @extends('layouts.app')
 
@section('title', 'Personnel Pointed')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Personnel Pointed</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('pointages/store') }}" method="POST">
            @csrf
            <div class="sm:col-span-4">
                <label for="personnel_id" class="block text-sm font-medium leading-6 text-gray-900">Personnel</label>
                <div class="mt-2">
                    <select name="personnel_id" id="personnel_id" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        @foreach($personnels as $personnel)
                            <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="heure_arrivee" class="block text-sm font-medium leading-6 text-gray-900">Heure d'Arrivée</label>
                <div class="mt-2">
                    <input type="datetime-local" name="heure_arrivee" id="heure_arrivee" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">

                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="heure_depart" class="block text-sm font-medium leading-6 text-gray-900">Heure de Départ</label>
                <div class="mt-2">
                    <input type="datetime-local" name="heure_depart" id="heure_depart" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                </div>
            </div>

            <div class="sm:col-span-4">
                <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection --}}

{{-- 
@extends('layouts.app')
 
@section('title', 'Personnel Pointed')
 
@section('contents')
    <h1 class="font-bold text-3xl ml-3">Personnel Pointed</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12 flex justify-center">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <form action="{{ route('pointages/store') }}" method="POST" class="sm:col-span-6">
                @csrf
                <div class="sm:col-span-4">
                    <label for="personnel_id" class="block text-lg font-medium leading-6 text-gray-900">Personnel</label>
                    <div class="mt-2">
                        <select name="personnel_id" id="personnel_id" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full text-xl border-gray-300">
                            @foreach($personnels as $personnel)
                                <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="date" class="block text-lg font-medium leading-6 text-gray-900">Date</label>
                    <div class="mt-2">
                        <input type="text" name="date" id="date" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full text-xl border-gray-300" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                </div>
                

                <div class="sm:col-span-4">
                    <label for="heure_arrivee" class="block text-lg font-medium leading-6 text-gray-900">Heure d'Arrivée</label>
                    <div class="mt-2">
                        <input type="datetime-local" name="heure_arrivee" id="heure_arrivee" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full text-xl border-gray-300">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="heure_depart" class="block text-lg font-medium leading-6 text-gray-900">Heure de Départ</label>
                    <div class="mt-2">
                        <input type="datetime-local" name="heure_depart" id="heure_depart" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full text-xl border-gray-300">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <button type="submit" class="flex justify-center mt-10 rounded-md bg-indigo-600 px-4 py-2 text-lg font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </div>
            </form>
        </div>
        
    </div>
    <a href="{{ route('pointages') }}" class="flex justify-center mt-4 text-sm text-blue-600 hover:text-blue-900 focus:text-blue-900">
            <svg class="h-5 w-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
            </svg>
            Retour à la liste
        </a>
@endsection --}}



@extends('layouts.app')
 
@section('title', 'Création d\'un Pointage')

@section('contents')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Création d'un Pointage</h1>
    <form action="{{ route('pointages/store') }}" method="POST">
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

        {{-- <div class="mb-4">
            <label for="personnel_id" class="block text-gray-700 font-bold mb-2">Personnel</label>
            <select name="personnel_id" id="personnel_id" class="form-select block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @foreach($personnels as $personnel)
                    <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="mb-4">
            <label for="personnel_id" class="block text-gray-700 font-bold mb-2">Personnel</label>
            <select name="personnel_id" id="personnel_id" class="form-select block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @foreach($personnels as $personnel)
                    <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->prenom }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="sm:col-span-4">
            <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
            <div class="mt-2">
                <input type="text" name="date" id="date" class="form-control rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300" value="{{ date('Y-m-d') }}" readonly>
            </div>
        </div>
        
        

        <div class="mb-4">
            <label for="heure_arrivee" class="block text-gray-700 font-bold mb-2">Heure d'arrivée</label>
            <input type="datetime-local" name="heure_arrivee" id="heure_arrivee" class="form-input block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>

        <div class="mb-4">
            <label for="heure_depart" class="block text-gray-700 font-bold mb-2">Heure de départ</label>
            <input type="datetime-local" name="heure_depart" id="heure_depart" class="form-input block w-full bg-gray-200 border border-gray-300 rounded-md py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
            <a href="{{ route('pointages') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à la liste</a>        </div>
        </div>
    </form>
</div>
@endsection









