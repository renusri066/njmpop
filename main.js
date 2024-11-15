 $(document).ready(function() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', 'adosd.mp3');
    
    audioElement.addEventListener('ended', function() {
        this.play();
    }, false);
    
   
     $('.map').click(function() {
        audioElement.play();
        
    });

      $('.blck').click(function() {
        audioElement.play();
        
    });
      

       $('#footer').click(function() {
        audioElement.play();
        
    });

        $('#boxtxts').click(function() {
        audioElement.play();
        
    });
       
     
   
    
    
});

 $("#footer").fadeIn('slow')
.css({bottom:0,position:'absolute'})
.animate({bottom:0}, 800, function() {
    //callback
});
$(document).ready(function() {
    $(".arow-div").delay(1000).fadeIn(500);
});

    $(document).ready(function(){
  $("#boxtxts").click(function(){
    $('#boxtxts').hide('fast');
  });
});
    $(document).ready(function(){
  $(".alert_popup").click(function(){
    $('.alert_popup').hide('fast');
  });
});
    


           $(document).ready(function(){
  $("#footer").click(function(){
    $('#boxtxts').hide('fast');
  });
});

   $(document).ready(function(){
  $(".blck").click(function(){
    $('.delayedPopupWindow').hide('fast');
  });
});

  


