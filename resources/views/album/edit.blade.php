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
                    <form method="POST" action="{{ route('gallery.album.update', ['id' => $album->id]) }}" enctype="multipart/form-data">
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
                          Title
                        </div>
                        <input name="title" type="text" maxlength="250" value="{{ $album->title }}" placeholder="Max. 250 characters">
                        <div>
                          Caption
                        </div>
                        <textarea name="caption" maxlength="1000" value="{{ $album->caption }}" placeholder="Max. 1000 characters">
                        </textarea>
                        <div>
                          Do you want this album visibnle to the public or only other members?
                        </div>
                        <div>
                          <select name="membersOnly">
                            <option @if ($album->members_only == 1) selected @endif value="1">Only members</option>
                            <option @if ($album->members_only == 0) selected @endif value="0">Public</option>
                          </select>
                        </div>
                        <div>
                          Can only you add photos to this album, or can other members add them as well?
                        </div>
                        <div>
                          <select name="onlyCreatorPhotos">
                            <option @if ($album->only_creator_photos == 1) selected @endif value="1">Only me</option>
                            <option @if ($album->only_creator_photos == 0) selected @endif value="0">All members</option>
                          </select>
                        </div>
                        <button type="submit" name="editAlbum" class="btn btn-primary">
                          EDIT THE ALBUM
                        </button>
                        <div class="deleteAlbumBttn">
                          <a href="{{ route('gallery.album.delete', ['id' => $album->id]) }}">DELETE THIS ALBUM</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
