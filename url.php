<?php
$url="https://www.google.co.in/search?q=php&rlz=1C1CHBF_enIN766IN766&oq=php&aqs=chrome..69i57j69i60l5.1014j0j8&sourceid=chrome&ie=UTF-8";
$url = parse_url($url);
echo "Scheme- ".$url['scheme']."<br>"."Host- ".$url['host']."<br>"."PAth-".$url['path'];
echo '<br>';
echo '<br>';

$url1="http://www.allenhouse.ac.in/placement/";
$url1= parse_url($url1);
echo "Scheme- ".$url1['scheme']."<br>"."Host- ".$url1['host']."<br>"."PAth-".$url1['path'];
?>
