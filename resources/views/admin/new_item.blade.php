@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD AN ITEM  ') }}</div>

                <div class="card-body">
                    <a href="{{ route('admin.index') }}">
                      << BACK
                    </a>
                    <form
                      method="POST"
                      action="{{ route('add.item.post') }}"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="basicInfoSubtitle">
                        CREATE A NEW ITEM
                      </div>
                      <br>
                      <div class="basicInfoGrid">
                        <div>Item Name</div>
                        <input name="itemTitle" id="itemTitle" placeholder="required" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Item Photo</div>
                        <input type="file" name="itemPhoto" id="itemPhoto" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Item Price</div>
                        <div>
                          $ <input style="width:90%" type="number" name="itemPrice" id="itemPrice" placeholder="required (max. of $9999)" min="0" max="9999.99" step="0.01" required />
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>Item Description</div>
                        <input name="itemDescription" maxlength="255" id="itemDescription" />
                      </div>
                      <div class="basicInfoGrid">
                        <div>How long does payment for this item last? This is mostly applicable to membership payments. Leave empty if this purchase will not expire.</div>
                        <div>
                          <input name="itemDuration" id="itemDuration" placeholder="ex. 1 year"/>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Is this item actually a donation option?
                        </div>
                        <div>
                          <select name="itemDonation" id="itemDonation">
                            <option value="0">NO</option>
                            <option value="1">YES</option>
                          </select>
                        </div>
                      </div>
                      <div class="basicInfoGrid">
                        <div>
                          Which page is this item related to?
                        </div>
                        <div>
                          <select name="itemRoute" id="itemRoute">
                            <option value="merchandise.index">
                              Merchandise
                            </option>
                            <option value="registration.index">
                              Memberships
                            </option>
                            <option value="reunion.index">
                              Reunions
                            </option>
                            <option value="donation.index">
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
                            <option value="0">NO</option>
                            <option value="1">YES</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="addItem" class="btn btn-primary">
                        ADD AN ITEM
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
