@extends('layouts.app')

@include('photos.style')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD AN ALBUM') }}</div>

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
                          Category
                        </div>
                        <select name="category">
                          <option value="none">
                            None
                          </option>
                          <option value="afghanistan">
                            Afghanistan
                          </option>
                          <option value="cold-war">
                            Cold War
                          </option>
                          <option value="iraq">
                            Iraq
                          </option>
                          <option value="korea">
                            Korea
                          </option>
                          <option value="reunion">
                            Reunion
                          </option>
                          <option value="vietnam">
                            Vietnam
                          </option>
                          <option value="ww2">
                            World War II
                          </option>
                        </select>
                        <div>
                          Do you want this album to be visible to the public or only other members?
                        </div>
                        <div>
                          <select name="membersOnly">
                            <option selected value="1">Only members</option>
                            <option value="0">Public</option>
                          </select>
                        </div>
                        <div>
                          Can only you add photos to this album, or can other members add them as well?
                        </div>
                        <div>
                          <select name="onlyCreatorPhotos">
                            <option selected value="1">Only me</option>
                            <option value="0">All members</option>
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
