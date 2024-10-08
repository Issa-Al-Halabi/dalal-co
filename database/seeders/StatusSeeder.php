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
            OrderTypes::abroad => $this->getAbroadStatuses($this->getImmediatelyStatuses()),
            OrderTypes::immediately => $this->getImmediatelyStatuses(),
            OrderTypes::renewalOfResidence => $this->getResidenceStatuses(),
            OrderTypes::giveIn => $this->getGiveInStatuses(),
            OrderTypes::deportration => $this->getDeportrationStatuses(),
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

    static public function getAbroadStatuses($immediatelyStatuses): array
    {
        return  array_merge(
            [
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
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تسليم الوثائق",
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
                            "type" => StatusInputsTypes::Date,
                            "label" => "موعد كاتب العدل",
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
                            "label" => "قيمة الرعبون",
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
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم استلام الوثائق",
                        ],
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
                            "type" => StatusInputsTypes::Numeric,
                            "label" => "قيمة الدفعة الثانية",
                        ],
                        "input2" => [
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم تقديم الطلب إلى الجهات الرسمية",
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
                            "label" => "عدد الأيام المتوقعة لإصدار الفيزا الخاصة بالعاملة",
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
                            "type" => StatusInputsTypes::Toggle,
                            "label" => "هل تم صدور الفيزا وقطع التذاكر",
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
                            "type" => StatusInputsTypes::Date,
                            "label" => "تاريخ يوم الوصول العاملة من مطار دمشق الدولي",
                        ]
                    ]
                ],

                // [
                //     "title" => [
                //         "ar" => __("AbroadStatuses.step9.title", [], "ar"),
                //         "en" => __("AbroadStatuses.step9.title", [], "en"),
                //     ],
                //     "description" => [
                //         "ar" => __("AbroadStatuses.step9.description", [], "ar"),
                //         "en" => __("AbroadStatuses.step9.description", [], "en"),
                //     ],
                //     "specifications" => [
                //         "input1" => [
                //             "type" => StatusInputsTypes::Toggle,
                //             "label" => "الإنتقال للمرحلة القادمة",
                //         ]
                //     ]
                // ],
                // [
                //     "title" => [
                //         "ar" => __("AbroadStatuses.step10.title", [], "ar"),
                //         "en" => __("AbroadStatuses.step10.title", [], "en"),
                //     ],
                //     "description" => [
                //         "ar" => __("AbroadStatuses.step10.description", [], "ar"),
                //         "en" => __("AbroadStatuses.step10.description", [], "en"),
                //     ],
                //     "specifications" => ["input1" => [
                //         "type" => StatusInputsTypes::Date,
                //         "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثانية",
                //     ]]
                // ],
                // [
                //     "title" => [
                //         "ar" => __("AbroadStatuses.step11.title", [], "ar"),
                //         "en" => __("AbroadStatuses.step11.title", [], "en"),
                //     ],
                //     "description" => [
                //         "ar" => __("AbroadStatuses.step11.description", [], "ar"),
                //         "en" => __("AbroadStatuses.step11.description", [], "en"),
                //     ],
                //     "specifications" => [
                //         "input1" => [
                //             "type" => StatusInputsTypes::Toggle,
                //             "label" => "هل تم تجديد إقامة السنة الثانية ؟",
                //         ]
                //     ]
                // ],
                // [
                //     "title" => [
                //         "ar" => __("AbroadStatuses.step12.title", [], "ar"),
                //         "en" => __("AbroadStatuses.step12.title", [], "en"),
                //     ],
                //     "description" => [
                //         "ar" => __("AbroadStatuses.step12.description", [], "ar"),
                //         "en" => __("AbroadStatuses.step12.description", [], "en"),
                //     ],
                //     "specifications" => ["input1" => [
                //         "type" => StatusInputsTypes::Date,
                //         "label" => "تاريخ إنتهاء الإقامة الخاصة بالعاملة للسنة الثالثة",
                //     ]]
                // ],
                // [
                //     "title" => [
                //         "ar" => __("AbroadStatuses.step13.title", [], "ar"),
                //         "en" => __("AbroadStatuses.step13.title", [], "en"),
                //     ],
                //     "description" => [
                //         "ar" => __("AbroadStatuses.step13.description", [], "ar"),
                //         "en" => __("AbroadStatuses.step13.description", [], "en"),
                //     ],
                //     "specifications" => [
                //         "input1" => [
                //             "type" => StatusInputsTypes::Toggle,
                //             "label" => "هل تم تجديد إقامة السنة الثالثة ؟",
                //         ]
                //     ]
                // ],
                // [
                //     "title" => [
                //         "ar" => __("AbroadStatuses.step14.title", [], "ar"),
                //         "en" => __("AbroadStatuses.step14.title", [], "en"),
                //     ],
                //     "description" => [
                //         "ar" => __("AbroadStatuses.step14.description", [], "ar"),
                //         "en" => __("AbroadStatuses.step14.description", [], "en"),
                //     ],
                //     "specifications" => [
                //         "input1" => [
                //             "type" => StatusInputsTypes::Date,
                //             "label" => "تاريخ إنتهاء العقد الخاص بالعاملة",
                //         ]
                //     ]
                // ],


            ],
            $immediatelyStatuses
        );
    }

    static public function getImmediatelyStatuses(): array
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
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل استلم الكفيل العاملة ؟؟",
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
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "تأكيد انتهاء اجراءات التحاليل الطبية للعاملة",
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
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "تأكيد انتهاء إجراء البصمة للعاملة في مديرية الشؤون الاجتماعية والعمل",
                    ]
                ]
            ],

            // [
            //     "title" => [
            //         "ar" => __("immediately_statuses.step4.title", [], "ar"),
            //         "en" => __("immediately_statuses.step4.title", [], "en"),
            //     ],
            //     "description" => [
            //         "ar" => __("immediately_statuses.step4.description", [], "ar"),
            //         "en" => __("immediately_statuses.step4.description", [], "en"),
            //     ],
            //     "specifications" => [
            //         "input1" => [
            //             "type" => StatusInputsTypes::Toggle,
            //             "label" => "هل تم تسليم المبلغ المتفق عليه بين المكتب والكفيل",
            //         ]
            //     ]
            // ],

            // [
            //     "title" => [
            //         "ar" => __("immediately_statuses.step5.title", [], "ar"),
            //         "en" => __("immediately_statuses.step5.title", [], "en"),
            //     ],
            //     "description" => [
            //         "ar" => __("immediately_statuses.step5.description", [], "ar"),
            //         "en" => __("immediately_statuses.step5.description", [], "en"),
            //     ],
            //     "specifications" => [
            //         "input1" => [
            //             "type" => StatusInputsTypes::Toggle,
            //             "label" => "هل تم صدور نتيجة التحاليل",
            //         ]
            //     ]
            // ],

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
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة ايصالات الدولة (المالي - التجاري - المركزي)",
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
                "specifications" => ["input1" => [
                    "type" => StatusInputsTypes::Toggle,
                    "label" => "انتهاء تقديم الأوراق للمديرية",
                ]]
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
                        "label" => "تأكيد صدور موافقة الوزارة الشؤون الاجتماعية والعمل ؟",
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
                    "label" => "تاريخ موعد المطابقة بالهجرة",
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
                        "label" => "هل تم استلام بطاقة الإقامة",
                    ],
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
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تسليم الكفيل بطاقة العمل",
                    ]
                ]
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
                        "label" => "هل تم تسليم الكفيل الجواز والبطاقات",
                    ]
                ]
            ],
        ];
    }

    static public function getDeportrationStatuses(): array
    {
        return [
            [
                "title" => [
                    "ar" => __("DeportrationStatuses.step1.title", [], "ar"),
                    "en" => __("DeportrationStatuses.step1.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("DeportrationStatuses.step1.description", [], "ar"),
                    "en" => __("DeportrationStatuses.step1.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تسليم المكتب الجواز والبطاقات ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("DeportrationStatuses.step2.title", [], "ar"),
                    "en" => __("DeportrationStatuses.step2.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("DeportrationStatuses.step2.description", [], "ar"),
                    "en" => __("DeportrationStatuses.step2.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تسليم المكتب سندين أقامه لبراءه الذمة ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("DeportrationStatuses.step3.title", [], "ar"),
                    "en" => __("DeportrationStatuses.step3.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("DeportrationStatuses.step3.description", [], "ar"),
                    "en" => __("DeportrationStatuses.step3.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة المبلغ",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("DeportrationStatuses.step4.title", [], "ar"),
                    "en" => __("DeportrationStatuses.step4.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("DeportrationStatuses.step4.description", [], "ar"),
                    "en" => __("DeportrationStatuses.step4.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد السفر",
                    ]
                ]
            ],
        ];
    }
    static public function getResidenceStatuses(): array
    {
        return [
            [
                "title" => [
                    "ar" => __("residence_statuses.step1.title", [], "ar"),
                    "en" => __("residence_statuses.step1.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step1.description", [], "ar"),
                    "en" => __("residence_statuses.step1.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم استلام الجوازات والبطاقات ؟",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("residence_statuses.step2.title", [], "ar"),
                    "en" => __("residence_statuses.step2.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step2.description", [], "ar"),
                    "en" => __("residence_statuses.step2.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة المبلغ المتفق عليه",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("residence_statuses.step3.title", [], "ar"),
                    "en" => __("residence_statuses.step3.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step3.description", [], "ar"),
                    "en" => __("residence_statuses.step3.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تسليم الوثائق ؟",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("residence_statuses.step4.title", [], "ar"),
                    "en" => __("residence_statuses.step4.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step4.description", [], "ar"),
                    "en" => __("residence_statuses.step4.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة الايصالات",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("residence_statuses.step5.title", [], "ar"),
                    "en" => __("residence_statuses.step5.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step5.description", [], "ar"),
                    "en" => __("residence_statuses.step5.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تقديم الأوراق في مديرية العمل ؟",
                    ]
                ]
            ], [
                "title" => [
                    "ar" => __("residence_statuses.step6.title", [], "ar"),
                    "en" => __("residence_statuses.step6.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step6.description", [], "ar"),
                    "en" => __("residence_statuses.step6.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم صدور موافقة وزارة الشؤون الاجتماعية والعمل ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("residence_statuses.step7.title", [], "ar"),
                    "en" => __("residence_statuses.step7.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step7.description", [], "ar"),
                    "en" => __("residence_statuses.step7.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد المطابقه بالهجرة",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("residence_statuses.step8.title", [], "ar"),
                    "en" => __("residence_statuses.step8.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step8.description", [], "ar"),
                    "en" => __("residence_statuses.step8.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم استلام المكتب بطاقة الإقامة ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("residence_statuses.step9.title", [], "ar"),
                    "en" => __("residence_statuses.step9.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step9.description", [], "ar"),
                    "en" => __("residence_statuses.step9.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم استلام المكتب بطاقة العمل ؟",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("residence_statuses.step10.title", [], "ar"),
                    "en" => __("residence_statuses.step10.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("residence_statuses.step10.description", [], "ar"),
                    "en" => __("residence_statuses.step10.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تسليم الكفيل الجواز والبطاقات ؟",
                    ],
                    "input2" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "يرجى تحديد موعد انتهاء الاقامة الجديد",
                    ],
                ]
            ],
        ];
    }
    static public function getGiveInStatuses(): array
    {
        return [
            [
                "title" => [
                    "ar" => __("give_in_statuses.step1.title", [], "ar"),
                    "en" => __("give_in_statuses.step1.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step1.description", [], "ar"),
                    "en" => __("give_in_statuses.step1.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "تاريخ ارجاع العاملة للمكتب",
                    ]
                ]
            ],

            [
                "title" => [
                    "ar" => __("give_in_statuses.step2.title", [], "ar"),
                    "en" => __("give_in_statuses.step2.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step2.description", [], "ar"),
                    "en" => __("give_in_statuses.step2.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "مبلغ الإقامة لدى المستفيد الأول والرواتب",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("give_in_statuses.step3.title", [], "ar"),
                    "en" => __("give_in_statuses.step3.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step3.description", [], "ar"),
                    "en" => __("give_in_statuses.step3.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم استلام المكتب الوثائق (جواز السفر - بطاقة العمل – بطاقة الإقامة ) من المستفيد الأول ؟",
                    ]
                ]
            ], [
                "title" => [
                    "ar" => __("give_in_statuses.step4.title", [], "ar"),
                    "en" => __("give_in_statuses.step4.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step4.description", [], "ar"),
                    "en" => __("give_in_statuses.step4.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "طلب سندات إقامة من الكفيل الجديد عدد 3 وصورة هوية",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("give_in_statuses.step5.title", [], "ar"),
                    "en" => __("give_in_statuses.step5.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step5.description", [], "ar"),
                    "en" => __("give_in_statuses.step5.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Date,
                        "label" => "موعد التنازل للكفيل الجديد",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("give_in_statuses.step6.title", [], "ar"),
                    "en" => __("give_in_statuses.step6.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step6.description", [], "ar"),
                    "en" => __("give_in_statuses.step6.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Numeric,
                        "label" => "قيمة المبلغ",
                    ]
                ]
            ],
            [
                "title" => [
                    "ar" => __("give_in_statuses.step7.title", [], "ar"),
                    "en" => __("give_in_statuses.step7.title", [], "en"),
                ],
                "description" => [
                    "ar" => __("give_in_statuses.step7.description", [], "ar"),
                    "en" => __("give_in_statuses.step7.description", [], "en"),
                ],
                "specifications" => [
                    "input1" => [
                        "type" => StatusInputsTypes::Toggle,
                        "label" => "هل تم تسليم الكفيل الجديد الوثائق ؟",
                    ]
                ]
            ],
        ];
    }
}
