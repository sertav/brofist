import $ from 'jquery'
import 'owl.carousel'
import 'gsap'

class GridServices extends window.HTMLElement {
  $(".welcome-text .btn, .offer-wrap .btn").on(
    "click",
    function () {
      $("html, body").animate(
        {
          scrollTop: $(".form-wrap").offset().top,
        },
        1500
      );
    }
  );

  wow = new WOW({
    animateClass: "animated",
    offset: 300,
    callback: function (box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
    },
  });
  wow.init();
}

window.customElements.define('flynt-grid-services', GridServices, {
  extends: 'nav'
})
