<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataFeed;

class DashboardTableSeeder extends Seeder
{

    protected $data = [
        [
            'type' => 1,
            'labels' => [
                '12-01-2020', '01-01-2021', '02-01-2021',
                '03-01-2021', '04-01-2021', '05-01-2021',
                '06-01-2021', '07-01-2021', '08-01-2021',
                '09-01-2021', '10-01-2021', '11-01-2021',
                '12-01-2021', '01-01-2022', '02-01-2022',
                '03-01-2022', '04-01-2022', '05-01-2022',
                '06-01-2022', '07-01-2022', '08-01-2022',
                '09-01-2022', '10-01-2022', '11-01-2022',
                '12-01-2022', '01-01-2023',
            ],
            'data' => [
                732, 610, 610, 504, 504, 504, 349,
                349, 504, 342, 504, 610, 391, 192,
                154, 273, 191, 191, 126, 263, 349,
                252, 423, 622, 470, 532,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 1,
            'labels' => null,
            'data' => [
                532, 532, 532, 404, 404, 314, 314,
                314, 314, 314, 234, 314, 234, 234,
                314, 314, 314, 388, 314, 202, 202,
                202, 202, 314, 720, 642,
            ],
            'dataset_name' => 2
        ],
        [
            'type' => 2,
            'labels' => [
                '12-01-2020', '01-01-2021', '02-01-2021',
                '03-01-2021', '04-01-2021', '05-01-2021',
                '06-01-2021', '07-01-2021', '08-01-2021',
                '09-01-2021', '10-01-2021', '11-01-2021',
                '12-01-2021', '01-01-2022', '02-01-2022',
                '03-01-2022', '04-01-2022', '05-01-2022',
                '06-01-2022', '07-01-2022', '08-01-2022',
                '09-01-2022', '10-01-2022', '11-01-2022',
                '12-01-2022', '01-01-2023',
            ],
            'data' => [
                622, 622, 426, 471, 365, 365, 238,
                324, 288, 206, 324, 324, 500, 409,
                409, 273, 232, 273, 500, 570, 767,
                808, 685, 767, 685, 685,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 2,
            'labels' => null,
            'data' => [
                732, 610, 610, 504, 504, 504, 349,
                349, 504, 342, 504, 610, 391, 192,
                154, 273, 191, 191, 126, 263, 349,
                252, 423, 622, 470, 532,
            ],
            'dataset_name' => 2
        ],
        [
            'type' => 3,
            'labels' => [
                '12-01-2020', '01-01-2021', '02-01-2021',
                '03-01-2021', '04-01-2021', '05-01-2021',
                '06-01-2021', '07-01-2021', '08-01-2021',
                '09-01-2021', '10-01-2021', '11-01-2021',
                '12-01-2021', '01-01-2022', '02-01-2022',
                '03-01-2022', '04-01-2022', '05-01-2022',
                '06-01-2022', '07-01-2022', '08-01-2022',
                '09-01-2022', '10-01-2022', '11-01-2022',
                '12-01-2022', '01-01-2023',
            ],
            'data' => [
                540, 466, 540, 466, 385, 432, 334,
                334, 289, 289, 200, 289, 222, 289,
                289, 403, 554, 304, 289, 270, 134,
                270, 829, 344, 388, 364,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 3,
            'labels' => null,
            'data' => [
                689, 562, 477, 477, 477, 477, 458,
                314, 430, 378, 430, 498, 642, 350,
                145, 145, 354, 260, 188, 188, 300,
                300, 282, 364, 660, 554,
            ],
            'dataset_name' => 2
        ],                                
        [
            'type' => 4,
            'labels' => [
                '12-01-2020', '01-01-2021', '02-01-2021',
                '03-01-2021', '04-01-2021', '05-01-2021',
            ],
            'data' => [
                800, 1600, 900, 1300, 1950, 1700,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 4,
            'labels' => null,
            'data' => [
                4900, 2600, 5350, 4800, 5200, 4800,
            ],
            'dataset_name' => 2
        ],
        [
            'type' => 5,
            'labels' => [
                '2022-05-18 11:30:00', '2022-05-18 12:00:00', '2022-05-18 12:30:00', '2022-05-18 13:00:00',
                '2022-05-18 13:30:00', '2022-05-18 14:00:00', '2022-05-18 14:30:00', '2022-05-18 15:00:00',
                '2022-05-18 15:30:00', '2022-05-18 16:00:00', '2022-05-18 16:30:00', '2022-05-18 17:00:00',
                '2022-05-18 17:30:00', '2022-05-18 18:00:00', '2022-05-18 18:30:00', '2022-05-18 19:00:00',
                '2022-05-18 19:30:00', '2022-05-18 20:00:00', '2022-05-18 20:30:00', '2022-05-18 21:00:00',
                '2022-05-18 21:30:00', '2022-05-18 22:00:00', '2022-05-18 22:30:00', '2022-05-18 23:00:00',
                '2022-05-18 23:30:00', '2022-05-19 00:00:00', '2022-05-19 00:30:00', '2022-05-19 01:00:00',
                '2022-05-19 01:30:00', '2022-05-19 02:00:00', '2022-05-19 02:30:00', '2022-05-19 03:00:00',
                '2022-05-19 03:30:00', '2022-05-19 04:00:00', '2022-05-19 04:30:00', '2022-05-19 05:00:00',
                '2022-05-19 05:30:00', '2022-05-19 06:00:00', '2022-05-19 06:30:00', '2022-05-19 07:00:00',
                '2022-05-19 07:30:00', '2022-05-19 08:00:00', '2022-05-19 08:30:00', '2022-05-19 09:00:00',
                '2022-05-19 09:30:00', '2022-05-19 10:00:00', '2022-05-19 10:30:00', '2022-05-19 11:00:00',
                '2022-05-19 11:30:00', '2022-05-19 12:00:00', '2022-05-19 12:30:00', '2022-05-19 13:00:00',
                '2022-05-19 13:30:00', '2022-05-19 14:00:00', '2022-05-19 14:30:00', '2022-05-19 15:00:00',
                '2022-05-19 15:30:00', '2022-05-19 16:00:00', '2022-05-19 16:30:00',
            ],
            'data' => [
                57.81, 57.75, 55.48, 54.28, 53.14, 52.25, 51.04, 52.49, 55.49, 56.87,
                53.73, 56.42, 58.06, 55.62, 58.16, 55.22, 58.67, 60.18, 61.31, 63.25,
                65.91, 64.44, 65.97, 62.27, 60.96, 59.34, 55.07, 59.85, 53.79, 51.92,
                50.95, 49.65, 48.09, 49.81, 47.85, 49.52, 50.21, 52.22, 54.42, 53.42,
                50.91, 58.52, 53.37, 57.58, 59.09, 59.36, 58.71, 59.42, 55.93, 57.71,
                50.62, 56.28, 57.37, 53.08, 55.94, 55.82, 53.94, 52.65, 50.25,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 6,
            'labels' => [
                'United States', 'Italy', 'Other'
            ],
            'data' => [
                35, 30, 35,
            ]
        ],
        [
            'type' => 8,
            'labels' => [
                '12-01-2020', '01-01-2021', '02-01-2021',
                '03-01-2021', '04-01-2021', '05-01-2021',
                '06-01-2021', '07-01-2021', '08-01-2021',
                '09-01-2021', '10-01-2021', '11-01-2021',
                '12-01-2021', '01-01-2022', '02-01-2022',
                '03-01-2022', '04-01-2022', '05-01-2022',
                '06-01-2022', '07-01-2022', '08-01-2022',
                '09-01-2022', '10-01-2022', '11-01-2022',
                '12-01-2022', '01-01-2023',
            ],
            'data' => [
                73, 64, 73, 69, 104, 104, 164,
                164, 120, 120, 120, 148, 142, 104,
                122, 110, 104, 152, 166, 233, 268,
                252, 284, 284, 333, 323,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 8,
            'labels' => null,
            'data' => [
                184, 86, 42, 378, 42, 243, 38,
                120, 0, 0, 42, 0, 84, 0,
                276, 0, 124, 42, 124, 88, 88,
                215, 156, 88, 124, 64,
            ],
            'dataset_name' => 2
        ],
        [
            'type' => 8,
            'labels' => null,
            'data' => [
                122, 170, 192, 86, 102, 124, 115,
                115, 56, 104, 0, 72, 208, 186,
                223, 188, 114, 162, 200, 150, 118,
                118, 76, 122, 230, 268,
            ],
            'dataset_name' => 3
        ],
        [
            'type' => 9,
            'labels' => [
                '12-01-2020', '01-01-2021', '02-01-2021',
                '03-01-2021', '04-01-2021', '05-01-2021',
            ],
            'data' => [
                6200, 9200, 6600, 8800, 5200, 9200,
            ],
            'dataset_name' => 1
        ],
        [
            'type' => 9,
            'labels' => null,
            'data' => [
                -4000, -2600, -5350, -4000, -7500, -2000,
            ],
            'dataset_name' => 2
        ],
        [
            'type' => 10,
            'labels' => ['Reasons'],
            'data' => [131],
            'dataset_name' => 1
        ],
        [
            'type' => 10,
            'labels' => null,
            'data' => [100],
            'dataset_name' => 2
        ],
        [
            'type' => 10,
            'labels' => null,
            'data' => [91],
            'dataset_name' => 3
        ],
        [
            'type' => 10,
            'labels' => null,
            'data' => [65],
            'dataset_name' => 4
        ],
        [
            'type' => 10,
            'labels' => null,
            'data' => [72],
            'dataset_name' => 5
        ],                
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach($this->data as $d) {
            for($i=0; $i<count($d['data']); $i++) {
                DataFeed::create([
                    'data_type' => $d['type'],
                    'label' => (isset($d['labels'][$i]) ? $d['labels'][$i] : null),
                    'data' => $d['data'][$i]*1000,
                    'dataset_name' => (isset($d['dataset_name']) ? $d['dataset_name'] : null),
                ]);
            }
        }

    }
}
