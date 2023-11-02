@extends('layouts.master')

@include('donations.style')

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
            Our scholarship program officially started on Feb. 7th, 2023, and composed of two, annual scholarships that will be first awarded in 2024. The first is for any members pursuing a 4-year college degree, and the second is for any member pursuing a 2-year vocational-technical or trade school. As of April 2023, the official amounts provided are not yet finalized, but the former will likely range from $1000 - $1500 and the latter will likely range from $500 - $750. See our Spring, 2023 bulletin to see all of the details.</br>
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
