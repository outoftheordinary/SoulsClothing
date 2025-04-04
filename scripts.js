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