var spinning = false;

function spinCoke()
{
	spinning = !spinning;
	document.getElementById('modelcoke__anicam-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotationCoke()
{
	spinning = false;
	document.getElementById('modelcoke__anicam-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModelCoke()
{
    if(document.getElementById('modelcoke__anicam-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('modelcoke__anicam-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('modelcoke__anicam-TIMER').setAttribute('enabled', 'false');
}
function cameraFrontCoke()
{
	document.getElementById('modelcoke__frontcam').setAttribute('bind', 'true');
}

function cameraSideCoke()
{
	document.getElementById('modelcoke__sidecam').setAttribute('bind', 'true');
}


function cameraTopCoke()
{
	document.getElementById('modelcoke__topcam').setAttribute('bind', 'true');
}

function cameraBottomCoke()
{
	document.getElementById('modelcoke__bottomcam').setAttribute('bind', 'true');
}