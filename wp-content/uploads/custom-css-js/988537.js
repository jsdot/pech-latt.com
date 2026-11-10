<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
(function($){
   $(document).on('agegateshown', function(){ 
    var d = new Date(),
        y = d.getFullYear(),
        a = atob(atob(document.querySelector('[name="age_gate[age]"]').value));

    $('#age-gate-y').on('keyup', function(event){
      if (this.value.length === 4) {
        if ((y - this.value) === a) {
          $('.age-gate-form-section, .age-gate-submit').show();
          $('.age-gate-form-section:first input').focus();
        } else {
          $('#age-gate-m, #age-gate-d').val('01');
          $('.age-gate-form').submit();
        }
      }
    });
  }); 
})(jQuery);</script>
<!-- end Simple Custom CSS and JS -->
