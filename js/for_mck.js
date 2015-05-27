$(document).ready(function(){
$("#complex_name").change(function(){
    var complex_id = $("#complex_name").val();
    
    var url = $("#base_url").val()+"admin/get_complex_name";
    
           $.post(url, {complex_id:complex_id}, function(data){
                $("#cname").html(data);
                });
    
    });    
    
    
    });

/*********************Access data with combo(type for complex)*********************************/
$(document).ready(function(){
$("#zone_name").change(function(){
    var z_id = $("#zone_name").val();
    
    var url = $("#base_url").val()+"admin/get_zone_name";
    
           $.post(url, {z_id:z_id}, function(data){
                $("#zname").html(data);
                });
    
    });    
    
    
    });

/************************************for shop (type of shop)  ***************/
$(document).ready(function(){
$("#zone_name").change(function(){
    var z_id = $("#zone_name").val();
    
    var url = $("#base_url").val()+"admin/get_zone_name";
    
           $.post(url, {z_id:z_id}, function(data){
                $("#zname").html(data);
                });
    
    });    
    
    
    });
/************************************for owner (type of owner) ************/
$(document).ready(function(){
$("#shop_name").change(function(){
    var s_id = $("#shop_name").val();
    
    var url = $("#base_url").val()+"admin/get_shop_name";
    
           $.post(url, {s_id:s_id}, function(data){
                $("#sname").html(data);
                });
    
    });    
    
    
    });
/*********************Access data with combo(type for owner)*********************************/
$(document).ready(function(){
$("#owner_name").change(function(){
    var o_id = $("#owner_name").val();
    
    var url = $("#base_url").val()+"admin/get_owner_name";
    
           $.post(url, {o_id:o_id}, function(data){
                $("#oname").html(data);
                });
    
    });    
    
    
    });
/*****************************************************/
$(document).ready(function(){
    $("#shop_type").change(function(){
        var complex_id = $("#complex_name").val();
        var shop_id = $("#shop_type").val();
        var url = $("#base_url").val()+"admin/ashop_type";
        
        $.post(url, {complex_id:complex_id, shop_id:shop_id}, function(data){
                $("#shop_cal").html(data);
                });
                           
    }
                             );
    });

