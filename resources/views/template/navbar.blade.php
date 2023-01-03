<nav style="background-color:#00008B;" class="navbar navbar-expand-lg">
    <div  class="container">
      <a style=" color:white;" class="navbar-brand" href="{{ url('/home') }}">RSUD PROF. DR. SOEKANDAR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarText">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a style=" color:white;" class="nav-link active" aria-current="page" href="{{ route('patient.index') }}">pasien</a>
          </li>
          <li class="nav-item">
            <a style=" color:white;" class="nav-link" href="{{ route('doctor.index') }}">Doctor</a>
          </li>
          <li class="nav-item">
            <a style=" color:white;" class="nav-link" href="">About me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
