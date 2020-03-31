
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{asset('js/bootstrap.min.js')}}"></script>
<script  src="{{asset('js/jquery.poshytip.min.js')}}"></script>
<script  src="{{asset('js/mobile-nav.js')}}"></script>
<script src="{{asset('js/accountkit.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/gulpfile.js')}}"></script>

<script type="text/javascript" src="https://deshtutor.com/js/app.js?v=1"></script>
<script type="text/javascript" src="https://deshtutor.com/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://deshtutor.com/js/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript" src="https://deshtutor.com/plugins/poshytip/jquery.poshytip.min.js"></script>


<script type="text/javascript" src="https://deshtutor.com/js/custom.js?v=1.4"></script>
 <script type="text/javascript">
 	$(document).ready(function(){


  $('#email_form').submit( function(event){
    
event.preventDefault();
 $.ajax({
url:"{{route('recommendguardian')}}",
type:'POST',
data:$(this).serialize(),
dataType:"json",
success:function(data){ 
  if(data.success){

document.getElementById("recommend").innerHTML="Recommendation Done";
html='<div class="alert alert-success">'+data.success+'</div>';
 $('#email_form')[0].reset();
$('#recommend_message').html(html);
  }
}
 });


  });
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
 $('#apply').click( function(event){
event.preventDefault();
 	 $.ajax({
url:"{{route('sendemailguardian')}}",
type:"POST",
data:{content:1},
dataType:"json",
success:function(data){ 
  if(data.success){

document.getElementById("apply").innerHTML="Recommendation Done";

  }
}
 	 	 });
  });

	});

</script>