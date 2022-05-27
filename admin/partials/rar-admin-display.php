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
    <h2>Dashboard</h2>

    <h3>Rooms</h3>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Address</th>
        <th scope="col">Detail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Room 100A</td>
            <td>Booked</td>
            <td>Freiestrasse 87, Zürich 8032 Schweiz</td>
            <td><button class="btn btn-secondary">Details</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Room 201B</td>
            <td>Open</td>
            <td>Dinistrasse 10A, Zürich 8032 Schweiz</td>
            <td><button class="btn btn-secondary">Details</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Room 107A</td>
            <td>Booked</td>
            <td>Irgendeanderistrasse 10, Zürich 8032 Schweiz</td>
            <td><button class="btn btn-secondary">Details</button></td>
        </tr>
    </tbody>
    </table>

</div>