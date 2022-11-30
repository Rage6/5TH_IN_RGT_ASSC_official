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
        @if ($cart)
          @foreach($cart as $item)
            @if ($item[3] > 0)
              <div class="col-md-6">
                <div class="card mb-3">
                  <div class="card-body">
                    <div>
                      {{ $item[3] }} x {{ $item[2] }} - ${{ $item[1] }}
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
        @endif
      </div>
      <script src="https://js.stripe.com/v3/"></script>
      <script>
          const stripe = Stripe('{{ env('STRIPE_KEY') }}')

          const elements = stripe.elements()
          const cardElement = elements.create('card')

          cardElement.mount('#purchase-element')

          //const form = document.getElementById('payment-form')
          const cardBtn = document.getElementById('card-button')
          const cardHolderName = document.getElementById('card-holder-name')

          /* form.addEventListener('submit', async (e) => {
              e.preventDefault()

              cardBtn.disabled = true
              const { setupIntent, error } = await stripe.confirmCardSetup(
                  cardBtn.dataset.secret, {
                      payment_method: {
                          card: cardElement,
                          billing_details: {
                              name: cardHolderName.value
                          }
                      }
                  }
              )

              if(error) {
                  cardBtn.disable = false
              } else {
                  let token = document.createElement('input')
                  token.setAttribute('type', 'hidden')
                  token.setAttribute('name', 'token')
                  token.setAttribute('value', setupIntent.payment_method)
                  form.appendChild(token)
                  form.submit();
              }
          }) */
          cardButton.addEventListener('click', async (e) => {
              const { paymentMethod, error } = await stripe.createPaymentMethod(
                  'card', cardElement, {
                      billing_details: { name: cardHolderName.value }
                  }
              );
          });
      </script>
    </div>
    @include ('footer.content')
  </div>
@stop
