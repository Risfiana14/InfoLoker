@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            @foreach ($posts as $item)
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="posts">
                            <div class="header">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                        <img src="https://placehold.co/400x400" alt=""
                                            style="max-width: 50px; border-radius: 50px">
                                        <div class="d-flex flex-column">
                                            <h5 class="p-0 m-0">{{ $item->user->name }}</h5>
                                            <p class="m-0 p-0"> {{ $item->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <a href="" class="btn">. . .</a>
                                </div>
                            </div>
                            <div class="content mt-3">
                                <div class="d-flex flex-column">
                                    @if ($item->post_image !== '-')
                                        <div class="image">
                                            <img src="{{ Storage::url($item->post_image) }}"
                                                class="img-fluid w-100 rounded-2">
                                        </div>
                                    @endif
                                    <p class="mt-3">
                                        {!! $item->message !!}
                                    </p>
                                    <div class="toolbar mt-3">
                                        <div class="d-flex justify-content-around gap-3">
                                            <a href="{{ route('post.show', $item->id) }}" class="btn">
                                                <i class="fa-regular fa-comment me-2"></i> Comment
                                            </a>
                                            <a href="" class="btn" data-bs-toggle="modal"
                                                data-bs-target="#postModal{{ $item->id }}">
                                                <i class="fa-regular fa-share-from-square me-2"></i> Share
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
