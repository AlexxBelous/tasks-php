<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */


































namespace App\UrlFilter;


class UrlFilter
{
    private array $allowedDomains;

    public function __construct(array $allowedDomains)
    {
        $this->allowedDomains = array_map(function ($domain) {
            return trim(strtolower($domain), '/');
        }, $allowedDomains);
    }

    public function filter(array $urls): array
    {
        $safeUrls = [];
        foreach ($urls as $url) {
            if ($this->isValidProtocol($url) && $this->isAllowedDomain($url)) {
                $safeUrls[] = $url;
            }
        }
        return $safeUrls;
    }

    private function isValidProtocol(string $url): bool
    {
        return str_starts_with($url, 'https://') || str_starts_with($url, 'http://');
    }

    private function isAllowedDomain(string $url): bool
    {
        $host = $this->getHost($url);
        if ($host === null) {
            return false;
        }

        foreach ($this->allowedDomains as $domain) {
            if ($host === $domain || str_ends_with($host, '.' . $domain)) {
                return true;
            }
        }
        return false;
    }

    private function getHost(string $url): ?string
    {
        $parsedUrl = parse_url($url);
        return $parsedUrl['host'] ?? null;
    }
}
