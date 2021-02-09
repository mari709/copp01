$(document).ready(function(){
    $("#select-familia").change(function () {

                            
        $("#select-familia option:selected").each(function () {
            idfamilia = $(this).val();
            $.get("../baseDeDatos/getProducto.php", { idfamilia: idfamilia }, function(data){
                $("#select-productos").html(data);
            });            
        });
    })
});