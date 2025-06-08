  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css\Styleweb.css')}}">
    <title>Embition engineering | Se connecter</title>
   
</head>
<body>
 @include('partials.header')
 <br>

<script src="{{ asset('js\flashbag.js') }}"></script>
<span class="flashbag"> @include('partials.flashbag')</span>
 <br><br><br>
      <center>
        <fieldset class="fieldset3" >
    <h3>Authentification</h3>
    
   
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div >
            
            <input type="text" name="email" placeholder="Email"  value="{{ old('email') }}">
            <br>
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
         
            <br>
            <input type="password" placeholder="Mot de Passe" name="password" >
          
          <br><br>
          
            <button class="btn">Se connecter</button>
         
    </form>
  </fieldset> 
    </center>

  </body>
  </html>
