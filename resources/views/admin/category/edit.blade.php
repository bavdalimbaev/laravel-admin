@extends('layouts.app')

@section('title', 'Редактировать категорию')

@section('content')
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Редактировать категорию: {{$category['title']}}</h4>
                    <x-alert />
                    <p class="card-description">
                        Basic form elements
                    </p>
                    <form class="forms-sample" action="{{route('category.update', $category['id'])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="exampleInputName1">Название категории</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputName1"
                                           value="{{$category['title']}}" placeholder="Введите название" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-lg">Обновить</button>
                                <a class="btn btn-light" href="{{route('category.index')}}">Отменить</a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
