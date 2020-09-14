# Menu plugin
Объединяет элементы меню из разных плагинов

Для добавления пунктов меню добавьте в класс `Plugin`

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

Имя вкладки по умолчанию {default_name}

Для изменения имени вкладки по умолчанию, в файле `Plugin.php`, объявите константу `DEFAULT_MENU_NAME`

Если указан `первый` элемент, то он будет сразу открываться при клике на меню.
Если нет, то будет открыта страница меню или подменю.