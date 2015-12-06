<?php

use yeesoft\i18n\TranslatedMessagesMigration;

class m151121_232223_i18n_uk_yee_menu extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/menu';
    }

    public function getTranslations()
    {
        return [
            'Menu' => 'Меню',
            'Menus' => 'Меню',
            'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 'ID посилання може містити тільки малі літери, цифри, підкреслення і тире.',
            'Parent Link' => 'Батьківське Посилання',
            'Always Visible' => 'Завжди Видимий',
            'No Parent' => 'Немає Батьківського Посилання',
            'Create Menu Link' => 'Створити Поcилання',
            'Update Menu Link' => 'Оновити Поcилання',
            'Menu Links' => 'Поcилання',
        ];
    }
}