$(document).ready(function(){

    // Delete 
    $('.delete-pendamping').click(function(){
        var el = this;
        var id = this.id;
        var splitid = id.split("_");

        // Delete id
        var deleteid = splitid[1];
        
        // Confirm box
        bootbox.confirm("Anda yakin ingin menghapus data ?", function(result) {
            
            if(result){
                // AJAX Request
                $.ajax({
                    url: '../../provinsi/literasi/delete_pendamping.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){

                        // Removing row from HTML Table
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800, function(){      
                            $(this).remove();
                        });

                    }
                });
            }
            
        });
        
    });
});