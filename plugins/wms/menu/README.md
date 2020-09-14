# Menu plugin
Combines menu items from different plugins

To add menu items add to class`Plugin`

    public function addToMainNavigation()
    {
        return [
            '{tab_name}' => [
                '{name}' => [
                    'label'       => {label},
                    'url'         => {url},
                    'permissions' => [{permission}, ...],
                    'icon'        => {icon},
                    'order'       => {order},
                    //'first'       => true,
                    'subMenu'     => [
                        '{tab_name}' => [
                            '{name}' => [
                                'label'       => {label},
                                'url'         => {url},
                                'permissions' => [{permission}, ...],
                                'icon'        => {icon},
                                'order'       => {order},
                            ],
                            ...
                        ],
                    ...
                ],
                ...
            ],
            ...
        ];
    }

Default tab name is {default_name}

For change default tab name, in `Plugin.php` file, declare the constant `DEFAULT_MENU_NAME`

If the `first` element is specified, it will immediately open when you click on the menu.
If not, the menu or submenu page will be opened. 