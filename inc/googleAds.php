<?php

function mg_add_googleAdsenseScript() {
    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
	echo '<script>  (adsbygoogle = window.adsbygoogle || []).push({		google_ad_client: "ca-pub-8298323151003936",		enable_page_level_ads: true	  });	</script>' ;
}

add_action('wp_head','mg_add_googleAdsenseScript');

?>