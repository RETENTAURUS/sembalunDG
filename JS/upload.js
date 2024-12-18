$(document).ready(function(){
    $('#uploadForm').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: 'upload.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                alert(response);
            }
        });
    });
});
