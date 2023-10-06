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
                  @if ($search_type)
                    <div class="searchRow">
                      <a href="{{ route('edit.member.list',[
                        'search_type' => 'current'
                      ]) }}">
                        <span class="@if ($search_type == 'current') searchSelect @endif">
                          CURRENT
                        </span>
                      </a>
                      <a href="{{ route('edit.member.list',[
                        'search_type' => 'deceased'
                      ]) }}">
                        <span class="@if ($search_type == 'deceased') searchSelect @endif">
                          DECEASED
                        </span>
                      </a>
                      <a href="{{ route('edit.member.list',[
                        'search_type' => 'all'
                      ]) }}">
                        <span class="@if ($search_type == 'all') searchSelect @endif">
                          ALL
                        </span>
                      </a>
                    </div>
                  @endif
                  <div>
                    <div style="width:100%">
                      @foreach ($all_members as $one_member)
                        <div style="margin-bottom:10px;display:grid;grid-template-columns:50% 50%">
                          <div>
                            {{ $one_member->last_name }} @if ($one_member->suffix_name) {{ $one_member->suffix_name }} @endif , {{ $one_member->first_name }} @if ($one_member->middle_name) {{ substr($one_member->middle_name,0,1) }}. @endif
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
