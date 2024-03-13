<?php

return array (
  'name' => 'Blog',
  'prefix' => 'blog',
  'web' => 
  array (
    'theme' => '',
  ),
  'admin' => 
  array (
    'sidebar' => 
    array (
      0 => 
      array (
        'path' => '/blog',
        'title' => 'Blog',
        'icon' => 'fas fa-layer-group',
        'slug' => '',
        'children' => 
        array (
          0 => 
          array (
            'path' => '/metas',
            'title' => 'Metas',
          ),
          1 => 
          array (
            'path' => '/contents',
            'title' => 'Contents',
            'children' => 
            array (
              0 => 
              array (
                'path' => '/insert',
                'title' => 'Insert',
                'visible' => false,
              ),
              1 => 
              array (
                'path' => '/0',
                'title' => 'Detail',
                'visible' => false,
              ),
            ),
          ),
          2 => 
          array (
            'path' => '/comments',
            'title' => 'Comments',
          ),
          3 => 
          array (
            'path' => '/links',
            'title' => 'Links',
          ),
          4 => 
          array (
            'path' => '/options',
            'title' => 'Options',
          ),
          5 => 
          array (
            'path' => '/config',
            'title' => 'Config',
          ),
        ),
      ),
    ),
  ),
  'controllers' => 
  array (
    0 => '\\Modules\\Blog\\Http\\Controllers\\BlogController',
  ),
  'seeders' => 
  array (
    0 => '\\Modules\\Blog\\Database\\Seeders\\BlogDatabaseSeeder',
  ),
  'entities' => 
  array (
    0 => '\\Modules\\Blog\\Entities\\BlogComment',
    1 => '\\Modules\\Blog\\Entities\\BlogContent',
    2 => '\\Modules\\Blog\\Entities\\BlogField',
    3 => '\\Modules\\Blog\\Entities\\BlogLink',
    4 => '\\Modules\\Blog\\Entities\\BlogMeta',
    5 => '\\Modules\\Blog\\Entities\\BlogRelationship',
  ),
  'factories' => 
  array (
  ),
  'migrations' => 
  array (
  ),
  'slug' => 'blog',
  'title' => 'Admin',
  'type' => 'project',
  'description' => NULL,
);
