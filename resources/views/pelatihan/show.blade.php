@extends('layout.main')
@section('content')

<div class="container py-4">
    <div class="row">
        <!-- Main Video Section -->
        <div class="col-lg-8">
            <!-- Video Player -->
            <div class="ratio ratio-16x9 mb-3">
                <iframe 
                    src="{{ $data->link_pelatihan }}" 
                    title="YouTube video player" 
                    allowfullscreen>
                </iframe>
            </div>

            <!-- Video Title -->
            <h3 class="fw-bold">{{ $data->nama_pelatihan }}</h3>

            <!-- Video Details -->
            <div class="d-flex justify-content-between align-items-center my-2">
                <span class="text-muted">{{ $data->created_at }}</span>
                {{-- <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-hand-thumbs-up"></i> Like
                    </button>
                    <button class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-hand-thumbs-down"></i> Dislike
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-share"></i> Share
                    </button>
                </div> --}}
            </div>

            <!-- Video Description -->
            <div class="mt-3">
                <h5 class="fw-bold">Description</h5>
                <p>
                    This video explains the fundamentals of Cisco CCNA networking. 
                    A step-by-step guide for beginners to understand the basics.
                </p>
            </div>
        </div>

        <!-- Related Videos Sidebar -->
        <div class="col-lg-4">
            <h5 class="fw-bold mb-3">Related Videos</h5>

            <!-- Related Video Card -->
            <div class="d-flex mb-3">
                <div class="me-3">
                    <div class="ratio ratio-16x9" style="width: 120px;">
                        <iframe 
                            src="https://www.youtube.com/embed/3l13qBk1EYw" 
                            title="YouTube video player" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1">Networking Fundamentals</h6>
                    <small class="text-muted">123,456 views • Nov 12, 2024</small>
                </div>
            </div>

            <!-- Repeat Related Videos -->
            <div class="d-flex mb-3">
                <div class="me-3">
                    <div class="ratio ratio-16x9" style="width: 120px;">
                        <iframe 
                            src="https://www.youtube.com/embed/Z9dvM7qgN9s" 
                            title="YouTube video player" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1">Introduction to DevOps</h6>
                    <small class="text-muted">98,765 views • Oct 10, 2024</small>
                </div>
            </div>

            <!-- Another Related Video -->
            <div class="d-flex mb-3">
                <div class="me-3">
                    <div class="ratio ratio-16x9" style="width: 120px;">
                        <iframe 
                            src="https://www.youtube.com/embed/rfscVS0vtbw" 
                            title="YouTube video player" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1">Python for Beginners</h6>
                    <small class="text-muted">75,321 views • Sep 15, 2024</small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
