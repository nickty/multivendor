$(document).ready(function() {
    $('.modal').modal();
});

$('#brand_product').click(function() {
    var product_name = $('#add_product').val();
    if (product_name == "") {
        M.toast({ html: 'Please add a product!' })
    } else {
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: 'AddNewProduct',
            data: { item_name: product_name },
            success: function(data) {
                alert("Product Inserted");
                $('#add_product').val("");
            },
            error: function() {
                alert("Product not inserted");
            }
        });
    }
});

GetItesm()

function GetItesm() {


    $.ajax({
        type: 'ajax',
        url: '../Admin/GetItems',
        success: function(data) {
            $('#show_selected_item').html(data);
        },
        error: function() {
            alert("Brand not inserted");
        }
    });
}

GetBrand()

function GetBrand() {
    $.ajax({
        type: 'ajax',
        url: '../Admin/GetAllBrand',
        success: function(data) {
            $('#brand_name_here').html(data);
        },
        error: function() {
            alert("Brand not inserted");
        }
    });
}


$('#brand_brand').click(function() {

    product_id = $('#item_select').val();
    brand_name = $('#add_brand').val();

    if (brand_name == "") {
        M.toast({ html: 'Please add a brand!' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertBrandItem',
            data: { item_id: product_id, brand_name: brand_name },
            success: function(data) {
                alert('brand inserted')
            },
            error: function() {
                alert("Brand not inserted");
            }
        });
    }

});

// Listing items

$('#display').hide();
$('#processor').hide();
$('#storage').hide();
$('#camera').hide();
$('#connect').hide();
$('#listing').hide();
$('#image').show();


$('#general_info').click(function() {
    var title = $('#title').val();
    var mobile_brand = $('#mobile_brand').val();
    var model_no = $('#model_no').val();
    var model_name = $('#model_name').val();
    var color = $('input[name=group1]:checked').val();
    var sim = $('input[name=group2]:checked').val();
    var sim_type = $('input[name=group3]:checked').val();
    var otg = $('input[name=group4]:checked').val();

    if (title == "") {
        M.toast({ html: 'Please add Title!' });
        $('#title').css({ 'border': '1px solid red' });
    } else if (model_no == "") {
        M.toast({ html: 'Please add Model!' });
        $('#model_no').css({ 'border': '1px solid red' });
    } else if (model_name == "") {
        M.toast({ html: 'Please add Model name!' });
        $('#model_name').css({ 'border': '1px solid red' });
    } else if (color == null) {
        M.toast({ html: 'Please select color!' });
    } else if (sim == null) {
        M.toast({ html: 'Please select sim!' });
    } else if (sim_type == null) {
        M.toast({ html: 'Please select sim type!' });
    } else if (otg == null) {
        M.toast({ html: 'Please select OTG!' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertGeneralInfo',
            data: { title: title, mobile_brand: mobile_brand, model_no: model_no, model_name: model_name, color: color, sim: sim, sim_type: sim_type, otg: otg },
            success: function(data) {
                window.insert_id = data;
                alert("General Information Inserted");
                $('#display').show();
                $('#title').prop('disabled', true);
                $('#mobile_brand').prop('disabled', true);
                $('#model_no').prop('disabled', true);
                $('#model_name').prop('disabled', true);



                $('body, html').animate({ scrollTop: $('#general_info_scroll').height() }, 200);

                $('#preview').css({ 'display': 'block' });

            },
            error: function() {
                alert("General information is not inserted");
            }
        });
    }
});

$('#display_info').click(function() {
    var dis_size = $('#dis_size').val();
    var dis_reg = $('#dis_reg').val();
    var res_type = $('input[name=group5]:checked').val();
    var dis_type = $('input[name=group6]:checked').val();
    var insert_id = window.insert_id;
    //alert(window.insert_id); 


    if (display == null) {
        M.toast({ html: 'Please select display size!' });
        $('#dis_size').css({ 'border': '1px solid red' });
    } else if (dis_reg == null) {
        M.toast({ html: 'Please select display resolution' });
        $('#dis_reg').css({ 'border': '1px solid red' });
    } else {

        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertDisplayInfo',
            data: { dis_size: dis_size, dis_reg: dis_reg, res_type: res_type, dis_type: dis_type, mobile_id: insert_id },
            success: function(data) {
                alert('Table updated with display information');

                $('#processor').show();
                $('#dis_size').prop('disabled', true);
                $('#dis_reg').prop('disabled', true);

                $('#mobile_id').val(insert_id);

                $('body, html').animate({ scrollBottom: $('#display').height() }, 200);
            },
            error: function() {
                alert('There was an error while inserting data');
            }

        });
    }
});


$('#processor_sub').click(function() {
    var system = $('#system').val();
    version = $('#version').val();
    var pros_type = $('input[name=group7]:checked').val();
    var insert_id = window.insert_id;

    if (system == "") {
        M.toast({ html: 'Please select operating system!' });
        $('#system').css({ 'border': '1px solid red' });
    } else if (version == "") {
        M.toast({ html: 'Please select version' });
        $('#version').css({ 'border': '1px solid red' });
    } else if (pros_type == null) {
        M.toast({ html: 'Please select operating system type!' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertProcessorInfo',
            data: { system: system, version: version, pros_type: pros_type, mobile_id: insert_id },
            success: function(data) {
                alert('Table updated with display information with processor info');

                $('#storage').show();
                $('#system').prop('disabled', true);
                $('#version').prop('disabled', true);

                $('body, html').animate({ scrollBottom: $('#processor').height() }, 200);
            },
            error: function() {
                alert('There was an error while inserting data');
            }

        });
    }
});



$('#storage_sub').click(function() {
    var internat_storage = $('#internat_storage').val();
    ram = $('#ram').val();
    card_slot = $('#card_slot').val();
    expandable = $('input[name=group8]:checked').val();
    m_card_slot = $('input[name=group9]:checked').val();
    insert_id = window.insert_id;

    if (internat_storage == "") {
        M.toast({ html: 'Please select Internal storage!' });
        $('#internat_storage').css({ 'border': '1px solid red' });
    } else if (ram == "") {
        M.toast({ html: 'Please select RAM' });
        $('#ram').css({ 'border': '1px solid red' });
    } else if (card_slot = "") {
        M.toast({ html: 'Please select Card Slot' });
        $('#card_slot').css({ 'border': '1px solid red' });
    } else if (expandable == null) {
        M.toast({ html: 'Please select expandable or not!' });
    } else if (m_card_slot = null) {
        M.toast({ html: 'Please select memory card slot' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertStorageInfo',
            data: { internat_storage: internat_storage, ram: ram, card_slot: card_slot, expandable: expandable, m_card_slot: m_card_slot, mobile_id: insert_id },
            success: function(data) {
                alert('Table updated with display information with storage info');

                $('#camera').show();
                $('#internat_storage').prop('disabled', true);
                $('#ram').prop('disabled', true);
                $('#card_slot').prop('disabled', true);

                $('body, html').animate({ scrollBottom: $('#storage').height() }, 200);
            },
            error: function() {
                alert('There was an error while inserting data');
            }

        });
    }
});

$('#camera_sub').click(function() {

    pre_camera = $('input[name=group10]:checked').val();
    sec_camera = $('input[name=group11]:checked').val();
    flash = $('input[name=group11]:checked').val();
    insert_id = window.insert_id;

    if (pre_camera == null) {
        M.toast({ html: 'Please select Primary Camera!' });
    } else if (sec_camera = null) {
        M.toast({ html: 'Please select Secondary Camera' });
    } else if (flash == null) {
        M.toast({ html: 'Please select flash' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertCameraInfo',
            data: { pre_camera: pre_camera, sec_camera: sec_camera, flash: flash, mobile_id: insert_id },
            success: function(data) {
                alert('Table updated with display information with camera info');

                $('#connect').show();

                $('body, html').animate({ scrollBottom: $('#camera').height() }, 200);
            },
            error: function() {
                alert('There was an error while inserting data');
            }

        });
    }
});

$('#connect_sub').click(function() {

    net_type = $('#net_type').val();
    micro_sub_slot = $('input[name=group13]:checked').val();
    blutooth = $('input[name=group14]:checked').val();
    wifi = $('input[name=group15]:checked').val();
    bet_type = $('#bet_type').val();
    insert_id = window.insert_id;

    if (net_type == "") {
        M.toast({ html: 'Please select Connection Type!' });
        $('#net_type').css({ 'border': '1px solid red' });
    } else if (micro_sub_slot = null) {
        M.toast({ html: 'Please select Micro Sub Slot' });
    } else if (blutooth == null) {
        M.toast({ html: 'Please select blutooth' });
    } else if (wifi = null) {
        M.toast({ html: 'Please select wifi' });
    } else if (bet_type == "") {
        M.toast({ html: 'Please select Battery Type!' });
        $('#bet_type').css({ 'border': '1px solid red' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertConnectInfo',
            data: { net_type: net_type, micro_sub_slot: micro_sub_slot, blutooth: blutooth, wifi: wifi, bet_type: bet_type, mobile_id: insert_id },
            success: function(data) {
                alert('Table updated with display information with Connection info');

                $('#listing').show();

                $('body, html').animate({ scrollBottom: $('#connect').height() }, 200);
            },
            error: function() {
                alert('There was an error while inserting data');
            }

        });
    }
});

$('#listing_sub').click(function() {

    duration = $('#duration').val();
    offer = $('#offer').val();
    return_p = $('#return_p').val();
    ship_charge = $('#ship_charge').val();
    price = $('#price').val();
    insert_id = window.insert_id;

    if (duration == "") {
        M.toast({ html: 'Please select duration!' });
        $('#duration').css({ 'border': '1px solid red' });
    } else if (offer == "") {
        M.toast({ html: 'Please select offer' });
        ('#offer').css({ 'border': '1px solid red' });
    } else if (return_p == "") {
        M.toast({ html: 'Please select return policy' });
        $('#return_p').css({ 'border': '1px solid red' });
    } else if (ship_charge == "") {
        M.toast({ html: 'Please select Shipping charge' });
        $('#ship_charge').css({ 'border': '1px solid red' });
    } else if (price == "") {
        M.toast({ html: 'Please input Price!' });
        $('#price').css({ 'border': '1px solid red' });
    } else {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: 'InsertListingInfo',
            data: { duration: duration, offer: offer, return_p: return_p, ship_charge: ship_charge, price: price, mobile_id: insert_id },
            success: function(data) {
                alert('Table updated with display information with Listing info');

                $('#image').show();
                $('#duration').prop('disabled', true);
                $('#offer').prop('disabled', true);
                $('#return_p').prop('disabled', true);
                $('#ship_charge').prop('disabled', true);
                $('#price').prop('disabled', true);
                $('body, html').animate({ scrollBottom: $('#connect').height() }, 200);
            },
            error: function() {
                alert('There was an error while inserting data');
            }

        });
    }
});

// Getting image from database
$(function() {


    function fetch_image() {
        var action = "fetch";
        insert_id = window.insert_id;
        $.ajax({
            url: 'GetImageFromData',
            method: 'POST',
            dataType: 'html',
            data: { action: action, mobile_id: insert_id },
            success: function(data) {
                //alert(data);
                $('#uploaded_image').html(data);
                $('#submit_listing').css({ 'display': 'block' });

            },
            error: function() {
                alert('No Image Found');
            }
        });
    }

    $('#btn_upload').click(function() {
        insert_id = window.insert_id;


        var form_data = new FormData();
        var files_images = $('#upload')[0].files;
        form_data.append('mobile_id', insert_id);

        for (var i = 0; i < files_images.length; i++) {

            form_data.append('files[]', files_images[i]);

        }

        $.ajax({
            data: form_data,
            type: 'POST',
            url: 'UloadMultiImage',
            crossOrigin: false,
            contentType: false,
            processData: false,

            success: function() {
                $('#btn_upload').val('');
                fetch_image();
            },
            error: function() {
                alert('Images Not uploaded');
            }
        });


    });

});

$('#title').keyup(function() {
    var mobile_title = $(this).val();
    $('#show_title').html(mobile_title);
});

$('#brand_name_here').on('change', '#mobile_brand', function() {
    var mobile_model = $(this).val();
    $('#show_model').html(mobile_model);
});

$('#model_name').keyup(function() {
    var model_name = $(this).val();
    $('#show_name').html(model_name);
});

$('#dis_size').on('change', function() {
    var mobile_size = $(this).val();
    $('#show_size').html(mobile_size);
});


$('#dis_reg').on('change', function() {
    var mobile_r = $(this).val();
    $('#show_reso').html(mobile_r);
});

$('#system').on('change', function() {
    var pro = $(this).val();
    $('#show_pro').html(pro);
});

$('#internat_storage').on('change', function() {
    var pro = $(this).val();
    $('#internal').html(pro);
});

$('#ram').on('change', function() {
    var pro = $(this).val();
    $('#ram_show').html(pro);
});

$('#card_slot').on('change', function() {
    var pro = $(this).val();
    $('#card').html(pro);
});

getSeller();

function getSeller() {
    $.ajax({
        type: 'ajax',
        url: 'GetAllSeller',
        beforeSend: function(data) {
            $('#show_seller_numer').text('Waiting');
        },
        success: function(data) {
            $('#show_seller_numer').html(data);
        },
        error: function() {
            M.toast({ html: 'Can not load data' });
        }
    });
}

$('#duration').change(function() {
    var getval = $(this).val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'CheckAuctionOrFixed',
        data: { duration: getval },
        success: function(data) {
            $('#show_fee').html(data);
            $('#fee').val(data);
        },
        error: function() {
            alert('An Error occured while working for CheckAuctionOrFixed');
        }
    });
});

$('#preview').click(function() {
    insert_id = window.insert_id;

    window.location.href = 'Preview_Mobile/' + insert_id;

});

$('#submit_listing').click(function() {
    var fee = $('#fee').val();
    insert_id = window.insert_id;

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'MobileFeeInsert',
        data: { fee: 50, mobile_id: insert_id },
        success: function(data) {
            $('#show_cong').modal('open');
        },
        error: function() {
            alert('Listing did not update');
        }
    });
});

$(document).ready(function() {
    $('.modal').modal({
        dismissible: false
    });


});

$(document).ready(function() {
    $('#acc').change(function() {
        var val = $(this).val();

        if (val == 'Headphone') {
            $('.Headphone').fadeIn();
            $('.PowerBank').fadeOut();
            $('.MemoryCard').fadeOut();
            $('.screen_guard').fadeOut();
        } else if (val == 'PowerBank') {
            $('.Headphone').fadeOut();
            $('.PowerBank').fadeIn();
            $('.MemoryCard').fadeOut();
            $('.screen_guard').fadeOut();
        } else if (val == 'Screen Guard') {
            $('.Headphone').fadeOut();
            $('.PowerBank').fadeOut();
            $('.screen_guard').fadeIn();
            $('.MemoryCard').fadeOut();
        } else if (val = 'Memory Card') {
            $('.Headphone').fadeOut();
            $('.PowerBank').fadeOut();
            $('.screen_guard').fadeOut();
            $('.MemoryCard').fadeIn();
        } else {
            alert(val);
        }
    });

});

$('#all_listing_update').click(function() {

    var title = $('#title').val();
    var sub_title = $('#sub_title').val();
    var sku = $('#sku').val();

    var category = $('.category:checked').val();
    var sub_category = $('.sub_category:checked').val();
    var condition = $('.condition:checked').val();

    var brand = $('#brand').val();
    var type = $('#type').val();
    var color = $('#color').val();
    var model = $('#model').val();

    var desc = $('#desc').val();

    var format = $('#format').val();
    var auc_day = $('#auc_day').val();
    var starting_price = $('#starting_price').val();
    var buy_price = $('#buy_price').val();

    var price = $('#price').val();
    var quantity = $('#quantity').val();


    // var payment_policy = $('#payment_policy').val();
    // var shipping_policy = $('#shipping_policy').val();
    // var return_policy = $('#return_policy').val();

    var height = $('#s1').val();
    var width = $('#s2').val();
    var length = $('#s3').val();

    if (title == '') {
        M.toast({ html: 'Please select title!' });

    } else {
        $.ajax({
            type: 'POST',
            data: {
                title: title,
                sub_title: sub_title,
                sku: sku,
                category: category,
                sub_category: sub_category,
                condition: condition,
                brand: brand,
                type: type,
                color: color,
                model: model,
                desc: desc,
                format: format,
                starting_price: starting_price,
                buy_price: buy_price,
                price: price,
                quantity: quantity,
                height: height,
                width: width,
                length: length
            },
            url: 'submit_product',
            success: function(data) {
                //alert('Product Added Successfully'); 
                window.insert_id = data;
                $('#acc_show').modal('open');
            },
            error: function() {
                alert('There was an issue');
            }
        });
    }


});

function displayAllImages() {

    var action = "fetch";
    insert_id = window.insert_id;
    // alert(insert_id); 
    // return false; 
    $.ajax({
        url: 'GetAllImageFromData',
        method: 'POST',
        dataType: 'html',
        data: { action: action, id: insert_id },
        success: function(data) {

            $('#uploaded_image').html(data);
            $('#btn_upload_images').prop('disabled', true);

        },
        error: function() {
            alert('No Image Found');
        }
    });
}

$('#all_products_upload_images').click(function() {

    insert_id = window.insert_id;

    var form_data = new FormData();
    var files_images = $('#upload')[0].files;
    form_data.append('id', insert_id);

    for (var i = 0; i < files_images.length; i++) {

        form_data.append('files[]', files_images[i]);

    }

    $.ajax({
        data: form_data,
        type: 'POST',
        url: 'AllUloadAccImage',
        crossOrigin: false,
        contentType: false,
        processData: false,

        success: function() {
            //alert(data);
            displayAllImages();

        },
        error: function() {
            alert('Images Not uploaded');
        }
    });
});


$('#save_listing').click(function() {
    var title = $('#title').val();
    var model = $('#model').val();
    var acc = $('#acc').val();
    var acc_type = $('#acc').val();
    var Headphone_type = $('#type').val();
    var feature = $('#feature').val();
    var control = $('#control').val();
    var weight = $('#weight').val();
    var warrenty = $('#warrenty').val();
    var company = $('#company').val();
    var bet_type = $('#bet_type').val();
    var amh = $('#amh').val();
    var port = $('#port').val();
    var pweight = $('#pweight').val();
    var pwarrenty = $('#pwarrenty').val();
    var cable = $('#cable').val();
    var phone_name = $('#phone_name').val();
    var ccompany = $('#ccompany').val();
    var Capacity = $('#Capacity').val();
    var speed = $('#speed').val();
    var duration = $('#duration').val();
    var offer = $('#offer').val();
    var shipping = $('#shipping').val();
    var price = $('#price').val();
    var active = 'active';

    if (title == '') {
        M.toast({ html: 'Please select title!' });
        $('#title').focus();
        $('#title').css({ 'border': '1px solid red' });
    } else if (model == '') {
        M.toast({ html: 'Please select model!' });
        $('#model').focus();
        $('#model').css({ 'border': '1px solid red' });
    } else if (acc == null) {
        M.toast({ html: 'Please select Accessories type!' });
        $('#acc').focus();
        $('#acc').css({ 'border': '1px solid red' });
    } else if (acc_type == 'Headphone') {
        if (Headphone_type == null) {
            M.toast({ html: 'Please select headphone type!' });
            $('#type').focus();
            $('#type').css({ 'border': '1px solid red' });
        } else if (feature == null) {
            M.toast({ html: 'Please select feature!' });
            $('#feature').focus();
            $('#feature').css({ 'border': '1px solid red' });
        } else if (control == null) {
            M.toast({ html: 'Please select control!' });
            $('#control').focus();
            $('#control').css({ 'border': '1px solid red' });
        } else if (weight == '') {
            M.toast({ html: 'Please insert weight!' });
            $('#weight').focus();
            $('#weight').css({ 'border': '1px solid red' });
        } else if (warrenty == null) {
            M.toast({ html: 'Please insert warrenty!' });
            $('#warrenty').focus();
            $('#warrenty').css({ 'border': '1px solid red' });
        } else {

            $.ajax({
                type: 'POST',
                data: {
                    headphone_title: title,
                    headphone_model: model,
                    headphone_type: Headphone_type,
                    headphone_feature: feature,
                    headphone_vol: control,
                    headphone_weight: weight,
                    headphone_warrenty: warrenty,
                    headphone_duration: duration,
                    headphone_offer: offer,
                    headphone_shipping: shipping,
                    product_status: active,
                    listing_fee: 0,
                    headphone_price: price
                },
                url: 'InsertHeadphones',
                success: function(data) {
                    alert('Headphone Added Successfully');
                    window.insert_id = data;
                    $('#acc_show').modal('open');
                },
                error: function() {
                    alert('headphone did not update');
                }
            });
        }

    } else if (acc_type == 'PowerBank') {
        if (company == '') {
            M.toast({ html: 'Please insert company!' });
            $('#company').focus();
            $('#company').css({ 'border': '1px solid red' });
        } else if (bet_type == null) {
            M.toast({ html: 'Please insert bettery type!' });
            $('#bet_type').focus();
            $('#bet_type').css({ 'border': '1px solid red' });
        } else if (amh == '') {
            M.toast({ html: 'Please insert bettery amh!' });
            $('#amh').focus();
            $('#amh').css({ 'border': '1px solid red' });
        } else if (port == null) {
            M.toast({ html: 'Please select port!' });
            $('#port').focus();
            $('#port').css({ 'border': '1px solid red' });
        } else if (pweight == '') {
            M.toast({ html: 'Please select weight!' });
            $('#pweight').focus();
            $('#pweight').css({ 'border': '1px solid red' });
        } else if (pwarrenty == null) {
            M.toast({ html: 'Please select warrenty!' });
            $('#pwarrenty').focus();
            $('#pwarrenty').css({ 'border': '1px solid red' });
        } else if (cable == null) {
            M.toast({ html: 'Please select cable!' });
            $('#cable').focus();
            $('#cable').css({ 'border': '1px solid red' });
        }

    } else if (acc_type == 'Screen Guard') {
        if (phone_name == '') {
            M.toast({ html: 'Please insert phone name!' });
            $('#phone_name').focus();
            $('#phone_name').css({ 'border': '1px solid red' });
        }
    } else if (acc_type == 'Memory Card') {
        if (ccompany == '') {
            M.toast({ html: 'Please insert phone name!' });
            $('#ccompany').focus();
            $('#ccompany').css({ 'border': '1px solid red' });
        } else if (Capacity == null) {
            M.toast({ html: 'Please select Capacity!' });
            $('#Capacity').focus();
            $('#Capacity').css({ 'border': '1px solid red' });
        } else if (speed == '') {
            M.toast({ html: 'Please insert speed!' });
            $('#speed').focus();
            $('#speed').css({ 'border': '1px solid red' });
        }
    } else if (duration == null) {
        M.toast({ html: 'Please select duration!' });
        $('#duration').focus();
        $('#duration').css({ 'border': '1px solid red' });
    } else if (offer = null) {
        M.toast({ html: 'Please select offer!' });
        $('#offer').focus();
        $('#offer').css({ 'border': '1px solid red' });
    } else if (shipping == '') {
        M.toast({ html: 'Please input shipping charge!' });
        $('#shipping').focus();
        $('#shipping').css({ 'border': '1px solid red' });
    } else if (price == '') {
        M.toast({ html: 'Please input price!' });
        $('#price').focus();
        $('#price').css({ 'border': '1px solid red' });
    } else {
        alert('run');
    }
});

$(document).ready(function() {
    $('.modal').modal({
        dismissible: false
    });
    //$('#acc_show').modal('open'); 

});

function fetch_acc_image() {
    var action = "fetch";
    insert_id = window.insert_id;
    $.ajax({
        url: 'GetAccImageFromData',
        method: 'POST',
        dataType: 'html',
        data: { action: action, headphone_id: insert_id },
        success: function(data) {
            //alert(data);
            $('#uploaded_image').html(data);
            $('#btn_upload_images').prop('disabled', true);

        },
        error: function() {
            alert('No Image Found');
        }
    });
}

$('#btn_upload_images').click(function() {

    insert_id = window.insert_id;

    var form_data = new FormData();
    var files_images = $('#upload')[0].files;
    form_data.append('headphone_id', insert_id);

    for (var i = 0; i < files_images.length; i++) {

        form_data.append('files[]', files_images[i]);

    }

    $.ajax({
        data: form_data,
        type: 'POST',
        url: 'UloadAccImage',
        crossOrigin: false,
        contentType: false,
        processData: false,

        success: function() {
            //alert(data);
            fetch_acc_image();

        },
        error: function() {
            alert('Images Not uploaded');
        }
    });


});



$('#all_listings').on('click', '#update_active_price', function() {
    //var inprice = $('#inprice').val(); 
    var mobile_id = $(this).attr('data');


    $.ajax({
        type: 'ajax',
        method: 'GET',
        url: 'GetProductPrice',
        data: { mobile_id: mobile_id },
        success: function(data) {
            $('#show_mobile_price').html(data);

            $('#show_mobile_price').modal('open');

        },
        error: function() {
            alert('error! Can not get price');

        }
    });

    return false;
});

$('#show_mobile_price').on('click', '#update_button', function() {
    var updated = $('#update_price').val();
    var mobile_id = $('#mobile_id').val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'UpdateProductPrice',
        data: { mobile_id: mobile_id, updated: updated },
        success: function(data) {
            $('#msg').text('Price is updated!');
            location.reload();
        },
        error: function() {
            alert('error! Can not update price');
        }
    });

    return false;
});


$('#all_listings').on('click', '#percent', function() {
    //var inprice = $('#inprice').val(); 
    var mobile_id = $(this).attr('data');


    $.ajax({
        type: 'ajax',
        method: 'GET',
        url: 'GetProductPercent',
        data: { mobile_id: mobile_id },
        success: function(data) {
            $('#show_mobile_percent').html(data);

            $('#show_mobile_percent').modal('open');

        },
        error: function() {
            alert('error! Can not get price');

        }
    });

    return false;
});

$('#show_mobile_percent').on('click', '#percent', function() {
    var updated = $('#update_percent').val();
    var mobile_id = $('#mobile_id').val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'UpdateProductPercent',
        data: { mobile_id: mobile_id, updated: updated },
        success: function(data) {
            $('#msg').text('Offer is updated!');
            location.reload();
        },
        error: function() {
            alert('error! Can not update price');
        }
    });

    return false;
});

$('#all_listings').on('click', '#quantity', function() {

    //var inprice = $('#inprice').val(); 
    var mobile_id = $(this).attr('data');


    $.ajax({
        type: 'ajax',
        method: 'GET',
        url: 'GetProductQuantity',
        data: { mobile_id: mobile_id },
        success: function(data) {
            $('#show_mobile_quantity').html(data);

            $('#show_mobile_quantity').modal('open');

        },
        error: function() {
            alert('error! Can not get price');

        }
    });

    return false;
});

$('#show_mobile_quantity').on('click', '#quantity', function() {
    var updated = $('#update_quantity').val();
    var mobile_id = $('#mobile_id').val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'UpdateProductQuantity',
        data: { mobile_id: mobile_id, updated: updated },
        success: function(data) {
            $('#msg').text('quantity is updated!');
            location.reload();
        },
        error: function() {
            alert('error! Can not update price');
        }
    });

    return false;
});

$('#all_listings').on('click', '#acc_active_price', function() {

    //var inprice = $('#inprice').val(); 
    var headphone_id = $(this).attr('data');


    $.ajax({
        type: 'ajax',
        method: 'GET',
        url: 'GetHeadphonePrice',
        data: { headphone_id: headphone_id },
        success: function(data) {
            $('#show_headphone_price').html(data);

            $('#show_headphone_price').modal('open');

        },
        error: function() {
            alert('error! Can not get price');

        }
    });

    return false;
});

$('#show_headphone_price').on('click', '#headphone_price', function() {
    var updated = $('#update_headphone_price').val();
    var headphone_id = $('#headphone_id').val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'UpdateheadphonePrice',
        data: { headphone_id: headphone_id, updated: updated },
        success: function(data) {
            $('#msg').text('Price is updated!');
            location.reload();
        },
        error: function() {
            alert('error! Can not update price');
        }
    });

    return false;
});


$('#all_listings').on('click', '#headphone_percent', function() {

    //var inprice = $('#inprice').val(); 
    var headphone_id = $(this).attr('data');


    $.ajax({
        type: 'ajax',
        method: 'GET',
        url: 'GetHeadphonePercent',
        data: { headphone_id: headphone_id },
        success: function(data) {
            $('#show_headphone_percent').html(data);

            $('#show_headphone_percent').modal('open');

        },
        error: function() {
            alert('error! Can not get price');

        }
    });

    return false;
});

$('#show_headphone_percent').on('click', '#headphone_offer', function() {
    var updated = $('#update_headphone_offer').val();
    var headphone_id = $('#headphone_id').val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'UpdateheadphoneOffer',
        data: { headphone_id: headphone_id, updated: updated },
        success: function(data) {
            $('#msg').text('Offer is updated!');
            location.reload();
        },
        error: function() {
            alert('error! Can not update price');
        }
    });

    return false;
});

$('#all_listings').on('click', '#head_quantity', function() {

    //var inprice = $('#inprice').val(); 
    var headphone_id = $(this).attr('data');


    $.ajax({
        type: 'ajax',
        method: 'GET',
        url: 'GetHeadphoneQuantity',
        data: { headphone_id: headphone_id },
        success: function(data) {
            $('#show_headphone_quantity').html(data);

            $('#show_headphone_quantity').modal('open');

        },
        error: function() {
            alert('error! Can not get price');

        }
    });

    return false;
});

$('#show_headphone_quantity').on('click', '#headphone_quantity', function() {
    var updated = $('#update_headphone_quantity').val();
    var headphone_id = $('#headphone_id').val();

    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: 'UpdateheadphoneQuanity',
        data: { headphone_id: headphone_id, updated: updated },
        success: function(data) {
            $('#msg').text('Offer is updated!');
            location.reload();
        },
        error: function() {
            alert('error! Can not update price');
        }
    });

    return false;
});

$(document).ready(function() {
    $('input#title, input#sub-title, textarea#textarea2').characterCounter();
});

// activate tooltip

// $(document).ready(function(){
//     $('.tooltipped').tooltip({
//     	delay: 2000
//     });
//   });
//
//$('#tool').on('click',function(e){ e.preventDefault(); $('#tool').tooltip({delay: 500}); });

//document.getElementById('tool').setAttribute('data-tooltip', '<h5>Cart for your item</h5>')

// document.on('click', '#tool', function(e){
// 	$('.tooltipped').tooltip(); 
// });



// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.getElementById('tool').setAttribute('data-tooltip', popStr);
//     var instances = M.Tooltip.init('.tooltippedm', 'exitDelay:6000');
//   });

// Cart Functionality 

if (localStorage.getItem('cart') == null) {
    var cart = {};
} else {
    cart = JSON.parse(localStorage.getItem('cart'));
    document.getElementById('cart').innerHTML = Object.keys(cart).length;
    updateCart(cart);
}

//$('.cart').click(function(){

$('.divpr').on('click', 'button.cart', function() {


    var idstr = this.id.toString();

    if (cart[idstr] != undefined) {
        qty = cart[idstr][0] + 1;
        // name =document.getElementById('name'+idstr).innerHTML; 
        // cart[idstr] = [qty, name];
    } else {
        qty = 1;
        name = document.getElementById('name' + idstr).innerHTML;
        price = document.getElementById('price' + idstr).innerHTML;
        cart[idstr] = [qty, name, price];
    }

    updateCart(cart);
});

$('.tooltipped').tooltip();

updatePopover(cart);

function updatePopover(cart) {
    console.log('We are inside updatePopover');
    
    var popStr = "";
    popStr = popStr + "<h6> Cart for your items in my shopping cart </h6><div class='orange-text white'>";
    var i = 1;

    for (var item in cart) {

        popStr = popStr + "<b>" + i + "</b>. ";
        popStr = popStr + document.getElementById('name' + item).innerHTML.slice(0, 19) + "... Qty: " + cart[item][0] + "<br>";
        i = i + 1;

    }
    popStr = popStr + "</div><br>";

    //popStr = popStr + "<a href='home/checkout'><button class='btn' id='checkout'>Checkout</button></a> <button class='btn' onclick='clearCart()' id ='clearCart'>Clear Cart</button>";
    popStr = popStr + "<a href='checkout' class='btn orange'>Checkout</a> <a class='btn' onclick='clearCart()' id ='clearCart'>Clear Cart</a>";

    console.log(popStr);
    document.getElementById('tool').setAttribute('data-tooltip', popStr);
    //document.getElementById('tool').setAttribute('data-html', '<a href='home/checkout'><button class='btn' id='checkout'>Checkout</button></a><button class='btn' onclick='clearCart()' id ='clearCart'>Clear Cart</button>';
    $('.tooltippedm').tooltip('open');
}


function clearCart() {
    cart = JSON.parse(localStorage.getItem('cart'));
    for (var item in cart) {
        document.getElementById('div' + item).innerHTML = '<center><button id="' + item + '" class="btn cart">Add To Cart</button></center>';
    }
    localStorage.clear();
    cart = {};
    updateCart(cart);
}

function updateCart(cart) {
    var sum = 0;
    for (var item in cart) {
        sum = sum + cart[item][0];
        document.getElementById('div' + item).innerHTML="<center><button style='width: 100%' id='minus" + item + "' class='btn minus'>-</button><span id='val" + item + "''>" + cart[item][0] + "</span> <button style='width: 100%' id='plus" + item + "' class='btn plus'> + </button></center>";
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    //document.getElementById('cart').innerHTML = Object.keys(cart).length;
    document.getElementById('cart').innerHTML = sum;
    console.log(cart);
    updatePopover(cart);
}


$('.divpr').on("click", "button.minus", function() {
    a = this.id.slice(7, );
    cart['pr' + a][0] = cart['pr' + a][0] - 1;
    cart['pr' + a][0] = Math.max(0, cart['pr' + a][0]);
    //document.getElementById('valpr' + a).innerHTML = cart['pr' + a][0];
    if (cart['pr'+a][0]==0) {
    	document.getElementById('divpr'+a).innerHTML = '<button id="pr'+a+'" style="width: 100%" class="btn cart">Add to cart</button>';
    	delete cart['pr'+a];
    } else 
    {
    	document.getElementById('valpr' + a).innerHTML = cart['pr' + a][0];
    }
    updateCart(cart);
});
$('.divpr').on("click", "button.plus", function() {
    a = this.id.slice(6, );
    cart['pr' + a][0] = cart['pr' + a][0] + 1;
    document.getElementById('valpr' + a).innerHTML = cart['pr' + a][0];
    updateCart(cart);
});

// search functionality 
$('#search_prods').keyup(function(){
	var query = $('#set_search').val(); 
// alert(query); 
// return false; 
	if(query != '')
	{
		$.ajax({
			url: "search", 
			method: "POST",
			data:{query:query}, 
			success:function(data){
				// alert(data); 
				// return false; 
				$('#prods_list').fadeIn(); 
				$('#prods_list').html(data); 
			}, 
			error:function()
			{
				alert('not found'); 
				return false;
				$('#prods_list').html('No recoreds found');
			}
		}); 
	} 
}); 
 

