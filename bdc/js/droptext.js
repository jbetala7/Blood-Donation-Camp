let letters = $(".drift").text().split("");
let max     = 70;
let factor  = 1.3;
let lenght  = letters.length;
let ratio   = max / (Math.pow(factor, lenght - 1));

$(".drift").html("");

$(letters).each(function(i,element){
  let rotation = Math.pow(factor,i) * ratio
  let span = $("<span>"+element+"</span>")
  $(".drift").append(span);
  (function(index){
    if(index > 0){
      setTimeout(function(){
        $(span).css({
          "transform":"rotate("+(Math.pow(factor,index)) * ratio +"deg)"
        })
      }, 1000 + (50*index))
    }
  })(i)
})