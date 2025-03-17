@extends('layouts.master')

@include('photos.style')

@section('photos_content')
    <div class="photoContent">
        <div class="albumListBkgrd">
            <div class="albumListEl">
                <div class="exitBttn">
                    <span data-button="hide">
                        &#10005;
                    </span>
                </div>
                <div>
                    Choose an album
                </div>
                <div class="albumList">
                    <a href="{{ route('photos.index') }}">
                        <div>All Photos</div>
                    </a>
                    @foreach ($all_albums as $one_album)
                        <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                            <div>{{ $one_album->title }}</div>
                        </a>
                    @endforeach
                    <a href="{{ route('photos.index', ['album' => 'unassigned']) }}">
                        <div>Unassigned</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="photoMainTitle">
            <div>
                Bobcat<br> 
                Gallery
            </div>
        </div>
        <div class="mainContent">
            <div class="menuColumn">
                <a class="returnArrow" href="{{ route('welcome') }}">
                    <div><< HOME</div>
                </a>
                <span class="filterBttn" data-button="show">
                    Filter By Album
                </span>
            </div>
            <div class="photosAndButtons">
                @auth
                <div class="allButtons">
                    <div class="addPhoto">
                        <a href="{{ route('gallery.photo.create') }}">
                            <span>+ ADD PHOTO</span>
                        </a>
                    </div>
                    <div class="addPhoto">
                        <a href="{{ route('gallery.album.create') }}">
                            <span>+ ADD ALBUM</span>
                        </a>
                    </div>
                    @if ($is_album_admin == true && $album_id != null)
                        <div class="addPhoto">
                            <a href="{{ route('gallery.album.edit',['id' => $album_id]) }}">
                                <span>+ EDIT ALBUM</span>
                            </a>
                        </div>
                    @endif
                </div>
                @endauth
                <div class="allPhotos">
                    @if ($all_photos != null)
                        @foreach ($all_photos as $one_photo)
                            @if ($one_photo->member_only == 0 || $current_user != null)
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
                            @endif
                        @endforeach
                        {{ $all_photos->links('pagination::casualty-list') }}
                    @else 
                        No photos were found
                    @endif
                </div>
            </div>
        </div>
        @include ('footer.content')
    </div>
@stop