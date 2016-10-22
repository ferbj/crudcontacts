$(document).ready(function(){ 
    $('#tblDatos').DataTable({
        /*
        "processing": true,
        "serverSide": true,
        "ajax" : "pagination/datatable.php",
        "columns": [
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "telefono" },
            { "data": "direccion" },
            { "data": "email" },
            { "data": "sexo" }
        ],
*/
           "language": {
            "lengthMenu": "Mostrar _MENU_ registros por Pagina",
            "zeroRecords": "No se han encontrado registros",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros validos",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },

        scrollY: 700,
        responsive: true,
    	colReorder: true,
        
        buttons: [
            'colvis'
        ],
  
});
});
