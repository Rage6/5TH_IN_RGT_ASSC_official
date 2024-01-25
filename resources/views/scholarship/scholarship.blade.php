@extends('layouts.master')

@include('scholarship.style')

@section('scholarship_content')
  <div class="main">
    <div class="content">
      <!-- <div class="regIntro"> -->
        <div class="scholarshipTitle">
          <div class="genName">
            <div>
              <div>The MG (Ret.) Andrew H. Anderson</div>
            </div>
            <div></div>
            <div>
              <div>5th Infantry Regiment Association Memorial Scholarship</div>
            </div>
          </div>
          <div class="scholarImg">
            <div class="aroundButtons applyNow">
              @if (isset($this_user))
                <a target="_blank" href="/scholarship/form/2024-Scholarship-Criteria-and-Application.pdf">
                  <span class="buttons">
                    APPLY NOW
                  </span>
                </a>
              @else
                <a href="{{ route('login') }}">
                  <span class="buttons">
                    LOGIN & APPLY
                  </span>
                </a>
              @endif
            </div>
            <div class="aroundButtons scholarshipInfo">
              <a>
                <span class="buttons" id="learnMore" onclick="slideDown()">
                  <span>
                    THE SCHOLARSHIP
                  </span>
                </span>
              </a>
            </div>
            <div class="aroundButtons generalInfo">
              <a @if ($general) href="{{ route('deceased.select',[ 'id' => $general->id ]) }}" @endif>
                <span class="buttons">
                  THE GENERAL
                </span>
              </a>
            </div>
            <div class="filler scholarshipFiller">
              <!-- For the scholarship's detail background image -->
            </div>
            <div class="filler generalFiller">
              <!-- For the General link's background image -->
            </div>
          </div>
        </div>
      <!-- </div> -->
      <div class="regRow" id="belowLearnMore">
        <div class="regSection">
          <div class="regSubtitle">
            Who Can Apply For The Scholarship?
          </div>
          <div>
            The respite the scholarships offer is intended to assist the most deserving Applicants who meet one (1) of the following guidelines listed below.<br>
            NOTE: A "member" is one of the 5th Infantry Regiment Association who has been a member for at least the preceding <u>12 months prior to the application</u> date deadline.
            <ol type="a">
              <li>
                A current, active member
              </li>
              <li>
                A spouse of a member that meets this criteria (or) is an <a style="color:white;text-decoration:underline" href="{{ route('registration.index') }}">Associate Member</a>.
              </li>
              <li>
                Children of a current active member. This includes adopted children, stepchildren, and grandchildren.
              </li>
              <li>
                The un-remarried spouse of a deceased member who was Killed In Action (KIA) or later died from their combat injury.
              </li>
              <li>
                Children of a deceased member who was Killed In Action (KIA) or later died from their combat injury.
              </li>
            </ol>
            Affiliate Members and Honorary Members of the 5th Infantry Regiment Association are <u>NOT</u> eligible.
          </div>
        </div>
        <div class="regSection">
          <div class="regSubtitle">
            How Is An Applicant Selected?
          </div>
          <div>
            <ol>
              <li>
                Applicants must apply between February 15 and close of business on May 15. The application form can only be found by logging into our website, returning to this page, and clicking "APPLY NOW". Only members can log in, so non-member applicants (ex. grandchildren) must contact their related Bobcat member for access. 
              </li>
              <li>
                The Scholarship Committee will review the submitted applications and vote on the selected applicant(s) no later than May 31. These are then reviewed and, if accepted, approved by the President and Board of Directors.
              </li>
              <li>
                The winners of the scholarships are announced no later than June 15. Those not selected will also be notified by that date.
              </li>
            </ol> 
          </div>
        </div>
        <div class="regSection">
          <div class="regSubtitle">
            Can Current College/VoTech Students Apply?
          </div>
          <div>
            Students currently pursuing college or vocational/technical degrees can be selected. However, this requires some additional information, and the program's policies are slightly different for these cases.
          </div>
        </div>
        <div class="regSection">
          <div class="regSubtitle">
            How Much Money Does The Scholarship Provide?
          </div>
          <div>
            Individual scholarships of up to $1,500.00 for Undergraduate and Associate Degree Programs and up to $750.00 for Accredited VoTech School Certificates of Completion / Certification are based solely on the decision(s) of the Scholarship Committee and available funds.<br>
          </div>
        </div>
        <div class="regSection">
          <div class="regSubtitle">
            How Can The Money Be Used?
          </div>
          <div>
            The General Anderson Scholarships that are awarded are not intended to be “full ride” scholarships. The funds awarded are intended to provide some financial relief from the overall high expense of a college education or an Accredited VoTech School Degree, Diploma and/or Certificate of Completion / Certification. The funds awarded are required to be used to help defray the overall cost of a higher institution of learning’s education expenses, i.e., towards books, lab fees, on-campus dormitory/housing, on-campus meals, tuition, etc.   
          </div>
        </div>
        <div class="regSection">
          <div class="regSubtitle">
            For vocational-technical (VoTech) Students
          </div>
          <div>
            The VoTech School program is limited to two (2) years but required mid-course work study periods do not count towards the two (2) year time period. Students MUST be enrolled full time and keep a 3.0 or better GPA in order to apply for their scholoarship's renewal. Apprentice and/or Probationary work is <u>NOT</u> considered part of schooling. 
          </div>
        </div>
        <div class="regSection">
          <div class="regSubtitle">
            For Undergraduates & Associates Degree Students
          </div>
          <div>
            Undergraduate and Associate students MUST enroll in and complete a minimum of <u>12 credit hours PER SEMESTER</u> and be registered as a full-time student. If an associated student later changes their mind and wants to pursue an undergraduate degree, they will have to reapply for an undergraduate degree program. However, it will only be awarded for 2 or 3 follow-on years (depending on the period already completed)! <u>Undergraduate students</u> can only be considered for renewal of their scholarship for three consecutive academic years after their first academic year, regardless of how long it takes to actually complete their degree program. Similarly, <u>Associate students</u> can only be considered for renewal for 1 additional consecutive academic year after the first academic year. 
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
  <script>
    function onSubmit(token) {
      document.getElementById("memberForm").submit();
    }
  </script>
@stop
