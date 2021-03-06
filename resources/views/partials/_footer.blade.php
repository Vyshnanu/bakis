<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <a href="{{ route('index') }}"><strong>Lunch Deals</strong></a> by Lukas Markevicius.
      </p>
    </div>
  </div>
</footer>

@yield('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('.notification .delete').on('click', function () {
      $('.notification').slideUp();
      // alert('opa');
    });
  });
</script>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach(function ($el) {
    $el.addEventListener('click', function () {

      // Get the target from the "data-target" attribute
      var target = $el.dataset.target;
      var $target = document.getElementById(target);

      // Toggle the class on both the "navbar-burger" and the "navbar-menu"
      $el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
</script>
