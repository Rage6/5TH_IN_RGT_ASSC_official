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

@section('cart_content')
  <div class="main">
    <div class="content">
      <div class="row">
        @if ($count > 0)
          @foreach($cart as $item)
            @if ($item[3] > 0)
              <div class="col-md-6">
                <div class="card mb-3">
                  <div class="card-body">
                    <div>
                      {{ $item[3] }} x ${{ $item[2] }} - {{ $item[1] }} ||  <b><a href="/items?purpose={{ $item[4] }}">CHANGE</a></b>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        @else
          <div>
            No items selected
          </div>
          <div>
            <a href="/items?purpose={{ $purpose }}"><< Return to the store</a>
          </div>
        @endif
      </div>
      <form method="POST" action="{{ route('items.purchase') }}" class="card-form mt-3 mb-3">
          @csrf
          <input type="hidden" name="payment_method" class="payment-method">
          <input class="StripeElement mb-3" name="card_holder_name" placeholder="Card holder name" required>
          <input type="hidden" name="text_cart" value="{{ $text_cart }}">
          <div class="col-lg-4 col-md-6">
              <div id="card-element"></div>
          </div>
          <div id="card-errors" role="alert"></div>
          <div class="form-group mt-3">
              <button type="submit" class="btn btn-primary pay">
                  Purchase
              </button>
          </div>
      </form>
      <!-- <pre>{{ var_dump($cart); }}</pre> -->
    </div>
    @include ('footer.content')
  </div>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
      let stripe = Stripe("{{ env('STRIPE_KEY') }}")
      let elements = stripe.elements()
      let style = {
          base: {
              color: '#32325d',
              fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
              fontSmoothing: 'antialiased',
              fontSize: '16px',
              '::placeholder': {
                  color: '#aab7c4'
              }
          },
          invalid: {
              color: '#fa755a',
              iconColor: '#fa755a'
          }
      }
      let card = elements.create('card', {style: style})
      card.mount('#card-element')
      let paymentMethod = null
      $('.card-form').on('submit', function (e) {
          $('button.pay').attr('disabled', true)
          if (paymentMethod) {
              return true
          }
          stripe.confirmCardSetup(
              "{{ $intent->client_secret }}",
              {
                  payment_method: {
                      card: card,
                      billing_details: {name: $('.card_holder_name').val()}
                  }
              }
          ).then(function (result) {
              if (result.error) {
                  $('#card-errors').text(result.error.message)
                  $('button.pay').removeAttr('disabled')
              } else {
                  paymentMethod = result.setupIntent.payment_method
                  $('.payment-method').val(paymentMethod)
                  $('.card-form').submit()
              }
          })
          return false
      })
  </script>
@stop
