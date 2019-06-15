@extends('adminlte::page')

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }}</h3>
                </div>

                <form role="form" method="post" action="{{ $method_store }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="box-body">
                        @if(in_array('title', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.title') }}</label>
                                <input name="title" type="text" class="form-control" placeholder="{{ __('fields.title') }}" value="{{ @old('title') }}" required>
                            </div>
                        @endif

                        @if(in_array('slug', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.slug') }}</label>
                                <input name="slug" type="text" class="form-control" placeholder="{{ __('fields.slug') }}" value="{{ @old('slug') }}" required>
                            </div>
                        @endif

                        @if(in_array('text', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.text') }}</label>
                                <textarea name="text" rows="10" class="form-control" value="{{ @old('text') }}" required></textarea>
                            </div>
                        @endif

                        @if(isset($fields['category_id']))
                            <div class="form-group">
                                <label>{{ __('fields.category_id') }}</label>
                                <select name="category_id" class="form-control">
                                    @foreach($fields['category_id'] as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        @if(in_array('image', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.image') }}</label>
                                <input type="file" class="form-control" name="image"/>
                            </div>
                        @endif

                        @if(in_array('published_at', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.published_at') }}</label>
                                <input name="published_at" type="datetime" class="form-control"  value="{{ Carbon\Carbon::now() }}">
                            </div>
                        @endif

                        @if(in_array('meta_title', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.meta_title') }}</label>
                                <input name="meta_title" type="text" class="form-control" placeholder="meta title" value="{{ @old('meta_title') }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_keywords', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.meta_keywords') }}</label>
                                <input name="meta_keywords" type="text" class="form-control" placeholder="meta keywords" value="{{ @old('meta_keywords') }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_description', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.meta_description') }}</label>
                                <input name="meta_description" type="text" class="form-control" placeholder="meta description" value="{{ @old('meta_description') }}" required>
                            </div>
                        @endif

                        @if(in_array('video_link', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.video_link') }}</label>
                                <input name="video_link" type="text" class="form-control" placeholder="{{ __('fields.video_link') }}" value="{{ @old('video_link') }}" required>
                            </div>
                        @endif

                    </div>
                    <div class="box-footer">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="locale" type="hidden" value="{{ Config::get('app.locale') }}"/>
                        <input type="submit" value="Добавить" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </section>

    @include('panel.errors.errors')

@stop