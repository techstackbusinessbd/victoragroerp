<?php

if (!function_exists('checkActiveRecursive')) {
    function checkActiveRecursive($menuItem, $currentRoute)
    {
        if (!empty($menuItem['route']) && $menuItem['route'] == $currentRoute) return true;
        if (isset($menuItem['children'])) {
            foreach ($menuItem['children'] as $child) {
                if (checkActiveRecursive($child, $currentRoute)) return true;
            }
        }
        return false;
    }
}
