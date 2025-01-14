<script>
   var dart_error_1 = <?php echo e(Session('dart_error_1') ? 'true' : 'false'); ?>;

   if(dart_error_1){
      Swal.fire({
         timer: 5000,
         title: 'Invalid Score!',
         icon: 'error',
         html: 
            'You need to enter a score above 0.' + 
            '<br />' + 
            'Please try again.',
         showCloseButton: false,
         showConfirmButton: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/inc/messages/error/invalid.blade.php ENDPATH**/ ?>