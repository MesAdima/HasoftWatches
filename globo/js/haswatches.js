/**HASWATCHES JSL  -- Javascript loader
*/

var baseURL = 'http://localhost:81/haswatches/globo/libs/haswatches.ajax.php';

var siteURL = 'http://localhost:81/haswatches/globo';

function addToCart(productID,userID){

	$('#addButton_'+productID).html('<i class="fa-li fa fa-spinner fa-spin"></i> Adding'); 

	$.get(baseURL,{action: 'addToCart',user: userID,product : productID},function(data){

		console.log(data);

		if(data.status == 200){

			$('#addButton_'+productID).html('<i class="fa fa-check"></i> Added');
		}

		

	});
}

function checkout(button,mpesa,user){
		$(button).html('<i class="fa-li fa fa-spinner fa-spin"></i> Working');

		console.log(mpesa);

		$.get('http://localhost:81/haswatches/globo/libs/haswatches.ajax.php',{action: 'checkout',code: mpesa,user: user},function(data){

		console.log('Accessing PHP');

		console.log(data);

		if(data.status == 200){
			console.log('The code was right');

				$(button).html('<i class="fa-li fa fa-check"></i> Checkout Done!');

				window.location(siteURL);
		}else{
			console.log(data);

			console.log('The code was wrong');

			$('.checkoutResponse').html('<div class=error_response>Oops! We did not find any records with that transaction code MoFo.</div>');

			console.log('The code was wrong - AFTER');
		}

		$(button).html('Submit Code');

		

	});


}

function openCodeInput(){

	$('#codeInput').fadeIn('slow');
}


function addQty(productID,userID){

	console.log('Adding is bein accessed');

	
	$('#qty_'+productID).html('<i class="fa-li fa fa-spinner fa-spin"></i>'); 

	$.get(baseURL,{action: 'addQty',user: userID,product : productID},function(data){

		console.log(data);

		

			$('#qty_'+productID).html(data.newValue);

			$('#total_'+productID).html(data.newTotal); 

			$('#cartTotal').html(data.newCartTotal); 

		

		

	});
}

function removeCartItem(productID,userID){

	$.get(baseURL,{action: 'removeFromCart',user: userID,product : productID},function(data){

		console.log(data);

		if(data.status == 200){

			$('#item_'+productID).fadeOut('fast');

			$('#cartTotal').html(data.newCartTotal); 

		}

		

	});
}

