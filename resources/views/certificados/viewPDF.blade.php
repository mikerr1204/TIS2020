<div id="pdf-viewer"></div>

<script>
    PDFObject.embed("{{ route('certificados.viewPDF', $certificado->id) }}", "#pdf-viewer");
</script>