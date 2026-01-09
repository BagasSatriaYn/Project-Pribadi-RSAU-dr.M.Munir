<section id="appointment" class="appointment section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Buat Janji Temu</h2>
    <p>Silakan isi formulir di bawah untuk melakukan reservasi pemeriksaan</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
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
          </select>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="doctor" class="form-select" required>
            <option value="">Pilih Dokter</option>
            <option value="Dokter 1">Dr. Andi</option>
            <option value="Dokter 2">Dr. Sinta</option>
            <option value="Dokter 3">Dr. Budi</option>
          </select>
        </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Catatan (Opsional)"></textarea>
      </div>

      <div class="mt-3 text-center">
        <button type="submit">Kirim Permintaan</button>
      </div>
    </form>

  </div>

</section>
