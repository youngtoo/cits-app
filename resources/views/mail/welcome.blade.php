<x-mail::message>
# Introduction

Greetings, welcome to the application. This is for

<x-mail::button :url="'http://cits-app.local/'">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
