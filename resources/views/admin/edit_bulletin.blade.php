@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A BULLETIN DATE ') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.bulletin.list') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('edit.bulletin.post',['id'=>$bulletin->id]) }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        EDIT A BULLETIN DATE
                      </div>
                      <div class="basicInfoGrid">
                        <div>Year</div>
                        <input name="bulletinYear" value="{{ $bulletin->post_year }}" type="number" min="1970" required id="bulletinYear" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Quarter of the Year</div>
                        <select name="bulletinSeason">
                          <option @if ($bulletin->season_order == 1) selected @endif value="1">
                            Winter
                          </option>
                          <option @if ($bulletin->season_order == 2) selected @endif value="2">
                            Spring
                          </option>
                          <option @if ($bulletin->season_order == 3) selected @endif value="3">
                            Summer
                          </option>
                          <option @if ($bulletin->season_order == 4) selected @endif value="4">
                            Fall
                          </option>
                        </select>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                        </div>
                        <div class="bulletinLink">
                          <a href="{{ url('/bulletins/'.$bulletin->filename) }}" target="_blank">
                            <span>
                              SEE THIS BULLETIN
                            </span>
                          </a>
                        </div>
                      </div>
                      <button type="submit" name="addBulletin" class="btn btn-primary">
                        EDIT BULLETIN DATE
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.bulletin.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
