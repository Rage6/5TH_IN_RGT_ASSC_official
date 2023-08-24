@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD A BOBCAT  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.index') }}">
                      << BACK
                    </a>
                    <form method="POST" action="{{ route('new.conflict.post') }}">
                      @csrf
                      <div class="basicInfoSubtitle">
                        ADD A HISTORICAL CONFLICT
                      </div>
                      <div class="basicInfoGrid">
                        <div>Conflict Name</div>
                        <input name="name" id="name" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>First Year</div>
                        <input type="number" name="startYear" id="startYear" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Year</div>
                        <input type="number" name="endYear" id="endYear" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Were there any Bobcat casualties due to this conflict?
                        </div>
                        <div>
                          <select name="hasCasualties">
                            <option selected value="0">
                              No
                            </option>
                            <option value="1">
                              Yes
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Did any Bobcats earn the Congressional Medal of Honor during this conflict?
                        </div>
                        <div>
                          <select name="hasRecipients">
                            <option selected value="0">
                              No
                            </option>
                            <option value="1">
                              Yes
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          If this conflict within a larger conflict, then select its overall 'parent' war/conflict.
                        </div>
                        <div>
                          <select name="parentId">
                            <option selected value="0">
                              N/A
                            </option>
                            @foreach ($all_parents as $one_conflict)
                              <option value="{{ $one_conflict->id }}">
                                {{ $one_conflict->name }}
                              </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="addConflict" class="btn btn-primary">
                        ADD A CONFLICT
                      </button>
                      <button class="btn">
                        <a href="{{ route('admin.index') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
