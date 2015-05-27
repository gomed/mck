

function add()
{
    var a = parseInt($("#shop").val());
    var b = parseInt($("#hall").val());
    var c = parseInt($("#room").val());
    var d = parseInt($("#canteen").val());
    var e = parseInt($("#lauge").val());
    var f = a+b+c+d+e;
    $("#total").val(f);
}
function sub()
{
    var g = parseInt($("#total").val())- parseInt($("#alloted").val());
    
    
    $("#unalloted").val(g);
}

// validation codes 
function err()
{
    var total_shop = parseInt($("#total").val());
    var alloted_shop = parseInt($("#alloted").val());
    if(total_shop<alloted_shop)
    {
        alert("alloted shop is greater than total shop");
        $("#alloted").val('0');
              
   }
    
}
function add_rent()
{
    var a = parseInt($("#cash").val());
    var b = parseInt($("#late_fee").val());
    var c = a+b;
    $("#total").val(c);
}


