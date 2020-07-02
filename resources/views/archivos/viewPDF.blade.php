<div id="pdf-viewer"></div>

<script>
    PDFObject.embed("{{ route('archivos.viewPDF', $archivo->id) }}", "#pdf-viewer");
</script>