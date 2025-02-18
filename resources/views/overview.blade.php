<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="images/logo_paroki.png">
    <title>Gereja Simpang Dua</title>

    @include('style')
</head>

<body>

    <main>
        <section class="hero" id="hero">
            <div class="heroText">
                <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                    Selamat Datang
                </h1>

                <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                    di situs resmi <strong class="custom-underline">Gereja Santo Mikael Simpang Dua</strong>
                </p>
            </div>

            <div class="videoWrapper">
                <video autoplay="" loop="" muted="" class="custom-video"
                    poster="videos/792bd98f3e617786c850493560e11c45.jpg">
                    <source src="videos/vbg_gereja.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        @include('navbar')

        @include('about')

        @include('reflection')

        @include('news')

        @include('contact')

        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.813135115465!2d109.98311131477035!3d-1.7333115999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a6f3f3f3f3f3%3A0x7a4a6f3f3f3f3f3!2s6934%2B8H9%2C+Semandang+Kanan%2C+Kec.+Simpang+Dua%2C+Kabupaten+Ketapang%2C+Kalimantan+Barat+78854!5e0!3m2!1sid!2sid!4v1663300000000!5m2!1sid!2sid"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>

    @include('footer')

    @include('script')

</body>

</html>