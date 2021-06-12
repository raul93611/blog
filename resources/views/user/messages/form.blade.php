<div class="card-body">
  <div class="form-group">
    <label for="user">Send to:</label>
    <select name="user" class="custom-select">
      @foreach ($users as $user)
        <option value="{{ $user-> id }}">{{ $user-> name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control" id="body" placeholder="Message ..." rows="8" cols="80">{{ $comment-> body ?? old('body') }}</textarea>
    {!! $errors-> first('body', '<span class="small text-danger">:message</span>') !!}
  </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
