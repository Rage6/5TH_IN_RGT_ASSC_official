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
                @php 
                    $params = [];
                    if (isset($_GET['album'])) {
                        $params['album'] = $_GET['album'];
                    };
                    if (isset($_GET['page'])) {
                        $params['page'] = $_GET['page'];
                    };
                @endphp
                <a href="{{ route('photos.index', $params) }}">
                    <div><< RETURN</div>
                </a>
            </div>
            <div class="photosAndButtons">
                @auth
                    @if ($current_user->id == $photo->user_id)
                        <div class="allButtons">
                            <div class="addPhoto">
                                <a href="{{ route('gallery.photo.edit', ['id' => $photo->id]) }}?{{ isset($_GET['album']) ? 'album='.$_GET['album'] : '' }}&{{ isset($_GET['page']) ? 'page='.$_GET['page'] : '' }}">
                                    <span>+ EDIT A PHOTO</span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endauth
                <div class="viewPhotoEl">
                    <div class="viewImgEl">
                        <img src='/images/gallery/{{ $photo->photo_file }}' />
                    </div>
                    <div class="viewInfoEl">
                        @if ($photo->title != null)
                            <div class="viewTitle">
                                Title: {{ $photo->title }}
                            </div>
                        @endif
                        @if ($photo->caption != null)
                            <div>
                                Caption: {{ $photo->caption }}
                            </div>
                        @endif
                        @if ($photo->photographer != null)
                            <div>
                                Photo taken by {{ $photo->photographer }}
                            </div>
                        @endif
                        <div>
                            Uploaded by {{ $uploaded_by }}
                        </div>
                        @if ($photo->day_of_photo != null || $photo->month_of_photo != null || $photo->year_of_photo != null)
                            <div>
                                Date Taken: 
                                @if ($photo->day_of_photo != null)
                                    {{ $photo_date }}
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include ('footer.content')
    </div>
@stop