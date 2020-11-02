<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarMenuController extends Controller
{
    public function index(Request $request)
    {
        return [
            [
                'label' => 'DASHBOARD',
                'icon' => 'el-icon-s-home',
                'path' => '/'
            ],
            [
                'label' => 'PLANT',
                'icon' => 'el-icon-setting',
                'path' => 'plant',
                'children' => [
                    [
                        'label' => 'Lead Time B/D Unit',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/plant/lead-time-bd-unit',
                    ],
                    [
                        'label' => 'Lead Time Daily Check',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/plant/lead-time-daily-check',
                    ],
                    [
                        'label' => 'Breakdown PCR',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/plant/breakdown-pcr',
                    ],
                    [
                        'label' => 'Daily Check',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/plant/daily-check',
                    ],
                    [
                        'label' => 'Master Data',
                        'icon' => 'el-icon-coin',
                        'path' => '-',
                        'children' => [
                            [
                                'label' => 'Breakdown Statuses',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/breakdown-status'
                            ],
                            [
                                'label' => 'Breakdown Categories',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/breakdown-category'
                            ],
                            [
                                'label' => 'Component Criterias',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/component-criteria'
                            ],
                            [
                                'label' => 'Daily Check Setting',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/daily-check-setting'
                            ],
                            [
                                'label' => 'EGI',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/egi'
                            ],
                            [
                                'label' => 'Locations',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/location'
                            ],
                            [
                                'label' => 'Unit Owners',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/owner'
                            ],
                            [
                                'label' => 'Unit',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/unit'
                            ],
                            [
                                'label' => 'Unit Categories',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/plant/master-data/unit-category'
                            ],
                        ]
                    ]
                ]
            ],
            [
                'label' => 'SM',
                'icon' => 'el-icon-location',
                'path' => 'sm',
                'children' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/sm/dashboard',
                    ],
                    [
                        'label' => 'Flow Meter',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/sm/flow-meter',
                    ],
                    [
                        'label' => 'Fuel Refill',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/sm/fuel-refill',
                    ],
                    [
                        'label' => 'Warning Parts',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/sm/warning-parts',
                    ],
                    [
                        'label' => 'Master Data',
                        'icon' => 'el-icon-coin',
                        'path' => '/sm/master-data',
                        'children' => [
                            [
                                'label' => 'Fuel Tanks',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/sm/fuel-tanks',
                            ],
                            [
                                'label' => 'Fuel Tanks Tera Table',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/sm/fuel-tanks-tera-table',
                            ],
                            [
                                'label' => 'SADP',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/sm/sadp',
                            ],
                        ]
                    ],
                ]
            ],
            [
                'label' => 'OPERATION',
                'icon' => 'el-icon-s-tools',
                'path' => '/',
                'children' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/dashboard',
                    ],
                    [
                        'label' => 'Productivity',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/productvity',
                    ],
                    [
                        'label' => 'Active Barging',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/active-barging',
                    ],
                    [
                        'label' => 'Breakdown OCR',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/breakdown-ocr',
                    ],
                    [
                        'label' => 'Stock Dumping Summary',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/stock-dumping-summary',
                    ],
                    [
                        'label' => 'Stock Dumping',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/stock-dumping',
                    ],
                    [
                        'label' => 'Port Activity',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/port-activity',
                    ],
                    [
                        'label' => 'Barging',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/barging',
                    ],
                    [
                        'label' => 'Dwelling Time',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/dwelling-time',
                    ],
                    [
                        'label' => 'Stock Balanced',
                        'icon' => 'el-icon-arrow-right',
                        'path' => '/operation/stock-balanced',
                    ],
                    [
                        'label' => 'Master Data',
                        'icon' => 'el-icon-coin',
                        'path' => 'sm/master-data',
                        'children' => [
                            [
                                'label' => 'Area',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/area',
                            ],
                            [
                                'label' => 'Barges',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/barges',
                            ],
                            [
                                'label' => 'Barging Plan',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/barging-plan',
                            ],
                            [
                                'label' => 'Buyers',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/buyer',
                            ],
                            [
                                'label' => 'Contractor',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/contractor',
                            ],
                            [
                                'label' => 'Customer',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/customer',
                            ],
                            [
                                'label' => 'Default Material',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/default-material',
                            ],
                            [
                                'label' => 'Jetties',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/jetty',
                            ],
                            [
                                'label' => 'Productivity Plan',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/productivity-plan',
                            ],
                            [
                                'label' => 'Seam',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/seam',
                            ],
                            [
                                'label' => 'Subcont',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/subcont',
                            ],
                            [
                                'label' => 'Subcont Unit',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/subcont-unit',
                            ],
                            [
                                'label' => 'Tugboat',
                                'icon' => 'el-icon-arrow-right',
                                'path' => '/operation/master-data/tugboat',
                            ],
                        ]
                    ],
                ]
            ],
            [
                'label' => 'HCGS',
                'icon' => 'el-icon-user',
                'path' => 'hcgs'
            ],
            [
                'label' => 'SHE',
                'icon' => 'el-icon-first-aid-kit',
                'path' => 'she'
            ],
            [
                'label' => 'FAT',
                'icon' => 'el-icon-money',
                'path' => 'fat'
            ],
            [
                'label' => 'ADMINISTRATION',
                'icon' => 'el-icon-s-operation',
                'path' => 'adminstration',
                'children' => [
                    [
                        'label' => 'User',
                        'icon' => 'el-icon-user',
                        'path' => 'user'
                    ]
                ]
            ]
        ];
    }
}
