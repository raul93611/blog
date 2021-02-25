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
  @unless ($user-> id)
    <div class="form-group">
      <label for="title">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      {!! $errors-> first('password', '<span class="small text-danger">:message</span>') !!}
    </div>
    <div class="form-group">
      <label for="title">Password Confirm</label>
      <input type="password" class="form-control" id="password_confirmation" placeholder="Password" name="password_confirmation">
      {!! $errors-> first('password_confirmation', '<span class="small text-danger">:message</span>') !!}
    </div>
  @endunless
  @foreach ($roles as $key => $name)
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="{{ $key }}" value="{{ $key }}" name="roles[]" {{ $user-> roles-> pluck('id')-> contains($key) ? 'checked' : '' }}>
      <label class="form-check-label" for="{{ $key }}">{{ $name }}</label>
    </div>
  @endforeach
  <br>
  {!! $errors-> first('roles', '<span class="small text-danger">:message</span>') !!}
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
