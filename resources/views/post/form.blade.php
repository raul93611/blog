<div class="card-body">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post-> title ?? old('title') }}">
    {!! $errors-> first('title', '<span class="small text-danger">:message</span>') !!}
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Description" rows="8" cols="80">{{ $post-> description ?? old('description') }}</textarea>
    {!! $errors-> first('description', '<span class="small text-danger">:message</span>') !!}
  </div>
  <div class="custom-file">
    <input name="file" type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
