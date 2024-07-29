@extends('layouts.master')

@include('history.style')

@section('ben_cui_battle_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_13">
        <a href="{{ route('history.timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>Ben Cui Battle</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <i>
                The following is a description of the battle in Ben Cui on August 21st, 1968. It is based on the Combat Operations Report (COR) submitted by 1LT Arthur B. Cook Jr on Sept. 1st, 1968. It is a compilation of eyewitness reports from the leaders and men at the battle.
              </i>
            </p>
            <div class="benCuiAlbumRow benCuiRight">
              <a href="">
                <div class="benCuiAlbumBttn">
                  <div>BEN CUI</div>
                  <div>PHOTOS</div>
                </div>
              </a>
            </div>
            <p>
              <span style="font-size:1.8rem">A</span>t 210640 August 1968 company C 1st Bn (Mech), 5th Infantry departed  Dau Tieng base camp with the mission of sweeping from Dau Tieng to  XT 420445, staying approximately 1000 meters to the south of route 239.  The scout platoon, with the 3rd brigade CRIP and one twin 40mm self propelled weapon attached departed Dau Tieng at 210658 August 1968 to sweep and outpost the MSR from Dau Tieng to XT 371424. The two units were to move abreast on parallel routes in order to provide additional security for the units.
            </p>
            <p>
              At 0813 hours the scout platoon was located at XT 463468.  Company C had moved to the south and at XT 473456. Both units reported no enemy contact.  Company C was moving with two rifle teams abreast. The 1st platoon on the right was led by SSG Lang, while the 3rd platoon on the left was led by 1LT Cook.  Each platoon's personnel carriers followed the dismounted elements of the platoon.  The Company commander 1LT Snodgrass, moved on foot, and alternated his position between the lead platoons.
            </p>
            <div class="benCuiAlbumRow benCuiLeft">
              <a href="{{ route('recipients.select',['id' => $moh_id]) }}">
                <div class="benCuiAlbumBttn mohBttn">
                  <div>Medal of Honor Recipient</div>
                  <div>Marvin Rex Young</div>
                </div>
              </a>
            </div>
            <p>
              At 0831 hours the scout dog with the point element of the company alerted.  The handler stated that he thought that there might be a large number of personel to the southwest.  The battalion S-3 in the OH-23 helicopter made a low VR of the area concerned but could locate nothing unusual.  It was concluded that the dao had probably alerted to the presence of civilians in the village at XT 464448.  The Company commander then adjustd 81mm mortar fire into the rubber plantation to his front, with negative results.
            </p>
            <p>
              Two enemy soldiers were engaged by the security elements of company C at 0906 hours.  The enemy soldiers were at a range of 200 meters and withdrew to the south without returning fire.
            </p>
            <p>
              At 0913 hours the scout platoon was located at checkpoint "G" and was conducting a search of the village at XT 464448.  This search netted nothing except for the information that three buildings in the southern edge of the village had been used by the enemy for billets and classrooms.
            </p>
            <p>
              Company C located and destroyed a mine at XT 476454 at 0914 hours. The company then shifted to the westto move out of the open area into the rubber.  The company continued moving south Until it made a turn to to the west astride the trail leading fron XT 470444 to 463444.  The company moved to the west with one lead platoon on each side of the trail. The scout dog with it's security element was moving ahead of the platoon security by approximatelt 30 meters.
            </p>
            <div class="casualtyBox">
              <div class="casualtyTitle">The Men Lost</div>
              <div class="casualtyList">
              @foreach ($all_casualties as $one_casualty)
                <div class="oneCasualty" data-casualtyid="{{ $one_casualty->id }}">
                  <div>
                    {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                  </div>
                  <a href="{{ route('casualties.select',['id' => $one_casualty->id]) }}">
                    <div class="fullArrow">
                      <div class="topArrowHalf"></div>
                      <div class="bottomArrowHalf"></div>
                    </div>
                  </a>
                </div>
              @endforeach
              </div>
            </div>
            <p>
              At 1012 hours, the scout platoon observed a red star cluster in the vincinity of the village at XT 463448.  The Scout platoon continued searching the village at XT 463448.  At 1035 hours company C called in a negative situation report and gave XT 462440 as the current location of the unit.
            </p>
            <p>
              At 1110 hours, company C reported receiving sniper fire at XT 462444, and reported 1 US KIA and 1 US WIA.  The report stated that the fire was coming from the west and southwest.  The unit requested gunship support.  At this time the point and security elements were approximately 40 meters west of the road that extends south from route 239 to XT 463440. At this point, the lead platoons were crossing the road.  The second platoon and the mortar platoon were following the 3rd platoon, south of the east-west trail.
            </p>
            <p>
              As the enemy increased their volume of fire, the lead elements returned the fire, and remained west of the north-south road for approximately ten minutes.  The enemy continued to advance, with the elements attempting to move along the south flank of company C.  The enemy advanced from the west on the dismounted elements of company C.  Most of the enemy soldiers were wearing green and camouflaged uniforms, and were moving from tree to tree in short rushes, and advancing rapidly toward the north-south road, while some of the enemy were occupying camouflaged positions. the volume of fire  initially was low, but soon reach an extremely high rate.  During this period SSG Lang, the 1st platoon leader was killed.
            </p>
            <p>
              The company commander, realizing he could not effectively employ his cal. 50 machine guns over his own troops, withdrew his troops to the line of personnel carriers, now dispersed along the east side of the north-south road.  Further, since enemy soldiers had been observed while attempting to envelop his right flank, the company commander ordered his reserve, the 2nd platoon to displace to the right rear of his 1st platoon. He then displaced his mortars to the rear to obtain overhead clearance in order that they could be employed.  During this period the unit employed all available weapons, to include M-72 laws to break up the enemy attack.
            </p>
            <div class="benCuiAlbumRow benCuiLeft">
              <a href="{{ route('bencui.presidential') }}">
                <div class="benCuiAlbumBttn presSeal">
                  <div style="font-size:2rem">Presidential</div>
                  <div>Citation</div>
                </div>
              </a>
            </div>
            <p>
              At 1135 hours the battalion S-3 urgently requested the gunships, which had ben previously requested but had not arrived.  The Artillery FO on the ground was attempting to get clearances to employ artillery.  At this time company C marked the unit position with purple smoke, and a few minutes later with yellow smoke.  The unit at this time was still defending along the road with the troops deployed with the troops personnel carriers.  The company continued to fire in this position for approximately 30 minutes.
            </p>
            <p>
              During this 30 minute period the scout platoon deployed along route 239 with the lead element at XT 461448.  The scout platoon leader observed enemy troops moving to the southeast in the vicinity of XT 458446, and took these units under fire with cal. 50 machineguns and small arms.  Shortly he moved a twin-40mm weapon into a firing position and this weapon fired in excess of 300 rounds.  The scout platoon was soon engaged in small arms and RPG fire.  At 1149 the scout platoon leader observed and reported at least an enemy company moving southeast of the village at XT 450450.
            </p>
            <p>
              Company C continued to remain in position along the north-south road until approximately 1150 hours, at which time 3 personnel carriers, on the left sid of the company position, were hit with RPG weapons. These weapons were apparently fired from extremely  short range. The company commander then decided to withdraw approximately 150 meters and to organize another defensive position.  The unit withdrew, taking with it the wounded personnel and the body of SSG Lang.  During this period, five more men were killed.
            </p>
            <div class="benCuiAlbumRow benCuiRight">
              <a href="{{ route('bencui.forum') }}">
                <div class="benCuiAlbumBttn benCuiForumBttn">
                  <div>2013</div>
                  <div>BEN CUI</div>
                  <div>FORUM</div>
                </div>
              </a>
            </div>
            <p>
              Upon order the 1st and the 3rd platoon withdrew.  This movement disposed the company with three platoons abreast, since the 2nd platoon held in place.  At this time eight personnel carriers were on line, and all cal. 50 machineguns were operating.  In addition, the dismounted personnel were firing individual weapons and m-72 laws.  At this time 81mm mortars were firing with their rounds impacting near the second platoon.  The artillery forward observer, LT Ranney, was adjusting the artillery which was impacting 200 meters west of the friendly elements. At this time three of the remaining personnel carriers sustained RPG hits.  These RPG hits killed the 4.2 mortar forward observer and one of the company radio operators and wounded the company commander, the artillery forward observer and the remaining company radio operator.  the last transmission LT Ranney, the artillery forward observer, made was to the effect that the last artillery rounds had landed 200 meters east of his position. Since the artillery fire direction center knew that if the rounds were landing 200 meters east of LT Ranney, the were landing on the troops of company C, thus the FDC check fired the artillery.  Several minutes passed prior to the resuming fire.
            </p>
            <p>
              At 1154 hours the forward air controller reported an estimated time of arrival of 20 to 25 minutes for the first airstrike, and the 1st Brigade announced an ETA of 15 minutes for alight fire team, this light fire team arrived at 1201 hours and was immediately employed along the southern flank of the unit.
            </p>
            <p>
              Now Commanded by 1lt Cook, company C reported at 1200 hours that the situation was extremely critical and that he planned to withdraw. All wounded were loaded onto personnel carriers and the unit withdrew over the same route taken on the advance.  The last element to withdraw was the 2nd platoon.  The company movd and secured a landing zone at XT 473455.
            </p>
            <p>
              1200 hours the scout platoon was heavily engaged from the south, and observed an estimated eneemy platoon maneuvering to block route 239 to the north of the scout platoon.   At this time the scout platoon was ordered to move east through the village at XT 463448 and to link up with company C at the landing zone.  This movement resulted in a short anvance by the enemy, followed by a halt of his advance.  Following th Medical evacuation of casualties, all unit were ordered by the commanding officer to return to Dau Tieng to regroup and to prepare to return to the Ben Cui plantation to continue the contact. Th scout platoon was subsequently oreder to return to the eastern edge of th rubber.  At 1600 hours all elements were ordered to return to Dau Tieng.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
