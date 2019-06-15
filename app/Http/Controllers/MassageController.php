<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\MassageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MassageController extends Controller
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
                'data' => 'category',
                'column_name' => __('fields.category_id'),
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

        $data = Massage::with('category')->get();

        $with = [
            'title'             => __('index.massage.title'),
            'new_title'         => __('index.massage.new_title'),
            'method_create'     => route('massages.create'),
            'method_destroy'    => 'MassageController@destroy',
            'method_edit'       => 'MassageController@edit',
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
            'category_id' => MassageCategory::all(),
            'image',
            'published_at',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('create.massage.title'),
            'method_store'      => route('massages.store'),
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
        $massage = Massage::create($request->all());
        if ($request->file('image')) {
            $signatureImage = $request->file('image')->store('images', 'public');
            $massage->update(['image' => $signatureImage]);
        }
        return redirect()->route('massages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function show(Massage $massage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function edit(Massage $massage)
    {
        $fields = [
            'title',
            'slug',
            'text',
            'category_id' => MassageCategory::all(),
            'image',
            'published_at',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('edit.massage.title'),
            'method_update'     => 'MassageController@update',
            'fields'            => $fields,
            'data'              => $massage,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Massage $massage)
    {
        $massage->update($request->all());

        if ($request->file('image')) {
            Storage::disk('public')->delete($massage->image);
            $signatureImage = $request->file('image')->store('images', 'public');
            $massage->update(['image' => $signatureImage]);
        }
        return redirect()->route('massages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Massage $massage)
    {
        Storage::disk('public')->delete($massage->image);
        $massage->delete();
        return redirect()->route('massages.index');
    }
}
