$('#toggleform').on('submit',function(event){
	event.preventDefault();
	if($('#action').val()=='send')
	{
         $.ajax({
         	url:"{{route('sendemail')}}",
         	method:"POST",
         	data:new FormData(this),
         	contentType:false,
         	cache:false,
         	processData:false,
         	dataType:"json"

         })

	}
});