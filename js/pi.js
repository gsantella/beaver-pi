function cbtoggle(elNode) {
    if ($(elNode).is(":visible"))	
		$(elNode).hide();
	else $(elNode).show();
	}
	
function refresh_stats() {
			
	$.get("/application/controllers/stats.php", function(data) {
	$('#mem_free').html(formatted(data.memory).toString() + "KiB");
	$('#disk_free').html(formatted(data.disk).toString() + "KiB");
	$('#cpu_idle').html(data.cpu);
	$('#pi_cel').html(Math.round(100*data.temperature)/100);
	$('#pi_far').html(Math.round(100*(1.8*data.temperature + 32))/100);
		}, "json");
			
	    
}
	
window.onload = function() {            
		
	$.get("/application/controllers/maxvals.php", function(data) {
	$('#mem_total').html(formatted(data.memory).toString() + "KiB");
	$('#disk_total').html(formatted(data.disk).toString() + "KiB");
				
		}, "json");
		
	for (i=1;i<50;i++){
		setTimeout(refresh_stats, 5000 * i);
	}
		
}	

function formatted(x) {
    return x.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
}
	