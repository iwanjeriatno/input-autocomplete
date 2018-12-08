<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
      // autocomplete
      $("#items").autocomplete({
        source: '{{ route('barang.item') }}',
        messages: {
              noResults: '',
              results: function() {}
          }
      });
  });
</script>
