<x-layout title="Itens para Comprar">
    
    <div class="container">
    @if (Auth::user()->is_admin)
    <a href="{{ route('items.create') }}" class = "mb-3 btn btn-primary">Cadastrar Novo</a>
    @endif

    <ul class="list-group">
    @foreach ($items as $item)
        @if ($item->approved)
            <li class='list-group-item'> 
                <div class="d-flex bd-highlight">
                    <div class="mb-0 mt-0 p-2 bd-highlight"> 
                        <span class="badge bg-primary">
                            R$ {{ number_format($item->price, 2, ',', '.') }}</span>
                    </div>
                    <div class="mb-0 mt-0 p-2 bd-highlight"> {{ $item['name'] }} </div>
                    <div class="mb-0 mt-0 p-2 ms-auto bd-highlight">
                        <span class="badge bg-primary">Aprovado
                        </span>
                    </div>
                    @if (Auth::user()->is_admin)
                    <div class="p-2 bd-highlight">
                        <form action="{{ route('items.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-dark btn-sm">
                                X
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
        
            </li>
            
        @else
            <li class="list-group-item">  
                <div class="d-flex bd-highlight">
                    <div class="mb-0 mt-0 p-2 bd-highlight">
                        <span class="badge bg-primary"> R$ {{ $item->price }}</span>
                    </div>
                    <div class="mb-0 mt-0 p-2 bd-highlight"> {{ $item['name'] }} </div>
                    <div class="mb-0 mt-0 p-2 ms-auto bd-highlight">
                        @if (Auth::user()->is_admin)
                        <a href= "{{ route('items.approve', $item->id)}}" class = "btn btn-sm btn-success">Aprovar</a>
                        @endif
                    </div>
                    <div class="p-2 bd-highlight">
                        <form action="{{ route('items.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-dark btn-sm">
                                X
                            </button>
                        </form>
                    </div>
                </div>                
            </li>
        @endif
   
    @endforeach
    </ul><br>
    {{ $items->links() }}




    </div>
</x-layout>