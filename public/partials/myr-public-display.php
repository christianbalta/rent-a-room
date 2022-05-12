<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    Myr
 * @subpackage Myr/public/partials
 */
?>

<div class="wrap">
  <h2>Rent a Room</h2>

  <form>

    <div class="mb-3">
      <label>Choose Location</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Zürich
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Basel
        </label>
      </div>
    </div>

    <div class="mb-3">
      <label>Choose Room</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Room 1
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Room 2
        </label>
      </div>
    </div>

    <div class="mb-3">
      <label for="meeting-time" class="form-label">Choose date and time from:</label>

      <input type="datetime-local" id="meeting-time"
        name="meeting-time" value="2022-05-12T09:00"
        min="2022-05-11T00:00" max="2024-05-12T00:00"  class="form-control">
    </div>

    <div class="mb-3">
      <label for="meeting-time" class="form-label">Choose date and time to:</label>

      <input type="datetime-local" id="meeting-time"
        name="meeting-time" value="2022-05-12T09:00"
        min="2022-05-11T00:00" max="2024-05-12T00:00"  class="form-control">
    </div>

    <div class="row mb-3">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col">
        <input type="email" class="form-control" placeholder="Email address" aria-label="Email address">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Phone" aria-label="Phone">
      </div>
    </div>

    <div class="row mb-3">
      <textarea class="form-control" id="comments" rows="3" placeholder="Comments"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Rent</button>

  </form>
</div>


