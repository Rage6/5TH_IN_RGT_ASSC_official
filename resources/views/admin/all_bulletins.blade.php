@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  BULLETIN DIRECTORY
                </div>
                <div class="card-body">
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                  @endif
                  <div>
                    <a href="{{ route('admin.index') }}"><< BACK</a>
                  </div>
                  <div>
                    <div>
                      <u>BULLETIN DIRECTORY</u>
                    </div>
                    <div style="width:100%">
                      @foreach ($all_bulletins as $one_bulletin)
                        <div style="margin-bottom:10px;display:grid;grid-template-columns:50% 50%">
                          <div>
                            {{ $one_bulletin->post_year }}, {{ $one_bulletin->season }}
                          </div>
                          <div style="display:flex;flex-wrap:wrap">
                            @if ($can_edit == true)
                              <div>
                                <a href="{{ route('edit.bulletin.index',['id' => $one_bulletin->id]) }}">
                                  <button>
                                    UPDATE
                                  </button>
                                </a>
                              </div>
                            @endif
                            @if ($can_delete == true)
                              <div>
                                <a href="{{ route('delete.bulletin.index',['id' => $one_bulletin->id]) }}">
                                  <button>
                                    DELETE
                                  </button>
                                </a>
                              </div>
                            @endif
                          </div>
                        </div>
                      @endforeach
                    </div>
                    {{ $all_bulletins->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
