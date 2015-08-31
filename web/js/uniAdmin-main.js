jQuery(document).ready(function($) {
    $(".clickableRow").click(function() { window.document.location = $(this).attr("href"); });
    $(".clickableRow").css('cursor', 'pointer');
//    $("#uni_adminbundle_integrante_email_show").bootstrapSwitch({onText: 'Si', offText: 'No'});
//    $("#uni_adminbundle_integrante_telefono_show").bootstrapSwitch({onText: 'Si', offText: 'No'});
//    $("#uni_adminbundle_integrante_aniversario_show").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_member_member_active").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_notice_notice_published").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_member_member_photo_file").fileinput({'showUpload':false});
});

