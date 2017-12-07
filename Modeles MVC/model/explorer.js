$(function(){

    $("ul.tree").hide();

    $("li.folder").click(function () {
       $(this).next("ul").toggle("fast").style.position = "absolute";
    });

});