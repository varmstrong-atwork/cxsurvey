<?php
function getColor($value){
	if ( (int)$value === 0 && $value != NULL ) {
		return "#e84646";
		break;
	} else if ( (int)$value === 1 ) {
		return "#fac443";
		break;
	} else if ( (int)$value === 2 ) {
		return "#43c35e";
		break;
	} else {
		return "#efefef";
	}
}
?>