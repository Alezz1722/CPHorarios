$(document).ready(function(){

 $('.login_btn').on('click',  function(event) {
  event.preventDefault();
  if($('#formLogin').valid())
  {
    alert("valido");
  }

});

})
