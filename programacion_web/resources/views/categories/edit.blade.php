<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('categories.update', $category->id)}}" method="post">

            @csrf
            @method('put')
            <label for="name">Ingrese el Nombre de la categoria
                <input type="text" name="nombre" id="name" value="{{$category->name}}">
            </label>

            <label for="description">Ingrese la Descripcion
                <input type="text" name="descripcion" id="description" value="{{$category->descripcion}}">
            </label>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>
</html>