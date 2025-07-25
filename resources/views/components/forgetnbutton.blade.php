@props(['type' => 'login'])

<div class="flex flex-row justify-between items-center mt-8">
    <a href="{{ route('password.request') }}" class="link">{{ $type === 'login' ? 'Forgot your Password?' : '' }}</a> {{--Empty for register--}}

    <button id="auth-button" class="btn btn-primary {{ $type === 'login' ? '' : 'w-full' }}">{{ $type === 'login' ? 'Log In' : 'Register' }}</button>
</div>
