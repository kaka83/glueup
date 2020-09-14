<?php

return [
    'common' => [
    ],
    'plugin' => [
        'name' => 'Hubspot',
        'desc' => "Allows HubSpot users to install the HubSpot tracking code",
    ],
    'settings' => [
        'menu_label' => 'HubSpot',
        'menu_description' => 'HubSpot settings',
        'category' => 'Marketing',
        'fields' => [
            'hub_id' => 'Hub ID',
        ]
    ],
    'components' => [
        'tracking_code' => [
            'name' => 'HubSpot Tracking Code',
            'desc' => 'Adds HubSpot Tracking Code on Layout or Page',
        ],
    ]
];