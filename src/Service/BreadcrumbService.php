<?php

namespace App\Service;

class BreadcrumbService
{
    public function generateBreadcrumb($currentRoute)
    {
        $breadcrumb = [];
        $parts = explode('.', $currentRoute);
        $routeName = '';
        
        foreach ($parts as $part) {
            $routeName .= ($routeName ? '.' : '') . $part;
            $breadcrumb[] = [
                'name' => $part,
                'route' => $routeName,
            ];
        }
        
        return $breadcrumb;
    }
}