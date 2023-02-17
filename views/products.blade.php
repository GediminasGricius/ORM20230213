@extends("layouts.main")
@section("content")
<div class="card">
    <div class="card-header">Prekės kategorijoje: {{$category->getName() }}></div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Aprašymas</th>
                <th>Kaina</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($category->getProducts() as $product)
            <tr>
                <td>{{$product->getName()}}</td>
                <td>{!!  $product->getDescription() !!}</td>
                <td>{{$product->getPrice()}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection