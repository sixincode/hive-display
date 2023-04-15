@pushOnce('scripts')
<script type="text/javascript">
  const tooltipTrigger = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'));
  tooltipTrigger.map((tooltipTriggerEl) => new te.Tooltip(tooltipTriggerEl));
</script>
@endPushOnce
