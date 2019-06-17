<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
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

        $data = Video::all();

        $with = [
            'title'             => __('index.video.title'),
            'new_title'         => __('index.video.new_title'),
            'method_create'     => route('videos.create'),
            'method_destroy'    => 'VideoController@destroy',
            'method_edit'       => 'VideoController@edit',
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
            'published_at',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('create.video.title'),
            'method_store'      => route('videos.store'),
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
        $video = Video::create($request->all());
        if ($request->file('image')) {
            $signatureImage = $request->file('image')->store('images', 'public');
            $video->update(['image' => $signatureImage]);
        }
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $fields = [
            'title',
            'slug',
            'text',
            'image',
            'published_at',
            'meta_title',
            'meta_keywords',
            'meta_description'
        ];

        $with = [
            'title'             => __('edit.video.title'),
            'method_update'     => 'VideoController@update',
            'fields'            => $fields,
            'data'              => $video,
        ];

        return view('panel.templates.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->all());

        if ($request->file('image')) {
            Storage::disk('public')->delete($video->image);
            $signatureImage = $request->file('image')->store('images', 'public');
            $video->update(['image' => $signatureImage]);
        }
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        Storage::disk('public')->delete($video->image);
        $video->delete();
        return redirect()->route('videos.index');
    }
}
