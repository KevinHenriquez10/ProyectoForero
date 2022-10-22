$(function () {

    $.ajax({
        url: urlProyect() + "c_app/getRandomNoticias",
        type: "POST",
        dataType: "JSON",
        success: function(response){
            response.data.map((v) => {
                create_noticia(v.id, v.titulo, (v.descripcion.substring(0, 200)+"..."), v.Fecha, v.image_url);
            });
        },
        error: function (xhr) {
            toastr.error("Error al cargar las noticias");
            return false;
        },
        
    });

    function create_noticia(id, titulo, descripcion, fecha, img){
        let str = '<div class="team-member"><div class="team-img" style="height: 150px;"><img src="../'+img+'" class="team-pic" alt=""></div><h3 class="team_name">'+titulo+'</h3><p class="team_designation">'+fecha+'</p><p class="team_text">'+descripcion+'</p><p class="social-icons pull-right"><a href="'+urlProyect()+"noticia/"+id+'">Ver mas</a></p></div>';
        $("#divPadreNoticias").append("<div class='col-md-12'>"+str+"</div>");
    }



});