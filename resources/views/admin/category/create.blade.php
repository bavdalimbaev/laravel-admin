@extends('layouts.app')

@section('title', 'Добавить категорию')

@section('content')
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <x-alert />
                    <p class="card-description">
                        Basic form elements
                    </p>
                    <form class="forms-sample" action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="exampleInputName1">Название категории</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Введите название">
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
                                <a class="btn btn-light" href="{{route('category.index')}}">Отменить</a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
