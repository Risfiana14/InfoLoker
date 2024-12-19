@extends('layout.main')
@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3>{{ $card->nama }}</h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                        </div>
                        <p class="text-muted mb-1">{{ $card->lokasi }} • {{ $card->tgl_lamaran }}</p>
                        <p class="text-muted">
                            @if($card->kategori1)
                                <span class="badge bg-secondary">{{ $card->kategori1 }}</span>
                            @endif

                            @if($card->kategori2)
                                <span class="badge bg-secondary">{{ $card->kategori2 }}</span>
                            @endif

                            @if($card->kategori3)
                                <span class="badge bg-secondary">{{ $card->kategori3 }}</span>
                            @endif

                            @if($card->kategori4)
                                <span class="badge bg-secondary">{{ $card->kategori4 }}</span>
                            @endif

                            @if($card->kategori5)
                                <span class="badge bg-secondary">{{ $card->kategori5 }}</span>
                            @endif
                        </p>

                        <hr>

                        <!-- About this role -->
                        <h5>About this role</h5>
                        <p>{{ $card->deskripsi }}</p>

                        <!-- Qualification -->
                        <h5>Qualification</h5>
                        <p>{{ $card->kualifikasi }}</p>

                        <!-- Responsibility -->
                        <h5>Responsibility</h5>
                        <p>{{ $card->tanggung_jawab }}</p>

                        <!-- Attachment -->
                        <h5>Attachment</h5>
                        <div class="d-flex">
                            @if($card->image1)
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="posts">
                                                    <div class="content mt-3">
                                                        <div class="d-flex flex-column">
                                                            <div class="image">
                                                                <img src="{{ asset('storage/' . $card->image1) }}"
                                                                    class="img-fluid w-100 rounded-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Jika image2 ada, tampilkan juga -->
                            @if($card->image2)
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="posts">
                                                    <div class="content mt-3">
                                                        <div class="d-flex flex-column">
                                                            <div class="image">
                                                                <img src="{{ asset('storage/' . $card->image2) }}"
                                                                    class="img-fluid w-100 rounded-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Similar Jobs</h5>
                        <div class="mb-3">
                            <p class="mb-0"><strong>Lead UI Designer</strong></p>
                            <p class="text-muted">Gojek - Jakarta, Indonesia</p>
                            <span class="badge bg-secondary">Fulltime</span> <span>Onsite</span> <span>3-5 Years</span>
                        </div>
                        <div class="mb-3">
                            <p class="mb-0"><strong>Sr. UX Designer</strong></p>
                            <p class="text-muted">GoPay - Jakarta, Indonesia</p>
                            <span class="badge bg-secondary">Fulltime</span> <span>Onsite</span> <span>3-5 Years</span>
                        </div>
                        <div class="mb-3">
                            <p class="mb-0"><strong>Jr. UI Designer</strong></p>
                            <p class="text-muted">OVO - Jakarta, Indonesia</p>
                            <span class="badge bg-secondary">Fulltime</span> <span>Onsite</span> <span>1-3 Years</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Other Jobs From Pixelz Studio</h5>
                        <div class="mb-3">
                            <p class="mb-0"><strong>UI Designer</strong></p>
                            <p class="text-muted">Yogyakarta, Indonesia</p>
                            <span class="badge bg-secondary">Internship</span> <span>Fresh Graduate</span>
                        </div>
                        <div class="mb-3">
                            <p class="mb-0"><strong>Frontend Developer</strong></p>
                            <p class="text-muted">Yogyakarta, Indonesia</p>
                            <span class="badge bg-secondary">Full5time</span> <span>1-3 Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
