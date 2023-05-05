function openNav(){
    document.getElementById("mySidebar").style.width = "280px";
    document.getElementById("main").style.marginLeft = "280px";
}      
function closeNav(){
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
$(document).ready(function(){
    $(".screen1").click(function(){
        var content=$(".content1");
        if(content.css("display")==="none"){
            $.get("screen1.php",function(response){
                $(".content2, .content3").slideUp();
                content.html(response);
                content.slideDown();
            });
        }
        else{
            content.slideUp();
        }
    });

    $(".screen2").click(function(){
        var content=$(".content2");
        if(content.css("display")==="none"){
            $.get("screen2.php",function(response){
                $(".content1, .content3").slideUp();
                content.html(response);
                content.slideDown();
            });
        }
        else{
            content.slideUp();
        }
    });

    $(".screen3").click(function(){
        var content=$(".content3");
        if(content.css("display")==="none"){
            $.get("screen3.php",function(response){
                $(".content1, .content2").slideUp();
                content.html(response);
                content.slideDown();
            });
        }
        else{
            content.slideUp();
        }
    });
});

document.getElementById("open").addEventListener("click",function(){
    document.getElementById("small").style.display="block";
});
document.getElementById("yes").addEventListener("click",function(){
    document.getElementById("small").style.display="none";
    document.forms[0].action="payment.php";
    document.forms[0].submit();
});

document.getElementById("no").addEventListener("click",function(){
    document.getElementById("small").style.display="none";
});