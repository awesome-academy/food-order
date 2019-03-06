@extends ('admin.layouts.master')
@section ('content')
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>{{ trans('setting.user') }}</h5>
        </div>
        <div class="horControlB menu_action">
            <ul>
                <li>
                    <a href="{{ route('addUser') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/add.png"/>
                        <span>{{ trans('setting.add') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('listUser') }}">
                        <img src="{{ asset(config('setting.admin_image.icon')) }}/list.png"/>
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
            <div class="num f12">{{ trans('setting.count') }}: <b id="total">{{ count($user) }}</b></div>
        </div>
        @if (count($user) > 0)
            <table cellpadding="0" cellspacing="0" width='100%' class="sTable mTable myTable taskWidget" id="checkAll">
                <thead>
                    <tr>
                        <td><img src="{{ asset(config('setting.admin_image.icon')) }}/tableArrows.png" /></td>
                        <td>{{ trans('setting.name') }}</td>
                        <td>{{ trans('setting.avatar') }}</td>
                        <td>{{ trans('setting.email') }}</td>
                        <td>{{ trans('setting.phone_number') }}</td>
                        <td>{{ trans('setting.address') }}</td>
                        <td>{{ trans('setting.level') }}</td>
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
                    @foreach ($user as $us)
                        <tr class='us_{{$us->id}}'>
                        <td><input type="checkbox" class="check-product" name="id[]" value="{{ $us->id }}" /></td>
                        <td>{{ $us->name }}</td>
                        <td>
                            <img id="avatar_admin" src="{{ asset(config('setting.avatar.user')) }}/{{ $us->avatar }}">
                        </td>
                        <td>{{ $us->email }}</td>
                        <td>{{ $us->phone_number }}</td>
                        <td>{{ $us->address }}</td>
                        <td>
                            @if ($us->level == 0)
                                {{ "Admin" }}                           
                            @else
                                {{ "User" }}
                            @endif
                        </td>
                        <td class="option">
                            <a href="{{ route('editUser', $us->id) }} . html" title="Edit" class="tipS ">
                                <img src="{{ asset(config('setting.admin_image.icon')) }}/edit.png" />
                            </a>
                            <a href="{{ route('deleteUser', $us->id) }} . html" value="{{ $us->id }}" title="Delete" class="tipS delete" >
                                <img src="{{ asset(config('setting.admin_image.icon')) }}/delete.png" />
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $user -> links() !!}
        @else
            <h5>{{ trans('setting.zero') }}</h5>
        @endif
    </div>
</div>
<div class="clear mt30"></div>
@endsection
