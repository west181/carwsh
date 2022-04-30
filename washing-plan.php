<?php

require_once("./database/db.php");


?>

<!DOCTYPE html>
<html lang="en">

<?php include('tamplates/header.php'); ?>
<!-- header section -->
<div class="container-fluid h-100">
    <div class="row  d-flex align-items-center about-header">
        <div class="col-12 col-sm-10  d-flex justify-content-center">
            <div class="  ">
                <h2 class="big-header text-white">Washig Plan</h2>
                <h3 class="text-white">Home / Price</h3>
            </div>
        </div>
    </div>
</div>

<!-- end header section -->
<!-- price section -->
<div class="container-fluid vh-100 price">
    <div class="row h-100 d-flex align-items-center py-3">
        <div class="col-12 col-sm-10  d-flex justify-content-center">
            <div class=" text-center ">
                <h3 class="my-tx-red">Washig Plan</h3>
                <h2 class="big-header ">Choose Your plan</h2>
            </div>
        </div>
        <div class="container h-100 pt-3 ">
            <div class="row h-100 d-flex align-items-center justify-content-center ">
                <div class="col-12 h-100 col-md-3">
                    <div class="price-items my-tx-mena" style="width: 18rem;">
                        <div class="price-body my-tx-mena py-2 mt-0 ">
                            <h5 class="price-title">BASIC CLEANING</h5>
                            <h2>
                                <span>$</span>
                                <strong class="my-tx-mena">10</strong>
                                <span>.99</span>
                            </h2>
                        </div>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item my-tx-mena">
                                <i class="fa-regular fa-square-check"></i>
                                Seats Washing
                            </li>
                            <li class="list-group-item my-tx-mena">
                                <i class="fa-regular fa-square-check"></i>
                                Vacuum Cleaning
                            </li>
                            <li class="list-group-item my-tx-mena">
                                <i class="fa-regular fa-square-check"></i>
                                Exterior Cleaning
                            </li>
                            <li class="list-group-item my-tx-mena">
                                <i class="fa-solid fa-square-xmark"></i>
                                Interior Wet Cleaning
                            </li>
                            <li class="list-group-item my-tx-mena">
                                <i class="fa-solid fa-square-xmark"></i>
                                Window Wiping
                            </li>
                        </ul>
                        <div class="card-body">
                            <button type="button" class="btn btn-lg btn-light btn-rounded" data-mdb-ripple-color="dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 h-100 col-md-3">
                    <div class="price-prem border border-1 rounded " style="width: 18rem;">
                        <div class="price-prem my-tx-red py-2 mt-0 ">
                            <h5 class="price-title">PREMIUM CLEANING</h5>
                            <h2>
                                <span>$</span>
                                <strong class="my-tx-red">20</strong>
                                <span>.99</span>
                            </h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item my-tx-red">
                                <i class="fa-regular fa-square-check"></i>
                                Seats Washing
                            </li>
                            <li class="list-group-item my-tx-red">
                                <i class="fa-regular fa-square-check"></i>
                                Vacuum Cleaning
                            </li>
                            <li class="list-group-item my-tx-red">
                                <i class="fa-regular fa-square-check"></i>
                                Exterior Cleaning
                            </li>
                            <li class="list-group-item my-tx-red">
                                <i class="fa-regular fa-square-check"></i>
                                Interior Wet Cleaning
                            </li>
                            <li class="list-group-item my-tx-red">
                                <i class="fa-solid fa-square-xmark"></i>
                                Window Wiping
                            </li>
                        </ul>
                        <div class="card-body">
                            <button type="button" class="btn btn-lg  btn-rounded" data-mdb-ripple-color="dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 h-100 col-md-3">
                    <div class="price-items" style="width: 18rem;">
                        <div class="price-body py-2 mt-0">
                            <h5 class="price-title">COMPLEX CLEANING</h5>
                            <h2>
                                <span>$</span>
                                <strong class="my-tx-mena">30</strong>
                                <span>.99</span>
                            </h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item my-tx-mena">
                                <i class="fa-regular fa-square-check"></i>
                                Seats Washing
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-square-check"></i>
                                Vacuum Cleaning
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-square-check"></i>
                                Exterior Cleaning
                            </li>
                            <li class="list-group-item">
                                <i class="fa-regular fa-square-check"></i>
                                Interior Wet Cleaning
                            </li>
                            <li class="list-group-item ">
                                <i class="fa-regular fa-square-check"></i>
                                Window Wiping
                            </li>
                        </ul>
                        <div class="card-body">
                            <button type="button" class="btn btn- btn-lg  btn-rounded" data-mdb-ripple-color="" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="insertbooking.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">package Type</label>
                                <select name="package_id" id="package_id">
                                    <option value="1">BASIC</option>
                                    <option value="2">PREMIUM</option>
                                    <option value="2">COMPLEX</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Package Type :</label>
                                <select name="locations_id" id="locations_id">
                                    <option value="1">VOGHERA</option>
                                    <option value="2">PAVIA</option>
                                    <option value="3">MILANO</option>

                                </select>


                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> Name</label>
                                <input type="text" class="form-control" id="name" name="name">



                                <div class="mb-3">
                                    <label for="" class="form-label">Surname</label>

                                    <input type="text" class="form-control" id="surname" name="surname">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>

                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Phone</label>

                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Date</label>
                                    <input type="datetime-local" class="form-control" id="date" name="date">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Message</label>
                                    <textarea class="form-control" aria-live="rtrim" required  name="message" id="message" cols="30" rows="3"></textarea>
                                </div>
                               

                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>


<?php include('tamplates/footer.php'); ?>