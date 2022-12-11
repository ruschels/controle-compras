<x-layout title="Cadastrar Item">

<div class="container">
<form method="post" action="{{ route('items.store') }}">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Nome do Item</label>
      <input name="name" type="text" class="form-control" id="name">
      
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Preço</label>
      <input name="price" type="number" step="any" class="form-control" id="price">
      <input type="hidden" name="approved" value=0 />
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</x-layout>