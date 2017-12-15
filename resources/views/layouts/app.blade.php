<!DOCTYPE html>
<html>
    <head>
        <title>@lang('message.title')</title>
        {!! Html::style(mix('/css/app.css')) !!}
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" style="padding-left: 75%;">
                <span>{{ trans('message.select') }}</span>
                <a href="/changelanguage/en">@lang('message.english')</a> | 
                <a href="/changelanguage/vn">@lang('message.vietnamese')</a>
            </nav>
        </div>
        @yield('content')
    </body>
</html>
