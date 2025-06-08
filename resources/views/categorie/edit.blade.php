<x-master title="Categories"> 
   
@include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Modifier Categorie</h3>
<form method="post" action="{{ route('categories.update',$category->id) }}" >
        @method('PUT')
        @csrf
        <div class="formcu">
            <div > <label  >Nom : </label>
                 <input type="text" name="nom"  value="{{old('nom',$category->nom)}}" /> </div>
            <div ><label >Description : </label> 
                <input type="text" name="bio"   value="{{old('bio',$category->bio)}}" /> </div>
             
<div ><button type="submit" class="btn "> Modifier</button></div>
</div>
</form>
</Fieldset>
</x-master>