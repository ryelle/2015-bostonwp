(function ($) {
	$(document).ready(function () {
		$('#bwp_speakerfrm').submit(function (e) {
			e.preventDefault();

			$.ajax({
				url    : $('#bwp_speaker_admin_url').val(),
				method : 'post',
				data   : $(this).serialize(),
				success: function (result, status, jxhr) {
					if (result.success) {
						$("#bwp_speaker_notices").html(result.data).addClass('alert-success').removeClass('alert-danger').fadeIn();
					} else {
						$("#bwp_speaker_notices").html(result.data).addClass('alert-danger').removeClass('alert-success').fadeIn();
					}
				},
				error  : function (data, status, jxhr) {
					$("#bwp_speaker_notices").html(data).addClass('alert-danger').removeClass('alert-success').fadeIn();
				}

			});
		});
	});
})(jQuery)