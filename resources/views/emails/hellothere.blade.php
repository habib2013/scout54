@component('mail::message')
# Hello {{$user->username}}

Welcome to Scout54,we are glad to have you on African largest scouting website

@component('mail::button', ['url' => 'http://127.0.0.1:8000/home'])
Learn more
@endcomponent

Thanks,<br>
Scout54
@endcomponent
