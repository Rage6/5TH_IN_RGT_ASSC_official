@extends('layouts.master')

@section('reunion_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/360_reunion.php">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/375_reunion.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/414_reunion.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/768_reunion.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/1366_reunion.php">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/1920_reunion.php">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="{{ config('app.url_ext') }}/css/my_custom/reunion/past_1920_reunion.php">
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

@section('reunion_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          <span>Bobcat</span> <span>Reunion</span>
        </div>
        <div class="reunionDate dateAndLocation">
          August 23 - 28
        </div>
        <div class="reunionLocation dateAndLocation">
          Colorado Springs, CO
        </div>
        <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
          Register Now!
        </div>
      </div>
      <div class="regForm" id="reunionForm" style="display:none">
        <div>
          <!-- <div class="regPart">
            PART 1
          </div> -->
          <form method="POST" action="/reunion/registration">
            @csrf
            <div class="regFormFull">
              <div class="regFormHalf">
                <div class="regFormBasic">
                  <div class="regFormSubtitles">
                    Basic Information
                  </div>
                  @auth
                    <input required type='text' name='first_name' value='{{ $this_user->first_name }}' placeholder='First Name'/>
                    <input required type='text' name='last_name' value='{{ $this_user->last_name }}' placeholder='Last Name'/>
                    <input required type='email' name='email' value='{{ $this_user->email }}' placeholder='Email'/>
                  @else
                    <input required type='text' name='first_name' placeholder='First Name'/>
                    <input required type='text' name='last_name' placeholder='Last Name'/>
                    <input required type='email' name='email' placeholder='Email'/>
                  @endauth
                  <input required type='tel' name='phone_number' placeholder='Phone Number'/>
                </div>
                <div class="regFormBasic">
                  <div class="regFormSubtitles">
                    Arrival Date
                  </div>
                  <input type='date' name='arrival_date' placeholder='mm/dd/yyyy'/>
                  <div class="regFormSubtitles">
                    Additional Guests
                  </div>
                  <input id='guestNum' type='number' min='0' name='guest_num' value='0'/>
                  <input type='text' name='guest_names' placeholder='Guest Name(s)'/>
                </div>
              </div>
              <div class="regFormHalf">
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending: the US Olympic Museum & Garden of the Gods Tour (lunch included)?
                  </div>
                  <input type='radio' name='event_one' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_one' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending: the Royal Gorge Railroad Tour ($20 lunch voucher)?
                  </div>
                  <input type='radio' name='event_two' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_two' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending: the Memorial Service at Fort Carson?
                  </div>
                  <input type='radio' name='event_three' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_three' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you have a military ID?
                  </div>
                  <input type='radio' name='mil_id' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='mil_id' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Does your companion have a military ID?
                  </div>
                  <input type='radio' name='comp_mil_id' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='comp_mil_id' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the ladies breakfast 9am Saturday morning? There is no charge.
                  </div>
                  <input type='radio' name='ladies_breakfast' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='ladies_breakfast' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Are you driving?
                  </div>
                  <input type='radio' name='driving' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='driving' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Is this your first reunion?
                  </div>
                  <input type='radio' name='first_reunion' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='first_reunion' value='No'/><span>No</span>
                </div>
                <textarea rows="4" class="commentArea" name='comments' placeholder='Comments...'></textarea>
              </div>
            </div>
            <button>REGISTER</button>
          </form>
        </div>
      </div>
      <div class="regRow">
        <div class="regSection hotelSection">
          <div
            class="reunionSectBttn"
            data-section="hotel"
            data-type="button"
            onclick="clickSection('hotel','button')">HOTEL DETAILS</div>
        </div>
        <div class="regSection dayOneSection">
          <div
            class="reunionSectBttn"
            data-section="wednesday"
            data-type="button"
            onclick="clickSection('wednesday','button')">WEDNESDAY</div>
        </div>
        <div class="regSection dayTwoSection">
          <div
            class="reunionSectBttn"
            data-section="thursday"
            data-type="button"
            onclick="clickSection('thursday','button')">THURSDAY</div>
        </div>
        <div class="regSection dayThreeSection">
          <div
            class="reunionSectBttn"
            data-section="friday"
            data-type="button"
            onclick="clickSection('friday','button')">FRIDAY</div>
        </div>
        <div class="regSection dayFourSection">
          <div
            class="reunionSectBttn"
            data-section="saturday"
            data-type="button"
            onclick="clickSection('saturday','button')">SATURDAY</div>
        </div>
        <div class="regSection paymentSection">
          <div
            class="reunionSectBttn"
            data-section="payment"
            data-type="button"
            onclick="clickSection('payment','button')">PAYMENT OPTIONS</div>
        </div>
      </div>
      <div
        class="hotelBox reunionSectBox"
        data-section="hotel"
        data-type="box">
        <div class="boxTitle">
          Hotel Details
        </div>
        <div class="boxContent hotelContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              Location:
            </div>
            <div class="boxSubcontent">
              Embassy Suites Colorado Springs</br>
              7290 Commerce Center Drive,</br>
              Colorado Springs, CO, 80919</br>
            </div>
            <div class="hotelMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3103.4452133814566!2d-104.81607328466578!3d38.93665625223428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87134e6e6f594951%3A0x3a98a2a746854c62!2sEmbassy%20Suites%20by%20Hilton%20Colorado%20Springs!5e0!3m2!1sen!2sus!4v1642640943331!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div>
            <div class="boxTotal">
              <div class="boxSubtitle">
                Hotel Amenities:
              </div>
              <ul>
                <li>
                  Free parking
                </li>
                <li>
                  Free 2-hour Cocktail (5-7) Nightly
                </li>
                <li>
                  Breakfast for 2 included in Room Rate​
                </li>
                <li>
                  Free Wi-Fi
                </li>
                <li>
                  Uber, Lyft, or Yellow Cab for appx. $50. No Airport Shuttle.
                </li>
              </ul>
            </div>
            <div class="boxTotal">
              <div class="boxSubtitle">
                Cost:
              </div>
              <div class="boxSubcontent">
                <ul>
                  <li>King 2 Room Suite - $129</li>
                  <li>Queens 2 Room Suite - $139</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="boxTotal" id="hotelReservation">
            <div class="boxSubtitle">
              Reservations:
            </div>
            <div class="boxSubcontent">
              <div class="rowIntro">To make a reservation:</div>
              <div class="reservationRow">
                <a href="https://nam02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fwww.hilton.com%2Fen%2Fbook%2Freservation%2Fdeeplink%2F%3Fctyhocn%3DCOSCCES%26groupCode%3DCESX5I%26arrivaldate%3D2022-08-23%26departuredate%3D2022-08-28%26cid%3DOM%2CWW%2CHILTONLINK%2CEN%2CDirectLink%26fromId%3DHILTONLINKDIRECT&data=04%7C01%7CSheri.Neely%40Hilton.com%7C3f2b4922d4064723085408d9db8e0ea4%7C660292d2cfd54a3db7a7e8f7ee458a0a%7C0%7C0%7C637782225433341539%7CUnknown%7CTWFpbGZsb3d8eyJWIjoiMC4wLjAwMDAiLCJQIjoiV2luMzIiLCJBTiI6Ik1haWwiLCJXVCI6Mn0%3D%7C3000&sdata=EXpEdvfMdIJEiTZmhgnjkw7GZS%2FXxqlniScPS5aacdE%3D&reserved=0" target="_blank" style="cursor:pointer">
                  <div class="reserveBttn">
                    BOOK ONLINE
                  </div>
                </a>
                <div>
                  <div>
                    <u>Book By Phone</u>
                  </div>
                  <div>
                    Call (719) 599-9100 and, when booking, tell them "5th Infantry Regiment Association". Booking prices are good up to 3 days before and after the reunion dates. Reservations must be made by Friday, July 22nd, 2022.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox wednesdayBox"
        data-section="wednesday"
        data-type="box">
        <div class="boxTitle">
          Wednesday, Aug. 24th, 10:00 am - 3:30 pm
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              U.S. Olympic & Paralympic Museum (10 - 12)
            </div>
            <div class="boxSubcontent">
              With 60,000 square feet of space, the new <a href="https://usopm.org" target="_blank">U.S. Olympic & Paralympic Museum</a> is a top attraction in downtown Colorado Springs — Olympic City USA. The museum showcases the history of some of America’s greatest athletes and features artifacts, interactive exhibits and immersive technology that embody the Olympic and Paralympic movements. The 12 galleries will take you on a journey through the personal struggles and career-defining moments of Team USA's athletes.
            </div>
            <div class="reunionBoxImg shuttle"></div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Riding Tour @ Garden of the Gods (2 - 3:30)
            </div>
            <div class="reunionBoxImg winery"></div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Lunch (12:30 - 2)
            </div>
            <div class="boxSubcontent">
              <!-- Make your lunch selection in the shopping cart. Choice of our picnic-style wraps include: -->
              Lunches will be found at the "Garden of the Gods Trading Post". The lunch options include:
              <ul>
                <li>
                  <u>Garden of the Gods Special</u>: Assorted Roast Beef, Ham, and Turkey Sandwiches, Soup of the Day, Creamy Potato Salad, Assorted Dessert, Bars, Beverage Station
                </li>
              </ul>
              <div>
                NOTE: Lunch prices will be included in the tour total cost
              </div>
            </div>
            <div class="boxTotal">
              <div class="boxSubtitle">
                Total Cost
              </div>
              <div class="boxSubcontent">
                $79 (Tour + Lunch)
              </div>
              <a href="{{ route('items.all',['purpose'=>'reunion.index','title'=>'Reunion Fee and Options']) }}">
                <div
                  class="reserveBttn"
                  onclick="clickSection('payment','button')">
                  ADD TO CART
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox thursdayBox"
        data-section="thursday"
        data-type="box">
        <div class="boxTitle">
          Thursday, Aug. 25th, 9:00 am - 4:00 pm
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              Royal Gorge Route Railroad
            </div>
            <div class="boxSubcontent">
              This is Colorado's first and only full-service railroad dining experience. The Royal Gorge Route Railroad features beautifully restored mid-century coach, dining, bar and lounge, and dome cars with luxurious seating. Take in the panoramic views from your seat or the open-air car. Full bar and extensive, well-curated wine list always available. A $20 food voucher will be issued per person toward the purchase of their meal along with their ticket.
            </div>
            <div class="reunionBoxImg memorialCollage collageImgA">
              <div class="oneCorner upperLeft"></div>
              <div class="oneCorner upperRight"></div>
              <div class="oneCorner lowerLeft"></div>
              <div class="oneCorner lowerRight"></div>
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  Vista Dome Option: $125
                </li>
                <li>
                  Club Car Option: $109
                </li>
              </ul>
              <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div>
              <a href="{{ route('items.all',['purpose'=>'reunion.index','title'=>'Reunion Fee and Options']) }}" style="cursor:pointer">
                <div
                  class="reserveBttn">
                  ADD TO CART
                </div>
              </a>
            </div>
          </div>
          <div class="reunionBoxImg memorialCollage collageImgB">
            <div class="oneCorner upperLeft"></div>
            <div class="oneCorner upperRight"></div>
            <div class="oneCorner lowerLeft"></div>
            <div class="oneCorner lowerRight"></div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox fridayBox"
        data-section="friday"
        data-type="box">
        <div class="boxTitle">
          Friday, Aug. 26th, 9:00 am - 4:00 pm
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              TBA
            </div>
            <div class="boxSubcontent">
              TBA
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  TBA
                </li>
              </ul>
              <a href="{{ route('items.all',['purpose'=>'reunion.index','title'=>'Reunion Fee and Options']) }}">
                <div
                  class="reserveBttn">
                  ADD TO CART
                </div>
              </a>
            </div>
            <div class="reunionBoxImg army_museum"></div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox hotelBox"
        data-section="saturday"
        data-type="box">
        <div class="boxTitle">
          Saturday, Aug. 27th
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              Morning Schedule
            </div>
            <div class="boxSubcontent">
              <div class="banquetList">
                <div>+ General Membership Meeting</div>
                <div>0900 - 1000</div>
                <div>+ Ladies Breakfast</div>
                <div>0900 - 1000</div>
                <div>+ Fragging</div>
                <div>1030 - 1100</div>
              </div>
              <div>
                Feel free to explore the surrounding area, Colorado Springs, while waiting for the evening banquet.
              </div>
              <iframe style="margin-top:40px" width="auto" height="auto" src="https://www.youtube.com/embed/OcxUYUXg0xg" title="Colorado Springs, CO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Dinner Choices
            </div>
            <div class="boxSubcontent">
              <div class="mealList">
                <div>Chicken Piccata: Sautéed with Lemon, Capers & White Wine, Linguini, Roasted Broccoli and Apple Cobbler</div>
                <div>$39</div>
                <div>Ribeye Steak: Sautéed Mushrooms, Gouda Mashed Potatoes, Fresh Vegetables and Apple Cobbler</div>
                <div>$59</div>
              </div>
              <div>
                Each meal also includes: salad w/ choice of dressing, assorted rolls and butter, chef's choice of a soup, vegetables, and dessert.
              </div>
              <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div>
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Ladies Breakfast
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  This meal will be available for any women part of our association, be they an official member​ or attending the reunion with a member.
                </li>
                <li>
                  The Ladies Breakfast is free of charge, and it will take place from 9 - 10 am.
                </li>
              </ul>
            </div>
            <div class="boxTotal">
              <div class="boxSubtitle">
                Bobcat Banquet
              </div>
              <div class="boxSubcontent">
                <div class="banquetList">
                  <div>Cocktails</div>
                  <div>1700</div>
                  <div>Dinner</div>
                  <div>1800</div>
                  <div>Program</div>
                  <div>1900</div>
                  <div>Approx. Auction</div>
                  <div>2000</div>
                </div>
              </div>
            </div>
            <a href="{{ route('items.all',['purpose'=>'reunion.index','title'=>'Reunion Fee and Options']) }}">
              <div
                class="reserveBttn">
                ADD TO CART
              </div>
            </a>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox wednesdayBox"
        data-section="payment"
        data-type="box">
        <div class="boxTitle">
          Registration Fee & Event Costs
        </div>
        <div class="boxContent">
          The following is a summary of all of the options that can be paid for before the reunion. The a) registration fee and b) banguet payment is REQUIRED, while all other opportunities are optional.
        </div>
        <div class="boxContent">
          <div class="paymentBox">
            <div class="boxSubtitle">
              Registration Fee
            </div>
            <div class="boxSubcontent">
              <div>
                Types of Registration
              </div>
              <ul>
                <li>
                  Single Registration $15.00 USD
                </li>
                <li>
                  Couple Registration $25.00 USD
                </li>
              </ul>
            </div>
            <div>
              REQUIRED
            </div>
          </div>
          <div class="paymentBox">
            <div class="boxSubtitle">
              Wednesday - Olympic Museum, Garden of the Gods, and Lunch
            </div>
            <div class="boxSubcontent">
              <div>
                Tour Selections
              </div>
              <ul>
                <li>
                  Olympic & Garden of Gods $79.00 USD
                </li>
              </ul>
            </div>
          </div>
          <div class="paymentBox">
            <div class="boxSubtitle">
              Thursday - Royal Gorge Route Railroad
            </div>
            <div class="boxSubcontent">
              <div>
                Tour Selections
              </div>
              <ul>
                <li>
                  Club Car Option $109.00 USD
                </li>
                <li>
                  Vista Dome Car Option $125.00 USD
                </li>
              </ul>
            </div>
          </div>
          <div class="paymentBox">
            <div class="boxSubtitle">
              Friday - Memorial Service
            </div>
            <div class="boxSubcontent">
              <div>
                Memorial Service & Lunch
              </div>
              <ul>
                <li>
                  Memorial Service & Lunch $69.00 USD
                </li>
              </ul>
            </div>
          </div>
          <div class="paymentBox">
            <div class="boxSubtitle">
              Saturday - Banquet Dinner Choices
            </div>
            <div class="boxSubcontent">
              <div>
                Entree Choice
              </div>
              <ul>
                <li>Ribeye Steak $59.00 USD</li>
                <li>Chicken Piccata $39.00 USD</li>
              </ul>
            </div>
            <div>
              REQUIRED
            </div>
          </div>
          <div class="paymentBox">
            <div class="boxSubtitle">
              Donations
            </div>
            <div class="boxSubcontent paymentSubcontent">
              <div>
                If you wish to make a donation to help cover the expenses in hospitality room, any amount appreciated.
              </div>
              <div>
                <div>
                  Donation Amount
                </div>
                <ul>
                  <li>
                    PVT. Level Donation $25.00 USD
                  </li>
                  <li>
                    CPL. Level Donation $50.00 USD
                  </li>
                  <li>
                    SGT. Level Donation $100.00 USD
                  </li>
                </ul>
              </div>
              <div>
                For information, contact Carolyn Kethcart: <a href="mailto:carolynjk@bobcat.ws">carolynjk@bobcat.ws</a>
              </div>
            </div>
          </div>
        </div>
        <div class="policy">
          <a href="{{ route('items.all',['purpose'=>'reunion.index','title'=>'Reunion Fee and Options']) }}">
            <div
              class="reserveBttn">
              REUNION CART
            </div>
          </a>
          <div>
            <u>Reunion Cancellation Policy</u>: Members will not be reimbursed for costs incurred by the Association when  cancellations are made in less than 30 days before the reunion except in the case of death related reasons.
          </div>
        </div>
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
