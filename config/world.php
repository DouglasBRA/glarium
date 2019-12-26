<?php

return [
    'transport' => 500,//Capacidad de transporte de barcos mercantes
    'load_speed' => 5000,//Carga base del puerto
    'load_attack_return' => 5,//Tiempo que demora en cargar los recursos de un saqueo
    'load_defend_return' => 5,//Tiempo que demora en cargar las tropas al regresar de una defensa
    'warehouse' => [
        'resource_protected' => 400,//Capacidad de recursos protegidos por nivel de deposito
        'resource_protected_base' => 100,//Capacidad base de proteccion de recursos
        'capacity' => 8000, //Capacidad de almacenamiento por nivel
        'capacity_base' => 2500 //Capacidad base
    ],
    'distance' => [
        'same_island' => 5
    ],
    'combat' => [
        'wall_bonus' => 0.01 //Bonus de la muralla por nivel 0.01 es 1%
    ]
];
