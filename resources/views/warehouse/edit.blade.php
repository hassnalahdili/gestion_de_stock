<x-master title="Entrepôts"> 
   
@include('partials.errors')
<center>
<Fieldset class="fieldset">
<h3>Modifier Entrepôts</h3>
<form method="post" action="{{ route('warehouses.update',$warehouse->id) }}" >
        @method('PUT')
        @csrf
        <div class="formcu">
            <div > <label  >Nom : </label>
                 <input type="text" name="name"  value="{{old('name',$warehouse->name)}}" /> </div>
          
             
<div ><button type="submit" class="btn "> Modifier</button></div>
</div>
</form>
</Fieldset>
</x-master>