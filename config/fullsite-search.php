<?php

return [

    'model_path' => 'Models',

    'api_endpoint' => '/api/site-search',

    'exclude' => [
        // example:
        // \App\Models\Comment::class
    ],

    // buffer text around the match
    'buffer' => 10,

    'view_mapping' => [
        // \App\Models\Comment::class => '/comments/view/{id}'
    ],
];
