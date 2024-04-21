@component('mail::message')
# Introduction

The body of your message.

Your Password Is : {{$vendor->password}}
Your Email Is : {{$vendor->email}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
