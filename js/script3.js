/**
 * Created by Dream Coder on 30/04/2017.
 */
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

    // Display of candidate values
    var tr = $('#fourth_step tr');
    tr.each(function() {
        $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
    });

    var champs = new Array(
        $("#bank:checked").val(),
        $("#recu").val().toUpperCase(),
        $("#department option:selected").text(),
        $("#filiere option:selected").text(),
        $("#centre option:selected").text(),
        $("#paper1 option:selected").text(),
        $("#paper2 option:selected").text()
    );

    //departement filiere matiere
    var tt = $('#four tr');
    tt.each(function() {
        $(this).children('td:nth-child(2)').html(champs[$(this).index()]);
    });

    var champ1 = new Array(
        $("#specialite").val().toUpperCase(),
        $("#entree").val(),
        $("#obtention").val(),
        $("#universite option:selected").text(),
        $("#langue option:selected").text(),
        $("#level1").val() + ' (' + $("#grade1").val() + ')',
        $("#level2").val() + ' (' + $("#grade2").val() + ')',
        $("#level3").val() + ' (' + $("#grade3").val() + ')'
    );

    // Champ de donnees du systeme francophone
    var champ2 = new Array(
        $("#specialite").val().toUpperCase(),
        $("#entree").val(),
        $("#obtention").val(),
        $("#universite option:selected").text(),
        $("#langue option:selected").text(),
        $("#nivo1").val() + ' (' + $("#moyenne1").val() + ')',
        $("#nivo2").val() + ' (' + $("#moyenne2").val() + ')',
        $("#nivo3").val() + ' (' + $("#moyenne3").val() + ')'
    );
    var selected = $("#system").val();
    if(selected == 1){
       // Affichage des donnees anglosaxon
        $("#b1, #b2, #b3").hide();
        $("#m1, #m2, #m3").show();
        var bb = $('#five tr');
        bb.each(function () {
            $(this).children('td:nth-child(2)').html(champ1[$(this).index()]);
        });
    } else if(selected == 2){
        // Affichage des donnees francophone
        $("#m1, #m2, #m3").hide();
        $("#b1, #b2, #b3").show();
        var ba = $('#five tr');
        ba.each(function () {
            $(this).children('td:nth-child(2)').html(champ2[$(this).index()]);
        });
    } else {
        $("#m1, #m2, #m3").hide();
        $("#b1, #b2, #b3").hide();
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
    var nationalite = $("#nationalite option:selected").text();
    var region = $("#region option:selected").text();
    var division = $("#division option:selected").text();
    var telephone = $("#telephone").val();
    var department = $("#department option:selected").text();
    var filiere = $("#filiere option:selected").text();
    var centre = $("#centre option:selected").text();

    var specialite = $("#specialite").val();
    var entree = $("#entree").val();
    var obtention = $("#obtention").val();
    var universite = $("#universite option:selected").text();
    var gpa = $("#gp").val();
    var moyenne = $("#moyenne").val();
    var langue = $("#langue option:selected").text();
    var level1 = $("#level1").val();
    var grade1 = $("#grade1").val();
    var level2= $("#level2").val();
    var grade2 = $("#grade2").val();
    var level3 = $("#level3").val();
    var grade3 = $("#grade3").val();
    var nivo1 = $("#nivo1").val();
    var moyenne1 = $("#moyenne1").val();
    var moyenne2 = $("#moyenne2").val();
    var nivo2 = $("#nivo2").val();
    var nivo3 = $("#nivo3").val();
    var moyenne3 = $("#moyenne3").val();

    // Major and Minor Paper
    var paper1 = $("#paper1 option:selected").text();
    var paper2 = $("#paper2 option:selected").text();

    // AJAX Request to the server
    $.ajax({
       url: 'insertion2.php',
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
        '&specialite=' + specialite +
        '&entree=' + entree +
        '&obtention=' + obtention +
        '&universite=' + universite +
        '&gpa=' + gpa +
        '&moyenne=' +  moyenne +
        '&langue=' + langue +
        '&level1=' + level1 +
        '&grade1=' + grade1 +
        '&level2=' + level2 +
        '&grade2=' + grade2 +
        '&level3=' + level3 +
        '&grade3=' + grade3 +
        '&nivo1=' + nivo1 +
        '&moyenne1=' + moyenne1 +
        '&nivo2=' + nivo2 +
        '&moyenne2=' + moyenne2 +
        '&nivo3=' + nivo3 +
        '&moyenne3=' + moyenne3 +
        '&paper1=' + paper1 +
        '&paper2=' + paper2,
        beforeSend: function () {
            $(".submit").attr("value", "Sending.....");
        },
        success: function (msg) {
            if(msg == 'ok') {
                    window.open('formPrint3.php','_blank');
            } else {
                window.open('formPrint3.php','_blank');
            }
        }
    });
});

$("#finish").click(function(){
    window.open('index.php','_self');
});
$("#print3").click(function() {
    window.open("print_form3.php","_blank");//Affichage du document pdf dans une nouvelle page
});
