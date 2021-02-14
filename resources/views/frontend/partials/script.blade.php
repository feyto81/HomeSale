<script type="text/javascript" src="{{asset('frontend/scripts/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-migrate-3.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/rangeSlider.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/masonry.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/custom.js')}}"></script>
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>