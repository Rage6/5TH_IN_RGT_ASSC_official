@extends('layouts.master')

@section('donation_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/donation/360_donation.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/donation/375_donation.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/donation/414_donation.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/donation/768_donation.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/donation/1366_donation.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/donation/1920_donation.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/donation/past_1920_donation.css">
  <script>

  </script>
  @include ('footer.style')
@stop

@section('donation_content')
  <div class="main">
    <div class="content">
      <div class="donateIntro">
        <div class="mainTitle">
          Donations </br> & </br> Purposes
        </div>
        <a href="{{ route('items.all',[
          'purpose' => 'donation.index',
          'title' => 'Donation%20Options'
        ]) }}">
          <div class="donateBttn">
            Donate Online
          </div>
        </a>
      </div>
      <div class="donateList">
        <div class="donateRow redBack">
          <div class="rowTitle">
            MG (Ret.) Andrew H. Anderson 5th Infantry Regiment Association Scholarship
          </div>
          <div class="rowDescription">
            Our scholarship program officially started on Feb. 7th, 2023, and composed of two, annual scholarships that will be first awarded in 2024. The first is for any members pursuing a 4-year college degree, and the second is for any member pursuing a 2-year vocational-technical or trade school. As of April 2023, the official amounts provided are not yet finalized, but the former will likely range from $1000 - $1500 and the latter will likely range from $500 - $750. See our <a href="{{ url('/newsletters/2023/spr_23_news_ss.pdf') }}">Spring, 2023 bulletin</a> to see all of the details.</br>
            </br>
            Note: In the past, our organization instead donated to the 25th Infantry Division Association's scholarships. However, the assignment of a Bobcat battalion to the 11th Airborne Division made it necessary for our organization to raise and award our scholarships independently in order that all members are eligible.
          </div>
        </div>
        <div class="donateRow whiteBack">
          <div class="rowTitle">
            Bobcat Reunion Support Donation
          </div>
          <div class="rowDescription">
            The official Bobcat reunion takes place every year and is for any member of our organization (<a href="{{ url('/reunion') }}">see here</a>). This multi-day program takes place in a new city each year, and each one includes exciting experiences that are unique for that region. However, it often happens in which a member is unable to attend the reunion, but they still wants to contribute to the event. A common way is to donate money that can assist with the planning and execution of future reunions.
          </div>
        </div>
        <!-- <div class="donateRow greenBack">
          <div class="rowTitle">
            SEE OUR PAST DONATIONS
          </div>
          <div class="rowDescription">
          </div>
        </div> -->
      </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
@stop
