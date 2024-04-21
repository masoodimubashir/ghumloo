<x-mail::message>
Your Account IS Created Successfully

Your Email Is: {{$vendor->email}}
<br>
Your Password Is : {{$vendor->show_password}}
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
