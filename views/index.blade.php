@extends("layouts.main")
@section("content")
            <div class="card">
                <div class="card-header">Kategorijos</div>
                <div class="card-body">
                    <a href="new.php" class="btn btn-success float-end">Pridėti naują kategorija</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Pavadinimas</th>
                            <th>Paveikslas</th>
                            <th>Kiekis</th>
                            <th>Prekės</th>
                            <th>Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( \models\Category::all() as $category )
                        <tr>
                            <td>{{$category->getName()}}</td>
                            <td>{{$category->getImage()}}</td>
                            <td>
                                <a class="btn btn-info" href="products.php?id={{$category->getId()}}">Prekės</a>
                            </td>
                            <td>{{$category->getCount()}}</td>
                            <td>
                                <a class="btn btn-info" href="update.php?id={{$category->getId()}}">Redaguoti</a>
                                <a class="btn btn-danger" href="index.php?delete={{$category->getId()}}">Trinti</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
@endsection
