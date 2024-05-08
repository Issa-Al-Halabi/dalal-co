<?php

namespace Database\Seeders;

use App\Enums\OrderTypes;
use App\Enums\StatusInputsTypes;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            OrderTypes::abroad => [
                [
                    "title" => "تم استلام الدفعة الأولى و البالغة (الدفعة الأولى)",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "قيمة الدفعة الأولى",
                        ]
                    ]
                ],
                [
                    "title" => "تم تقديم طلبك إلى الجهات الرسمية",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تقدبم الطلب ؟",
                        ]
                    ]
                ],
                [
                    "title" => "الوقت المتوقع لإصدار الفيزا الخاصة بالعاملة هو () يوم عمل",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "عدد الأيام المتوقعة لإصدار الفيزا الخاصة بالعاملة",
                        ]
                    ]
                ],
                [
                    "title" => "يرجى أخذ العلم أن العاملة ستصل إلى مطار دمشق بتاريخ (), يرجى تسديد الدفعة الثانية()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد وصول الخادمة الى مطار دمشق الدولي",
                        ],
                        "input2" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "قيمة الدفعة الثانية (رسوم الدولة)",
                        ]
                    ],
                ],
                [
                    "title" => "تم تحديد موعد الفحص الطبي بتاريخ ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد الفحص الطبي",
                        ]
                    ]
                ],
                [
                    "title" => "يرجى تسديد الدفعة الثالثة و الأخيرة و البالغة ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "قيمة الدفعة الثالثة و الأخيرة",
                        ]
                    ]
                ],
                [
                    "title" => "تم تحديد موعد المطابقة بتاريخ ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد المطابقة",
                        ]
                    ]
                ],
                [
                    "title" => "جاري الانتظار لإصدار الإقامة",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل يتم الانتظار لإصدار الإقامة ؟",
                        ]
                    ]
                ],
                [
                    "title" => "يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "الإنتقال للمرحلة القادمة",
                        ]
                    ]
                ],
                [
                    "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                    ]]
                ],
                [
                    "title" => "تم تجديد إقامة السنة الثانية",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                        ]
                    ]
                ],
                [
                    "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                    ]]
                ],
                [
                    "title" => "تم تجديد إقامة السنة الثالثة",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                        ]
                    ]
                ],
                [
                    "title" => "إن عقد العاملة سينتهي بتاريخ ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "تاريخ إنتهاء العقد الخاص بالعاملة",
                        ]
                    ]
                ],

            ],
            OrderTypes::immediately => [
                [
                    "title" => "تم استلام الدفعة الأولى و البالغة (الدفعة الأولى)",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "قيمة الدفعة الأولى",
                        ]
                    ]
                ],
                [
                    "title" => "تم تحديد موعد للتنازل بالهجرة و الجوازات بتاريخ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "تاريخ موعد التنازل",
                        ]
                    ]
                ],
                [
                    "title" => "تم تحديد موعد المطابقة بتاريخ ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد المطابقة",
                        ]
                    ]
                ],

                [
                    "title" => "تم تحديد موعد توقيع العقد في مديرية الشؤون الاجتماعية و العمل بتاريخ ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد توقيع العقد",
                        ]
                    ]
                ],

                [
                    "title" => "جاري الانتظار لإصدار الإقامة",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "يتم الانتظار لإصدار الإقامة ؟",
                        ]
                    ]
                ],

                [
                    "title" => "يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "مراجعة المكتب ؟",
                        ]
                    ]
                ],

                [
                    "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                    ]]
                ],
                [
                    "title" => "تم تجديد إقامة السنة الثانية",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                        ]
                    ]
                ],
                [
                    "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                    ]]
                ],
                [
                    "title" => "تم تجديد إقامة السنة الثالثة",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                        ]
                    ]
                ],
                [
                    "title" => "إن عقد العاملة سينتهي بتاريخ ()",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "تاريخ إنتهاء العقد الخاص بالعاملة",
                        ]
                    ]
                ],
            ]
        ];
        foreach (array_keys($statuses) as $order_type) {
            foreach ($statuses[$order_type] as $status) {
                Status::create([
                    'order_type' => $order_type,
                    'title' => $status["title"],
                    'specifications' => $status["specifications"],
                ]); 
            }
        }
    }
}
