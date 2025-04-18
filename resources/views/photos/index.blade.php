@extends('layouts.master')

@include('photos.style')

@section('photos_content')
    <div class="photoContent">
        <div class="albumListBkgrd">
            <div class="albumListEl">
                <div class="exitBttn">
                    <div>
                        Choose an album
                    </div>
                    <span data-button="hide">
                        &#10005;
                    </span>
                </div>
                <div class="albumList">
                    <a href="{{ route('photos.index') }}">
                        <div>All Photos</div>
                    </a>
                    <a href="{{ route('photos.index', ['album' => 'unassigned']) }}">
                        <div style="background-color: dimgrey">Unassigned</div>
                    </a>
                    @php 
                        $current_category = null;
                        $current_bkgrd = 'black';
                    @endphp

                    @foreach ($all_albums as $one_album)
                        @if ($current_category != $one_album->category)
                            <div class="categoryTitles">
                                @if (($current_category == null || $current_category != 'afghanistan') && $one_album->category == 'afghanistan' && $album_statuses['afghanistan'] == true)
                                    Afghanistan
                                @elseif (($current_category == null || $current_category != 'cold-war') && $one_album->category == 'cold-war' && $album_statuses['cold-war'] == true)
                                    Cold War
                                @elseif (($current_category == null || $current_category != 'iraq') && $one_album->category == 'iraq' && $album_statuses['iraq'] == true)
                                    Iraq
                                @elseif (($current_category == null || $current_category != 'korea') && $one_album->category == 'korea' && $album_statuses['korea'] == true)
                                    Korea
                                @elseif (($current_category == null || $current_category != 'reunion') && $one_album->category == 'reunion' && $album_statuses['reunion'] == true)
                                    Reunion
                                @elseif (($current_category == null || $current_category != 'vietnam') && $one_album->category == 'vietnam' && $album_statuses['vietnam'] == true)
                                    Vietnam
                                @elseif (($current_category == null || $current_category != 'ww2') && $one_album->category == 'ww2' && $album_statuses['ww2'] == true)
                                    World War II
                                @elseif ($current_category != null && $one_album->category == null)
                                    Random
                                @endif
                            </div>
                        @endif

                        @php 
                            $current_category = $one_album->category 
                        @endphp

                        @if ($one_album->category == 'afghanistan' && $album_statuses['afghanistan'] == true)
                            <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                            </a>
                        @endif
                        @if ($one_album->category == 'cold-war' && $album_statuses['cold-war'] == true)
                            @if ($one_album->category == 'cold-war')
                                <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                    <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                                </a>
                            @endif
                        @endif
                        @if ($one_album->category == 'iraq' && $album_statuses['iraq'] == true)
                            @if ($one_album->category == 'iraq')
                                <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                    <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                                </a>
                            @endif
                        @endif
                        @if ($one_album->category == 'korea' && $album_statuses['korea'] == true)
                            @if ($one_album->category == 'korea')
                                <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                    <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                                </a>
                            @endif
                        @endif
                        @if ($one_album->category == 'reunion' && $album_statuses['reunion'] == true)
                            @if ($one_album->category == 'reunion')
                                <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                    <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                                </a>
                            @endif
                        @endif
                        @if ($one_album->category == 'vietnam' && $album_statuses['vietnam'] == true)
                            @if ($one_album->category == 'vietnam')
                                <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                    <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                                </a>
                            @endif
                        @endif
                        @if ($one_album->category == 'ww2' && $album_statuses['ww2'] == true)
                            @if ($one_album->category == 'ww2')
                                <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                    <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                                </a>
                            @endif
                        @endif
                        @if ($one_album->category == null)
                            <a href="{{ route('photos.index', ['album' => $one_album->id]) }}">
                                <div style="background-color: {{ $current_bkgrd }}">{{ $one_album->title }}</div>
                            </a>
                        @endif
                        @php 
                            if ($current_bkgrd == 'dimgrey') {
                                $current_bkgrd = 'black';
                            } else {
                                $current_bkgrd = 'dimgrey';
                            };
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <div class="photoMainTitle">
            <div>
                Bobcat
            </div>
            <div> 
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
                @if ($album_name)
                    <div class="albumTitle">
                        <span>
                            Album
                        </span>
                        <div>
                            {{ $album_name }}
                        </div>
                    </div>
                @endif
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
                @if ($all_photos != null)
                    <div class="allPhotos">
                        @foreach ($all_photos as $one_photo)
                            @php 
                                $params = ['id' => $one_photo->id];
                                if (isset($_GET['album'])) {
                                    $params['album'] = $_GET['album'];
                                } elseif (isset($_GET['category'])) {
                                    $params['category'] = $_GET['category'];
                                };
                                if (isset($_GET['page'])) {
                                    $params['page'] = $_GET['page'];
                                };
                            @endphp
                            @if ($one_photo->member_only == 0 || $current_user != null)
                                <div class="onePhotoEl">
                                    <a href="{{ route('photos.show', $params) }}">
                                        <div class="photoImg" style="background-image:url('/images/gallery/{{ $one_photo->photo_file }}')">
                                            <!-- The image goes here -->
                                        </div>
                                    </a>
                                    <div class="photoTitle">
                                        <a href="{{ route('photos.show', ['id' => $one_photo->id]) }}">
                                            {{ $one_photo->title }}
                                        </a>
                                    </div>
                                    @if (isset($current_user->id) && $one_photo->user_id == $current_user->id)
                                        <div class="photoBttnRow">
                                            <a href="{{ route('gallery.photo.edit', ['id' => $one_photo->id]) }}?{{ isset($_GET['album']) ? 'album='.$_GET['album'] : '' }}&{{ isset($_GET['page']) ? 'page='.$_GET['page'] : '' }}">
                                                <img class="editSymbolBttn" src="/images/photos/edit_symbol.png" />
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                    {{ $all_photos->links('pagination::casualty-list') }}
                @else 
                    <div class="allPhotos">
                        No photos were found
                    </div>
                @endif
            </div>
        </div>
        @include ('footer.content')
    </div>
@stop