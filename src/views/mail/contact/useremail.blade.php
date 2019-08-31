@component('mail::message')
# Introduction

The body of your message.
{{$name}}<br><br>
{{$mobile}}<br><br>
{{$message}}<br><br>
@component('mail::button', ['url' => ''])
Button Text{{ config('app.name') }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
