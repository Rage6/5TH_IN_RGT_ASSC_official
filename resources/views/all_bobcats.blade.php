@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  BOBCAT DIRECTORY
                </div>
                <div class="card-body">
                  <a href="{{ route('home') }}">
                    << {{ __('BACK') }}
                  </a>
                  <div>
                    <div>
                      @foreach ($all_bobcats as $one_bobcat)
                        <a class="rowLink" href="{{ route('bobcat.profile.index',['id' => $one_bobcat->id]) }}">
                          <div class="listRow">
                            @if ($one_bobcat->current_img)
                              <div class="rowImg" style="background-image: url('/images/current/{{ $one_bobcat->current_img }}')"></div>
                            @elseif ($one_bobcat->veteran_img)
                              <div class="rowImg" style="background-image: url('/images/veteran/{{ $one_bobcat->current_img }}')"></div>
                            @else
                              <div class="rowImg"></div>
                            @endif
                            <div class="rowName">
                              <div>
                                {{ $one_bobcat->last_name }}, {{ $one_bobcat->first_name }} @if ($one_bobcat->middle_name) {{ substr($one_bobcat->middle_name,0,1) }}. @endif
                              </div>
                            </div>
                          </div>
                        </a>
                      @endforeach
                    </div>
                    {{ $all_bobcats->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
