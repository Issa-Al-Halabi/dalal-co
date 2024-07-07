<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Columns
    |--------------------------------------------------------------------------
    */

    'column.name' => 'العنوان',
    'column.guard_name' => 'اسم الحارس',
    'column.roles' => 'الأدوار',
    'column.permissions' => 'الصلاحيات',
    'column.updated_at' => 'تاريخ التحديث',

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    */

    'field.name' => 'العنوان',
    'field.guard_name' => 'اسم الحارس',
    'field.permissions' => 'الصلاحيات',
    'field.select_all.name' => 'تحديد الكل',
    'field.select_all.message' => 'تفعيل كافة الصلاحيات لهذا الدور',

    /*
    |--------------------------------------------------------------------------
    | Navigation & Resource
    |--------------------------------------------------------------------------
    */

    // 'nav.group' => 'إدارة الوصول',
    'nav.group' => '',
    'nav.role.label' => 'الأدوار',
    'nav.role.icon' => 'heroicon-o-shield-check',
    'resource.label.role' => 'دور',
    'resource.label.roles' => 'الأدوار',

    /*
    |--------------------------------------------------------------------------
    | Section & Tabs
    |--------------------------------------------------------------------------
    */

    'section' => 'الأقسام',
    'resources' => 'المصادر',
    'widgets' => 'الأجزاء',
    'pages' => 'الصفحات',
    'custom' => 'صلاحيات مخصصة',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */

    'forbidden' => 'أنت غير مخول، لديك صلاحية للوصول',

    /*
    |--------------------------------------------------------------------------
    | Resource Permissions' Labels
    |--------------------------------------------------------------------------
    */

    'resource_permission_prefixes_labels' => [
        'view' => 'عرض',
        'view_any' => 'عرض الكل',
        'create' => 'إضافة',
        'update' => 'تعديل',
        'delete' => 'حذف',
        'delete_any' => 'حذف الكل',
        'force_delete' => 'إجبار الحذف',
        'force_delete_any' => ' إجبار حذف أي',
        'reorder' => 'إعادة ترتيب',
        'restore' => 'استرجاع',
        'restore_any' => 'استرجاع الكل',
        'replicate' => 'استنساخ',
    ],
];
