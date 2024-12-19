@extends('layout.main')
@section('content')
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Recommended Jobs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 p-4">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Recommended Jobs</h1>
            <div class="flex items-center space-x-2">
                <span class="bg-gray-200 text-gray-800 text-sm font-semibold px-2.5 py-0.5 rounded-full">
                    {{ $cards->count() }} <!-- Hitung jumlah card -->
                </span>
                <div class="flex items-center space-x-1 text-gray-500">
                    <span>Sort by:</span>
                    <span class="font-semibold">Last updated</span>
                    <i class="fas fa-sliders-h"></i>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($cards as $card)
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col justify-between card">
                <div class="bg-blue-50 p-4 rounded-lg mb-2 rectangle">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($card->tgl_lamaran)->format('d M, Y') }}</span>
                        <i class="far fa-bookmark text-gray-500"></i>
                    </div>
                    <div class="flex items-center mb-2">
                        <h2 class="text-lg font-bold">{{ $card->nama }}</h2>
                        <img alt="{{ $card->nama }} logo" class="ml-2 w-6 h-6" height="24"
                            src="{{ $card->image1 }}"
                            width="24" />
                    </div>
                    <h3 class="text-base font-semibold mb-2">{{ $card->bidang }}</h3>
                    <div class="flex flex-wrap gap-2 mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $card->kategori1 }}</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $card->kategori2 }}</span>
                        @if($card->kategori3)<span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $card->kategori3 }}</span>@endif
                        @if($card->kategori4)<span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $card->kategori4 }}</span>@endif
                        @if($card->kategori5)<span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $card->kategori5 }}</span>@endif
                    </div>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <div>
                        <p class="text-sm text-gray-500 mb-2">IDR {{ number_format($card->gaji, 0, ',', '.') }}/Bulan</p>
                        <p class="text-sm text-gray-500 mb-2">{{ $card->lokasi }}</p>
                    </div>
                    <a href="{{ route('lowongan.lamar', ['id' => $card->id]) }}">
                        <button class="bg-black text-white text-sm font-semibold py-1 px-4 rounded">Apply</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection

