<?php

    namespace App\Http\Controllers;

    use App\Models\DataFeed;
    use Illuminate\Http\Request;

    class DataFeedController extends ApiController
    {

        public function getDataFeed(Request $request)
        {
            // dd($request->all());
            $df = new DataFeed();

            return (object)[
                'labels' => $df->getDataFeed(
                    $request->datatype,
                    'label',
                    $request->limit
                ),
                'data' => $df->getDataFeed(
                    $request->datatype,
                    'data',
                    $request->limit
                ),
            ];
        }
    }