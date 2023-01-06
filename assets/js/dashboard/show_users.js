(function(){
    $('tr td #delete').click(function(ev){
        ev.preventDefault();
        Swal.fire({
            title: 'Realmente quieres eliminar el registro?',
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
              Swal.fire(
                'Eliminado!',
                'El registro ha sido eliminado satisfactoriamente.',
                'success'
              )
            }
          })
    })
  

})();