$(document).ready(function() {


    $(document).on("click",".doc", function (e) {




        e.preventDefault();
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
        $.ajax({
            type : "GET",
            data: arr,
            url: "ajax.php",
            success : function(data){
                $(".ajaxx").html(data);
                console.log("pouet");
            }
        });
    });
});


