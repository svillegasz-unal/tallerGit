var id_finca = '';

$(document).ready(function() {
    convertir_valor_a_moneda();
});

function modal_finca(id, nombre){
    id_finca = id;
    $('#modal-content').text(nombre);
    $('#modal-finca').modal();
}

function borrar_finca(){
    window.location.href = base_url + "fincas/borrar/" + id_finca;
}

function convertir_valor_a_moneda(){
    var salario_valor;
    var salario_moneda;
    $("td.valor_propiedad").each(function(index, el) {
        salario_valor = Number($(el).text());
        salario_moneda = salario_valor.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        $(el).text(salario_moneda);
    });
}