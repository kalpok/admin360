<?php

return [
    'height' => 300,
    'removeButtons' => 'Smiley,Iframe',
    'toolbar' => [
        [
            'name' => 'row1',
            'items' => [
                'Source', '-',
                "Undo","Redo",'-',
                "PasteText","PasteFromWord",'-',
                "Maximize",'-',
                'NumberedList', 'BulletedList', '-',
                'JustifyRight', 'JustifyCenter', 'JustifyLeft', 'JustifyBlock',
                '-', 'BidiRtl', 'BidiLtr', '-',
                'Bold', 'Italic', '-',
                'TextColor', 'BGColor', '-'
            ],
        ],
        [
            'name' => 'row2',
            'items' => [
                'Image', '-',
                'Link', 'Unlink', 'Anchor', '-',
                'Table', '-',
                'FontSize', '-',
                'Blockquote', '-','Format'
            ],
        ],
    ]
];
