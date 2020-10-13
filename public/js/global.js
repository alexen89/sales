var Toast;
$( document ).ready(function() {
	Toast = Swal.mixin({
      //toast: true,
      //position: 'top-end',
      showConfirmButton: false,
      timer: 1500
    });
});

window.callAjaxForm = function(idForm, url){
	var dataForm =  new FormData($('#'+idForm)[0]);
	$.ajax({
		headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
      	url:url,
      	data:dataForm,
      	type:'post',
      	processData: false,
		contentType: false,
      	success: function (response) {
        	//alert(response);
        	Toast.fire({
		        icon: 'success',
		        title: response.msg
		    });
		    $('#'+idForm).trigger("reset");
      	},
      	statusCode: {
         	404: function() {
            	alert('web not found');
         	}
      	},
      	error:function(x,xs,xt){
        	//nos dara el error si es que hay alguno
          	window.open(JSON.stringify(x));
          	//alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
      	}
   	});
}
