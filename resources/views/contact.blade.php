@extends('parent')
@section('title', 'contact')
@section('content')
<!--jumbotron-->
<section class="jumbotron text-center pt-5">
    <img src="img/AKU.jpeg" width="200" height="200" class="rounded-circle img-thumbnail mt-5" />
    <h1 class="display-6">Deefvely yustezio arinanda</h1>
    <p class="lead">XII RPL 1 | 21</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2edff" fill-opacity="6"
            d="M0,96L48,117.3C96,139,192,181,288,192C384,203,480,181,576,160C672,139,768,117,864,122.7C960,128,1056,160,1152,149.3C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<!--akhir jumbotron-->

@endsection
<!--contact-->
<section id="contact">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col mt-5">
                <h2 style="padding-top : 2rem;">Contact me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">kirim</button>
                </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1"
            d="M0,160L48,181.3C96,203,192,245,288,240C384,235,480,181,576,165.3C672,149,768,171,864,197.3C960,224,1056,256,1152,229.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<!--akhir contact-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</body>

</html>