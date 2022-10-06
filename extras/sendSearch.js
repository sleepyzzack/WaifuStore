
    function buscar_ahora(buscar) {
        if(buscar != ""){
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'controladores/buscar.php',
        success: function(data) {
            document.getElementById("datos_buscador").innerHTML = data;
        }

    });}else{
        document.getElementById("datos_buscador").innerHTML = " ";
    }
}
