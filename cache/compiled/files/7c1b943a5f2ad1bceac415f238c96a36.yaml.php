<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/emilkarlsson/Downloads/grav-skeleton-helium-site 2/user/plugins/admin/blueprints/admin/pages/move.yaml',
    'modified' => 1489110742,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::parentsRawRoutes',
                    'data-default@' => '\\Grav\\Plugin\\Admin\\Admin::rawRoute',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ]
                ]
            ]
        ]
    ]
];
