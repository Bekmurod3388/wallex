@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить продукты</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.products.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Титул (Ру)</label>
                            <input type="text" name="head_ru" class="form-control" id="header_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header2_ru">Титул (Ру)</label>
                            <input type="text" name="head2_ru" class="form-control" id="header2_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (Ру)</label>
                            <textarea class="form-control" name="description_ru" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="header">Титул (En)</label>
                            <input type="text" name="head_en" class="form-control" id="header" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header2">Титул 2 (En)</label>
                            <input type="text" name="head2_en" class="form-control" id="header2" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (En)</label>
                            <textarea  class="form-control" name="description_en" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Выберите категория</label>
                            <select class="form-control" name="category_id">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="img">Добавьте иконки</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <div class="form-group">
                            <label for="img2">Добавьте рисунок</label>
                            <input type="file" name="img2" class="form-control" id="img2">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
