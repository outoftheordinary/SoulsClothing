function generateX(justGenerated){
    let generated = Math.floor((Math.random()*6)+1);
    while(generated==justGenerated){
        generated = Math.floor((Math.random()*6)+1);
    }
    return generated;
}


$(document).ready(function(){
    $(".pic").hide();
    let x=1;
    setInterval(function(){
        $(".pic").hide(1000);
        x = generateX(x);
        $(".pic"+x).show(1000);
    },5000)
});

$(function () {
    $("img").attr("aria-haspopup", true);
    $("img").attr("aria-controls", true);
 
    $("img").attr("tabIndex", 1);

    $(".collectionsPageFigure img").on("keydown", function (e) {
        let images = $(".collectionsPageFigure img");
        const me = images.index(this);
        if (e.key == "ArrowLeft") {
           images.eq(me - 1).focus();
        }
        else if (e.key == "ArrowRight") {
           images.eq(me + 1).focus();
        }
     });
}); 