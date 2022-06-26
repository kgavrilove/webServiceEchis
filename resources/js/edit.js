window.addEventListener('load', function() {

function isFieldsCorrect() {
    var name =$("#name").val();
    var author =$("#author").val();
    var scheme =$("#scheme").val();
    var a_color =$("#a_color").val();
    var b_color =$("#b_color").val();
    var c_color =$("#c_color").val();
    var d_color =$("#d_color").val();
    var e_color =$("#e_color").val();
    if (name && author && scheme && a_color
        && b_color && c_color && d_color && e_color) {
        return true;
    }
        return false;
}

    $(".submitAssetEdit").click(function(e) {

        if(!isFieldsCorrect()) {
            alert('Fields is not correct');
        } else {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/editAsset',
        type: 'POST',
        data: {
            id :         $("#id").val(),
            name :      $("#name").val(),
            author :    $("#author").val(),
            scheme :    $("#scheme").val(),
            a_color :   $("#a_color").val(),
            b_color :   $("#b_color").val(),
            c_color :   $("#c_color").val(),
            d_color :   $("#d_color").val(),
            e_color :   $("#e_color").val(),
        },

        success: function(data) {
            document.location.reload();
        },
        error: function (xhr, status, errorThrown){
            var err = JSON.parse(xhr.responseText);
            $.each(err.errors,function(key,value){
                text=value.toString();
                alert(JSON.stringify(text));
                return false;
            });
        }
    });

    }
    });
});
