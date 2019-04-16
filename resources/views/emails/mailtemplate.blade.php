@component('mail::message')
# New message from contact form

# Name:
{{$contact->name}}

#Email:
{{$contact->email}}

#Phone number:
{{$contact->phonenumber}}

# Message:
{{$contact->orgnmessage}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
