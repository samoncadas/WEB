@include('encabezado')

<body>
    <div class="container">
        <form action="{{route('books.store')}}" method="post" onsubmit="validar()">

            @csrf
            <label for="title">Ingrese el titulo del libro
                <input type="text" name="titulo" id="title">
            </label>

            <label for="author">Ingrese el nombre del autor
                <input type="text" name="autor" id="author">
            </label>

            <label for="price">Ingrese el precio del libro
                <input type="number" name="precio" id="price">
            </label>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>

        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{$book->id }}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <td></td>

                @endforeach
            </tbody>
        </table>
        <button class="btn btn primary" onclick="mostrarMensaje()">
            Mostrar mensaje
        </button>
    </div>

@include('footer')
</body>

</html>