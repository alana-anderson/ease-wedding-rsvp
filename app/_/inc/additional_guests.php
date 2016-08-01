<section class="default section entry hide" id="screen6"
  style="background-image: url(../_/img/bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <h3><span id="invitation-text">My invitation said I could bring along:</span></h3>
      </div>
    </div>
    <div id="guests">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <input class="btn-select" placeholder="Guest name" id="additional-guest" name="plus-one"/>
        </div>
        <div class="col-xs-6 col-md-5">
          <select class="selectpicker" title="Select a meal for this guest..." id="meal-option" name="plus-one-meal" />
            <option>Cedar Plank Salmon</option>
            <option>Beef Tenderloin Tips</option>
          </select>
        </div>
        <div class="col-xs-1 col-md-1"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a class="btn green full-width" id="add_guest">Add another guest +</a>
      </div>
      <div class="col-xs-8 col-md-8">
        <div class="portion">
          <input class="btn-select"
            style="margin-top: 25px!important;"
            placeholder="Please don't forget meal restrictions: Vegan, Allergies..."
            id="meal-restrictions"
            name="additional"
          />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-4 col-md-offset-4">
        <br />
        <p class="align-center">Once complete, click 'submit form'</p>
        <button type="submit" id="submit-form-btn" class="btn yellow">Submit Form</button>
      </div>
    </div>
  </div>
</section>
