<div class="card-body">
  <div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $user-> name ?? old('name') }}">
    {!! $errors-> first('name', '<span class="small text-danger">:message</span>') !!}
  </div>
  <div class="form-group">
    <label for="title">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user-> email ?? old('email') }}">
    {!! $errors-> first('email', '<span class="small text-danger">:message</span>') !!}
  </div>
  @foreach ($roles as $key => $name)
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="{{ $key }}" value="{{ $key }}" name="roles[]" {{ $user-> roles-> pluck('id')-> contains($key) ? 'checked' : ''}}>
      <label class="form-check-label" for="{{ $key }}">{{ $name }}</label>
    </div>
  @endforeach
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
