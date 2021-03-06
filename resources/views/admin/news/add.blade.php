@extends('admin.layouts.master')
@section('content')
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>{{ trans('setting.user') }}</h5>
        </div>
        <div class="horControlB menu_action">
            <ul>
                <li>
                    <a href="{{ route('addNews') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/add.png"/>
                        <span>{{ trans('setting.add') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listNews') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/list.png"/>
                        <span>{{ trans('setting.list') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    </div>
@endif
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<div class="line"></div>
<div class="wrapper">
    {!! Form::open(['method' => 'POST', 'route' => ['addNews'], 'files' => 'true']) !!}
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img src="{{ asset(config('setting.admin_image.icon')) }}/add.png" class="titleIcon"/>
                    <h6>{{ trans('setting.add') }}</h6>
                </div>
                <div class="formRow">                  
                    {!! Form::label('title', trans('setting.admin_news.title'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        <span class="oneTwo">{!! Form::text('title') !!}</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">                  
                    {!! Form::label('description', trans('setting.admin_news.description'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        <span class="oneTwo">{!! Form::text('description') !!}</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">                  
                    {!! Form::label('content', trans('setting.admin_news.content'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        <span class="oneTwo">{!! Form::textarea('content', null, ['class' => 'form-control ckeditor', 'id' => 'demo']) !!}</span>
                    </div>
                    <div class="clear"></div>
                </div>
                 <div class="formRow">                  
                    {!! Form::label('image', trans('setting.image'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        {!! Form::file('image', ['id' => 'image']) !!}
                    </div>
                    <div class="clear"></div> 
                </div>
                <div class="formSubmit">                
                    {!! Form::submit(trans('setting.add'), ['class' => 'redB']) !!}
                    {!! Form::reset(trans('setting.reset'), ['class' => 'basic']) !!}                 
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
    {!! Form::close() !!}
</div>
<div class="clear mt30"></div>
@endsection
