<?php
    $username = 'USERNAME';
    $password = 'PASSWORD';
    $proxy = 'PROXY_IP:PORT';
    $query = curl_init('https://ip.oxylabs.io');
    curl_setopt($query, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($query, CURLOPT_PROXY, "http://$proxy");
    curl_setopt($query, CURLOPT_PROXYUSERPWD, "customer-$username:$password");
    $output = curl_exec($query);
    curl_close($query);
    if ($output)
        echo $output;
?>