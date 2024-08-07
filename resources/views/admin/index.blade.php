@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  ADMINISTRATION
                </div>
                <div class="card-body">
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                  @endif
                  <div>
                    <a href="{{ route('home') }}">
                      <button class="btn btn-secondary">
                        << BACK
                      </button>
                    </a>
                  </div>
                  <div class="card-body">
                    @foreach ($all_permission_data as $one_permission)
                      <!-- <ul class="list-group">
                        <li class="list-group-item"> -->
                          <a href="/{{ $one_permission->data[1] }}">
                            <button class="btn btn-primary col-12">
                              {{ $one_permission->data[0] }}
                            </button>
                          </a>
                        <!-- </li>
                      </ul> -->
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
  $unset_these = [
    $all_permission_data
  ];
  check_memory_limit($unset_these);
@endphp
@endsection
