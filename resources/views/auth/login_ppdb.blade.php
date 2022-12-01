<main class="login-form">
    <div class="card">
        <h3 class="card-header text-center">Login</h3>
        <div class="card-body">
            @if ($errors->has('auth'))
                <span class="text-danger">{{ $errors->first('auth') }}</span>
            @endif
            <form method="POST" action="{{ route('login.login_ppdb') }}">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                        autofocus>
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                </div>
            </form>
        </div>
    </div>
</main>