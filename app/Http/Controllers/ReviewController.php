<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_columns = [
            [
                'data' => 'text',
                'column_name' => __('fields.text'),
            ],
            [
                'data' => 'email',
                'column_name' => __('fields.creator'),
            ],
            [
                'data' => 'created_at',
                'column_name' => __('fields.created_at'),
            ],
            [
                'data' => 'action',
                'column_name' => __('fields.action'),
            ]
        ];

        $data = Review::paginate(50);

        $with = [
            'title'             => __('index.reviews.title'),
            'new_title'         => __('index.reviews.new_title'),
            'method_create'     => route('reviews.create'),
            'method_destroy'    => 'ReviewController@destroy',
            'method_edit'       => 'ReviewController@edit',
            'table_columns'     => $table_columns,
            'data'              => $data,
        ];
        return view('panel.templates.index')->with($with);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = [
            'name',
            'email',
            'text',
            'visible',
            'published_at',
            'locale'
        ];

        $with = [
            'title'             => __('create.reviews.title'),
            'method_store'      => route('reviews.store'),
            'fields'            => $fields,
        ];
        return view('panel.templates.create')->with($with);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Review::create($request->all());
        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $fields = [
            'name',
            'email',
            'text',
            'visible',
            'published_at',
            'locale'
        ];

        $with = [
            'title'             => __('edit.reviews.title'),
            'method_update'     => 'ReviewController@update',
            'fields'            => $fields,
            'data'              => $review,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->update($request->all());
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
