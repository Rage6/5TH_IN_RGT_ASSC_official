@extends('layouts.master')

@include('history.style')

@section('origin_and_traditions_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ route('welcome') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>The Regiment's Origin & Traditions</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <span style="font-size:1.8rem">T</span>he history of the 5th Infantry Regiment spans two centuries of American fighting tradition. During that time, it has received battle streamers for participation in fifty-one separate campaigns in nine major conflicts.  Each of these streamers represents the blood, sweat and tears of infantrymen from every era in the country’s history. Congress authorized the formation of the 5th Infantry on April 12, 1808.  Junior only to the 3rd Infantry (1784) and the 4th Infantry (1792), it is the third oldest active unit in the U.S. Army.
            </p>
            <p>
              At its creation in 1808, the 5th was originally named as the 4th Infantry Regiment. However, that unit and five others were combined by the Congress of 1815 into the 5th Infantry Regiment that exists to this day. The six units involved were:
              <ul>
                <li>4th Infantry</li>
                <li>9th Infantry</li>
                <li>13th Infantry</li>
                <li>21st Infantry</li>
                <li>40th Infantry</li>
                <li>46th Infantry</li>
              </ul>
            </p>
            <div class="segmentImg imgRight imgSmall" style="background-image:url('/images/history/topics/lundy_lane_origin.jpg')">
            </div>
            <p>
              Among these original units, the 21st Infantry and its brave actions during the War of 1812 are still noted by the 5th to this day. On July 25, 1814, at the Battle of Lundy’s Lane, Colonel James Miller, commander of the 21st Infantry Regiment, was tasked with the near-suicidal mission of assaulting a British battery of seven cannons which were dominating the battlefield. In response to his orders, Miller replied, “I’ll try, sir!” When they reached the top of the hill, the Americans delivered a volley that swept away every member of the gun crews and then held the hill against four vicious counterattacks by the British. The Battle of Lundy’s Lane was the first major American victory against British regulars in that war. Three years later, the men and honors of the 21st Infantry were absorbed by the 5th Infantry, James Miller assumed command of the regiment, and his response of “I’ll try, sir” became the regimental motto.
            </p>
            <div class="segmentImg imgRight imgSmall" style="background-image:url('/images/welcome/5INF_crest-min.png'); background-position: center;background-repeat: no-repeat; background-size: contain">
            </div>
            <p>
              <u>What Does Our Crest Mean?</u> The shield is white, the color of Infantry facings when the Regiment was organized.  The red fess with arrow commemorates the battle of Tippecanoe; the battle of Lundy's Lane is shown by the seven cannons captured there; while the border of green, white, and red is for the Mexican War.  The crest is a modification of the crest of General Nelson A. Miles who was for many years Colonel of the Regiment and who led it in several notable Indian engagements.  His crest is an arm in armor grasping an anchor; 9 arrows, one for each Indian campaign, is substituted for the anchor in the regimental crest.
            </p>
            <div class="segmentImg imgLeft imgSmall" style="background-image:url('/images/history/topics/bobcat_origin.jpeg')">
            </div>
            <p>
              <u>Why Are We "Bobcats"?</u> While garrisoned at the Monteith Barracks in Furth, Germany during the 1950's, the regimental baseball team adopted the name “5th Infantry Bobcats.” By the early 1960’s, the Bobcat moniker had been generalized to all members of the regiment. In 2007, it was discovered that this unit nickname had never been formally recognized and recorded by the Department of the Army and could have been easily usurped by another unit.  The commander of 1st Battalion, 5th Infantry at Fort Wainwright, Alaska successfully registered the name.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
