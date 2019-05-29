$("#hora").change(function(event){
    $.get("asignar/" + event.target.value+"", function(response, doctor){
        $("#doctor").empty();
        for(i=0; i<response.length; i++){
            $("#doctor").append("<option value='"+response[i].hora_id+"'>"+response[i].nombre_completo+"</option>");
        }
    });
});

