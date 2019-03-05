@extends('admin.layouts.master')
@section('content')
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>{{ trans('setting.product') }}</h5>
        </div>
        <div class="horControlB menu_action">
            <ul>
                <li>
                    <a href="{{ route('addFood') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/add.png"/>
                        <span>{{ trans('setting.add') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listFood') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/list.png" />
                        <span>{{ trans('setting.list') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    </div>
@endif
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<div class="line"></div>
<div class="wrapper">
    <div class="widget" id='main_content'>
        <div class="title">
            <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
            <h6>{{ trans('setting.list') }}</h6>
            <div class="num f12">{{ trans('setting.count') }}: <b id="total">{{ count($food) }}</b></div>
        </div>
        @if (count($food) > 0)
            <table width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
                <thead>
                    <tr>
                        <td><img src="{{ asset(config('setting.admin_image.icon')) }}/tableArrows.png"/></td>
                        <td>{{ trans('setting.name') }}</td>
                        <td>{{ trans('setting.slug') }}</td>
                        <td>{{ trans('setting.description') }}</td>
                        <td>{{ trans('setting.content') }}</td>
                        <td>{{ trans('setting.price') }}</td>
                        <td>{{ trans('setting.top') }}</td>
                        <td>{{ trans('setting.new') }}</td>
                        <td>{{ trans('setting.sale') }}</td>
                        <td>{{ trans('setting.category') }}</td>
                        <td>{{ trans('setting.action') }}</td>
                    </tr>
                </thead>
                <tfoot class="auto_check_pages">
                    <tr>
                        <td colspan="5">
                            <div class="list_action itemActions">
                                <a href="#" id="deleteAll" class="button blueB">
                                    <span>{{ trans('setting.deleteAll') }}</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($food as $fo)
                        <tr class='fo_{{ $fo->id }}'>
                        <td><input type="checkbox" class="check-product" name="id[]" value="{{ $fo->id }}" /></td>
                        <td>{{ $fo->name }}</td>
                        <td>{{ $fo->slug }}</td>
                        <td>{{ $fo->description }}</td>
                        <td>{{ $fo->content }}</td>
                        <td>{{ $fo->price }}</td>
                        <td>{{ $fo->top }}</td>
                        <td>{{ $fo->new }}</td>
                        <td>
                            @if ($fo->promotion_id == null)
                                {{ trans('setting.no') }}
                            @else
                                {{ $fo->promotion->discount }}
                            @endif
                        <td>
                            @foreach ($fo->categories as $ca)
                                {{ $ca->name }}
                            @endforeach
                        </td>
                        <td class="option">
                            <a href="{{ route('editFood', $fo->id) }} . html" title="Edit" class="tipS">
                                <img src="{{ asset(config('setting.admin_image.icon')) }}/edit.png"/>
                            </a>
                            <a href="{{ route('deleteFood', $fo->id) }} . html" value="{{ $fo->id }}" title="Delete" class="tipS delete">
                                <img src="{{ asset(config('setting.admin_image.icon')) }}/delete.png"/>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $food -> links() !!}
        @else
            <h5>{{ trans('setting.zero') }}</h5>
        @endif
    </div>
</div>
<div class="clear mt30"></div>
@endsection
