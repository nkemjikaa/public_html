var spinning = false;

function spinCoke()
{
	document.getElementById('modelcoke__anicam-TIMER').setAttribute('bind', 'true');
}

function stopRotationCoke()
{
	document.getElementById('modelcoke__anicam-TIMER').setAttribute('bind', 'false');
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



function cameraFrontCosta()
{
	document.getElementById('modelcosta__frontcam').setAttribute('bind', 'true');
}

function cameraSideCosta()
{
	document.getElementById('modelcosta__sidecam').setAttribute('bind', 'true');
}


function cameraTopCosta()
{
	document.getElementById('modelcosta__topcam').setAttribute('bind', 'true');
}

function cameraBottomCosta()
{
	document.getElementById('modelcosta__bottomcam').setAttribute('bind', 'true');
}