<?php
$content = file_get_contents('https://shopify.apptive.com/build/preview?application_id=2054');
$content = str_replace('</title>','</title><base href="https://dev.apptive.com/build/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="https://inspyregroup.com/wp-content/themes/Inspyre/app-preview.css" /></head>', $content);
$content = str_replace('static.apptive.com%2Fimages','inspyregroup.com%2Fwp-content%2Fthemes%2FInspyre%2Fimages', $content);
echo $content; ?>
