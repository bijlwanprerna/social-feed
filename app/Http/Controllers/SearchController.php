<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower($request->q);

        $posts = [

            'Laravel Redis',
            'Vue Search',
            'Elasticsearch Guide',
            'Kafka Events'

        ];

        $filtered = collect($posts)->filter(

            function ($post) use ($query) {

                return str_contains(

                    strtolower($post),
                    $query
                );
            }
        );

        return response()->json(
            $filtered->values()
        );
    }
}