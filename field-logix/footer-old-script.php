<script>
	$(document).ready(function () {
	    if ($("body").hasClass("page-template-custom-page")) {
	        $("#print_result_179-new").on("click", function (e) {
	            e.preventDefault();

	            // Extract the dynamic content from the section
	            var dynamicContent = $(".fleet-para").html();

	            // Print styles
	            var printStyles = `
	              <style>
	                    body {
	                        font-family: Arial, sans-serif;
	                        margin: 0;
	                        padding: 20px;
	                        background: none;
	                    }
	                    .fleet-para {
	                        width: 100%;
	                        padding: 0;
	                        margin: 0;
	                    }
	                    .fleet-para h3 {
	                        width: 50%;
	                        text-align: center;
	                        margin-top: 10px;
	                        font-weight: 500;
	                    }
	                    .fleet-para h2 {
	                        text-align: left;
	                        margin-bottom: 20px;
	                    }



						#print_result_179-new{
						display: none;
						}



						.rslt-flx-new {
							width: 100%;
							display: flex;
							flex-direction: column;
						}

						.flx-rgt {
							display: flex;
							flex-wrap: wrap;
							flex-direction: row;
							width: 80%;
							margin: 0 auto;
						}

	.rslt-flx-new .flx-rgt{
		flex-direction: row;
	}

							.rslt-flx {
								display: flex;
								justify-content: space-between;
								flex-wrap: wrap;
								align-items: flex-start;
								width: 100%;
							}

						.page-id-47018 .result-clc .center, .page-id-47030 .result-clc .center, .page-id-46986 .result-clc .center {
	    display: flex;
	    flex-direction: column;
	    justify-content: center;
	    align-items: center;
	    text-align: center;
	}
	.page-id-47018 .result-clc .center h1, .page-id-47030 .result-clc .center h1, .page-id-46986 .result-clc .center h1 {
	    justify-content: center;
	color: #036;
	}

	.main-print h4{
	display: none;
	}

	.page-id-47030  .new-sub-div {
	    width: 50%;
		margin-top: 20px;
		display: flex;
	    flex-direction: column;
	    gap: 10px;
	}

	.page-id-47030 .new-div h4{
	text-align: center !important;
	display: block;
	width: 100%;
	}
	.new-sub-div h4, .new-sub-div h2, .new-div h2 {
	    text-align: left;
	}
	.page-id-47030 .new-sub-div{
	align-items: flex-start !important;
	justify-content: flext-start !important;
	}
	.new-sub-div{
	margin-left: 20px;
	}
	.clear-losess {
	    align-items: flex-start !important;
	text-align: left !important;
	}

	.page-id-47030 .clear-losess {
	    align-items: flex-start !important;
	text-align: left !important;
	}
	.page-id-47030 .clear-losess h2{
	text-align: left !important;
	}

	 .page-id-47030 .fleet-para h2 {
	text-align: left !important;
	}

	                </style>
	            `;

	            // Open a new print window
	            var printWindow = window.open("", "_blank");
	            printWindow.document.write(`
	                <html>
	                    <head>
	                        ${printStyles}
	                    </head>
	                    <body>
	                        <div class="fleet-para">
	                            ${dynamicContent} 
	                        </div>
	                    </body>
	                </html>
	            `);

	            // Ensure styles are fully applied before triggering the print dialog
	            printWindow.document.close();
	            printWindow.onload = function () {
	                printWindow.focus(); // Focus the print window
	                printWindow.print(); // Trigger print dialog
	                printWindow.close(); // Close the print window after printing
	            };
	        });
	    }
	});
</script>