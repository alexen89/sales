$( document ).ready(function() {
    $('#saveProduct').click(function (){
    	callAjaxForm('formProduct', 'productAdd');
    });

    $('#searchProduct').keypress(function (){
    	let lengthSearch = $('#searchProduct').val().length;
	    console.log(lengthSearch);
	    if(lengthSearch > 3 ){
	    	console.log('add option')
	    	let optionList = '<option value="Safari">';
	    	$('#brow').append(optionList);
	    }
    });

    $('.editProduct').click(function ($this){
    	console.log();
    	var idProduct = $(this).attr("data-product");
    	var responseProduct = callAjaxById(idProduct, 'loadProduct');
    	console.log(responseProduct);
    	$("#edit-product").modal("show");
    });
});
window.callAjaxById = function(id, url){
	$.ajax({
		headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
      	url:url,
      	data:{'id':id},
      	type:'post',
      	dataType: 'json', 
      	success: function (response) {
        	console.log(response);
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