@extends('layouts.master')

@include('items.style')

@section('all_items_content')
  <div class="main">
    <div class="content">
      <div class="mainTitle">
        {{ $title }}
      </div>
      @if (session('submit_message'))
        <div class="message">
          @php
            $message = explode('>>>',session('submit_message'));
          @endphp
          @for ($i = 0; $i < count($message); $i++)
            <div>{{ $message[$i] }}</div>
          @endfor
        </div>
      @endif
      <div>
        <form method="POST" action="{{ route('items.add') }}">
          @csrf
          @php $count = 0 @endphp
          <div>
            <div class="itemDirections">
              @if ($purpose == "merchandise.index")
                <a href="{{ route('welcome') }}">
                  << RETURN
                </a>
              @else
                <a href="{{ route($purpose) }}">
                  << RETURN
                </a>
              @endif
              <input type="submit" value="CHECKOUT"/>
            </div>
            <div class="itemList">
              @foreach($all_items as $item)

                <!-- This gets the current price and amount -->
                @php
                  if (count($selected_array) > 0) {
                    for ($j = 0; $j < count($selected_array); $j++) {
                      if ($selected_array[$j]->id == $item->id) {
                        $item->count = $selected_array[$j]->count;
                        if ($selected_array[$j]->price) {
                          $item->price = $selected_array[$j]->price;
                        };
                        if (isset($selected_array[$j]->size)) {
                          $item->size = $selected_array[$j]->size;
                        };
                        if (isset($selected_array[$j]->color)) {
                          $item->color = $selected_array[$j]->color;
                        };
                        if (isset($selected_array[$j]->patches)) {
                          $item->selected_patch = $selected_array[$j]->patches;
                        };
                      };
                    };
                  };
                @endphp
                
                @if (($item->members_only == 1 && $is_member == true) || $item->members_only == 0)
                  <div class="gridItem">
                    <div>
                      <input type="hidden" name="item_id_{{ $count }}" value="{{ $item->id }}">
                    </div>
                    <div class="gridName">
                      <div>{{ $item->name }}</div>
                      <input type="hidden" name="item_name_{{ $count }}" value="{{ $item->name }}">
                    </div>
                    @if ($item->photo)
                      <div class="gridPhoto" style="background-image:url('/images/items/{{ $item->photo }}')">
                      </div>
                    @else
                      <div class="gridPhoto gridNoPhoto" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('/images/welcome/bobcat_logo_black_2-min.png')">
                        <div>NO PHOTO AVAILABLE</div>
                      </div>
                    @endif
                    <div class="gridDescription">
                      {{ $item->description }}
                    </div>
                    <div class="gridPrice">
                      <div>Price (USD)</div>
                      @if ($item->is_donation && $item->adjustable_price)
                        @if ($item->price)
                          <input type="number" name="item_price_{{ $count }}" min="0" max="9999.99" step="0.01" value="{{ $item->price }}">
                        @else
                          <input type="number" name="item_price_{{ $count }}" min="0" max="9999.99" step="0.01" value="0">
                        @endif
                      @else
                        @if (count(explode(".",$item->price)) > 1)
                          @if (strlen(explode(".",$item->price)[1]) == 1)
                            <div>${{ $item->price."0" }}</div>
                          @else
                            <div>${{ $item->price }}</div>
                          @endif
                        @else
                          <div>${{ $item->price.".00" }}</div>
                        @endif
                        <input type="hidden" name="item_price_{{ $count }}" min="0" max="9999.99" step="0.01" value="{{ $item->price }}" readonly>
                      @endif
                    </div>
                    <div class="gridCount">
                      <div>Quantity</div>
                      @if ($item->out_of_stock == 0)
                        @if (!$item->set_quantity)
                          @if ($item->count)
                            <input type="number" name="item_count_{{ $count }}" value="{{ $item->count }}" min="0">
                          @else
                            <input type="number" name="item_count_{{ $count }}" value="0" min="0">
                          @endif
                        @else
                          <span>{{ $item->set_quantity }}</span>
                          <input type="hidden" name="item_count_{{ $count }}" value="{{ $item->set_quantity }}" readonly>
                        @endif
                      @else
                        <span>OUT OF STOCK</span>
                        <input type="hidden" name="item_count_{{ $count }}" value="0" readonly>
                      @endif
                    </div>
                    <div class="gridOptions">
                      @if ($item->sizes)
                        <div class="oneOption">
                          <div>Size</div>
                          @php
                            $all_sizes = [];
                            $sizes_string = str_replace(" ","",$item->sizes);
                            $sizes_split = explode(",",$sizes_string);
                            for ($a = 0; $a < count($sizes_split); $a++) {
                              $all_sizes[] = $sizes_split[$a];
                            };
                          @endphp
                          <div>
                            <select name="item_size_{{ $count }}">
                              @for ($b = 0; $b < count($all_sizes); $b++)
                                @php
                                  if ($all_sizes[$b] == $item->size) {
                                    $selected = true;
                                  } else {
                                    $selected = false;
                                  };
                                @endphp
                                <option value="{{$all_sizes[$b]}}" @if ($selected) selected @endif>
                                  {{ $all_sizes[$b] }}
                                </option>
                              @endfor
                            </select>
                          </div>
                        </div>
                      @endif
                      @if ($item->colors)
                        <div class="oneOption">
                          <div>Color</div>
                          @php
                            $all_colors = [];
                            $colors_string = str_replace(" ","",$item->colors);
                            $colors_split = explode(",",$colors_string);
                            for ($c = 0; $c < count($colors_split); $c++) {
                              $all_colors[] = $colors_split[$c];
                            };
                          @endphp
                          <div>
                            <select name="item_color_{{ $count }}">
                              @for ($d = 0; $d < count($all_colors); $d++)
                                @php
                                  if ($all_colors[$d] == str_replace(" ","",$item->color)) {
                                    $selected = true;
                                  } else {
                                    $selected = false;
                                  };
                                @endphp
                                <option value="{{$all_colors[$d]}}" @if ($selected) selected @endif>
                                  {{ $all_colors[$d] }}
                                </option>
                              @endfor
                            </select>
                          </div>
                        </div>
                      @endif
                      @if ($item->patches)
                        <div class="oneOption">
                          <div>Patches</div>
                          @php
                            $all_patches = [];
                            $patches_string = str_replace(" ","",$item->patches);
                            $patches_split = explode(",",$patches_string);
                            for ($e = 0; $e < count($patches_split); $e++) {
                              $all_patches[] = $patches_split[$e];
                            };
                          @endphp
                          <div>
                            <select name="item_patch_{{ $count }}">
                              @for ($f = 0; $f < count($all_patches); $f++)
                                @php
                                  if ($all_patches[$f] == $item->selected_patch) {
                                    $selected = true;
                                  } else {
                                    $selected = false;
                                  };
                                @endphp
                                <option value="{{$all_patches[$f]}}" @if ($selected) selected @endif>
                                  {{ $all_patches[$f] }}
                                </option>
                              @endfor
                            </select>
                          </div>
                        </div>
                      @endif
                    </div>
                    <div>
                      <input type="hidden" name="item_return_{{ $count }}" value="{{ $item->purpose }}">
                    </div>
                  </div>
                  @php $count++ @endphp
                @else
                  <div class="gridItem">
                    <div class="gridName">
                      <div>{{ $item->name }}</div>
                    </div>
                    @if ($item->photo)
                      <div class="gridPhoto" style="background-image:url('/images/items/{{ $item->photo }}')">
                      </div>
                    @else
                      <div class="gridPhoto gridNoPhoto" style="background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('/images/welcome/bobcat_logo_black_2-min.png')">
                        <div>NO AVAILABLE PHOTO</div>
                      </div>
                    @endif
                    <div class="gridDescription">
                      {{ $item->description }}
                    </div>
                    <div class="gridCount">
                      <div>Quantity</div>
                      @if ($item->out_of_stock == 1)
                        <div>
                          <b>OUT OF STOCK</b>
                        </div>
                      @else
                        <div>
                          ---
                        </div>
                      @endif
                    </div>
                    <div class="gridPrice">
                      <div>Price (USD)</div>
                      @if ($item->is_donation && $item->adjustable_price)
                        <div>
                          ---
                        </div>
                      @else
                        <div>${{ $item->price }}</div>
                      @endif
                    </div>
                    <div class="gridMember">
                      @if ($item->members_only == 1 && $is_member == false)
                        <div>
                          <a href="{{ route('registration.index') }}">
                            <b>MEMBERSHIP REQUIRED</b>
                          </a>
                        </div>
                      @endif
                    </div>
                  </div>
                  @php $count++ @endphp
                @endif
              @endforeach
            </div>
          </div>
          <input type="hidden" name="count" value="{{ $count }}">
          <input type="hidden" name="purpose" value="{{ $purpose }}">
          <input type="hidden" name="title" value="{{ $title }}">
        </form>
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
