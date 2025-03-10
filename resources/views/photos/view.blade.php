@extends('layouts.master')

@include('photos.style')

@section('photo_content')
    <div class="photoContent">
        <div class="photoMainTitle">
            <div>
                Bobcat<br> 
                Gallery
            </div>
        </div>
        <div class="mainContent">
            <div class="menuColumn">
                <a href="{{ route('photos.index') }}">
                    <div><< RETURN</div>
                </a>
            </div>
            <div class="photosAndButtons">
                @auth
                    @if ($current_user->id == $photo->user_id)
                        <div class="allButtons">
                            <div class="addPhoto">
                                <a href="{{ route('gallery.photo.edit', ['id' => $photo->id]) }}">
                                    <span>+ EDIT A PHOTO</span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endauth
                <div class="allPhotos">
                    <div class="onePhotoEl">
                        <div class="photoImg" style="background-image:url('/images/gallery/{{ $photo->photo_file }}')">
                            <!-- The image goes here -->
                        </div>
                        <div class="photoTitle">
                            {{ $photo->title }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include ('footer.content')
    </div>
@stop