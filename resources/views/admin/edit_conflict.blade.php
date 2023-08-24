@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT A HISTORICAL CONFLICT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.conflict.list') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('edit.conflict.post',['id' => $id]) }}">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>Conflict Name</div>
                        <input name="name" id="name" value="{{ $conflict->name }}" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>First Year</div>
                        <input type="number" name="startYear" id="startYear" value="{{ $conflict->start_year }}" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Year</div>
                        <input type="number" name="endYear" id="endYear" value="{{ $conflict->end_year }}" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Was '{{ $conflict->name }}' part of a larger conflict? If so, select the overall conflict here.
                        </div>
                        @if (count($all_children) == 0)
                          <div>
                            <select name="parentId">
                              <option value="0">
                                N/A
                              </option>
                              @foreach ($all_parents as $one_conflict)
                                @if ($one_conflict->id != $conflict->id)
                                  <option @if ($parent_conflict && $one_conflict->id == $parent_conflict->id) selected @endif value="{{ $one_conflict->id }}">
                                    {{ $one_conflict->name }}
                                  </option>
                                @endif
                              @endforeach
                            </select>
                          </div>
                        @else
                          <div>
                            <i>'{{ $conflict->name }}' cannot have a 'parent' conflict because it is currently a 'parent' conflict too. To make this change possible, remove it's 'child' conflicts below first.</i>
                          </div>
                        @endif
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          This is a list of the conflict that took place within '{{ $conflict->name }}'.
                        </div>
                        <div>
                          @if ($parent_conflict == null)
                            @if (count($all_children) > 0)
                              <ul>
                                @foreach ($all_children as $one_child)
                                  <li>
                                    <a href="{{ route('edit.conflict.index',['id' => $one_child->id]) }}">{{ $one_child->name }}
                                  </li>
                                @endforeach
                              </ul>
                            @else
                              <i>
                                No conflicts took place within '{{ $conflict->name }}'.
                              </i>
                            @endif
                          @else
                            <i>
                              '{{ $conflict->name }}' cannot have conflicts within it because it is already within the '{{ $parent_conflict->name }}' conflict.
                            </i>
                          @endif
                        </div>
                      </div>
                      <button type="submit" name="addConflict" class="btn btn-primary">
                        UPDATE CONFLICT CHANGES
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.conflict.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
