
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

$(document).ready(function( $ ) {
    $('.carousel').carousel({
        interval: 7000
    });
    // submit
    $("#store-inquiry").submit(function (e) {
		e.preventDefault();
        var name = $('#InputName').val(),
            email = $('#InputEmail').val(),
            msg = $('#InputMessage').val();
        if ($.trim(name) == '' || $.trim(email) == '' || $.trim(msg) == '') {
        }
        else {
            $.ajax({
    		    type: "POST",
    		    url: "inquiry",
    		    dataType: 'json',
    			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    			data:  $(this).serialize(),
    		    beforeSend: function() {
                    $('#buttonContact').prop("disabled", true);
                    $('#buttonContact').html('SENDING');
    		    },
                complete() {
                    $('.alert-success').fadeIn('slow').delay(2500).fadeOut('slow');
                    $('#buttonContact').prop("disabled", false);
                    $('#buttonContact').html('SEND');
                    $('#store-inquiry')[0].reset();
    	    	}
    		});
        }
	});

    // preloader
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({'overflow':'visible'});

    // ScrollReveal
    window.sr = new scrollReveal();

    // cache the window object
    $window = $(window);

    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $scroll.data('speed'));
            var coords = '50% '+ yPos + 'px';
            $scroll.css({ backgroundPosition: coords });
        });
    });

    $(document).on("click",".modal-target",function() {
        var img = $(this).data('id');
        $('#modal-target-img').attr('src','assets/images/works/'+img+'.jpg');
    });
});
