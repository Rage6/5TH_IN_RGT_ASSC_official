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
                    } elseif (isset($_GET['category'])) {
                        $params['category'] = $_GET['category'];
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
                        @if ($prior_id)
                            @php 
                                $prior_params = $params;
                                $prior_params['id'] = $prior_id;
                            @endphp
                            <div class="previous">
                                <span class="photoSpan previous">
                                    <a href="{{ route('photos.show', $prior_params) }}">PREVIOUS</a>
                                </span>
                            </div>
                        @else
                            <span class="previous"></span>
                        @endif
                        @if ($next_id)
                            @php 
                                $next_params = $params;
                                $next_params['id'] = $next_id;
                            @endphp
                            <div class="next">
                                <span class="photoSpan">
                                    <a href="{{ route('photos.show', $next_params) }}">NEXT</a>
                                </span>
                            </div>
                        @else
                            <span class="next"></span>
                        @endif
                        <img class="photo" src='/images/gallery/{{ $photo->photo_file }}' />
                    </div>
                    <div class="viewInfoEl">
                        @if ($photo->title != null)
                            <div>
                                <span class="photoLabel">Title:</span> {{ $photo->title }}
                            </div>
                        @endif
                        @if ($photo->caption != null)
                            <div>
                                <span class="photoLabel">Caption:</span> {{ $photo->caption }}
                            </div>
                        @endif
                        @if ($photo->photographer != null)
                            <div>
                                <span class="photoLabel">Taken by:</span> {{ $photo->photographer }}
                            </div>
                        @endif
                        <div>
                            <span class="photoLabel">Uploaded by:</span> {{ $uploaded_by }}
                        </div>
                        @if ($photo->day_of_photo != null || $photo->month_of_photo != null || $photo->year_of_photo != null)
                            <div>
                                <span class="photoLabel">Date Taken:</span> 
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