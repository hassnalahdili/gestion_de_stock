<div class="errors">
@if ($errors->any())
<x-alert type="danger" >
 <h6>Errors:</h6>
 <ul>
 @foreach ($errors->all() as $error)
   <li>{{ $error}}</li>  
 @endforeach
</ul>
</x-alert>
@endif
</div>