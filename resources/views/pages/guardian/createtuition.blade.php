@extends('layout.master')

@section('content')
<div class="container">
<h5 class="text-title">Tuition Form</h5>
 @if($message=Session::get('success'))
 <div class="alert alert-success">
  <p>{{$message}}</p>
</div>
    @endif
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
                                  <input type="text"  name="guardian_id" value="{{session()->get('userid')}}" hidden="1">

                                 <div class="form-group">
                                  <label for="exampleFormControlInput1">Title</label>
                                   <input type="text" name="title"  value="" placeholder="Enter Title of the post" class="form-control poshytip">
                                 </div>

                                 <div class="form-group">
                                  <label for="exampleFormControlInput1">Student Name</label>
                                   <input type="text" name="s_fullName"  value="" placeholder="Type Student Name" class="form-control poshytip">
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
                                        <label for="inputPassword4">Student Institute</label> <input type="text" name="s_college"  placeholder="Type Institute name" class="form-control poshytip">
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
                                          <label >Select Student Class</label>
                                           <select name="s_class" class="form-control" >
                                            <option disabled="1">Please select Student Class</option>
                                            <option value="Class I">Class I</option>
                                            <option value="Class II" >Class II</option> <option value="Class III">Class III</option> <option value="Class IV" >Class IV</option> <option value="Class V" >Class V</option> <option value="Class VI" >Class VI</option> <option value="Class VII" >Class VII</option> <option value="Class VIII">Class VIII</option> <option value="Class IX" >Class IX</option> <option value="S.S.C" >S.S.C</option> <option value="HSC 1st year" >HSC 1st year</option> <option value="HSC 2nd year">HSC 2nd year</option> <option value="Honours 1st year" >Honours 1st year</option> <option value="Honours 2nd year" >Honours 2nd year</option> <option value="Honours 3rd year">Honours 3rd year</option> <option value="Honours 4th year">Honours 4th year</option> <option value="Masters">Masters</option> <option value="Nursery" >Nursery</option> <option value="Dakhil" >Dakhil</option> <option value="Alim" >Alim</option> <option value="Fazil" >Fazil</option> <option value="Kamil" >Kamil</option> <option value="O Lavel">O Lavel</option> <option value="A Lavel" >A Lavel</option> <option value="KG" >KG</option></select>
                                            
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
                                            <label>Select City Name*</label>
                                            <select name="s_districts" class="form-control" ><option disabled="1" value="">Select City Name</option> <option value="BAGERHAT">BAGERHAT</option> <option value="BANDARBAN">BANDARBAN</option> <option value="BARGUNA">BARGUNA</option> <option value="BARISAL">BARISAL</option> <option value="BHOLA">BHOLA</option> <option value="BOGRA">BOGRA</option> <option value="BRAHMANBARIA">BRAHMANBARIA</option> <option value="CHANDPUR">CHANDPUR</option> <option value="CHITTAGONG">CHITTAGONG</option> <option value="CHUADANGA">CHUADANGA</option> <option value="COMILLA">COMILLA</option> <option value="COX'S BAZAR">COX'S BAZAR</option> <option value="DHAKA">DHAKA</option> <option value="DINAJPUR">DINAJPUR</option> <option value="FARIDPUR">FARIDPUR</option> <option value="FENI">FENI</option> <option value="GAIBANDHA">GAIBANDHA</option> <option value="GAZIPUR">GAZIPUR</option> <option value="GOPALGANJ">GOPALGANJ</option> <option value="HABIGANJ">HABIGANJ</option> <option value="JOYPURHAT">JOYPURHAT</option> <option value="JAMALPUR">JAMALPUR</option> <option value="JESSORE">JESSORE</option> <option value="JHALAKATHI">JHALAKATHI</option> <option value="JHENAIDAH">JHENAIDAH</option> <option value="KHAGRACHARI">KHAGRACHARI</option> <option value="KHULNA">KHULNA</option> <option value="KISHOREGANJ">KISHOREGANJ</option> <option value="KURIGRAM">KURIGRAM</option> <option value="KUSHTIA">KUSHTIA</option> <option value="LAKSHMIPUR">LAKSHMIPUR</option> <option value="LALMONIRHAT">LALMONIRHAT</option> <option value="MADARIPUR">MADARIPUR</option> <option value="MAGURA">MAGURA</option> <option value="MANIKGANJ">MANIKGANJ</option> <option value="MEHERPUR">MEHERPUR</option> <option value="MOULVIBAZAR">MOULVIBAZAR</option> <option value="MUNSHIGANJ">MUNSHIGANJ</option> <option value="MYMENSINGH">MYMENSINGH</option> <option value="NAOGAON">NAOGAON</option> <option value="NARAIL">NARAIL</option> <option value="NARAYANGANJ">NARAYANGANJ</option> <option value="NARSINGDI">NARSINGDI</option> <option value="NATORE">NATORE</option> <option value="NAWABGANJ">NAWABGANJ</option> <option value="NETRAKONA">NETRAKONA</option> <option value="NILPHAMARI">NILPHAMARI</option> <option value="NOAKHALI">NOAKHALI</option> <option value="PABNA">PABNA</option> <option value="PANCHAGARH">PANCHAGARH</option> <option value="RANGAMATI">RANGAMATI</option> <option value="PATUAKHALI">PATUAKHALI</option> <option value="PIROJPUR">PIROJPUR</option> <option value="RAJBARI">RAJBARI</option> <option value="RAJSHAHI">RAJSHAHI</option> <option value="RANGPUR">RANGPUR</option> <option value="SATKHIRA">SATKHIRA</option> <option value="SHARIATPUR">SHARIATPUR</option> <option value="SHERPUR">SHERPUR</option> <option value="SIRAJGANJ">SIRAJGANJ</option> <option value="SUNAMGANJ">SUNAMGANJ</option> <option value="SYLHET">SYLHET</option> <option value="TANGAIL">TANGAIL</option> <option value="THAKURGAON">THAKURGAON</option></select>
                                           
                                          </div>

                                           <div class="form-group col-md-6">
                                            <label >Area*</label>
                                             <div class="selectArea">
                                              <input type="text" name="s_area" class="form-control">
                                             
                                            </div>

                                           

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
                                             
                                           </div>

                                          <div class="form-row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Tutoring Time</label>
                                                 <select name="time" class="form-control single-select select2-hidden-accessible" data-select2-id="12" tabindex="-1" aria-hidden="true">
                                                  <option value="" data-select2-id="14">Select Tutoring Time</option> <option value="05:00:00"> 05:00 am</option> <option value="06:00:00"> 06:00 am</option> <option value="07:00:00"> 07:00 am</option> <option value="08:00:00"> 08:00 am</option> <option value="09:00:00"> 09:00 am</option> <option value="10:00:00"> 10:00 am</option> <option value="11:00:00"> 11:00 am</option> <option value="12:00:00"> 12:00 pm</option> <option value="13:00:00"> 01:00 pm</option> <option value="14:00:00"> 02:00 pm</option> <option value="15:00:00"> 03:00 pm</option> <option value="16:00:00"> 04:00 pm</option> <option value="17:00:00"> 05:00 pm</option> <option value="18:00:00"> 06:00 pm</option> <option value="19:00:00"> 07:00 pm</option> <option value="20:00:00"> 08:00 pm</option> <option value="21:00:00"> 09:00 pm</option> <option value="22:00:00"> 10:00 pm</option> <option value="23:00:00"> 11:00 pm</option></select>
                                                 
                                                </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="exampleFormControlSelect1">Salary range</label>
                                                   <select name="t_salary" class="form-control single-select select2-hidden-accessible" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="17">Please select Salary Range</option> <option value="1000">1000 Tk/month</option> <option value="1500">1500 Tk/month</option> <option value="2000">2000 Tk/month</option> <option value="2500">2500 Tk/month</option> <option value="3000">3000 Tk/month</option> <option value="3500">3500 Tk/month</option> <option value="4000">4000 Tk/month</option> <option value="4500">4500 Tk/month</option> <option value="5000">5000 Tk/month</option> <option value="6000">6000 Tk/month</option> <option value="7000">7000 Tk/month</option> <option value="8000">8000 Tk/month</option> <option value="9000">9000 Tk/month</option> <option value="10000">10000 Tk/month</option> <option value="11000">11000 Tk/month</option> <option value="12000">12000 Tk/month</option> <option value="13000">13000 Tk/month</option> <option value="14000">14000 Tk/month</option> <option value="15000">15000 Tk/month</option></select>
                                                    
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