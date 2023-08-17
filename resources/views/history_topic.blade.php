@extends('layouts.master')

@section('history_style')
  <!-- History Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/history/360_history.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/history/375_history.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/history/414_history.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/history/768_history.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/history/1366_history.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/history/1920_history.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/history/past_1920_history.css">
  @include ('footer.style')
@stop

<!-- @section('after_action_reports')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_19">
        <div data-opbutton="clean_sweep">
          <div data-opbutton="clean_sweep">"CLEAN SWEEP"</div>
        </div>
        <div data-opbutton="kahuku">
          <div data-opbutton="kahuku">"KAHUKU"</div>
        </div>
        <div data-opbutton="honolulu">
          <div data-opbutton="honolulu">"HONOLULU"</div>
        </div>
        <div data-opbutton="circle_pines">
          <div data-opbutton="circle_pines">"CIRCLE PINES"</div>
        </div>
        <div data-opbutton="clean_sweep">
          <div data-opbutton="clean_sweep">"KALAMAZOO"</div>
        </div>
        <div data-opbutton="clean_sweep">
          <div data-opbutton="clean_sweep">"WAIKIKI"</div>
        </div>
        <div data-opbutton="clean_sweep">
          <div data-opbutton="clean_sweep">"WAHIAWA"</div>
        </div>
        <div data-opbutton="clean_sweep">
          <div data-button="aug" data-year="1966">"COCO PALMS"</div>
        </div>
        <div data-button="sep" data-year="1966">
          <div data-button="sep" data-year="1966">"MAKIKI"</div>
        </div>
        <div data-button="oct" data-year="1966">
          <div data-button="oct" data-year="1966">"MOKOLEIA"</div>
        </div>
        <div data-button="nov" data-year="1966">
          <div data-button="nov" data-year="1966">KOKO HEAD</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"OAHU"</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"KIPAPA"</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"SUNSET BEACH"</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"KAILUA"</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"ATTLEBORO"</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"CEDAR FALLS"</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">"BEN CUI"</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div data-opname="clean_sweep" class="nonTimeSegment topicSegment aarSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: CLEAN SWEEP</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <div>HEADQUARTERS</div>
              <div>1ST BATTALION (MECH) 5TH INFANTRY</div>
              <div>APO San Francisco 96225</div>
            </div>
            <div class="aarTopic">
              TLMAA-C February 1966
            </div>
            <div class="aarTopic">
              SUBJECT: After Action Report – Operation Clean Sweep
            </div>
            <div class="aarTopic">
              <div>TO: Commanding Officer</div>
              <div>2d Bde, 25th Inf Div</div>
              <div>APO U.S. Forces 96225</div>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:   (our order) OPORD 11-66, 1st Bn (Mech) 5th Inf.
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:   220730FEB66 to 241615FEB66.
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>: Wooded area running from coordinates 674135 to 691118 to 693128.
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>: Search and destroy; protect ARVN bulldozers leveling the area.
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>
                The operation was a coordinated attack between the 1/5th Mech and the 49th Inf (ARVN) Regt. Elements of the 1/8th Arty and Co C, 65th Engr Bn, were in support. The 1/5th Mech crossed the LD at 0830 (prescribed time). The 1/49th (ARVN) Regt, attacking on the right of the 1/5th Mech, crossed the LD 17 minutes late. The 1/5th Mech attacked with two Co’s abrest, A on the right (E), and B on the left (W). Recon plat screened the left (W) flank and a platoon of Co C searched and cleared the wooded area centered at coord 677118. Co C (-) was in reserve with the mission of protecting the bulldozers. The two forward companies proceeded slowly through rather heavy woods at first. The 1/49th (ARVN) Regt proceeded rapidly to the objective area mounted on APC’s. Apparently they never dismounted to search and destroy in the zone until they arrived on their Obj 12 (698113). During this perion both the Recon Plat and Co B received sniper fire, primarily from their left flank and rear from the vicinity of the woods centered at 676118. As the Recon Platoon broke into the rice paddy short of the objective area (vic coord 684117) they received considerable fire from the woodline vic coord 684119. Fire included that from two automatic weapons believed to be .50 cal. VC elements were engaged by machine gun fire, small arms fire and artillery. It is believed that one of the MG’s was knocked out. From the time the units crossed the LD until about 1130 hours all three companies and the Recon Platoon were subjected to sniper fire. Most of the fire was delivered from the flanks and rear. Co B ran into extensive tunnels vic coord 688120. Co B then searched the area thoroughly, after which they pushed approximately 800 meters into the woods to the NW in an attempt to run down the VC who had fled in that direction; no contact was made. Co A searched out the entire area from 691118 to 693128 with no further contact. Recon Platoon reconnoitered along the woodline from coord 687120 to 682133 and back with no contact. Co B returned to the perimeter using the rice paddy SW of the area in which they were searching (coord of rice paddy – 680120). A platoon of Co C supported this move from a position vic coord 679120. As Co B moved into the rice paddy they received machine gun and small arms fire from their right rear from the vic coord 676120. The battalion spent the night in a perimeter vic coord 688119. Nine ambushes were set outside the perimeter; two were triggered (4 VC confirmed killed, 3 more estimated killed).
              </div>
              <div>
                On 23 Feb six tanks from Troop B, 3/4 Cav, joined the attack. The battalion searched and cleared the entire area centered at coord 680125 and the area centered at 676118. The only contact consisted of sniper fire from VC located vic coord 673137. Fire was effectively returned. The battalion went into a perimeter at the same location as the previous night. Ambushes were established at coord 668122, 673129, 682132. Five additional ambushes were established close to the battalion perimeter. The only contact was made by ambush at coord 668122 which observed 6 - 8 VC just before dark vic coord 665123. VC were taken under fire by artillery and small arms. Results are unknown.
              </div>
              <div>
                On 24 Feb Co A searched and destroyed a wooded area centered at 665128; Recon Platoon searched and destroyed area centered at 663133 but made no contact. Co B moved through the rubber plantation to the left (SW) of the road running through coord 6613. Co C checked rice paddies around objective area and protected the bulldozers. Upon returning to base camp, Co C received sniper fire from a lone sniper located vic coord 667126 – the only contact of the day.  Throughout the entire operation security was provided the six ARVN bulldozers which leveled the entire area centered at coord 692122.
              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>: Area searched on 22 and 23 Feb was heavily fortified. There were trenches behind every hedgerow. Foxholes were everywhere and there were numerous small bunkers. Defensive tunnels were dug throughout the area; extensive tunnels were located vic 688120. The area obviously had been recently used. Area checked the last day (24 Feb) did not show any evidence that VC had stayed there. There was evidence of fresh digging in the rubber plantation. The holes were about two feet deep and were located vic coord 662125.
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>: First day: Estimated 2 squads reinforced with 2 heavy machine guns. They wore steel helmets and black uniforms. Second day: A total of about 10 men. Third day: Lone sniper.
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>
                  VC killed: 11 confirmed, 13 additional estimated killed.
                </li>
                <li>
                  Destroyed:
                  <ul>
                    <li>25 bunkers</li>
                    <li>8 booby traps</li>
                    <li>4 AP mines</li>
                    <li>5 bags of black powder (regular sugar bag size)</li>
                    <li>79 tunnel entrances (4 of these were extensive. One was a two level tunnel about 200 meters long. Two one level tunnels of 40 and 75 meters were also destroyed. All four of these were located vic coord 688120. This area was apparently a VC training area. ARVN LNO stated that signs indicated that the cadre was from North Vietnam. An APC caved in a huge hole about 15' deep and 12' in diameter vic coord 689121 (this apparently was some sort of underground classroom).</li>
                    <li>800 pounds of rice</li>
                    <li>3 caches of food</li>
                    <li>20 duds (included 12 artillery rounds and 8 Air Force bombs)</li>
                  </ul>
                </li>
                <li>
                  Numerous documents and miscellaneous articles of clothing were found and turned over to Bde S-2.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>: 5 KIA, 18 WIA. Of the WIA, 8 were returned to duty the same day they were wounded. One additional man was slightly wounded enroute to objective area when a .50 cal MG accidently discharged. List of casualties is attached at Inclosure 1.
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>
                  One APC was hit by what was believed to have been a booby trap which contained a shape charge. Round completely penetrated  front of track and came out the other side. Extensive damage was done and the APC will have to be evacuated.
                </li>
                <li>
                  Two other APC’s were deadlined as a result of the operation. Both should be repaired within 24-48 hours.
                </li>
                <li>
                  One 1.5 ton trailer was damaged when a main spring was apparently ripped out from under the trailer.
                </li>
                <li>
                  No weapons were lost.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>
                  It was determined that the battalion is capable of operating for 3 days on this type operation without resupply of anything except water. However the 1 ½ ton trailers pulled behind tracks received rough treatment during the cross country movement. These trailers cannot sustain such treatment. The ammo trailers, on the other hand, stood up very well. Surprisingly, the APC’s consumed on the average of only 40 gallons of gas (this is one-half their capacity) for the three day operation.
                </li>
                <li>
                  Troops do not properly follow-up ambushes. When an ambush is tripped, the force should stay in place, attempt to locate and search the bodies, secure the VC weapons, and, where the situation permits, cover the bodies by fire in an attempt to further ambush any VC attempting to recover the bodies.
                </li>
                <li>
                  It is extremely difficult to coordinate and control the movement of APC’s through heavily wooded areas. An air observer in the helicopter is essential for control and even then the rate of movement is slow and constant shifting of APC’s back and forth to straighten the lines is essential.
                </li>
                <li>
                  Troops are unnecessarily exposing themselves in the APC’s by sticking their heads and bodies too far out of the tracks.
                </li>
                <li>
                  Reconnaissance by air and map is considered very inadequate. The woods were much thicker than anticipated. The use of recon patrols several days in advance of such an operation, when possible, is recommended. This would also permit more adequate intelligence of the area. It is also felt that intelligence support from Brigade must be improved upon. What intelligence we got from the area we got ourselves from the 49th ARVN Inf Regt.
                </li>
                <li>
                  Traffic control points are essential when using Route One. Civilian traffic was heavy and interfered considerably with the operation.
                </li>
                <li>
                  Value of Mechanized Infantry was again proven. Had a straight Infantry Battalion attempted to cross the open rice paddy under the heavy enemy fire from the well dug in positions along the wood line, they would have received heavy casualties.
                </li>
                <li>
                  Use of extensive ambushes to screen preparation of perimeter and protect perimeters proved to be highly effective.
                </li>
                <li>
                  Casualty reporting from Co to Bn and from Bn to Bde must be more accurate and reports must be submitted more rapidly. It is believed the log net should be used for this to keep command net free. Minor wounds where a man stayed with his unit were not being reported. A standard form should be established by Brigade to permit giving casualty reports in the clear (i.e., fill in the blanks by line number).
                </li>
                <li>
                  Our system of keeping Brigade abreast of the situation must be improved upon. Forward CP must make at least hourly reports. Rear CP which should constantly monitor all transmissions should supplement information with periodic landline reports. It is also most helpful on a single battalion operation to have Bde monitor our net in an effort to stay informed.
                </li>
                <li>
                  Our communications secuity must be improved upon.
                </li>
                <li>
                  Companies must report enemy information more rapidly on the command net so that all units will have the benefit of the information.
                </li>
                <li>
                  More effective use can be made of artillery fire. The first day we should have preceded our movement by artillery fire. It was much better the second day. Use of H&I fires around perimeter at night was effective and could have been more so were it not for the proximity of the ARVN forces.
                </li>
              </ol>
              <div>
                FOR THE COMMANDER:</br>
                BILLY J. HAMMONS as Captain, Infantry
                Adjutant
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION CLEAN SWEEP
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitList">
                <div>FAIN, James L.</div><div>SP4	11B10</div><div>KIA</div>
                <div>ROBINSON, Grant</div><div>PFC	11D10</div><div>WIA</div>
                <div>ROBINSON, Jessie C.</div><div>SP4	11B20</div><div>WIA</div>
                <div>HEGBERG, Alfred</div><div>PFC	11E10</div><div>WIA</div>
                <div>RAYMOND, Donald W.</div><div>SGT 11D40</div><div>WIA</div>
                <div>CARTER, William</div><div>PFC 	11C20</div><div>WIA</div>
                <div>AGUIRRE, Luis H. I</div><div>SP4	11D20</div><div>WIA</div>
                <div>BELL, Amos Jr.</div><div>SSG 	11D40</div><div>WIA</div>
                <div>BAILEY, Kedric L.</div><div>PFC	11D10</div><div>WIA</div>
                <div>HARRIS, Steve W</div><div>PFC	11D10</div><div>WIA</div>
                <div>BAKER, Albert</div><div>PFC	11C20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co.  A</div>
              <div class="casUnitList">
                <div>JACKSON, Carl</div><div>SP4 11B20</div><div>WIA</div>
                <div>MCNEIL, Eddie Jr.</div><div>SP4 11B20</div><div>WIA</div>
                <div>MOLIERE, Larry D.</div><div>PFC	11B10</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. B</div>
              <div class="casUnitList">
                <div>DAY, Billy B.</div><div>PVT 11B20</div><div>KIA</div>
                <div>PARNELL, William B.</div><div>SSG	11B40</div><div>KIA</div>
                <div>GARIS, Gary W.</div><div>SP4	11B20</div><div>KIA</div>
                <div>MARTIN, Guy W.</div><div>SSG	11B40</div><div>WIA</div>
                <div>CAVALIER, Clark P.</div><div>SSG	11B40</div><div>WIA</div>
                <div>DRAKE, Melvin P.</div><div>SP4	11B20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. C</div>
              <div class="casUnitList">
                <div>CASSUBE, Richard H.</div><div>SGT 11B40</div><div>KIA</div>
                <div>BENNETT, Bertram S</div><div>SSG 11B40</div><div>WIA</div>
                <div>PAQUETTE, Earl R</div><div>SP4 11B20</div><div>WIA</div>
                <div>THOMPSON, David M.</div><div>SSG	11B40</div><div>WIA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="kahuku" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: KAHUKU</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="honolulu" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: HONOLULU</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="circle_pines" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: CIRCLE PINES</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="kalamazoo" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: KALAMAZOO</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="waikiki" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: WAIKIKI</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="wahiawa" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: WAHIAWA</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="coco_palms" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: COCO PALMS</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="makiki" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: MAKIKI</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="mokoleia" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: MOKOLEIA</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="koko_head" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: KOKO HEAD</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="oahu" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: OAHU</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="kipapa" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: KIPAPA</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="sunset_beach" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: SUNSET BEACH</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="kailua" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: KAILUA</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="attleboro" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: ATTLEBORO</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="cedar_falls" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: CEDAR FALLS</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
      <div data-opname="ben_cui" class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>OPERATION: BEN CUI</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop -->

@section('vietnam_glossary')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ route('history.timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>Glossary</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <ul>
              <li>
                Ambush Patrol (AP): A group of soldiers sent out to attempt to surprise and kill enemy soldiers.
              </li>
              <li>
                “Angel” Track: An armored personnel carrier used for medical evacuation and treatment.
              </li>
              <li>
                Angel’s Wing: XT 2510. Portion of the Cambodian border shaped like a wing.
              </li>
              <li>
                AO: Area of Operations.
              </li>
              <li>
                APC: Armored Personnel Carrier.
              </li>
              <li>
                ARTY: Slang for artillery.
              </li>
              <li>
                ARVN: Army of the Republic of Viet Nam.
              </li>
              <li>
                AT: Anti-Tank.
              </li>
              <li>
                AW: Automatic Weapon.
              </li>
              <li>
                BC: Body Count.
              </li>
              <li>
                Bde:  Brigade.
              </li>
              <li>
                Bn: Battalion.
              </li>
              <li>
                Battalion(-): A battalion not at full strength.
              </li>
              <li>
                Bunker: Fortified fighting position with over head cover.
              </li>
              <li>
                Bushmaster Operation: When a man is sent out with a K-Bar knife and a .45 pistol to locate a used trail. He hides in a tree and when a VC comes along he drops down and either captures or kills the VC. (Not really. Just seeing if everyone is paying attention.)
              </li>
              <li>
                Camp Rainier: XT 495475. Base Camp at Dau Tieng.
              </li>
              <li>
                CBU: Cluster Bomb Unit. Unexploded ones were often used by the Communists as booby-traps.
              </li>
              <li>
                C&C: Command and Control.
              </li>
              <li>
                Chieu Hoi: A Communist who has voluntarily rallied to the South Viet Nam Government.
              </li>
              <li>
                Chinese Claymore: Anti-personnel mine that explodes and sends projectiles in a 360 degree circle.
              </li>
              <li>
                Citadel: XT 5325. An area of the southern Boi Loi Woods.
              </li>
              <li>
                Claymore Mine: Anti-personnel mine of US manufacture.
              </li>
              <li>
                CO: Commanding Officer.
              </li>
              <li>
                Co: Abbreviation for company.
              </li>
              <li>
                Co(-): A company not at full strength.
              </li>
              <li>
                COP: Combat Outpost. Position in front of a unit’s perimeter that is prepared to fight and hold its own.
              </li>
              <li>
                County Fair: Party atmosphere medical treatment day for civilians. (Med-Cap).
              </li>
              <li>
                Crescent: XT 4352 –3760.
              </li>
              <li>
                CS Gas: Tear gas.
              </li>
              <li>
                Duster:  Twin 40mm anti-aircraft gun. Usually on a self-propelled vehicle and used as an anti-personnel weapon. Very effective on offense or defense.
              </li>
              <li>
                Dust-off: Medical evacuation helicopter.
              </li>
              <li>
                Eagle Flights: Usually a platoon or company size air combat assault into an area of suspicious activity.
              </li>
              <li>
                FAC: Forward Air Controller. Person who directs air strikes onto their target.
              </li>
              <li>
                FSB:  Fire support base. Usually containing a battery of artillery.
              </li>
              <li>
                FSB/PB: Fire Support Base / Patrol Base.
              </li>
              <li>
                FSB St. Barbara: XT 272683. 17 Km north of Tay Ninh at Bau Co.
              </li>
              <li>
                FSB Buell: XT 213532.  3 Km NW of Tay Ninh on Route 4.
              </li>
              <li>
                FSB Buell II: XT 227568.
              </li>
              <li>
                FSB Carol: XT 334357.
              </li>
              <li>
                FSB Chamberlain: XT 554984.
              </li>
              <li>
                FSB Crook: XT 055595.
              </li>
              <li>
                FSB Dees: XT 554227.
              </li>
              <li>
                FSB Devins: XT 548180.
              </li>
              <li>
                FSB/PB Diane: XT 424166.
              </li>
              <li>
                FSB/PB Dragon: XT 638284.
              </li>
              <li>
                FSB/PB Gertrude: XT 524144.
              </li>
              <li>
                FSB Jackson: XT 425168.
              </li>
              <li>
                FSB Janet: XT 703207.
              </li>
              <li>
                FSB Joyce: XT 383262.
              </li>
              <li>
                FSB Mahone: XT 538375. Near Thanh An.
              </li>
              <li>
                FSB Mahone II: XT 521419.
              </li>
              <li>
                FSB Martha: XT 452266.
              </li>
              <li>
                FSB Nickel: XT 565045.
              </li>
              <li>
                FSB Patton: XT 582155.
              </li>
              <li>
                FSB Pike II: XS 702910. 6 Km south of Vinh Loc.
              </li>
              <li>
                FSB Rawlins: XT 301502. 6 Km east of Tay Ninh.
              </li>
              <li>
                FSB/PB Sandra: Just west of Trang Bang.
              </li>
              <li>
                FSB Schofield: XT 407440.
              </li>
              <li>
                FSB Stuart: XT 499198.
              </li>
              <li>
                FSB Washington: XT 146568.
              </li>
              <li>
                Fish Hook: Area of the Cambodian border.
              </li>
              <li>
                Frontier City: XT 202292. Patrol Base northwest of Go Dau Ha.
              </li>
              <li>
                HEAT ammunition: High Explosive Anti-Tank ammunition.
              </li>
              <li>
                Kill Zone: Area in front of an ambush that the maximum fire power is directed at.
              </li>
              <li>
                Kit Carson Scout: A Chieu Hoi who works with and guides friendly forces.
              </li>
              <li>
                LAW: Light anti-tank weapon. Disposable anti-tank rocket of US manufacture.
              </li>
              <li>
                LD:  Line of departure.
              </li>
              <li>
                LFT: Armed Helicopter Light Fire Team.
              </li>
              <li>
                LOC:  Line of Communication.
              </li>
              <li>
                LP:  Listening Post. One or two men sent forward of the unit’s perimeter to warn of any enemy approach.
              </li>
              <li>
                MSR:  Main supply route.
              </li>
              <li>
                NLT: Not later than.
              </li>
              <li>
                OP:  Out Post. Observation Post. Similar to an LP.
              </li>
              <li>
                OPCON:  Operational Control.
              </li>
              <li>
                Organic Weapons:  Weapons that are normally carried and used by a unit.
              </li>
              <li>
                Parrot’s Beak: Portion of the Cambodian Border.
              </li>
              <li>
                PB: Patrol Base.
              </li>
              <li>
                PB Bragg: XT 343580.
              </li>
              <li>
                PB Diamond: XT 337187.
              </li>
              <li>
                PB Houston: XT 440068.
              </li>
              <li>
                PB Hunsley: XT 595270.
              </li>
              <li>
                PB Lorence: XT 551218.
              </li>
              <li>
                PB Rittgers: XT 354145.
              </li>
              <li>
                PB Rock Crusher: XT 270564.
              </li>
              <li>
                Plain of Reeds: XT 355900.
              </li>
              <li>
                Razorbacks:  Hilly area north of DauTieng.
              </li>
              <li>
                Renegade Woods: XT 2828 –2832.
              </li>
              <li>
                RIF Operation:  Reconnaissance in force operation.
              </li>
              <li>
                RP: Rendezvous Point.
              </li>
              <li>
                RPG-2: Rocket anti-tank grenade launcher. RPG is from the Russian:”Reaktivniy Protivotankovyi  Granatomet.”
              </li>
              <li>
                RPG-7: An advanced version of the RPG-2.
              </li>
              <li>
                RTO: Radio Operator.
              </li>
              <li>
                SA Fire: Small arm’s fire.
              </li>
              <li>
                S&D Operation: Search and destroy operation.
              </li>
              <li>
                Snake: A coil of explosive charge several meters long.
              </li>
              <li>
                Straight Edge Woods: XT 204386 – XT 177337.
              </li>
              <li>
                Sugar Mill: XT 4704.
              </li>
              <li>
                TF: Task Force.
              </li>
              <li>
                The “Thumb”: XT 5534. An area of the Boi Loi Woods.
              </li>
              <li>
                Trapezoid: The Trapezoid is that jungled area south of Dau Tieng and the Michelin Rubber Plantation and north of the Iron Triangle. It is bordered on the west by the Saigon River and on the east by the Rach Thi Tinh. Route 14, an unimproved road running south from Dau Tieng parallel to the Saigon River is the principle artery for ground transportation through the area.
              </li>
              <li>
                Tripped: Refers to the act of detonating a booby-trap or can also refer to an ambush being activated against a force entering the kill zone.
              </li>
              <li>
                TVR or LTVR:  Tracked vehicle retriever.
              </li>
              <li>
                VC: Viet Cong. Communist soldier.
              </li>
              <li>
                VCC: Viet Cong confirmed.
              </li>
              <li>
                VCS: Viet Cong Suspect.
              </li>
              <li>
                XT, XS: Indicates Map Grid Coordinates
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('michelin_rubber_plant_battle_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ route('history.timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>Michelin Rubber Plant Battle</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <span style="font-size:1.8rem">O</span>n the 6th of March 1970, Company B, 1st Battalion 5th Infantry (Mechanized), was in a night laager in the vast Michelin Rubber Plantation, near Dau Tieng Vietnam.  Earlier that day, Division Intelligence, G2, notified our Battalion that a large enemy force of NVA was reported moving North of B Companies’ area of operation.  I was ordered to send a Platoon sized force to conduct an ambush near the reported enemy location.  Since the platoon would be located beyond the range of my mortar section, I sent my Forward Observer (FO), Lt. Love, along with the ambush platoon to provide artillery support.  I then established 3 squad-sized ambushes along likely avenues of approach to B Companies’ laager site.  I decided to stay with my remaining platoon at the laager site in order to lead a reaction force in case one of my ambush units encountered a major enemy size force.
            </p>
            <div class="segmentImg imgRight imgSmall" style="background-image:url('../../../images/history/topics/michelin-rubber-plant-battle.jpg')">
            </div>
            <p>
              Darkness enveloped the small clearing where our laager was established.  12 Armored Personnel Carriers (APC’s) each mounted with 50 cal. Machine guns formed a circular perimeter.  Between each APC, was a foxhole or fighting position, containing a mounted M-60 machine gun.  In front of our perimeter, claymore mines were positioned along with concertina wire and trip flares.  A section of cyclone fence was installed about 3 feet in the front of each APC.  This fencing was helpful in stopping direct hits from RPGs (Rifle Propelled Grenades) during a battle.  Inside our perimeter were my three Mortar Tracks, Medic Track, Vehicle Recovery Track, Mess Track, the 1st Sgt.’s resupply Track and my Command Track (which was always pointed North).  My FO, before going out with the ambush platoon, established 105mm artillery registration points, and our Mortar Section covered all defoliated positions outside the perimeter.
            </p>
            <p>
              Around 2300 hrs. (11PM) 1st Lt. Sparkman, our 3rd Platoon Leader, left my track and was returning to his platoon when a loud popping sound was heard indicating a trip flare had ignited.  An enemy sapper tripped the flare and Sparkman saw him.  Lt. Sparkman yelled “they’re in the wire”.  I looked up just as one of our machine guns opened up on the sapper, killing him instantly.  At least two other sappers were seen retreating back into the rubber trees and were engaged.  All of the sappers were naked, covered with charcoal for camouflage, and carried satchel charges.  If they had been successful in penetrating our perimeter, we would have been in serious trouble.  As it was, the enemy assault force, which was waiting in at least three locations in the rubber trees, began firing immediately upon being detected by us and attempted to assault our position from three sides.  Though undermanned, we put up a terrific fight against a Battalion size force of NVA regulars.  You will hear about six minutes of the ensuing battle, which lasted about 3 hours.  18 out of approximately 50 of our soldiers inside the perimeter were wounded, none of their wounds were life threatening.  Although no body count was taken, intelligence reported that enemy losses were estimated to be 180 killed or wounded.
            </p>
            <div class="segmentImg imgLeft">
              <audio class="audioClip" controls>
                <source src="../../../audio/firefight.mp3">
              </audio>
            </div>
            <p>
              This battle was recorded by one of our soldiers who was sitting inside his APC and was making a tape recording for his girl friend back home.  He dropped the recorder's handset when the first shots were fired and manned his 50 cal. Machine gun.  Unknown to him, he left the tape recorder on.  The tape ran out about six minutes into the battle.  What you hear is a small portion of the battle, but enough to appreciate the intensity of the fight.  The soldier gave a copy of the tape to Specialist Gregg Wilbanks, a driver and 50 cal. gunner on 3-4 track.  Gregg, who was seriously wounded in Cambodia, gave me a copy when we got together in September 2002 at our Battalion’s reunion in Branson, MO.  May the fighting spirit of the 1/5 Infantry live on.
            </p>
            <p>
              Sincerely,</br>
              Ralph G. Laubecher</br>
              B Co. Commander, 6 March 1970</br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('presidential_citation_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ route('bencui.main') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>Presidential Unit Citation</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <i>
                What follows is the official presidential unit citation, awarded by President Nixon and certified by the Secretary of Defense on Nov. 25th, 1969.
              </i>
            </p>
            <p>
              By virtue of the authority vested in me as President of the United States and as Commander-in-Chief of the Armed Forces of the United States, I have today awarded
            </p>
            <p style="text-align:center;font-size:1.5rem">
              <u>The Presidential Unit Citation (Army)</u>
            </p>
            <p>
              For extraordinary heroism
            </p>
            <ul>
              <li>1st Battalion (Mechanized) 5th Infantry, 25th Infantry Division
              </li>
            </ul>
            <p>
              and the following attached units:
            </p>
            <ul>
              <li>
                1st Platoon, Troop A, 3D Squadron, 4th Cavalry
              </li>
              <li>
                38th Infantry Platoon (Scout Dog)
              </li>
              <li>
                3D Platoon, Company A, 65th Engineer Battalion
              </li>
              <li>
                1st Platoon, Battery B
              </li>
              <li>
                5th Battalion (AW)(SP), 2D Artillery
              </li>
              <li>
                5th Section(-), Battery D, 7th Artillery
              </li>
              <li>
                44th Infantry Platoon(-)(Scout Dog)
              </li>
              <li>
                Battery A(-), 7th Battalion, 11th Artillery
              </li>
            </ul>
            <div class="benCuiAlbumRow benCuiRight">
              <a href="../../../images/history/topics/ben_cui/pres_cit.jpg" target="_blank">
                <div class="presSeal presCitationBttn">
                  <div style="font-size:2rem">
                    <div>Official</div>
                    <div>Citation</div>
                  </div>
                </div>
              </a>
            </div>
            <p>
              The 1st Battalion (Mechanized), 5th Infantry, 25th Infantry Division and its attached units distinguishedthemselves by extraordinary heroism in combat operations against numerically superior enemy forces in the Republic of Vietnam from 18 August to 20 September 1968. During this period, the 1st Battalion Task Force, through reconnaissance in force, ambush, counterambush and reaction missions, effectively destroyed a regimental size enemy force and preventing the enemy from seizing the initiative inits "third offensive." The officers and men of the Task Force displayed outstanding bravery, high morale and exemplary esprit de corps in fierce hand-to-hand combat and couter offensive action against well-disciplined, heavily armed and entrenched enemy forces.
            </p>
              <div class="benCuiAlbumRow benCuiLeft">
                <a href="../../../images/history/topics/ben_cui/pres_cit_cert.jpg" target="_blank">
                  <div class="presCitationBttn secOfArmySeal">
                    <div>
                      <div>Official</div>
                      <div style="font-size:2rem">Certification</div>
                    </div>
                  </div>
                </a>
              </div>
              <p> An example of the outstanding bravery and aggressiveness occurred on 21 August during a reconnaissance in force mission. The lead element of Company C, 1st Battalion came under heavy mortar, rocket propelled grenade, machine gun and automatic weapons fires. The company deployed against the enemy force while the scourt platoon protected the company flank and prevented reinforcement by a battalion sized enemy unit. Through skillful use of close supporting fires from artillery, helicopter gunship and tactical air, the officers and men of the Task Force repulsed "human waves" counterattacks and defeated a numerically superior enemy forces, which left one hundred and eighty-two dead on the battlefield. The individual acts of gallantry, the teamwork and the aggressiveness of the officers and men of the 1st Battalion Task Force continued throughout the period of prolonged combat operations, resulting in the resounding defeat of enemy forces in their operational area. The heroic efforts, extraordinary bravery and professional competence displayed by the men of the 1st Battalion, 5th Infantry and attached units are in the highest traditions of the military service and reflect great credit upon themselves, their unis and the Armed Forcesof the United States.
            </p>
            <p>
              Richard Nixon
            </p>
            <div>
                <p>
                  >> For a printable copy of the Presidential Unit Citation (PUC), click <a href="https://www.scribd.com/doc/174165023/puc-text?secret_password=1mwwt7r2bjlsw4in46jl#from_embed" target="_blank"><u>here</u></a>
                </p>
              </a>
                <p>
                  >> For a printable copy of the Certification of the PUC, click <a href="https://www.scribd.com/doc/174165023/puc-text?secret_password=1mwwt7r2bjlsw4in46jl#from_embed" target="_blank"><u>here</u></a>
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('ben_cui_forum_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ route('history.timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle">
          <u>The Ben Cui Forum</u>
        </div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p style="text-align:center">
              <i>Burlingame, CA (2013)</i>
            </p>
            <div class="allVideoContent">
              <div class="videoDisplayBox">
                <div class="allVideoBttn">
                  <div class="oneVideoBttn" id="button1">1</div>
                  <div class="oneVideoBttn" id="button2">2</div>
                  <div class="oneVideoBttn" id="button3">3</div>
                  <div class="oneVideoBttn" id="button4">4</div>
                  <div class="oneVideoBttn" id="button5">5</div>
                </div>
                <div class="allForumVideos">
                  <div class="oneForumVideo" id="video1">
                    <iframe src="https://www.youtube-nocookie.com/embed/3Sw6q-62u8E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="oneForumVideo" id="video2">
                    <iframe src="https://www.youtube-nocookie.com/embed/7Fcg3OXZAgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="oneForumVideo" id="video3">
                    <iframe src="https://www.youtube-nocookie.com/embed/Ny95gJaiVlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="oneForumVideo" id="video4">
                    <iframe src="https://www.youtube-nocookie.com/embed/P6efDz96-FM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="oneForumVideo" id="video5">
                    <iframe src="https://www.youtube-nocookie.com/embed/02uoXNCvaf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
              <div class="forumPanelBox">
                <div class="onePanelBox">
                  <div class="onePanelTitle">
                    MG (Ret.) Andrew H. Anderson
                  </div>
                  <div class="onePanelImg" id="anderson"></div>
                  <div class="onePanelBio">
                    <div>
                      Battalion commander at the time of the battle of Ben Cui
                    </div>
                  </div>
                </div>
                <div class="onePanelBox">
                  <div class="onePanelTitle">
                    John Snodgrass
                  </div>
                  <div class="onePanelImg" id="snodgrass"></div>
                  <div class="onePanelBio">
                    <div>
                      First lieutenant, acting company commander until injured
                    </div>
                  </div>
                </div>
                <div class="onePanelBox">
                  <div class="onePanelTitle">
                    Art Cook
                  </div>
                  <div class="onePanelImg" id="cook"></div>
                  <div class="onePanelBio">
                    <div>
                      Platoon commander, then assumed company command after Snodgrass's injury
                    </div>
                  </div>
                </div>
                <div class="onePanelBox">
                  <div class="onePanelTitle">
                    Tom Frame
                  </div>
                  <div class="onePanelImg" id="framer"></div>
                  <div class="onePanelBio">
                    <div>
                      Squad leader of 1st Platoon when the battle took place
                    </div>
                  </div>
                </div>
                <div class="onePanelBox">
                  <div class="onePanelTitle">
                    Gary Young
                  </div>
                  <div class="onePanelImg" id="young"></div>
                  <div class="onePanelBio">
                    <div>
                      Medic serving within C Company during the Ben Cui battle
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('the_rifle_and_the_myth_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ route('history.timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>M-16: The Rifle And The Myth</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              In 1957, Eugene M. Stoner, a skilled civilian engineer, was commissioned by the United States Army to develop a shoulder fired weapon that weighed no more than seven pounds, and that was to be capable of automatic as well as semi-automatic firing. In less than a year, he delivered a prototype of the weapon to the Army at Fort Benning, Georgia where it was given a thorough testing. The Army found the rifle, which was named the AR-15, to be equal to its own M-14 in firing at distances of up to five hundred yards. The AR-15 was found to be superior to the M-14 in respect to weight, ease of automatic firing without climbing, and in the weight of its ammunition, which allowed a soldier to carry more rounds without weight increase. After months of testing, the United States Continental Army Command Board recommended that the AR-15 rifle be adopted to replace the M-1 rifle, of World War II fame, as the Army's standard basic infantry weapon.
            </p>
            <p>
              The recommendation was not adopted, and it was not until 1962 that 1,000 of the rifles were sent to Vietnam for months of testing in the hands of United States Advisors and Vietnamese soldiers. This was accomplished over the objections of the Department of the Army by the direct intervention of Robert McNamara, the secretary of Defense. These tests in Vietnam proved to be the publicity needed to persuade the Air Force and the Navy to ask for initial purchases of the weapon, in order to equip their personnel serving in Vietnam. Following the Air Force and Navy requests, Army General Paul Harkins was so impressed with the test results that he placed an order, in the summer of 1962, requesting 20,000 of the rifles for use by United States and Vietnamese troops.
            </p>
            <p>
              The Army Staff resisted the change and was reluctant to adopt the AR-15 in lieu of the more conventional M-14 rifle. Again, Secretary of Defense MacNamara, who was also impressed by the test results showing the Ar-15 to be superior to the M-14, intervened and forced the services into a compromise. This compromise resulted in the Army placing an order in 1963 for 85,000 AR-15 rifles to be used by its troops in Vietnam, while keeping the M-14 rifle as the standard weapon for its other troops stationed in the United States and in Europe.
            </p>
            <p>
              From its first introduction into Vietnam in 1962 until 1966 the rifle, now termed the M-16, enjoyed a reputation of an extremely lethal and dependable weapon among the soldiers using it in combat. In 1966 a jamming malfunction with the M-16 rifle began to become commonplace. This malfunction consisted of the failure of the rifle to extract a fired cartridge shell. The extractor would grip the rim of an expended cartridge and instead of pulling the cartridge from the chamber of the barrel on the rearward movement of the bolt, the extractor would pull a portion of the rim from the cartridge as the bolt moved to the rear, leaving the cartridge in the chamber of the barrel. This then required the soldier to take a cleaning rod and insert it into the muzzle end of the barrel and force the fired cartridge from the chamber, thus clearing the weapon so that it could be fired again. [Fighting a modern war with a muzzle loader; Oh happy, happy, joy, joy.] Confidence among combat troops soon reached such a low level that 1/5th Mech. combat troops began arming themselves with whatever other weapons were available. These included rifles, pistols, shotguns, sub-machineguns and whatever else could be scrounged.
            </p>
            <p>
              Why did a weapon that enjoyed a reputation of reliability in combat suddenly begin to malfunction? Almost as perplexing is the question of why in late 1967, the rifle again began to live up to its old reputation of reliability and the malfunctions ceased.
            </p>
            <p>
              In May of 1967, after numerous complaints had been received by members of the United States Congress regarding the malfunctioning of the M-16 rifle in Vietnam, a special subcommittee of the Congressional Armed Forces Committee, began to investigate the allegations.
            </p>
            <p>
              In Vietnam, when the malfunction started to make its appearance and the combat soldier started asking why, he was told that it was his fault because he was not keeping his weapon clean. A further complication at the time was that there were two types of ammunition available. The IMR and the Ball Propellent became mixed as the Ball Propellent was being introduced and the IMR was being used up. Then it was said that the weapon needed a new buffer and that would cure the problem. With the new buffer the malfunction continued, and again the soldier was told it was his fault because he was not properly cleaning his rifle. The Army tried to blame him and the rifle. As it turns out, the blame for the malfunction rested with neither the soldier nor the M-16 rifle. It rested with the manufacture of 5.56 mm. ammunition with ball propellant, because it was cheaper than using IMR extruded propellant, and there was a huge surplus of old artillery powder from which ball propellant was manufactured.
            </p>
            <p>
              Following is part of the text of the hearings held by the Congressional Armed Forces Special Subcommittee.
            </p>
            <p>
              Respectfully submitted</br>
              Lawrence F. Hadzim</br>
              Neillsville, Wisconsin</br>
            </p>
            <div class="quoteSection">
              <p>
                Hearings before the Special Subcommittee on the M-16 Rifle Program of the Committee On Armed Services
              </p>
              <p>
                House of Representatives
              </p>
              <p>
                Ninetieth Congress
              </p>
              <p>
                First Session
              </p>
              <p>
                May 15, 16, 31, June 21, July 25,26,27,
              </p>
              <p>
                August 8, 9, and 22, 1967
              </p>
              <p>
                (Because of the length of the text of the hearings I am editing them so that parts not pertaining to the jamming of the M-16 rifle are excluded. Highlighting and underlining are mine.)
              </p>
              <div class="sessionTime">
                Washington, D.C., Monday, May 15, 1967</br>
                The subcommittee met at 10:15 a.m., in room 2216, Rayburn Building, Washington, D.C.
              </div>
              <p>
                Hon. Richard H. Ichord, Chairman of the subcommittee presiding. Other members are Hon. Speedy Long, of Louisiana, and the Hon. William Bray, of Indiana. The Chair inserted into the record the letter establishing and outlining the jurisdiction of this subcommittee.
              </p>
              <p>
                Washington, D.C., May 3, 1967
              </p>
              <p>
                Dear Mr. Ichord: Pursuant to Committee Resolution 4, and after consultation with the Hon. William H. Bates, I hereby appoint you as Chairman of a special subcommittee to make inquiry into the development, production, distribution and sale of M-16 rifles.
              </p>
              <p>
                The subcommittee should make thorough inquiry into the history of the M-16 rifle and its present rate of production.
              </p>
              <p>
                The subcommittee should also look into foreign sales of this rifle and be ready to advise the Committee as to whether the present sole-source is commensurate with sound national security. If it is determined that another source is desirable, the subcommittee should also be ready to comment on the cross licensing arrangements that would be necessary.
              </p>
              <p>
                In this investigation, the subcommittee should determine rate of production, number of rifles now supplied to our troops, the number to be supplied, the adequacy of the rifle itself and any proposals for a follow-on weapon.
              </p>
              <p>
                The Hon. Speedy Long and the Hon. William Bray will serve with you on this subcommittee. Mr Earl Morgan, of the Committee staff, is assigned to work with you and your subcommittee on this inquiry.
              </p>
              <p>
                Sincerely,</br>
                L. Mendel Rivers</br>
                Chairman
              </p>
              <p>
                Hearings were then held with Dr. Robert A. Brooks, Assistant Secretary of the Army (Installations and Logistics); Maj. Gen. Henry A. Miley and Lt. Col. John D. White. The matters discussed were mainly the development and initial procurement of the M-16 rifle by the Army and Air Force. Of interest is testimony starting on page 4442:
              </p>
              <p>
                <span>Mr. Ichord:<span> Let me ask you this: What kind of training do you give the individual soldier in this rifle?
              </p>
              <p>
                <span>Dr. Brooks:<span> There is a program of instruction, both of course in the firing and the maintenance of the rifle. I have an officer with me who is very experienced in this, and I would like to ask him if he could comment on that question.
              </p>
              <p>
                <span>Colonel White:<span> Mr. Chairman, in the conversion of a battalion with all M-14 rifles, the old family rifles, to the M-16, we had a rather extensive step-by-step training program in the firing, care, maintenance, assembly, disassembly, of the M-16 rifle, which all troops were equipped with. ... We found the weapon very easy to train troops in maintenance of it and its firing.
              </p>
              <p>
                <span>Mr. Ichord:<span> Thank you very much Colonel. The reason why I asked that question is because of the television report that was made shortly after this committee was appointed, and I am speaking of the NBC Brinkley-Huntley show, where one commentator from Vietnam stated that several men were seen throwing the M-16 away, and there was a statement on the part of one sergeant to the effect that two of his men were killed because their guns jammed.</br>
                Now I know this report has gone back to General Walt and personally I have a great deal of confidence in General Walt. I know he was in on the testing and evaluation of the rifle, and he has stated that at least 95 percent of the Marines are highly in favor of the M-16 rifle.
              </p>
              <p>
                ................
              </p>
              <p>
                But one of the young men did state that when the rifle first arrived that they had, I believe, a 25 percent incident of jamming, when the rifle first arrived in South Vietnam. He attributed the jamming to the failure of the military to provide them with proper cleaning equipment. He kept talking about not having a bore brush, that would get into the chamber mechanism in order to adequately clean the rifle. I was wondering if instruction was offered at the time the rifle was first delivered?
              </p>
              <p>
                <span>Dr. Brooks:</span> Colonel White, I believe, has been speaking to the experience with the units that converted to the rifle prior to going to Vietnam; isn't that correct Colonel White?
              </p>
              <p>
                <span>Colonel White:</span> That is correct, sir.
              </p>
              <p>
                <span>Dr. Brooks:</span> There were also a certain number of units, Mr Chairman, as I pointed out, that went to Vietnam originally equipped with the M-14. General Westmoreland's request in effect was to exchange those M-14's in our infantry maneuver battalions for the M-16's. Those rifles were exchanged in country. They were sent to Vietnam, and the troops exchanged their M-14's for M-16's there.
                </br>
                As far as the adequacy of support in terms of parts, cleaning equipment, and so forth, we had no indication that there was any lack of actual quantities in-theater. There may have been a distribution problem when the actual unit got its rifle. There was a team sent when we got these reports, as we did in the fall of last year when the units were first issued the rifle, to cover this matter of proper training and maintenance and operation of the rifle in the field. That appeared to solve the issue, <u>because since then we have had no such reports through Army channels, at any rate, of any problems with jamming or malfunctioning of the rifle</u>. This was a problem that occurred just when the exchange was taking place in-country.
              </p>
              <p>
                ...............................
              </p>
              <p>
                The text continues on the subject of training and supplying the M-16 to support troops and the sale of the weapon to foreign countries.
              </p>
              <p>............</p>
              <p>
                Then starting on page 4451:
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Mr. Ichord:</span> I think I will have at this time counsel read into the record some of the interviews which we had with 35 or 40 returnees from South Vietnam at Fort Benning, Friday, giving their experiences with the M-16 weapon.
              </p>
              <p>
                <span>Mr. Morgan:</span> Mr. Chairman, the first one is from an officer who was commander of the 5th Battalion, 7th. Cavalry. He served in Vietnam from August 1966 to January 1967, and he stated that he did experience, in his unit, a couple of failures to extract the spent round. .... It was his opinion that this is the best weapon available for Vietnam. He had no complaints, and personally had encountered no problems with the M-16 rifle. ..... Another officer, 1st Battalion, 327th Infantry, 101st Airborne, from October 1965 to October 1966 his unit saw continuous action in the field, .... Any malfunctions were normally caused by dirty ammunition or a bent magazine. This causes the gun to fail to extract the spent round or fail to feed the round into the chamber. .... Another Captain with the 25th Infantry Division experienced no problems in his year in Vietnam. He thought that the M-16 was an outstanding weapon. The problem of malfunctions are caused by failure to keep the rifle clean. Another staff Sergeant with the 1st Battalion of 503rd Infantry served in Vietnam from May 1965 to February 1966, says that he preferred the M-16 in spite of extraction problems. ... One captain cited a problem of jamming which was caused by keeping the cartridge in the chamber overnight, or while on extended mission.
                </br>
                In summary, Mr. Chairman, of the main problems or malfunctions discovered in our interviews, the greatest single malfunction was the failure to extract. This was caused by any number of things; 1, a dirty round; 2, the cartridge expands from being left in the chamber; or 3, the extractor doesn't get enough of the rim of the cartridge.
              </p>
              <p>
                <span>Mr. Ichord:</span> I have additional questions, Dr. Brooks. Who makes the ammunition for the M-16?
              </p>
              <p>
                <span>Dr. Brooks:</span> There are a number of producers of the ammunition, ..... The following is a list of the current producers of 5.56 ammunition:
                <ul>
                  <li>Remington Arms Company - Bridgeport, Connecticut</li>
                  <li>Olin Mathieson Chemical Corp. - East Alton, Illinois</li> <li>Olin Mathieson Chemical Corp. - New Haven, Connecticut</li> <li>Federal Cartridge Corp. - Minneapolis, Minnesota</li>
                  <li>Lake City Army Ammunition Plant - East Independence, Missouri</li>
                  <li>Twin Cities Army Ammunition Plant - New Breghton, Minnesota</li>
                </ul>
                The text continues with discussion of the sale of weapons and ammunition to foreign countries and the status of the SAWS program. (Small Arms Weapons Study) and also the fact that Colt was the only manufacturer being used at the time for the M-16. Also discussed is the lubricant "Dri-Slide."
              </p>
              <p>
                .............
              </p>

              <div class="sessionTime">
                Washington, D.C., Wednesday, June 21, 1967
              </div>
              <p>
                The subcommittee met at 9:30 a.m. in executive session, Hon. Richard H. Ichord presiding.
              </p>
              <p>
                <span>Mr. Ichord:</span> Won't you come forward Mr. Stoner, and have a seat there, and we will proceed informally.
              </p>
              <p>
                <span>Mr. Stoner:</span> All right.
              </p>
              <p>
                <span>Mr. Ichord:</span> Have you ever appeared before a congressional committee before - or is this your first time?
              </p>
              <p>
                <span>Mr. Stoner:</span> Not formally, no.
              </p>
              <p>
                <span>Mr. Ichord:</span> Yes. Well, we are proceeding a little bit differently than we usually do. Usually we require the witness to submit a written statement. </br>
                I think this morning, Mr. Stoner, to kick the matter off we would like for you to just informally give us your version of the development of the M-16 and what part you played in it. And you may proceed as you wish.
              </p>
              <p>
                <span>Mr. Stoner:</span> You want the historical end of it?
              </p>
              <p>
                <span>Mr. Ichord:</span> Yes.
              </p>
              <p>
                <span>Mr. Stoner:</span> (Stoner then gives a background of development of the M-16 starting in 1957.)</br>
                Then starting on page 4546:
              </p>
              <p>
                <span>Mr. Ichord:</span> Are you acquainted with the new buffer that has those ball bearings?
              </p>
              <p>
                <span>Mr. Stoner:</span> No, sir. I have only heard about it.
              </p>
              <p>
                <span>Mr. Bray:</span> Were you satisfied with the buffer when it was originally designed?
              </p>
              <p>
                <span>Mr. Stoner:</span> Yes. The only change that was made to the buffer - and it was in this test here - was the fact that we put less bearing area on it to keep it from accumulating sand. In other words, we put longitudinal guides on it, rather than have a circumferential bearing all the way around the buffer in the tube to run it. We cleared it so the sand could go through easier, and that was the only thing we did.
              </p>
              <p>
                <span>Mr. Bray:</span> There are only a few things that can cause malfunction, when you get down to the brass tacks. It is one that has been worrying us a great deal; the extractor pulls the rim off the cartridge. Wasn't that the way it was?
              </p>
              <p>
                <span>Mr. Ichord:</span> Or cuts through it.
              </p>
              <p>
                <span>Mr. Bray:</span> Or cuts through it. Now, could that be faulty ammunition, or could it be improper measurements in the chamber, or a bad coefficient of expansion in the metal? I would like to hear some discussion as to that, because that is a problem that has been plaguing them.
              </p>
              <p>
                <span>Mr Stoner:</span> Well, while I was working on the program the only occurrence that I saw of that particular thing, a failure to extract was when they were in adverse conditions test, when there was a lot of sand or mud in the chamber, and the weapon was fired. This happened very rarely.<br>
                As I said before, sand in the chamber tends to lock the cartridge in, due to firing - the cartridge case expands, the brass isn't very hard, it embeds the sand grains into the brass, and it also pushes out and more or less locks it into the chamber walls. This causes a case to be literally locked into the gun system at the moment of extraction.</br>
                This occurred in a few instances in very adverse conditions, but this would be in our standard Army sand or mud test, and it happened on a lot of their weapons. It wasn't just on the M-15 - I mean the AR-15, or the M-16 as it is known now.</br>
              </p>
              <p>
                <span>Mr. Ichord:</span> How far could you increase the chamber tolerance to take care of that?
              </p>
              <p>
                <span>Mr. Stoner:</span> That doesn't do any good, because the cartridge case has about 50,000 pounds pressure on it, and it will expand the cartridge out to whatever the chamber might be. It doesn't really do too much good there.</br>
                The other thing that can cause this are rough chambers, in other words, where there are toolmarks cut into the chamber at the time of manufacturing, and I doubt whether you would ever get a weapon like that through acceptance test, because it shows up worse when the gun is new, because these toolmarks in the chamber are sharper at that moment and then tend to smooth up in time.</br>
                So this would cause a gun that would be very apparent to anyone testing the weapon or accepting it at the time ---
              </p>
              <p>
                <span>Mr. Ichord:</span> As a matter of interest, I might tell you that we ran across one boy who said he had used an emery board in the chamber, and after that his weapon didn't have extraction problems. Of course, he may have been getting the dirt out of it.
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, this is true. There are some other things that enter into this.</br>
                For instance, chamber roughness conditions, the cycling rate of the weapon, has an awful lot to do with extraction problems.
              </p>
              <p>
                <span>Mr. Ichord:</span> Then he could have solved his problem?
              </p>
              <p>
                <span>Mr. Stoner:</span> What?
              </p>
              <p>
                <span>Mr. Ichord:</span> Then he really could have solved his problem by smoothing it out, then?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, probably, but he could also aggravate it if he put the marks in the wrong direction. Like I said, the cyclic rate, if it is excessive, will tend to open a weapon too soon when there is still considerable pressure in the chamber. This means ---
              </p>
              <p>
                <span>Mr. Bray:</span> What would that do, if you tried to open it with pressure too quick?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well the cartridge tends to stick - under high residual, pressure in the barrel, and of course with this too soon action you also have a higher bolt velocity. In other words, your bolt is trying to open at higher speeds, so you have an aggravated condition&nbsp; where the cartridge is tending to stick in there a little longer or a little harder, and you are also giving it a harder jerk by driving the bolt faster.
              </p>
              <p>
                <span>Mr. Bray:</span> Then a faster rate of fire could cause that situation?
              </p>
              <p>
                <span>Mr. Stoner:</span> <u>That is probably one of the worse conditions you can get, by increasing the cyclic rate.</u>
              </p>
              <p>
                <span>Mr. Bray:</span> If you have too high a rate of fire for this rifle -
              </p>
              <p>
                <span>Mr. Ichord:</span> You are aware of the fact that this buffer slows this cyclic rate down about 100 rounds a minute.
              </p>
              <p>
                <span>Mr. Stoner:</span> Only the closing cycle, and it has nothing to do with the opening cycle.
              </p>
              <p>
                <span>Mr. Ichord:</span> Oh.
              </p>
              <p>
                <span>Mr. Stoner:</span> And the opening cycle - I would think if this buffer is the type I can envision they put in there, it would actually - it gives you longer buffer time, probably.</br>
                In other words, at the end of the cycle, at the stroke when it hits the back of the gun and gives you a slower return time - but I don't know - the only way you can normally change the cyclic rate on opening is by the gas port size in this weapon, or change the bolt carrier to give more delay in the opening cam, or add weight to the recoiling parts, that rotates the bolt, or the ammunition change. In other words, if you change any of those things, you can change the cyclic rate.
              </p>
              <p>
                <span>Mr. Ichord:</span> At the time the M-16 underwent the test at Fort Benning, were they using extruded propellant?
              </p>
              <p>
                <span>Mr. Stoner:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Or ball propellant?
              </p>
              <p>
                <span>Mr. Stoner:</span> The gun was designed only to fire IMR type powder, which is an extruded propellant, which was made at the time by Du Pont.
              </p>
              <p>
                <span>Mr. Ichord:</span> You seem to be leading into the opinion that the type of powder we are using may have or may be the cause of some of the trouble.
              </p>
              <p>
                <span>Mr. Bray:</span> Using ball powder, anyhow.
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, the ball powder - I am acquainted with that. I was asked about it some years ago by some people in the government, my opinion on what was going to happen when they used it. I will go back a little bit.</br> When the Army got serious about this and they wanted to standardize the ammunition and get up a technical data package on the ammunition, at the time, through all the tests, and at the beginning of the Air Force adoption of the weapon, the ammunition was a commercial buy from Remington. We didn't have a regular tech data package. But when the Army got into it, then they set up a board to make up a tech data package in the ammunition. They made some changes in the ammunition, and I was asked to look at the ammunition technical data package after it was made, which I did. I told them, or this party, that in my opinion it would be very, very risky ---
              </p>
              <p>
                <span>Mr. Ichord:</span> Was that ball?
              </p>
              <p>
                <span>Mr. Stoner:</span> This was ball propellant, and also - they did two things.
              </p>
              <p>
                <span>Mr. Ichord:</span> You recommended against ball propellants?
              </p>
              <p>
                <span>Mr. Stoner:</span> The reason I did was they were getting into this thing heavily and the fact that we had years of firing, both in Vietnam and this country, using the IMR propellant, which the weapon was designed to fire in the first place.
              </p>
              <p>
                <span>Mr. Ichord:</span> IMR is the ---
              </p>
              <p>
                <span>Mr. Stoner:</span> That is the extruded propellant. It is called improved military rifle powder, IMR.<br>
                The reason for staying away from the ball was the fact that we had better results through some of the testing that we did with IMR. And those were cleaner burning characteristics, and there seems to be less smoke, dirt and so forth that come out of the IMR propellants.</br>
                The other thing was that early in this program, just prior to the Fort Benning test, Winchester asked for and got a contract the same as Armalite, to submit some rifles to fire a .22 caliber bullet, and they were actually tested after we got through at Benning. Their first test rounds of ammunition had ball propellant in it, but they gave up on it. I asked Winchester why they gave up on it, and the only answer I got was that they had troubles with that particular ball propellant and they didn't want to go into the time it would take maybe to develop some powder specifically for this rifle.</br>
                So I think they ended up using IMR.</br>
                One of the problems they had was that in a very hot rifle the chamber pressures went excessive, so they had to back off. So all the Winchester ammunition that was used on the Benning test in 1959, to my knowledge, was loaded with the Du Pont powder or the Remington powder.
              </p>
              <p>
                <span>Mr. Bray:</span> Would that additional heat contribute to causing a shell to stick in the chamber?
              </p>
              <p>
                <span>Mr. Stoner:</span> This could - well, what they run into is the temperature went up. Now, this was back a long time ago. This is another batch, or another type of ball propellant. They told me that their chamber pressures when they first fire it in a hot gun -in other words, after you fired the gun 100 or 200 times - were getting up to the cook-off temperatures - in other words, where it would be liable to go off spontaneously. These pressures were going up to and exceeding the proof pressures, which is around 60-some-odd, 58,000 pounds per square inch, and they were, of course, very leery of it, because it is getting up into a rather dangerous condition.</br>
                So they decided rather than try to develop a ball propellant at that time for this test, they just did it the easy way, took the easy way out, and took the IMR propellants.
              </p>
              <p>
                <span>Mr. Bray:</span> That is what you used, IMR?
              </p>
              <p>
                <span>Mr. Stoner:</span> That is what we used. Like I said, we had better luck with it. The biggest problem ---
              </p>
              <p>
                <span>Mr. Ichord:</span> Let me at this time inject, Mr. Stoner.
              </p>
              <p>
                <span>Mr. Stoner: </span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Have you been called by the Army or the military into this problem in Vietnam? Have you gone to Vietnam and looked into this problem?
              </p>
              <p>
                <span>Mr. Stoner:</span> No; I have not. I haven't been asked. In fact, for the last two years or so, most of this information that you are talking about, about a buffer, I can only speculate what that buffer is doing.
              </p>
              <p>
                <span>Mr. Ichord:</span> In the opinion of our experts, the buffer is really not getting at the basis of your problem, or of the problem. As you understand it, you would agree with that conclusion?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, if you are talking about extraction problems, the buffer would have nothing to do with it. The only thing is, the buffer, as I understand it, was to cut down the cyclic rate, and the cyclic rate was causing a lot of their problems.</br>
                In the development of the 63 weapons system - I am bringing this in only as a little sideline - the weapons that were submitted for the SAWS test which started a year ago - small arms weapons systems, or whatever it is called; I think you are aware of that - we started out in the 63 system using the old ammunition which had the original primer and the IMR propellants. When the Army said, "No, we are going to use our ammunition," the cyclic rate of our weapons as it stood went up at least 200 rounds per minute.</br>
                The reason for this is very simple. It is the fact that the time pressure curve on the ball propellant is a more elongated curve. So what happens:</br>
                At the point where the gas is tapped out through the barrel to operate the mechanism, the pressure is considerably higher on the ball propellant than it is on the IMR propellant.
              </p>
              <p>
                <span>Mr. Ichord:</span> Then the new buffer would just be compensating for the ball propellant?
              </p>
              <p>
                <span>Mr. Stoner:</span> Right; for the cyclic rate. It would help compensate on the cyclic rate overall. But now, if you don't change anything else, your opening cycle, in other words, the amount of time it takes to open the weapon, will remain constant. In other words, the first part of the cycle where the bolt opens, which is critical on the extraction of the weapon.
              </p>
              <p>
                ..................
              </p>
              <p>
                Page 4555
              </p>
              <p>
                <span>Mr. Long:</span> Referring to the magazine problem, would the magazine be too high on the front side?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, in the magazine itself there are many things that could happen. It could be a dirty magazine. It could be one that the feed lips have been bent, that is the part up above that guides the round while it is being stripped out of the magazine, or faulty springs.</br>
                One thing I have seen there on television that could aggravate this is this trick that supposedly came out of the Korean War, of taping two magazines together.
              </p>
              <p>
                <span>Mr. Long:</span> They do a lot of that.
              </p>
              <p>
                <span>Mr. Stoner:</span> This is dynamite to any weapon. In fact, it is very poor practice, and the fact that a man will drop to the ground and fire and he jams that magazine down that has been taped on upside down into the dirt, and he can either fill it full of dirt or bend it, and then when he switches around, he is in for trouble.</br>
                This is something that ought to be discouraged by anybody in the field, because it is really tough on magazines.
              </p>
              <p>
                ................................
              </p>
              <p>
                Page 4557
              </p>
              <p>
                <span>Mr Morgan:</span> Mr. Chairman, could I ask a question on the cyclic rates?
              </p>
              <p>
                <span>Mr. Ichord:</span> Go ahead.
              </p>
              <p>
                <span>Mr. Morgan:</span> And the effect of the cyclic rate on certain key parts of the weapon, such as the extractor spring. Would a high cyclic rate have an adverse effect on the extractor spring?
              </p>
              <p>
                <span>Mr. Stoner:</span> Yes, it probably would, and probably the hardest part hit would be the extractor itself.
              </p>
              <p>
                <span>Mr. Morgan:</span> How would it affect the extractor and how would it affect the spring?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, the fact that the faster a weapon goes, the faster the extractor would work, snapping over the round of ammunition. The spring really shouldn't be too much different on the cyclic rate, I don't believe. But the extractor itself would be getting a lot harder jerk every time it pulled the cartridge case out.
              </p>
              <p>
                .....................
              </p>
              <p>
                Starting on Page 4558
              </p>
              <p>
                <span>Mr. Morgan:</span> On the ammunition, Mr. Chairman, I have just two more questions. Are you familiar with the reasons stated by the Army for the changeover from the IMR to the ball powder? Do you have any first hand knowledge or second hand knowledge of that?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, the only - I have a little first hand knowledge because I was approached after this ammunition inspection was made by a person, I think it is the Secretary of Defense's Office, in looking at the technical data package.
              </p>
              <p>
                <span>Mr. Ichord:</span> When was this?
              </p>
              <p>
                <span>Mr. Stoner:</span> This was at the time, I forget how long it was, but it is at least a couple of years ago. He asked me my opinion on it, and I asked him why they were holding out for the ball propellant and they said, well this was more or less, as I could gather, a policy within the Army. They wanted to have everything ball propellant that they could in small arms.
              </p>
              <p>
                <span>Mr. Morgan:</span> Because of the cost savings or what?
              </p>
              <p>
                <span>Mr. Stoner:</span> Well, I think this was one of their reasons, and the fact that it burned a little cooler and so forth.</br>
                Like I said before, I didn't advise it because we had already had over 1,000 weapons in Vietnam that had gone through I thought, very well. These were the weapons that were sent over by ARPA, you know, prior to the adoption. I'm not sure of these times, but in that area of time.
              </p>
              <p>
                <span>Mr. Morgan:</span> 1962?
              </p>
              <p>
                <span>Mr. Stoner:</span> These were using the older cartridges which I didn't hear any complaints on in that particular test, and these were used by the Vietnamese troops who knew very little about any kind of a weapon. And based on that, and all the tests we had for years - in other words, this went on from, like I say, the first test was in 1958. There were quite a few years of testing all over the world. All of our experience was with the other cartridge, with the other propellant, and I didn't quite see changing horses in the middle of the stream without an awful lot of testing before we did it. And I advised this person of that, and also let it be known to other people, but it didn't seem to do much good. They went ahead anyway.
              <!-- Testing is here -->
              </p>
              <p>
                <span>Mr. Morgan: </span> Do you care to identify the individual in the Department of Defense, or the office in the Department of Defense, that asked for your advise on this?
              </p>
              <p>
                <span>Mr. Stoner: </span> Yes, this was Mr. Frank Vee - I think it is V-E-E- and I think he was in the comptroller's office. He had to do with procurement, anyway, on ammunition. <span class="style3">And he asked me my opinion after the fact</span>. In other words, this was rather an odd meeting. He asked me to meet him and I did, and I looked at the technical data package and he said, what is your opinion, and I said, I would advise against it, because - for the reason I just stated. "I asked, so what is going to happen, and he said, well, they already decided this is the way they are going to go, meaning the committee. I said, "So why are you asking me now," and he said, "I would have felt better if you had approved of the package." And "I said, well, we both now don't feel so good."" That was it.
              </p>
              <p>
                <span>Mr. Morgan: </span> Did anyone ever mention to you that the Army might have&nbsp; a large surplus of World War II, or Korean powder that might be reworked for salvage purposes and they might be able to use the extremely large amount large amount of nitro-cellulose that was available, that could convert to the ball powder?
              </p>
              <p>
                <span>Mr. Stoner:</span> No, that wasn't mentioned. But I do know this is one of the advantages of this particular propellant, is you can salvage other propellants and make ball powder out of it. But this wasn't mentioned, no.
              </p>
              <p>
                .........................................
              </p>
              <p>
                Page 4579
              </p>
              <p>
                Washington, D.C., Tuesday, July 25, 1967
              </p>
              <p>
                After opening remarks by the Chairman, several letters from servicemen or their relatives were entered into the record relating to malfunctions of the M-16 rifle in combat, in Vietnam, specifically failure to extract a spent cartridge.
              </p>
              <p>
                First witness was a Mr. Kanemitsu 'Koni' Ito.
              </p>
              <p>
                <span>Mr Ito:</span> Mr. Chairman, I have been - my experience has been 21 years, of course, with the military. At that time I had been the test officer for approximately 12 years, mostly testing in the Arctic, at the Arctic Testing Center. I have been with the then AR-15, when it was introduced by Mr. Gene Stoner of Fairchild, first tested in the Arctic in 1956. At that time all the deficiencies which we noted and corrections thathad to be made for Arctic use were incorporated into this rifle. I have been with this rifle ever since.
              </p>
              <p>
                <span>Mr. Ichord:</span> That was 1958, sir?
              </p>
              <p>
                <span>Mr. Ito:</span> No, sir, 1956. And I have been with Colt since 1963, sir - 1964, I beg your pardon. I have been to Vietnam three separate trips. The first trip was with Lt. Col. Herbert Underwood. My two subsequent trips have been with Maj. Emanual Podurgal. During the first trip over to Vietnam, I was shocked. I had never seen equipment with such poor maintenance.
              <p>
                ...................
              </p>
              <p>
                The first trip I went was in October to November, 1966. The second trip was January to February 1967, and the third from March to April, 1967.
              <p>
                ..................
              </p>
              <p>
                Page 4589
              </p>
              <p>
                <span class="style3">Mr. Ichord:</span> Now, Mr. Ito, with your recitation of the effect of ball propellant powder, used in the ammunition, did you at any time when you were involved in the test make any recommendations to anyone against the use of ball propellant in the M-16?
              </p>
              <p>
                <span>Mr. Ito:</span> Most all test centers, I did, in talking with the project officer and personnel of the test centers, recommend that ball propellant be changed, and IMR be reinstated.
              </p>
              <p>
                <span>Mr. Ichord:</span> You talked, also, to various military people?
              </p>
              <p>
                <span>Mr. Ito:</span> Yes, these were mostly all military personnel, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Some of these military people joined with you in your recommendations, or agreed with you, is that correct?
              </p>
              <p>
                <span>Mr. Ito:</span> I have found no one so far to disagree.
              </p>
              <p>
                <span>Mr. Ichord:</span> Then it is pretty well established as a matter of fact that the ball propellant does speed up the cyclic rate of the gun, and it is a dirtier burning powder.
              </p>
              <p>
                <span>Mr Ito:</span> What changes were made in the M-16 to compensate for the increased extraction rate?
              </p>
              <p>
                <span>Mr. Ito:</span> One of the big changes was the new action spring guide assembly, sir, now called the buffer.
              </p>
              <p>
                ..........................
              </p>
              <p>
                Page 4598
              </p>
              <p>
                <span>Mr. Ichord:</span> You did have reported to you several extraction problems?
              </p>
              <p>
                <span>Mr. Ito: </span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Did you not, Mr. Ito?
              </p>
              <p>
                <span>Mr. Ito:</span> I also saw some, sir.
              </p>
              <p>
                <span> Mr. Ichord:</span> Did you make any finding that inadequate extracting springs contributed to this failure to extract?
              </p>
              <p>
                <span>Mr. Ito:</span> On my first and second trips, I attributed most all of the extraction failure to pitted and bad chambers.
              </p>
              <p>
                .....................
              </p>
              <p>
                <span>Mr. Ichord:</span> Of course, environmental conditions in South Vietnam are quite adverse. What additional problems can we expect in the maintenance of the weapon in South Vietnam? What can be done to minimize any of those problems that think we might expect?
              </p>
              <p>
                <span>Mr. Ito:</span> I believe sir, that both Colt and Weapons Command are doing everything in their power to minimize the cause, or the causes of malfunctions. One is the lubrication. Secondly, is the chrome chamber. And third, it is the buffer.
              </p>
              <p>
                ........................Page 4611
              </p>
              <p>
                <span>Mr. Ichord:</span> The next witness is Colonel Yount. Colonel Yount will you please come forward? Col. Harold W. Yount is a former project manager for rifles. You have been in the weapons command. I thought you were a project manager for the M-16 rifle. What is your current status?
              </p>
              <p>
                <span>Colonel Yount:</span> Casual en route on my way to Korea at the present time, sir.
              </p>
              <p>
                <span> Mr. Ichord:</span> I see. When did you assume your duties as project manager for the M-16 rifle, Colonel?
              </p>
              <p>
                <span>Colonel Yount:</span> March of 1963 until June 1967.
              </p>
              <p>
                <span>Mr. Ichord:</span> March of 1963 until June of 1967. Where were you stationed during that time?
              </p>
              <p>
                <span>Colonel Yount:</span> At Rock Island Arsenal, Ill., the entire period.
              </p>
              <p>
                ......
              </p>
              <p>
                <span>Mr. Ichord:</span> Would you briefly explain to the committee the extent and nature of your duties? .......
              </p>
              <p>
                <span>Colonel Yount:</span> I was designated as the project manager of the AR-15 rifle back in March of 1963, and I reported to the Commanding General of the Army Material Command through the Commanding General of the Weapons Command, I was delegated full line authority by the Commanding General of the Army Material Command.
              </p>
              <p>
                <span>In that I was responsible for the definition, the development, and the acquisition of the entire system</span>. This includes, as applicable, the research, development, procurement, production, distribution, logistical support, personnel training, operational testing, and development. I was responsible for the overall management of my entire procurement program. And at the present time, or at the time of my leaving the project manager's office,</p><p><span> I was responsible not only for the M-16 rifle but also other rifle systems - as well as the accessories, various components, and ammunition peculiar to the rifle systems </span>classified type standard A. I was also responsible for coordinating other customer procurements as required, such as for the Marine Corps, the Air Force, and the Navy; including international codevelopment, coproduction, and logistical support as assigned. I was expected to develop and maintain a close coordination and working relations with the users of the systems and with the Department of the Army staff agencies, and staff elements representing the users. I was responsible, also, to direct, coordinate and take appropriate action to obtain services and equipment subsystems from appropriate AMC subordinate commands, other military departments, other government agencies, overseas installations, foreign governments, and industry.
              </p>
              <p>
                This concludes my summary of the responsibilities extracted from my charter as project manager.
              </p>
              <p>
                ..................
              </p>
              <p>
                <span>Mr. Ichord:</span> Now, at the time you assumed your duties as project manager, in 1963, what type of powder was being used in the 5.56 ammunition at that time in the rifle?
              </p>
              <p>
                <span>Colonel Yount: IMR-4475.
              </p>
              <p>
                <span>Mr. Ichord:</span> Some of the rifles were in Vietnam at the time, were they not, 1962, and 1963?
              </p>
              <p>
                <span>Colonel Yount:</span> These were not under my control, however, I understand there were some in a special test.
              </p>
              <p>
                <span>Mr. Ichord:</span> Were being used by Special Forces?
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct.
              </p>
              <p>
                <span>Mr. Ichord:</span> Is it your understanding that the reports on the use of the rifle coming back from South Vietnam were very good?
              </p>
              <p>
                <span>Colonel Yount:</span> Excellent; yes, sir.
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Mr. Ichord:</span> Well, lets get back to the ball propellant. You said at that time they were using IMR.
              </p>
              <p>
                <span>Colonel Yount:</span> 4475.
              </p>
              <p>
                <span>Mr. Ichord:</span> That is the same as an extruded propellant?
              </p>
              <p>
                <span>Colonel Yount:</span> That is an extruded propellant.
              </p>
              <p>
                <span>Mr. Ichord:</span> How many types of IMR powder do they have?
              </p>
              <p>
                <span>Colonel Yount:</span> At the time?
              </p>
              <p>
                <span>Mr. Ichord:</span> Yes.
              </p>
              <p>
                <span>Colonel Yount:</span> For use in 556 ammunition?
              </p>
              <p>
                <span>Mr. Ichord:</span> Correct.
              </p>
              <p>
                <span>Colonel Yount:</span> There had been some use of IMR-4198, but 4475 was being used most of the time, almost exclusively.
              </p>
              <p>
                <span>Mr. Ichord:</span> Of course as a weapons expert, you do realize it makes a lot of difference in the functioning and the cyclic rate of the weapon, depending upon which powder you use, is that correct?
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Were you advised of any proposed change from IMR-4475 to ball propellant? and if so, when?
              </p>
              <p>
                <span>Colonel Yount:</span> As I recall, in the latter part of 1963, or early 1964, we received a request from the Air Force to purchase some ammunition for them. On this request they specified exclusively ball propellant. This ball propellant was not authorized at the time in our technical data package, and we had to make an exception for this procurement.
              </p>
              <p>
                <span>Mr. Ichord: </span> They specified?
              </p>
              <p>
                <span>Colonel Yount:</span> They specified ball propellant.
              </p>
              <p>
                <span>Mr. Ichord:</span> Ball propellant.
              </p>
              <p>
                <span>Colonel Yount:</span> The U.S. Air Force would not accept anything else, except ammunition loaded with ball propellant.
              </p>
              <p>
                <span>Mr. Ichord:</span> Now, in your position as project manager for the M-16, were you charged with the responsibility of purchasing ammunition, too?
              </p>
              <p>
                <span> Colonel Yount:</span> I was, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> For the Air Force, also?
              </p>
              <p>
                <span>Colonel Yount:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> What did you do when you received that information?
              </p>
              <p>
                <span>Colonel Yount:</span> This was coordinated through our four services' technical coordinating committee, and we agreed to go ahead and buy this for the Air Force, and subsequently have it thoroughly tested, and make a determination if we were going to standardize it as part of our technical data package for the ammunition.
              </p>
              <p>
                <span>Mr. Ichord:</span> Did you have some reservations about buying it and using it in 5.56 ammunition?
              </p>
              <p>
                <span>Colonel Yount:</span> Reservations only to the effect, sir, we didn't have the test experience data and not because we had any reservations it would be unsatisfactory. ........
              </p>
              <p>
                <span>Mr. Ichord:</span> You did know that it would speed up the cyclic rate?
              </p>
              <p>
                <span>Colonel Yount:</span> We did not. There had never been any indication prior to the M-16 rifle, that this would result in an increase in cyclic rate in a weapon.
              </p>
              <p>
                <span>Mr. Ichord:</span> Where was Mr. Stoner at this time, the inventor of the weapon? Were you in contact with him?
              </p>
              <p>
                <span>Colonel Yount: </span> Yes, indeed, right from the beginning of the program.
              </p>
              <p>
                <span>Mr. Ichord:</span> Did you talk to him about the conversion and the use of ball propellant ammunition, in the M-16?
              </p>
              <p>
                <span>Colonel Yount:</span> No, not until after it had actually been put into operation.
              </p>
              <p>
                ............................
              </p>
              <p>
                <span>Mr. Ichord:</span> Are you telling this committee that you do not feel that the ball propellant has had any adverse effect upon the operation of the M-16 rifle?
              </p>
              <p>
                <span>Colonel Yount:</span> I am telling the committee that I had no evidence it has had any adverse effect.
              </p>
              <p>
                <span>Mr. Ichord:</span> You have had no evidence, after being project manager from March of 1963 to June of 1967, that the use of ball propellant ammunition is a part of your problem?
              </p>
              <p>
                <span>Colonel Yount:</span> It was a part of the problem as far as cyclic rate is concerned.
              </p>
              <p>
                <span>Mr. Ichord:</span> You said you had never talked to Mr. Stoner, the inventor of the rifle. What would you say if I told you that, if you had checked with him, he would have been greatly opposed to the change from IMR to ball propellants? Would you think that would be a serious mistake, the inventor of the rifle, one who obviously knows more about the rifle than anyone else?
              </p>
              <p>
                <span>Colonel Yount:</span> This would depend upon his reasons, sir, for not wanting the ball propellant in the weapon.
              </p>
              <p>
                <span>Mr. Ichord:</span> What if I told you I ascertained from Mr. Stoner, and he said ball propellant burns dirty, it leaves more debris, it speeds up the cyclic rate of the weapon, and would increase malfunctions?
              </p>
              <p>
                <span>Colonel Yount:</span> I would agree with him. However, I want to qualify the statement there that this increase in malfunctions would be primarily due, with all the evidence that we had, due to an increase in cyclic rate; we have satisfied this requirement with the new buffer. Therefore ---
              </p>
              <p>
                <span>Mr. Ichord:</span> You think you have satisfied the requirement with a new buffer, anyway; is that correct?
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct. We have no test evidence that would indicate otherwise, sir.
              </p>
              <p>
                <span>Mr. Long:</span> You don't think, the, Colonel, the tests that are going on in Vietnam, are any evidence?
              </p>
              <p>
                <span>Colonel Yount:</span> Oh, it definitely is evidence; this is true. However, the type of controls there are much less than the type we could maintain here in the United States.
              </p>
              <p>
                <span>Mr. Ichord:</span> Now, Colonel, you do have a considerable number of guns in Vietnam with the new buffer, do you not?
              </p>
              <p>
                <span>Colonel Yount:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Have you had any reports of malfunctions, failures to extract when the new buffer has been used?
              </p>
              <p>
                <span>Colonel Yount:</span> Not if the chamber has been kept in proper serviceable condition, no.
              </p>
              <p class="style2">
                ..................
              </p>
              <p>
                <span>Mr. Ichord:</span> How many times did you go to Vietnam as project manager of the M-16?
              </p>
              <p>
                <span>Colonel Yount:</span> One time in November 1966, sir.
              </p>
              <p>
                ....
              </p>
              <p>
                <span>Mr. Ichord:</span> First of all, what was the occasion for your going to South Vietnam in November 1966?
              </p>
              <p>
                <span>Colonel Yount:</span> I had already dispatched a team to Vietnam as a result of their request to assist ---
              </p>
              <p>
                <span>Mr. Ichord:</span> Why did they request you to go to South Vietnam?
              </p>
              <p>
                <span>Colonel Yount:</span> They said they were having an undue rash of malfunctions, and I volunteered at that time to send a team of experts over there to help them ascertain the problems, and put the weapons back into condition, if they would simply request that I do so. ...............
              </p>
              <p>
                <span>Mr. Ichord: </span> You were head of the team?
              </p>
              <p>
                <span>Colonel Yount:</span> No, sir. Colonel Underwood of my office was the head of the team.
              </p>
              <p>
                <span>Mr. Ichord:</span> That was in ---
              </p>
              <p>
                <span>Colonel Yount</span>: He went over in October of
                1966.
              </p>
              <p>
                <span>Mr. Ichord:</span> I see. Then you came later?
              </p>
              <p>
                <span>Colonel Yount:</span> Right. He called me on the telephone and told me that he would advise me to come over here and see this for myself, because when he came home he didn't think he would be able to convince me of the conditions, </span>of the various things that we would have to do in order to correct the situation.
              </p>
              <p>
                ......................
              </p>
              <p>
                <span>Colonel Yount:</span> So I did see a number of weapons over in Vietnam. I talked with the various commanders, there, including General Westmoreland, and was trying to get a feel on what was happening over there. And it appeared at that time that the majority of the trouble appeared to be at least a lack of proper maintenance and cleaning. However, there were some product improvements that might be made that would assist the soldiers in the field so that it would not be so difficult to maintain.
              </p>
              <p>
                ...............
              </p>
              <p>
                <span>Mr. Ichord:</span> What units did you visit?
              </p>
              <p>
                <span>Colonel Yount:</span> It was Field Force II Headquarters, I believe Field Force II Headquarters, the commander of the 25th Division. The commanding general of the aviation brigade; the 1st. Cav Division. The 1st Infantry Division. And General Walt with the Marine Corps.
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Mr. Ichord:</span> Now, what recommendations did you make?
              </p>
              <p>
                <span>Colonel Yount:</span> We had a considerable number of investigations initiated. One, looking into the finish of the weapon. Two, looking into the chrome plating of the chambers. I started immediately on the repair parts situation, to emphasize advance shipments in getting ready for the big push - we knew there was a big push going to come as a result of the maintenance emphasis in Vietnam cleaning materials, cleaning rods, bayonets and all the repair parts. We immediately ascertained their stock status, to get the jump on the demands before they came in.
              </p>
              <p>
                <span>Mr. Ichord:</span> You found a shortage of cleaning materials, did you not, while you were there?
              </p>
              <p>
                <span>Colonel Yount:</span> While I was there, yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Go ahead with any statements you wish to make.
              </p>
              <p>
                <span>Colonel Yount:</span> That more or less covers the major recommendations, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> You didn't make any recommendations - perhaps I don't understand you - you didn't make any recommendations as to the change in the buffer at that time?
              </p>
              <p>
                <span>Colonel Yount:</span> Not at that time, no, sir. You see we had already picked up as a result of the SAWS program, something that had caused an increased amount of malfunctions and we were trying to determine the cause of the problem, which resulted in the change in the buffer. It was not a result of the trip to Vietnam at all.
              </p>
              <p>
                ..................
              </p>
              <p>
                <span>Mr. Ichord:</span> What is the most prevalent malfunction that you will get because of the higher cyclic rate?
              </p>
              <p>
                <span>Colonel Yount:</span> The higher cyclic rate results in a failure to feed, would be one, and, of course, this failure of the bolt to stay to the rear after firing the last round is another.
              </p>
              <p>
                <span>Mr. Ichord:</span> How about failure to extract?
              </p>
              <p>
                <span>Colonel Yount:</span> I know of no significant relationship between the two.
              </p>
              <p>
                <span>Mr. Ichord:</span> No significant relationship between the higher cyclic rate and the failure to extract?
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct.
              </p>
              <p>
                <span>Mr. Ichord:</span> Mr. Long, I think you had a question?
              </p>
              <p>
                <span>Mr. Long:</span> At this point I would like to ask this: After the change was made from IMR propellant to the ball propellant, did you have a conversation with Mr. Stoner in regard to the change in the propellant? You indicated earlier that you didn't prior to the change, but after the change.
              </p>
              <p>
                <span>Colonel Yount:</span> After the change I had discussed the ammunition with Mr. Stoner, but it was in regard to the applications in the Stoner, rather than in the rifle, in his machinegun, and other Stoner weapons, rather than in the M-16.
              </p>
              <p>
                <span>Mr. Long:</span> You didn't discuss it with him, with regard to the M-16?
              </p>
              <p>
                <span>Colonel Yount:</span> I probably did there also, but I don't recall the conversation.
              </p>
              <p>
                <span>Mr. Long: </span> You don't recall the reaction he had?
              </p>
              <p>
                <span>Colonel Yount:</span> I do not.
              </p>
              <p>
                <span>Mr. Ichord: </span> Is there any knowledge of anyone in your command, or anyone in the Army talking to Mr. Stoner about the conversion to ball propellant before the conversion was made?
              </p>
              <p>
                <span>Colonel Yount:</span> Not to my knowledge, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Would you state that the M-16 was designed to use the IMR propellant, rather than the ball propellant?
              </p>
              <p>
                <span>Colonel Yount:</span> I would say this: When the weapon was designed, Mr. Stoner went to Remington Arms, and asked them to manufacture ammunition for him. They utilized the propellant which was designed to be used in the 7.62; namely, the IMR-4475, and that was used in his weapon at the time. I do not believe there is a complete correlation that the weapon was specifically designed to be utilized with that particular propellant.
              </p>
              <p>
                <span>Mr. Long:</span> You don't think, then, possibly he might have had in mind, or Remington might have had in mind, the fact of the cyclic rate?
              </p>
              <p>
                <span>Colonel Yount:</span> The cyclic rate, yes.
              </p>
              <p>
                <span>Mr. Long:</span> When they used the IMR propellant?
              </p>
              <p>
                <span>Colonel Yount:</span> No, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Did the Army stock ball propellant solely on the basis of the Air Force test?
              </p>
              <p>
                <span>Colonel Yount:</span> No, sir; we conducted extensive tests on our own, after we had ammunition loaded with ball propellant, and then finally did approve it as an alternate propellant </span> </u>that could be used by the contractor in any procurement.
              </p>
              <p>
                ..................
              </p>
              <p>
                <span>Mr. Bray:</span> Then in the change of powder
                for the M-16, if you made any material changes in powder, you would also need to consider the size of the gas ports, wouldn't you?
              </p>
              <p>
                <span>Colonel Yount:</span> Yes, sir. We did.
              </p>
              <p>.....</p>
              <p>
                <span>Mr. Bray: </span> There is no doubt in your mind, is there, that for the same size port that you get a higher cyclic rate of fire, for example, everything else being equal, with the ball than you did the IMR?
              </p>
              <p>
                <span>Colonel Yount:</span> That is true
              </p>
              <p>
                <span>Mr. Long: </span> Now the modification for the new buffer, et cetera, could you go back to the IMR?
              </p>
              <p>
                <span>Colonel Yount:</span> Not at all. It has no relationship, sir.
              </p>
              <p>
                <span>Mr. Long:</span> You couldn't go back to it at all, even if you had it?
              </p>
              <p>
                <span>Colonel Yount:</span> You are talking about going back to the old 4475?
              </p>
              <p>
                <span>Mr. Long:</span> That which was originally used in the M-16.
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct. We have no reason ever to go back to that old IMR-4475, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Could you go back?
              </p>
              <p>
                <span>Colonel Yount:</span> Could we, and meet the velocity-pressure relationships?
              </p>
              <p>
                <span>Mr. Long:</span> With the new buffer?
              </p>
              <p>
                <span>Colonel Yount:</span> No, sir. The buffer has no bearing on the velocity-pressure relationship, sir.
              </p>
              <p>
                <span>Mr. Long:</span> You couldn't use it now if you had it, since you put in the new buffer?
              </p>
              <p>
                <span>Colonel Yount:</span> That is not the point, sir.
              </p>
              <p>
                <span>Mr. Ichord: </span> If the gentleman will yield, let me ask you a clarifying question there. I believe you didn't understand the question put to you by Mr. Long. You slowed down the cyclic rate by approximately 100 with the buffer. We have established in the record that IMR is not as fast as ball propellant. Would you not say if you put in IMR, would you not slow it down approximately another 100, or how does that work?
              </p>
              <p>
                <span>Colonel Yount:</span> That would depend on the type of IMR you are using. We have IMR propellants being utilized today, the latest propellant, the 8208 ---
              </p>
              <p>
                <span>Mr. Ichord:</span> Do you have that in use now in Vietnam? The committee has been advised there is no IMR propellant in Vietnam; somewhere along the line I think we have that in the record that only ball propellant is being used in Vietnam.
              </p>
              <p>
                <span>Colonel Yount:</span> I believe, sir, there has been ammunition loaded with 8208M propellant, sent to Vietnam and I can verify that with a gentleman in the audience, if I may.
              </p>
              <p>
                <span>Mr. Ichord:</span> 5.56 ammunition?
              </p>
              <p>
                <span>Colonel Yount:</span> 5.56 ammunition.
              </p>
              <p>
                <span>Mr. Ichord:</span> I would like for you to verify it. It contradicts what information we have.
              </p>
              <p>
                <span>Colonel Yount:</span> Mr. Spaulding, has the 8208 been shipped to Vietnam?
              </p>
              <p>
                <span>Mr. Spaulding:</span> I believe the answer is the ammunition has been in production about 6 months. The exact status in the supply chain is difficult to establish on individual lots, but we would presume in view of the shipping rate it has reached the theater.
              </p>
              <p>
                <span>Colonel Yount:</span> Over 200 million rounds have been produced to date.
              </p>
              <p>
                <span>Mr. Bray:</span> That is in this 5.56 ammunition?
              </p>
              <p>
                <span>Colonel Yount:</span>
                Yes, sir.
              </p>
              <p>
                <span>Mr. Bray:</span> I thought you said IMR wasn't as good? I withdraw that. What did you say? I thought you spoke very highly of ball propellant. You did, didn't you?
              </p>
              <p>
                <span>Colonel Yount:</span> It meets our specifications better than any propellant we have at the present time.
              </p>
              <p>
                <span>Mr. Bray:</span> Then if that is true, why did you send the 200 million IMR over there?
              </p>
              <p>
                <span>Colonel Yount: </span> It is also meeting the specifications, sir.
              </p>
              <p>
                <span>Mr. Bray:</span> I must be confused. I must have misunderstood you. Will this IMR lower or increase the cyclic rate over the ball?
              </p>
              <p>
                <span>Colonel Yount:</span> It will probably lower the cyclic rate somewhere between 30 and 100 rounds per minute, sir.
              </p>
              <p>
                <span>General Miley:</span> I wonder if I could help out a little bit here?
              </p>
              <p>
                <span>Mr. Bray:</span> I hope somebody does.
              </p>
              <p>
                <span>General Miley:</span> The older version of IMR and the new version of IMR are the difficulty. I am not an expert, but I have been doing a monthly report for the Chief of Staff. Let me explain as I understand it. We would like to help you here. The old IMR could not be produced by Du Pont in the quantities required and meet the pressure-velocity requirements of our specification on powder. Consequently, the Army shifted to ball powder which could consistently and in large quantity meet the ballistic requirements.
              </p>
              <p>
                <span>Mr. Bray: </span> All right; fine. What is the difference between it? It has nitrocellulose; is that correct?
              </p>
              <p>
                <span>General Miley:</span> Sir, you have lost me there immediately.
              </p>
              <p>
                <span>Mr. Bray:</span> I want somebody that knows more about this than I do. I do know a little.
              </p>
              <p>
                <span>General Miley:</span> We will get a powder expert up here. Let me finish. Then I will get out of here. Then Du Pont continued to persist in the development of IMR powder and finally has produced not a new kind of powder, but a different IMR powder with different characteristics which by and large with few exceptions meets the specification. So the Army buys the ammunition for the 5.56 rifle and specifies the ballistic characteristics of the powder. They don't care what kind of powder it is, as long as it meets the ballistics specifications.
              </p>
              <p>
                <span>Mr. Bray:</span> There is a little more than ballistics; isn't there something like carbon?
              </p>
              <p>
                <span>General Miley:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> What I don't understand is, we established ball propellant increases the cyclic rate and the fact that it increases the cyclic rate does give you a problem.</span> We have established the fact that ball propellant burns dirtier, but still you say it is a fine powder because it meets your specs. That is certainly coming down from the top. You need good powder.
              </p>
              <p>
                <span>General Miley</span>: Yes, sir. But the only powder in time of war that consistently met our requirement, the specification was the ball powder. And as I say, Du Pont continued to perfect, to experiment with their IMR powders, and finally came up with an IMR powder that also meets the specification. So now we have two powders that would, with some exceptions, meet the specification for the 5.56 bullet, the 5.56 round.
              </p>
              <p>
                ............
              </p>
              <p>
                <span>Mr. Long:</span> Now, all the buffers haven't been changed in all the weapons in Vietnam, have they?
              </p>
              <p>
                <span>Colonel Yount:</span> They have not, not all of them.
              </p>
              <p>
                <span>Mr. Bray:</span> General, IMR is a little more expensive than ball propellant, isn't it?
              </p>
              <p>
                <span>Colonel Yount:</span> Originally the IMR was a little more expensive because of the method of manufacture of the ball propellant being one that you could utilize and reconstitute scrapped propellant.
              </p>
              <p>
                <span>Mr. Bray:</span> That is something I asked earlier. You had a lot of older powder that was heavy in nitrocellulose, didn't you?
              </p>
              <p>
                <span>Colonel Yount:</span> The theory here is, sir ---
              </p>
              <p>
                <span>Mr. Bray:</span> Did you have it?
              </p>
              <p>
                <span>Colonel Yount: </span> Yes, sir.
              </p>
              <p>
                <span>&nbsp;&nbsp;&nbsp; Mr. Bray:</span> OK; fine. Then you could use that cheaper. It was cheaper because there was a surplus that was of no value unless it was changed, isn't that true?
              </p>
              <p>
                <span>Colonel Yount</span>: This is true, yes, sir.
              </p>
              <p>
                <span>Mr. Bray:</span> Isn't that really the reason you stopped the IMR and went to this new ball propellant, because you - I am not saying "you" personally - but that you could use the nitrocellulose that they had in surplus? That is the reason they went to the ball propellant?
              </p>
              <p>
                <span>Colonel Yount:</span> I would like to ask Mr. Spaulding of the Munitions Command who is an expert in propellants to answer that question if he may.
              </p>
              <p>
                <span>Mr. Ichord:</span> What is the name, sir?
              </p>
              <p>
                <span>Mr. Spaulding:</span> Scott W. Spaulding. I am a munitions engineer at the Headquarters of the U.S. Army Munitions Command.
              </p>
              <p>
                <span>Mr. Ichord:</span> Proceed.
              </p>
              <p>
                <span>Mr. Spaulding:</span> I will try to answer the question in this way:
              </p>
              <p>
                Large stocks of excess cannon propellants, which have been used in the manufacture of ball propellants for many years, since the end of the Second World War, have gone into ball propellants for use in the caliber .30 carbine ammunition, the caliber .30 ammunition for the M-1 rifle and the Browning machineguns, into the 7.62 millimeter ammunition for the M-14 rifle, the M-60 machinegun and the M-73. Large quantities have gone into the 20 - millimeter ammunition for use in the Air Force 20-millimeter cannon, the Vulcan. The requirements in total which the addition of 5.56 propellants added on top of the other cartridges I have named would have been - I can't give you the precise figures, but it would have been relatively small, looked at over the number of years.
              </p>
              <p>
                <span>Mr. Bray:</span> You did go into it, though, didn't you?
              </p>
              <p>
                <span>Mr. Spaulding:</span> It goes into all ball propellants, sir.
              </p>
              <p>
                <span>Mr. Bray: </span> But did not go into the IMR?
              </p>
              <p>
                <span>Mr. Spaulding:</span> Du Pont has never been able to use these stocks of obsolete propellant in the manufacture of IMR propellant. Olin has been successful in using them, so they have gone into ball propellants.
              </p>
              <p>
                <span>Mr. Bray:</span> And that is much cheaper, because they have, you said, an obsolete stockpile of that. So you do save money. I am not a Scotchman, I am not against saving money, but you do save money by using that, don't you?
              </p>
              <p>
                <span>Mr. Spaulding:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Bray:</span> That is all.
              </p>
              <p>
                <span>Mr. Ichord:</span> I want to get back to this buffer modification.
              </p>
              <p>
                <span>Colonel Yount:</span> Yes, sir, Mr. Chairman. The buffer actually fulfills several purposes. If I may, I have Mr. William C. Davis here with me, the Chief of my Technical Division. I would like for him to respond to this, if he may.
              </p>
              <p>
                <span>Mr. Ichord: </span> Yes.
              </p>
              <p>
                <span>Mr. Davis:</span> I am Davis, from Colonel Yount's technical staff, sir. I think you could summarize the buffer requirements in terms of four things; (1) it does slow the cyclic rate down as Colonel Yount has mentioned. Second, it controls carrier rebound. Third, it avoids the failure of the ring springs. Fourth, it cushions the rear impact to prevent the premature engagement of the bolt catch.
              </p>
              <p>
                .............
              </p>
              <p>
                <span>Mr. Ichord:</span> Will this buffer be more apt to slow your cyclic rate down on a forward motion, more so than the backward motion?
              </p>
              <p>
                <span>Mr. Davis:</span> No, sir. The percentage of reduction would be about the same in the recoil, or rearward motion as in the counter recoil, or forward motion. In terms of absolute time, the effect is less on the recoil because the recoil is at a more rapid rate. In other words, the recoil part of the cycle requires less total time.
              </p>
              <p>
                ................
              </p>
              <p>
                <span>Mr. Ichord:</span> You could have slowed down the cyclic rate by reducing the size of the gas port. Did you consider this as a possible modification?
              </p>
              <p>
                <span>Mr. Davis: </span> Yes, sir; that was considered, and it would slow the cyclic rate. However, in general it is more advantageous to reduce the rate by increasing the weight of the parts, than to subtract energy from the system. Two basic ways to reduce the cyclic rate, subtract operating energy from the cycle which may reduce reliability in adverse conditions; or to increase the weight of the parts.
              </p>
              <p>
                ..............
              </p>
              <p>
                <span>Mr. Ichord:</span> Colonel, if you will keep your seat there, sir, you encountered considerable extraction problems, a lot of extraction problems were reported to you when you were in South Vietnam, were there not?
              </p>
              <p>
                <span>Colonel Yount:</span>That is correct, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> I would like to ask you, sir, how is this buffer going to help alleviate any of your extraction problems?
              </p>
              <p>
                <span>Colonel Yount:</span> I don't think the change in the buffer will have an appreciable effect on the extraction problem, sir. I think there are two categories of malfunction, one associated with the condition of the chamber, the other associated with the cyclic rate. The remedies are different, of course. THE EXTRACTION PROBLEM HAS TO BE ATTACKED FROM THE STANDPOINT OF THE CHAMBER. The cyclic rate problems have to be attacked in some other way.
              </p>
              <p>
                <span>Mr. Ichord: </span> I don't know who I should ask this: HAVE YOU ATTACKED THE EXTRACTION PROBLEM, COLONEL?
              </p>
              <p>
                <span>Colonel Yount:</span> We have asked Colt TO LOOK INTO THE FEASIBILITY of chrome plating the chamber.
              </p>
              <p>
                <span>Mr. Ichord:</span> Explain to the committee why chrome plating the chamber will help improve it?
              </p>
              <p>
                <span>Colonel Yount:</span> The M-14 rifle does have a chrome plated chamber, as well as a bore, and in this particular rifle [M-16] it has a chrome-molyvanadium barrel, the best machinegun type barrel steel there is. It does not have a plated chamber or bore. Initially in the program we did not feel that chrome plating was necessary because of the good steel that was in his particular barrel. It was considered as gold-plating, actually, at the time. However, since that time</span> we feel that the corrosion resistance of chromium plating within this chamber is a thing that is necessary to help us lick this extraction problem, inasmuch as a chrome plated chamber will not corrode, such as a plain chrome-moly-vanadium chamber would do. The contract modification has been made with the Colt Co. and the initial production of barrels with chrome plated chambers is scheduled for the month of August. However, the strike may have an effect on this.
              </p>
              <p>
                <span>Mr. Ichord: </span> Do we have any test rifles with chrome chambers in them out in South Vietnam at the present time?
              </p>
              <p>
                <span>Colonel Yount:</span> There are a few; yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Were they there before you left your duties as project manager?
              </p>
              <p>
                <span>Colonel Yount:</span> They were; yes, sir. We received no written reports on them. However, we did receive reports back that all of those that were examined, they could find nothing wrong with the chambers, and they were standing up excellently. And we have also conducted some tests. The Air Force also has conducted tests on chrome plated chambers.
              </p>
              <p>
                ............
              </p>
              <p>
                <span>Mr. Ichord:</span> It would assist in the extraction problem, would it not, by using the gas that is remaining in the barrel? Wouldn't that help you use some of the gas?
              </p>
              <p>
                <span>Mr. Davis: </span> I think it would probably not give us any appreciable help in our extraction problem, WHICH ARISES FROM CORRODED OR RUSTY CHAMBERS. The cartridge remains tightly stuck in many of these cases long after the gas pressure has subsided.
              </p>
              <p>
                <span>Mr. Ichord:</span> Mr. Davis, that is why we are so much concerned about this dirty burning ammunition, ball propellant, with ball propellant powder.
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Mr. Ichord:</span> You are sure that the chrome plating is the way to get the extraction problem solved?
              </p>
              <p>
                <span>Mr. Davis:</span> Yes, sir. I think it is the most advantageous course we have devised so far, .......
              </p>
              <p>...............</p>
              <p>
                <span>Mr. Ichord:</span> Now the conversion was made from IMR to ball propellant about 1963 - or do we have that date in our records? We do, don't we, counsel?
              </p>
              <p>
                <span>Mr. Morgan:</span> We are not sure, Mr. Chairman. It was testified either 1963 or 1964. Do you know, Colonel Yount?
              </p>
              <p>
                <span>Colonel Yount: </span> 1964, sir.
              </p>
              <p>
                <span>Mr. Bray: </span> Colonel, when did they make the decision to go back to IMR, this new IMR that you mentioned, which I was not aware of, because we did not find any in the theater when we were there. Do you know what the time decision is on that?
              </p>
              <p>
                <span>Colonel Yount:</span> We have tried to keep two different types of propellants authorized at all times for competitive purposes, whether it be IMR or ball propellant. We have had a series of propellants over the period of years trying to keep competition alive. The actual time, it was in February 1965, was it not, when we went back out - I believe it was in February 1965 when we went back out, then, to the field, when we found out this CR8136 was no longer satisfactory. We then asked the propellant industry, Hercules, Olin Mathieson, and Du Pont, to recommend to us their best approach to A NEW PROPELLANT FOR THE M-16 SYSTEM. Out of this came Hercules submitting their HPC-11, and Olin Mathieson had said they could not improve upon their WC-846.
              </p>
              <p>
                <span>Mr. Bray:</span> That was the original IMR?
              </p>
              <p>
                <span>Colonel Yount:</span> That was the original ball for 5.56 ammunition.
              </p>
              <p>
                <span>Mr. Bray:</span> The original ball?
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct. Du Pont then submitted the 8208-M. In this test of course, we used the Wc-846 as a control. It was not submitted as a new propellant. And the 8208-M did pass our ballistic test and was authorized in the technical data package as an alternate propellant, and has been put into use since that time. The record shows here that we have produced almost 200 million rounds to date, WHICH HAVE BEEN LOADED WITH THIS NEW IMR PROPELLANT.
              </p>
              <p>
                <span> Mr. Bray: </span> I hope it gets over to Vietnam; it probably is by now.
              </p>
              <p>
                <span>Mr. Long: </span> Right there at that point, now - but that is designed for the new buffer; is it not?
              </p>
              <p>
                <span>Colonel Yount:</span> No, sir. It was not designed for any new buffer. It was simply a propellant submitted by the propellant industry for use in the weapon. They did not know anything about the buffer.
              </p>
              <p>
                <span>Mr. Long: </span> Would it have any effect whether it was used in the old buffer or the new buffer?
              </p>
              <p>
                <span>Colonel Yount:</span> Yes; it would. The cyclic rate would be different.
              </p>
              <p>
                <span>Mr. Long: </span> Would it have an adverse effect if placed in a weapon in Vietnam with the old buffer?
              </p>
              <p>
                <span>Colonel Yount:</span> I don't feel that it would.
              </p>
              <p>
                <span>Mr. Long:</span> You don't think it would cause any more malfunctioning?
              </p>
              <p>
                <span>Colonel Yount:</span> No; I don't.
              </p>
              <p>
                <span>Mr. Long: </span> It would affect the cyclic rate, as Mr Davis pointed out.
              </p>
              <p>
                <span>Colonel Yount:</span> It will reduce the cyclic rate about 30 to 100 rounds a minute when compared with the ball propellant, and it has been thoroughly tested with both buffers.
              </p>
              <p>
                <span> Mr. Long:</span> It has been tested with both buffers?
              </p>
              <p>
                <span>Colonel Yount: </span> With both buffers; yes, sir.
              </p>
              <p>
                <span> Mr. Ichord:</span> You definitely are going to have a slower cyclic rate, aren't you, Colonel?
              </p>
              <p>
                <span>Colonel Yount:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Will you have an erratic situation.
              </p>
              <p>
                <span>Colonel Yount:</span> You will have an erratic situation, but it will not be perceptible to the firer.
              </p>
              <p>
                <span>Mr. Long:</span> The marine can pick up a box, put them in the magazine, and not have any worries, have complete confidence that the gun will refire?
              </p>
              <p>
                <span> Colonel Yount:</span> THE PROBLEM IS THE USE OF THAT PROPELLANT COUPLED WITH THE OLD BUFFER, WHERE HE MAY GET EXCESSIVE CYCLIC RATES AND GET MALFUNCTIONS AS A RESULT OF THE HIGHER CYCLIC RATES.
              </p>
              <p>
                ..........
              </p>
              <p>
                (COMMITTEE TOOK A SHORT RECESS)
              </p>
              <p>
                <span>Mr. Ichord:</span> The committee will come to order. Gentlemen, I am very happy that we have established that we now have IMR at least on its way to Vietnam, and, Mr. Counsel, I want you to direct an inquiry to the proper people, and lets see where that IMR is in South Vietnam. Here has been our problem, Colonel, as a committee: The M-16 was tested and developed with IMR powder used in the 5.56 ammunition. It tested very well. It showed up very well. Then, as you stated in October 1966, a cry went up from Vietnam that they were having problems, very severe problems, with the rifle. You sent your weapons team over there headed up by Colonel Underwood. The situation was so bad, to paraphrase you, that he wanted you to come over and take a look at what he saw, so you would understand the recommendations that he made. That was in October of 1966. Then, when did the committee start getting the complaints, Mr. Counsel - in April or May [1967]?
              </p>
              <p>
                <span>Mr. Morgan:</span> In April and May. [1967].
              </p>
              <p>
                <span>Mr. Ichord:</span> In April we started getting complaints about excessive malfunctioning, and this time from the Marines, not from the Army, but from the Marines. We have evidence and are advised by our experts to the effect that THIS BALL PROPELLANT, which you apparently speak so highly of, does have an adverse effect upon the operation of the M-16 rifle. It speeded up the cyclic rate. It is dirtier burning. We found out that we only had ball propellant ammunition and naturally we would be concerned about the conversion, and particularly so when we are also advised THAT THE ARMY WAS CAUTIONED AGAINST MAKING THIS CHANGE FROM IMR TO BALL PROPELLANT BECAUSE IT WOULD HAVE AN ADVERSE EFFECT ON THE M-16 RIFLE. Naturally, we would be quite concerned. APPARENTLY YOU AREN'T SO CONCERNED. I don't understand your explanation. I just haven't been able to understand you - but perhaps you haven't offered the information in words that I can understand. Would you care to say something?
              </p>
              <p>
                <span>Mr. Long:</span> Could I ask a question right there, Mr. Chairman?
              </p>
              <p>
                <span>Mr. Ichord:</span> Yes.
              </p>
              <p>
                <span>Mr. Long: </span> I have just one question. Mr. Davis, or Colonel Yount, the cyclic rate - doesn't the cyclic rate have any bearing whatsoever on the extraction?
              </p>
              <p>
                <span>Mr. Davis:</span> No, sir. I should say there is no significant relationship between cyclic rate and failures to extract. They are separate problems.
              </p>
              <p>
                <span>Mr. Long: </span> How about double feeding?
              </p>
              <p>
                <span> Mr. Davis:</span> Malfeeds of one kind and another are related to cyclic rate, often related to cyclic rate; yes, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Absolutely no correlation between the failure to extract and a high cyclic rate?
              </p>
              <p>
                <span>Mr. Davis: </span> That is correct, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Once again, just for the record, why the buffer change, other than that pointed out by the colonel earlier? I believe the colonel gave two reasons. One was to slow down the cyclic rate, and the other was to have an increased buffer. Is that right, Colonel?
              </p>
              <p>
                <span>Colonel Yount:</span> That is correct. It does more than that.
              </p>
              <p>
                <span>Mr. Long: </span> Why do you want to slow down the cyclic rate?
              </p>
              <p>
                <span>Colonel Yount:</span> BECAUSE WE KNEW WHEN YOU FIRE THE WEAPON IN EXCESS OF APPROXIMATELY 850 ROUNDS A MINUTE THAT WE DO RUN INTO MALFUNCTIONS.
              </p>
              <p>
                <span>Mr. Long:</span> What are those malfunctions?
              </p>
              <p>
                <span>Colonel Yount:</span> Usually the type that are failure to feed properly, as Mr. Davis just mentioned, and also the failure of the bolt to remain to the rear on the last round.
              </p>
              <p>
                <span>Mr. Long:</span> Go ahead, Mr. Chairman.
              </p>
              <p>
                <span>Mr. Ichord:</span> Let me ask this question of Mr. Davis. This is a question that I have put to one of our experts. Then the new buffer would just be compensating for the increased cyclic rate caused by the ball propellant powder?
              </p>
              <p>
                Reply: "Right; for the cyclic rate. It would help compensate on the cyclic rate overall. But now if you don't change anything else your opening cycle - in other words, the amount of time it takes to open the weapon - will remain constant. In other words, the first part of the cycle, where the bolt opens which is critical on the extraction of the weapon."
              </p>
              <p>
                That sounds very logical to me, Mr. Davis, that the opening cycle is critical in extracting the cartridge from the chamber.
              </p>
              <p>
                <span>Mr. Davis:</span> Yes, sir. I agree that the initial part of the recoil cycle may be critical to failures to extract. Is this question to address the relationship?
              </p>
              <p>
                <span>Mr. Ichord:</span> Yes.
              </p>
              <p>
                <span>Mr. Davis:</span> If the problem is timing with the weapon, that is, if it is opening too soon while the gas pressure is still too high and for this reason and this reason only the cartridge fails to extract, then this has a significant effect. However, if the cartridge case sticks in the chamber because the chamber IS PITTED OR CORRODED, remember that it continues to stick, even after the rim has been sheared through and you have to take a cleaning rod to knock it out. A matter of a fraction of a millisecond delay one way or another will not materially assist failures to extract which come from RUSTY OR CORRODED CHAMBERS. In the particular instance of the M-16 rifle our analysis of the cause of failures to extract is such that I think we would not gain very much in that particular remedy by reducing the cyclic rate.
              </p>
              <p>
                <span>Mr. Ichord:</span> Of course now the ball propellant does give you increased debris which will clog up the chamber and make the cartridge difficult to extract, will it not?
              </p>
              <p>
                <span>Mr. Davis:</span> WELL, OUR TESTS HAVE NOT REALLY CONFIRMED THAT THIS IS TRUE. WE HAVE HAD A HIGHER MALFUNCTION RATE IN EXPERIMENTS WITH BALL PROPELLANT, USUALLY, PERHAPS ALWAYS ASSOCIATED WITH THE HIGHER CYCLIC RATE. But the increased amount of visible fouling from ball propellant, I must say we cannot correlate with any increase in the gun malfunction rate.
              </p>
              <p>
                <span>Mr. Ichord:</span> Apparently we have some disagreement among experts. The only thing this committee wants, the only thing the full committee wants, the only thing this Congress wants, and the only thing the American people want is some way that we can correct these excessive malfunctions. They cannot be tolerated, period. I don't care what you do to the gun. AND I CANNOT BUY SOME OF THESE REPORTS THAT I HAVE SEEN THAT IT IS ENTIRELY THE FAULT OF THE MEN OUT THERE IN THE FIELD NOT CLEANING THEIR WEAPONS. You can't be wet nursing a weapon. You can't be turning around cleaning that weapon when a Vietcong comes towards you. And I know a man - when his life depends on it - is not going to fail to clean his rifle. </span> He should have gotten sufficient training to be able to clean his weapon. The difficulties are not caused by insufficient cleaning and maintenance of the weapon, alone.
              </p>
              <p>...................</p>
              <p>
                skip to page 4638:
              </p>
              <p>
                <span>Mr. Long:</span> Mr. Davis, I am getting back to the failure to extract. Do you believe chroming the chamber will solve the problem?
              </p>
              <p>
                <span>Mr. Davis: </span> Yes, sir. I think that will be a very effective remedy.
              </p>
              <p>
                <span>Mr. Long:</span> Do you think it is within our national interest to solve this problem of failure to extract?
              </p>
              <p>
                <span>Mr. Davis:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Long:</span> Where are you going to get these chrome chambers?
              </p>
              <p>
                <span>Mr. Davis:</span> From Colt, according to our present contract.
              </p>
              <p>
                <span>Mr. Long:</span> Colt is on strike. You can't get any there.
              </p>
              <p>
                <span>Mr Davis:</span> Yes, sir. I am afraid I am not qualified to comment on that.
              </p>
              <p>
                ..................
              </p>
              <p>
                <span>Mr. Morgan:</span> Mr. Davis, when was it first recommended that you chrome plate the chamber?
              </p>
              <p>
                <span>Mr. Davis:</span> I don't have that date from memory, sir, but I may have it in notes. Sir, my notes indicate that in November - October-November of 1966 reports from the WECOM maintenance team were indicating a lack of maintenance in the chamber </span>area which required some remedy if we could provide it from the technical standpoint. In December of 1966 Colt did some in-house evaluation of chrome plated chambers. I suppose that you could use the date November 1966 as the first suggestion that the chrome-plated chamber should be pursued.
              </p>
              <p>
                <span>Mr. Morgan:</span> When was it proposed as an RTA?
              </p>
              <p>
                <span>Mr. Davis:</span> I don't have that point in my chronology, sir.
              </p>
              <p>
                <span>Mr. Morgan:</span> The information that I have is that it was submitted by Colt on April 17, 1967. When was it approved?
              </p>
              <p>
                <span>Mr. Davis:</span> The contract modification was made on May 26, 1967, sir.
              </p>
              <p>
                <span>Mr. Morgan:</span> The testimony has been today that the chrome-plated chambers are not scheduled to be in the production rifles until some time in August, late August. Is that correct? Provided they go back to work by then.
              </p>
              <p>
                <span>Mr. Davis:</span> Yes, sir.
              </p>
              <p>
                ................
              </p>
              <p>
                skip to page 4641
              </p>
              <p>
                <span> Mr. Ichord:</span> Colonel Yount, you stated earlier in response to a question of mine that you did not know, or I think you said "We did not know that ball propellant -" I am back to ball propellant again - "would cause a speedup in the M-16 cyclic rate at the time the conversion was made." When did you first ascertain, or when did it first come to your knowledge that the ball propellant would have that effect?
              </p>
              <p>
                <span>Colonel Yount:</span> I do know in the qualification at the time the propellants were qualified this increase in cyclic rate did not appear as part of the test reports. For that reason we did not know it caused - in fact, it did not cause, according to the test reports, an increase in this cyclic rate. When I actually became completely aware of it I cannot pin down at the present time.
              </p>
              <p>
                <span>Mr. Ichord:</span> Now, who is responsible for the operation of the Frankford Arsenal?
              </p>
              <p>
                BMunitions Command, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> I am bringing to your attention a report, a test report of the Frankford Arsenal dated May 15, 1964. This is the thing that concerns me in this whole investigation - sometimes the left hand does not know what the right hand id doing. THIS REPORT ADVISED THAT A NEW EXTRUDED POWDER CALLED CR-8136 AND WC-846 - THAT IS BALL TYPE - WENT OUT, ON PAGE 13, THAT THERE WAS NO SOUND PORT PRESSURE CRITERIA FOR THE AR-15, THE M-16 RIFLE; THAT THE SLOWER BURNING PROPELLANTS, CR-8136 AND WC-846, WOULD RESULT IN A SLIGHTLY HIGHER PORT PRESSURE LEVEL THAN THAT OF IMR-4485. Did you have access to those reports as project manager, or do they tell you what is going on at Frankford Arsenal?
              </p>
              <p>
                Yes, sir; I had access to these reports.
              </p>
              <p>
                <span>Mr. Ichord:</span> I have another report, February 1966, Mr. Counsel. What report is this? Is it the information that I have, dated February 1966, but it does not identify the report.
              </p>
              <p>
                <span>Mr. Morgan:</span> That is another Frankford Arsenal report, Mr. Chairman.
              </p>
              <p>
                <span>Mr. Ichord: </span> I am sure that it is, because most of this information is connected with the Frankford Arsenal. Now, you stated, Colonel, as I understand you, that this ball propellant is fine. This is February 5, 1966. This is what the report says: ON TEST OF THE 5.56 MILLIMETER CARTRIDGES IT WAS CONCLUDED THAT THE BALL PROPELLANT GAVE HIGHER CYCLIC RATE, A GREATER AMOUNT OF MALFUNCTION RATE, GREATER FOULING, MORE VARIATION IN VELOCITY DUE TO VARIATIONS IN HANDLING THAN DID THE CR-8136 EXTRUDED POWDER. That is a comparative study. What about this new extruded powder that went to Vietnam? What is it? Is it the old IMR-4475, or is it CR-8136?
              </p>
              <p>
                <span>Colonel Yount:</span> Neither one, sir. They have both gone by the board. It is a new 8208-M.
              </p>
              <p>
                <span>Mr. Ichord:</span> 8208-M. Was that report brought to your attention, and if so, when?
              </p>
              <p>
                <span>Colonel Yount:</span> I am sure that it was, because I receive copies of all the memorandum reports from Frankford shortly after they are written, sir.
              </p>
              <p>
                <span> Mr. Ichord:</span> Did you take an action, or did anyone in the Army take any action regarding ball propellant as a result of this report? Is this perhaps why we now have the IMR going to Vietnam?
              </p>
              <p>
                <span>Colonel Yount:</span> Not because of that particular report; no, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> I have other information here. Springfield Armory report on the test of the new buffer for M-16 rifles, processed April 6 to May 13, 1966, WHICH CONCLUDED THAT THE RIFLE PERFORMANCE USING PROPOSED BUFFER AND BALL PROPELLANT IS NOT AS GOOD AS THE PAST PERFORMANCE OF THE M-16 RIFLES USING STANDARD BUFFER AND IMR-8136 PROPELLANTS. Again, this is why I question whether the buffer is really going to get at the problem. I am not satisfied with your statement that this ball propellant is so good. The only thing I got out of your statement was that it came out in the specs and it meets the specs, someone up above says "Lets meet the specs." That is what you do.
              </p>
              <p>
                .................
              </p>
              <p>
                Wednesday, July 26, 1967
              </p>
              <p>
                .............
              </p>
              <p>
                page 4664
              </p>
              <p>
                <span>Mr. Vee:</span> The WC-846 was made by only one company, Olin Mathieson, at their East Alton plant. I am talking about the propellant, not the ammunition.
              </p>
              <p>
                ....................
              </p>
              <p>
                page 4666
              </p>
              <p>
                <span>Mr. Ichord:</span> When the committee was in South Vietnam we picked up about five cartons of ammunition - about how many to the case?
              </p>
              <p>
                <span>Colonel Crossman:</span> Twenty in a cardboard carton.
              </p>
              <p>
                <span>Mr. Ichord:</span> Twenty in a cardboard carton, from five different manufacturers, of 5.56 millimeter ammunition. I did not observe at the time, nor have I seen the containers and the cartridges since. Does that have on it what kind of propellant, or is there any definition?
              </p>
              <p>
                <span>Mr. Vee:</span> You will have a lot number.
              </p>
              <p>
                <span>General Miley:</span> a lot number will identify it.
              </p>
              <p>
                <span>Mr. Vee:</span> By history you can go back and check, but the individual won't know.
              </p>
              <p>
                <span>Mr. Ichord:</span> Have you finished your recitation of the history, sir?
              </p>
              <p>
                <span>Mr. Vee:</span> On December 17, 1966, the Army addressed a memorandum to the Secretary of Defense which was entitled "The Army Rifle Program," in which they made certain statements, certain objectives, that they wanted to undertake in their rifle program. In their letter they stated that as a result of the SAWS study and the analysis of that study by the Army staff, there might be a possibility of some minor changes being made in the rifle, or the rifle system, as they called it. This is the first item. Then they identified it. It says:
              </p>
              <p>
                <span>THERE IS A POSSIBILITY OF THE USE OF A DIFFERENT POWDER GRAIN.</span>
              </p>
              <p>
                This is the first official notice by the service to Sec-Def about the question of a powder grain or propellant.
              </p>
              <p>
                .................
              </p>
              <p>
                page 4802
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Mr. Bray:</span> Then do you have an opinion as to whether the ball powder is a proper powder to use with the M-16 rifle?
              </p>
              <p>
                <span>Mr. Macdonald:</span> My only comment is if the IMR powder worked and it was all tested under the IMR powder, and nobody ever complained about the IMR powder, what is the sense of going to some other powder?
              </p>
              <p>
                <span>Mr. Bray:</span> You have heard adverse reports as to the use of these ball propellants?
              </p>
              <p>
                <span>Mr. Macdonald: </span> Only what I read in the newspapers.
              </p>
              <p>
                <span>Mr. Bray: </span> In your experience with the IMR powder, would you say that the functioning of the M-16 rifle was good?
              </p>
              <p>
                <span>Mr. Macdonald:</span> It was perfect. I can't think of anything, any malfunction, nothing, never.
              </p>
              <p>
                <span>Mr. Bray:</span> Would extra carbonization, and marked increase in the cyclic rate of fire, cause malfunctions in this rifle?
              </p>
              <p>
                <span>Mr. Macdonald:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Bray:</span> That is all.
              </p>
              <p>
                ................
              </p>
              <p>
                page 4933 - 4934
              </p>
              <p>
                <span>Mr. Ichord:</span> I hope to be able to conclude these hearings with this meeting. However, the chairman and the committee do want to review the record that we have, and we may have - we will reserve, of course, the right to convene possibly next week, and particularly I want to review the record in regard to the conversion from IMR to ball propellant.
              </p>
              <p>
                (The following information was received for the record)
              </p>
              <p>
                Combat Consumption of Ball and IMR Propellants in SVN
              </p>
              <p>
                A question of major concern to the Special House Subcommittee investigating the M-16 rifle is the extent to which the use of 5.56 mm ammunition loaded with ball powder propellant has contributed directly to the excessive malfunctions of the rifle reported from combat areas in SVN. Excessive malfunctions of the rifle began to be reported by Army troops in OCTOBER 1966 AND CONTINUED APPROXIMATELY THROUGH DECEMBER 1966. Since then reports of excessive malfunctions from Army sources have been relatively less frequent. The M-16 rifle was introduced into SVN with the first Army troops to deploy (the 173d Airborne Brigade) in March 1965. Thereafter there was a steady build-up of combat units equipped with the M-16 until in September 1966 there were approximately 45,000 troops equipped with the rifle in SVN.  During this entire period there were no known reports of excessive malfunctions. During the same period (March 1965 - September 1966) 99 million rounds of 5.56mm ammunition were consumed in combat in SVN. At least 89 million rounds of this total were loaded with ball propellant (WC 846). Only 10 million rounds loaded with IMR (CR 8136) were ever sent to SVN. These were produced prior to December 1964, and it is assumed that they were all consumed prior to September 1966 since supply procedures dictate a first received - first issued policy as regards stockage and issue. Since 89 million rounds of 5.56mm ammunition loaded with ball propellant were shot in combat in SVN WITHOUT PRODUCING ANY KNOWN REPORTS OF EXCESSIVEMALFUNCTIONS, it must be concluded that such reports when they did appear in October 1966 could not have resulted from the inherent characteristicsof ball powder as a propellant. IT IS MUCH MORE PROBABLE THAT THE EXCESSIVE MALFUNCTION REPORTS ARISE FROM THE TEMPORARY DIFFICULTIES IN CARE AND CLEANING OF THE RIFLE experienced when substantial numbers of troops previously equipped with the M-14 rifle were converted at that time to the M-16. This was confirmed by  direct observation of the field assistance teams in SVN during the period October - December 1966. Subsequent follow-up visits to SVN by Department of the Army field assistance teams, the last being in April - May 1967, report marked reduction in malfunctioning as a result of strict adherence to published mandatory individual care and cleaning practices.
              </p>
              <p>
                ...............
              </p>
              <p>
                Tuesday, August 22, 1967. The subcommittee met at 10 o'clock a.m.
              </p>
              <p>......</p>
              <p>
                <span>Dr. Jackson:</span> Thank you. As you said, Mr. Ichord, I am director of research and development for the explosives department of E.I. du Pont de Nemours Company. I am responsible for the administration of exploratory research, product and process development, and technical assistance to the sales and manufacturing functions of the explosives department. In carrying out this responsibility I direct the activities of five laboratories, one of which includes a ballistic section devoted to the development and testing of smokeless powder for both sporting and military ammunition. I have a good working knowledge of gun propellant problems because I was chief ballistic engineer of Du Pont's propellant laboratory during World War II at a time when all of its efforts were devoted to military problems. In prefacing my remarks on the history of the development of propellant for the 5.56 mm. cartridge for the M-16 gun system, it should be understood that the Du Pont Co. was never directly involved in the design or manufacture of guns and ammunition. Our sole role in this area has been to develop and produce propellants. It is pertinent to report that the powder being supplied by the Du Pont Co. for this round, a Du Pont IMR powder, is the same, except for minor modifications, as the propellants Du Pont has supplied for military small arms loading since the early 1920's and was the type used in practically all of the United States and most of the British rifle and machinegun ammunition from caliber .30 through 20 mm in World War II. Approximately a billion pounds of this powder was produced in Government-owned, contractor-operated plants during that war. In this service the ammunition loaded with Du Pont IMR powder has been subjected to every conceivable field situation. The propellant has proven to be very effective and reliable. As to the 5.56 mm. ammunition development, it is my understanding that the Remington Arms Co., working with the developers of the AR-15 gun system, started with a sporting cartridge, the 223, which translates in the metric system to a 5.56 mm. caliber. There are eight or ten grades of IMR powder which cover the range of ballistic requirements of most small arms cartridges, and Remington, in 1962, selected IMR 4475 from its stock of such powders as the one giving the desired ballistics in the new round. IMR 4475 is a grade of rifle powder first introduced by the Du Pont Co. in 1936, and is a single base, dinitrotoluene (DNT) coated powder, granulated 0.046 - 0.015 x 1/22. The granulation code describes a single perforated cylindrical grain, the first number representing the diameter of the die in inches, the second the size of the pin which makes the center perforation, and the third the number of cuts per inch. For commercial loading IMR 4475 was purchased by Remington on the basis of ballistic tests made at our plant. Each new lot is tested in comparison with a standard lot to satisfy ourselves and the user that it is truly representative of its type. IMR 4475 was loaded to a pressure specification of 52,000 p.s.i. which is considered to be acceptable for commercial cartridges of this type. It was a tight fit, however. That is, to get enough powder in the case to make the specification velocity (3,250 f/s), it had to be so fast burning that the pressures were pushing the limit all the time. Nevertheless, some 19 million rounds were loaded with IMR 4475 with good reports as to their functioning. When the Army adopted the 5.56 mm. as an ordnance item, 52,000 p.s.i. was set as the top limit of maximum average pressure for the ammunition. This meant that they wanted a powder that would give the service velocity with about 50,000 p.s.i. or less in the ammunition, so they set a 50,000 p.s.i. top on the powdermaker.</p>
              <p>
                <span>Mr. Ichord: </span> Is that chamber pressure, that 50,000 you were referring to?
              </p>
              <p>
                <span>Dr. Jackson:</span> Chamber pressure. We were running 49,500 - plus on the occasion - just too close to the top for comfort, with a full case, about 25.5 grains. When the ammunition loaders tried Olin Ball, WC-846, they had more leeway because the ball powder has a higher apparent density, permitting more powder in the case. Ball powder could be slowed down until it took a charge of 28 grains to give service velocity and still stay within pressure specifications comfortably. Based on our limited experience firing reference ammunition loaded with WC-846, the slower powder gives somewhat more residue and more noticeable flash, which is what one would expect. We had been in this situation before, i.e., a tight pressure specification and limited case volume. One answer was to change coating. We switched from DNT, that is the dinitrotoluene, to Centralite and modified the granulation of the powder to get the best fit. The outcome of this was CR 8136, a 0.041 - .010x1/32 granulation.
              </p>
              <p>
                <span> Mr. Ichord:</span> Let me interrupt to be sure I understand what you are talking about. Is this coating to which you refer, DNT - you switched from that to Centralite - is it the coating that controls the rate of burning in the powder?
              </p>
              <p>
                <span>Dr. Jackson:</span> The coating controls the initial rate of burning in the powder, because it is an exterior treatment which influences only a fraction of the thickness of the powder.
              </p>
              <p>
                <span>Mr. Ichord:</span> What do you mean by the "initial rate of burning?"
              </p>
              <p>
                <span>Dr. Jackson: </span> When the powder burns, it burns essentially on the surface, from the surface in, like logs in a fireplace. In order to slow down the initial rate of gas production to keep the maximum pressure in the barrel, in the chamber, below the desired limit, the burning rate of the outer layers of propellant is deterred in all rifle powders by some material or other.
              </p>
              <p>
                <span>Mr. Ichord:</span> And the initial rate of burning is the thing that has the greatest effect upon the chamber pressure?
              </p>
              <p>
                <span> Dr. Jackson: </span> It has the greatest effect on the chamber pressure at a given velocity. You can modify the amount and character of the coating and influence the velocity - pressure relationship.
              </p>
              <p>
                <span>Mr. Ichord:</span> What is the relationship between the chamber pressure and the velocity with which the bullet leaves the gun? There is a direct relationship, is there not?
              </p>
              <p>
                <span>Dr. Jackson:</span> It is a variable relationship, depending on the characteristic of the powder. And devising the proper powder granulation, composition and coating to obtain a preferred velocity - pressure relationship is the problem of the ballistician.
              </p>
              <p>
                <span>Mr. Ichord:</span> Anyway, you slowed down the initial rate of burning by the change from DNT to Centralite, and this, you say, permitted you to more easily stay within the chamber pressure specifications?
              </p>
              <p>
                <span>Dr. Jackson:</span> That is correct. CR-8136 was given a thorough testing by the Army and qualified for loading in 5.56 ammunition on April 29, 1964. The pressure-velocity relationship was more favorable on the average for CR-8136 than for IMR-4475 so there was less difficulty in meeting the 50,000 pounds per square inch maximum, but the Centralite coating is inherently harder to ignite, so the variations from round to round were greater. There is a 58,000 pounds per square inch limit on P maximum plus three times the standard deviation for ammunition acceptance. That is a requirement placed upon the ammunition supplier that he must meet.
              </p>
              <p>
                <span>Mr. Ichord:</span> 58,00 maximum, but an average of 52,000?
              </p>
              <p>
                <span>Dr. Jackson:</span> Average of 52,000, but the maximum pressure observed in any lot of ammunition plus three time the standard deviation in pressure as observed in firing a series of rounds must not exceed 58,000 pounds per square inch, and this is the difficulty that loading people got into with CR-8136. All of the lots produced (approximately 300,000 pounds) were loaded by Remington at Bridgeport, but there were complaints about P maximum plus three times standard deviation exceeding 58,000 pounds per square inch, so obviously we had not yet obtained a completely satisfactory solution to this problem. The current answer to the 5.56 millimeter loading problem came as a result of a research program carried out under contract with Picatinny Arsenal to find a propellant with greater ballistic stability over a wide temperature range (contract DA-36-034-ORD-3742A, completed May 30, 1965.) Many variations of the extruded single-base powders were tried. Incidentally, that contract was limited to extruded single-base type, and a modification of IMR was found bearing a new coating material which not only has improved temperature stability but a better velocity-pressure relationship as well. The work under the contract was done mainly with 7.62 millimeter ammunition and the powder resulting was designated IMR 8138-M. Although this powder would be ballistically satisfactory in the 5.56 millimeter round, the grain configuration prevented uniform machine loading. When this formulation, involving the new coating material and procedure, was applied to the 5.56 millimeter problem the result was IMR 8208-M with a granulation .041 - .010x1/32, the same CR-8136. The gravimetric density was higher, the velocity-pressure relationship was more favorable, and the charge was still about 25.5 grains. The maximum average pressures were well under the specification of 50,000 and the variations were such that there was little trouble with the P maximum plus three times standard deviation meeting the 58,000 pounds per square inch limit. IMR-8208 was submitted to the Army for qualification tests and after passing all phases of the trials, was reported to be accepted in May 1966 for loading in 5.56 millimeter ball and tracer ammunition. The qualification tests consisted of chamber and port pressure, velocity and tracer ignition tests at +70, -65, +125, +160, and -80 degrees F.; action time and climatic storage tests; smoke, flash, fouling, cyclic rate, and barrel erosion tests. To appraise you of production experience we have shipped 42 lots of powder representing 1.3 million pounds. this production covers the period October 1966 through July 1967. The material has been loaded in ball and tracer cartridges at Lake City and Twin Cities Army ammunition plants. Reports from Lake City concerning the quality of the ammunition containing this powder have been uniformly satisfactory. As the procurement agencies are aware, only limited quantities of IMR 8208-M can be supplied from the Carney's Point Works of Du Pont, which is our only powder making facility. We are currently supplying to the limit of the plant capacity on this item. At the request of the government, Du Pont has instructed personnel in the coating procedure required for IMR 8138-M and 8208-M at the Radford Army ammunition plant.
              </p>
              <p>
                ..............
              </p>
              <p>
                page 4949
              </p>
              <p>
                <span>Mr. Ichord:</span>Now for the record I would like to say that we have three types of propellant, for rifle ammunition in the United States, that have been used for the past 25 years, three basic types. The first is IMR, which is the propellant Du Pont has been making, single base extruded. This gets its energy, in the main, from nitrocellulose. Then we have HPC, which is a double base extruded, that is, shaped like IMR but depends on the nitroglycerin as well as nitrocellulose. Then we have the ball, a double base spherical grain, energized both by nitrocellulose and nitroglycerin. Is it possible to convert surplus or scrapped powder into extruded IMR powder?
              </p>
              <p>
                <span>Dr. Jackson:</span> It is not, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> But that is not true in the case of ball propellant, is it possible to make ball propellant out of surplus powder?
              </p>
              <p>
                <span>Dr. Jackson:</span> By the nature of the process; yes.
              </p>
              <p>
                <span>Mr. Ichord:</span> Is it your further understanding that scrap powder, surplus powder, is now being worked into ball propellant?
              </p>
              <p>
                <span>Dr. Jackson:</span> That is my understanding.
              </p>
              <p>
                <span>Mr. Ichord:</span> Do you know who is doing this?
              </p>
              <p>
                <span>Dr. Jackson: </span> The process was developed by Olin, and I believe it is done by Olin, perhaps also at the Army Ordnance plants.
              </p>
              <p>
                <span>Mr. Ichord: </span> I believe the record will show this scrap powder is provided to the propellant producer as Government-furnished equipment.
              </p>
              <p>
                ..........
              </p>
              <p>
                <span>Mr. Ichord: </span> I would ask you this question, Dr. Jackson: For ballistic acceptance which is more reliable, a reference powder or a reference ammunition?
              </p>
              <p>
                <span>Dr. Jackson:</span> For ballistic acceptance a reference powder is more reliable.
              </p>
              <p>
                <span>Mr. Ichord:</span> Why?
              </p>
              <p>
                <span>Dr. Jackson:</span> Because comparison of the lot under test is being made directly with the same type material that is being acquired and is not - there is no opportunity for confusing differences in metal components and their influence on ballistics, which always has the opportunity to creep in when reference ammunition is used as a powder acceptance tool.
              </p>
              <p>
                <span>Mr. Ichord:</span> What does the government now use?
              </p>
              <p>
                <span>Dr. Jackson:</span> Reference ammunition, at its pleasure.
              </p>
              <p>
                ..................
              </p>
              <p>
                <span>Mr. Ichord: </span> All the experts have advised this committee that ball propellant causes increased fouling, and also a speedup in the cyclic rate, at least of the M-16 weapon. What is the character or nature of the ball propellant which results in increased fouling?
              </p>
              <p>
                <span>Dr. Jackson:</span> If it does in fact do so - as I say, we have had only direct observation in the firing of reference ammunition which contained ball propellant, and observed slightly more deposits in the barrels.
              </p>
              <p>
                <span>Mr. Ichord:</span> You have observed that?
              </p>
              <p>
                <span>Dr. Jackson:</span> We have observed this. We would ascribe this to the fact it is characteristic of a slower powder in any given weapon. If you have two powders, a slow and a fast one, the slower burning powder which burns further down the barrel is more likely to leave residue in the barrel in the bolt area.
              </p>
              <p>
                .........................
              </p>
              <p>
                <span>Mr. Ichord: </span> In order to establish our hypothesis, at this point I want to read into the record the result of tests of the SAWS study:
              </p>
              <p>
                Field experiment conducted at Fort Ord, California: Section V, Material Reliability Results.
              </p>
              <p>
                2 Major causes in malfunctions in 5.56mm weapons. Major causes of most malfunctions in the 5.56 mm. weapons are attributed to an interaction of ammunition (and belt link) deficiencies:
                <p>
                  1) Weapon fouling, judged to be caused primarily by qualities of the propellant used in the standard ball 5.56 mm. cartridge.</br>
                  2) Cycling of weapons in excess of design rates, judged to be caused by combinations of:</br>
                  <p>
                    - Pressure characteristics of the propellant used in the standard ball 5.56 mm. cartridge.</br>
                    - Factory calibration of M-16E1 rifles for a propellant with different pressure characteristics than that in the standard ball 5.56 mm. cartridge.</br>
                    - Mismatch in internal ballistic (pressure) characteristics between the standard 5.56 mm. ball and tracer cartridges.</br>
                  </p>
                  <p>
                    .................
                  </p>
                  <p>
                    - Fouling in the 5.56 mm. weapons occurred throughout the experiment. Dirty chambers resulting from rapid carbon buildup caused most of the failures to extract and some of the failures to chamber. Fouling remained a problem throughout the experiment, although cleaning and inspection of weapons were considered more stringent than would be possible during combat. Inquiry to AMC determined that the propellant adopted for the standard 5.56 mm. ball cartridge is different from the original propellant used during the development and service testing of the M-16E1 rifle and during the development of the Stoner weapons. A USACDCEC test of samples from the lot of standard ammunition used in the experiment showed more fouling than an AMC provided sample containing the original propellant. This supplemental fouling test was conducted using ammunition lots WCC-6098 and RA-5074. This limited test firing of 12,620 rounds indicated a malfunction rate of 5.6 per 1,000 rounds for the cartridge loaded with ball propellant as opposed to 0.91 for IMR propellant loaded cartridges. </br>
                    - Excessive cyclic rate: Excessive cyclic rates were noted early in the experiment. In addition, surging (uneven firing) was noted when ball and tracer were fired together. There was also an increasing incidence of malfunctions attributed to ammunition cycling the weapons beyond their design rates. The cyclic rates were higher than the design cyclic rates, particularly with the M-16E1 rifle and Stoner machinegun.
                  </p>
                  <p>
                    It is concluded that this excessive cyclic rate caused, complicated, and multiplied such malfunctions as failure of the bolt to remain to the rear after the last round was fired from the magazine, FAILURES TO EJECT, and magazine feeding problems. A concurrent propellant investigation by Frankford Arsenal showed that the propellant currently used in the 5.56 mm. ball cartridge cycles weapons faster than the original propellant. Inquiry to AMC determined that, to meet a government acceptance requirement, M16E1 rifles are calibrated at the factory for the gas port pressure of the original propellant rather than that of the propellant currently used in standard ball 5.56 mm. cartridges. Interaction of the higher gas port pressure of the current propellant and the sizing of the gas port for a propellant with a lower gas port pressure is considered the reason for the excessive cyclic rate in the M16E1 rifle.
                  </p>
                </p>
              </p>
              <p>
                .......................
              </p>
              <p>
                <span>Mr. Ichord:</span> When was the result of this study first brought to your attention, Colonel?
              </p>
              <p>
                <span>Colonel Yount:</span> November or early December 1965.
              </p>
              <p>
                <span>Mr. Ichord:</span> When was this experiment performed?
              </p>
              <p>
                <span>Colonel Yount: </span> As I recall, between October and November  1965.
              </p>
              <p>
                <span>Mr. Ichord:</span> I am sure Dr. Jackson has other business. I will explore this with you later, Colonel Yount. You were producing IMR-4475 up until what date, doctor, for military purposes?
              </p>
              <p>
                <span>Dr. Jackson:</span> I think it was 1964. I can't remember exactly when in 1964. IMR-4475 as far as I know was never submitted to the qualification test for the 5.56, that the CR powders and 8208 powders were submitted to. It was a powder purchased by the ammunition loader on commercial specification and submitted by him to the military as meeting the ammunition specification of the military. The powder was on a commercial purchase.
              </p>
              <p>
                <span>Mr. Ichord: </span> I know the Army purchased a great many rounds of IMR.
              </p>
              <p>
                <span>Dr. Jackson:</span> But the powder has not been submitted to the qualification test required if the powder is to be purchased by the military as such.
              </p>
              <p>
                <span>Mr. Ichord:</span> You said you had difficulty meeting pressure limits in the specification. Was that because of producing it in larger quantities, or what was the reason for that?
              </p>
              <p>
                <span>Dr. Jackson:</span> No, the powder was never designed to meet the pressure specification that was imposed on it by the Army specification. It would not have made any difference whether we were producing it in large or small quantity, we couldn't meet that pressure specification on a continuing basis.
              </p>
              <p>
                <span>Mr. Ichord: </span> After you failed to meet the specification, you changed to 8136?
              </p>
              <p>
                <span>Dr. Jackson: </span> Right.
              </p>
              <p>
                <span>Mr. Ichord: </span> Remington loaded 8136 for quite a period of time, did it not?
              </p>
              <p>
                <span>Dr. Jackson:</span> Several months; approximately one-third of a million pounds of powder.
              </p>
              <p>
                <span>Mr. Ichord: </span> Why did Remington stop loading 8136?
              </p>
              <p>
                <span>Dr. Jackson:</span> Because they were having trouble with the specification on the ammunition that required that maximum pressure plus three times standard deviation in pressure must not exceed 58,000 pounds per square inch, and about every four or five lots they would slip out on that one, and finally said, "We can't do it." The problem was, there we had less margin in pressure than was comfortable for the ammunition companies, plus a somewhat greater variation in pressure during a series of pressure tests, such as that the standard deviations, when multiplied by 3 and added to the maximum pressure, exceeded the 58,000 pound limit. You couldn't tell this from a powder test, but once the ammunition was loaded in a regular ammunition plant loading the variations piled up and the standard deviation exceeded the permissible limit.
              </p>
              <p>
                <span>Mr. Ichord:</span> Again, as in the case of IMR-4475, it wasn't a case of inability to mass produce it?
              </p>
              <p>
                <span>Dr. Jackson:</span> No. We were having very little difficulty in getting reproducible lots. But we had made an improvement, but just hadn't gone far enough to get out of the pressure trouble.
              </p>
              <p>
                .............
              </p>
              <p>
                <span>Mr. Ichord:</span> Colonel Yount, will you please come forward and be seated, sir? Continuing with the reference to the SAWS study, dated May 1966, you say this SAWS study was made in about October 1965?
              </p>
              <p>
                <span>Colonel Yount:</span> To the best of my recollection.
              </p>
              <p>
                <span>Mr. Ichord: </span> And the results of the study were made available to you in December 1965?
              </p>
              <p>
                <span>Colonel Yount:</span> November or December. It was not the completed test report, but simple oral results of the test.
              </p>
              <p>
                <span>Mr. Ichord:</span> Is that oral or written?
              </p>
              <p>
                <span>Colonel Yount:</span> Oral.
              </p>
              <p>
                <span>Mr. Ichord:</span> Did somebody connected with the SAWS study call you, come to see you, or what happened?
              </p>
              <p>
                <span>Colonel Yount:</span> We kept in touch with the various locations of the SAWS study, I don't know just who informed me. But we knew of the problem.
              </p>
              <p>
                <span>Mr. Ichord:</span> Through what means? How were you kept informed?
              </p>
              <p>
                <span>Colonel Yount:</span> Liaison to the test sites, and telephone calls from the test sites.
              </p>
              <p>
                <span>Mr. Morgan:</span> Did you not have a liaison or tech representative at each of the centers conducting the tests?
              </p>
              <p>
                <span>Colonel Yount:</span> For the maintenance problems, yes.
              </p>
              <p>
                <span>Mr. Ichord:</span> I suppose you were quite concerned when you heard this?
              </p>
              <p>
                <span> Colonel Yount:</span> I certainly was.
              </p>
              <p>
                <span>Mr. Ichord:</span> What did you do?
              </p>
              <p>
                <span>Colonel Yount:</span> We wanted a more controlled test, to confirm that the actual malfunctions were caused by the ball propellant, so we had some of the suspected lot of the propellant sent to Frankford Arsenal and had a special confirmatory test conducted by Frankford Arsenal in December 1965. That test confirmed the results of the SAWS test, that additional malfunctions were truly associated with the higher cyclic rate.
              </p>
              <p>
                <span>Mr. Ichord:</span> When was that?
              </p>
              <p>
                <span>Colonel Yount:</span> DECEMBER 1965. THE RESULTS OF THE TEST WERE PUBLISHED IN EARLY JANUARY, I BELIEVE, 1966, AND THIS CONFIRMED THE CORRELATION OF HIGH CYCLING RATE WITH THE MALFUNCTION RATE.
              </p>
              <p>
                <span>Mr. Ichord:</span> YOU HAD NOT YET HAD TESTS FROM VIETNAM, I MEAN REPORTS FROM VIETNAM, AS TO EXCESSIVE MALFUNCTIONING?
              </p>
              <p>
                <span>Colonel Yount: </span> That is correct.
              </p>
              <p>
                .................
              </p>
              <p>
                page 4977
              </p>
              <p>
                <span>Mr. Ichord:</span> When did it first come to your attention, Dr. Payne, that ball powder was causing excessive fouling, higher cyclic rates, and thus increased malfunctions and parts breakage?
              </p>
              <p>
                <span>Dr. Payne:</span> The fall of 1965; during the SAWS study.
              </p>
              <p>
                <span>Mr. Ichord:</span> What action did you take upon learning of this study?
              </p>
              <p>
                <span>Dr. Payne: </span> I recorded the reports I gathered on the trip, in the form of a memorandum, transmitted this to my official point of contact in the Office, Chief of Staff, which at the same time was the Systems Analysis Division of the Office of the Director of Coordination and Analysis.
              </p>
              <p>
                <span>Mr. Ichord:</span> Who was that?
              </p>
              <p>
                <span>Dr. Payne:</span> The Division Chief was Colonel Newman. My Memorandum was addressed to Lt. Col. William Jank.
              </p>
              <p>
                <span>Mr. Ichord:</span> What was the date?
              </p>
              <p>
                <span>Dr. Payne:</span> Early November 1965.
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Dr. Payne:</span> Yes, sir. I discussed the report, after I wrote it, with an officer who was about to visit Vietnam. I told him the nature of the problems being found in the SAWS, and asked that he check with people he met there as to whether any similar problems were occurring in Vietnam.
              </p>
              <p>
                <span>Mr. Ichord: </span> Who was that officer?
              </p>
              <p>
                <span>Dr. Payne:</span> Colonel Blanchard. He was then executive officer for the Secretary of the Army.
              </p>
              <p>
                <span>Mr. Ichord:</span> What action was taken as a result of your report?
              </p>
              <p>
                <span>Dr. Payne:</span> For this, sir, I have only verbal reports back. After some period, Colonel Jank informed me that the same information that was available in my memorandum about fouling and malfunctions had already been reported to AMC by the Combat Developments Command, that certain confirmatory tests were then underway.
              </p>
              <p>
                <span>Mr. Ichord:</span> Was that the extent of your followup?
              </p>
              <p>
                <span>Dr. Payne:</span> Colonel Blanchard returned from Vietnam and reported he had talked to seven or eight battalion commanders; none of them were experiencing any similar troubles.
              </p>
              <p>
                <span>Mr. Ichord:</span> WHEN DID YOU GET THE REPORTS THAT THEY WERE EXPERIENCING TROUBLES?
              </p>
              <p>
                <span>Dr. Payne:</span> IN VIETNAM?</span>
              </p>
              <p>
                <span>Mr. Ichord:</span> YES.
              </p>
              <p>
                <span> Dr. Payne:</span> NEARLY A YEAR LATER.
              </p>
              <p>
                <span>Mr. Ichord:</span> THAT WAS IN OCTOBER 1966, I PRESUME?
              </p>
              <p>
                <span>Dr. Payne:</span> IN MY CASE, I THINK IT WAS PROBABLY DECEMBER.
              </p>
              <p>
                <span>Mr. Ichord:</span> Did you make any recommendations at the time you did hear from South Vietnam that they were having trouble?
              </p>
              <p>
                <span>Dr. Payne:</span> No, sir. By that time, we were involved in the review of the SAWS report itself, on the basis of which recommendations were made for an extensive investigation. I thought the people in the Office, Chief of Staff, doing it at that time knew everything that I knew, we agreed on the points of fact and the problems and what needed to be done. I took no action other than to review what they had done.
              </p>
              <p>
                ................
              </p>
              <p>
                <span>Mr. Morgan:</span> In view of your conclusions or views on the malfunctions caused by the ball propellant during the SAWS test, did you take any action when you learned of the excessive amount of malfunctions being experienced in Vietnam?
              </p>
              <p>
                <span>Dr. Payne:</span> Yes, sir. I tried my best to find out whether they were from the same cause.
              </p>
              <p>
                <span>Mr. Morgan:</span> Do you think they are partly from the same cause?
              </p>
              <p>
                <span>Dr. Payne:</span> It is possible they are partly from the same cause, but not predominantly.
              </p>
              <p>
                <span>Mr. Morgan:</span> Has an effort been made to take samplings of the ammunition in Vietnam for purpose of testing to see if there is any relationship?
              </p>
              <p>
                <span>Dr. Payne:</span> No, sir - not to my knowledge. The tests that we conducted in this country are conducted with essentially similar ammunition.
              </p>
              <p>
                .................
              </p>
              <p>
                page 4998
              </p>
              <p>
                <span>Mr. Morgan:</span> General Anderson, do you have anything you want to add to the testimony given on the problem of ammunition in relationship to the malfunctions of the M-16?
              </p>
              <p>
                <span>General Anderson:</span> No, Mr. Counsel. I might
                in a way summarize what I think our position is. At the time we moved into the ball propellant for the 5.56 we had no reason to believe we would have any difficulties from it, because we had found that by controlling the port pressure in other weapons, both U.S. and foreign designs, that this produced acceptable results. We conducted tests,  not as extensive perhaps as we might have liked, but the tests we conducted at that time gave us no indication that our supposition, that it was a low risk matter, was anything to worry about. These original tests showed no malfunctions, as you recall. However, as we went down the road we found that indeed there were malfunctions associated with the cyclic rate. This was discovered, I think, first in the initial SAWS report Dr. Payne mentioned, and that we knew about in the fall of 1965. Once we discovered it and confirmed it with the Frankford Arsenal tests where we first correlated malfunctions as related to high cyclic rate, we set about correcting this. This, of course, took the form of the new buffer. The new buffer was under development for other reasons, and it was fortunate we could put this in with it. Our tests thus far with the new buffer, with both ball and the latest IMR, show very acceptable results in lowering the cyclic rate Now, the malfunctions that occurred in Vietnam in the period culminating in the October - September-October investigations by the Army, undoubtedly were PARTIALLY ATTRIBUTABLE TO THE BALL POWDER INCREASED CYCLIC RATE.
              </p>
              <p>
                <span>Mr. Ichord:</span> How about the fouling?
              </p>
              <p>
                <span>General Anderson:</span> Let me come back to that in just a moment, Mr. Chairman. However, WE HAVE CONCLUDED, BASED ON THE INFORMATION THAT WE HAVE, THAT THE CARE AND MAINTENANCE AND PRESERVATION PROBLEMS SO OVER-SHADOWED THE MALFUNCTIONS THAT MIGHT HAVE BEEN CAUSED BY THE USE OF BALL POWDER, THAT THE PRIMARY PROBLEM IN VIETNAM WITH RESPECT TO THE MALFUNCTIONS WAS RELATED PRIMARILY TO THE CARE AND CLEANING PROBLEM. AND THIS INDIVIDUAL MAINTENANCE so overshadowed the malfunctions that undoubtedly would have occurred because of the high rate of fire, this was the causative factor. Now, once we got upon this, with the teams that went over there in October, and the actions that the Vietnamese Army Headquarters took, we have had a rather dramatic dropoff in the malfunction rate. Our latest report on that in writing was in. I think, April 1967 when a report from Vietnam noted that the malfunction rate was way down AND COMPLETELY UNDER CONTROL. Now, to get back to your question on fouling. We are still conducting tests on the relationship of fouling to malfunctions. I would like to stand corrected here, if my interpretation is not right. THUS FAR WE HAVE NOT BEEN ABLE TO RELATE INCREASE IN MALFUNCTIONS TO INCREASE IN FOULING.
              </p>
              <p>
                <span>Mr. Ichord:</span> What about cyclic rate?
              </p>
              <p>
                <span>General Anderson:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> You have been able to relate that?
              </p>
              <p>
                <span>General Anderson:</span> YES,SIR; WITHOUT QUESTION.
              </p>
              <p>
                <span>Mr. Ichord: </span> Cleaning is not going to affect the cyclic rate. In adopting the new buffer you have slowed down the cyclic rate by the new buffer?
              </p>
              <p>
                <span>General Anderson: </span> Yes. But we have definitely correlated the higher cyclic rate to a greater incidence of malfunctions. However, we have not been able in tests conducted thus far to establish a direct relationship of the increased fouling to additional malfunctions. Is this correct?
              </p>
              <p>
                <span>Mr. Davis:</span> That is correct.
              </p>
              <p>
                <span>Mr. Ichord: </span> You mean you are, then, disagreeing with the SAWS study here?
              </p>
              <p>
                <span>General Anderson:</span> No, sir. I am agreeing with the SAWS study.
              </p>
              <p>
                <span>Mr. Ichord:</span> I thought the SAWS study did say that fouling contributed to the malfunctioning.
              </p>
              <p>
                <span>General Anderson:</span> The high cyclic rate. I think the SAWS study may have.
              </p>
              <p>
                <span>Mr. Ichord:</span> (reading) Major causes of most malfunctions in the 5.56 millimeter weapons are attributed to an interaction of ammunition and belt link deficiencies:</br>
                (1) Weapon function, judged to be caused primarily in the quality of propellant used in the standard ball propellant 5.56 millimeter cartridge.</br>
                (4) a. Fouling: Fouling in the 5.56 mm weapons occurred throughout the experiment. Dirty chambers resulting from rapid carbon buildup CAUSED MOST OF THE FAILURES TO EXTRACT. Fouling remained a problem throughout the experiment, although cleaning and inspection of weapons were considered more stringent than would be possible during combat. Perhaps I read that wrong.
              </p>
              <p>
                <span> General Anderson: </span> I cannot say whether they were correctly relating the fouling and the malfunction. The high rate we have correlated, yes. But we are still conducting tests on the fouling to see if it does induce additional malfunctioning.
              </p>
              <p>
                <span>Mr. Ichord:</span> Well, General Anderson, this is the thing that has concerned me greatly, and I think we have been discussing the crux of the whole M-16 problem and the M-16 controversy in our discussion of IMR and ball propellant ammunition. I think this is pretty well summed up by the Army in this supplement to a July 27, 1967, statement. I read from the statement:
              </p>
              <p>
                <i>
                  From the vantage point of retrospect, it has sometimes been suggested that the peculiar behavior of ball propellant in the M-16 system should have been predicted. There was, in fact, no evidence in 1963 that the cyclic rate of the M-16 would be greatly affected by the choice of propellant, PROVIDED THAT PORT PRESSURES WERE CONTROLLED as they had been in the M14 and other 7.62 millimeter systems which accommodate both ball and extruded propellants. Furthermore, there was no evidence at the time to indicate that an increase of 10 percent to 15 percent in cyclic rate of fire would cause a serious increase in frequency of malfunctions. Had the Army anticipated these developments, it is most likely that the course chosen in </span> January, 1964, would have been the same. A decision to reduce the velocity requirement, and continue loading IMR 4475 propellant would probably have been made instead, and the development of alternate propellants could have been pursued more deliberately.
                </i>
              </p>
              <p>
                <span>General Anderson:</span> Yes.
              </p>
              <p>
                <span>Mr. Ichord:</span> The fact that these things arose as such does not concern me. The thing that does concern me has developed in these hearings, General Anderson. This committee was established for the purpose of reviewing the development, the acquisition, and the functioning of the M-16 rifle and to make a report to the full committee. We did not know of this crux which you have summarized here until we went to Vietnam. And I don't know - I don't think there was anything in the record - was there, in regard to the effect of propellants? We are asking the Army to give us the facts on this matter, the full facts, so that we can make a report. And I doubt very much that if the committee did not receive a tip in Vietnam to look into this ammunition that we would ever have explored it and have developed the whole record. I THINK THE RECORD WITHOUT DOUBT SUSTAINS THE FACT THAT THE CRUX OF THE PROBLEM - YOU HAD OTHER PROBLEMS, SURELY - STARTED WITH THIS CONVERSION TO BALL PROPELLANT. That is the thing that concerns me more than a mistake or mistakes which may have been made. Mistakes don't concern me, as such. I make too many of them to be concerned. General Anderson: Mr. Chairman, I don't know quite how else to respond. There is nothing that I know of that we have withheld from the committee. There is nothing on this subject that I know of that throws any additional light on the controversial switch, so to speak, to ball powder. I know of nothing else that I can add to what has been said already and put in the record. It is true, had we known at the time - but as I said, our experience and limited tests gave us no reason to question the change. In retrospect, I believe we would definitely have considered a drop in the muzzle velocity of perhaps 50 feet per second in order to accommodate the high pressure, or uncomfortable closeness to this limiting pressure, had we known we would run into all this other trouble</span>. We have freely admitted that in the record.
              </p>
              <p>
                <span>Mr. Ichord: </span> Yes.
              </p>
              <p>
                <span>Mr. Morgan: </span> Do you contemplate making any changes to the ball propellant to clean it up or have less adverse effect on the rifle?
              </p>
              <p>
                <span>General Anderson:</span> Well, yes. Mr. Morgan, we have under study a rather sophisticated study to get all the aspects of propellants, coatings, grain size, what have you, hopefully to come up with a conglomerate specification that would have all the good things of a rifle propellant and eliminate all the bad things, without tying ourselves to a proprietary product of one or another manufacturer. This is being done at Frankford, isn't it, this propellant study?
              </p>
              <p>
                <span>Mr. Davis: </span>
                Yes, sir; and BRL.
              </p>
              <p>
                <span>General Anderson: </span> And BRL. So, you ask are we contemplating a change. Well, in a long-range way we are studying these various things. On ball powder itself, as it now exists, I don't know whether any particular study is going on on this.
              </p>
              <p>
                <span>Mr. Davis:</span> No, sir. OUR RECORDS FROM THE MOST EXTENSIVE DATA WE HAVE AT THE PRESENT TIME INDICATE SO LONG AS THE CYCLIC RATE IS CONTROLLED WITHIN AN ADEQUATE RANGE THE PERFORMANCE OF THE BALL PROPELLANT IS NOT LESS RELIABLE THAN PERFORMANCE FROM ANY IMR.
              </p>
              <p>
                <span>General Anderson: </span> On the other hand, Mr. Chairman, I don't think increased fouling helps matters any.
              </p>
              <p>
                <span>Mr. Ichord:</span> I hoped you would say that.
              </p>
              <p>
                <span>General Anderson:</span> Yes.
              </p>
              <p>
                <span>Mr. Ichord:</span> Then we seem to get down to the question - perhaps I am being a little derogatory - how much can we wet nurse a rifle by extensive cleaning under combat conditions?
              </p>
              <p>
                <span>General Anderson:</span> Well, you have to clean the rifle no matter what kind of powder. Whether it would be more difficult to clean it with the ball powder, or with the IMR, I am not sure at all.
              </p>
              <p>
                <span>Mr. Ichord:</span> One of the generals, the one who returned from Vietnam, has stated - of course, we have statements all over the lot on it. Some say it is no more difficult to clean than any other weapon, and I think we have statements by high authority that more care and maintenance has to be directed to it --
              </p>
              <p>
                <span>General Anderson:</span> There is more visible residue on the ball powder than on the other.
              </p>
              <p>
                <span>Mr. Ichord:</span> Yes. I THINK THOSE STATEMENTS THAT THE M-16 REQUIRES MORE CARE AND MAINTENANCE SHOULD BE DIRECTED TO THE BALL PROPELLANT RATHER THAN TO THE RIFLE ITSELF.
              </p>
              <p>
                <span>General Anderson: </span> We would like to cut down the so-called dirty rifle with either. But with ball powder leaving more visible residue, there is some speculation as to whether it takes longer to clean it. I am not sure of that at all. I don't know.
              </p>
              <p>
                <span>Mr. Ichord:</span> I am going to ask if anybody else wants to add anything to the record today. I am not going to adjourn the subcommittee sine die. I had hoped to be able to do so. But I want to give you the chance to clarify the record, straighten up any inconsistency that might result, before I adjourn today, Mr. Counsel.
              </p>
              <p>
                <span>Mr. Morgan: </span> Mr. Chairman, could we ask the Army to give us information on the distribution of the 8208 IMR ammunition that has been sent to Vietnam? Have they established a ratio for distributing the IMR versus the ball propellant to the users in Vietnam?
              </p>
              <p>
                <span>General Anderson:</span> No.
              </p>
              <p>
                <span>Mr. Morgan:</span> Is there any priority for distribution of the IMR over the ball propellant, or is it first in, first out?
              </p>
              <p>
                <span>General Anderson:</span> You are right; generally it is first in, first out. As we said earlier to Mr. Bray, there is no identification on the boxes as to which is ball and which is IMR. We do not do that. By the lot numbers we know. We do know which ones they are. But we do not as a normal practice transmit that to the field, have not been. So they do not know which one is which. You said any kind of program distribution. There is no programmed distribution of ball versus IMR in Vietnam.
              </p>
              <p>
                <span>Mr. Morgan:</span> Can we determine what amount of that shipped since April [1967] has been distributed to the troops and what amount is in the warehouses at the various supply depots?
              </p>
              <p>
                <span>General Anderson:</span> Mr. Morgan, we can try. My estimate is that it would be very difficult to do that. We will try to find out.
                <div>
                  <p>
                    <i>(The following information was received for the record)</i>
                  </p>
                  <p>
                    The Army is unable to state how much of the IMR 8208 propellant ammunition shipped to SEA since April 1967 has been issued to troops and how much is in depot. Rifle ammunition is loaded and packed by the commercial contractor and identified by Lot Number. the package displays the Lot Number as do shipping documents but there is no way to identify the propellant used to fill the cartridges in a particular Lot. Consequently, the issuing depot has no knowledge of the propellant used in the ammunition that has been issued or that remains on hand.
                  </p>
                </div>
              </p>
              <p>
                <span>Mr. Morgan:</span> General Anderson, or Colonel Yount, in the Tech Coordinating Committee meeting of March 2 this year it was indicated that 16 chrome-plated chambers, or 16 barrels with chrome plated chambers, were shipped to Vietnam for evaluation, under the control of the Army concept team in Vietnam. A report from this team was scheduled for April 1967. Was such report received?
              </p>
              <p>
                <span>Colonel Yount</span>: It was not. We do not expect one. We have been in contact with the Army concept team. They have had other projects of greater priority. They distributed the barrels to the field. Major Podurgal personally contacted two or three people who had these weapons with these barrels on them. They were happy with them. As far as controlled tests on these barrels, it is of little value.
              </p>
              <p>
                .................
              </p>
              <p>
                <span>Mr. Ichord:</span> General Anderson, back to your statement that the Army has not conclusively determined that excessive malfunctions have been attributable to fouling, and also the position of the Army that it had no way of knowing that the ball propellant would produce the effects it did. Would it be fair to say you did not, however, have a proper basis of comparison, in that the M-14, where you had your experience with ball propellant, had not only a chrome chamber but also a chrome plated bore? The recommended change - and I want to ask what has been going on in regard to the chrome plating of the chamber. You think, perhaps, the chrome plating will compensate for the increased fouling?
              </p>
              <p>
                <span>General Anderson:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord: </span> At least it makes it a little easier to clean, it is a little harder, and it would work to eliminate excessive pitting.
              </p>
              <p>
                <span>General Anderson:</span> That is right. It is less likely to erode, it is easier to clean. The coefficient of friction, for example, between chrome and brass is less, so it would extract easier  any conditions, in that case. Yes. That is being done, as you know.
              </p>
              <p>
                <span>Mr. Ichord:</span> How do we stand now that Colt has gone back to work?
              </p>
              <p>
                <span>Colonel Yount:</span> The first 5,000 production weapons with the chrome-plated chamber are scheduled to be received in the month of September.
              </p>
              <p>
                <span>Mr. Ichord:</span> They backed up? They had an earlier schedule on that, of August, didn't they? And the strike delayed that a month?
              </p>
              <p>
                <span>Colonel Yount:</span> The strike delayed it. During September we expect to get 4,000 replacement barrels that will have the chrome-plated chamber. Each month thereafter the total production of weapons, as well as repair barrels, will have the chrome-plated chamber.
              </p>
              <p>
                <span>Mr. Ichord: </span> Have you concluded, Mr. Counsel?
              </p>
              <p>
                <span>Mr. Morgan:</span> Yes, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Colonel, how about those monthly reports you made on M-16 reliability to the Army Chief of Staff? Do you have those with you today?
              </p>
              <p>
                <span>Colonel Yount: </span> No, sir. Which ones, sir, the most recent ones, or the initial ones, sir?
              </p>
              <p>
                <span>Mr. Ichord: </span> I think perhaps we need to review that, particularly since October 1966. That is your monthly reports on reliability and product improvement. You don't have those with you?
              </p>
              <p>
                <span>Colonel Yount:</span> No, sir.
              </p>
              <p>
                <span>Mr. Ichord:</span> Can you make those available to the committee?
              </p>
              <p>
                <span>Colonel Yount:</span> Again, sir, I am not sure which reports you are referring to.
              </p>
              <p>
                <span>Mr. Ichord: </span> Don't you make a monthly report to the Army Chief of Staff or the Deputy Chief?
              </p>
              <p>
                <span>Colonel Yount:</span> At the present time?
              </p>
              <p>
                <span>Mr. Ichord:</span> Well --
              </p>
              <p>
                <span>Colonel Yount:</span> Or initially? When we started the program I had a set of reports going to the Department of Army. Then, as a result of the SAWS, I submitted reports which went into DCSLOG which eventually are received by the Chief of Staff. I am not sure which reports you are referring to, sir?
              </p>
              <p>
                <span>Mr. Ichord:</span> How about giving us all of them, to make sure we have them? How about giving us all your monthly reports?
              </p>
              <p>
                <span>Colonel Yount: </span> Yes, sir.
              </p>
              <p>
                (The information requested is in the files of the committee.)
              </p>
              <p>
                <span>Mr. Ichord:</span> There being no further questions, the committee will adjourn subject to the call of the Chair.
              </p>
              <p>
                (Whereupon, at 4:50 p.m. the subcommittee adjourned.)
              </p>
              <div class="referenceList">
                <div class="timeList">
                  <div class="timeTitle">CHRONOLOGICAL LIST OF HEARINGS</div>
                  <div>
                    <div>
                      <u>DATE</u>
                    </div>
                    <div>
                      <u>PAGE NUMBER</u>
                    </div>
                  </div>
                  <div>
                    <div>
                      Monday, May 15, 1967
                    </div>
                    <div>
                      4431
                    </div>
                  </div>
                  <div>
                    <div>
                      Tuesday, May 16, 1967
                    </div>
                    <div>
                      4484
                    </div>
                  </div>
                  <div>
                    <div>
                      Wednesday, May 31, 1967
                    </div>
                    <div>
                      4513
                    </div>
                  </div>
                  <div>
                    <div>
                      Wednesday, June 21, 1967
                    </div>
                    <div>
                      4540
                    </div>
                  </div>
                  <div>
                    <div>
                      Tuesday, July 25, 1967
                    </div>
                    <div>
                      4579
                    </div>
                  </div>
                  <div>
                    <div>
                      Wednesday, July 26, 1967
                    </div>
                    <div>
                      4643
                    </div>
                  </div>
                  <div>
                    <div>
                      Thursday, July 27, 1967
                    </div>
                    <div>
                      4715
                    </div>
                  </div>
                  <div>
                    <div>
                      Tuesday, August 8, 1967
                    </div>
                    <div>
                      4784
                    </div>
                  </div>
                  <div>
                    <div>
                      Wednesday, August 9, 1967
                    </div>
                    <div>
                      4813
                    </div>
                  </div>
                  <div>
                    <div>
                      Tuesday, August 22, 1967
                    </div>
                    <div>
                      4934
                    </div>
                  </div>
                </div>
                <div class="witnessList">
                  <div class="witnessTitle">Principal Witnesses In Person</div>
                  <div>
                    <div>
                      MG Roland B. Anderson
                    </div>
                    <div>
                      US Army
                    </div>
                  </div>
                  <div>
                    <div>
                      Dr. Robert A. Brooks
                    </div>
                    <div>
                      Assistant Secretary of the Army (Installation & Logistics)
                    </div>
                  </div>
                  <div>
                    <div>
                      Mr. Kanemitsu "Koni" Ito
                    </div>
                    <div>
                      Colt Manufacturing Co.
                    </div>
                  </div>
                  <div>
                    <div>
                      Dr. Wendell F. Jackson
                    </div>
                    <div>
                      E. I. du Pont de Nemours Co.
                    </div>
                  </div>
                  <div>
                    <div>
                      Mr. Robert W. Macdonald
                    </div>
                    <div>
                      Cooper-Macdonald, Inc.
                    </div>
                  </div>
                  <div>
                    <div>
                      Dr. William B. Payne
                    </div>
                    <div>
                      Chief of Operations Research Office, Under Secretary of the Army
                    </div>
                  </div>
                  <div>
                    <div>
                      Mr. Eugene M. Stoner
                    </div>
                    <div>
                      Consultant to Weapons Ordnance Development Center, TRW Co.
                    </div>
                  </div>
                  <div>
                    <div>
                      Mr. Frank J. Vee
                    </div>
                    <div>
                      Installations & Logistics, Office of Secretary of Defense
                    </div>
                  </div>
                  <div>
                    <div>
                      COL Harold W. Yount
                    </div>
                    <div>
                      US Army
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
