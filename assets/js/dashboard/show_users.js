(function(){
    $('tr td #delete').click(function(ev){
        ev.preventDefault();
        var nombre=  $(this).parents('tr').find('td:first').text();
        console.log(nombre);
        var id = $(this).attr('data-id');
        Swal.fire({
            title: 'Realmente quieres eliminar el registro de '+nombre+'?',
            text: "El registro sera eliminado permanentemente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'SI!',
            cancelButtonText: 'NO!'
          }).then((result) => {
            if (result.isConfirmed) {
                //ajax
                $.ajax({
                    type: "POST",
                    url: "/mvc_codeigniter/users/delete",
                    data: {'id' : id},
                    success: function (data) {
                        //var json2 = JSON.parse(data);
                         Swal.fire(
                            'Eliminado! ' ,
                            'El registro ha sido eliminado satisfactoriamente.',
                            'success'
                          )
                    },statusCode: {
                        400: function (response) {
                            var json = JSON.parse(response.responseText);
                            Swal.fire(
                                'ERROR!',
                                json.msg,
                                'error'
                              )
                        }
                    }
                });
            }
          })
    })
  

})();