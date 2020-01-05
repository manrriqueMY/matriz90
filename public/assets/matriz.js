var lista=[];

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on("submit","#genera",function (e) {
	lista=[];
	e.preventDefault();
	
	var nxn = $("#matriz").val();
	var con = 1;
	for (var i = 0; i < nxn; i++) {
		var row = [];
		for (var j = 0; j < nxn; j++) {
			row[j]=con;
			con++;
		}
		lista[i]=row;
	}
	$("#lista").val(JSON.stringify(lista));
	$.get(uri+"/vistamatriz",{data:JSON.stringify(lista)},function(res){
		$("#inicio").html(res);
	});

	alertify.success("Array Generado");
});

function rotar90() {
	if (lista.length<=1) {
		alertify.error("Matriz Vacia");
		return ;
	}
	$.post(uri+"/rotarmatriz90",{input:lista},function (data) {
		if(data.res){
			$("#lista").val($("#lista").val()+"\n"+JSON.stringify(data.output));
			$.get(uri+"/vistamatriz",{data:JSON.stringify(data.output)},function(res){
				$("#rotado").html(res);
			});
		}
		else{
			$("#rotado").html(data.msg);
		}
	});
}
function rotar09() {
	if (lista.length<=1) {
		alertify.error("Matriz Vacia");
		return ;
	}
	$.post(uri+"/rotarmatriz09",{input:lista},function (data) {
		if(data.res){
			$("#lista").val($("#lista").val()+"\n"+JSON.stringify(data.output));
			$.get(uri+"/vistamatriz",{data:JSON.stringify(data.output)},function(res){
				$("#rotado").html(res);
			});
		}
		else{
			$("#rotado").html(data.msg);
		}
	});
}