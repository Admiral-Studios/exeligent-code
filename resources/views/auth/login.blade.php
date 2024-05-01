@extends('layouts.auth')

@section('title', 'Log In')

@section('content')

    <section class="section login-section">
        <div class="login-section-wrapper">
            <div class="login-section-box">
                <h1 class="login-section-title neue-bold fz-064 black">Log In To AKC</h1>
                <form action="" method="POST">
                    @csrf
                    <label class="a-label" for="email">Email Address</label>
                    <input class="a-input @error('email') is-invalid @enderror" name="email" type="text" placeholder="Email *" value="{{ old('email') }}" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="a-label" for="password">Password</label>
                    <div class="a-input-eye">
                        <input name="password" required="" id="password" autocomplete="current-password"
                               class="a-input a-input-password @error('password') is-invalid @enderror" type="password" placeholder="Password *">
                        <svg class="toggle-password" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_722_7917)">
                                <path d="M23.2715 9.41879C21.7205 6.89279 18.1925 2.65479 12.0005 2.65479C5.80854 2.65479 2.28054 6.89279 0.72954 9.41879C0.250068 10.1943 -0.00390625 11.088 -0.00390625 11.9998C-0.00390625 12.9115 0.250068 13.8053 0.72954 14.5808C2.28054 17.1068 5.80854 21.3448 12.0005 21.3448C18.1925 21.3448 21.7205 17.1068 23.2715 14.5808C23.751 13.8053 24.005 12.9115 24.005 11.9998C24.005 11.088 23.751 10.1943 23.2715 9.41879ZM21.5665 13.5338C20.2345 15.6998 17.2195 19.3448 12.0005 19.3448C6.78154 19.3448 3.76654 15.6998 2.43454 13.5338C2.14967 13.0728 1.99879 12.5417 1.99879 11.9998C1.99879 11.4579 2.14967 10.9267 2.43454 10.4658C3.76654 8.29979 6.78154 4.65479 12.0005 4.65479C17.2195 4.65479 20.2345 8.29578 21.5665 10.4658C21.8514 10.9267 22.0023 11.4579 22.0023 11.9998C22.0023 12.5417 21.8514 13.0728 21.5665 13.5338Z"
                                      fill="#B0B0B0"/>
                                <path d="M12 7C11.0111 7 10.0444 7.29324 9.22215 7.84265C8.39991 8.39206 7.75904 9.17295 7.3806 10.0866C7.00217 11.0002 6.90315 12.0055 7.09608 12.9755C7.289 13.9454 7.76521 14.8363 8.46447 15.5355C9.16373 16.2348 10.0546 16.711 11.0246 16.9039C11.9945 17.0969 12.9998 16.9978 13.9134 16.6194C14.827 16.241 15.6079 15.6001 16.1574 14.7779C16.7068 13.9556 17 12.9889 17 12C16.9984 10.6744 16.4711 9.40356 15.5338 8.46622C14.5964 7.52888 13.3256 7.00159 12 7ZM12 15C11.4067 15 10.8266 14.8241 10.3333 14.4944C9.83994 14.1648 9.45543 13.6962 9.22836 13.1481C9.0013 12.5999 8.94189 11.9967 9.05765 11.4147C9.1734 10.8328 9.45912 10.2982 9.87868 9.87868C10.2982 9.45912 10.8328 9.1734 11.4147 9.05764C11.9967 8.94189 12.5999 9.0013 13.1481 9.22836C13.6962 9.45542 14.1648 9.83994 14.4944 10.3333C14.8241 10.8266 15 11.4067 15 12C15 12.7957 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7957 15 12 15Z"
                                      fill="#B0B0B0"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_722_7917">
                                    <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="login-section-buttons flex align-center flex-between">
                        <p class="forgot-text">
                            Forgot password?
                            <a class="fw-semibold" href="{{ route('password.request') }}">Reset</a>
                        </p>
                        <button type="submit" class="btn btn-black fz-024">Log In</button>
                    </div>
                </form>

{{--                <a class="google-section flex align-center" href="{{ route('login.google') }}">--}}
{{--                    <img src="{{ asset('images/google-logo.svg') }}" alt="Login via Google">--}}
{{--                    <span>Continue with Google</span>--}}
{{--                </a>--}}

            </div>
        </div>
    </section>

@endsection
