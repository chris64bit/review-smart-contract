<?php
error_reporting(0);
ini_set('display_errors', 1);

// function console_log($output, $with_script_tags = true)
// {
//     $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
//         ');';
//     if ($with_script_tags) {
//         $js_code = '<script>' . $js_code . '</script>';
//     }
//     echo $js_code;
// }

// function redirect($url)
// {
//     ob_start();
//     header('Location: ' . $url);
//     ob_end_flush();
//     die();
// }
$DBhost = "127.0.0.1";
$DBuser = "root";
$DBpassword = "";
$DBname = "dbblockchain";

$conn = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<script>
    function onFileSelected(event) {
        var selectedFile = event.target.files[0];
        var reader = new FileReader();
        let element = document.getElementById("preview");
        let hidden = element.getAttribute("hidden");
        var imgtag = document.getElementById("myimage");

        element.removeAttribute("hidden");


        imgtag.title = selectedFile.name;

        reader.onload = function(event) {
            imgtag.src = event.target.result;
        };

        reader.readAsDataURL(selectedFile);
    }

    let timerInterval

    function progressLoad() {
        Swal.fire({
            title: 'Sistem Sedang Analisa Data',
            html: 'Harap Browser tidak di Refresh',
            timer: 3000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 40)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    }

    function successProgress_validasi() {
        Swal.fire({
            icon: 'success',
            title: 'Validasi Ditemukan',
            text: 'Terima Kasih',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }


    function failedProgress_validasi() {
        Swal.fire({
            icon: 'error',
            title: 'Data tidak ditemukan',
            text: 'Silahkan Coba Lagi',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }

</script>