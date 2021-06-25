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
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'delay' => 1,
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Add',
                'sub_fields' => [
                    [
                        'label' => 'Image',
                        'name' => 'imagetTab',
                        'type' => 'tab',
                        'placement' => 'left',
                        'endpoint' => 0
                    ],
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                        'mime_types' => 'jpg,jpeg,png',
                    ],
                    [
                        'label' => 'Content',
                        'name' => 'contentTab',
                        'type' => 'tab',
                        'placement' => 'left',
                        'endpoint' => 0
                    ],
                    [
                        'label' => 'Title',
                        'name' => 'titleHtml',
                        'type' => 'text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ]
                ]
            ],
        ]
    ];
}
