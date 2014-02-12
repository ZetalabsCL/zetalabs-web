// JavaScript Document
$(document).ready(function() {
    // Smooth animation when page scrolls
	$("a.scroll-page").scrollToSection()

	/* Initialise Carausel */
	$('.carousel').carousel();

	/* Initialise Tooltip */
	$('[rel="tooltip"]').tooltip();

 });


jQuery.fn.scrollToSection = function(settings) {

 	settings = jQuery.extend({
		speed : 1000
	}, settings);

	return this.each(function(){
		var caller = this
		$(caller).click(function (event) {
			event.preventDefault()
			var locationHref = window.location.href
			var elementClick = $(caller).attr("href")

			var destination = $(elementClick).offset().top;
			if(elementClick == "#home"){
				destination = 0;
			}
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
				window.location.hash = elementClick;
			});
		  	return false;
		})
	})
}
// Validaciones formulario

$("#contact-form").validate({
  rules: {
    name: {
    	required: true,
    	minlength: 5
    },
    email: {
      required: true,
      email: true
    },
    message: {
    	required: true,
    	minlength: 5
    }
  },
  messages: {
    name: {
    	required: "Por favor dinos tu nombre",
    	minlength: jQuery.format("Al menos debe tener {0} caracteres")
    },
    email: {
      required: "Necesitamos alguna direcci&oacute;n de E-Mail para contactarnos contigo",
      email: "Tu direccion de E-Mail debe ser del formato algo@algo.cl"
    },
    message: {
    	required: "Por favor, dejanos un mensaje",
    	minlength: jQuery.format("Al menos debe tener {0} caracteres")
    }
  }
});
