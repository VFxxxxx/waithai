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

                        @if(in_array('name', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.name') }}</label>
                                <input name="name" type="text" class="form-control" placeholder="{{ __('fields.name') }}" value="{{ @old('name') }}" required>
                            </div>
                        @endif

                        @if(in_array('email', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.creator') }}</label>
                                <input name="email" type="text" class="form-control" placeholder="{{ __('fields.email') }}" value="admin" required>
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

                        @if(in_array('text_preview', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.text_preview') }}</label>
                                <textarea name="text_preview" rows="10" class="form-control" value="{{ @old('text_preview') }}" required></textarea>
                            </div>
                        @endif

                        @if(in_array('text_detail', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.text_detail') }}</label>
                                <textarea name="text_detail" rows="10" class="form-control" value="{{ @old('text_detail') }}" required></textarea>
                            </div>
                        @endif

                        @if(in_array('price', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.price') }}</label>
                                <input name="price" type="text" class="form-control" placeholder="{{ __('fields.price') }}" value="{{ @old('price') }}" required>
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

                        @if(in_array('certificate1', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.certificate1') }}</label>
                                <input type="file" class="form-control" name="certificate1"/>
                            </div>
                        @endif

                        @if(in_array('certificate2', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.certificate2') }}</label>
                                <input type="file" class="form-control" name="certificate2"/>
                            </div>
                        @endif

                        @if(in_array('certificate3', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.certificate3') }}</label>
                                <input type="file" class="form-control" name="certificate3"/>
                            </div>
                        @endif

                        @if(in_array('image_preview', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.image_preview') }}</label>
                                <input type="file" class="form-control" name="image_preview"/>
                            </div>
                        @endif

                        @if(in_array('image_detail', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.image_detail') }}</label>
                                <input type="file" class="form-control" name="image_detail"/>
                            </div>
                        @endif

                        @if(in_array('published_at', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.published_at') }}</label>
                                <input name="published_at" type="datetime" class="form-control"  value="{{ Carbon\Carbon::now() }}">
                            </div>
                        @endif

                        @if(in_array('visible', $fields))
                            <div class="form-group">
                                <label>{{ __('fields.visible') }}</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visible" value="1" checked>
                                        {{ __('fields.yes') }}
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visible" value="0">
                                        {{ __('fields.no') }}
                                    </label>
                                </div>
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