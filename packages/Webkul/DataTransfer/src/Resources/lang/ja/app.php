<?php

return [
    'importers'  => [
        'products'  => [
            'title'      => '製品',

            'validation' => [
                'errors' => [
                    'duplicate-url-key'        => 'URLキー：\'%s\'はSKU：\'%s\'を持つアイテムにすでに生成されています。',
                    'invalid-attribute-family' => '属性ファミリー列の値が無効です（属性ファミリーが存在しませんか？）',
                    'invalid-type'             => '製品タイプが無効またはサポートされていません',
                    'sku-not-found'            => '指定されたSKUの製品が見つかりません',
                ],
            ],
        ],

        'customers' => [
            'title'      => '顧客',

            'validation' => [
                'errors' => [
                    'duplicate-email'        => 'メールアドレス：\'%s\'はインポートファイル内で複数回見つかりました。',
                    'duplicate-phone'        => '電話番号：\'%s\'はインポートファイル内で複数回見つかりました。',
                    'invalid-customer-group' => '顧客グループが無効またはサポートされていません',
                    'email-not-found'        => 'メールアドレス：\'%s\'はシステム内で見つかりませんでした。',
                ],
            ],
        ],
    ],

    'validation' => [
        'errors' => [
            'column-empty-headers' => '列番号 "%s" のヘッダーが空です。',
            'column-name-invalid'  => '無効な列名： "%s"。',
            'column-not-found'     => '必要な列が見つかりません： %s。',
            'column-numbers'       => '列数がヘッダーの行数に対応していません。',
            'invalid-attribute'    => 'ヘッダーに無効な属性が含まれています： "%s"。',
            'system'               => '予期しないシステムエラーが発生しました。',
            'wrong-quotes'         => 'まっすぐな引用符の代わりにカーリー引用符が使用されています。',
        ],
    ],
];