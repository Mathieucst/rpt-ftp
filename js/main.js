$(document).ready(function() {
    console.log("pouet");
    $(".doc").on("click", function(e){
        e.preventDefault();
        var $a = $(this);
        var adresse = $a.attr("href");
        var arr = adresse.split('?')[1];
        $.ajax({
            type : "GET",
            data: arr,
            url: "ajax.php",
            success : function(data){
                $("#ajaxx").html(data);
            }
        });
    });
});