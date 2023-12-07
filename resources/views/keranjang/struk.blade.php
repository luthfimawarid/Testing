<h1>{{ $struk }}</h1>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    <link re="stylesheet" href="https://bbbootstrap.com/snippets/bootstrap-checkout-payment-page-custom-radio-buttons-82373820">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>
            /* Styling CSS untuk struk pembayaran */
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            .struk {
                width: 30%;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .struk-header {
                text-align: center;
                margin-bottom: 20px;
            }
            .order-recap {
                margin-bottom: 20px;
            }
            .total {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="struk">
            <div class="struk-header">
                <h1>Flavour Of Pamer</h1>
                <h5>02165428689</h5>
                <hr>
            </div>
            <div class="order-recap">
                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Tanggal</span>
                    <span>04-11-2023</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Hari</span>
                    <span>Selasa</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Admin</span>
                    <span>Mutakhobil fuad</span>
                </div>
                <hr>

                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Coklat Kacang</span>
                    <span>Rp. 10.000 x1</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Coklat Oreo</span>
                    <span>Rp. 10.000 x2</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Toping Keju</span>
                    <span>Rp. 2000 x2</span>
                </div>
            </div>
            
            <hr>
            
            <div class="total">
                <div class="d-flex justify-content-between mt-2">
                    <span class="fw-500">Total</span>
                    <span class="text-success">Rp. 34.000</span>
                </div>
                
            </div>
        </div>
        <div class="col-15 text-center">
            <button type="submit" class="btn btn-dark mt-5 mb-2">Kembali</button>
        </div>
    </body>
    </html>
    