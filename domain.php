<?php

$domains = ["miaict", "miaict.com", "abc-xyz.com.bd"];
$domainExtensions = ["com", "org", "info", "net", "io", "me", "shop", "site", "online", "blog", "website", "biz", "store", "dev", "guru", "design"];

foreach ($domains as $domain) {
    $extractedDomain = $pieces = explode(".", $domain);
    $totalPart = count($extractedDomain);
    $domainName = "";
    $search = $domain;
    if ($totalPart == 2) {
        $domainName = $extractedDomain[0];
        $domainExtensions = array_diff($domainExtensions, [$extractedDomain[1]]);
    } elseif ($totalPart === 1) {
        $domainName = $extractedDomain[0];
        $search = "";
    }
    if ($domainName !== "") {
        foreach ($domainExtensions as $extension) {
            $search .= "," . "$domainName.$extension";
        }
        $search = trim($search, ",");
    }
    echo "\n\n" . $search;
}

