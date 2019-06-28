<?php

namespace App\Http\Controllers;

use App\Models\MassageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MassageCategoryController extends Controller
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
                'data' => 'title',
                'column_name' => __('fields.title'),
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

        $data = MassageCategory::all();

        $with = [
            'title'             => __('index.massage_category.title'),
            'new_title'         => __('index.massage_category.new_title'),
            'method_create'     => route('massage_categories.create'),
            'method_destroy'    => 'MassageCategoryController@destroy',
            'method_edit'       => 'MassageCategoryController@edit',
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
            'title',
            'slug',
            'text',
            'image',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('create.massage_category.title'),
            'method_store'      => route('massage_categories.store'),
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
        $massage = MassageCategory::create($request->all());
        if ($request->file('image')) {
            $signatureImage = $request->file('image')->store('images', 'public');
            $massage->update(['image' => $signatureImage]);
        }
        return redirect()->route('massage_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MassageCategory  $massageCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MassageCategory $massageCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MassageCategory  $massageCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MassageCategory $massageCategory)
    {
        $fields = [
            'title',
            'slug',
            'text',
            'image',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('edit.massage_category.title'),
            'method_update'     => 'MassageCategoryController@update',
            'fields'            => $fields,
            'data'              => $massageCategory,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MassageCategory  $massageCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MassageCategory $massageCategory)
    {
        $massageCategory->update($request->all());
        return redirect()->route('massage_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MassageCategory  $massageCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MassageCategory $massageCategory)
    {
        Storage::disk('public')->delete($massageCategory->image);
        $massageCategory->delete();
        return redirect()->route('massage_categories.index');
    }
}
