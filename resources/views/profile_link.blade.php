@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('profile.edit') }}">
                      << BACK
                    </a>
                    @if (isset($link))
                      <div class="basicInfoSubtitle">
                        EDIT YOUR LINK
                      </div>
                      <form method="POST" action="{{ route('profile.link.change',[
                        'link_id' => $link->id
                      ]) }}">
                      @csrf
                        <div class="basicInfoGrid">
                          <div>Link Name</div>
                          <input type="text" name="linkName" id="name" value="{{ $link->name }}" required />
                        </div>
                        <div class="basicInfoGrid">
                          <div>URL Address</div>
                          <input type="text" name="linkUrl" id="url" value="{{ $link->url }}" required />
                        </div>
                        <button type="submit" name="editLink" class="btn btn-primary">
                          EDIT LINK
                        </button>
                        <a href="{{ route('profile.edit') }}">
                          {{ __('CANCEL') }}
                        </a>
                        <div class="deleteEl">
                          <a href="{{ route('profile.link.delete',[
                            'link_id' => $link->id
                          ]) }}">
                            DELETE LINK
                          </a>
                        </div>
                      </form>
                    @else
                      <div class="basicInfoSubtitle">
                        ADD YOUR LINK
                      </div>
                      <form method="POST" action="{{ route('profile.link.add') }}">
                      @csrf
                        <div class="basicInfoGrid">
                          <div>Link Name</div>
                          <input type="text" name="linkName" id="name" required />
                        </div>
                        <div class="basicInfoGrid">
                          <div>URL Address</div>
                          <input type="text" name="linkUrl" id="url" required />
                        </div>
                        <button type="submit" name="addLink" class="btn btn-primary">
                          ADD LINK
                        </button>
                        <a href="{{ route('profile.edit') }}">
                          {{ __('CANCEL') }}
                        </a>
                      </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
