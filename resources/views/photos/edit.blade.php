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
                    <a href="{{ route('photos.index') }}">
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
                          Do you want this photo to be available to the public or only to other members?
                        </div>
                        <div>
                          <select name="memberOnly">
                            <option @if ($photo->member_only == 1) selected @endif value="1">Only members</option>
                            <option @if ($photo->member_only == 0) selected @endif value="0">Public</option>
                          </select>
                        </div>
                        <button type="submit" name="addPhoto" class="btn btn-primary">
                          EDIT THIS IMAGE
                        </button>
                        <div>
                          <a href="{{ route('gallery.photo.delete', ['id' => $photo->id]) }}">DELETE THIS IMAGE</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
