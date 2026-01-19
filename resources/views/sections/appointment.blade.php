<section id="appointment" class="appointment section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Buat Janji Temu</h2>
    <p>Silakan isi formulir di bawah untuk melakukan reservasi pemeriksaan</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    {{-- Notifikasi Sukses --}}
    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    {{-- Ubah action ke route Laravel dan hapus class php-email-form --}}
    <form action="{{ route('appointment.store') }}" method="post" role="form" class="p-4 shadow bg-white rounded">
      @csrf {{-- Token keamanan wajib Laravel --}}
      
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="phone" placeholder="Nomor Telepon" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 form-group mt-3">
          <input type="datetime-local" name="date" class="form-control" required>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="department" class="form-select" required>
            <option value="">Pilih Poli</option>
            <option value="Umum">Poli Umum</option>
            <option value="Gigi">Poli Gigi</option>
            <option value="Anak">Poli Anak</option>
            <option value="Bedah">Poli Bedah</option>
          </select>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="doctor" class="form-select" required>
            <option value="">Pilih Dokter</option>
            {{-- Mengambil data dokter secara dinamis dari database --}}
            @foreach($doctors as $doctor)
              <option value="{{ $doctor->name }}">{{ $doctor->name }} ({{ $doctor->specialist }})</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Catatan (Opsional)"></textarea>
      </div>

      <div class="mt-3 text-center">
        {{-- Styling tombol agar tetap cantik seperti tema Medicio --}}
        <button type="submit" style="background: #1977cc; border: 0; padding: 10px 35px; color: #fff; border-radius: 50px; transition: 0.4s;">Kirim Permintaan</button>
      </div>
    </form>

  </div>
</section>