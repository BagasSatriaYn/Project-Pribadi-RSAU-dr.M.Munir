<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kontak Kami</h2>
    <p>Hubungi kami untuk informasi layanan dan pendaftaran</p>
  </div><!-- End Section Title -->

  <!-- Google Maps -->
  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <!-- Ganti src maps sesuai lokasi rumah sakit -->
    <iframe
      style="border:0; width: 100%; height: 370px;"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1975.813499143917!2d112.70144581756853!3d-7.933968196308268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6293cfc01fdc9%3A0x7906689e15166f24!2sRS.%20TNI%20AU%20Lanud%20Abdulrachman%20Saleh!5e0!3m2!1sid!2sid!4v1767948344569!5m2!1sid!2s"
      frameborder="0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div><!-- End Google Maps -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <!-- Info -->
      <div class="col-lg-6">
        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jl. Komud ABD. Saleh Jl. Dr. Munir No.18, Saptorenggo, Kec. Pakis, Kabupaten Malang</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Telepon</h3>
              <p>(0341) 123456</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>info@rumahsakitmunir.ac.id</p>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
            </div>

            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="4" placeholder="Pesan" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Mengirim...</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Anda berhasil dikirim. Terima kasih!</div>

              <button type="submit">Kirim Pesan</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section>
