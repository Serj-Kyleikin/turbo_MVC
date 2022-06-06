<?php

 // Подключение плагинов

return [

//****************// Плагины реализующие функционал целой страницы //****************//

    'pages' => [
        'status' => true,
        'plugins' => [

                // Плагин "Регистрации/Авторизации "(Вариант без регистрации)

            'users' => [
                'status' => true,
                'tests' => false,       // Отключение видимости на время работ для всех, кроме админа
                'routes' => [
                    'level' => '0',     // Номер сущности в URL строке
                    'entities' => [
                        'authorization' // Адрес плагина в URL
                    ]
                ],
                'options' => [
                    'cabinet' => true   // Любые дополнительные опции
                ]
            ],

            // Плагин "Кабинет администратора"

            'cabinet' => [
                'status' => true,
                'tests' => false,
                'routes' => [
                    'level' => '0',
                    'entities' => [
                        'cabinet'
                    ]
                ]
            ]
        ]
    ],

//****************// Плагины реализующие элементы страницы //****************//

    'components' => [
        'status' => false,
        'plugins' => [

            

        ]
    ]
];