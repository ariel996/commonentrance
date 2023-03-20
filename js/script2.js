/**
 * Created by Dream Coder on 21/04/2017.
 */
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale('+scale+')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});
$(".third").click(function () {
    // Prepare the four step
   var fields = new Array(
       $("#nom").val().toUpperCase(),
       $("#datenaiss").val().toUpperCase(),
       $("#lieunaiss").val().toUpperCase(),
       $("#sexe option:selected").val(),
       $("#nationalite").val(),
       $("#region option:selected").text(),
       $("#division option:selected").text(),
       $("#telephone").val(),
       $("#recu").val().toUpperCase()
   );

    var champs = new Array(
        $("#bank:checked").val(),
        $("#recu").val().toUpperCase(),
        $("#department option:selected").text(),
        $("#filiere option:selected").text(),
        $("#centre option:selected").text(),
        $("#paper1 option:selected").text(),
        $("#paper2 option:selected").text()
    );
//annee1 annee d'inscription a l'universite
    // le system educatif anglosaxon
    var champ2 = new Array(
      $("#diploma option:selected").text().toUpperCase(),
        $("#annee1").val(),
        $("#annee2").val(),
        $("#universite option:selected").text(),
        $("#langue option:selected").text(),
        $("#annee2").val()  + ' (' + $("#gpa").val() + '/4)',
        $("#annee3").val() + ' (' + $("#gpa1").val() + '/4)'
    );

    //le system educatif francophone
    var champ3 = new Array(
        $("#diploma option:selected").text().toUpperCase(),
        $("#annee1").val(),
        $("#annee2").val(),
        $("#universite option:selected").text(),
        $("#langue option:selected").text(),
        $("#annee2").val() + ' (' + $("#moyenne").val() + ')'
    );

    // Display of candidate values
    var tr = $('#fourth_step tr');
    tr.each(function() {
        $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
    });

    //departement filiere matiere
    var tt = $('#four tr');
    tt.each(function() {
        $(this).children('td:nth-child(2)').html(champs[$(this).index()]);
    });

    var selected = $("#system_edu").val();
    if(selected == 1){
        var tn = $("#five tr");
        tn.each(function () {
            $("#moi").fadeOut();
           $(this).children('td:nth-child(2)').html(champ2[$(this).index()]);
        });
    } else if(selected == 2){
        var ts = $("#five tr");
        ts.each(function () {
            $("#moi").fadeIn();
            $("#me").fadeOut();
           $(this).children('td:nth-child(2)').html(champ3[$(this).index()]);
        });
    }
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale('+scale+')',
                'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });

});

$(".submit").on('click', function (e) {
    e.preventDefault();
    // Send information to server
    var nom = $("#nom").val();
    var recu = $("#recu").val();
    var datenaiss = $("#datenaiss").val();
    var lieunaiss = $("#lieunaiss").val();
    var sexe = $("#sexe option:selected").text();
    var nationalite = $("#nationalite").val();
    var region = $("#region option:selected").text();
    var division = $("#division option:selected").text();
    var telephone = $("#telephone").val();
    var department = $("#department option:selected").text();
    var filiere = $("#filiere option:selected").text();
    var centre = $("#centre option:selected").text();

    // Informations Diploma
    var diploma = $("#diploma option:selected").text();
    var registration = $("#annee1").val();
    var universite = $("#universite option:selected").text();
    var obtention = $("#annee2").val();
    var gpa = $("#gpa").val();
    var moyenne = $("#moyenne").val();
    var langue = $("#langue option:selected").text();
    var nivo1 = $("#annee3").val();
    var annee2 = $("#annee4").val();
    var gpa1 = $("#gpa1").val();
    var gpa2 = $("#gpa2").val();

    // Major and Minor Paper
    var paper1 = $("#paper1 option:selected").text();
    var paper2 = $("#paper2 option:selected").text();

    $.ajax({
       url: 'insertion.php',
        type: 'post',
        data:
        'nom=' + nom +
        '&recu=' + recu +
        '&datenaiss=' + datenaiss +
        '&lieunaiss=' + lieunaiss +
        '&sexe=' + sexe +
        '&nationalite=' + nationalite +
        '&region=' + region +
        '&division=' + division +
        '&telephone=' + telephone +
        '&department=' + department +
        '&filiere=' + filiere +
        '&centre=' + centre +
        '&diploma=' + diploma +
        '&registration=' + registration +
        '&universite=' + universite +
        '&obtention=' + obtention +
        '&gpa=' + gpa +
        '&moyenne=' + moyenne +
        '&langue=' + langue +
        '&nivo1=' + nivo1 +
        '&gpa1=' + gpa1 +
        '&gpa2=' + gpa2 +
        '&annee2=' + annee2 +
        '&paper1=' + paper1 +
        '&paper2=' + paper2,
        beforeSend: function () {
            $(".submit").attr("value", "Sending.....");
        },
        success: function (msg) {
            if(msg == 'ok'){
                window.open('formPrint2.php','_self');
            } else {
                window.open('formPrint2.php','_self');
            }
        }
    });
});

$("#finish").click(function(){
    window.open('index.php','_self');
});
$("#print2").click(function() {
    window.open("print_form2.php","_blank");//Affichage du document pdf dans une nouvelle page
});