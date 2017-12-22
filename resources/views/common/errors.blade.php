@if (count($errors))
    <div class="alert alert-danger">
        <strong>@lang('message.myerror')</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('check'))
	<div class="alert alert-danger">
        <strong>{{ session('check') }}</strong>
    </div>
@endif
