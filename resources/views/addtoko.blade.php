@extends('layouts.profile-layout')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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


    <section>
        <div id="sidebar">
            <div class="white-label">
                <img src="assets/img/logowh.png" alt="">
            </div>
            <div id="sidebar-nav">
                <ul>
                    <li><a href="profileview"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="profileupdate"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="historytr"><i class="fa fa-shopping-cart"></i> History Transaction</a></li>
                    <li class=""><a href="toko"><i class="fa fa-home"></i> TOKO</a></li>
                    <li class="active"><a href="addtoko"><i class="fa fa-home"></i> TOKO VIEW</a></li>
                    <li></li>
                    <li><a href="/" rel="stylesheet">Home</a></li>
                    <!-- <li>
                      {{-- post logout method from route --}}
                      <form action="{{ route('logout.post') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger rounded-pill" style="width:190px; margin-left:30px; margin-top:420px; ">Logout</button>
                    </li> -->
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
                            <li class="breadcrumb-item"><a href="profileview">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://cdn0-production-images-kly.akamaized.net/oXSwNKjOid8HfOOLq-WHD4tEzIU=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4161089/original/017791900_1663333015-Ikan_kuwe_dengan_berat_sekitar_8_kg__hasil_tangkapan_nelayan_Desa_Kawasi_di_Pulau_Obi.jpg"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">CV Samudra Jaya Abadi Perkasa</h5>
                            <div class="d-flex justify-content-center mb-2 ">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 mb-lg-0" style="height: 1rem;">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div class="card-body">
                                        <p class="mb-2"><span class="text-primary font-italic me-1">SALDO</span>
                                        </p>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-3">Rp.3.500.252.00</p>
                                        </div>
                                        <div class="d-flex justify-content-center mb-1">
                                            <a href="topup"><button type="button"
                                                    class="btn btn-outline-primary ms-1 mt-2"style="width: 10rem;">CHECK</button></a>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Store Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">CV Samudra Jaya Abadi Perkasa</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">samudra@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(+62) 8134-5678-192</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Pangandaran</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0"style="height:10rem;">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">ORDER</span>
                                    </p>

                                    <div class="d-flex justify-content-center mb-2 mt-4">
                                        <a href="order"><button type="button" class="btn btn-primary"
                                                style="width: 15rem;">View</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0"style="height:10rem;">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">PRODUCT</span>
                                    </p>
                                    <div class="col-sm-9">

                                    </div>
                                    <div class="d-flex justify-content-center mb-2 mt-4">
                                        <div>
                                            <button type="button" class="btn btn-primary" style="width: 15rem;"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">ADD PRODUCT
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">NAME</label>
                                                                    <input type="text" class="form-control"
                                                                        name="name" id="name"
                                                                        placeholder="NAME PRODUCT">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">PRICE</label>
                                                                    <input type="text" class="form-control"
                                                                        name="price" id="price"
                                                                        placeholder="PRICE">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">STOCK</label>
                                                                    <input type="text" class="form-control"
                                                                        name="stock" id="stock"
                                                                        placeholder="STOCK">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">CATEGORY</label>
                                                                    <input type="text" class="form-control"
                                                                        name="category" id="category"
                                                                        placeholder="(CUMI-CUMI/UDANG/..)">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">IMAGE</label>
                                                                    <input type="file" class="form-control"
                                                                        name="image" id="image" name="gambar"
                                                                        style="height: 40px;">
                                                                    <div class="mb-3">
                                                                        <label for="message-text"
                                                                            class="col-form-label">DESCRIPTION</label>
                                                                        <textarea class="form-control" id="message-text" type="text" class="form-control" name="description"
                                                                            id="password"></textarea>
                                                                    </div>

                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ 'toko' }}"><button type="button"
                                                                    class="btn btn-primary" type="submit"
                                                                    name="submit">ADD</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <a href="productview"><button type="button" class="btn btn-secondary"
                                                style="width: 15rem; margin-left:10px;">View</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
