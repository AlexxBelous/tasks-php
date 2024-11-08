<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



























<?php

$allowedDomains = ['example.com', 'mysite.com'];

function filterUrls(array $urls, array $allowedDomains): array {
    $safeUrls = [];
    foreach ($urls as $url) {
        if (str_starts_with($url, 'https://') || str_starts_with($url, 'http://')) {

            foreach ($allowedDomains as $domain) {
                if (str_contains($url, $domain)) {
                    $safeUrls[] = $url;
                    break;
                }
            }
        }
    }

    return $safeUrls;
}


$safeUrls = filterUrls($urls, $allowedDomains);

foreach ($safeUrls as $url) {
    echo $url . "<br>";
}