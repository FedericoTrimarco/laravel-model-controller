<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
    <div class="container">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand fs-1" href="/">Navbar</a>
        <div>
          <ul class="navbar-nav fs-3">
            <li class="me-3">
              <a href="/" class="text-decoration-none cl-black">home</a>
            </li>
            <li>
              <a href="{{ route('news') }}" class="text-decoration-none cl-black">news</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>