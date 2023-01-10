@extends('layouts.profile-layout')
@section('content')
    <script>
        const myModal = document.getElementById('Modal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <section>
        <div id="sidebar">
            <div class="white-label">
                <img src="assets/img/logowh.png" alt="">
            </div>
            <div id="sidebar-nav">
                <ul>
                    <li><a href="admindash"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="settings"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="storeview"><i class="fas fa-shopping-cart"></i> View Store</a></li>
                    <li class="active"><a href="category"><i class="fa fa-th-large"></i> Create Category</a></li>
                    <li></li>
                    <li>
                        {{-- post logout method from route --}}
                        <form action="{{ route('logout.post') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-pill"
                                style="width:190px; margin-left:30px; margin-top:500px;">Logout</button>
                    </li>
                </ul>
            </div>

    </section>
    <section class="row" style="background-color: #eee; height: 100%;">
        <div class="container py-5 ">
            <div class=" row">
                <div class="profview col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="profileview">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Category</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4 shadow-lg bg-white rounded" style="border-radius:10px;">
                    <div class="product-img position-relative overflow-hidden">
                        <div class="product-action text-center" style="margin-top:30px">
                            <a class="btn btn-outline-dark btn-square" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><i class="fa fa-plus"></i></a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">ADD CATEGORY</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="cc-form" action="{{ route('category.post') }}" method="post">
                                                @csrf
                                                <label for="recipient-name" class="col-form-label">CATEGORY</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="category name">
                                                <div class="modal-footer">
                                                    <button id="close-button" type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button id="add-button" type="button"
                                                        class="btn btn-primary">Add</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('add-button').addEventListener('click', function(event) {
                                    event.preventDefault();
                                    const formData = new FormData();
                                    let nama = document.getElementById("name").value
                                    let token =  document.querySelector('input[name="_token"]').value
                                    formData.append("name", nama)
                                    formData.append("_token", token)
                                    fetch('/category', {
                                        method: 'POST',
                                        headers: {
                                            "X-CSRF-Token": document.querySelector('input[name=_token]').value
                                        },
                                        body : formData
                                    }).then(window.location.href = '/category')
                                });

                                document.getElementById('close-button').addEventListener('click', function(event) {
                                    event.preventDefault();
                                    // dismiss the modal here
                                    $('#exampleModal').modal('hide');
                                });
                            </script>



                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate">ADD CATEGORY</a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-5">
                @foreach ($category as $item)
                    <div class="col mb-4">
                        <!-- Card -->
                        <div class="card">
                            <!--Card image-->
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{ $item->name }}</h4>
                                <!--Text-->
                                <p class="card-text"></p>
                                {{-- delete category --}}
                                <form action="{{ route('category.delete', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-pill"
                                        style="width:190px; margin-left:30px; margin-top:500px;">Delete</button>
                                </form>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                @endforeach
            </div>



    </section>
@endsection
