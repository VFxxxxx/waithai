@extends('adminlte::page')

@section('content_header')
    <span class="content-title">{{ $title }}</span>
    <a href="{{ $method_create }}" class="btn btn-success btn-xs bottom_my">
        <i class="fa fa-plus"></i>
        {{ $new_title }}
    </a>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @include('flash::message')
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">{{ $list }}</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                @foreach($table_columns as $column)
                                    <th>{{ $column['column_name'] }}</th>
                                @endforeach
                            </tr>

                            @foreach ($data as $item)
                                <tr>
                                    @foreach($table_columns as $column)
                                        @if($column['data'] == 'action')
                                            <td class="flex-end">
                                                <a href="{{ action($method_edit, $item) }}" class="btn btn-xs btn-primary">
                                                    <i class="fa fa-fw fa-edit"></i>
                                                </a>
                                                <form method="post"
                                                      action="{{ action($method_destroy, $item) }}"
                                                      accept-charset="UTF-8" class="btn-block">
                                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    <button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-fw fa-remove"></i></button>
                                                </form>
                                            </td>
                                        @else
                                            <td>
                                                {{ $item[$column['data']] }}
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        @if ( $data instanceof \Illuminate\Pagination\LengthAwarePaginator )
                            {{ $data->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
