<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => false,

    'roles_structure' => [
        'super_admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'jobs' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'jobs' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'sub_admin' => [
            'users' => 'c,r,u,d',
            'jobs' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'moderator' => [
            'users' => 'c,r,u,d',
            'jobs' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'employer' => [
            'profile' => 'r,u',
            'jobs' => 'c,r,u,d',
        ],
        'consultant' => [
            'profile' => 'r,u',
            'jobs' => 'c,r,u,d',
        ],
        'jobseeker' => [
            'profile' => 'r,u',
            'jobs' => 'c,r,u,d',
        ],
        'user' => [
            'profile' => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
