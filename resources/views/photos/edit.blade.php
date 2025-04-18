@extends('layouts.app')

@include('photos.style')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A PHOTO') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('photos.show', ['id' => $photo->id]) }}?{{ isset($_GET['album']) ? 'album='.$_GET['album'] : '' }}&{{ isset($_GET['page']) ? 'page='.$_GET['page'] : '' }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('gallery.photo.update', ['id'=>$photo->id]) }}" enctype="multipart/form-data">
                      @csrf
                      @if ($errors)
                        @foreach ($errors->all() as $one_error)
                          <div style="color:red">
                            <div>- {{ $one_error }}</div>
                          </div>
                        @endforeach
                      @endif
                      <div class="basicInfoGrid">
                        <div>
                          Photo
                        </div>
                        <div class="editPhoto" style="background-image:url('/images/gallery/{{ $photo->photo_file }}')">
                          <!-- image is displayed here -->
                        </div>
                        <div>
                          Title
                        </div>
                        <input name="title" type="text" maxlength="250" value="{{ $photo->title }}">
                        <div>
                          Photographer
                        </div>
                        <input name="photographer" type="text" maxlength="250" value="{{ $photo->photographer }}">
                        <div>
                          Caption
                        </div>
                        <textarea name="caption" maxlength="1000">{{ $photo->caption }}</textarea>
                        <!-- <div>
                          Category
                        </div>
                        <select name="category">
                          <option @if ($photo->category == null) selected @endif value="none">
                            None
                          </option>
                          <option @if ($photo->category == 'afghanistan') selected @endif value="afghanistan">
                            Afghanistan
                          </option>
                          <option @if ($photo->category == 'cold-war') selected @endif value="cold-war">
                            Cold War
                          </option>
                          <option @if ($photo->category == 'iraq') selected @endif value="iraq">
                            Iraq
                          </option>
                          <option @if ($photo->category == 'korea') selected @endif value="korea">
                            Korea
                          </option>
                          <option @if ($photo->category == 'reunion') selected @endif value="reunion">
                            Reunion
                          </option>
                          <option @if ($photo->category == 'vietnam') selected @endif value="vietnam">
                            Vietnam
                          </option>
                        </select> -->
                        <div>
                          Date Picture Taken
                        </div>
                        <div class="basicDateInfo">
                          <input name="monthOfPhoto" type="number" min="1" max="12" value="{{ $photo->month_of_photo }}">
                          <input name="dayOfPhoto" type="number" min="1" max="31" value="{{ $photo->day_of_photo }}">
                          <input name="yearOfPhoto" type="number" min="1808" max="3000" value="{{ $photo->year_of_photo }}">

                          <div>Month</div>
                          <div>Day</div>
                          <div>Year</div>
                        </div>
                        <div>
                          Album
                        </div>
                        <select name="albumId">
                          <option value="none">No album</option>
                          @if (count($public_albums) > 0)
                            <option disabled>-- Public Albums --</option>
                          @endif
                          @foreach ($public_albums as $album)
                            @if ($album->id == $photo->album_id)
                              <option selected value="{{ $album->id }}">{{ $album->title }}</option>
                            @else
                              <option value="{{ $album->id }}">{{ $album->title }}</option>
                            @endif
                          @endforeach
                          @if (count($member_albums) > 0)
                            <option disabled>-- Member Albums --</option>
                          @endif
                          @foreach ($member_albums as $album)
                            @if ($album->id == $photo->album_id)
                              <option selected value="{{ $album->id }}">{{ $album->title }}</option>
                            @else
                              <option value="{{ $album->id }}">{{ $album->title }}</option>
                            @endif
                          @endforeach
                        </select>
                        <div>
                          Do you want this photo to be visible to the public, or only to other members?
                        </div>
                        <div>
                          <select name="membersOnly">
                            <option @if ($photo->members_only == 1) selected @endif value="1">Only members</option>
                            <option @if ($photo->members_only == 0) selected @endif value="0">Public</option>
                          </select>
                        </div>
                        <input type="hidden" name="album" value="{{ isset($_GET['album']) ? $_GET['album'] : null }}">
                        <input type="hidden" name="page" value="{{ isset($_GET['page']) ? $_GET['page'] : null }}">
                        <button type="submit" name="addPhoto" class="btn btn-primary">
                          EDIT THIS PHOTO
                        </button>
                        <div class="deleteAlbumBttn">
                          <span data-deletebttn="photo">DELETE THIS PHOTO</span>
                        </div>
                      </div>
                    </form>
                    <div class="deleteAlbumEl" data-deleteel="photo">
                      <div>
                        Are you sure that you want to delete this photo?
                      </div>
                        <a style="color:red" href="{{ route('gallery.photo.delete', ['id' => $photo->id]) }}">
                          <span>YES, DELETE THIS PHOTO</span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
