
//1. set ul width 
//2. image when click prev/next button
var ul;
var li_items;
var imageNumber;
var imageWidth;
var prev, next;
var currentPostion = 0;
var currentImage = 0;
var cur_f = 0;
var timer;
var i = 1;
var j = 1;

function init(){
    ul = document.getElementById('f_image_slider');
    li_items = ul.children;
    imageNumber = li_items.length;
    imageWidth = li_items[0].children[0].clientWidth;
    imageWidth = imageWidth;
    ul.style.width = parseInt(imageWidth * imageNumber) + 'px';
    prev = document.getElementById("prev");
    next = document.getElementById("next");
    //.onclike = slide(-1) will be fired when onload;
    /*
    prev.onclick = function(){slide(-1);};
    next.onclick = function(){slide(1);};*/
    $("#f_0").attr('class','show');
    prev.onclick = function(){ onClickPrev();};
    next.onclick = function(){ onClickNext();};
    timer = setTimeout(ClickNext,5000);
}

function animate(opts){
    var start = new Date;
    var id = setInterval(function(){
        var timePassed = new Date - start;
        var progress = timePassed / opts.duration;
        if (progress > 1){
            progress = 1;
        }
        var delta = opts.delta(progress);
        opts.step(delta);
        if (progress == 1){
            clearInterval(id);
            opts.callback();
        }
    }, opts.delay || 17);
    //return id;

}

function slideTo(imageToGo){
    var direction;
    var numOfImageToGo = Math.abs(imageToGo - currentImage);
    // slide toward left

    direction = currentImage > imageToGo ? 1 : -1;
    currentPostion = -1 * currentImage * imageWidth;
    var opts = {
        duration:300,
        delta:function(p){return p;},
        step:function(delta){
            ul.style.left = parseInt(currentPostion + direction * delta * imageWidth * numOfImageToGo) + 'px';
        },
        callback:function(){currentImage = imageToGo;}  
    };
    animate(opts);
}

function onClickPrev(){
    if (j == 1) {
        j = 0;
        $("#f_"+cur_f).attr('class','hide'); 
        if (currentImage <= 0){
            slideTo(imageNumber - 1);
            cur_f = imageNumber - 1;
        }          
        else{
            slideTo(currentImage - 1);
            cur_f = cur_f-1;
        }
        $("#f_"+cur_f).attr('class','show');  
        setTimeout(en_j, 400); 
    }
}

function onClickNext(){
    if (i == 1) {
        i = 0;
        $("#f_"+cur_f).attr('class','hide'); 
        if (currentImage >= imageNumber - 1){
            slideTo(0);
            cur_f = 0;
        }       
        else{
            slideTo(currentImage + 1);
            cur_f = cur_f+1;
        } 
        $("#f_"+cur_f).attr('class','show');
        setTimeout(en_i, 400); 
    }

}
function en_i() {
    i = 1;
}
function en_j() {
    j = 1;
}

function ClickNext(){
    onClickNext();
    timer = setTimeout(ClickNext,5000); 
}

