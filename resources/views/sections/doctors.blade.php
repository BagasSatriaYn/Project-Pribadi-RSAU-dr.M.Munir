<section id="doctors" class="doctors section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Doctors</h2>
    <p>Temui tenaga medis profesional kami yang siap melayani Anda.</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      @foreach($doctors as $doctor)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="team-member">
          <div class="member-img">
            <img src="{{ asset('storage/' . $doctor->image) }}" class="img-fluid" alt="{{ $doctor->name }}">
            <div class="social">
              @if($doctor->twitter) <a href="{{ $doctor->twitter }}"><i class="bi bi-twitter-x"></i></a> @endif
              @if($doctor->facebook) <a href="{{ $doctor->facebook }}"><i class="bi bi-facebook"></i></a> @endif
              @if($doctor->instagram) <a href="{{ $doctor->instagram }}"><i class="bi bi-instagram"></i></a> @endif
              @if($doctor->linkedin) <a href="{{ $doctor->linkedin }}"><i class="bi bi-linkedin"></i></a> @endif
            </div>
          </div>
          <div class="member-info">
            <h4>{{ $doctor->name }}</h4>
            <span>{{ $doctor->specialist }}</span>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>