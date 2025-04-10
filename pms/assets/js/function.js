$(document).ready(function(){

    
let ps = $('.project-status').val();
let pp = $('.project-progress').val();
    
if(ps == "Approved"){

$('.hide-approved').show();    
    
}else{
    
$('.hide-approved').hide();    
    
}

    
if(pp == "Submitted"){

$('.hide-submitted').show();    
    
}else{
    
$('.hide-submitted').hide();    
    
}
    
    
$('.project-status').change(function(){
   
let project_status = $(this).val();
    
    
if(project_status == "Approved"){
    

$('.hide-approved').show();
$('.project_importance').attr('required', true);
$('.hidden-select').attr('required', true);
    
    
}else{
    
$('.hide-approved').hide();
$('.project_importance').attr('required', false);
$('.hidden-select').attr('required', false);
    
}
    
});

    
    

$('.project-progress').change(function(){
   
let project_progress = $(this).val();
    
    
if(project_progress == "Submitted"){
    

$('.hide-submitted').show();
    
    
}else{
    
$('.hide-submitted').hide();
    
}    
    
});    
    
    
    
});