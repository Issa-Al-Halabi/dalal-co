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
                "title" => "تم استلام الدفعة الأولى و البالغة (الدفعة الأولى)",
                "description" => "<div>
                                تم استلام الدفعة الأولى و البالغة (input1) ل.س
                            يرجى تزويدنا بالوثائق التالية للمباشرة الفورية بطلب الاستقدام الخاص بكم:
                            <ul>
                                <li>صورة هوية</li>
                                <li>سند إقامة مصدّق من المختار و البلدية (أربع نسخ) </li>
                                <li>توقيع سند التوكيل لإجراء المعاملة بالنيابة عنكم (سيتم التواصل معكم من قبل القسم القانوني)</li>
                                <li>توقيع عقد الأستخدام (سيتم التواصل معكم من قبل القسم القانوني)</li>
                            </ul>
                </div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الأولى",
                    ]
                ]
            ],
            [
                "title" => "تم تقديم طلبك إلى الجهات الرسمية",
                "description" => "<div>تم تقديم طلبك إلى الجهات الرسمية</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تقدبم الطلب ؟",
                    ]
                ]
            ],
            [
                "title" => "الوقت المتوقع لإصدار الفيزا الخاصة بالعاملة هو () يوم عمل",
                "description" => "<div>الوقت المتوقع لإصدار الفيزا الخاصة بالعاملة هو (input1) يوم عمل</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "عدد الأيام المتوقعة لإصدار الفيزا الخاصة بالعاملة",
                    ]
                ]
            ],
            [
                "title" => "يرجى أخذ العلم أن العاملة ستصل إلى مطار دمشق بتاريخ (), يرجى تسديد الدفعة الثانية()",
                "description" => "<div> يرجى أخذ العلم أن العاملة ستصل إلى مطار دمشق بتاريخ (input1), يرجى تسديد الدفعة الثانية البالغة (input2) ل.س</div>",
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
                "description" => "<div>تم تحديد موعد الفحص الطبي بتاريخ (input1)</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد الفحص الطبي",
                    ]
                ]
            ],
            [
                "title" => "يرجى تسديد الدفعة الثالثة و الأخيرة و البالغة ()",
                "description" => "<div> يرجى تسديد الدفعة الثالثة و الأخيرة و البالغة (input1) ل.س</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الثالثة و الأخيرة",
                    ]
                ]
            ],
            [
                "title" => "تم تحديد موعد المطابقة بتاريخ ()",
                "description" => "<div>تم تحديد موعد المطابقة بتاريخ (input1)</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد المطابقة",
                    ]
                ]
            ],
            [
                "title" => "جاري الانتظار لإصدار الإقامة",
                "description" => "<div> جاري الانتظار لإصدار الإقامة</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل يتم الانتظار لإصدار الإقامة ؟",
                    ]
                ]
            ],
            [
                "title" => "يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل",
                "description" => "<div>يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "الإنتقال للمرحلة القادمة",
                    ]
                ]
            ],
            [
                "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                "description" => "<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>",
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                ]]
            ],
            [
                "title" => "تم تجديد إقامة السنة الثانية",
                "description" => "<div>تم تجديد إقامة السنة الثانية بنجاح</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                    ]
                ]
            ],
            [
                "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                "description" => "<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>",
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                ]]
            ],
            [
                "title" => "تم تجديد إقامة السنة الثالثة",
                "description" => "<div>تم تجديد إقامة السنة الثالثة بنجاح</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                    ]
                ]
            ],
            [
                "title" => "إن عقد العاملة سينتهي بتاريخ ()",
                "description" => "<div>
                                    إن عقد العاملة سينتهي بتاريخ (input1)
                                يرجى مراجعة المكتب للعمل على استصدار الوثائق التالية :
                                    <ul>
                                        <li>براءة ذمة</li>
                                        <li> انفكاك من التأمينات</li>
                                    </ul>
                                </div>",
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
                "title" => "تم استلام الدفعة الأولى و البالغة (الدفعة الأولى)",
                "description" => "<div>
                                    تم استلام الدفعة الأولى و البالغة (input1) ل.س
                                يرجى تزويدنا بالوثائق التالية للمباشرة الفورية بطلب التنازل الخاص بكم:
                                <ul>
                                    <li>صورة هوية</li>
                                    <li>سند إقامة مصدّق من المختار و البلدية (نسختين) </li>
                                    <li>توقيع سند التوكيل لإجراء معاملة التنازل (سيتم التواصل معكم من قبل القسم القانوني)</li>
                                    <li>توقيع العقد (سيتم التواصل معكم من قبل القسم القانوني)</li>
                                </ul>
                            </div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الدفعة الأولى",
                    ]
                ]
            ],
            [
                "title" => "تم تحديد موعد للتنازل بالهجرة و الجوازات بتاريخ()",
                "description" => "<div>تم تحديد موعد للتنازل بالهجرة و الجوازات بتاريخ (input1)</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ موعد التنازل",
                    ]
                ]
            ],
            [
                "title" => "تم تحديد موعد المطابقة بتاريخ ()",
                "description" => "<div> تم تحديد موعد المطابقة بتاريخ (input1)</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد المطابقة",
                    ]
                ]
            ],

            [
                "title" => "تم تحديد موعد توقيع العقد في مديرية الشؤون الاجتماعية و العمل بتاريخ ()",
                "description" => "<div> تم تحديد موعد توقيع العقد في مديرية الشؤون الاجتماعية و العمل بتاريخ (input1)</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد توقيع العقد",
                    ]
                ]
            ],

            [
                "title" => "جاري الانتظار لإصدار الإقامة",
                "description" => "<div>جاري الانتظار لإصدار الإقامة</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "يتم الانتظار لإصدار الإقامة ؟",
                    ]
                ]
            ],

            [
                "title" => "يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل",
                "description" => "<div>يرجى مراجعة المكتب للحصول على الإقامة و جواز السفر و تصريح العمل</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "مراجعة المكتب ؟",
                    ]
                ]
            ],

            [
                "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                "description" => "<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>",
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                ]]
            ],
            [
                "title" => "تم تجديد إقامة السنة الثانية",
                "description" => "<div>تم تجديد إقامة السنة الثانية بنجاح</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                    ]
                ]
            ],
            [
                "title" => "إن صلاحية الإقامة الخاصة بالعاملة ستنتهي بتاريخ ()",
                "description" => "<div>إن صلاحية الإقامة الخاصة بالعاملة (name) ستنتهي بتاريخ (input1) يرجى مراجعة المكتب للتجدبد</div>",
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Date,
                    "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                ]]
            ],
            [
                "title" => "تم تجديد إقامة السنة الثالثة",
                "description" => "<div>تم تجديد إقامة السنة الثالثة بنجاح</div>",
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                    ]
                ]
            ],
            [
                "title" => "إن عقد العاملة سينتهي بتاريخ ()",
                "description" => "<div>
                                إن عقد العاملة سينتهي بتاريخ (input1)
                            يرجى مراجعة المكتب للعمل على استصدار الوثائق التالية :
                                <ul>
                                    <li>براءة ذمة</li>
                                    <li> انفكاك من التأمينات</li>
                                </ul>
                            </div>",
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
