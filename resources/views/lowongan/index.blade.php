@extends('layout.main')
@section('content')
<html lang="en">
    <head>
     <meta charset="utf-8"/>
     <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
     <title>
      Recommended Jobs
     </title>
     <script src="https://cdn.tailwindcss.com">
     </script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-gray-100 p-4">
     <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center mb-4">
       <h1 class="text-2xl font-bold">
        Recommended jobs
       </h1>
       <div class="flex items-center space-x-2">
        <span class="bg-gray-200 text-gray-800 text-sm font-semibold px-2.5 py-0.5 rounded-full">
         386
        </span>
        <div class="flex items-center space-x-1 text-gray-500">
         <span>
          Sort by:
         </span>
         <span class="font-semibold">
          Last updated
         </span>
         <i class="fas fa-sliders-h">
         </i>
        </div>
       </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
       <!-- Job Card 1 -->
       <html lang="en">
        <head>
         <meta charset="utf-8"/>
         <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
         <title>
          Recommended Jobs
         </title>
         <script src="https://cdn.tailwindcss.com">
         </script>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        </head>
        <body class="bg-gray-100 p-4">
         <div class="max-w-7xl mx-auto">
          <div class="flex justify-between items-center mb-4">
           <h1 class="text-2xl font-bold">
            Recommended jobs
           </h1>
           <div class="flex items-center space-x-2">
            <span class="text-lg font-semibold">
             386
            </span>
            <div class="flex items-center space-x-1">
             <span class="text-sm text-gray-500">
              Sort by:
             </span>
             <span class="text-sm font-semibold">
              Last updated
             </span>
             <i class="fas fa-sliders-h text-gray-500">
             </i>
            </div>
           </div>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
           <!-- Job Card 1 -->
           <div class="bg-blue-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              11 Apr, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Twitter
             </h2>
             <img alt="Twitter logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/V7FEiu5YGuLeTqY8C08dVRABbgNxBg9eFwN8yClMbk03V17TA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             UX Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Full time
             </span>
             <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Middle level
             </span>
             <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Distant
             </span>
             <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Project work
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 7 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Bali
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 2 -->
           <div class="bg-pink-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              2 Apr, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Airbnb
             </h2>
             <img alt="Airbnb logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/24TZiwlazH7tEhr9JUkHWwOjwPjhdksgdpPJCMeOKv08q69JA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             Graphic Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Part time
             </span>
             <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Senior level
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 5 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Surabaya
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 3 -->
           <div class="bg-green-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              19 May, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Whatsapp
             </h2>
             <img alt="Whatsapp logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/9Urrk5Ifr0WwVSgF4aelos7NoK3HL5tYS0rgQjUoiroerq3nA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             IT Security Administrator
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Full time
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Senior level
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Flexible Schedule
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Project work
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 7 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Yogyakarta
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 4 -->
           <div class="bg-gray-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              18 Jan, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Apple
             </h2>
             <img alt="Apple logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/mfdjQf9oO2rWIEmaEwqT0fRKtenyejctP0p3qE6IMeO3cV9eJA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             Graphic Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Part time
             </span>
             <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Distant
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 9 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Jakarta
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 5 -->
           <div class="bg-red-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              15 Jun, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              YouTube
             </h2>
             <img alt="YouTube logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/flatQPJYzxS4PSVfPB7lgaWFP71QsD6GAyZJO5lKMLm7V17TA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             Senior UI/UX Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Part time
             </span>
             <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Senior level
             </span>
             <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Project work
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 8 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Jakarta
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 6 -->
           <div class="bg-green-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              4 Feb, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Google
             </h2>
             <img alt="Google logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/It8QsjFWPEqdDlX6e0AlCdNweqPBFVnPyYewuNfHer8juqeeJA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             Junior UI/UX Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Full time
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Junior level
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Distant
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Project work
             </span>
             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Flexible Schedule
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 9 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Jakarta
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 7 -->
           <div class="bg-orange-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              20 May, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Amazon
             </h2>
             <img alt="Amazon logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/Mcx8l6UzYUJJBVlTO5ceeOfNQFLGgWlQh635wmlqwOwqrq3nA.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             Senior UI/UX Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Part time
             </span>
             <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Senior level
             </span>
             <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Distant
             </span>
             <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Project work
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 7 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Surabaya
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
           <!-- Job Card 8 -->
           <div class="bg-purple-50 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
             <span class="text-sm text-gray-500">
              29 Jan, 2024
             </span>
             <i class="far fa-bookmark text-gray-500">
             </i>
            </div>
            <div class="flex items-center mb-2">
             <h2 class="text-xl font-bold">
              Dribbble
             </h2>
             <img alt="Dribbble logo" class="ml-2 w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/quwirwgNqR4lCdSIwwOmJevv3cWee4KKKjS2P9WeDy7wXVvPB.jpg" width="24"/>
            </div>
            <h3 class="text-lg font-semibold mb-2">
             Senior Motion Designer
            </h3>
            <div class="flex flex-wrap gap-2 mb-2">
             <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Part time
             </span>
             <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Senior level
             </span>
             <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Full Day
             </span>
             <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">
              Shift work
             </span>
            </div>
            <p class="text-sm text-gray-500 mb-2">
             IDR 8 jt/Bulan
            </p>
            <p class="text-sm text-gray-500 mb-2">
             Bandung
            </p>
            <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">
             Apply
            </button>
           </div>
          </div>
         </div>
        </body>
       </html>
      </div>
     </div>
    </body>
   </html>

@endsection
