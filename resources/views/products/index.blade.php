@extends('layout.product')

@section('title', 'lista')

@section('content')
    <h1>Lista produktów</h1>
    <table>
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>