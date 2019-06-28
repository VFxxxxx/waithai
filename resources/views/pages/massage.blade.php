@extends('base')

@section('content')

    <div class="gray-block massage-open">
        @include('components.massage_category_menu_list')
        @include('components.massage_menu_list')

        <div class="massage-block">
            <div class="container">
                <div class="block-wrap">
                    <div class="row main-row">
                        {% if pageData.path %}
                        <div class="col-sm-5 col-md-6 image">
                            <img src="{{ asset(pageData.webPath) }}" alt="{{ pageData.title }}" class="w100">
                        </div>
                        {% endif %}
                        <div class="{{ pageData.path ? 'col-sm-7 col-md-6 left-padding' : 'col-sm-12' }}">
                            <h1 class="title">{{ pageData.title }}</h1>

                            {% if pageData.prices(cityCurrent)|length > 0 %}
                            {% include 'components/prices.html.twig' with {'prices': pageData.prices(cityCurrent)} %}

                            <div class="time-info">{{ 'time.info'|trans|raw }}</div>
                            <div class="btn-line">
                                <button type="button" class="button2 order-item" data-toggle="modal" data-target="#order-form" data-type="massage" data-item="{{ pageData.id }}">{{ 'order.and.pay2'|trans }}</button>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                    {% if pageData.text is defined and pageData.text is not empty %}
                    <div class="page-text">
                        {{ pageData.text|raw }}
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>

        {% if massages and massages|length > 0 %}
        <div class="recommend-block">
            <div class="container">
                <div class="recommend-title">{{ 'recommend.title'|trans|raw }}</div>
                {% include 'components/massage_list.html.twig' %}
            </div>
        </div>
        {% endif %}

    </div>

    <div class="white-block"></div>

    @include('components.wait_for_you_block')

@stop