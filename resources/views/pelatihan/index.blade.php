@extends('layout.main')
@section('content')
    <div class="container py-5 px-5">
        <!-- Header Section -->
        <div class="text-center mb-4">
            <h1 class="display-4">Pelatihan Videos</h1>
            <p class="text-muted">Explore training videos below.</p>
        </div>

        <!-- Video Gallery -->
        <div class="row">

            @foreach ($data as $item)
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg">
                        <a href="{{ route('pelatihan.show', $item->id) }}">
                            <div class="card-body">
                                <!-- Video Title -->
                                <h5 class="card-title mt-2">{{ $item->nama_pelatihan }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
@endsection
