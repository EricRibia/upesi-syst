@component('mail::message')
# New Personal Assistance Request

# Name:
{{$contact->name}}

#Email:
{{$contact->email}}

#Phone number:
{{$contact->phonenumber}}

# Organization:
{{$contact->orgnmessage}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
