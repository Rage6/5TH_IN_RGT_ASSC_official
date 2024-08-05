@extends('layouts.master')

@include('history.style')

@section('distinguished_unit_citation_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_13">
        <a href="{{ route('bencui.main') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>Distinguished Unit Citation</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <i>
                What follows is the content of the official distinguished unit citation, awarded on Oct. 11th, 1953.
              </i>
            </p>
            <p style="text-align:center;font-size:1.5rem">
              Headquarters Eighth United States Army<br>
              Award of the Distinguished Unit Citation<br>
              General Orders 923<br>
              11 October 1953<br>
            </p>
            <p>
              Company A, 5th Infantry Regiment, 5th RCT and the First Section, Machine Gun Platoon, 5th Infantry Regiment 5th RCT and Forward Observer Team, 555th Field Artillery Battalion, 5th RCT, distinguished themselves by extraordinary heroism in the performance of exceptionally difficult tasks in the vicinity of Songnae-Dong, Korea. On the morning of 12 June 1953, those units relieved other United Nations forces defending a vital outpost and successfully withstood five separate attacks by overwhelming enemy forces during the next twenty four hours. After earlier mass attacks had been halted by combined defensive fires, the hostile element attacked under a tremendous artillery and mortar barrage during the evening and gained a foothold on the right flank of the position. Refusing to withdraw, the United Nations units closed in hand-to-hand combat and destroyed the enemy force. After an artillery barrage, waves of enemy troops assaulted both the left and right flanks of the outpost but were again annihilated. In a final effort another onslaught of hostile forces charged against both the front and the flanks of the United Nations forces and again succeeded in entering the trenches. The courageous defenders launched a series of counterattacks, routed the enemy and restored the position. The complete devotion to duty and outstanding courage exhibited by Company A and attached units in hand-to-hand combat were instrumental in the successful defense of the key position. The magnificent fighting spirit of these organizations reflects great credit on themselves and the military service.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
