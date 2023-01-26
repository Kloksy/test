<?php

// return [
//     'class' => 'yii\db\Connection',
//     'dsn' => 'pgsql:host=localhost;port=5432;dbname=emc',
//     'username' => 'postgres',
//     'password' => 'kaha12kaha12',
//     'charset' => 'utf8',
//     'schemaMap' => [
//         'pgsql' => [
//             'class' => \yii\db\pgsql\Schema::class,
//             'columnSchemaClass' => [
//                 'class' => \yii\db\pgsql\ColumnSchema::class,
//                 'disableJsonSupport' => true,
//                 'disableArraySupport' => true,
//                 'deserializeArrayColumnToArrayExpression' => false,
//             ],
//         ],
//     ],

//     // Schema cache options (for production environment)
//     //'enableSchemaCache' => true,
//     //'schemaCacheDuration' => 60,
//     //'schemaCache' => 'cache',
// ];


return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=ep-nameless-lab-385720.eu-central-1.aws.neon.tech;dbname=neondb;options=project=ep-nameless-lab-385720',
    'username' => 'kahamirotadze',
    'password' => 'efOqTVKWn6o9',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => \yii\db\pgsql\Schema::class,
            'columnSchemaClass' => [
                'class' => \yii\db\pgsql\ColumnSchema::class,
                'disableJsonSupport' => true,
                'disableArraySupport' => true,
                'deserializeArrayColumnToArrayExpression' => false,
            ],
        ],
    ],

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];