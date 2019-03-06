@extends('admin.layouts.master')
@section('content')
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>{{ trans('setting.store') }}</h5>
        </div>
        <div class="horControlB menu_action">
            <ul>
                <li>
                    <a href="{{ route('addStore') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/add.png"/>
                        <span>{{ trans('setting.add') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listStore') }}">
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
@if(session('warning'))
    <div class="alert alert-success">
        {{ session('warning') }}
    </div>
@endif
<div class="line"></div>
<div class="wrapper">
    {!! Form::open(['method' => 'POST', 'route' => ['editStore', $store->id], 'files' => 'true']) !!}
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img src="{{ asset(config('setting.admin_image.icon')) }}/add.png" class="titleIcon"/>
                    <h6>{{ trans('setting.add') }}</h6>
                </div>
                <div class="formRow">                  
                    {!! Form::label('param_name', trans('setting.name'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        <span class="oneTwo">{!! Form::text('name', $store->name) !!}</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">                  
                    {!! Form::label('description', trans('setting.description'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        <span class="oneTwo">{!! Form::textarea('description', $store->description, ['class' => 'form-control ckeditor', 'id' => 'demo']) !!}</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">                  
                    {!! Form::label('address', trans('setting.address'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        <span class="oneTwo">{!! Form::text('address', $store->address) !!}</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">                  
                    {!! Form::label('avatar', trans('setting.avatar'), ['class' => 'formLeft']) !!}
                    <div class="formRight">                      
                        {!! Form::file('avatar', ['id' => 'avatar']) !!}
                        <p><img id="avatar_admin" src="{{ asset(config('setting.avatar')) }}/{{ $store->avatar }}"></p>
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
