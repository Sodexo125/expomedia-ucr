var formulario="<div class='col'><h3>Get In Touch</h3><p>Feel free to contact me about anything</p><div class='row'><input size='40px' type='text' name='FullName' placeholder='Full Name'></div><div class='row'><input size='40px' type='text' name='Email' placeholder='Email'></div><div class='row'><textarea class='form' name='Message' rows='4' cols='45' placeholder='Leave me a message'></textarea></div><a href='#' class='btn btn-primary send'>Send Message</a></div>";

document.addEventListener('DOMContentLoaded',function(){
  var con = document.getElementById('form');
  con.innerHTML=formulario;

});
