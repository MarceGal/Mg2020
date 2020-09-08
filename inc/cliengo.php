
<?php 

function mg_add_cliengoScript() {
    echo "<script>(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/5aba214de4b02f576d7560a4/5aba214fe4b02f576d7560a7.js' ; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script>";
}

add_action('wp_footer', 'mg_add_cliengoScript', 100 );

?>