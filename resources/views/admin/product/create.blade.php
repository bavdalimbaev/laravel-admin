@extends('layouts.app')

@section('title', 'Добавить товар')

@section('content')
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Форма добавления товара</h4>
                    <p class="card-description">
                        Basic form elements
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Название</label>
                            <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label>Категории</label>
                            <select class="form-select" name="category_id" aria-label="Default select example" required>
                                <option selected>Выберите категорию</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                       placeholder="Upload Image">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Описание</label>
                            <textarea class="editor" name="description" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Сохранить</button>
                        <a class="btn btn-light" href="{{route('product.index')}}">Отменить</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
