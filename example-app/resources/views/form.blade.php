<!-- resources/views/form.blade.php -->
<form action="{{ route('upload.imagem') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="imagem">
    <button type="submit">Enviar Imagem</button>
</form>
