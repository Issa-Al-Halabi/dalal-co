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
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الأولى",
                    ]]
                ],
                [
                    "title" => "􀀏􀀁 الرسمية 􀀁 الجهات 􀀁 إلى 􀀁 طلبك 􀀁 تقديم 􀀁 تم",
                    "specifications" => []
                ],
                [
                    "title" => "بالعاملة 􀀁 الخاصة 􀀁 الفيزا 􀀁 لإصدار 􀀁 المتوقع 􀀁 الوقت",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "عدد الأيام المتوقعة لإصدار الفيزا الخاصة بالعاملة",
                        ]
                    ]
                ],
                [
                    "title" => "􀀁􀀉 الدولة 􀀁 رسوم 􀀊􀀁 الثانية 􀀁 الدفعة 􀀁 تسديد 􀀁 يرجى 􀀁 ،􀁪􀁪􀀐􀁪􀁪􀀐􀁪􀁪􀁪􀀁 بتاريخ 􀀁 دمشق 􀀁 مطار 􀀁 إلى 􀀁 ستصل 􀀁 العاملة 􀀁 أن 􀀁 العلم 􀀁 أخذ 􀀁 يرجى",
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
                    "title" => "ريخ 􀀁 الطبي 􀀁 الفحص 􀀁 موعد 􀀁 تحديد 􀀁 تم",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد الفحص الطبي",
                        ]
                    ]
                ],
                [
                    "title" => "البالغة 􀀁 و􀀁 الأخيرة 􀀁 و􀀁 الثالثة 􀀁 الدفعة 􀀁 تسديد 􀀁 يرج",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "قيمة الدفعةالثالثة و الأخيرة",
                        ]
                    ]
                ],
                [
                    "title" => "بتاريخ 􀀁 المطابقة 􀀁 موعد 􀀁 تحديد 􀀁 تم",
                    "specifications" => [
                        "input1" => [
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد المطابقة",
                        ]
                    ]
                ],
                [
                    "title" => "􀀏􀀁 الإقامة 􀀁 لإصدار 􀀁 الانتظار 􀀁 ج",
                    "specifications" => []
                ],
                [
                    "title" => "􀀏􀀁 العمل 􀀁 تصريح 􀀁 و􀀁 السفر 􀀁 جواز 􀀁 و􀀁 الإقامة 􀀁 على 􀀁 للحصول 􀀁 المكتب 􀀁 مراجعة 􀀁 يرج",
                    "specifications" => []
                ],
                [
                    "title" => "􀀏􀀁 للتجديد 􀀁 المكتب 􀀁 مراجعة 􀀁 يرجى 􀀁 ،􀀁􀁪􀁪􀀐􀁪􀁪􀀐􀁪􀁪􀀁 بتاريخ 􀀁 ستنتهي 􀀁􀀉 كنية 􀀁 و􀀁 اسم 􀀊􀀁 بالعاملة 􀀁 الخاصة 􀀁 الإقامة 􀀁 صلاحية 􀀁 إن",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                    ]]
                ],
                [
                    "title" => "􀀁 الثانية 􀀁 السنة 􀀁 إقامة 􀀁 تجديد 􀀁 ت",
                    "specifications" => []
                ],
                [
                    "title" => "􀀏􀀁 للتجديد 􀀁 المكتب 􀀁 مراجعة 􀀁 يرجى 􀀁 ،􀀁􀁪􀁪􀀐􀁪􀁪􀀐􀁪􀁪􀀁 بتاريخ 􀀁 ستنتهي 􀀁􀀉 كنية 􀀁 و􀀁 اسم 􀀊􀀁 بالعاملة 􀀁 الخاصة 􀀁 الإقامة 􀀁 صلاحية 􀀁 إ",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                    ]]
                ],
                [
                    "title" => "􀁪􀁪􀀐􀁪􀁪􀀐􀀁􀁪􀁪􀀁 بتاريخ 􀀁 سينتهي 􀀁􀀉 كنية 􀀁 و􀀁 اسم 􀀊􀀁 العاملة 􀀁 عقد 􀀁 إ",
                    "specifications" => []
                ],
                [
                    "title" => "بنجاح 􀀁 الثالثة 􀀁 السنة 􀀁 إقامة 􀀁 تجديد 􀀁 ت",
                    "specifications" => ["input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ إنتهاء العقد الخاص بالعاملة",
                    ]]
                ],
            ],
            OrderTypes::immediately => []
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
