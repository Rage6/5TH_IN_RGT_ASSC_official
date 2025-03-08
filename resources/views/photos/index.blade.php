@extends('layouts.master')

@include('photos.style')

@section('photos_content')
    <div class="photoContent">
        <div class="photoMainTitle">
            <div>
                Bobcat<br> 
                Gallery
            </div>
        </div>
        <div class="mainContent">
            <div class="menuColumn">
                <a href="{{ route('welcome') }}">
                    <div>RETURN</div>
                </a>
            </div>
            <div class="allPhotos">
                @auth
                    <div class="addPhoto">
                        <a href="{{ route('gallery.photo.create') }}">
                            <span>+ ADD A PHOTO</span>
                        </a>
                    </div>
                @endauth
                @foreach ($all_photos as $one_photo)
                    <div class="onePhotoEl">
                        <a href="{{ route('photos.show', ['id' => $one_photo->id]) }}">
                            <div class="photoImg" style="background-image:url('/images/gallery/{{ $one_photo->photo_file }}')">
                                <!-- The image goes here -->
                            </div>
                        </a>
                        <a href="{{ route('photos.show', ['id' => $one_photo->id]) }}">
                            <div class="photoTitle">
                                {{ $one_photo->title }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @include ('footer.content')
    </div>
@stop