<div id="left_content">
    <div id="leftSide">
        <div class="sideProfile">
            <a href="#" title="" class="profileFace">
                <img src="{{ asset(config('setting.admin_image.user')) }}" />
            </a>
            <span>{{ trans('setting.welcome', ['name' => 'admin!']) }}</span>
            <div class="clear"></div>
        </div>
        <div class="sidebarSep"></div>
        <ul id="menu" class="nav">
            <li class="home">
                <a href="#" class="active" id="current">
                    <span>{{ trans('setting.dashboard') }}</span>
                    <strong></strong>
                </a>
            </li>
            <li class="tran">
                <a href="#" class=" exp" >
                    <span>{{ trans('setting.manage') }}</span>
                    <strong>2</strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="#">{{ trans('setting.trade') }}</a>
                    </li>
                    <li >
                        <a href="#">{{ trans('setting.order') }}</a>
                    </li>
                </ul>
            </li>
            <li class="product">
                <a href="#" class=" exp" >
                    <span>{{ trans('setting.product') }}</span>
                    <strong>3</strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="#">{{ trans('setting.category') }}</a>
                    </li>
                    <li >
                        <a href="#">{{ trans('setting.product') }}</a>
                    </li>
                    <li >
                        <a href="#">{{ trans('setting.feedback') }}</a>
                    </li>
                </ul>
            </li>
            <li class="home">
                <a href="#" class="active" id="current">
                    <span>{{ trans('setting.store') }}</span>
                    <strong></strong>
                </a>
            </li>
            <li class="home">
                <a href="#" class="exp" id="current">
                    <span>{{ trans('setting.post') }}</span>
                    <strong></strong>
                </a>
            </li>
            <li class="account">
                <a href="#" class=" exp" >
                    <span>{{ trans('setting.user') }}</span>
                    <strong></strong>
                </a>
            </li>
            <li class="content">
                <a href="#" class=" exp" >
                    <span>{{ trans('setting.content') }}</span>
                    <strong>2</strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="#">{{ trans('setting.banner') }}</a>
                    </li>
                    <li >
                        <a href="#">{{ trans('setting.contact') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
