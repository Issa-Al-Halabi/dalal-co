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
            OrderTypes::abroad => $this->getAbroadStatuses(),
            OrderTypes::immediately => $this->getImmediatelyStatuses()
        ];
        foreach (array_keys($statuses) as $order_type) {
            foreach ($statuses[$order_type] as $status) {
                Status::create([
                    'order_type' => $order_type,
                    'title' => $status["title"],
                    'description' => $status["description"],
                    'specifications' => $status["specifications"],
                ]);
            }
        }
    }

    public function getAbroadStatuses(): array
    {
        return [
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step1.title", [], "ar"),
                    "en" => __("AbroadStatuses.step1.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step1.description", [], "ar"),
                    "en" => __("AbroadStatuses.step1.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الأولى",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step2.title", [], "ar"),
                    "en" => __("AbroadStatuses.step2.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step2.description", [], "ar"),
                    "en" => __("AbroadStatuses.step2.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تقدبم الطلب ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step3.title", [], "ar"),
                    "en" => __("AbroadStatuses.step3.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step3.description", [], "ar"),
                    "en" => __("AbroadStatuses.step3.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "عدد الأيام المتوقعة لإصدار الفيزا الخاصة بالعاملة",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step4.title", [], "ar"),
                    "en" => __("AbroadStatuses.step4.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step4.description", [], "ar"),
                    "en" => __("AbroadStatuses.step4.description", [], "en"),
                ],
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
                "title" => [
                    "ar" => __("AbroadStatuses.step5.title", [], "ar"),
                    "en" => __("AbroadStatuses.step5.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step5.description", [], "ar"),
                    "en" => __("AbroadStatuses.step5.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد الفحص الطبي",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step6.title", [], "ar"),
                    "en" => __("AbroadStatuses.step6.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step6.description", [], "ar"),
                    "en" => __("AbroadStatuses.step6.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الثالثة و الأخيرة",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step7.title", [], "ar"),
                    "en" => __("AbroadStatuses.step7.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step7.description", [], "ar"),
                    "en" => __("AbroadStatuses.step7.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد المطابقة",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step8.title", [], "ar"),
                    "en" => __("AbroadStatuses.step8.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step8.description", [], "ar"),
                    "en" => __("AbroadStatuses.step8.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل يتم الانتظار لإصدار الإقامة ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step9.title", [], "ar"),
                    "en" => __("AbroadStatuses.step9.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step9.description", [], "ar"),
                    "en" => __("AbroadStatuses.step9.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "الإنتقال للمرحلة القادمة",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step10.title", [], "ar"),
                    "en" => __("AbroadStatuses.step10.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step10.description", [], "ar"),
                    "en" => __("AbroadStatuses.step10.description", [], "en"),
                ],
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                ]]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step11.title", [], "ar"),
                    "en" => __("AbroadStatuses.step11.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step11.description", [], "ar"),
                    "en" => __("AbroadStatuses.step11.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step12.title", [], "ar"),
                    "en" => __("AbroadStatuses.step12.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step12.description", [], "ar"),
                    "en" => __("AbroadStatuses.step12.description", [], "en"),
                ],
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                ]]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step13.title", [], "ar"),
                    "en" => __("AbroadStatuses.step13.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step13.description", [], "ar"),
                    "en" => __("AbroadStatuses.step13.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("AbroadStatuses.step14.title", [], "ar"),
                    "en" => __("AbroadStatuses.step14.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("AbroadStatuses.step14.description", [], "ar"),
                    "en" => __("AbroadStatuses.step14.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء العقد الخاص بالعاملة",
                    ]
                ]
            ],

        ];
    }

    public function getImmediatelyStatuses(): array
    {
        return [
            [
                "title" => [
                    "ar" => __("immediately_statuses.step1.title", [], "ar"),
                    "en" => __("immediately_statuses.step1.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step1.description", [], "ar"),
                    "en" => __("immediately_statuses.step1.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الأولى",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("immediately_statuses.step2.title", [], "ar"),
                    "en" => __("immediately_statuses.step2.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step2.description", [], "ar"),
                    "en" => __("immediately_statuses.step2.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ موعد التنازل",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("immediately_statuses.step3.title", [], "ar"),
                    "en" => __("immediately_statuses.step3.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step3.description", [], "ar"),
                    "en" => __("immediately_statuses.step3.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد المطابقة",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("immediately_statuses.step4.title", [], "ar"),
                    "en" => __("immediately_statuses.step4.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step4.description", [], "ar"),
                    "en" => __("immediately_statuses.step4.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد توقيع العقد",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("immediately_statuses.step5.title", [], "ar"),
                    "en" => __("immediately_statuses.step5.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step5.description", [], "ar"),
                    "en" => __("immediately_statuses.step5.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "يتم الانتظار لإصدار الإقامة ؟",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("immediately_statuses.step6.title", [], "ar"),
                    "en" => __("immediately_statuses.step6.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step6.description", [], "ar"),
                    "en" => __("immediately_statuses.step6.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "مراجعة المكتب ؟",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("immediately_statuses.step7.title", [], "ar"),
                    "en" => __("immediately_statuses.step7.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step7.description", [], "ar"),
                    "en" => __("immediately_statuses.step7.description", [], "en"),
                ],
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                ]]
            ],
            [
                "title" => [
                    "ar" => __("immediately_statuses.step8.title", [], "ar"),
                    "en" => __("immediately_statuses.step8.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step8.description", [], "ar"),
                    "en" => __("immediately_statuses.step8.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("immediately_statuses.step9.title", [], "ar"),
                    "en" => __("immediately_statuses.step9.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step9.description", [], "ar"),
                    "en" => __("immediately_statuses.step9.description", [], "en"),
                ],
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                ]]
            ],
            [
                "title" => [
                    "ar" => __("immediately_statuses.step10.title", [], "ar"),
                    "en" => __("immediately_statuses.step10.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step10.description", [], "ar"),
                    "en" => __("immediately_statuses.step10.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("immediately_statuses.step11.title", [], "ar"),
                    "en" => __("immediately_statuses.step11.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("immediately_statuses.step11.description", [], "ar"),
                    "en" => __("immediately_statuses.step11.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء العقد الخاص بالعاملة",
                    ]
                ]
            ]
        ];
    }
}
