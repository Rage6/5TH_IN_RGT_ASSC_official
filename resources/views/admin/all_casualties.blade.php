@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  CASUALTY DIRECTORY
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
                    <form method="POST" action="{{ route('edit.casualty.search') }}">
                      @csrf
                      <div class="bobcatSearchBox adminSearchBox">
                        <div>Search by first or last name</div>
                        <input type="text" @if ($name) value="{{ $name }}" @endif name="casualtyName"/>
                        <button type="submit" name="searchBttn">FIND</button>
                        <a href="{{ route('edit.casualty.list') }}">
                          <span>RESET</span>
                        </a>
                      </div>
                    </form>
                    <div>
                      <div style="width:100%">
                        @foreach ($all_casualties as $one_casualty)
                          <div style="margin-bottom:10px;display:grid;grid-template-columns:50% 50%">
                            <div>
                              {{ $one_casualty->last_name }}, {{ $one_casualty->first_name }} @if ($one_casualty->middle_name) {{ substr($one_casualty->middle_name,0,1) }}. @endif
                            </div>
                            <div style="display:flex;flex-wrap:wrap">
                              @if ($can_edit == true)
                                <div>
                                  <a href="{{ route('edit.casualty.index',[
                                    'id' => $one_casualty->id,
                                    'next_route' => 'casualty-list'
                                  ]) }}">
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
                      {{ $all_casualties->links('pagination::default') }}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
