var BASE64_MARKER = ';base64,';

function convertDataURIToBinary(dataURI) {
	var base64Index = dataURI.indexOf(BASE64_MARKER) + BASE64_MARKER.length;
	var base64 = dataURI.substring(base64Index);
	var raw = window.atob(base64);
	var rawLength = raw.length;
	var array = new Uint8Array(new ArrayBuffer(rawLength));

	for(var i = 0; i < rawLength; i++) {
		array[i] = raw.charCodeAt(i);
	}
	return array;
}

$("#btn_cetak").click(function(){
	var element = document.getElementById('halaman_cetak'); // Ini masukkan id DIV atau apalah yg mau di print
	html2pdf(element, {
		margin: [0,0,0,0],
		filename: NAMA_FILE_PDF_NYA_BOS + '.pdf',
		image: {type: 'jpeg', quality: 1},
		html2canvas: {scale: 2, logging: true},
		jsPDF: {unit: 'cm', format: 'a4', orientation: 'p'}
	}).from(element).outputPdf("datauristring").then(function (pdf, item) {

		var pdfAsArray = convertDataURIToBinary(pdf);
		const pdfBlob = new Blob([pdfAsArray], { type: "application/pdf" });
		const url = URL.createObjectURL(pdfBlob);
		printJS(url);

	});
});
