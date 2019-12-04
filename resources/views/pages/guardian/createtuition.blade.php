@extends('layout.master')

@section('content')
<div class="container">
<h5 class="text-title">Request for Tutors</h5>

<div class="row">
<div class="col-md-8 mb-10">
    <div class="card">
    <div class="card-header">
        <div class="text-center">
            <strong class="text-success">Request for a tutor! </strong> If you want to get your Desired tutor then fill the below form.
                    </div>
                </div>
                 <div class="card-body parent-request-form">
                   <form method="post" action="{{route('guardian.storetuition')}}" data-select2-id="19">
                                  {{ csrf_field() }}

                                 <div class="form-group">
                                  <label for="exampleFormControlInput1">Title</label>
                                   <input type="text" name="title" title="Enter title" value="" placeholder="Enter Title of the post" class="form-control poshytip">
                                 </div>

                                 <div class="form-group">
                                  <label for="exampleFormControlInput1">Name*</label>
                                   <input type="text" name="s_fullName" title="Inter your full name" value="" placeholder="Type your Name" class="form-control poshytip">
                                 </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="exampleFormControlInput1">Select Student Gender</label>
                                       <select name="s_gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                       </select>
                                     </div>

                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Institute</label> <input type="text" name="s_college" title="Inter Student institute name (optional)" placeholder="Type your Institute name" class="form-control poshytip">
                                      </div>
                                    </div>

                                     <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Select Your Medium</label>
                                         <select name="s_medium" class="form-control medium">
                                          <option disabled="disabled">Select your Medium</option>
                                          <option value="Bangla Medium">Bangla Medium</option>
                                          <option value="English Medium">English Medium</option>
                                          <option value="English Version">English Version</option>
                                          <option value="Arabic Medium">Arabic Medium</option>
                                         </select>
                                       </div>

                                        <div class="form-group col-md-6">
                                          <label for="exampleFormControlInput1">Select Student Class</label>
                                           <select name="s_class" class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option disabled="disabled" data-select2-id="23">Please select Student Class</option>
                                            <option value="Class I" data-select2-id="3">Class I</option>
                                            <option value="Class II" data-select2-id="24">Class II</option> <option value="Class III" data-select2-id="25">Class III</option> <option value="Class IV" data-select2-id="26">Class IV</option> <option value="Class V" data-select2-id="27">Class V</option> <option value="Class VI" data-select2-id="28">Class VI</option> <option value="Class VII" data-select2-id="29">Class VII</option> <option value="Class VIII" data-select2-id="30">Class VIII</option> <option value="Class IX" data-select2-id="31">Class IX</option> <option value="S.S.C" data-select2-id="32">S.S.C</option> <option value="HSC 1st year" data-select2-id="33">HSC 1st year</option> <option value="HSC 2nd year" data-select2-id="34">HSC 2nd year</option> <option value="Honours 1st year" data-select2-id="35">Honours 1st year</option> <option value="Honours 2nd year" data-select2-id="36">Honours 2nd year</option> <option value="Honours 3rd year" data-select2-id="37">Honours 3rd year</option> <option value="Honours 4th year" data-select2-id="38">Honours 4th year</option> <option value="Masters" data-select2-id="39">Masters</option> <option value="Nursery" data-select2-id="40">Nursery</option> <option value="Dakhil" data-select2-id="41">Dakhil</option> <option value="Alim" data-select2-id="42">Alim</option> <option value="Fazil" data-select2-id="43">Fazil</option> <option value="Kamil" data-select2-id="44">Kamil</option> <option value="O Lavel" data-select2-id="45">O Lavel</option> <option value="A Lavel" data-select2-id="46">A Lavel</option> <option value="KG" data-select2-id="47">KG</option></select>
                                            <span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" data-select2-id="2" style="width: 100%;">
                                              <span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-s_class-wj-container"><span class="select2-selection__rendered" id="select2-s_class-wj-container" role="textbox" aria-readonly="true" title="Class I">Class I</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                          </div>
                                        </div>

                                         <div class="form-row">

                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone Number*</label>
                                             <input type="text" name="g_phoneNumber" value="" placeholder="Type your phone number" class="form-control ">
                                           </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">E-Mail <small>(optional)</small></label>
                                             <input type="email" name="g_email" placeholder="Type your E-Mail" class="form-control">
                                           </div>
                                         </div>

                                        <div class="form-row">

                                          <div class="form-group col-md-6">
                                            <label for="selectCityName">Select City Name*</label>
                                            <select name="s_districts" class="form-control districts single-select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true"><option value="" data-select2-id="6">Select City Name</option> <option value="1">BAGERHAT</option> <option value="2">BANDARBAN</option> <option value="3">BARGUNA</option> <option value="4">BARISAL</option> <option value="5">BHOLA</option> <option value="6">BOGRA</option> <option value="7">BRAHMANBARIA</option> <option value="8">CHANDPUR</option> <option value="9">CHITTAGONG</option> <option value="10">CHUADANGA</option> <option value="11">COMILLA</option> <option value="12">COX'S BAZAR</option> <option value="13">DHAKA</option> <option value="14">DINAJPUR</option> <option value="15">FARIDPUR</option> <option value="16">FENI</option> <option value="17">GAIBANDHA</option> <option value="18">GAZIPUR</option> <option value="19">GOPALGANJ</option> <option value="20">HABIGANJ</option> <option value="21">JOYPURHAT</option> <option value="22">JAMALPUR</option> <option value="23">JESSORE</option> <option value="24">JHALAKATHI</option> <option value="25">JHENAIDAH</option> <option value="26">KHAGRACHARI</option> <option value="27">KHULNA</option> <option value="28">KISHOREGANJ</option> <option value="29">KURIGRAM</option> <option value="30">KUSHTIA</option> <option value="31">LAKSHMIPUR</option> <option value="32">LALMONIRHAT</option> <option value="33">MADARIPUR</option> <option value="34">MAGURA</option> <option value="35">MANIKGANJ</option> <option value="36">MEHERPUR</option> <option value="37">MOULVIBAZAR</option> <option value="38">MUNSHIGANJ</option> <option value="39">MYMENSINGH</option> <option value="40">NAOGAON</option> <option value="41">NARAIL</option> <option value="42">NARAYANGANJ</option> <option value="43">NARSINGDI</option> <option value="44">NATORE</option> <option value="45">C. NAWABGANJ</option> <option value="46">NETRAKONA</option> <option value="47">NILPHAMARI</option> <option value="48">NOAKHALI</option> <option value="49">PABNA</option> <option value="50">PANCHAGARH</option> <option value="51">RANGAMATI</option> <option value="52">PATUAKHALI</option> <option value="53">PIROJPUR</option> <option value="54">RAJBARI</option> <option value="55">RAJSHAHI</option> <option value="56">RANGPUR</option> <option value="57">SATKHIRA</option> <option value="58">SHARIATPUR</option> <option value="59">SHERPUR</option> <option value="60">SIRAJGANJ</option> <option value="61">SUNAMGANJ</option> <option value="62">SYLHET</option> <option value="63">TANGAIL</option> <option value="64">THAKURGAON</option></select>
                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-s_districts-i6-container"><span class="select2-selection__rendered" id="select2-s_districts-i6-container" role="textbox" aria-readonly="true" title="Select City Name">Select City Name</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                          </div>

                                           <div class="form-group col-md-6">
                                            <label for="inputPassword4">Select Area Name*</label>
                                             <div class="selectArea">
                                              <select name="s_area" class="form-control area single-select select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="9">Select Area</option>
                                              </select>
                                              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-s_area-tl-container"><span class="select2-selection__rendered" id="select2-s_area-tl-container" role="textbox" aria-readonly="true" title="Select Area">Select Area</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>

                                            <div class="loadingImg" style="display: none;"><img width="90" src="https://deshtutor.com/storage/img/loading.gif" alt="TutorSheba" class="loding"></div>

                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="locationDetails">Location Details*</label>
                                           <textarea name="s_address" rows="2" class="form-control"></textarea>
                                         </div>
                                        <div class="form-row">

                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Select Teacher Gender</label>
                                             <select name="t_gender" class="form-control">
                                              <option value="">Select Gender</option><option value="Any Gender">Any Gender</option>
                                              <option value="Male">Male</option> <option value="Female">Female</option>
                                            </select>
                                          </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Days Per Week</label>
                                             <select name="t_days" class="form-control days">
                                              <option value="">Please select your Day</option> <option value="1 Day/Week">1 Day/Week</option> <option value="2 Days/Week">2 Days/Week</option> <option value="3 Days/Week">3 Days/Week</option> <option value="4 Days/Week">4 Days/Week</option> <option value="5 Days/Week">5 Days/Week</option> <option value="6 Days/Week">6 Days/Week</option> <option value="7 Days/Week">7 Days/Week</option></select>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlInput1">Select Subject</label>
                                             <select multiple="" name="t_subject[]" class="form-control single-select select2-hidden-accessible" data-select2-id="10" tabindex="-1" aria-hidden="true"><option value="">Select Subject</option> <option value="Accounting" class="text-uppercase">Accounting</option> <option value="Agriculture" class="text-uppercase">Agriculture</option> <option value="All Subject" class="text-uppercase">All Subject</option> <option value="Arabic" class="text-uppercase">Arabic</option> <option value="Arts and Crafts" class="text-uppercase">Arts and Crafts</option> <option value="Bangla" class="text-uppercase">Bangla</option> <option value="BANGLADESH &amp; GLOBAL STUDIES" class="text-uppercase">BANGLADESH &amp; GLOBAL STUDIES</option> <option value="Biology" class="text-uppercase">Biology</option> <option value="Buddhist Religious Studies" class="text-uppercase">Buddhist Religious Studies</option> <option value="Business Entrepreneurship" class="text-uppercase">Business Entrepreneurship</option> <option value="Career Education" class="text-uppercase">Career Education</option> <option value="Chemistry" class="text-uppercase">Chemistry</option> <option value="Christian Religious Studies" class="text-uppercase">Christian Religious Studies</option> <option value="Civics and Citizenship" class="text-uppercase">Civics and Citizenship</option> <option value="Composition stock" class="text-uppercase">Composition stock</option> <option value="Domestic Science" class="text-uppercase">Domestic Science</option> <option value="Easy Handwriting" class="text-uppercase">Easy Handwriting</option> <option value="Economics" class="text-uppercase">Economics</option> <option value="English" class="text-uppercase">English</option> <option value="Finance &amp; Banking" class="text-uppercase">Finance &amp; Banking</option> <option value="General Math" class="text-uppercase">General Math</option> <option value="General Science" class="text-uppercase">General Science</option> <option value="Geography and Environment" class="text-uppercase">Geography and Environment</option> <option value="Geometry" class="text-uppercase">Geometry</option> <option value="Higher Math" class="text-uppercase">Higher Math</option> <option value="Hindu Religious Studies" class="text-uppercase">Hindu Religious Studies</option> <option value="History and Civilization" class="text-uppercase">History and Civilization</option> <option value="History of Bangladesh &amp; World Civilization" class="text-uppercase">History of Bangladesh &amp; World Civilization</option> <option value="Home Economics" class="text-uppercase">Home Economics</option> <option value="ICT" class="text-uppercase">ICT</option> <option value="ICT" class="text-uppercase">ICT</option> <option value="Islamic Studies" class="text-uppercase">Islamic Studies</option> <option value="Law" class="text-uppercase">Law</option> <option value="Math" class="text-uppercase">Math</option> <option value="Physical Studies &amp; Health" class="text-uppercase">Physical Studies &amp; Health</option> <option value="Physics" class="text-uppercase">Physics</option> <option value="Primary Science" class="text-uppercase">Primary Science</option> <option value="Psychology" class="text-uppercase">Psychology</option> <option value="Social Science" class="text-uppercase">Social Science</option> <option value="Statistics" class="text-uppercase">Statistics</option> <option value="Work and Life Oriented Studies" class="text-uppercase">Work and Life Oriented Studies</option></select>
                                             <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                           </div>

                                          <div class="form-row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Tutoring Time</label>
                                                 <select name="time" class="form-control single-select select2-hidden-accessible" data-select2-id="12" tabindex="-1" aria-hidden="true">
                                                  <option value="" data-select2-id="14">Select Tutoring Time</option> <option value="05:00:00"> 05:00 am</option> <option value="06:00:00"> 06:00 am</option> <option value="07:00:00"> 07:00 am</option> <option value="08:00:00"> 08:00 am</option> <option value="09:00:00"> 09:00 am</option> <option value="10:00:00"> 10:00 am</option> <option value="11:00:00"> 11:00 am</option> <option value="12:00:00"> 12:00 pm</option> <option value="13:00:00"> 01:00 pm</option> <option value="14:00:00"> 02:00 pm</option> <option value="15:00:00"> 03:00 pm</option> <option value="16:00:00"> 04:00 pm</option> <option value="17:00:00"> 05:00 pm</option> <option value="18:00:00"> 06:00 pm</option> <option value="19:00:00"> 07:00 pm</option> <option value="20:00:00"> 08:00 pm</option> <option value="21:00:00"> 09:00 pm</option> <option value="22:00:00"> 10:00 pm</option> <option value="23:00:00"> 11:00 pm</option></select>
                                                  <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-s8-container"><span class="select2-selection__rendered" id="select2-time-s8-container" role="textbox" aria-readonly="true" title="Select Tutoring Time">Select Tutoring Time</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="exampleFormControlSelect1">Salary range</label>
                                                   <select name="t_salary" class="form-control single-select select2-hidden-accessible" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="17">Please select Salary Range</option> <option value="1000">1000 Tk/month</option> <option value="1500">1500 Tk/month</option> <option value="2000">2000 Tk/month</option> <option value="2500">2500 Tk/month</option> <option value="3000">3000 Tk/month</option> <option value="3500">3500 Tk/month</option> <option value="4000">4000 Tk/month</option> <option value="4500">4500 Tk/month</option> <option value="5000">5000 Tk/month</option> <option value="6000">6000 Tk/month</option> <option value="7000">7000 Tk/month</option> <option value="8000">8000 Tk/month</option> <option value="9000">9000 Tk/month</option> <option value="10000">10000 Tk/month</option> <option value="11000">11000 Tk/month</option> <option value="12000">12000 Tk/month</option> <option value="13000">13000 Tk/month</option> <option value="14000">14000 Tk/month</option> <option value="15000">15000 Tk/month</option></select>
                                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-t_salary-rs-container"><span class="select2-selection__rendered" id="select2-t_salary-rs-container" role="textbox" aria-readonly="true" title="Please select Salary Range">Please select Salary Range</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                          <label for="locationDetails">Additional Information(If multiple students mention here)</label>
                                           <textarea name="additional_info" rows="2" class="form-control"></textarea>
                                         </div>


                                              <div class="text-center mt-3"><button type="submit" class="btn btn-lg btn-custom">Submit Request <i class="fa fa-send"></i></button></div>
                                            </form>
                                             </div>
                                         </div>
                                     </div>
                                      <div class="col-md-4 mb-10">
                                        <div class="card">
                                            <h5 class="bg-custom text-light py-3 pl-3">HELP &amp; INFO</h5>
                                             <div class="p-2">
                                                <strong>Q. How can i get the desired tutor ?</strong>
                                                 <p class="mt-1 text-secondary">
                        Just fill up the Request for a tutor form and submit request.Available teachers will contact with you.
                    </p>
                     <strong>Q. What will happen after fill the forms ?</strong>
                      <p class="mt-1 text-secondary text-justify">
                        After submit the form the information will be sent to Hometutor.com support team. They will review / verify the info and will publish on the available tuitions section.
                    </p>
                </div>
            </div> 
            
        </div>
    </div>
</div>

@endsection