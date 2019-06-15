@extends('adminlte::page')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }}</h3>
                </div>

                <form role="form" method="post" action="{{ action($method_update, $data) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    @method('patch')
                    <div class="box-body">
                        @if(in_array('title', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.title') }}</label>
                                <input name="title" type="text" class="form-control" placeholder="{{ __('fields.title') }}" value="{{ $data->title }}" required>
                            </div>
                        @endif

                        @if(in_array('slug', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.slug') }}</label>
                                <input name="slug" type="text" class="form-control" placeholder="{{ __('fields.slug') }}" value="{{ $data->slug }}" required>
                            </div>
                        @endif

                        @if(in_array('text', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.text') }}</label>
                                <textarea name="text" rows="10" class="form-control" required>{{ $data->text }}</textarea>
                            </div>
                        @endif

                        @if(isset($fields['category_id']))
                            <div class="form-group">
                                <label>{{ __('fields.category_id') }}</label>
                                <select name="category_id" class="form-control">
                                    @foreach($fields['category_id'] as $category)
                                        <option value="{{ $category->id }}" @if($data->category_id == $category->id) selected @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        @if(in_array('image', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.image') }}</label>
                                <input type="file" class="form-control" name="image"/>
                            </div>
                            
                            <div class="form-group">
                                @if(isset($data->image))
                                    <img src="{{ Storage::url($data->image) }}">
                                @endif
                            </div>
                        @endif

                        @if(in_array('published_at', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.published_at') }}</label>
                                <input name="published_at" type="datetime" class="form-control"  value="{{ $data->published_at }}">
                            </div>
                        @endif

                        @if(in_array('meta_title', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.meta_title') }}</label>
                                <input name="meta_title" type="text" class="form-control" placeholder="meta title" value="{{ $data->meta_title }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_keywords', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.meta_keywords') }}</label>
                                <input name="meta_keywords" type="text" class="form-control" placeholder="meta keywords" value="{{ $data->meta_keywords }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_description', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.meta_description') }}</label>
                                <input name="meta_description" type="text" class="form-control" placeholder="meta description" value="{{ $data->meta_description }}" required>
                            </div>
                        @endif

                        @if(in_array('video_link', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.video_link') }}</label>
                                <input name="video_link" type="text" class="form-control" placeholder="{{ __('fields.video_link') }}" value="{{ $data->video_link }}" required>
                            </div>
                        @endif

                    </div>
                    <div class="box-footer">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="locale" type="hidden" value="{{ Config::get('app.locale') }}"/>
                        <input type="submit" value="{{ __('fields.update') }}" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </section>

    @include('panel.errors.errors')

@stop