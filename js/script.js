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

$(".third").click(function() {
    //prepare the fourth step
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
    var proba = new Array(
      $("#annee1").val(),
      $("#mention1 option:selected").val()
    );
    //tableau contenant les valeurs saisie en baccalaureat
    var bacc = new Array(
      $("#serie option:selected").text(),
        $("#annee2").val(),
        $("#mention2 option:selected").val()
    );
    //tableau contenant les valeurs saisient au gce o level
    var tabb = new Array(
      $("#annee3").val(),
        $("#sujet1").val().toUpperCase() + ' ( ' + $("#grade1 option:selected").text() + ')',
        $("#sujet2").val().toUpperCase() + '  (' + $("#grade2 option:selected").text() + ')',
        $("#sujet3").val().toUpperCase() + '  (' + $("#grade3 option:selected").text() + ')',
        $("#sujet4").val().toUpperCase() + ' ( ' + $("#grade4 option:selected").text() + ')',
        $("#sujet5").val().toUpperCase() + '  (' + $("#grade5 option:selected").text() + ')',
        $("#sujet6").val().toUpperCase() + '  (' + $("#grade6 option:selected").text() + ')',
        $("#sujet7").val().toUpperCase() + '  (' + $("#grade7 option:selected").text() + ')',
        $("#sujet8").val().toUpperCase() + '  (' + $("#grade8 option:selected").text() + ')',
        $("#sujet9").val().toUpperCase() + '  (' + $("#grade9 option:selected").text() + ')',
        $("#sujet10").val().toUpperCase() + '  (' + $("#grade10 option:selected").text() + ')'
    );

    //Tableau contenant les valeurs du gce a level
    var tab2 = new Array(
      $("#annee4").val(),
        $("#sujet11").val().toUpperCase() + ' ( ' + $("#grade11 option:selected").text() + ')',
    $("#sujet12").val().toUpperCase() + ' (' + $("#grade12 option:selected").text() + ')',
    $("#sujet13").val().toUpperCase() + '  ( ' + $("#grade13 option:selected").text() + ')',
        $("#sujet14").val().toUpperCase() + '  ( ' + $("#grade14 option:selected").text() + ')',
    $("#sujet15").val().toUpperCase() + ' (  ' + $("#grade15 option:selected").text() + ')'
    );

    // affichage des valeurs du candidat
    var tr = $('#fourth_step tr');
    tr.each(function() {
        $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
    });

    //departement filiere matiere
    var tt = $('#four tr');
    tt.each(function() {
        $(this).children('td:nth-child(2)').html(champs[$(this).index()]);
    });

    var selected = $("#diplome").val();
    if(selected == 1){
//Affichage des valeurs saisient du probatoire
        $("#ici1").fadeIn();
        $("#ici2").fadeIn();
        var tb = $('#ici1 tr');
        tb.each(function() {
            $(this).children('td:nth-child(2)').html(proba[$(this).index()]);
        });

        //Valeurs du baccalaureat
        var tn = $('#ici2 tr');
        tn.each(function() {
            $(this).children('td:nth-child(2)').html(bacc[$(this).index()]);
        });
    } else if(selected == 2){
        $("#ici2").fadeOut();
        $("#ici1").fadeIn();
        $("#ici4").fadeIn();
        //le probatoire
        var tb = $('#ici1 tr');
        tb.each(function() {
            $(this).children('td:nth-child(2)').html(proba[$(this).index()]);
        });
        //le GCE A LEVEL
        var fl =$('#ici4 tr');
        fl.each(function() {
            $(this).children('td:nth-child(2)').html(tab2[$(this).index()]);
        });
    } else if(selected == 3){
        $("#ici1").fadeOut();
        $("#ici4").fadeOut();
        $("#ici2").fadeIn();
        $("#ici3").fadeIn();
        //le Baccalaureat
        var tn = $('#ici2 tr');
        tn.each(function() {
            $(this).children('td:nth-child(2)').html(bacc[$(this).index()]);
        });

        //valeurs du gce o level
        var ff = $('#ici3 tr');
        ff.each(function() {
            $(this).children('td:nth-child(2)').html(tabb[$(this).index()]);
        });
    } else if(selected == 4){
        $("#ici1").fadeOut();
        $("#ici2").fadeOut();
        $("#ici3").fadeIn();
        $("#ici4").fadeIn();
        //valeurs du gce o level
        var ff = $('#ici3 tr');
        ff.each(function() {
            $(this).children('td:nth-child(2)').html(tabb[$(this).index()]);
        });
        //le GCE A LEVEL
        var fl =$('#ici4 tr');
        fl.each(function() {
            $(this).children('td:nth-child(2)').html(tab2[$(this).index()]);
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

$(".submit").on('click', function(e) {
    e.preventDefault();
    //Send information to server
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
    var annee1 = $("#annee1").val();
    var mention1= $("#mention1 option:selected").text();
    var serie = $("#serie option:selected").val();
    var annee2 = $("#annee2").val();
    var mention2 = $("#mention2 option:selected").val();
    var annee3 = $("#annee3").val();
    var annee4 = $("#annee4").val();
    var sujet1 = $("#sujet1").val() + ' (' + $("#grade1 option:selected").val() + ')';
    var sujet2 = $("#sujet2").val() + ' (' + $("#grade2 option:selected").val() + ')';
    var sujet3 = $("#sujet3").val() + ' (' + $("#grade3 option:selected").val() + ')';
    var sujet4 = $("#sujet4").val() + ' (' + $("#grade4 option:selected").val() + ')';
    var sujet5 = $("#sujet5").val() + ' (' + $("#grade5 option:selected").val() + ')';
    var sujet6 = $("#sujet6").val() + ' (' + $("#grade6 option:selected").val() + ')';
    var sujet7 = $("#sujet7").val() + ' (' + $("#grade7 option:selected").val() + ')';
    var sujet8 = $("#sujet8").val() + ' (' + $("#grade8 option:selected").val() + ')';
    var sujet9 = $("#sujet9").val() + ' (' + $("#grade9 option:selected").val() + ')';
    var sujet10 = $("#sujet10").val() + ' (' + $("#grade10 option:selected").val() + ')';
    var sujet11 = $("#sujet11").val() + ' (' + $("#grade11 option:selected").val() + ')';
    var sujet12 = $("#sujet12").val() + ' (' + $("#grade12 option:selected").val() + ')';
    var sujet13 = $("#sujet13").val() + ' (' + $("#grade13 option:selected").val() + ')';
    var sujet14 = $("#sujet14").val() + ' (' + $("#grade14 option:selected").val() + ')';
    var sujet15 = $("#sujet15").val() + ' (' + $("#grade15 option:selected").val() + ')';
    var paper1 = $("#paper1 option:selected").text();
    var paper2 = $("#paper2 option:selected").text();

    //Condition statement to check the emptyness of values
    if(nom == '' || datenaiss == '' || lieunaiss == '' || sexe == '' || nationalite == '' || region == '' || division == '' || telephone == '' || recu == '' || department == '' || filiere == '' || centre == '')
    {
        $(this).focus();
    }
    else {
        $.ajax({
            url: 'register1.php',
            type: 'post',
            data:
            'centre=' + centre +
            '&department=' + department +
            '&filiere=' + filiere +
            '&nom=' + nom +
            '&datenaiss=' + datenaiss +
            '&lieunaiss=' + lieunaiss +
            '&sexe=' + sexe +
            '&nationalite=' + nationalite +
            '&region=' + region +
            '&division=' + division +
            '&telephone=' + telephone +
            '&recu=' + recu +
            '&annee1=' + annee1 +
            '&mention1=' + mention1 +
            '&serie=' + serie +
            '&annee2=' + annee2 +
            '&mention2=' + mention2 +
            '&annee3=' + annee3 +
            '&annee4=' + annee4 +
            '&sujet1=' + sujet1 +
            '&sujet2=' + sujet2 +
            '&sujet3=' + sujet3 +
            '&sujet4=' + sujet4 +
            '&sujet5=' + sujet5 +
            '&sujet6=' + sujet6 +
            '&sujet7=' + sujet7 +
            '&sujet8=' + sujet8 +
            '&sujet9=' + sujet9 +
            '&sujet10=' + sujet10 +
            '&sujet11=' + sujet11 +
            '&sujet12=' + sujet12 +
            '&sujet13=' + sujet13 +
            '&sujet14=' + sujet14 +
            '&sujet15=' + sujet15 +
            '&paper1=' + paper1 +
            '&paper2=' + paper2,
            beforeSend: function () {
              $(".submit").attr("value", "Sending.....");
            },
            success: function(msg) {
                if(msg == 'ok')
                {
                    console.log('Data has been sent');
                    window.open('register.php','_self');
                }
                else {
                    console.log('error of insertion');
                    window.open('register.php','_self');
                    //alert('erreur');
                }
            }

        });
    }

    });


$("#finish").click(function(){
   window.open('index.php','_self');
});
$("#print").click(function() {
    window.open("print_form.php","_blank");//Affichage du document pdf dans une nouvelle page
});

