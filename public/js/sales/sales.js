$( document ).ready(function() {
    $('#add-product-table').click(function (){
		var rowCount = $('#produts-sales >tbody >tr').length + 1 ;
		console.log(rowCount);
    	$('#produts-sales tbody').append('<tr><td>'+rowCount+'.</td>'+
		                      	'<td>Fix and squish bugs</td>'+
		                      	'<td>'+
		                        	'<div class="progress progress-xs progress-striped active">'+
		                          		'<div class="progress-bar bg-success" style="width: 90%"></div>'+
		                        	'</div>'+
		                      	'</td>'+
		                      	'<td><span class="badge bg-success">90%</span></td></tr>');
    });
});