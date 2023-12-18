@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD AN BULLETIN  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.index') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('add.bulletin.post') }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        CREATE A NEW BULLETIN
                      </div>
                      <div class="basicInfoGrid">
                        <div>Year</div>
                        <input name="bulletinYear" type="number" min="1970" required id="bulletinYear" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Quarter of the Year</div>
                        <select name="bulletinSeason">
                          <option value="1">Spring</option>
                          <option value="2">Summer</option>
                          <option value="3">Fall</option>
                          <option value="4">Winter</option>
                        </select>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Bulletin File</div>
                        <input type="file" name="bulletinFile" id="bulletinFile" />
                      </div>
                      <button type="submit" name="addBulletin" class="btn btn-primary">
                        ADD BULLETIN
                      </button>
                      <button class="btn">
                        <a href="{{ route('admin.index') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
