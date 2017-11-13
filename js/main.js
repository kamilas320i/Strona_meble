$('#1').click( function ()
{
	$('#content').show();
	$('#oferta').css('display', 'none');
	$('#galeria').css('display', 'none');
    $('#wspolpraca').css('display', 'none');
	$('#rejestr').css('display', 'none');
});
$('#2').click(function ()
{
	$('#content').css('display', 'none');
	$('#oferta').show();
	$('#galeria').css('display', 'none');
    $('#wspolpraca').css('display', 'none');
	$('#rejestr').css('display', 'none');
});
$('#3').click(function ()
{
	$('#content').css('display', 'none');
	$('#oferta').css('display', 'none');
	$('#galeria').show();
    $('#wspolpraca').css('display', 'none');
	$('#kontakt').css('display', 'none');
	$('#rejestr').css('display', 'none');
});
$('#4').click(function ()
{
	$('#content').css('display', 'none');
	$('#oferta').css('display', 'none');
	$('#galeria').css('display', 'none');
    $('#wspolpraca').show();
	$('#kontakt').css('display', 'none');
	$('#rejestr').css('display', 'none');
});
$('#5').click(function ()
{
	$('#content').css('display', 'none');
	$('#oferta').css('display', 'none');
	$('#galeria').css('display', 'none');
    $('#wspolpraca').css('display', 'none');
	$('#kontakt').show();
	$('#rejestr').css('display', 'none');
});
$('#b_rejestr').click(function ()
{
	$('#content').css('display', 'none');
	$('#oferta').css('display', 'none');
	$('#galeria').css('display', 'none');
    $('#wspolpraca').css('display', 'none');
	$('#kontakt').css('display', 'none');
	$('#rejestr').show();
});