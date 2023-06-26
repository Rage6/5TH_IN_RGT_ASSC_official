@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  MEMBER DIRECTORY
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
                      <u>MEMBER DIRECTORY</u>
                    </div>
                    <div style="width:100%">
                      @foreach ($all_members as $one_member)
                        <div style="margin-bottom:10px;display:grid;grid-template-columns:50% 50%">
                          <div>
                            @if ($one_member->title) {{ $one_member->title }} @endif {{ $one_member->first_name }} {{ $one_member->last_name }} @if ($one_member->suffix_name) {{ $one_member->suffix_name }} @endif
                          </div>
                          <div style="display:flex;flex-wrap:wrap">
                            @if ($can_edit == true)
                              <div>
                                <a href="{{ route('edit.member.index',['id' => $one_member->id]) }}">
                                  <button>
                                    UPDATE
                                  </button>
                                </a>
                              </div>
                            @endif
                            @if ($can_assign == true)
                              <div>
                                <a href="{{ route('admin.assign',['id' => $one_member->id]) }}">
                                  <button>
                                    ROLES
                                  </button>
                                </a>
                              </div>
                            @endif
                            @if ($can_delete == true)
                              <div>
                                <a href="{{ route('delete.member.index',['id' => $one_member->id]) }}">
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
                    {{ $all_members->links('pagination::default') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
