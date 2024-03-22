{{-- 
@extends('layouts.app')

@section('title', 'Home Personnel List')

@section('contents')
<div class="container mx-auto mt-6 p-6 bg-white rounded-lg shadow-md">
    <h1 class="font-bold text-2xl mb-6">Home Personnels List</h1>
    <a href="{{ route('admin/personnels/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Personnel</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full mt-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nom</th>
                <th scope="col" class="px-6 py-3">Prénom</th>
                <th scope="col" class="px-6 py-3">Téléphone</th>
                <th scope="col" class="px-6 py-3">CNI</th>
                <th scope="col" class="px-6 py-3">Heure début</th>
                <th scope="col" class="px-6 py-3">Heure Fin</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Qr_code</th>
                <th scope="col" class="px-6 py-3">CJM</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($personnel->count() > 0)
            @foreach($personnel as $perso)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $perso->nom }}
                </td>
                <td>
                    {{ $perso->prenom }}
                </td>
                <td>
                    {{ $perso->telephone }}
                </td>
                <td>
                    {{ $perso->cni }}
                </td>
                <td>
                    {{ $perso->horaire_debut_travail }}
                </td>
                <td>
                    {{ $perso->horaire_fin_travail }}
                </td>
                <td>
                    {{ $perso->email }}
                </td>
                <td>
                    {!! DNS1D::getBarcodeHTML($perso->qr_code, 'PHARMA',2,50, 'blue') !!}
                    p - {{ $perso->qr_code }}
                </td>
                <td>
                    {{ $perso->cjm }}
                </td>
                <td>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('admin/personnels/show', $perso->id) }}" class="text-blue-800 hover:text-blue-600" title="Voir">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12zm0-10a1 1 0 011 1v4a1 1 0 11-2 0V7a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('admin/personnels/edit', $perso->id)}}" class="text-green-800 hover:text-green-600" title="Modifier" onclick="return confirm('Are you sure to update this Personnel')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L5 10.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <form action="{{ route('admin/personnels/destroy', $perso->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="text-red-800" onclick="return confirm('Are you sure to delete this Personnel')">
                            @csrf
                            @method('DELETE')
                            <button title="Supprimer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 6.707a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414L11.414 12l3.293 3.293a1 1 0 01-1.414 1.414L10 13.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 12 5.293 8.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                        <a href="{{ route('admin/bulletin') }}">
                            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                                <span class="text-[15px] ml-4 text-gray-200 font-bold">Bulletin Salaire</span>
                                <i class="bi bi-download ml-auto"></i>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Personnel not here </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection



 --}}


 @extends('layouts.app')

 @section('title', 'Home Personnel List')
 
 @section('contents')
 <div class="container mx-auto mt-6 p-6 bg-white rounded-lg shadow-md">
     <h1 class="font-bold text-2xl mb-6">Home Personnels List</h1>
     <a href="{{ route('admin/personnels/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Personnel</a>
     <hr />
     @if(Session::has('success'))
     <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
         {{ Session::get('success') }}
     </div>
     @endif
 
     <table class="w-full mt-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
         <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
             <tr>
                 <th scope="col" class="px-6 py-3">#</th>
                 <th scope="col" class="px-6 py-3">Nom</th>
                 <th scope="col" class="px-6 py-3">Prénom</th>
                 <th scope="col" class="px-6 py-3">Téléphone</th>
                 <th scope="col" class="px-6 py-3">CNI</th>
                 <th scope="col" class="px-6 py-3">Heure début</th>
                 <th scope="col" class="px-6 py-3">Heure Fin</th>
                 <th scope="col" class="px-6 py-3">Email</th>
                 <th scope="col" class="px-6 py-3">Qr_code</th>
                 <th scope="col" class="px-6 py-3">CJM</th>
                 <th scope="col" class="px-6 py-3">Action</th>
             </tr>
         </thead>
         <tbody>
             @if($personnel->count() > 0)
             @foreach($personnel as $perso)
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                 <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     {{ $loop->iteration }}
                 </th>
                 <td>
                     {{ $perso->nom }}
                 </td>
                 <td>
                     {{ $perso->prenom }}
                 </td>
                 <td>
                     {{ $perso->telephone }}
                 </td>
                 <td>
                     {{ $perso->cni }}
                 </td>
                 <td>
                     {{ $perso->horaire_debut_travail }}
                 </td>
                 <td>
                     {{ $perso->horaire_fin_travail }}
                 </td>
                 <td>
                     {{ $perso->email }}
                 </td>
                 <td>
                     {!! DNS1D::getBarcodeHTML($perso->qr_code, 'PHARMA',2,50, 'blue') !!}
                     p - {{ $perso->qr_code }}
                 </td>
                 <td>
                     {{ $perso->cjm }}
                 </td>
                 <td>
                     <div class="flex items-center space-x-2">
                         <a href="{{ route('admin/personnels/show', $perso->id) }}" class="text-blue-800 hover:text-blue-600" title="Voir">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M10 3a1 1 0 00-1 1v6a1 1 0 102 0V4a1 1 0 00-1-1zM5 9a1 1 0 112 0v6a2 2 0 002 2h6a1 1 0 110 2H9a4 4 0 01-4-4V9zm9-5a1 1 0 100-2H6a1 1 0 100 2h8zM5 5a1 1 0 100-2h1a1 1 0 100 2H5z" clip-rule="evenodd" />
                             </svg>
                         </a>
                         <a href="{{ route('admin/personnels/edit', $perso->id)}}" class="text-green-800 hover:text-green-600" title="Modifier" onclick="return confirm('Are you sure to update this Personnel')">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414l9-9zM14 7.414L12.586 6 14 4.586 15.414 6 14 7.414zm-6 6L6.586 12 8 10.586 9.414 12 8 13.414zM17 14.414L15.586 13 17 11.586 18.414 13 
                                 16 14.414zm1.414-2.414L15 10.586 16.414 9 18 10.586l-1.414 1.414zm-7.293 4.293l-1.5 1.5a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l1.5-1.5L8 14.086l1.707-1.707 1.293 1.293-1.707 1.707zm7.5-10.293a1 1 0 00-1.414 0l-9 9a1 1 0 001.414 1.414l9-9a1 1 0 000-1.414zM6.414 16l-1.5 1.5A1 1 0 015 16.414L6.414 15zm1.414-1.5L5 15.586V17h1.414l6-6H8.414zM17 8.586L15.586 7 17 5.586 18.414 7 17 8.586zM16.414 8l1.5-1.5A1 1 0 0118 7.586L16.414 9zM9 13.414L10.586 12 9 10.414 7.414 12 9 13.414zM8 15.828L6.586 14 8 12.172 9.414 14 8 15.828zm2 1.586L10.586 16 11 15.586 12.414 17 11 18.414zM10 14.586L8.586 13 7 14.586 8.414 16 10 14.586z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <form action="{{ route('admin/personnels/destroy', $perso->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="text-red-800" onclick="return confirm('Are you sure to delete this Personnel')">
                                @csrf
                                @method('DELETE')
                                <button title="Supprimer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 6.707a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414L11.414 12l3.293 3.293a1 1 0 01-1.414 1.414L10 13.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 12 5.293 8.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                            <a href="{{ route('admin.paiements.generatePDF', ['id' => $perso->id]) }}">
                                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-blue-600 text-white">
                                    <i class="bi bi-download ml-auto"></i>
                                </div>
                            </a>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="5">Personnel not here </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    @endsection
    