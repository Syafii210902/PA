@extends('admin.layout.app')

@section('adminlogin')
<div class="body">
    <main class="form-signin">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="laert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="laert" aria-label="Close"></button>
            </div>
        @endif  

        <form method="POST" action="/admin/login">
            @csrf
            <div class="logo me-auto text-center">
                <h1>ACTIV</h1>
                <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
            </div>
          
      
          <div class="form-floating">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control mb-2 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message  }}
                </div>
            @enderror
          </div>
          <div class="form-floating">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
      </main>
</div>
@endsection
