(function($) {

  // Attach behaviors.
  Drupal.behaviors.website = {
    attach: function(context, settings) {
      $.getJSON('https://api.thecatapi.com/v1/images/search?size=full', function(data) {
        var main = $('main');

        main.fadeIn();
      });
    }
  };
})(jQuery);
