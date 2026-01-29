<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Main Sidebar Menu
    |--------------------------------------------------------------------------
    | This array defines the sidebar menu items.
    |
    | Each menu item can have:
    | - 'title' : string, menu text
    | - 'icon'  : string, lucide icon name (optional)
    | - 'route' : string, Laravel route name (leave empty '' if no route → href="#")
    | - 'children' : array, nested submenu (optional)
    |
    | To add a new menu item:
    | 1. Copy an existing array element.
    | 2. Update 'title', 'icon', 'route', and 'children' as needed.
    | 3. Save the file.
    */

    // -------------------------
    // Dashboard
    // -------------------------
    [
        'title' => 'Dashboard',
        'icon'  => 'circle-gauge',
        'route' => 'dashboard', // leave blank '' if no route
    ],

    // -------------------------
    // Access Control Group
    // -------------------------
    [
        'title' => 'Access Control',
        'icon'  => 'shield-user',
        'children' => [

            // Users Submenu
            [
                'title' => 'Users',
                'icon'  => 'users',
                'children' => [
                    ['title'=>'List', 'route'=>'admin.users.index'],   // Add route name if exists
                    ['title'=>'Create', 'route'=>'admin.users.create'], // Add route name if exists
                    // Add more user-related links here
                ]
            ],

            // Roles Submenu
            [
                'title' => 'Roles',
                'icon'  => 'shield',
                'children' => [
                    ['title'=>'List', 'route'=>'admin.roles.index'],   // Add route name if exists
                    ['title'=>'Create', 'route'=>'admin.roles.create'], // Add route name if exists
                    // Add more role-related links here
                ]
            ],

            // Permissions Submenu
            [
                'title' => 'Permissions',
                'icon'  => 'key',
                'children' => [
                    ['title'=>'List', 'route'=>'admin.permissions.index'],   // Add route name if exists
                    ['title'=>'Create', 'route'=>'admin.permissions.create'], // Add route name if exists
                    // Add more permission-related links here
                ]
            ],

        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Add New Menu Items Below
    |--------------------------------------------------------------------------
    | Example:
    | [
    |     'title' => 'Products',
    |     'icon'  => 'package',
    |     'children' => [
    |         ['title'=>'List','route'=>'products.index'],
    |         ['title'=>'Create','route'=>'products.create'],
    |     ],
    | ],
    */

];
