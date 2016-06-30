$( document ).ready(function() {
    if ($('#checkPrint').length > 0) {
        var appRoot = $('#appRoot').val();
        window.open(appRoot+"/printToPdf/"+$('#patientId').val(), '_blank');
    };
   
});

function removeImg(input) {
    /*if (input.files.length > 0){
        var reader = new FileReader();
        var img = document.createElement("img");

        reader.onloadend = function() {
             img.src = reader.result;
             // img.width = '220';
             img.style = 'float:left; width: 19%; margin-right:5px;border:1px solid #ccc; padding: 5px;';
        }

        reader.readAsDataURL(input.files[0]);
        $("#img_preview").append(img);
        $(this).css('display', 'none');
        // var input_new = input;

    }*/
    img_id = input.parentElement.attributes['id'].value;
    $('#'+img_id).css('display', 'none');
    img_remove_id = $('#'+img_id).attr('data-id');
    $('#'+img_id).append('<input type="hidden" name="data[PatientImage][img_remove_id][]" value="' + img_remove_id + '" />');
    // input.parentElement.css('display', 'none');
    // console.log(input);
}

function selectTemplate() {
    var appRoot = $('#appRoot').val();
    var template_id = $('#select_template').val();
    if (template_id == '') {
        CKEDITOR.instances.ketluan.setData('');
    } else {
        $.ajax({
            type: "POST",
            url: appRoot+"/getTemplateById/" + template_id,
            success: function(data){
                if (data != null && data != "") {
                    var myjson='';
                    eval("myjson=" + data + ";");
                    var str = myjson['Template']['template_body'];              
                    CKEDITOR.instances.ketluan.setData(str);
                }
            }
        });
    };
    
}

function deleteImage(id) {
    var temp = '#image'+id;
    var appRoot = $('#appRoot').val();
    var r = confirm("Bạn có chắc chắn muốn xóa ảnh này!");
    if (r==true) {
        $.ajax({
            type: "POST",
            url: appRoot+"/deleteImage/"+id,
            success: function(data){
                if (data == 'success') {
                   $(temp).remove();
                } else {
                    alert('Lỗi hệ thống xin bạn thử lại.');
                }
            }
        })
    }
}