@extends('/layout/base')

@section('title','Sign-in')

@section('content')

<div class="container min-vh-100%">
    <div class="row text-center">
        <h3>Perpustakaan</h3>
    </div>
    <div class="row justify-content-center text-center">
     <!-- Added text-center class here -->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center py-3">Login</h5>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection