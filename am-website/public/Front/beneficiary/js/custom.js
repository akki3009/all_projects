//language dropdown
$(".navbar .dropdown-menu.select a").click(function(){
  var selText = $(this).html();
  $(this).parents('.dropdown').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});

//navbar close in responsive
var mql = window.matchMedia("screen and (max-width: 767px)");
if (mql.matches){ // if media query matches
	$('.navbar li.navbar-item a').on('click', function(){
		$('.navbar-toggler').click() 
	});
}
else{
}

//smooth scroll
$( function() {
    $( '.navbar li.navbar-item a[href^="#"]' ).on( 'click', function( e ) {

        if ( this.hash !== '' ) {
            e.preventDefault();

            var hash = this.hash;
            var nav = $( '.navbar' ).outerHeight();

            $( 'html, body' ).animate( {
                scrollTop: $( hash ).offset().top
            }, 1100, function() {
                window.location.hash = hash;
            } );
        }
    } );
    
} );


//radio toggle for types
$(document).ready(function() {
    $("input[name$='types']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#types" + test).show();
    });
    $(".product-wishlist").click(function(){
        $(this).toggleClass('active');
    });
});


//input show password
$(document).ready(function() {
    $("#show_hide_password_1 a").on('click', function(event) {		 
        event.preventDefault();
        if($('#show_hide_password_1 input').attr("type") == "text"){
            $('#show_hide_password_1 input').attr('type', 'password');
            $('#show_hide_password_1 i').addClass( "fa-eye-slash" );
            $('#show_hide_password_1 i').removeClass( "fa-eye" );
			$('#show_hide_password_1 a img').attr('src','images/eye.svg');
        }else if($('#show_hide_password_1 input').attr("type") == "password"){
            $('#show_hide_password_1 input').attr('type', 'text');
            $('#show_hide_password_1 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_1 i').addClass( "fa-eye" );
			$('#show_hide_password_1 a img').attr('src','images/eye-act.svg');
        }
    });
    $("#show_hide_password_2 a").on('click', function(event) {		 
        event.preventDefault();
        if($('#show_hide_password_2 input').attr("type") == "text"){
            $('#show_hide_password_2 input').attr('type', 'password');
            $('#show_hide_password_2 i').addClass( "fa-eye-slash" );
            $('#show_hide_password_2 i').removeClass( "fa-eye" );
			$('#show_hide_password_2 a img').attr('src','images/eye.svg');
        }else if($('#show_hide_password_2 input').attr("type") == "password"){
            $('#show_hide_password_2 input').attr('type', 'text');
            $('#show_hide_password_2 i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_2 i').addClass( "fa-eye" );
			$('#show_hide_password_2 a img').attr('src','images/eye-act.svg');
        }
    });

});

 $(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
    animating = false;
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        // 'transform': 'scale('+scale+')'
       
      });
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 0, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = false;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({ 'opacity': opacity});
        }, 
        duration: 0, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})
$(".view-detail").click(function(){
    $(this).toggleClass('icon-rotate');
  $(".view-more-detail").toggleClass("d-none");
});
$(".verify-otp-btn").click(function(){
  $(".verify-btn").addClass("d-none");
  $(".sign-contract-btn").removeClass("d-none");

});
$(".submit-contract").click(function(){
  $(".sign-contract-btn").addClass("d-none");
  $(".submit-contract-btn").removeClass("d-none");

});

});