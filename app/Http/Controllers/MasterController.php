<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MasterController extends Controller
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
                'data' => 'name',
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

        $data = Master::all();

        $with = [
            'title'             => __('index.masters.title'),
            'new_title'         => __('index.masters.new_title'),
            'method_create'     => route('masters.create'),
            'method_destroy'    => 'MasterController@destroy',
            'method_edit'       => 'MasterController@edit',
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
            'text',
            'certificate1',
            'certificate2',
            'certificate3',
            'image',
            'published_at',
            'locale'
        ];

        $with = [
            'title'             => __('create.masters.title'),
            'method_store'      => route('masters.store'),
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
        $master = Master::create($request->all());
        if ($request->file('certificate1')) {
            $signatureImage = $request->file('certificate1')->store('images', 'public');
            $master->update(['certificate1' => $signatureImage]);
        }
        if ($request->file('certificate2')) {
            $signatureImage = $request->file('certificate2')->store('images', 'public');
            $master->update(['certificate2' => $signatureImage]);
        }
        if ($request->file('certificate3')) {
            $signatureImage = $request->file('certificate3')->store('images', 'public');
            $master->update(['certificate3' => $signatureImage]);
        }
        if ($request->file('image')) {
            $signatureImage = $request->file('image')->store('images', 'public');
            $master->update(['image' => $signatureImage]);
        }
        return redirect()->route('masters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        $fields = [
            'name',
            'text',
            'certificate1',
            'certificate2',
            'certificate3',
            'image',
            'published_at',
            'locale'
        ];

        $with = [
            'title'             => __('edit.masters.title'),
            'method_update'     => 'MasterController@update',
            'fields'            => $fields,
            'data'              => $master,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        $master->update($request->all());
        if ($request->file('certificate1')) {
            Storage::disk('public')->delete($master->certificate1);
            $signatureImage = $request->file('certificate1')->store('images', 'public');
            $master->update(['certificate1' => $signatureImage]);
        }
        if ($request->file('certificate2')) {
            Storage::disk('public')->delete($master->certificate2);
            $signatureImage = $request->file('certificate2')->store('images', 'public');
            $master->update(['certificate2' => $signatureImage]);
        }
        if ($request->file('certificate3')) {
            Storage::disk('public')->delete($master->certificate3);
            $signatureImage = $request->file('certificate3')->store('images', 'public');
            $master->update(['certificate3' => $signatureImage]);
        }
        if ($request->file('image')) {
            Storage::disk('public')->delete($master->image);
            $signatureImage = $request->file('image')->store('images', 'public');
            $master->update(['image' => $signatureImage]);
        }
        return redirect()->route('masters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        Storage::disk('public')->delete($master->image);
        Storage::disk('public')->delete($master->certificate1);
        Storage::disk('public')->delete($master->certificate2);
        Storage::disk('public')->delete($master->certificate3);
        $master->delete();
        return redirect()->route('masters.index');
    }
}
