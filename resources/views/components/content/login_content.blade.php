<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <p class="help-block text-danger">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls floating-label-form-group-with-value">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                        <p class="help-block text-danger"></p>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p class="help-block text-danger">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Log in</button>
                <p><small>Don't have an account yet? Please <a href="{{ url('/register') }}">register</a></small></p>
            </form>
        </div>
    </div>
</div>
<hr/>