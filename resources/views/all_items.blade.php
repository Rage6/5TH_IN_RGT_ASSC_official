@extends('layouts.master')

@section('items_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/360_items.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/375_items.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/414_items.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/768_items.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/1366_items.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/1920_items.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/{{ config('app.url_ext') }}css/my_custom/items/past_1920_items.css">
  <script>
    function openAndCloseForm() {
      let currentDisplay = document.getElementById("reunionForm").style.display;
      let currentWidth = window.outerWidth;
      if (currentDisplay == 'none') {
        if (currentWidth < 1366) {
          document.getElementById("reunionForm").style.display = "block";
        } else {
          document.getElementById("reunionForm").style.display = "grid";
        };
      } else {
        document.getElementById("reunionForm").style.display = "none";
      };
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let formTop = document.getElementById("reunionForm").offsetTop;
      let scrollAmount = formTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    function clickSection(section,type) {
      // Opens the correct box...
      let allBoxes = document.querySelectorAll("[data-type='box']");
      for (let boxNum = 0; boxNum < allBoxes.length; boxNum++) {
        allBoxes[boxNum].style.display = "none";
      };
      let targetBox = document.querySelectorAll("[data-type='box'][data-section='"+section+"']")[0];
      targetBox.style.display = "block";
      // ...and scrolls down to opened box
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let targetTop = targetBox.offsetTop;
      let scrollAmount = targetTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    document.querySelectorAll('[data-type]');
  </script>
  @include ('footer.style')
@stop

@section('all_items_content')
  <div class="main">
    <div class="content">
      <div class="mainTitle">
        {{ $title }}
      </div>
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
            <!-- <pre>
              @php
                var_dump($all_items);
              @endphp
            </pre> -->
            <div class="itemList">
              @foreach($all_items as $item)
                @if (($item->members_only == 1 && $is_member == true) || $item->members_only == 0)
                  <!-- This gets the current price and amount -->
                  @php
                    for ($i = 0; $i < count($cookie_test); $i++) {
                      if ($cookie_test[$i][0] == $item->id) {
                        $price = $cookie_test[$i][2];
                        $amount = $cookie_test[$i][3];
                      };
                    };
                  @endphp
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
                      <div class="gridPhoto gridNoPhoto" style="background-image:url('/images/welcome/bobcat_logo_black_2-min.png')">
                        <div>NO PHOTO AVAILABLE</div>
                      </div>
                    @endif
                    <div class="gridDescription">
                      {{ $item->description }}
                    </div>
                    <div class="gridPrice">
                      <div>Price (USD)</div>
                      @if ($item->is_donation && $item->adjustable_price)
                        @if (isset($price))
                          <input type="number" name="item_price_{{ $count }}" min="0" max="9999.99" step="0.01" value="{{ $price }}">
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
                              @for ($i = 0; $i < count($all_sizes); $i++)
                                @php
                                  if ($all_sizes[$i] == $item->size) {
                                    $selected = true;
                                  } else {
                                    $selected = false;
                                  };
                                @endphp
                                <option value="{{$all_sizes[$i]}}" @if ($selected) selected @endif>
                                  {{ $all_sizes[$i] }}
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
                            for ($a = 0; $a < count($colors_split); $a++) {
                              $all_colors[] = $colors_split[$a];
                            };
                          @endphp
                          <div>
                            <select name="item_color_{{ $count }}">
                              @for ($i = 0; $i < count($all_colors); $i++)
                                @php
                                  if ($all_colors[$i] == $item->selected_color) {
                                    $selected = true;
                                  } else {
                                    $selected = false;
                                  };
                                @endphp
                                <option value="{{$all_colors[$i]}}" @if ($selected) selected @endif>
                                  {{ $all_colors[$i] }}
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

                            $patches_split = explode(",",$item->patches);

                            for ($a = 0; $a < count($patches_split); $a++) {
                              $all_patches[] = $patches_split[$a];
                            };
                          @endphp
                          <div>
                            <select name="item_patch_{{ $count }}">
                              @for ($i = 0; $i < count($all_patches); $i++)
                                @php
                                  if ($all_patches[$i] == $item->selected_patch) {
                                    $selected = true;
                                  } else {
                                    $selected = false;
                                  };
                                @endphp
                                <option value="{{$all_patches[$i]}}" @if ($selected) selected @endif>
                                  {{ $all_patches[$i] }}
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
                  @php
                    for ($i = 0; $i < count($cookie_test); $i++) {
                      if ($cookie_test[$i][0] == $item->id) {
                        $price = $cookie_test[$i][2];
                        $amount = $cookie_test[$i][3];
                      };
                    };
                  @endphp
                  <div class="gridItem">
                    <div class="gridName">
                      <div>{{ $item->name }}</div>
                    </div>
                    @if ($item->photo)
                      <div class="gridPhoto" style="background-image:url('/images/items/{{ $item->photo }}')">
                      </div>
                    @else
                      <div class="gridPhoto gridNoPhoto" style="background-image:url('/images/welcome/bobcat_logo_black_2-min.png')">
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
