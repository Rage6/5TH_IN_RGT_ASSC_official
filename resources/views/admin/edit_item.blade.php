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
                        <div>ITEM PHOTO</div>
                        <div></div>
                        @if ($item->photo)
                          <div style="background-image: url('/images/items/{{ $item->photo }}')" class="img">
                          </div>
                        @else
                          <div style="background-image: url('{{ url('/images/default_landscape.png') }}')" class="img">
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
                        <div>Clothing Sizes</div>
                        <input name="itemSizes" value="{{ $item->sizes }}" maxlength="255" id="itemSizes" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Clothing Colors</div>
                        <input name="itemColors" value="{{ $item->colors }}" maxlength="255" id="itemColors" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Clothing Patches (if applicable)</div>
                        <input name="itemPatches" value="{{ $item->patches }}" maxlength="255" id="itemPatches" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>If this item expire, how long will it last?</div>
                        <div>
                          <span>
                            @if ($year_count)
                              <input name="itemDurationYear" id="itemDurationYear" type="number" min="0" value="{{ $year_count }}"/> year(s) +
                            @else
                              <input name="itemDurationYear" id="itemDurationYear" type="number" min="0" value="0"/> year(s) +
                            @endif
                          </span>
                          <span>
                            @if ($day_count)
                              <input name="itemDurationDay" id="itemDurationDay" type="number" min="0" value="{{ $day_count }}"/> day(s)
                            @else
                              <input name="itemDurationDay" id="itemDurationDay" type="number" min="0" value="0"/> day(s)
                            @endif
                          </span>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this item out of stock right now?
                        </div>
                        <div>
                          <select name="itemStockStatus" id="itemRoute">
                            <option value="0" @if ($item->out_of_stock == 0) selected @endif >
                              NO
                            </option>
                            <option value="1" @if ($item->out_of_stock == 1) selected @endif >
                              YES
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Can anyone pay for this item, or only members?
                        </div>
                        <div>
                          <select name="itemMembership" id="itemRoute">
                            <option value="0" @if ($item->members_only == 0) selected @endif >
                              Anyone
                            </option>
                            <option value="1" @if ($item->members_only == 1) selected @endif>
                              Members Only
                            </option>
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
                          Is this item a donation option?
                        </div>
                        <div>
                          <select name="itemDonation" id="itemDonation">
                            <option value="0" @if ($item->is_donation == 0) selected @endif>NO</option>
                            <option value="1" @if ($item->is_donation == 1) selected @endif>YES</option>
                          </select>
                        </div>
                      </div>
                      <div class="basicSubinfoGrid">
                        <div>
                          - Can the donor choose their amount, or only your preset 'item price'?
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
