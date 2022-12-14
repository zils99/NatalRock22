<!DOCTYPE html>
<html>

<head>
    <title>ROCK MINISTRY BANDUNG</title>
    <link rel="icon" href="<?= base_url('assets/img/') ?>logorock.png" type="image" sizes="16x16">
    <script src="https://unpkg.com/html5-qrcode"></script>

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/') ?>sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/') ?>landing.css" rel="stylesheet">
</head>
<style>
    body {
        background-image: url('<?= base_url('assets/img/') ?>Background.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h5 text-gray-900 mb-4"><b>Welcome To Christmas Celebration<br>ROCK Ministry Bandung 2022!</b></h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="text-center">
                                        <p class="barcode">Silakan Melakukan Scan QR-Code Anda Di Bawah Ini</p>
                                    </div>
                                    <div id="qr-reader" style="width:300px"></div>
                                    <div id="qr-reader-results" name="qr_code"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/') ?>html5-qrcode.min.js"></script>
</body>
<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete" ||
            document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function() {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;

        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                console.log(`Scan result ${decodedText}`, decodedResult);
                alert("Hasil Scanner : " + decodedText);
                if (decodedText) {
                    location.href = "<?php echo base_url(); ?>Landing/hadir/" + decodedText;
                }
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>

</html>