<form action="{{route('notasxml.store')}}" method="post" enctype="multipart/form-data">
    @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->

    <label for="invoice" class="form-label">Nota Fiscal</label>
    <input type="file" name="invoice" id="invoice"><br><br>

    <button type="submit" class="btn btn-success">CADASTRAR</button>

    </div>
</form>
