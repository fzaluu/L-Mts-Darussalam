<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ekstrakurikuler</title>
    <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/revisi.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css')}}" />
  </head>

  <body>
    <input type="checkbox" id="menu-toggle" />

    <nav>
      <a href="" class="brand">
        <img src="{{ asset('assets/img/logomts.jpeg')}}" alt="Logo MTS Darussalam" />
        <div class="logotext">
          <p class="tulisan1">MTS</p>
          <p class="tulisan2">Darussalam</p>
        </div>
      </a>

      <ul>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/profil')}}">Profil</a></li>
        <li><a href="{{ url('/sdm')}}">SDM</a></li>
        <li>
          <a href="#siswa" class="active"
            >Siswa <span class="siswa-arrow">▼</span></a
          >
          <ul class="dropdown-menu">
            <li><a href="{{ url('/seragam')}}">Seragam</a></li>
            <li><a href="{{ url('/rombel')}}">Rombel</a></li>
            <li><a href="{{ url('/ekstrakurikuler')}}" class="active">Ekstrakurikuler</a></li>
            <li><a href="{{ url('/prestasi')}}">Prestasi</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/kontak')}}">Kontak</a></li>
      </ul>

      <label class="garis-label" for="menu-toggle" aria-label="Buka menu">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </nav>

    <div class="mobile-menu">
      <ul>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/profil')}}">Profil</a></li>
        <li><a href="{{ url('/sdm')}}">SDM</a></li>
        <li class="has-dropdown">
          <input type="checkbox" id="dropdown-toggle" />
          <label for="dropdown-toggle">
            Siswa <span class="arrow">▼</span>
          </label>
          <ul class="mobile-dropdown">
            <li><a href="{{ url('/seragam')}}">Seragam</a></li>
            <li><a href="{{ url('/rombel')}}">Rombel</a></li>
            <li><a href="{{ url('/ekstrakurikuler')}}" class="active">Ekstrakurikuler</a></li>
            <li><a href="{{ url('/prestasi')}}">Prestasi</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/kontak')}}  ">Kontak</a></li>
      </ul>
    </div>
    <!-- bagian ekstrakulikuler -->
    <div class="section-wrapper">
      <div class="judul">
        <h2>EKSTRAKURIKULER</h2>
      </div>

      <div class="eskul-container">
        <!-- Baris atas: Pramuka (besar, tengah) -->
        <div class="eskul-top">
          <div class="card-eskul card-besar">
            <div class="eskul-nama">Pramuka</div>
            <img
              src="{{ asset('assets/img/pramuka2.jpeg')}}"
              class="img-eskul"
              alt="Pramuka"
            />
          </div>
        </div>

        <!-- Baris bawah: 3 card kecil -->
        <div class="eskul-bottom">
          <div class="card-eskul card-kecil">
            <div class="eskul-nama">Futsal</div>
            <img src="{{ asset('assets/img/futsal.jpeg')}}" class="img-eskul" alt="Futsal" />
          </div>
          <div class="card-eskul card-kecil">
            <div class="eskul-nama">Tahfidz</div>
            <img
              src="{{ asset('assets/img/tahfidz.jpeg')}}"
              class="img-eskul"
              alt="Tahfidz"
            />
          </div>
          <div class="card-eskul card-kecil">
            <div class="eskul-nama">Paskibra</div>
            <img src="{{ asset('assets/img/lkbb.jpeg')}}" class="img-eskul" alt="Paskibra" />
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <!-- TOP ROW: Logo + Visi -->
      <div class="top-row">
        <div class="logos">
          <img src="{{ asset('kontak/img/yayasan.png')}}" alt="Logo 1" />
          <img src="{{ asset('kontak/img/kemenag.png')}}" alt="Logo 2" />
          <img src="{{ asset('kontak/img/mts.png')}}" alt="Logo 3" />
        </div>
        <p class="visi-text">
          "Terwujudnya sekolah yang melahirkan peserta didik berkarakter,
          berakhlak, dan penuh empati<br />
          melalui lingkungan belajar yang nyaman, harmonis, dan humanis."
        </p>
      </div>

      <hr class="divider" />

      <!-- MIDDLE ROW -->
      <div class="middle-row">
        <!-- Kontak -->
        <div class="kontak">
          <p class="kontak-title">Kontak</p>

          <div class="kontak-item">
            <img src="{{ asset('kontak/img/icons8-phone-50.png')}}" alt="Telepon" />
            <div>
              <p class="label">Telepon</p>
              <p class="value">+62 877-2552-5133</p>
            </div>
          </div>
          <hr class="kontak-divider" />

          <div class="kontak-item">
            <img src="{{ asset('kontak/img/icons8-email-30.png')}}" alt="Email" />
            <div>
              <p class="label">Email</p>
              <p class="value">mtsmomo@gmail.com</p>
            </div>
          </div>
          <hr class="kontak-divider" />

          <div class="kontak-item">
            <img src="{{ asset('kontak/img/icons8-location-50.png')}}" alt="Alamat" />
            <div>
              <p class="label">Alamat</p>
              <p class="value">
                RT.04/RW.05, Sukamanah, Kec.<br />
                Cipedes, Kab. Tasikmalaya, Jawa<br />
                Barat 46131, Indonesia
              </p>
            </div>
          </div>
          <hr class="kontak-divider" />

          <div class="kontak-item">
            <img src="{{ asset('kontak/img/icons8-clock-50.png')}}" alt="Jam Kerja" />
            <div>
              <p class="label">Jam Kerja</p>
              <p class="value">Senin- Sabtu: 06.30 AM - 16.00 PM</p>
            </div>
          </div>
        </div>

        <!-- Sosmed -->
        <div class="sosmed">
          <div class="sosmed-item">
            <a
              href="https://www.instagram.com/mochamad_syahid?igsh=eDZ4MGp0enozcXA4"
            >
              <div class="icon-circle">
                <img src="{{ asset('kontak/img/ig.png')}}" alt="Instagram" />
              </div>
            </a>
            <a
              href="https://www.instagram.com/mochamad_syahid?igsh=eDZ4MGp0enozcXA4"
            >
              <p>darussalamleuwianyar</p>
            </a>
          </div>
          <!-- link tiktok -->
          <div class="sosmed-item">
            <a
              href="https://www.tiktok.com/@darussalam_la?_r=1&_t=ZS-965C41c59mu"
            >
              <div class="icon-circle">
                <img src="{{ asset('kontak/img/tt.png')}}" alt="TikTok" />
              </div>
            </a>
            <a
              href="https://www.tiktok.com/@darussalam_la?_r=1&_t=ZS-965C41c59mu"
            >
              <p>Darussalam</p>
            </a>
          </div>
          <!-- link facebook -->
          <div class="sosmed-item">
            <a href="https://www.facebook.com/PPDBDarussalamleuwianyar">
              <div class="icon-circle">
                <img src="{{ asset('kontak/img/icons8-facebook-30.png')}}" alt="Facebook" />
              </div>
            </a>
            <a href="https://www.facebook.com/PPDBDarussalamleuwianyar">
              <p>Darussalam</p>
            </a>
          </div>
          <!-- link youtube -->
          <div class="sosmed-item">
            <a
              href="https://youtube.com/@darussalamleuwianyar?si=3GTPEKXgchUXX8zx"
            >
              <div class="icon-circle">
                <img src="{{ asset('kontak/img/yt.png')}}" alt="YouTube" />
              </div>
            </a>
            <a
              href="https://youtube.com/@darussalamleuwianyar?si=3GTPEKXgchUXX8zx"
              class=""
            >
              <p>Darussalam</p>
            </a>
          </div>
        </div>
        <!-- Form -->
        <form action="{{ route('kontak.store')}}" method="post">
                @csrf
                <div class="form-section">
                    @if(session('success'))
                    <div style="background-color: #d1e7dd; color: #0f5132; padding: 12px; border-radius: 4px; margin-bottom: 12px; text-align: center; font-size: 14px;">
                        {{ session('success') }}
                    </div>
                    @endif
                    <input name="nama" type="text" placeholder="Nama" />
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    <input name="email" type="email" placeholder="Email" />
                    <textarea name="pesan" placeholder="Pesan"></textarea>
                    <button class="btn-submit" type="submit">Kirim</button>
                </div>
            </form>
      </div>

      <hr class="divider" />

      <!-- Footer bawah -->
      <div class="footer-akhir">
        <p>
          &copy;2026.<br />
          Design By TEFA PPLG SMKN 4 Tasikmalaya.
        </p>
      </div>
    </footer>
  </body>
</html>
