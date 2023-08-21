@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE A HISTORICAL CONFLICT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('delete.conflict.list') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('delete.conflict.post',['id' => $id]) }}">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>Conflict Name</div>
                        <div>{{ $conflict->name }}</div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Time Span</div>
                        <div>{{ $conflict->start_year }} - {{ $conflict->end_year }}"</div>
                      </div>
                      @if (count($all_children) > 0)
                        <div class="basicInfoGrid">
                          <div>
                            Are there smaller conflicts within '{{ $conflict->name }}':
                          </div>
                          <div>
                            &#10060; '{{ $conflict->name }}' can only be deleted if it is disconnected from the following smaller conflicts:
                            <ul>
                              @foreach ($all_children as $one_conflict)
                                <li>
                                  {{ $one_conflict->name }}
                                </li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      @endif
                      @if ($casualty_count > 0)
                        <div class="basicInfoGrid">
                          <div>
                            Are there any casualties attached to this conflict?
                          </div>
                          <div>
                            &#10060; According to our records, there @if ($casualty_count == 1) was {{ $casualty_count }} Bobcat casualty @else were {{ $casualty_count }} Bobcat casualties @endif during the '{{ $conflict->name }}' and any other conflicts within it. For this reason, '{{ $conflict->name }}' cannot be deleted until no casualties are attached to it. You can use the 'Edit A Casualty' tool to fix this.
                          </div>
                        </div>
                      @endif
                      <button type="submit" name="addConflict" class="btn btn-primary" @if ($casualty_count > 0 || count($all_children) > 0) disabled @endif>
                        DELETE THIS CONFLICT
                      </button>
                      <button class="btn">
                        <a href="{{ route('delete.conflict.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
