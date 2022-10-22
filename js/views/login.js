var searchVisible = 0;
var transparent = true;
var mobile_device = false;

$(document).ready(function(){

    $.material.init();

    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    $('.set-full-height').css('height', 'auto');

    /* ***************************** */

    function login(email, pass) {
        $.post(urlProyect() + "c_app/setLogin", {
            email: email,
            pass: pass
        }, function (data) {
            if (data.resultado == false) {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: data.message
                });
            } else {
                localStorage.setItem('userLogin', true);
                localStorage.setItem('dataUser', encrypter(JSON.stringify(data.data), "userAccess"));

                $(location).attr('href', urlProyectShort());
            }
        }, "json"); //post
    }

    $('#btnEntrar').click(function () {
        if($("#inpEmailEntrar").val() == "" || $("#inpPassEntrar").val() == ""){
            toastr.warning("Debe digitar los datos para ingresar");
            return false;
        }

        login($("#inpEmailEntrar").val(), $("#inpPassEntrar").val());
    });

    $("#inpPass").on('keyup', function (e) {
        if (e.keyCode === 13) {
            if($("#inpEmailEntrar").val() == "" || $("#inpPassEntrar").val() == ""){
                toastr.warning("Debe digitar los datos para ingresar");
                return false;
            }

            login($("#inpEmailEntrar").val(), $("#inpPassEntrar").val());
        }
    });

});

function refreshAnimation($wizard, index){
    $total = $wizard.find('.nav li').length;
    $li_width = 100/$total;

    total_steps = $wizard.find('.nav li').length;
    move_distance = $wizard.width() / total_steps;
    index_temp = index;
    vertical_level = 0;

    mobile_device = $(document).width() < 600 && $total > 3;

    if(mobile_device){
        move_distance = $wizard.width() / 2;
        index_temp = index % 2;
        $li_width = 50;
    }

    $wizard.find('.nav li').css('width',$li_width + '%');

    step_width = move_distance;
    move_distance = move_distance * index_temp;

    $current = index + 1;

    if($current == 1 || (mobile_device == true && (index % 2 == 0) )){
        move_distance -= 8;
    } else if($current == total_steps || (mobile_device == true && (index % 2 == 1))){
        move_distance += 8;
    }

    if(mobile_device){
        vertical_level = parseInt(index / 2);
        vertical_level = vertical_level * 38;
    }

    $wizard.find('.moving-tab').css('width', step_width);
    $('.moving-tab').css({
        'transform':'translate3d(' + move_distance + 'px, ' + vertical_level +  'px, 0)',
        'transition': 'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'
    });
}
