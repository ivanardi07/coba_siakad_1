<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'profil_guru' => 'c,r,u,d',
            'profil_siswa' => 'c,r,u,d',
            'nilai' => 'c,r,u,d',
            'absen' => 'c,r,u,d',
            'monitoring' => 'c,r,u,d',
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'profil_guru' => 'c,r,u,d',
            'profil_siswa' => 'c,r,u,d',
            'monitoring' => 'r,u',
        ],
        'guru' => [
            'profil_guru' => 'r,u',
            'nilai' => 'c,r,u,d',
            'absen' => 'c,r,u,d',
            'monitoring' => 'c,r,u,d',
        ],
        'siswa' => [
            'profil_siswa' => 'r,u',
            'nilai' => 'r',
            'monitoring' => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
