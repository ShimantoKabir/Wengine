<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class AppConstantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=AppConstantSeeder
     * @return void
     */
    public function run()
    {
        $appConstants = [
            [
                "appConstantName" => "takePerDollar",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => 85.0
            ],
            [
                "appConstantName" => "takePerPound",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => 119.0
            ],
            [
                "appConstantName" => "minimumDeposit",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => 5.0
            ],
            [
                "appConstantName" => "minimumWithdraw",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => 5.0
            ],
            [
                "appConstantName" => "proofSubmissionStatus",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => json_encode(["Pending", "Accepted", "Denied"]),
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => null
            ],
            [
                "appConstantName" => "jobPostingCharge",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => 0.1
            ],
            [
                "appConstantName" => "adCostPlanList",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => json_encode([
                    [
                        "day" => 1,
                        "cost" => 5
                    ],
                    [
                        "day" => 2,
                        "cost" => 10
                    ],
                    [
                        "day" => 3,
                        "cost" => 15
                    ],
                    [
                        "day" => 4,
                        "cost" => 20
                    ]
                ]),
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => null
            ],
            [
                "appConstantName" => "supportInfo",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => json_encode([
                    [
                        "key" => "Mail",
                        "value" => "admin@mail.com"
                    ],
                    [
                        "key" => "Messenger",
                        "value" => "admin.messenger.contact"
                    ],
                    [
                        "key" => "WhatsApp",
                        "value" => "admin.whatsapp.contact"
                    ]
                ]),
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => null
            ],
            [
                "appConstantName" => "quantityOfEarnByRefer",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => 5.0,
                "appConstantDoubleValue" => null
            ],
            [
                "appConstantName" => "referCommission",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => null,
                "appConstantDoubleValue" => 1.5
            ],
            [
                "appConstantName" => "jobApprovalType",
                "appConstantStringValue" => null,
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => 0, // 1 = automatic, 0 = manual
                "appConstantDoubleValue" => null
            ],
            [
                "appConstantName" => "clientDashboardHeadline",
                "appConstantStringValue" => "This is earning application. You can send job, apply new job, withdraw directly to bkash or Rocket.",
                "appConstantJsonValue" => null,
                "appConstantIntegerValue" => 0,
                "appConstantDoubleValue" => null
            ]
        ];

        DB::table('AppConstants')->truncate();

        foreach ($appConstants as $key => $val) {

            DB::table('AppConstants')->insert([
                "appConstantName" => $val['appConstantName'],
                "appConstantStringValue" => $val['appConstantStringValue'],
                "appConstantJsonValue" => $val['appConstantJsonValue'],
                "appConstantIntegerValue" => $val['appConstantIntegerValue'],
                "appConstantDoubleValue" => $val['appConstantDoubleValue']
            ]);
        }
    }
}
