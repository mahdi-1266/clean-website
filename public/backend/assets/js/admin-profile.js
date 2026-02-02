/* ------------ Update the profile image ------------ */
$(document).ready(function(){
  $('#photo').change(function(e){
    let reader = new FileReader();
    reader.onload = function(e){
      $('#showPhoto').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
  });
}); 