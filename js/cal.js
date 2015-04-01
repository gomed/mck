

function add()
{
    var a = parseInt($("#hall").val());
    var b = parseInt($("#room").val());
    var c = parseInt($("#canteen").val());
    var d = parseInt($("#lauge").val());
    var e = a+b+c+d;
    $("#total").val(e);
}
function sub()
{
    var f = parseInt($("#total").val())- parseInt($("#alloted").val());
    
    
    $("#unalloted").val(f);
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