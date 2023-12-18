@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE A BULLETIN DATE ') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.bulletin.list') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('delete.bulletin.post',['id'=>$bulletin->id]) }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        DELETE A BULLETIN DATE
                      </div>
                      <div class="basicInfoGrid">
                        <div>Year</div>
                        <div>{{ $bulletin->post_year }}</div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Quarter of the Year</div>
                        <div>
                          @if ($bulletin->season_order == 1)
                            Spring
                          @elseif ($bulletin->season_order == 2)
                            Summer
                          @elseif ($bulletin->season_order == 3)
                            Fall
                          @elseif ($bulletin->season_order == 4)
                            Winter
                          @endif
                        </div>
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
                        DELETE BULLETIN DATE
                      </button>
                      <button class="btn">
                        <a href="{{ route('delete.bulletin.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
