var intTimeId;

function MarcarTempoStart(costureiraProducaoId){
	intTimeId = setInterval(function () {
		var ProgressBarId = '#progressbar'+costureiraProducaoId;
		if($(ProgressBarId).attr('aria-valueseconds') == 0){
			clearInterval(intTimeId);
			return;
		}
		$(ProgressBarId).attr('aria-valueseconds', $(ProgressBarId).attr('aria-valueseconds')-1);
		$(ProgressBarId).html(formatTime($(ProgressBarId).attr('aria-valueseconds')));
					
		$(ProgressBarId).attr('aria-valuenow', $(ProgressBarId).attr('aria-valuenow')-(-1));
					
		var intMax = $(ProgressBarId).attr('aria-valuemax');
		var porcentagem = 100-(($(ProgressBarId).attr('aria-valuenow')*100)/intMax);
		$(ProgressBarId).css('width', porcentagem+'%');
				
		if(porcentagem > 50)
			$(ProgressBarId).attr('class', 'progress-bar progress-bar-success');
		else if(porcentagem > 20)
			$(ProgressBarId).attr('class', 'progress-bar progress-bar-info');
		else if(porcentagem > 5)
			$(ProgressBarId).attr('class', 'progress-bar progress-bar-warning');
		else
			$(ProgressBarId).attr('class', 'progress-bar progress-bar-danger');		
	}, 1000);
	$('#progressbar'+costureiraProducaoId).parent().show();
}

function MarcarTempoStop(costureiraProducaoId){
	clearInterval(intTimeId);
	$('#progressbar'+costureiraProducaoId).parent().hide();
}

function formatTime(secs){
	var times = new Array(3600, 60, 1);
	var time = '';
	var tmp;
	for(var i = 0; i < times.length; i++){
		tmp = Math.floor(secs / times[i]);
		if(tmp < 1){
			tmp = '00';
		} else if(tmp < 10){
			tmp = '0' + tmp;
		}
		time += tmp;
		if(i < 2){
			time += ':';
		}
		secs = secs % times[i];
	}
	return time;
}


