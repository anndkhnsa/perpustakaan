@extends('layout.quest')

@section('title','Selamat Datang | Perpustakaan')

@section('content')

<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Bulan adalah novel karya Tere Liye yang mengisahkan tentang perjalanan hidup seorang anak muda bernama Raka. Novel ini menggambarkan perjuangan Raka dalam mencari jati diri, menghadapi cobaan hidup, dan menemukan makna sejati dalam kehidupan."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img width="200px" src="{{ asset('frontend/assets/img/bulan.jpg')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Koleksi Kami</h2>
                    <p class="lead fw-normal text-muted mb-5">"Tersimpan Dalam Kata: Koleksi Kami di Perpustakaan

                        Di dalam dinding-dinding kami, tersimpan dunia yang tak terhingga, terpampang dalam jajaran koleksi yang kami banggakan di perpustakaan"</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('frontend/assets/img/bulan.jpg')}}" />
                    <div class="card-body p-4">
                        <!-- <div class="badge bg-dark bg-gradient rounded-pill mb-2">News</div> -->

                        <from action="" method="">
                            <button type="button" class="btn btn-dark rounded-pill mb-2 bi bi-bookmark"></button>
                        </from>

                        <from action="" method="">
                            <button type="button" class="btn btn-dark rounded-pill mb-2 bi bi-journal-bookmark"></button>
                        </from>

                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Bulan</h5>
                        </a>
                        <p class="card-text mb-0">Di tengah hiruk-pikuk kota besar, ada seorang gadis bernama Bulan. Dikenal karena kecerdasannya dan keunikan pribadinya, Bulan menjalani kehidupan yang tak biasa. Namun, di balik kesederhanaannya, tersimpan rahasia besar yang menghubungkannya dengan masa lalunya.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" />
                                <div class=" small">
                                    <div class="fw-bold">Tere Liye</div>
                                    <!-- <div class="text-muted">March 12, 2023 &middot; 6 min read</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('frontend/assets/img/bintang.jpg')}}" />
                    <div class="card-body p-4">
                        <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div> -->
                        <button type="button" class="btn btn-dark rounded-pill mb-2 bi bi-bookmark"></button>
                        <button type="button" class="btn btn-dark rounded-pill mb-2 bi bi-journal-bookmark"></button>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Bintang</h5>
                        </a>
                        <p class="card-text mb-0">Bintang, seorang pemuda yang penuh semangat dan impian besar, memulai perjalanan hidupnya dengan tekad yang kuat untuk meraih bintang-bintang. Dia bercita-cita menjadi seorang astronot dan menjelajahi angkasa luar. Namun, di tengah perjalanannya, Bintang harus menghadapi berbagai rintangan dan tantangan yang menguji kekuatan serta keteguhan hatinya.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Tere Liye</div>
                                    <!-- <div class="text-muted">March 23, 2023 &middot; 4 min read</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('frontend/assets/img/bumi.jpg')}}" />
                    <div class="card-body p-4">
                        <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div> -->
                        <button type="button" class="btn btn-dark rounded-pill mb-2 bi bi-bookmark"></button>
                        <button type="button" class="btn btn-dark rounded-pill mb-2 bi bi-journal-bookmark"></button>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Bumi</h5>
                        </a>
                        <p class="card-text mb-0"> mengisahkan tentang petualangan seorang anak laki-laki bernama Bumi yang memiliki kepekaan luar biasa terhadap alam dan lingkungan sekitarnya. Dia tumbuh di sebuah desa kecil yang damai di pedalaman, di mana kehidupan sehari-hari dipenuhi dengan keindahan alam dan kebijaksanaan tradisional.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Tere Liye</div>
                                    <!-- <div class="text-muted">April 2, 2023 &middot; 10 min read</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <aside class="bg-dark bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Terimakasih Sudah Berkunjung</div>
                    <div class="text-white-50">"Setiap halaman adalah peluang untuk bertumbuh dan berkembang. Dengan membaca buku, Anda memperluas wawasan, meningkatkan pemahaman, dan memperkaya pikiran Anda."</div>
                </div>
                <!-- <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                    </div>
                    <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                </div> -->
            </div>
        </aside>
    </div>
</section>
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright Your Website 2024</div>
            </div>
            <!-- <div class="col-auto">
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a>
            </div> -->
        </div>
    </div>
</footer>

@endsection