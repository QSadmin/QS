$(document).ready(function(){
    $(".m0").show();
    $(".m1").hide();
    $(".m2").hide();
    $(".m3").hide();
    $(".m4").hide();
    $(".m5").hide();
    $(".m6").hide();
    $(".m7").hide();
    $(".m8").hide();
    $(".j0d").hide();
    $(".canMes").hide();


    $("#opt1").click(function(){
        $(".m1").show();
        $(".m2").hide();
        $(".m3").hide();
        $(".m4").hide();
        $(".m5").hide();
        $(".m6").hide();
        $(".m7").hide();
        $(".m8").hide();
        $(".m0").hide();
    });


    $("#opt2").click(function(){
        $(".m2").show();
        $(".m1").hide();
        $(".m3").hide();
        $(".m4").hide();
        $(".m5").hide();
        $(".m6").hide();
        $(".m7").hide();
        $(".m8").hide();
        $(".m0").hide();
    });

    $("#opt3").click(function(){
        $(".m3").show();
        $(".m1").hide();
        $(".m2").hide();
        $(".m4").hide();
        $(".m5").hide();
        $(".m6").hide();
        $(".m7").hide();
        $(".m8").hide();
        $(".m0").hide();
    });

    $("#opt4").click(function(){
        $(".m4").show();
        $(".m1").hide();
        $(".m3").hide();
        $(".m2").hide();
        $(".m5").hide();
        $(".m6").hide();
        $(".m7").hide();
        $(".m8").hide();
        $(".m0").hide();
    });

      $("#opt5").click(function(){
        $(".m5").show();
        $(".m1").hide();
        $(".m3").hide();
        $(".m2").hide();
        $(".m4").hide();
        $(".m6").hide();
        $(".m7").hide();
        $(".m8").hide();
        $(".m0").hide();
        });

        $("#opt0").click(function(){
          $(".m5").hide();
          $(".m1").hide();
          $(".m3").hide();
          $(".m2").hide();
          $(".m4").hide();
          $(".m6").hide();
          $(".m7").hide();
          $(".m8").hide();
          $(".m0").show();
          });

      $("#feedback").click(function(){
        $(".m6").show();
        $(".m1").hide();
        $(".m3").hide();
        $(".m2").hide();
        $(".m4").hide();
        $(".m5").hide();
        $(".m7").hide();
        $(".m8").hide();
        $(".m0").hide();
        });

      $("#MessageCenter").click(function(){
        $(".m7").show();
        $(".m1").hide();
        $(".m3").hide();
        $(".m2").hide();
        $(".m4").hide();
        $(".m6").hide();
        $(".m8").hide();
        $(".m5").hide();
        $(".m0").hide();
        });

        $("#j0").click(function(){
          $(".j0d").toggle();
          });

        $("#can0").click(function(){
            $(".canMes").show();
            });

});
