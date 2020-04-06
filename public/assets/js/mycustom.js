$(function () {
   $(document).scroll(function () {
     var $nav = $(".fixed-top");
     $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    
   });
 });


//  function gotoLogin(){
//    alert("hello");
//  }

 $('.pop_up_btn').click(function(event){
  event.preventDefault();
  $('.pop_up').toggleClass('show');
});

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();

  //>=, not <=
  if (scroll >= 120) {
     //clearHeader, not clearheader - caps H
     $("#myHeader").addClass("darkHeader");
  }
  else{
     //clearHeader, not clearheader - caps H
     $("#myHeader").removeClass("darkHeader");
     $(".logo").removeClass("nologo");
  }
});