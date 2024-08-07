@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  MEDAL OF HONOR RECIPIENT DIRECTORY
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
                    <div style="width:100%">
                      @foreach ($all_recipients as $one_recipient)
                        <div style="margin-bottom:10px;display:grid;grid-template-columns:50% 50%">
                          <div>
                            {{ $one_recipient->last_name }}, {{ $one_recipient->first_name }} @if ($one_recipient->middle_name) {{ substr($one_recipient->middle_name,0,1) }}. @endif
                          </div>
                          <div style="display:flex;flex-wrap:wrap">
                            @if ($can_edit == true)
                              <div>
                                <a href="{{ route('edit.recipient.index',['id' => $one_recipient->id]) }}">
                                  <button>
                                    UPDATE
                                  </button>
                                </a>
                              </div>
                            @endif

                          </div>
                        </div>
                      @endforeach
                    </div>
                    {{ $all_recipients->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
