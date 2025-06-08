@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css\Styleweb2.css')}}">
    <title>Embition engineering | {{$title}}</title>

</head>
<body>
 @include('partials.header')
 <br>

<script src="{{ asset('js\flashbag.js') }}"></script>
<span class="flashbag"> @include('partials.flashbag')</span>
<div class="all">
 @auth
@if (auth()->user()->email == 'hassna@gmail.com')
       <div class="sec1">@include('partials.nav')</div>
       @else
       <div class="sec1">@include('partials.nav2')</div>
   @endif
@endauth
<main class="slot">
        {{$slot}}
 </main>
</div>
</body>
</html>
