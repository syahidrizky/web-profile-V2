@extends('master')

@section('konten')
    <section class="section">
        <h2 class="secttion-header">Portofolio</h2>
        <div class="gallery">
            <figure class="images">
                <img src="../assets/img/portofolio.jpg" class="gallery-img" />
                <figcaption>
                    <h5 class="name">Project 1
                    <span>
                        <a href="detail.html">Detail</a>
                    </span>
                    </h5>
                </figcaption>
            </figure>
            <figure class="images">
                <img src="../assets/img/portofolio.jpg" class="gallery-img" />
                <figcaption>
                    <h5 class="name">Project 2
                        <span>
                            <a href="detail.html">Detail</a>
                        </span>
                    </h5>
                </figcaption>
            </figure>
            <figure class="images">
                <img src="../assets/img/portofolio.jpg" class="gallery-img" />
                <figcaption>
                    <h5 class="name">Project 3
                        <span>
                            <a href="detail.html">Detail</a>
                        </span>
                    </h5>
                </figcaption>
            </figure>
        </div>
    </section>
@endsection