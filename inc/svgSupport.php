
<?php 


//*****************************************************
//**SVG UPLOAD SUPPORT ********************************
//*****************************************************

function mg_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }

add_filter('upload_mimes', 'mg_mime_types');
    

?>