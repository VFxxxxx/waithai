<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GiftController extends Controller
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

        $data = Gift::all();

        $with = [
            'title'             => __('index.gift.title'),
            'new_title'         => __('index.gift.new_title'),
            'method_create'     => route('gifts.create'),
            'method_destroy'    => 'GiftController@destroy',
            'method_edit'       => 'GiftController@edit',
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
            'text_preview',
            'text_detail',
            'price',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'image_preview',
            'image_detail',
            'published_at',
            'locale'
        ];

        $with = [
            'title'             => __('create.gift.title'),
            'method_store'      => route('gifts.store'),
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
        $gift = Gift::create($request->all());
        if ($request->file('image_preview') && $request->file('image_detail')) {
            $signatureImage1 = $request->file('image_preview')->store('images', 'public');
            $signatureImage2 = $request->file('image_detail')->store('images', 'public');
            $gift->update([
                'image_preview' => $signatureImage1,
                'image_detail' => $signatureImage2,
            ]);
        }
        return redirect()->route('gifts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        $fields = [
            'title',
            'text_preview',
            'text_detail',
            'price',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'image_preview',
            'image_detail',
            'published_at',
            'locale'
        ];

        $with = [
            'title'             => __('edit.gift.title'),
            'method_update'     => 'GiftController@update',
            'fields'            => $fields,
            'data'              => $gift,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gift $gift)
    {
        $gift->update($request->all());

        if ($request->file('image_preview')) {
            Storage::disk('public')->delete($gift->image_preview);
            $signatureImage1 = $request->file('image_preview')->store('images', 'public');
            $gift->update(['image_preview' => $signatureImage1]);
        }
        if ($request->file('image_detail')) {
            Storage::disk('public')->delete($gift->image_detail);
            $signatureImage2 = $request->file('image_detail')->store('images', 'public');
            $gift->update(['image_detail' => $signatureImage2]);
        }
        return redirect()->route('gifts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        Storage::disk('public')->delete($gift->image_preview);
        Storage::disk('public')->delete($gift->image_detail);
        $gift->delete();
        return redirect()->route('gifts.index');
    }
}
