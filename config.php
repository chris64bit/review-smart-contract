<?php
error_reporting(0);
ini_set('display_errors', 1);

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

function redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
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

    function successProgress() {
        Swal.fire({
            icon: 'success',
            title: 'Review Berhasil di Simpan',
            text: 'Terima Kasih',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }

    function failedProgress() {
        Swal.fire({
            icon: 'error',
            title: 'Gagal di Simpan',
            text: 'Silahkan Coba Lagi',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }

    function successProgress_brosur() {
        Swal.fire({
            icon: 'success',
            title: 'File Brosur Sesuai Dengan Hash',
            text: 'Terima Kasih',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }


    function failedProgress_brosur() {
        Swal.fire({
            icon: 'error',
            title: 'File Brosur Tidak Sesuai Dengan Hash',
            text: 'Silahkan Coba Lagi',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }

    function successProgress_lihat(on, off, data) {
        Swal.fire({
            icon: 'success',
            title: 'Hasil Review',
            //text: '<img src="img/check.png" height="50px" width="50px">Terpercaya:'+on+' ||| <img src="img/forbidden.png" height="50px" width="50px"> Meragukan/Berbahaya:'+off,
            text: 'Terpercaya:' + on + ' |||  Meragukan/Berbahaya:' + off,
            footer: '<a href="detail.php?page=lihat&data=' + data + '">Lihat Detail</a>'
        })
    }

    function failedProgress_lihat() {
        Swal.fire({
            icon: 'error',
            title: 'Data Tidak Ditemukan',
            text: 'Silahkan Coba Lagi',
            footer: '<a href="ui.ac.id">Universitas Indonesia</a>'
        })
    }
</script>