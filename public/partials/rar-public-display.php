<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       localhost
 * @since      1.0.0
 *
 * @package    rent-a-room
 * @subpackage rent-a-room/public/partials
 */
?>

<div class="wrap">
  <h2>Rent a Room</h2>

  <form>

  <div class="mb-3">
      <label>Choose Location</label>
      <div class="form-check">
        <label>
          <input class="form-check-input" type="radio" name="locationRadio" id="zuerich" value="zuerich">
            Zürich
        </label>
      </div>
      <div class="form-check">
        <label>
          <input class="form-check-input" type="radio" name="locationRadio" id="basel" value="basel">
            Basel
        </label>
      </div>
    </div>

    <div class="mb-3">
      <label>Choose Room</label>
      <div id="locationzuerich" class="form-check hidden" style="display: none;">
        <input class="form-check-input" type="radio" name="roomRadio" id="flexRadioDefault3">
        <label class="form-check-label" for="flexRadioDefault3">
          Room 1
        </label>
      </div>
      <div id="locationbasel" class="form-check hidden" style="display: none;">
        <input class="form-check-input" type="radio" name="roomRadio" id="flexRadioDefault4">
        <label class="form-check-label" for="flexRadioDefault4">
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

    <button id="submit-btn" type="submit" class="btn btn-primary">Rent</button>
    
  </form>
  <button  onclick="changeColor()" class="btn btn-primary">
      test
    </button>
</div>


