@include('header')

<body>
    <div class="container">
        <form action="{{route('books.update', $book->id)}}" method="post">

            @csrf
            @method('put')
            <label for="title">Ingrese el titulo del libro
                <input type="text" name="titulo" id="title" value="{{$book->title}}">
            </label>

            <label for="author">Ingrese el nombre del autor
                <input type="text" name="autor" id="author" value="{{$book->author}}">
            </label>

            <label for="price">Inrgese el precio del libro
                <input type="number" name="precio" id="price" value="{{$book->price}}">
            </label>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    
    @include('footer')
</body>

</html>