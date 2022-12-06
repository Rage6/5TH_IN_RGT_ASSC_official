@extends('layouts.master')

@section('reunion_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/reunion/360_reunion.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/reunion/375_reunion.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/reunion/414_reunion.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/reunion/768_reunion.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/reunion/1366_reunion.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/reunion/1920_reunion.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/reunion/past_1920_reunion.css">
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
      <div class="row">
        <form method="POST" action="{{ route('items.add') }}">
          @csrf
          @php $count = 0 @endphp
          <table>
            <th>
              <td>Name</td>
              <td>Price</td>
              <td>Description</td>
              <td>Quantity</td>
            </th>
            @foreach($all_items as $item)
              <tr class="card mb-3">
                <td>
                  <input type="hidden" name="item_id_{{ $count }}" value="{{ $item->id }}">
                </td>
                <td class="card-title">
                  {{ $item->name }}
                  <input type="hidden" name="item_name_{{ $count }}" value="{{ $item->name }}">
                </td>
                <td class="card-header">
                  {{ $item->price }}
                  <input type="hidden" name="item_price_{{ $count }}" value="{{ $item->price }}" readonly>
                </td>
                <td class="card-text">
                  {{ $item->description }}
                </td>
                <td>
                  <input type="number" name="item_count_{{ $count }}" value="{{ $item->count }}">
                </td>
                <input type="hidden" name="item_return_{{ $count }}" value="{{ $item->purpose }}">
              </tr>
              @php $count++ @endphp
            @endforeach
          </table>
          <input type="hidden" name="count" value="{{ $count }}">
          <input type="hidden" name="purpose" value="{{ $purpose }}">
          <button class="btn btn-primary pull-right">
            CHECKOUT
          </button>
        </form>
        <div>
          <a href="{{ route($purpose) }}">
            << Continue Shopping
          </a>
        </div>
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
