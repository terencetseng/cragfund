<form class="login col-md-12" role="form" method="POST" action="{{url('/auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    {{--<div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
    </div>
    --}}
    <div class="form-group">
        <a href="/password/email" class="forgot-password">Forgot your password?</a>
        <button type="submit" class="btn btn-primary btn-login">Login</button>
    </div>
</form>
