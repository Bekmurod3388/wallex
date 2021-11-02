@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить новости</h1></div>
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


                    <form action="{{route('admin.posts.update',$post)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="header_ru">Титул(Ру)</label>
                        <input type="text" name="header_ru" class="form-control" id="header_ru" placeholder="Титул" value="{{$post->header_ru}}">
                    </div>
                    <div class="form-group">
                        <label for="header2_ru">Титул 2(Ру)</label>
                        <input type="text" name="header2_ru" class="form-control" id="header2_ru" placeholder="Титул 2" value="{{$post->header2_ru}}">
                    </div>
                    <div class="form-group">
                        <label for="description_ru">Текст (Ру)</label>
                        <textarea  class="form-control"  name="description_ru" id="description_ru" rows="10">{{$post->description_ru}}</textarea>
                    </div>
                        <div class="form-group">
                            <label for="header_uz">Титул(Уз)</label>
                            <input type="text" name="header_uz" class="form-control" id="header_uz" placeholder="Титул" value="{{$post->header_uz}}">
                        </div>
                        <div class="form-group">
                            <label for="header2_uz">Титул 2(Уз)</label>
                            <input type="text" name="header2_uz" class="form-control" id="header2_uz" placeholder="Титул 2" value="{{$post->header2_uz}}">
                        </div>
                        <div class="form-group">
                            <label for="description_uz">Текст (Уз)</label>
                            <textarea  class="form-control" name="description_uz" id="description_uz" rows="10">{{$post->description_uz}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_en">Титул(En)</label>
                            <input type="text" name="header_en" class="form-control" id="header_en" placeholder="Титул" value="{{$post->header_en}}">
                        </div>
                        <div class="form-group">
                            <label for="header2_en">Титул 2(En)</label>
                            <input type="text" name="header2_en" class="form-control" id="header2_en" placeholder="Титул 2" value="{{$post->header2_en}}">
                        </div>
                        <div class="form-group">
                            <label for="description_en">Текст (En)</label>
                            <textarea  class="form-control"  name="description_en" id="description_en" rows="10">{{$post->description_en}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
