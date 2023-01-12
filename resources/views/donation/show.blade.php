@extends('layouts.main')

@section('content')
    <div class="card d_fx margin_x_200px">
        <img src={{ url('storage/donation/images/' . $donation->image) }} class="card-img-top height_400px image_fit_cover2"
            alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $donation->title }}</h5>
            <p class="card-text">{{ $donation->description }}</p>
            @if (Auth::user() && Auth::user()->role == 'admin')
                <a href="/donations/{{ $donation->id }}/edit">
                    <p>Edit</p>
                </a>
            @endif
            {{-- <a href="#" class="btn btn-primary">Donate</a> --}}
            @auth
                <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">Donate</button>
            @endauth
        </div>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content" action="/donations/{{ $donation->id }}/donate" method="post">
            @csrf
            <div class="container ">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">×</span>
                <h4>Donation</h4>
                <h2 class="fw-bold">{{ $donation->title }}</h2>
                <div class="d-flex ">
                    <img src={{ url('/storage/donation/qr_images/' . $donation->qr_image) }}
                        class=" image_fit_cover2 square_350px" alt="...">
                    <div class="text-start pt-3 ps-3">
                        <h4>On behalf of</h4>
                        <p>{{ $donation->atas_nama }}</p>
                        <h4>Virtual Account Number</h4>
                        <p>{{ $donation->no_rek }}</p>


                        <div class="form-group mb-3">
                            <label for="total_donate" class="form-label fs-4 fw-semibold">Donation total</label>
                            <input type="number" name="total_donate" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mb-3 pt-2">
                            <button type="submit" class="btn width_200px form-control form-control-lg text-light"
                                style="background-color: salmon">Confirm Donation</button>
                        </div>


                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
