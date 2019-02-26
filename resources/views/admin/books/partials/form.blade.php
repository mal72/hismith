<div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" value="{{$book->name ?? ''}}" id="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="price">Стоимость</label>
                    <input type="text" name="price" value="{{$book->price ?? ''}}" id="price" class="form-control" />
                </div>