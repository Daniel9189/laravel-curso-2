

<!-- Modal Structure -->
   <div id="delete-{{ $product->id }}" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons">delete</i>Tem certeza?</h4>
        <div class="row">

          <p>Tem certeza que deseja excluir {{ $product->nome }}?</p>          

        </div> 
       
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 10px;">
            <a href="#!" class="modal-close waves-effect waves-green btn blue">Cancelar</a>
            <form action="{{ route('admin.product.delete', ['id'=>$product->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="waves-effect waves-green btn red" type="submit">Confirmar</button><br>
            </form>

        </div>
    </div>
    
  </div>