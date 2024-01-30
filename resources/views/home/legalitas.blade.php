@extends('master.master')
@section('content')

    <section id="features" class="features">
       <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-7">
                 <h3> <b>Layanan-layanan yang disediakan oleh <span>HOME LEGAL</span></b> </h3>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Perizinan
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li>AKTAPENDIRIAN <br> <span>CV/PT/YAYASAN</span></li>
                            <li>IZIN USAHA</li>
                            <li>IZIN BANDUNGAN <br> <span>IMB/PBG/SLF<span></li>
                            <li>IZINKAN LINGKUNGAN <br> <span>SPPL/UKL-UPL/AMDAL</span></li>
                            <li>DLL</li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Agraria
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li>SKPT</li>
                            <li>SURAT PENYERAHAN</li>
                            <li>SERTIFIKAT TANAH</li>
                            <li>BALIK NAMA</li>
                            <li>TURUN WARIS</li>
                            <li>AKTA HIBAH</li>
                            <li>DLL</li>
                        </ul>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Kelistrikan
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li>PASANG BARU</li>
                            <li>TAMBAH DAYA</li>
                            <li>INSTAL LISTRIK</li>
                            <li>INSTAL RISTRIK RUMAH</li>
                            <li>INSTAL RISTRIK KANTOR</li>
                            <li>INSTAL RISTRIK HOTEL</li>
                            <li>DLL</li>
                        </ul></div>
                  </div>
                </div> 
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      Bangunan
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                         <ul>
                            <li>DESAIN 2D/3D</li>
                            <li>KONSTRUKSI</li>
                            <li>PERHITUNGAN RAB</li>
                            <li>INTERIOR/EKSTERIOR</li>
                            <li>RENOVASI/DEKORASI</li>
                            <li>DLL</li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="col-lg-5">
                <img src="/img/fto.jpeg" class="img-fluid" alt="">
            </div>
        </div>
       </div>

    </section><!-- End Features Section -->

<style type="text/css">
.features .feature-box {
  padding: 24px 20px;
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
  transition: 0.3s;
  height: 100%;
}

.features .feature-box h3 {
  font-size: 16px;
  color: #012970;
  font-weight: 700;
  margin: 0;
}

.features .feature-box i {
  line-height: 0;
  background: #ecf3ff;
  padding: 4px;
  margin-right: 10px;
  font-size: 24px;
  border-radius: 3px;
  transition: 0.3s;
}

.features .feature-box:hover i {
  background: #4154f1;
  color: #fff;
}

.features .feture-tabs {
  margin-top: 120px;
}

.features .feture-tabs h3 {
  color: #012970;
  font-weight: 700;
  font-size: 32px;
  margin-bottom: 10px;
}

@media (max-width: 768px) {
  .features .feture-tabs h3 {
    font-size: 28px;
  }
}

.features .feture-tabs .nav-pills {
  border-bottom: 1px solid #eee;
}

.features .feture-tabs .nav-link {
  background: none;
  text-transform: uppercase;
  font-size: 15px;
  font-weight: 600;
  color: #012970;
  padding: 12px 0;
  margin-right: 25px;
  margin-bottom: -2px;
  border-radius: 0;
}

.features .feture-tabs .nav-link.active {
  color: #4154f1;
  border-bottom: 3px solid #4154f1;
}

.features .feture-tabs .tab-content h4 {
  font-size: 18px;
  margin: 0;
  font-weight: 700;
  color: #012970;
}

.features .feture-tabs .tab-content i {
  font-size: 24px;
  line-height: 0;
  margin-right: 8px;
  color: #4154f1;
}

.features .feature-icons {
  margin-top: 120px;
}

.features .feature-icons h3 {
  color: #012970;
  font-weight: 700;
  font-size: 32px;
  margin-bottom: 20px;
  text-align: center;
}

@media (max-width: 768px) {
  .features .feature-icons h3 {
    font-size: 28px;
  }
}

.features .feature-icons .content .icon-box {
  display: flex;
}

.features .feature-icons .content .icon-box h4 {
  font-size: 20px;
  font-weight: 700;
  margin: 0 0 10px 0;
  color: #012970;
}

.features .feature-icons .content .icon-box i {
  font-size: 44px;
  line-height: 44px;
  color: #0245bc;
  margin-right: 15px;
}

.features .feature-icons .content .icon-box p {
  font-size: 15px;
  color: #848484;
}
span{
  color: red;
}
ul,li{
  color:#012970 ;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 13px;
}
img{
    width: 80%;
    margin-left: 50px;
}

</style>

@endsection