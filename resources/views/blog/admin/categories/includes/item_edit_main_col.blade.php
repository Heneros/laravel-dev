<!-- BlogCategory $item -->
<div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-body">
    <div class="card-title"></div>
    <ul class="nav-tabs" role="tablist">
    <li class="nav-item">
    <a href="#maindata" class="nav-link-active" data-toggle="tab" role="tab">Основновные данные</a>
    </li> 
    
    </ul>
    <br>
    <div class="tab-contents">
    <div class="tab-pane active" id="maindata" role="tabpanel">
    <div class="form-group">
    <label for="title">Заголовок</label>
    <input 
    type="text"
    name="title"
    value="{{ $item->title }}"
    id="title"
    class="form-control"
    minlength="3"
    required>
    </div>
    <div class="form-group">
    <label for="slug">Идентификатор</label>
    <input 
    type="text"
    value="{{ $item->slug }}"
    id="slug"
    name="slug"
    class="form-control"
    required>
    </div>

    <div class="form-group">
    <label for="parent_id">Родитель</label>
    <select 
    name="parent_id" 
    id="parent_id"
    class="form-control"
    placeholder="Выберете категорию"
    required>
    @foreach($categoryList as $categoryOption)
    <option value="{{ $categoryOption->id}}"
    @if($categoryOption->id == $item->parent_id) selected @endif>
    {{$categoryOption->id}} . {{ $categoryOption->title}}
    </option>
    @endforeach
    </select>  
    </div>
 
    <div class="form-group">
    <label for="description">Описание</label> 
   <textarea 
   name="description" 
   class="form-control"
   id="description"  
   rows="3">
    {{old('description', $item->description)}}
   </textarea>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>