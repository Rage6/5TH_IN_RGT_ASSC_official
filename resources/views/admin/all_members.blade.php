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
                  <div class="bobcatList">
                    <form method="POST" action="{{ route('edit.member.search',['search_type' => $search_type]) }}">
                      @csrf
                      <div class="bobcatSearchBox adminSearchBox">
                        <div>Search by first or last name</div>
                        <input type="text" @if ($name) value="{{ $name }}" @endif name="memberName"/>
                        <button type="submit" name="searchBttn">FIND</button>
                        <a href="{{ route('edit.member.list') }}">
                          <span>RESET</span>
                        </a>
                      </div>
                    </form>
                    <div>
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
                      <div style="width:100%">
                        @foreach ($all_members as $one_member)
                          @php
                            if ($one_member->expiration_date != null && $one_member->deceased == 1) {
                              $background_color = "color:white;background-color:rgba(0,0,0,0.7);";
                            } elseif ($one_member->expiration_date < date("Y-m-d h:i:s") && $one_member->expiration_date != "1970-01-01 00:00:00") {
                              $background_color = "background-color:rgba(255,0,0,0.3);";
                            } else { 
                              $background_color = "";
                            };
                          @endphp
                          <div style="
                            margin-bottom:10px;
                            display:grid;
                            grid-template-columns:50% 50%;
                            {{ $background_color }}">
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
</div>
@endsection
