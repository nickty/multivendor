

if (localStorage.getItem('cart') == null) {
    var cart = {};
} else {
    cart = JSON.parse(localStorage.getItem('cart'));

}

 
if ($.isEmptyObject(cart)) {
    mystr = `<span class="orange-text">Your Cart is empty, please order some items</span>`

    $('#order_items').append(mystr);
} else {
	var sum = 0;
    var total_price = 0;
    for (item in cart) {
        let name = cart[item][1];
        let qty = cart[item][0];
        let price = cart[item][2]
        let item_price = cart[item][2];
        sum = sum + qty; 
        total_price = total_price + qty*item_price; 
        mystr = `<a href="#!" class="collection-item"><span class="badge">Qty: ${qty}</span>${name}</a><br>`
        newmystr = `<tr>
                            <td>${name}</td>
                            <td>${qty}</td>
                            <td>${price} Taka</td>
                            
                        </tr>`
        $('#from_script').append(newmystr);
    }
    document.getElementById('cart').innerHTML = sum;
    document.getElementById('total_price').innerHTML = total_price;
}

$('#itemsJson').val(JSON.stringify(cart));  

$(document).ready(function() {
    $('.modal').modal();
});

$('#new_order').click(function(){
    
    itemsJson = $('#itemsJson').val(); 
    fname = $('#first_name').val(); 
    lname = $('#last_name').val(); 
    email = $('#email').val(); 
    address = $('#address').val(); 
    city = $('#city').val(); 
    division = $('#division').val(); 
    phone = $('#phone').val(); 

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'orders',
        data: { fname:fname,lname:lname,address:address,city:city,division:division, phone:phone, itemsJson:itemsJson},
        success: function(data) {
            
            localStorage.clear(); 

            $('#after_order').modal('open');
            
            //location.reload();
        },
        error: function() {
            alert('error! Please try to order next time');
        }
    });

    return false;
}); 