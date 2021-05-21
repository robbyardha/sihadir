<!-- Required Js -->
<script src="<?= base_url('assets/') ?>js/vendor-all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/ripple.js"></script>
<script src="<?= base_url('assets/') ?>js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url('assets/') ?>js/plugins/apexcharts.min.js"></script>
<!-- custom-chart js -->
<script src="<?= base_url('assets/') ?>js/pages/dashboard-main.js"></script>
<!-- datatable Js -->
<script src="<?= base_url('assets/') ?>js/plugins/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        checkCookie();
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var ticks = getCookie("modelopen");
        if (ticks != "") {
            ticks++;
            setCookie("modelopen", ticks, 1);
            if (ticks == "2" || ticks == "1" || ticks == "0") {
                $('#exampleModalCenter').modal();
            }
        } else {
            // user = prompt("Please enter your name:", "");
            $('#exampleModalCenter').modal();
            ticks = 1;
            setCookie("modelopen", ticks, 1);
        }
    }
</script>

<!-- Datatables -->
<!-- <script>
    $('#user-list-table').DataTable();
</script> -->
<script>
    $(document).ready(function() {
        $('#all-tables').DataTable();
        $('#ipa1').DataTable();
        $('#ipa2').DataTable();
        $('#ipa3').DataTable();
        $('#ipa4').DataTable();
        $('#ipa5').DataTable();
        $('#ips1').DataTable();
        $('#ips2').DataTable();
        $('#ips3').DataTable();
    });
</script>
</body>

</html>