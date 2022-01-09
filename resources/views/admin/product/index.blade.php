<?php $i = 0; ?>
@extends('layouts.app')

@section('title', 'Все товары')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Все товары</h4>
                        <a class="btn btn-success" href="{{ route('product.create') }}">Добaвить</a>
                    </div>
                    <p class="card-description">
                        Add class <code>.table-striped</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Цена</th>
                                <th>Дата</th>
                                <th>Статус</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->category->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <a href="{{ route('product.edit', $product['id']) }}" class="btn btn-secondary">Update</a>
                                        <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary">Show</a>
                                        <form action="{{ route('product.destroy', $product['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
