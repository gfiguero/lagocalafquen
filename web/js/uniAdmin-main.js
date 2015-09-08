jQuery(document).ready(function($) {
    $(".clickableRow").click(function() { window.document.location = $(this).attr("href"); });
    $(".clickableRow").css('cursor', 'pointer');
//    $("#uni_adminbundle_integrante_email_show").bootstrapSwitch({onText: 'Si', offText: 'No'});
//    $("#uni_adminbundle_integrante_telefono_show").bootstrapSwitch({onText: 'Si', offText: 'No'});
//    $("#uni_adminbundle_integrante_aniversario_show").bootstrapSwitch({onText: 'Si', offText: 'No'});

//Frontpage
    $("#uni_adminbundle_frontpage_frontpage_active").bootstrapSwitch({onText: 'Si', offText: 'No'});
//Notice
    $("#uni_adminbundle_notice_notice_published").bootstrapSwitch({onText: 'Si', offText: 'No'});
//Product
    $("#uni_adminbundle_product_product_active").bootstrapSwitch({onText: 'Si', offText: 'No'});
//Report
    $("#uni_adminbundle_report_report_published").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_report_report_photo_file").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Archivo','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});
//Member
    $("#uni_adminbundle_member_member_active").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_member_member_photo_file").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});
//Publication
    $("#uni_adminbundle_publication_publication_active").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_publication_publication_photo_file").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});
//Service
    $("#uni_adminbundle_service_service_published").bootstrapSwitch({onText: 'Si', offText: 'No'});
    $("#uni_adminbundle_service_service_photo_file").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});
});

