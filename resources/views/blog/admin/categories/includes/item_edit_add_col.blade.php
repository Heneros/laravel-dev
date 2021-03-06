<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card">
                <div class="card-body">
                   <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <br>
@if($item->exists)
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card">
                <div class="card-body">
                    <ul class="list-untyled">
                    <li>ID: {{ $item->id}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
    <br>
    <div class="row justify-co ntent-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Создано</label>
                    <input type="text" value="{{ $item->created_at }}" class="form-control">
                    </div>
                    <div class="form-group" disabled>
                        <label for="title">Изменено</label>
                    <input type="text" value="{{ $item->updated_at }}" class="form-control">
                    </div>
                    <div class="form-group" disabled>
                        <label for="title">Удалено</label>
                    <input type="text" value="{{ $item->deleted_at }}" class="form-control"
                    disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endif