$(document).ready(function() {

	$('#btnActivar').click(function(){

		//var datos = $(this).attr('data-datos');
		var data = $('#btnActivar').data('datos');
		var id = $('#btnActivar').data('id');
		$('.nuevo').load("'.Yii::app()->createUrl("/eventos/view/").'?id="+id+"?activa="+);
		//$("#myModalBody").load("'.Yii::app()->createUrl("/eventos/view/").'?id="+calEvent.id+"?activa="+);
		/*
		 $.ajax({
	        type: "POST",
	        url: "/Inmuebles/Activa",
	        dataType: "json",
	        contentType: "application/json; charset=utf-8",
	        data: JSON.stringify(costo),
	        success: function (resultado) {
	            //$('#cuerpoMensaje').text(resultado.mensaje);
	            //$('#mensaje').show();
	            //$('.listacostos').load("/componente/listarcostos/" + Componente )
	        },
	        error: function () {
	            alert('Ocurrió un error al acceder a la información');
	        }
	    });
    return false;*/
	})

/*
	function EnviarDatos() {
        var vista = $('#btn-funcion').data("vista");
        //alert(vista);
        var Componente = $('#btn-funcion').data("componente");
        //alert(Componente);
        var Cant = $('#Cantidad').val();
        var RecId = $('#SeleccionRecurso').val();

        var costo = {
            Cantidad: Cant,
            UnidadId: Componente,
            RecursoId: RecId
        };

        $.ajax({
            type: "POST",
            url: "/Componente/CreateCosto",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify(costo),
            success: function (resultado) {
                //$('#cuerpoMensaje').text(resultado.mensaje);
                //$('#mensaje').show();
                $('.listacostos').load("/componente/listarcostos/" + Componente )
            },
            error: function () {
                alert('Ocurrió un error al acceder a la información');
            }
        });
        return false;
    }
	function(calEvent, jsEvent, view) {
		$("#myModalHeader").html(calEvent.title);
		$("#myModalBody").load("'.Yii::app()->createUrl("/eventos/view/").'?id="+calEvent.id+"?asModal=true");
		$("#myModal").modal();
	};*/
});