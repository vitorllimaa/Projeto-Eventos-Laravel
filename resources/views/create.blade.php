@extends ('main')

@section ('title', 'Novo Evento | Eventos HDS')

@section ('content')

<div id="event-create-container" class="col-md-6 offset-md-3 p-2">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image" class="form-label">Imagem do Evento:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group my-2">
            <label for="title">Descrição:</label>
           <textarea name="description" id="description" cols="30" rows="10" class="form-control"
           placeholder="O que vai acontecer no evento..."></textarea>
        </div>
        <div class="form-group my-2">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>    
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>    
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>    
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open food"> Open food
            </div>    
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Área VIP"> Área VIP
            </div>    
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>


@endsection