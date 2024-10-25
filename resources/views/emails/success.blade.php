@component('mail::message')

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

@component('mail::panel')
New Support Form Query
@endcomponent


# Name:
{{ $request->name }}

# Email
{{ $request->email }}


# Query
{{ $request->get('query') }}

Thanks,<br>
{{ config('app.name') }} Bot
@endcomponent
