@extends('layout.main')
@section('content')
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Progress Belajar
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="flex h-screen">
   <!-- Sidebar -->
   <div class="w-16 bg-white border-r flex flex-col items-center py-4">
    <img alt="User avatar" class="rounded-full mb-4" height="40" src="https://storage.googleapis.com/a1aa/image/L2Z7X0C8frUwTyrxnePUSS3fgs5dNSv0iVoBjhrAUqWpvepPB.jpg" width="40"/>
    <i class="fas fa-home text-xl mb-6">
    </i>
    <i class="fas fa-calendar-alt text-xl mb-6">
    </i>
    <i class="fas fa-bookmark text-xl mb-6">
    </i>
    <i class="fas fa-bell text-xl mb-6">
    </i>
    <i class="fas fa-comment-dots text-xl">
    </i>
   </div>
   <!-- Main Content -->
   <div class="flex-1 flex flex-col">
    <!-- Header -->
    <div class="bg-white p-4 border-b flex justify-between items-center">
     <h1 class="text-xl font-semibold">
      Progress Belajar
     </h1>
    </div>
    <!-- Content -->
    <div class="flex-1 flex overflow-hidden">
     <!-- Left Section -->
     <div class="w-2/3 p-4 overflow-y-auto">
      <div class="bg-blue-600 text-white p-4 rounded-lg mb-4">
       <h2 class="text-lg font-semibold">
        Materi Seleksi Kompetensi Dasar (SKD)
       </h2>
       <div class="bg-gray-200 rounded-full h-4 mt-2">
        <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
        </div>
       </div>
       <p class="text-center mt-2">
        0%
       </p>
      </div>
      <!-- List of Courses -->
      <div class="space-y-4">
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="TPS icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/evPVQSljPvWrBy5vA1gZRInN7WlUTW2bjnaFWX207flyXf0nA.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           Pengetahuan Umum (TPS)
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/3 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="PBM icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/UV87e7qWgD3eOkBbUtzi5qWdWxLYhx766cAjl4FRnzqxXf0nA.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           Pemahaman Bacaan &amp; Menulis (PBM)
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/20 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="PPU icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/Wy2KGvYbehXWfUewwv4PGQ9xKD8I1oxDZ8hxruedcsP6e6TfE.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           Pengetahuan dan Pemahaman Umum (PPU)
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/5 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="PK icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/QOj96qyD8zLWBtw3M8xWsfOZQM59fmS7nDAjPgsmLhC3Xf0nA.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           Pengetahuan Kuantitatif (PK)
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/14 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="IDN icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/ChHwaHeK9fnqR0w83q5zXgefKavfRYvKJ12XfF58yug381neJA.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           Literasi Bahasa Indonesia
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/10 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="ENG icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/7a70URmmTU5bHlgQ7uEktEGXOS1wDFEdagWPV8i0zhF81neJA.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           Literasi Bahasa Inggris
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/10 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
       <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
        <div class="flex items-center">
         <img alt="Math icon" class="mr-4" height="40" src="https://storage.googleapis.com/a1aa/image/kaRMVeemyZtSzECN6zWBOhS1XsmLzlsJelXsA5oh4YWsvepPB.jpg" width="40"/>
         <div>
          <h3 class="font-semibold">
           PENALARAN MATEMATIKA
          </h3>
          <p class="text-gray-500 text-sm">
           <i class="fas fa-video">
           </i>
           0/12 Video
           <i class="fas fa-file-alt ml-4">
           </i>
           0/1 Dokumen
          </p>
         </div>
        </div>
        <i class="fas fa-chevron-right text-gray-400">
        </i>
       </div>
      </div>
     </div>

     <html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 p-6">
  <div class="bg-white p-6 rounded-lg shadow-md">
   <div class="flex items-center mb-4">
    <i class="fas fa-chart-line text-blue-500 text-2xl mr-2">
    </i>
    <h1 class="text-xl font-semibold text-blue-600">
     Progress Belajar
    </h1>
   </div>
   <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="flex items-center">
     <img alt="Brain and book icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/ttSHEUf2bfhU3Eqz8iABsZLFa53LEk8RYWJqdVjhQCei2epPB.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       Pengetahuan Umum (TPS)
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
    <div class="flex items-center">
     <img alt="Magnifying glass and book icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/jNvhHeMzDFyRDKOMasVPsIMmcFIOIwKkY2GlUPZJjAHntP9JA.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       Pemahaman Bacaan &amp; Menulis (PBM)
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
    <div class="flex items-center">
     <img alt="Document and checkmark icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/akJnbw7AGnI3FFC3sjRmQFiMbiobzq3PXpNuVEs8p36z2neJA.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       Pengetahuan dan Pemahaman Umum (PPU)
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
    <div class="flex items-center">
     <img alt="Book and triangle icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/4LNsHj7LH3aeD6IApO01Yzbv8jRtAPiEvkNYbRAJcCNotP9JA.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       Pengetahuan Kuantitatif (PK)
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
    <div class="flex items-center">
     <img alt="IDN speech bubble icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/fPd0bUC52wycQyOLnhnQnh3eO2NbiQNPsACfVef2gb6Va7TfE.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       Literasi Bahasa Indonesia
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
    <div class="flex items-center">
     <img alt="ENG speech bubble icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/ZaHF8klDlDpvI1H9pQeToNtlRYDF4jqlmo0PBN7aPVoptP9JA.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       Literasi Bahasa Inggris
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
    <div class="flex items-center">
     <img alt="Calculator and pencil icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/7aaehDegQigzr0gqDEiabU3l5vlkR4oCckMae8VLietQt9pPB.jpg" width="50"/>
     <div class="flex-1">
      <h2 class="text-blue-600 font-semibold">
       PENALARAN MATEMATIKA
      </h2>
      <div class="bg-gray-200 rounded-full h-4 mt-2">
       <div class="bg-gray-400 h-4 rounded-full" style="width: 0%;">
       </div>
      </div>
      <p class="text-gray-600 text-sm mt-1">
       0.0%
      </p>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>

    </div>
   </div>
  </div>
 </body>
</html>
@endsection
