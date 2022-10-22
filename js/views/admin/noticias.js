$(function () {
    
    function datosGrilla(){
        $.ajax({
            url: urlProyect() + "c_admin/getNoticias",
            type: "POST",
            dataType: "JSON",
            success: function(response){
                llenarGrilla(response.data);
            },
            error: function (xhr) {
                toastr.error("Error al cargar las Noticias");
                return false;
            },
            
        });
    }

    function llenarGrilla(data) {
        var source = {
            localdata: data,
            datafields:
                    [
                        {name: 'id', type: 'string'},
                        {name: 'titulo', type: 'string'},
                        {name: 'descripcion', type: 'string'},
                        {name: 'Fecha', type: 'string'},
                        {name: 'estado', type: 'string'},
                        {name: 'url_image', type: 'string'},
                        {name: 'image_url', type: 'string'},
                    ],
            datatype: "array"
        };
        var dataAdapter = new $.jqx.dataAdapter(source);
        var cellClass = function (row, dataField, cellText, rowData) {
            if (rowData['estado'] == '0') {
                return 'RedClass';
            }
        }
        $("#grid").jqxGrid({
            width: '100%',
            height: '600px',
            source: dataAdapter,
            theme: "metro",
            groupable: false,
            filterable: true,
            showfilterrow: true,
            sortable: true,
            showaggregates: true,
            showstatusbar: true,
            statusbarheight: 35,
            rowsheight: 80,
            columns: [
                {
                    text: '#', sortable: false, filterable: false, editable: false,
                    groupable: false, draggable: false,
                    datafield: '', columntype: 'number', width: 30,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='display:flex; align-items: center; justify-content: center;height: 100%;'>" + (value + 1) + "</div>";
                    }
                },
                {text: 'Codigo', datafield: 'id', width: 50, cellClassName: cellClass},
                {text: 'Imagen', datafield: 'image_url', width: 80, height:80, 
                    cellsrenderer: function (row, column, value) {
                        return '<img style="display:flex; align-items: center; justify-content: center; padding: 5px" height="80" width="100%" src="../' + value + '"/>';
                    }
                },
                {text: 'Titulo', datafield: 'titulo', width: 200, cellClassName: cellClass},
                {text: 'Descripcion', datafield: 'descripcion', minwidth: 80, cellClassName: cellClass},
                {text: 'Fecha de Creación', datafield: 'Fecha', width: 160, cellClassName: cellClass,
                cellsrenderer: function (row, column, value) {
                    return "<div style='display:flex; align-items: center; justify-content: center;height: 100%;'>" + (value) + "</div>";
                }},
                {text: 'Estado', datafield: 'estado', width: 75, filtertype: 'checkedlist', cellClassName: cellClass,
                cellsrenderer: function (row, column, value) {
                    var estado="";
                    if (value=="0") {
                        estado="Inactivo"
                    } else {
                        estado="Activo"
                    }
                    return "<div style='display:flex; align-items: center; justify-content: center;height: 100%; margin:0px;'>" + estado + "</div>";
                }},
            ]
        });  
        $('#grid').jqxGrid('render');
        sizeStart();
    }

    function limpiarForm(){
        $('#imgImagenNoticia').attr({src: '../images/utils/default-image.jpg'});
    	$('#inpImageAdd').attr({value: ''});
        $("#frmAdd")[0].reset();
        $('#inpId').val('');
        $('#inpTitulo').val('');
        $('#inpDescripcion').val('');
        $("#inpEstado").selectpicker('val', 1);
    }

    $('#frmAdd').submit(function (e) {
        if ($("#inpTitulo").val() == "") {
            toastr.warning("La noticia debe tener un titulo");
            return false;
        }
        if ($("#inpDescripcion").val().lenght < 20) {
            toastr.warning("Debe tener una descripcion mayor a 20 caracteres");
            return false;
        }
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: urlProyect() + 'c_admin/addAndEditNoticia',
            type: 'POST',
            data: formData,
            dataType: "json",
            async: false,
            success: function (data) {
                toastr.success(data.message);
                setTimeout(() => {
                    location.reload();
                }, 1000);
            },
            error: function (xhr) {
                toastr.error("Error al crear la noticia");
            },
            cache: false,
            contentType: false,
            processData: false
        });
        e.preventDefault();
        return false;
    });

    $('#grid').on('rowdoubleclick', function (event) {
        var rowData = args.row;
        var row = rowData.bounddata;
        $('#aTabCrearNoticia').trigger('click');
        $("#inpId").val(row.id);
        $("#inpTitulo").val(row.titulo);
        $("#inpDescripcion").val(row.descripcion);
        $("#inpEstado").selectpicker('val', row.estado);
        $('#imgImagenNoticia').attr({src: '../'+row.image_url});
    });


    datosGrilla();

    //RESIZE GRILLAS PARA RESPONSIVIDAD            
    function sizeStart() {
        $("#grid").jqxGrid({height: $(window).height() - 190, width: "100%"});
    }
    sizeStart();
    $(window).on('resize', function () {
        sizeStart();
    });

});