{{-- @extends('layouts.app')
 
@section('title', 'Home Product List')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Pointages List</h1>
    <a href="{{ route('pointages/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Product</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Personnel</th>
                <th scope="col" class="px-6 py-3">Heure d'Arrivée</th>
                <th scope="col" class="px-6 py-3">Heure de Départ</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($pointages->count() > 0)
                @foreach ($pointages as $pointage)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <tr>
                        <td>{{ $pointage->personnel->nom }} {{ $pointage->personnel->prenom }}</td>
                        <td>{{ \Carbon\Carbon::parse($pointage->heure_arrivee)->format('d/m/Y H:i') }}</td>
                        <td>{{ $pointage->heure_depart ? \Carbon\Carbon::parse($pointage->heure_depart)->format('d/m/Y H:i') : '-' }}</td>
                        <td>
                            <a href="{{ route('pointages/edit', $pointage->id) }}" class="btn btn-sm btn-primary">Éditer</a>
                            <form action="{{ route('pointages/destroy', $pointage->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pointage ?')">Supprimer</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center" colspan="5">Pointage not found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @endsection --}}


{{--         
@extends('layouts.app')

@section('title', 'Home Pointages List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Pointages List</h1>
    <a href="{{ route('pointages/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Pointage</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Personnel</th>
                <th scope="col" class="px-6 py-3">Heure d'Arrivée</th>
                <th scope="col" class="px-6 py-3">Heure de Départ</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($pointages->count() > 0)
                @foreach ($pointages as $pointage)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $pointage->personnel->nom }} {{ $pointage->personnel->prenom }}</td>
                        <td>{{ \Carbon\Carbon::parse($pointage->heure_arrivee)->format('d/m/Y H:i') }}</td>
                        <td>{{ $pointage->heure_depart ? \Carbon\Carbon::parse($pointage->heure_depart)->format('d/m/Y H:i') : '-' }}</td>
                        <td>
                            <a href="{{ route('pointages/show', $pointage->id) }}" class="text-blue-800">Detail</a> |
                            <a href="{{ route('pointages/edit', $pointage->id) }}" class="btn btn-sm btn-primary">Éditer</a> |
                            <form action="{{ route('pointages/destroy', $pointage->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pointage ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Pointage not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection --}}


@extends('layouts.app')

@section('title', 'Home Pointages List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Pointages List</h1>
    <a href="{{ route('pointages/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Pointage</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        {{ $errors->first('error') }}
    </div>
@endif
    



    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Personnel</th>
                <th scope="col" class="px-6 py-3">Heure d'Arrivée</th>
                <th scope="col" class="px-6 py-3">Heure de Départ</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($pointages->count() > 0)
                @foreach ($pointages as $pointage)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $pointage->personnel->nom }} {{ $pointage->personnel->prenom }}</td>
                        <td>{{ \Carbon\Carbon::parse($pointage->heure_arrivee)->format('d/m/Y H:i') }}</td>
                        <td>{{ $pointage->heure_depart ? \Carbon\Carbon::parse($pointage->heure_depart)->format('d/m/Y H:i') : '-' }}</td>
                        {{-- <td>
                            <a href="{{ route('pointages/show', $pointage->id) }}" class="text-blue-800" title="Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 9a1 1 0 112 0 1 1 0 01-2 0zm2-1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </a> |
                            <a href="{{ route('pointages/edit', $pointage->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2 3a1 1 0 011-1h5a1 1 0 011 1v1h8a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1zm4 2H4v12h12V5h-2V4a1 1 0 00-1-1H7a1 1 0 00-1 1v1zm6 2a1 1 0 00-1 1v5a1 1 0 102 0V9a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </a> |
                            <form action="{{ route('pointages/destroy', $pointage->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600" title="Delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pointage ?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 6a1 1 0 011-1h2a1 1 0 011 1v10a1 1 0 01-1 1H9a1 1 0 01-1-1V6zm4-1a1 1 0 011 1v10a1 1 0 01-1 1h-2a1 1 0 01-1-1V6a1 1 0 011-1h2z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </td> --}}

                        {{-- <td>
                            <a href="{{ route('pointages/show', $pointage->id) }}" class="text-blue-800" title="Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </a> |
                            <a href="{{ route('pointages/edit', $pointage->id) }}" class="btn btn-sm btn-primary" title="Modifier">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.5 3.5a1 1 0 010 1.414L15.866 10l2.122 2.121a1 1 0 01-1.414 1.414L12 11.414l-2.122 2.121a1 1 0 11-1.414-1.414L10.586 10l-2.122-2.121a1 1 0 011.414-1.414L12 8.586l2.122-2.121a1 1 0 011.414 1.414z" />
                                </svg>
                            </a> |
                            <form action="{{ route('pointages/destroy', $pointage->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pointage ?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-1 1v11a1 1 0 001 1h6a1 1 0 001-1V3a1 1 0 00-1-1H9zM4 6a2 2 0 012-2h4a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </td> --}}

                        <td>
                            <a href="{{ route('pointages/show', $pointage->id) }}" class="text-blue-800" title="Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a> |
                            <a href="{{ route('pointages/edit', $pointage->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a> |
                            <form action="{{ route('pointages/destroy', $pointage->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600" title="Delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pointage ?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                        
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Pointage not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection





    



