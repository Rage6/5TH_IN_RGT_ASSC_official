@extends('layouts.app')

@include('photos.style')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD A PHOTO') }}</div>

                <div class="card-body">
                  <div>
                    <a href="{{ route('photos.index') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('gallery.photo.store') }}" enctype="multipart/form-data">
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
                          Photo (max. 2MB)
                        </div>
                        <input type="file" name="photo_file" required="true" />
                        <div>
                          Title
                        </div>
                        <input name="title" type="text" maxlength="250" placeholder="Max. 250 characters">
                        <div>
                          Photographer
                        </div>
                        <input name="photographer" type="text" maxlength="250" placeholder="Max. 250 characters">
                        <div>
                          Caption
                        </div>
                        <textarea name="caption" maxlength="1000" placeholder="Max. 1000 characters">
                        </textarea>
                        <div>
                          Date Picture Taken
                        </div>
                        <div class="basicDateInfo">
                          <input name="monthOfPhoto" type="number" min="1" max="12" placeholder="MM">
                          <input name="dayOfPhoto" type="number" min="1" max="31" placeholder="DD">
                          <input name="yearOfPhoto" type="number" min="1808" max="3000" placeholder="YYYY">

                          <div>Month</div>
                          <div>Day</div>
                          <div>Year</div>
                        </div>
                        <div>
                          Album
                        </div>
                        <select name="albumId">
                          <option value="none">No album</option>
                          <option disabled>-- Public Albums --</option>
                          @foreach ($public_albums as $album)
                            <option value="{{ $album->id }}">{{ $album->title }}</option>
                          @endforeach
                          <option disabled>-- Member Albums --</option>
                          @foreach ($member_albums as $album)
                            <option value="{{ $album->id }}">{{ $album->title }}</option>
                          @endforeach
                        </select>
                        <div>
                          Do you want this photo to be visible to the public, or only to other members?
                        </div>
                        <div>
                          <select name="membersOnly">
                            <option selected value="1">Only members</option>
                            <option value="0">Public</option>
                          </select>
                        </div>
                        <button type="submit" name="addPhoto" class="btn btn-primary">
                          ADD THE IMAGE
                        </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
