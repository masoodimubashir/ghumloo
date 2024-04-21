<x-mail::message>
Hello

Please Click Reset Password Or Try To Copy And Paste The Link Given Below

<a href="{{ url('reset-password/' . $token) }}">
Reset Password
</a>

Thanks,<br>
{{ config('app.name') }}
<hr>
If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <a href="{{route('reset.password.get', [$token])}}">{{route('reset.password.get', [$token])}}</a>
</x-mail::message>
