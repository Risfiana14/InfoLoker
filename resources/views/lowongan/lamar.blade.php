@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5>What's on your mind ?</h5>
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <input type="file" class="form-control" name="post_image" id="post_image"
                                    accept="image/*">
                                <button type="button" class="btn" id="uploadButton"><i
                                        class="fa-regular fa-file-image"></i></button>
                                <div id="imagePreview" class="ml-3" style="display: none;">
                                    <img id="previewImage" src="" alt="Image Preview"
                                        style="width: 50px; height: auto; border: 1px solid #ccc; border-radius: 4px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
