<?php

return [
    'name' => 'Blog',
    'prefix' => 'blog',
    'web' => [
        'theme' => '',
    ],
    'admin' => [
        'sidebar' => [
            ["path" => "/blog", "title" => 'Blog', "icon" => "fas fa-layer-group", "slug" => "", "children" => [
                ["path" => "/metas", "title" => "Metas",],
                ["path" => "/contents", "title" => "Contents", "children" => [
                    ["path" => "/insert", "title" => "Insert", "visible" => false,],
                    // ["path" => "/update/{id}", "title" => "编辑", "visible" => false,],
                    ["path" => "/{id}", "title" => "Detail", "visible" => false,],
                ],],
                ["path" => "/comments", "title" => "Comments",],
                ["path" => "/links", "title" => "Links",],
                ["path" => "/options", "title" => "Options",],
                ["path" => "/config", "title" => "Config",],
            ]],
        ]
    ],
];
