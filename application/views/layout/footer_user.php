

	<script src="<?=base_url('drug/')?>js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?=base_url('drug/')?>js/vendor/bootstrap.min.js"></script>
	<script src="<?=base_url('drug/')?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?=base_url('drug/')?>js/jquery.nice-select.min.js"></script>
	<script src="<?=base_url('drug/')?>js/jquery.sticky.js"></script>
	<script src="<?=base_url('drug/')?>js/nouislider.min.js"></script>
	<script src="<?=base_url('drug/')?>js/countdown.js"></script>
	<script src="<?=base_url('drug/')?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url('drug/')?>js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?=base_url('drug/')?>js/gmaps.min.js"></script>
	<script src="<?=base_url('drug/')?>js/main.js"></script>
	<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
    $(document).ready(function() {
        $("#jumlah").on('keydown keyup change blur', function() {
            var harga_obat = $("#harga_obat").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga_obat) * parseInt(jumlah);
            $("#total").val(total);
            if (parseInt($('input[name="stok_obat"]').val()) <= parseInt(jumlah)) {
                alert('stok_obat tidak tersedia! stok_obat tersedia : ' + parseInt($('input[name="stok_obat"]').val()))
                reset()
            }
        });

        function reset() {
            $('input[name="jumlah"]').val('')
            $('input[name="total"]').val('')
        }
    })
    </script>
</body>
</html>
