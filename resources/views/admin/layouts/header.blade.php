<div class="topNav">
    <div class="wrapper">
        <div class="welcome">
            <span>{{ trans('setting.welcome', ['name' => 'admin!']) }}</span>
        </div>
        <div class="userNav">
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <img src="{{ asset(config('setting.admin_image.home')) }}" />
                        <span>{{ trans('setting.home') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset(config('setting.admin_image.logout')) }}" />
                        <span>{{ trans('setting.logout') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
