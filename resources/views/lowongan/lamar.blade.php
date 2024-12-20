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
                            @if ($application)
                                <button class="btn btn-secondary" disabled>Already Applied</button>
                            @else
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply
                                    Now</button>
                            @endif
                        </div>
                        <p class="text-muted mb-1">{{ $card->lokasi }} • {{ $card->tgl_lamaran }}</p>
                        <p class="text-muted">
                            @if ($card->kategori1)
                                <span class="badge bg-secondary">{{ $card->kategori1 }}</span>
                            @endif
                            @if ($card->kategori2)
                                <span class="badge bg-secondary">{{ $card->kategori2 }}</span>
                            @endif
                            @if ($card->kategori3)
                                <span class="badge bg-secondary">{{ $card->kategori3 }}</span>
                            @endif
                            @if ($card->kategori4)
                                <span class="badge bg-secondary">{{ $card->kategori4 }}</span>
                            @endif
                            @if ($card->kategori5)
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


                        <div class="d-flex">
                            @if ($card->image1)
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/' . $card->image1) }}"
                                                    class="img-fluid w-100 rounded-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($card->image2)
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/' . $card->image2) }}"
                                                    class="img-fluid w-100 rounded-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        @if ($application)
                            <hr>
                            <div class="d-flex justify-content-between align-content-center">
                                <h5>My Application</h5>
                                @if ($application->status == 'pending')
                                    <p class="text-uppercase fw-bold">{{ $application->status }}</p>
                                @elseif($application->status == 'accepted')
                                    <p class="text-uppercase text-success fw-bold">{{ $application->status }}</p>
                                @else
                                    <p class="text-uppercase text-danger fw-bold">{{ $application->status }}</p>
                                @endif
                            </div>
                            <p><strong>Application Date:</strong> {{ $application->created_at->format('d M Y') }}</p>
                            <p><strong>Cover Letter:</strong> {{ $application->isi_lamaran }}</p>
                            <p>
                                <strong>Uploaded Document:</strong>
                                <a href="{{ asset('storage/' . $application->dokumen) }}"
                                    target="_blank">{{ basename($application->dokumen) }}</a>
                            </p>
                        @endif
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
                            <span class="badge bg-secondary">Fulltime</span> <span>1-3 Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Modal -->
@if (!$application)
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Application</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('kirim.lamaran', $card->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dokumen_lamaran">Upload Resume</label>
                            <input type="file" class="form-control" id="dokumen_lamaran" name="dokumen_lamaran"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="isi_lamaran">Application Details</label>
                            <textarea class="form-control" id="isi_lamaran" name="isi_lamaran" rows="4" maxlength="1000" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
