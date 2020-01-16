@extends('layout.master')

@section('content')
<div class="container">

 @if($message=Session::get('success'))
 <div class="alert alert-success">
  <p>{{$message}}</p>
</div>
    @endif
<div class="row">
    <div class="col-md-2 mb-10">
   
            
        </div>
<div class="col-md-8 mb-10">
    <div class="card">
    <div class="card-header"style="background-color: #2c312e; color: white; ">
       <h5 class="text-center" style="font-size: 23px;" >Edit Tuition</h5>
                </div>
                     <div class="card-body parent-request-form"  style="background-color:#8fa298;">
                   <form method="post" action="{{route('guardian.updatetuition',$tuition->id)}}" data-select2-id="19">
                                  {{ csrf_field() }}
                              

                                 <div class="form-group">
                                  <label for="exampleFormControlInput1"><strong>Title</strong></label>
                                   <input type="text" name="title"  value="{{$tuition->title}}"  class="form-control poshytip">
                                 </div>

                                 <div class="form-group">
                                  <label for="exampleFormControlInput1"><strong>Student Name</strong></label>
                                   <input type="text" name="s_fullName"  value="{{$tuition->s_fullName}}"  class="form-control poshytip">
                                 </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="exampleFormControlInput1"><strong>Select Student Gender</strong></label>
                                       <select name="s_gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male"<?php if ($tuition->s_gender=='Male') {?>
                                        selected
                                       <?php } ?> >Male</option>
                                        <option value="Female" <?php if ($tuition->s_gender=='Female') {?>
                                        selected
                                       <?php } ?>>Female</option>
                                       </select>
                                     </div>

                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4"><strong>Student Institute</strong></label> <input type="text" name="s_college"  value="{{$tuition->s_college}}" class="form-control poshytip">
                                      </div>
                                    </div>

                                     <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4"><strong> Medium</strong></label>
                                         <select name="s_medium" class="form-control medium">
                                          <option disabled="disabled" >Select Medium</option>
                                          <option value="Bangla Medium" <?php if ($tuition->s_medium=='Bangla Medium') {?>
                                        selected
                                       <?php } ?>>Bangla Medium</option>
                                          <option value="English Medium" <?php if ($tuition->s_medium=='English Medium') {?>
                                        selected
                                       <?php } ?>>English Medium</option>
                                          <option value="English Version" <?php if ($tuition->s_medium=='English Version') {?>
                                        selected
                                       <?php } ?>>English Version</option>
                                          <option value="Arabic Medium" <?php if ($tuition->s_medium=='Arabic Medium') {?>
                                        selected
                                       <?php } ?> >Arabic Medium</option>
                                         </select>
                                       </div>

                                        <div class="form-group col-md-6">
                                          <label ><strong>Student Class</strong></label>
                                           <select name="s_class" class="form-control" >
                                            <option disabled="1">Please select Student Class</option>
                                            <option value="Class I" <?php if ($tuition->s_class=='Class I') {?>
                                        selected
                                       <?php } ?> >Class I</option>
                                            <option value="Class II" <?php if ($tuition->s_class=='"Class II') {?>
                                        selected
                                       <?php } ?> >Class II</option> <option value="Class III" <?php if ($tuition->s_class=='Class III') {?>
                                        selected
                                       <?php } ?> >Class III</option> <option value="Class IV" <?php if ($tuition->s_class=='Class IV') {?>
                                        selected
                                       <?php } ?> >Class IV</option> <option value="Class V" <?php if ($tuition->s_class=='Class V') {?>
                                        selected
                                       <?php } ?>  >Class V</option> <option value="Class VI" <?php if ($tuition->s_class=='Class VI') {?>
                                        selected
                                       <?php } ?> >Class VI</option> <option value="Class VII"<?php if ($tuition->s_class=='Class VII') {?>
                                        selected
                                       <?php } ?>  >Class VII</option> <option value="Class VIII" <?php if ($tuition->s_class=='Class VIII') {?>
                                        selected
                                       <?php } ?> >Class VIII</option> <option value="Class IX"<?php if ($tuition->s_class=='Class IX') {?>
                                        selected
                                       <?php } ?>  >Class IX</option> <option value="S.S.C" <?php if ($tuition->s_class=='S.S.CI') {?>
                                        selected
                                       <?php } ?> >S.S.C</option> <option value="HSC 1st year" <?php if ($tuition->s_class=='HSC 1st year') {?>
                                        selected
                                       <?php } ?> >HSC 1st year</option> <option value="HSC 2nd year" <?php if ($tuition->s_class=='HSC 2nd year') {?>
                                        selected
                                       <?php } ?> >HSC 2nd year</option> <option value="Honours 1st year"<?php if ($tuition->s_class=='Honours 1st year') {?>
                                        selected
                                       <?php } ?>  >Honours 1st year</option> <option value="Honours 2nd year"<?php if ($tuition->s_class=='Honours 2nd year') {?>
                                        selected
                                       <?php } ?>  >Honours 2nd year</option> <option value="Honours 3rd year"<?php if ($tuition->s_class=='Honours 3rd year') {?>
                                        selected
                                       <?php } ?> >Honours 3rd year</option> <option value="Honours 4th year"<?php if ($tuition->s_class=='Honours 4th year') {?>
                                        selected
                                       <?php } ?> >Honours 4th year</option> <option value="Masters"<?php if ($tuition->s_class=='Masters') {?>
                                        selected
                                       <?php } ?> >Masters</option> <option value="Nursery" <?php if ($tuition->s_class=='Nursery') {?>
                                        selected
                                       <?php } ?> >Nursery</option> <option value="Dakhil"<?php if ($tuition->s_class=='Dakhil') {?>
                                        selected
                                       <?php } ?>  >Dakhil</option> <option value="Alim" <?php if ($tuition->s_class=='Alim') {?>
                                        selected
                                       <?php } ?> >Alim</option> <option value="Fazil" <?php if ($tuition->s_class=='Fazil') {?>
                                        selected
                                       <?php } ?> >Fazil</option> <option value="Kamil" <?php if ($tuition->s_class=='Kamil') {?>
                                        selected
                                       <?php } ?> >Kamil</option> <option value="O Lavel"<?php if ($tuition->s_class=='O Lavel') {?>
                                        selected
                                       <?php } ?> >O Lavel</option> <option value="A Lavel"<?php if ($tuition->s_class=='A Lavel') {?>
                                        selected
                                       <?php } ?>  >A Lavel</option> <option value="KG" <?php if ($tuition->s_class=='KG') {?>
                                        selected
                                       <?php } ?> >KG</option></select>
                                            
                                          </div>
                                        </div>

                                         <div class="form-row">

                                          <div class="form-group col-md-6">
                                            <label ><strong>Phone Number*</strong></label>
                                             <input type="text" name="g_phoneNumber" value="{{$tuition->g_phoneNumber}}"  class="form-control ">
                                           </div>

                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4"><strong>E-Mail</strong> </label>
                                             <input type="email" name="g_email" value="{{$tuition->g_email}}" class="form-control">
                                           </div>
                                         </div>

                                        <div class="form-row">

                                          <div class="form-group col-md-6">
                                            <label><strong>City Name*</strong></label>
                                            <select name="s_districts" class="form-control" ><option disabled="1" value="">Select City Name</option> <option value="BAGERHAT" <?php if ($tuition->s_districts=='BAGERHAT') {?>
                                        selected
                                       <?php } ?>>BAGERHAT</option> <option value="BANDARBAN" <?php if ($tuition->s_districts=='BANDARBAN') {?>
                                        selected
                                       <?php } ?>>BANDARBAN</option> <option value="BARGUNA" <?php if ($tuition->s_districts=='BARGUNA') {?>
                                        selected
                                       <?php } ?>>BARGUNA</option> <option value="BARISAL" <?php if ($tuition->s_districts=='BARISAL') {?>
                                        selected
                                       <?php } ?>>BARISAL</option> <option value="BHOLA" <?php if ($tuition->s_districts=='BHOLA') {?>
                                        selected
                                       <?php } ?>>BHOLA</option> <option value="BOGRA" <?php if ($tuition->s_districts=='BOGRA') {?>
                                        selected
                                       <?php } ?>>BOGRA</option> <option value="BRAHMANBARIA" <?php if ($tuition->s_districts=='BRAHMANBARIA') {?>
                                        selected
                                       <?php } ?>>BRAHMANBARIA</option> <option value="CHANDPUR" <?php if ($tuition->s_districts=='CHANDPUR') {?>
                                        selected
                                       <?php } ?>>CHANDPUR</option> <option value="CHITTAGONG" <?php if ($tuition->s_districts=='CHITTAGONG') {?>
                                        selected
                                       <?php } ?>>CHITTAGONG</option> <option value="CHUADANGA" <?php if ($tuition->s_districts=='CHUADANGA') {?>
                                        selected
                                       <?php } ?>>CHUADANGA</option> <option value="COMILLA" <?php if ($tuition->s_districts=='COMILLA') {?>
                                        selected
                                       <?php } ?>>COMILLA</option> <option value="COX'S BAZAR" <?php if ($tuition->s_districts=="COX'S BAZAR") {?>
                                        selected
                                       <?php } ?>>COX'S BAZAR</option> <option value="DHAKA" <?php if ($tuition->s_districts=='DHAKA') {?>
                                        selected
                                       <?php } ?>>DHAKA</option> <option value="DINAJPUR" <?php if ($tuition->s_districts=='DINAJPUR') {?>
                                        selected
                                       <?php } ?>>DINAJPUR</option> <option value="FARIDPUR" <?php if ($tuition->s_districts=='FARIDPUR') {?>
                                        selected
                                       <?php } ?>>FARIDPUR</option> <option value="FENI" <?php if ($tuition->s_districts=='FENI') {?>
                                        selected
                                       <?php } ?>>FENI</option> <option value="GAIBANDHA" <?php if ($tuition->s_districts=='GAIBANDHA') {?>
                                        selected
                                       <?php } ?>>GAIBANDHA</option> <option value="GAZIPUR" <?php if ($tuition->s_districts=='GAZIPUR') {?>
                                        selected
                                       <?php } ?>>GAZIPUR</option> <option value="GOPALGANJ" <?php if ($tuition->s_districts=='GOPALGANJ') {?>
                                        selected
                                       <?php } ?>>GOPALGANJ</option> <option value="HABIGANJ" <?php if ($tuition->s_districts=='HABIGANJ') {?>
                                        selected
                                       <?php } ?>>HABIGANJ</option> <option value="JOYPURHAT" <?php if ($tuition->s_districts=='JOYPURHAT') {?>
                                        selected
                                       <?php } ?>>JOYPURHAT</option> <option value="JAMALPUR" <?php if ($tuition->s_districts=='JAMALPUR') {?>
                                        selected
                                       <?php } ?>>JAMALPUR</option> <option value="JESSORE" <?php if ($tuition->s_districts=='JESSORE') {?>
                                        selected
                                       <?php } ?>>JESSORE</option> <option value="JHALAKATHI" <?php if ($tuition->s_districts=='JHALAKATHI') {?>
                                        selected
                                       <?php } ?>>JHALAKATHI</option> <option value="JHENAIDAH" <?php if ($tuition->s_districts=='JHENAIDAH') {?>
                                        selected
                                       <?php } ?>>JHENAIDAH</option> <option value="KHAGRACHARI" <?php if ($tuition->s_districts=='KHAGRACHARI') {?>
                                        selected
                                       <?php } ?>>KHAGRACHARI</option> <option value="KHULNA" <?php if ($tuition->s_districts=='KHULNA') {?>
                                        selected
                                       <?php } ?>>KHULNA</option> <option value="KISHOREGANJ" <?php if ($tuition->s_districts=='KISHOREGANJ') {?>
                                        selected
                                       <?php } ?>>KISHOREGANJ</option> <option value="KURIGRAM" <?php if ($tuition->s_districts=='KURIGRAM') {?>
                                        selected
                                       <?php } ?>>KURIGRAM</option> <option value="KUSHTIA" <?php if ($tuition->s_districts=='KUSHTIA') {?>
                                        selected
                                       <?php } ?>>KUSHTIA</option> <option value="LAKSHMIPUR" <?php if ($tuition->s_districts=='LAKSHMIPUR') {?>
                                        selected
                                       <?php } ?>>LAKSHMIPUR</option> <option value="LALMONIRHAT" <?php if ($tuition->s_districts=='LALMONIRHAT') {?>
                                        selected
                                       <?php } ?>>LALMONIRHAT</option> <option value="MADARIPUR"<?php if ($tuition->s_districts=='MADARIPUR') {?>
                                        selected
                                       <?php } ?>>MADARIPUR</option> <option value="MAGURA" <?php if ($tuition->s_districts=='MAGURA') {?>
                                        selected
                                       <?php } ?>>MAGURA</option> <option value="MANIKGANJ" <?php if ($tuition->s_districts=='MANIKGANJ') {?>
                                        selected
                                       <?php } ?>>MANIKGANJ</option> <option value="MEHERPUR"<?php if ($tuition->s_districts=='MEHERPUR') {?>
                                        selected
                                       <?php } ?>>MEHERPUR</option> <option value="MOULVIBAZAR"<?php if ($tuition->s_districts=='MOULVIBAZAR') {?>
                                        selected
                                       <?php } ?>>MOULVIBAZAR</option> <option value="MUNSHIGANJ"<?php if ($tuition->s_districts=='MUNSHIGANJ') {?>
                                        selected
                                       <?php } ?>>MUNSHIGANJ</option> <option value="MYMENSINGH"<?php if ($tuition->s_districts=='MYMENSINGH') {?>
                                        selected
                                       <?php } ?>>MYMENSINGH</option> <option value="NAOGAON"<?php if ($tuition->s_districts=='NAOGAON') {?>
                                        selected
                                       <?php } ?>>NAOGAON</option> <option value="NARAIL"<?php if ($tuition->s_districts=='NARAIL') {?>
                                        selected
                                       <?php } ?>>NARAIL</option> <option value="NARAYANGANJ"<?php if ($tuition->s_districts=='NARAYANGANJ') {?>
                                        selected
                                       <?php } ?>>NARAYANGANJ</option> <option value="NARSINGDI"<?php if ($tuition->s_districts=='NARSINGDI') {?>
                                        selected
                                       <?php } ?>>NARSINGDI</option> <option value="NATORE"<?php if ($tuition->s_districts=='NATORE') {?>
                                        selected
                                       <?php } ?>>NATORE</option> <option value="NAWABGANJ"<?php if ($tuition->s_districts=='NAWABGANJ') {?>
                                        selected
                                       <?php } ?>>NAWABGANJ</option> <option value="NETRAKONA"<?php if ($tuition->s_districts=='NETRAKONA') {?>
                                        selected
                                       <?php } ?>>NETRAKONA</option> <option value="NILPHAMARI"<?php if ($tuition->s_districts=='NILPHAMARI') {?>
                                        selected
                                       <?php } ?>>NILPHAMARI</option> <option value="NOAKHALI"<?php if ($tuition->s_districts=='NOAKHALI') {?>
                                        selected
                                       <?php } ?>>NOAKHALI</option> <option value="PABNA"<?php if ($tuition->s_districts=='PABNA') {?>
                                        selected
                                       <?php } ?>>PABNA</option> <option value="PANCHAGARH"<?php if ($tuition->s_districts=='PANCHAGARH') {?>
                                        selected
                                       <?php } ?>>PANCHAGARH</option> <option value="RANGAMATI"<?php if ($tuition->s_districts=='RANGAMATI') {?>
                                        selected
                                       <?php } ?>>RANGAMATI</option> <option value="PATUAKHALI"<?php if ($tuition->s_districts=='PATUAKHALI') {?>
                                        selected
                                       <?php } ?>>PATUAKHALI</option> <option value="PIROJPUR"<?php if ($tuition->s_districts=='PIROJPUR') {?>
                                        selected
                                       <?php } ?>>PIROJPUR</option> <option value="RAJBARI"<?php if ($tuition->s_districts=='RAJBARI') {?>
                                        selected
                                       <?php } ?>>RAJBARI</option> <option value="RAJSHAHI"<?php if ($tuition->s_districts=='RAJSHAHI') {?>
                                        selected
                                       <?php } ?>>RAJSHAHI</option> <option value="RANGPUR"<?php if ($tuition->s_districts=='RANGPUR') {?>
                                        selected
                                       <?php } ?>>RANGPUR</option> <option value="SATKHIRA"<?php if ($tuition->s_districts=='BANDARBAN') {?>
                                        selected
                                       <?php } ?>>SATKHIRA</option> <option value="SHARIATPUR"<?php if ($tuition->s_districts=='SHARIATPUR') {?>
                                        selected
                                       <?php } ?>>SHARIATPUR</option> <option value="SHERPUR"<?php if ($tuition->s_districts=='SHERPUR') {?>
                                        selected
                                       <?php } ?>>SHERPUR</option> <option value="SIRAJGANJ"<?php if ($tuition->s_districts=='SIRAJGANJ') {?>
                                        selected
                                       <?php } ?>>SIRAJGANJ</option> <option value="SUNAMGANJ"<?php if ($tuition->s_districts=='SUNAMGANJ') {?>
                                        selected
                                       <?php } ?>>SUNAMGANJ</option> <option value="SYLHET"<?php if ($tuition->s_districts=='SYLHET') {?>
                                        selected
                                       <?php } ?>>SYLHET</option> <option value="TANGAIL"<?php if ($tuition->s_districts=='TANGAIL') {?>
                                        selected
                                       <?php } ?>>TANGAIL</option> <option value="THAKURGAON"<?php if ($tuition->s_districts=='THAKURGAON') {?>
                                        selected
                                       <?php } ?>>THAKURGAON</option></select>
                                           
                                          </div>

                                           <div class="form-group col-md-6">
                                            <label ><strong>Area*</strong></label>
                                             <div class="selectArea">
                                              <input type="text" name="s_area" class="form-control" value="{{$tuition->s_area}}">
                                             
                                            </div>

                                           

                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label><strong>Location Details*</strong></label>
                                           <textarea name="s_address" rows="2" class="form-control">{{$tuition->s_address}}</textarea>
                                         </div>
                                        <div class="form-row">

                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Teacher Gender</label>
                                             <select name="t_gender" class="form-control">
                                              <option value="">Select Gender</option><option value="Any Gender" <?php if ($tuition->t_gender=='Any Gender') {?>
                                        selected
                                       <?php } ?>>Any Gender</option>
                                              <option value="Male"<?php if ($tuition->t_gender=='Male') {?>
                                        selected
                                       <?php } ?>>Male</option> <option value="Female"<?php if ($tuition->t_gender=='Female') {?>
                                        selected
                                       <?php } ?>>Female</option>
                                            </select>
                                          </div>

                                          <div class="form-group col-md-6">
                                            <label ><strong>Days Per Week</strong></label>
                                             <select name="t_days" class="form-control days">
                                              <option value="">Please select your Day</option> <option value="1 Day/Week"<?php if ($tuition->t_days=='1 Day/Week') {?>
                                        selected
                                       <?php } ?>>1 Day/Week</option> <option value="2 Days/Week"<?php if ($tuition->t_days=='2 Days/Week') {?>
                                        selected
                                       <?php } ?>>2 Days/Week</option> <option value="3 Days/Week"<?php if ($tuition->t_days=='3 Days/Week') {?>
                                        selected
                                       <?php } ?>>3 Days/Week</option> <option value="4 Days/Week"<?php if ($tuition->t_days=='4 Days/Week') {?>
                                        selected
                                       <?php } ?>>4 Days/Week</option> <option value="5 Days/Week"<?php if ($tuition->t_days=='5 Days/Week') {?>
                                        selected
                                       <?php } ?>>5 Days/Week</option> <option value="6 Days/Week"<?php if ($tuition->t_days=='6 Days/Week') {?>
                                        selected
                                       <?php } ?>>6 Days/Week</option> <option value="7 Days/Week"<?php if ($tuition->t_days=='7 Days/Week') {?>
                                        selected
                                       <?php } ?>>7 Days/Week</option></select>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlInput1"><strong>Subject</strong></label>
                                             <select multiple="" name="t_subject[]" class="form-control single-select select2-hidden-accessible" data-select2-id="10" tabindex="-1" aria-hidden="true"><option value="">Select Subject</option> <option value="Accounting" class="text-uppercase">Accounting</option> <option value="Agriculture" class="text-uppercase">Agriculture</option> <option value="All Subject" class="text-uppercase">All Subject</option> <option value="Arabic" class="text-uppercase">Arabic</option> <option value="Arts and Crafts" class="text-uppercase">Arts and Crafts</option> <option value="Bangla" class="text-uppercase">Bangla</option> <option value="BANGLADESH &amp; GLOBAL STUDIES" class="text-uppercase">BANGLADESH &amp; GLOBAL STUDIES</option> <option value="Biology" class="text-uppercase">Biology</option> <option value="Buddhist Religious Studies" class="text-uppercase">Buddhist Religious Studies</option> <option value="Business Entrepreneurship" class="text-uppercase">Business Entrepreneurship</option> <option value="Career Education" class="text-uppercase">Career Education</option> <option value="Chemistry" class="text-uppercase">Chemistry</option> <option value="Christian Religious Studies" class="text-uppercase">Christian Religious Studies</option> <option value="Civics and Citizenship" class="text-uppercase">Civics and Citizenship</option> <option value="Composition stock" class="text-uppercase">Composition stock</option> <option value="Domestic Science" class="text-uppercase">Domestic Science</option> <option value="Easy Handwriting" class="text-uppercase">Easy Handwriting</option> <option value="Economics" class="text-uppercase">Economics</option> <option value="English" class="text-uppercase">English</option> <option value="Finance &amp; Banking" class="text-uppercase">Finance &amp; Banking</option> <option value="General Math" class="text-uppercase">General Math</option> <option value="General Science" class="text-uppercase">General Science</option> <option value="Geography and Environment" class="text-uppercase">Geography and Environment</option> <option value="Geometry" class="text-uppercase">Geometry</option> <option value="Higher Math" class="text-uppercase">Higher Math</option> <option value="Hindu Religious Studies" class="text-uppercase">Hindu Religious Studies</option> <option value="History and Civilization" class="text-uppercase">History and Civilization</option> <option value="History of Bangladesh &amp; World Civilization" class="text-uppercase">History of Bangladesh &amp; World Civilization</option> <option value="Home Economics" class="text-uppercase">Home Economics</option> <option value="ICT" class="text-uppercase">ICT</option> <option value="ICT" class="text-uppercase">ICT</option> <option value="Islamic Studies" class="text-uppercase">Islamic Studies</option> <option value="Law" class="text-uppercase">Law</option> <option value="Math" class="text-uppercase">Math</option> <option value="Physical Studies &amp; Health" class="text-uppercase">Physical Studies &amp; Health</option> <option value="Physics" class="text-uppercase">Physics</option> <option value="Primary Science" class="text-uppercase">Primary Science</option> <option value="Psychology" class="text-uppercase">Psychology</option> <option value="Social Science" class="text-uppercase">Social Science</option> <option value="Statistics" class="text-uppercase">Statistics</option> <option value="Work and Life Oriented Studies" class="text-uppercase">Work and Life Oriented Studies</option></select>
                                             
                                           </div>

                                          <div class="form-row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label ><strong>Tutoring Time</strong></label>
                                                 <select name="time" class="form-control single-select select2-hidden-accessible" data-select2-id="12" tabindex="-1" aria-hidden="true">
                                                  <option value="" data-select2-id="14">Select Tutoring Time</option> <option value="05:00:00"> 05:00 am</option> <option value="06:00:00"> 06:00 am</option> <option value="07:00:00"> 07:00 am</option> <option value="08:00:00"> 08:00 am</option> <option value="09:00:00"> 09:00 am</option> <option value="10:00:00"> 10:00 am</option> <option value="11:00:00"> 11:00 am</option> <option value="12:00:00"> 12:00 pm</option> <option value="13:00:00"> 01:00 pm</option> <option value="14:00:00"> 02:00 pm</option> <option value="15:00:00"> 03:00 pm</option> <option value="16:00:00"> 04:00 pm</option> <option value="17:00:00"> 05:00 pm</option> <option value="18:00:00"> 06:00 pm</option> <option value="19:00:00"> 07:00 pm</option> <option value="20:00:00"> 08:00 pm</option> <option value="21:00:00"> 09:00 pm</option> <option value="22:00:00"> 10:00 pm</option> <option value="23:00:00"> 11:00 pm</option></select>
                                                 
                                                </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label ><strong>Salary range</strong></label>
                                                   <select name="t_salary" class="form-control single-select select2-hidden-accessible" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="17">Select Salary Range</option> <option value="1000">1000 Tk/month</option> <option value="1500">1500 Tk/month</option> <option value="2000">2000 Tk/month</option> <option value="2500">2500 Tk/month</option> <option value="3000">3000 Tk/month</option> <option value="3500">3500 Tk/month</option> <option value="4000">4000 Tk/month</option> <option value="4500">4500 Tk/month</option> <option value="5000">5000 Tk/month</option> <option value="6000">6000 Tk/month</option> <option value="7000">7000 Tk/month</option> <option value="8000">8000 Tk/month</option> <option value="9000">9000 Tk/month</option> <option value="10000">10000 Tk/month</option> <option value="11000">11000 Tk/month</option> <option value="12000">12000 Tk/month</option> <option value="13000">13000 Tk/month</option> <option value="14000">14000 Tk/month</option> <option value="15000">15000 Tk/month</option></select>
                                                    
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                          <label><strong>Additional Information(If multiple students mention here)</strong></label>
                                           <textarea name="additional_info" rows="2" class="form-control">{{$tuition->additional_info}}</textarea>
                                         </div>


                                           <div class="text-center mt-3" ><button type="submit" class="btn btn-lg "style="background-color: #2c312e; color: white;">Submit Request <i class="fa fa-send"></i></button></div>
                                            </form>
                                             </div>
                                         </div>
                                     </div>
                                      <div class="col-md-2 mb-10">
   
            
        </div>
    </div>
</div>

@endsection