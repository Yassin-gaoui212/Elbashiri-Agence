@component('mail::message')
# Nouveau message de contact

**Nom:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Téléphone:** {{ $data['phone'] }}

**Message:**
{{ $data['message'] }}

Merci,<br>
{{ config('app.name') }}
@endcomponent 