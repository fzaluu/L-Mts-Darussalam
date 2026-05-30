<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SDM Sekolah</title>
  <link rel="icon" type="image/png" href="assets/img/logomts.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/sdm.css">
</head>

<body>

  <input type="checkbox" id="menu-toggle" />

  <nav>
    <a href="" class="brand">
      <img src="assets/img/logomts.jpeg" alt="Logo MTS Darussalam" />
      <div class="logotext">
        <p class="tulisan1">MTS</p>
        <p class="tulisan2">Darussalam</p>
      </div>
    </a>

    <ul>
      <li><a href="index.html">Beranda</a></li>
      <li><a href="profil.html">Profil</a></li>
      <li><a href="sdm.html" class="active">SDM</a></li>
      <li>
        <a href="#siswa">Siswa <span class="siswa-arrow">▼</span></a>
        <ul class="dropdown-menu">
          <li><a href="seragam.html">Seragam</a></li>
          <li><a href="rombel.html">Rombel</a></li>
          <li><a href="eskul.html">Ekstrakurikuler</a></li>
          <li><a href="prestasi.html">Prestasi</a></li>
        </ul>
      </li>
      <li><a href="kontak.html">Kontak</a></li>
    </ul>

    <label class="garis-label" for="menu-toggle" aria-label="Buka menu">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </nav>

  <div class="mobile-menu">
    <ul>
      <li><a href="index.html">Beranda</a></li>
      <li><a href="profil.html">Profil</a></li>
      <li><a href="sdm.html" class="active">SDM</a></li>
      <li class="has-dropdown">
        <input type="checkbox" id="dropdown-toggle" />
        <label for="dropdown-toggle">
          Siswa <span class="arrow">▼</span>
        </label>
        <ul class="mobile-dropdown">
          <li><a href="seragam.html">Seragam</a></li>
          <li><a href="rombel.html">Rombel</a></li>
          <li><a href="eskul.html">Ekstrakurikuler</a></li>
          <li><a href="prestasi.html">Prestasi</a></li>
        </ul>
      </li>
      <li><a href="kontak.html">Kontak</a></li>
    </ul>
  </div>

<section class="struktur-section">
  <div class="struktur-container">

    <div class="section1-title">
      <span>STRUKTUR ORGANISASI</span>
    </div>
    <div class="text-end mb-4">
     <a href="/Sdm/tambah" class="btn btn-primary my-2"> + Tambah Data</a
    </div>

<div class="sdm-container">
  
  <div class="grid-pengajar">
    @foreach($sdm as $data)
      @if($data->jabatan == 'Kepala Sekolah')
        <div class="card-custom">
          <img src="{{ asset('assets/img/' . $data->foto) }}" alt="Kepala Sekolah">
          <div class="info-struktur">
            <p class="nama-struktur">{{ $data->nama_guru }}</p>
            <p class="jabatan-struktur">{{ $data->jabatan }}</p>
            <a href="/Sdm/{{ $data->id }}/edit" class="btn btn-sm btn-warning"> Edit</a>
          <form action="/Sdm/{{ $data->id }}" method="POST" class="d-inline"
                onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">
                  Hapus
              </button>
          </form>
          </div>
        </div>
      @endif
    @endforeach
  </div>

  <div class="struktur-row" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
    @foreach($sdm as $data)
      @if($data->jabatan != 'Kepala Sekolah')
        <div class="card-custom">
          <img src="{{ asset('assets/img/' . $data->foto) }}" alt="{{ $data->jabatan }}">
          <div class="info-struktur">
            <p class="nama-struktur">{{ $data->nama_guru }}</p>
            <p class="jabatan-struktur">{{ $data->jabatan }}</p>
              <a href="/Sdm/edit/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="/Sdm/hapus/{{ $data->id }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
          </div>
        </div>
      @endif
    @endforeach
  </div>

</div>

  </div>
</section>
  <section class="sdm-section">

<div class="section2-title">
        <span>TENAGA PENDIDIK & STAF TENAGA PENDIDIK</span>
      </div>



    <div class="sdm-container">

      <div class="sdm-grid">
        <div class="card-sdm">
          <img src="assets/img/eris.jpeg" alt="Guru 1">
          <div class="info-sdm">
            <p class="nama-sdm">Eris Asy'ary, S.Pd.I</p>
            <p class="jabatan-sdm">Akhlak & B.Arab</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/anwar.jpeg" alt="Guru 2">
          <div class="info-sdm">
            <p class="nama-sdm">Anwar Hidayat, S.S, S.S.I</p>
            <p class="jabatan-sdm">B.Inggris</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/dede.jpeg" alt="Guru 3">
          <div class="info-sdm">
            <p class="nama-sdm">Dede Bukhori, S.H.I</p>
            <p class="jabatan-sdm">Pkn & Sunda</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/eha.jpeg" alt="Guru 4">
          <div class="info-sdm">
            <p class="nama-sdm">Eha Juleha, S.Pd</p>
            <p class="jabatan-sdm">Mtk & IPA</p>
          </div>
        </div>

        <div class="card-sdm">
          <img src="assets/img/aan.jpeg" alt="Guru 5">
          <div class="info-sdm">
            <p class="nama-sdm">Aan Setianah, S.Pd</p>
            <p class="jabatan-sdm">Mtk & IPA</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/ipan.png" alt="Guru 6">
          <div class="info-sdm">
            <p class="nama-sdm">Ipan Sopan, S.Pd.I</p>
            <p class="jabatan-sdm">SKI & Akhlakul Banin</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/adisti.jpeg" alt="Guru 7">
          <div class="info-sdm">
            <p class="nama-sdm">Adisti Nuryani</p>
            <p class="jabatan-sdm">Pembina Osis</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/yulia.jpeg" alt="Guru 8">
          <div class="info-sdm">
            <p class="nama-sdm">Yulia Nursaadah Asri</p>
            <p class="jabatan-sdm">Fiqih & Prakarya</p>
          </div>
        </div>

        <div class="card-sdm">
          <img src="assets/img/nissa.jpeg" alt="Guru 9">
          <div class="info-sdm">
            <p class="nama-sdm">Khoirunnisa Jovi, S.Pd.I</p>
            <p class="jabatan-sdm">Alquran Hadist & BTQ</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/lela.jpeg" alt="Guru 10">
          <div class="info-sdm">
            <p class="nama-sdm">Lela Nurlela</p>
            <p class="jabatan-sdm">IPS</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/enok.jpeg" alt="Guru 11">
          <div class="info-sdm">
            <p class="nama-sdm">Dra. Enok Ebah</p>
            <p class="jabatan-sdm">B.Indonesia</p>
          </div>
        </div>
        <div class="card-sdm">
          <img src="assets/img/Jili.jpeg" alt="Guru 12">
          <div class="info-sdm">
            <p class="nama-sdm">Jili Munfariz, S.Pd</p>
            <p class="jabatan-sdm">TIK</p>
          </div>
        </div>

        <div class="card-sdm card-last">
          <img src="assets/img/deni.jpeg" alt="Guru 13">
          <div class="info-sdm">
            <p class="nama-sdm">Deni Purnama, S.Pd</p>
            <p class="jabatan-sdm">PJOK</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <footer class="footer">
    <div class="top-row">
      <div class="logos">
        <img src="kontak/img/yayasan.png" alt="Logo 1" />
        <img src="kontak/img/kemenag.png" alt="Logo 2" />
        <img src="kontak/img/mts.png" alt="Logo 3" />
      </div>
      <p class="visi-text">
        "Terwujudnya sekolah yang melahirkan peserta didik berkarakter,
        berakhlak, dan penuh empati<br />
        melalui lingkungan belajar yang nyaman, harmonis, dan humanis."
      </p>
    </div>

    <hr class="divider" style="border-top: 2px solid #ffffff;" />

    <div class="middle-row">
      <div class="kontak">
        <p class="kontak-title">Kontak</p>

        <div class="kontak-item">
          <img src="kontak/img/icons8-phone-50.png" alt="Telepon" />
          <div>
            <p class="label">Telepon</p>
            <p class="value">+62 877-2552-5133</p>
          </div>
        </div>
        <hr class="kontak-divider" />

        <div class="kontak-item">
          <img src="kontak/img/icons8-email-30.png" alt="Email" />
          <div>
            <p class="label">Email</p>
            <p class="value">mtsmomo@gmail.com</p>
          </div>
        </div>
        <hr class="kontak-divider" />

        <div class="kontak-item">
          <img src="kontak/img/icons8-location-50.png" alt="Alamat" />
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
          <img src="kontak/img/icons8-clock-50.png" alt="Jam Kerja" />
          <div>
            <p class="label">Jam Kerja</p>
            <p class="value">Senin- Sabtu: 06.30 AM - 16.00 PM</p>
          </div>
        </div>
      </div>

      <div class="sosmed">
        <div class="sosmed-item">
          <a href="https://www.instagram.com/mochamad_syahid?igsh=eDZ4MGp0enozcXA4">
            <div class="icon-circle">
              <img src="kontak/img/ig.png" alt="Instagram" />
            </div>
          </a>
          <a href="https://www.instagram.com/mochamad_syahid?igsh=eDZ4MGp0enozcXA4">
            <p>darussalamleuwianyar</p>
          </a>
        </div>
        <div class="sosmed-item">
          <a href="https://www.tiktok.com/@darussalam_la?_r=1&_t=ZS-965C41c59mu">
            <div class="icon-circle">
              <img src="kontak/img/tt.png" alt="TikTok" />
            </div>
          </a>
          <a href="https://www.tiktok.com/@darussalam_la?_r=1&_t=ZS-965C41c59mu">
            <p>Darussalam</p>
          </a>
        </div>
        <div class="sosmed-item">
          <a href="https://www.facebook.com/PPDBDarussalamleuwianyar">
            <div class="icon-circle">
              <img src="kontak/img/icons8-facebook-30.png" alt="Facebook" />
            </div>
          </a>
          <a href="https://www.facebook.com/PPDBDarussalamleuwianyar">
            <p>Darussalam</p>
          </a>
        </div>
        <div class="sosmed-item">
          <a href="https://youtube.com/@darussalamleuwianyar?si=3GTPEKXgchUXX8zx">
            <div class="icon-circle">
              <img src="kontak/img/yt.png" alt="YouTube" />
            </div>
          </a>
          <a href="https://youtube.com/@darussalamleuwianyar?si=3GTPEKXgchUXX8zx" class="">
            <p>Darussalam</p>
          </a>
        </div>
      </div>

>
        <div class="form-section">
          <input type="text" placeholder="Nama" />
          <input type="email" placeholder="Email" />
          <textarea placeholder="Pesan"></textarea>
          <button class="btn-submit" type="button">Kirim</button>
        </div>
      </form>
    </div>

    <hr class="divider" style="border-top: 2px solid #ffffff;" />

    <div class="footer-akhir">
      <p>
        &copy;2026.<br />
        Design By TEFA PPLG SMKN 4 Tasikmalaya.
      </p>
    </div>
  </footer>

</body>

</html>