<?php

function mg_add_googleAnalyticsScript(){

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148509814-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148509814-1');
</script>

<?php

}

add_action('wp_head','mg_add_googleAnalyticsScript');

?>