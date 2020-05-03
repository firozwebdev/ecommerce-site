@if ($errors->any())
  <div class="alert alert-warning fade show">
    <h4 class="mt-0">Oh snap!</h4>
      <ul>
          @foreach ($errors->all() as $error)
              <li><p class="mb-0">{{ $error }}</p></li>
          @endforeach
      </ul>
  </div>
@endif
