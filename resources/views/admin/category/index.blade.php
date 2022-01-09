<?php $i = 0; ?>
@extends('layouts.app')

@section('title', 'Все категории')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Все категории</h4>
                        <a class="btn btn-success" href="{{ route('category.create') }}">Добавить</a>
                    </div>
                    <x-alert />
                    <p class="card-description">
                        Add class <code>.table-striped</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Алиас</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$category['title']}}</td>
                                    <td>{{$category->alias}}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category['id']) }}" class="btn btn-secondary">Update</a>
                                        <a href="{{ route('category.show', $category['id']) }}" class="btn btn-primary">Show</a>
                                        <form action="{{ route('category.destroy', $category['id']) }}" method="POST">
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
