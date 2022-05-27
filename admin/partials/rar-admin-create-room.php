<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="container">

    <h1>Rent a Room</h1>
    <h2>Create a Room</h2>

    <div class="container">
            <div class="py-5 text-center">
                <h2>Create a Room</h2>
                <p class="lead">Christian nöd rauche</p>
            </div>

            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3">Address</h4>
                    <form class="needs-validation">
                    <div class="row g-3">

                        <div class="col-sm-12">
                            <label for="address" class="form-label">Street</label>
                            <input type="text" class="form-control" id="address" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Please enter your address
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="zipcode" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zipcode" placeholder="" required>
                            <div class="invalid-feedback">
                                Please enter your zip code
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" required>
                                <option value="">Choose...</option>
                                <option>Switzerland</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                                            
                        <div class="col-md-6">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" required>
                                <option value="">Choose...</option>
                                <option>Zürich</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <hr class="my-4">
                        <h4 class="mb-3">Room</h4>
                        
                        <div class="col-sm-12">
                            <label for="name" class="form-label">Room Code Name</label>
                            <input type="text" class="form-control" id="name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Please enter a room name
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Description <span class="text-muted">(Optional)</span></label>
                            <textarea rows="3" class="form-control" id="description" placeholder=""></textarea>
                        </div>

                        <div class="col-6">
                            <label for="space" class="form-label">Space</label>
                            <input type="text" class="form-control" id="space" placeholder="">
                        </div>
                    </div>
                    <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Create</button>
                    </form>
                </div>
            </div>
        

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2023 Rent a Room</p>
            <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
        </div>

</div>