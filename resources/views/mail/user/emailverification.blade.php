<x-mail::message>
Hello!

Please click the link below to verify your email address
<br>
<a href="{{ url('auth/verify-email/' . $user->id . '/' . $user->otp->otp) }}">
Verify Email Address
</a>

If you did not create an account, no further action is required.
Thanks,<br>
{{ config('app.name') }}
<hr>
If you're having trouble clicking the "Verify Email Address" button, copy and paste the URL below into your web browser: <a href="{{route('user.verify-email', [$user->id,$user->otp->otp])}}">{{route('user.verify-email', [$user->id,$user->otp->otp])}}</a>
</x-mail::message>
