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
                                <label>{{ __('fields.fields.title') }}</label>
                                <input name="title" type="text" class="form-control" placeholder="{{ __('fields.fields.title') }}" value="{{ @old('title') }}" required>
                            </div>
                        @endif

                        @if(in_array('text', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.text') }}</label>
                                <textarea name="text" rows="10" class="form-control" value="{{ @old('text') }}" required></textarea>
                            </div>
                        @endif

                        @if(isset($fields['category']))
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="category_id" class="form-control">
                                    @foreach($fields['category'] as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        @if(in_array('position', $fields))
                        <div class="form-group">
                            <label>{{ __('fields.fields.position') }}</label>
                            <input name="position" type="number" class="form-control" value="0" required>
                        </div>
                        @endif

                        @if(in_array('visible', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.visible') }}</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visible" value="1" checked>
                                        {{ __('fields.fields.visible_active') }}
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visible" value="0">
                                        {{ __('fields.fields.visible_disable') }}
                                    </label>
                                </div>
                            </div>
                        @endif

                        @if(in_array('locale', $fields))
                                <input type="text" name="locale" hidden value="{{ Config::get('app.locale') }}">
                        @endif

                        @if(in_array('path', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.path') }}</label>
                                <input name="path" type="text" class="form-control" placeholder="{{ __('fields.fields.path') }}" value="{{ @old('path') }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_title', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.meta_title') }}</label>
                                <input name="meta_title" type="text" class="form-control" placeholder="{{ __('fields.fields.meta_title') }}" value="{{ @old('meta_title') }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_keywords', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.meta_keywords') }}</label>
                                <input name="meta_keywords" type="text" class="form-control" placeholder="{{ __('fields.fields.meta_keywords') }}" value="{{ @old('meta_keywords') }}" required>
                            </div>
                        @endif

                        @if(in_array('meta_description', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.meta_description') }}</label>
                                <input name="meta_description" type="text" class="form-control" placeholder="{{ __('fields.fields.meta_description') }}" value="{{ @old('meta_description') }}" required>
                            </div>
                        @endif

                        @if(in_array('video_link', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.video_link') }}</label>
                                <input name="video_link" type="text" class="form-control" placeholder="{{ __('fields.fields.video_link') }}" value="{{ @old('video_link') }}" required>
                            </div>
                        @endif

                        @if(in_array('image', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.fields.image') }}</label>
                                <input type="file" class="form-control" name="image"/>
                            </div>
                        @endif

                    </div>
                    <div class="box-footer">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input type="submit" value="Добавить" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </section>

    @include('panel.errors.errors')

@stop
