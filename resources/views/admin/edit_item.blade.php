@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT AN ITEM  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('edit.item.list') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('edit.item.post',[
                        'id' => $item->id
                      ]) }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        EDIT AN ITEM
                      </div>
                      <br>
                      <div class="basicInfoGrid">
                        <div>Item Name</div>
                        <input name="itemTitle" value="{{ $item->name }}" id="itemTitle" placeholder="required" required />
                      </div>

                      <div class="imgGrid">
                        @if ($item->photo)
                          <div style="background-image: url('/images/items/{{ $item->photo }}')">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_landscape.png') }}')">
                          </div>
                        @endif
                        <div></div>
                        <input id="itemPhoto" type="file" class="form-control" name="itemPhoto">
                        <div></div>
                        <div>
                          @if ($item->photo)
                            <a href="{{ route('image.item.index',[
                              'id' => $item->id,
                              'img_type' => 'items',
                              'edit_type' => 'item'
                            ]) }}">
                              <span class="btn btn-danger">
                                REMOVE
                              </span>
                            </a>
                          @else
                            <div>
                              <a>No image found</a>
                            </div>
                          @endif
                        </div>
                      </div>

                      <div class="basicInfoGrid">
                        <div>Item Price</div>
                        <div>
                          $ <input style="width:90%" type="number" name="itemPrice" value="{{ $item->price }}" id="itemPrice" placeholder="required (max. of $9999)" min='0' max="9999.99" step="0.01" required />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Item Description</div>
                        <input name="itemDescription" value="{{ $item->description }}" maxlength="255" id="itemDescription" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>How long does payment for this item last? This is mostly applicable to membership payments. Leave empty if this purchase will not expire.</div>
                        <div>
                          <input name="itemDuration" value="{{ $item->how_long }}" id="itemDuration" placeholder="ex. 1 year"/>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this item actually a donation option?
                        </div>
                        <div>
                          <select name="itemDonation" id="itemDonation">
                            <option value="0" @if ($item->is_donation == 0) selected @endif>NO</option>
                            <option value="1" @if ($item->is_donation == 1) selected @endif>YES</option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Which page is this item related to?
                        </div>
                        <div>
                          <select name="itemRoute" id="itemRoute">
                            <option value="merchandise.index" @if ($item->purpose == "merchandise.index") selected @endif>
                              Merchandise
                            </option>
                            <option value="reunion.index" @if ($item->purpose == "reunion.index") selected @endif>
                              Reunions
                            </option>
                            <option value="registration.index" @if ($item->purpose == "registration.index") selected @endif>
                              Memberships
                            </option>
                            <option value="donation.index" @if ($item->purpose == "donation.index") selected @endif>
                              Donations
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Can the user decide how much to pay? This is usually for things like donations. The price set above will be ignored.
                        </div>
                        <div>
                          <select name="itemAdjust" id="itemAdjust">
                            <option value="0" @if ($item->adjustable_price == 0) selected @endif>NO</option>
                            <option value="1" @if ($item->adjustable_price == 1) selected @endif>YES</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="addItem" class="btn btn-primary">
                        EDIT AN ITEM
                      </button>
                      <button class="btn">
                        <a href="{{ route('edit.item.list') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
