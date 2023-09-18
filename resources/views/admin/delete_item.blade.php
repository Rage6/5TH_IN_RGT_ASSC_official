@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELETE AN ITEM  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('delete.item.list') }}">
                      << BACK
                    </a>

                    <div class="basicInfoSubtitle">
                      DELETE AN ITEM
                    </div>
                    <div class="basicInfoGrid">
                      <div>Item Name</div>
                      <div>{{ $item->name }}</div>
                    </div>
                    <div class="imgGrid">
                      @if ($item->photo)
                        <div style="background-image: url('/images/items/{{ $item->photo }}')">
                        </div>
                      @else
                        <div style="background-image: url('{{ url('/images/default_profile.jpeg') }}')">
                        </div>
                      @endif
                      <div></div>
                    </div>
                    <form
                      method="POST"
                      action="{{ route('delete.item.post',[ 'id' => $id ]) }}">
                      @csrf
                      <button type="submit" name="deleteItem" class="btn btn-danger">
                        DELETE ITEM
                      </button>
                      <button class="btn">
                        <a href="{{ route('delete.item.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
