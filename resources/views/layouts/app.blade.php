<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
 
<body>
    <header class="px-4 py-2 shadow">
    </header>
 
    <div class="flex flex-row">
        <div class="flex flex-col w-64 h-screen overflow-y-auto bg-gray-900 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <div class="sidebar text-center bg-gray-900">
                <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                        <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin</h1>
                    </div>
                    <div class="my-2 bg-gray-600 h-[1px]"></div>
                </div>
                
                <a href="{{ route('admin/home') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
                    </div>
                </a>
                {{-- <a href="{{ route('admin/products') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-bookmark-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Product</span>
                    </div>
                </a> --}}
                <a href="{{ route('admin/personnels') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-person-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Personnel</span>
                    </div>
                </a>

                <a href="{{ route('admin/paiements') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-cash"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Paiements</span>
                    </div>
                </a>
                
                
                <a href="{{ route('admin/profile') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-bookmark-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Profile</span>
                    </div>
                </a>
                <a href="{{ route('logout') }}">
                    <div class="my-4 bg-gray-600 h-[1px]"></div>
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
            <div>@yield('contents')</div>
        </div>
    </div>
</body>
 
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            min-width: 200px; /* Définissez une largeur minimale pour la barre latérale */
            max-width: 300px; /* Définissez une largeur maximale pour la barre latérale */
            transition: all 0.3s ease; /* Ajoutez une transition pour une animation fluide */
        }
    </style>
</head>
<body class="flex h-screen">
    <header class="px-4 py-2 shadow"></header>
    <div class="flex flex-grow"> <!-- Utilisez flex-grow pour que le contenu au milieu puisse s'étirer -->
        <div class="sidebar flex flex-col h-screen overflow-y-auto bg-gray-900 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <div class="text-center bg-gray-900">
                <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                        <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin</h1>
                    </div>
                    <div class="my-2 bg-gray-600 h-[1px]"></div>
                </div>
                <a href="{{ route('admin/home') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
                    </div>
                </a>
                <a href="{{ route('admin/products') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-bookmark-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Product</span>
                    </div>
                </a>
                <a href="{{ route('admin/personnels') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-person-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Personnel</span>
                    </div>
                </a>
                <a href="{{ route('admin/profile') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-bookmark-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Profile</span>
                    </div>
                </a>
                <a href="{{ route('logout') }}">
                    <div class="my-4 bg-gray-600 h-[1px]"></div>
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full h-screen px-4 py-8 mt-10">
            <div>@yield('contents')</div>
        </div>
    </div>
</body>
</html> --}}


