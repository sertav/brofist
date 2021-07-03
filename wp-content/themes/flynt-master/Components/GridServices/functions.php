<?php

namespace Flynt\Components\GridServices;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'GridServices',
        'label' => 'Grid: Services',
        'sub_fields' => [
            [
                'label' => __('Заголовок', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
            ],
            [
                'label' => __('Материалы', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Добавить',
                'sub_fields' => [
                    [
                        'label' => 'Изображение',
                        'name' => 'imagetTab',
                        'type' => 'tab',
                        'placement' => 'left',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Изображение', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Разрешённый тип изображений: JPG, PNG.', 'flynt'),
                        'mime_types' => 'jpg,jpeg,png',
                    ],
                    [
                        'label' => 'Контент',
                        'name' => 'contentTab',
                        'type' => 'tab',
                        'placement' => 'left',
                        'endpoint' => 0
                    ],
                    [
                        'label' => 'Заголовок',
                        'name' => 'titleHtml',
                        'type' => 'text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                    [
                        'label' => __('Описание', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                    [
                        'label' => 'Кнопка',
                        'name' => 'buttonTab',
                        'type' => 'tab',
                        'placement' => 'left',
                        'endpoint' => 0
                    ],
                    [
                        'label' => 'Текст кнопки',
                        'name' => 'buttonHtml',
                        'type' => 'text',
                        'instructions' => __('Заполните, чтобы кнопка отобразилась.', 'flynt'),
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                ]
            ],
        ]
    ];
}
