<div class="card-body">
  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" class="form-control" id="message" placeholder="Message ..." rows="8" cols="80">{{ $comment-> body ?? old('message') }}</textarea>
    {!! $errors-> first('message', '<span class="small text-danger">:message</span>') !!}
  </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
