@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($userType == 'casualty')
                      <a href="{{ route('edit.casualty.index',['id' => $id, 'next_route' => 'casualty-list']) }}">
                        << BACK
                      </a>
                    @elseif ($userType == 'recipient')
                      <a href="{{ route('edit.recipient.index',['id' => $id, 'next_route' => 'recipient-list']) }}">
                        << BACK
                      </a>
                    @endif
                    @if (isset($link))
                      @if ($method == 'edit')
                        @if ($userType == 'casualty')
                          <form method="POST" action="{{ route('edit.casualty.link.post',['id'=>$id,'linkId'=>$link->id]) }}">
                        @elseif ($userType == 'recipient')
                          <form method="POST" action="{{ route('edit.recipient.link.post',['id'=>$id,'linkId'=>$link->id]) }}">
                        @endif
                          @csrf
                          <div class="basicInfoSubtitle">
                            EDIT THE RELATED LINK
                          </div>
                          <div class="basicInfoGrid">
                            <div>Link Name</div>
                            <input type="text" name="name" id="name" value="{{ $link->name }}" required />
                          </div>
                          <div class="basicInfoGrid">
                            <div>URL Address</div>
                            <input type="text" name="url" id="startYear" value="{{ $link->url }}" required />
                          </div>
                          <button type="submit" name="editLink" class="btn btn-primary">
                            EDIT LINK
                          </button>
                          <button class="btn">
                            @if ($userType == 'casualty')
                              <a href="{{ route('edit.casualty.index',['id' => $id, 'next_route' => 'casualty-list']) }}">{{ __('CANCEL') }}</a>
                            @elseif ($userType == 'recipient')
                              <a href="{{ route('edit.recipient.index',['id' => $id, 'next_route' => 'recipient-list']) }}">{{ __('CANCEL') }}</a>
                            @endif
                          </button>
                        </form>
                      @elseif ($method == 'delete')
                        @if ($userType == 'casualty')
                          <form method="POST" action="{{ route('delete.casualty.link.post',['id'=>$id,'linkId'=>$link->id]) }}">
                        @elseif ($userType == 'recipient')
                          <form method="POST" action="{{ route('delete.recipient.link.post',['id'=>$id,'linkId'=>$link->id]) }}">
                        @endif
                          @csrf
                          <div class="basicInfoSubtitle">
                            DELETE THE RELATED LINK
                          </div>
                          <div class="basicInfoGrid">
                            <div>Link Name</div>
                            <div>{{ $link->name }}</div>
                          </div>
                          <div class="basicInfoGrid">
                            <div>URL Address</div>
                            <div>{{ $link->url }}</div>
                          </div>
                          <button type="submit" name="deleteLink" class="btn btn-danger">
                            DELETE LINK
                          </button>
                          <button class="btn">
                            @if ($userType == 'casualty')
                              <a href="{{ route('edit.casualty.index',['id' => $id, 'next_route' => 'casualty-list']) }}">
                                {{ __('CANCEL') }}
                              </a>
                            @elseif ($userType == 'recipient')
                              <a href="{{ route('edit.recipient.index',['id' => $id, 'next_route' => 'recipient-list']) }}">
                                {{ __('CANCEL') }}
                              </a>
                            @endif
                          </button>
                        </form>
                      @endif
                    @else
                      @if ($userType == 'casualty')
                        <form method="POST" action="{{ route('add.casualty.link.post',['id'=>$id]) }}">
                      @elseif ($userType == 'recipient')
                        <form method="POST" action="{{ route('add.recipient.link.post',['id'=>$id]) }}">
                      @endif
                        @csrf
                        <div class="basicInfoSubtitle">
                          ADD A RELATED LINK
                        </div>
                        <div class="basicInfoGrid">
                          <div>Link Name</div>
                          <input type="text" name="name" id="name" placeholder="required" required />
                        </div>
                        <div class="basicInfoGrid">
                          <div>URL Address</div>
                          <input type="text" name="url" id="startYear" placeholder="ex. 'https://www.google.com/'" required />
                        </div>
                        <button type="submit" name="addLink" class="btn btn-primary">
                          ADD LINK
                        </button>
                        <button class="btn">
                          @if ($userType == 'casualty')
                            <a href="{{ route('edit.casualty.index',['id' => $id, 'next_route' => 'casualty-list']) }}">
                              {{ __('CANCEL') }}
                            </a>
                          @elseif ($userType == 'recipient')
                            <a href="{{ route('edit.recipient.index',['id' => $id, 'next_route' => 'recipient-list']) }}">
                              {{ __('CANCEL') }}
                            </a>
                          @endif
                        </button>
                      </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
