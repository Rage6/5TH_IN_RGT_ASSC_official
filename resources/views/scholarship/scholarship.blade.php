@extends('layouts.master')

@include('scholarship.style')

@section('scholarship_content')
  <?php if (intval(date('m')) >= 3 && intval(date('m')) <= 4): ?>
    <div id="notificationEl" class="scholarNotifBackground">
      <div class="scholarNotification">
        <span id="closeNotification">
          &#10005;
        </span>
        <div>
          <div>
            APPLICATIONS ARE NOW ACCEPTED!
          </div>
          Applications are accepted from <u>Mar. 1st to Apr. 30th</u>. <b>Please read/use the "Application", "Criteria", "Biography", and "Criteria Supplement"</b> files when applying. If you have any questions, please <a href="mailto:general.anderson.scholarship.info@gmail.com">email us</a>.
        </div>
      </div>
    </div>
  <?php endif ?>
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
              <a target="_blank" href="/scholarship/form/GASP_Application.docx">
                <span class="buttons">
                  APPLY NOW
                </span>
              </a>
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
        <div>
          <div class="regSectionTitle">
            Attachments
          </div>
          <div class="regSection">
            The following attachments are necessary for understanding the scholarship program and and the application process.
          </div>
          <div class="regSection attachmentBox">
            <div class="downloadImg">
              <a target="_blank" href="/scholarship/form/GASP_Application.docx">
                <div>Application</div>
              </a>
            </div>
            <div class="downloadImg">
              <a target="_blank" href="/scholarship/form/GASP_Addendum_One.docx">
                <div>Biography</div>
              </a>
            </div>
            <div class="downloadImg">
              <a target="_blank" href="/scholarship/form/GASP_Criteria.docx">
                <div>Criteria</div>
              </a>
            </div>
            <div class="downloadImg">
              <a target="_blank" href="/scholarship/form/GASP_Addendum_Two.docx">
                <div>Criteria Supplement</div>
              </a>
            </div>
          </div>
        </div>
        <div>
          <div class="regSectionTitle">
            Question
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('who')">
              + Who Can Apply For The Scholarship?
            </div>
            <div data-answer="who">
              The respite the scholarships offer is intended to assist the most deserving Applicants who meet one (1) of the following guidelines listed below. Be aware that members can only be part of an application if they have been a member of the 5th Infantry Regiment Association for at least <u>12 months</u> prior to the application deadline.
              <ol type="a">
                <li>
                  A current, active member
                </li>
                <li>
                  A spouse of a member that meets this criteria (or) is an <a href="{{ route('registration.index') }}">Associate Member</a>.
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
              <div>
                Download the <a target="_blank" href="/scholarship/form/GASP_Criteria.docx">official criteria</a> for a complete description of applicant eligibility.
              </div>
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('how')">
              + How Is An Applicant Selected?
            </div>
            <div data-answer="how">
              <ol>
                <li>
                  Applicants must apply during the 60 days between March 1st and the close of business on April 30th. The application form can only be found by logging into our website, returning to this page, and clicking "APPLY NOW". Only members can log in, so non-member applicants (ex. grandchildren) must contact their related Bobcat member for access. 
                </li>
                <li>
                  The Scholarship Committee will review the submitted applications and vote on the selected applicant(s) no later than May 31. These are then reviewed and, if accepted, approved by the President and Board of Directors.
                </li>
                <li>
                  The winners of the scholarships are announced no later than June 15. Those not selected will also be notified by that date.
                </li>
              </ol>
              <div>
                Download the <a target="_blank" href="/scholarship/form/GASP_Criteria.docx">official criteria</a> for a complete description of selection process.
              </div>
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('current')">
              + Can Current College/VoTech Students Apply?
            </div>
            <div data-answer="current">
              Students currently pursuing college or vocational/technical degrees can be selected. However, this requires some additional information, and the program's policies are slightly different for these cases. Download the <a target="_blank" href="/scholarship/form/GASP_Addendum_Two.docx">official addendum</a> to read these additional policies.
            </div>
          </div>
          <div class="regSection" onclick="openAnswer('ask')">
            <div class="regSubtitle">
              + Who Can Answer Questions About The Scholarship?
            </div>
            <div data-answer="ask">
              Scholarship and application inquiries should be directed to <a href="mailto:general.anderson.scholarship.info@gmail.com"><u><b>general.anderson.scholarship.info@gmail.com</b></u></a>
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle"  onclick="openAnswer('amount')">
              + How Much Money Does The Scholarship Provide?
            </div>
            <div data-answer="amount">
              Individual scholarships will provide up to $1,500.00 for Undergraduate Degree Programs, Associate Degree Programs, and Accredited VoTech School Certificates of Completion / Certification. Choices of the recipients are based solely on the decision(s) of the Scholarship Committee and the available funds.<br>
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('moneyuse')">
              + How Can The Money Be Used?
            </div>
            <div data-answer="moneyuse">
              The General Anderson Scholarships that are awarded are not intended to be “full ride” scholarships. The funds awarded are intended to provide some financial relief from the overall high expense of a college education or an Accredited VoTech School Degree, Diploma and/or Certificate of Completion / Certification. The funds awarded are required to be used to help defray the overall cost of a higher institution of learning’s education expenses, i.e., towards books, lab fees, on-campus dormitory/housing, on-campus meals, tuition, etc.   
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('college')">
              + For Undergraduates & Associates Degree Students
            </div>
            <div data-answer="college">
              Undergraduate and Associate students MUST enroll in and complete a minimum of <u>12 credit hours PER SEMESTER</u> and be registered as a full-time student. If an associated student later changes their mind and wants to pursue an undergraduate degree, they will have to reapply for an undergraduate degree program.
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('votech')">
              + For vocational-technical (VoTech) Students
            </div>
            <div data-answer="votech">
              The VoTech School program is limited to two (2) years but required mid-course work study periods do not count towards the two (2) year time period. Students <b>MUST</b> be enrolled as a full-time VoTech student and keep the VoTech's School / Course equivalent of a college / university 3.0 or better GPA. See Addendum Two (Criteria Supplement) for further guidance. Apprentice and/or Probationary work is <u>NOT</u> considered part of schooling. 
            </div>
          </div>
          <div class="regSection">
            <div class="regSubtitle" onclick="openAnswer('anderson')">
              + Who Was MG Andrew Anderson?
            </div>
            <div data-answer="anderson">
              Retired MG Andrew Anderson dedicated his  life to serving his family, friends, communities, and nation. This included the Bobcat organization, consistently dedicating his time and efforts to it. You can read a detailed summary of his life by downloading this <a target="_blank" href="/scholarship/form/GASP_Addendum_One.docx">short biography</a> (preferred document; integral [hint, hint] to the application process) or reading his story on our <a @if ($general) href="{{ route('deceased.select',[ 'id' => $general->id ]) }}" @endif >Deceased Member</a> page.
            </div>
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
    };

    function openAnswer(name) {
      var allAnswers = document.querySelectorAll(`[data-answer]`);
      for (var i = 0; allAnswers.length > i; i++) {
        var attribute = allAnswers[i].getAttribute('data-answer');
        if (attribute == name) {
          var filler = "[data-answer='" + attribute + "']";
          if (document.querySelector(filler).style.display == 'block') {
            document.querySelector(filler).style.display = 'none';
          } else {
            document.querySelector(filler).style.display = 'block';
          }
        } else {
          var filler = "[data-answer='" + attribute + "']";
          document.querySelector(filler).style.display = 'none';
        };
      };
    };


  </script>
@stop
