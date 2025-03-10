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
                    <div><< HOME</div>
                </a>
            </div>
            <div class="photosAndButtons">
                @auth
                <div class="allButtons">
                    <div class="addPhoto">
                        <a href="{{ route('gallery.photo.create') }}">
                            <span>+ ADD A PHOTO</span>
                        </a>
                    </div>
                    <div class="addPhoto">
                        <a href="{{ route('gallery.album.create') }}">
                            <span>+ ADD AN ALBUM</span>
                        </a>
                    </div>
                </div>
                @endauth
                <div class="allPhotos">
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
                    {{ $all_photos->links('pagination::casualty-list') }}
                </div>
            </div>
        </div>
        @include ('footer.content')
    </div>
@stop