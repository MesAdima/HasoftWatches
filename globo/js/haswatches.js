/**HASWATCHES JSL  -- Javascript loader
*/

function addToCart(productID){

	$('#addButton_'+productID).html('<i class="fa-li fa fa-spinner fa-spin"></i> Adding'); 

	$.get('http://localhost:81/haswatches/globo/libs/haswatches.ajax.php',{product : productID},function(data){

		

		$('#addButton_'+productID).html('<i class="fa fa-check"></i> Added');

	});
}