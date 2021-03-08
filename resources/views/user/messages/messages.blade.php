<div class="timeline">
  @foreach ($messages as $key => $message)
    <div>
      <i class="fas fa-comments bg-yellow"></i>
      <div class="timeline-item">
        <span class="time"><i class="fas fa-clock"></i> {{ $message-> created_at }}</span>
        <h3 class="timeline-header"><b>{{ $message-> user-> name }}</b> sent you a message</h3>
        <div class="timeline-body">
          {{ $message-> body }}
        </div>
      </div>
    </div>
  @endforeach
</div>
