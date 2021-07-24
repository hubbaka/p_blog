@extends('home')

@section('main')
<!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->	
                            <h1 class="fw-bolder mb-1">About</h1>
                            <!-- Post meta content-->
                            <hr>
                            <div class="text-muted fst-italic mb-2">Posted on January 1, 2021 by Start Bootstrap</div>
                            <hr>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">dari titik no kita berangkat, kepada titik nol kita kembali. tiada kisah yang tak berbubuh noktah, tiada pesta yang tanpa bubar, tiada pertemuan yang tanpa perpisahan, tiada perjalanan yang tanpa pulang</p>
                            <p class="fs-5 mb-4">dimataku hal yang membedakan kualitas perjalanan adalah 'apakah digunakan hati?'
                            ada orang yang pergi keberbagai negara, sampai sudah takingat lagi mana-mana saja yang pernah didatangi, selain bukti foto-foto dan cap dipaspor yang menjadi piala kebanggaan.</p>
                            <p class="fs-5 mb-4">mereka bilang petualangan hanyalah bagi sang pemberani. mereka bilang petualangan itu ekslusif bagi para lelaki jagoan yang kuat melibas semua musuh.</p>
                            <p class="fs-5 mb-4">disisi lain ada orang yang berjalan perlahan-lahan, mendalami negeri-negeri, menyelami manusia, mempelajari budaya, dan mencatat setiap cerita. bagi mereka ini ujian pertama dalam sebuah petualangan, sebuah perjalanan adalah pembuktian kesabaran.</p>
                            <p class="fs-5 mb-4">Justru karna kita masih punya mimpi, kita jadi punya alasan untuk terus maju, terus hidup, terus berjalan, terus mengejar. tanpa mimpi sama sekali apapula arti hidup ini?.</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    @include('layout.comment')
                </div>
                <!-- Side widgets-->
                @include('layout.side')
            </div>
        </div>
@stop
@section('footer')
    @include('layout.footer')
@stop
</body>
</html>
