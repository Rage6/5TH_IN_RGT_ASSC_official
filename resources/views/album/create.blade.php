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
                    <form method="POST" action="{{ route('gallery.album.store') }}" enctype="multipart/form-data">
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
                        <input name="title" type="text" maxlength="250" placeholder="Max. 250 characters">
                        <div>
                          Caption
                        </div>
                        <textarea name="caption" maxlength="1000" placeholder="Max. 1000 characters">
                        </textarea>
                        <div>
                          Do you want this album to be available to the public or only to other members?
                        </div>
                        <div>
                          <select name="membersOnly">
                            <option selected value="1">Only members</option>
                            <option value="0">Public</option>
                          </select>
                        </div>
                        <button type="submit" name="addAlbum" class="btn btn-primary">
                          CREATE THE ALBUM
                        </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
