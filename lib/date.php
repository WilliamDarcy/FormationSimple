<?php

/**
 * Modification de la date pour afficher une date complète dans un format français
 * @return la date complète avec l'heure
 */
function AfficherDateComplete($date)
{
	$phpdate = strtotime( $date );
	return date( 'd-m-Y H:i', $phpdate );
}
/**
 * Modification de la date pour afficher une date dans un format français
 * @return la date
 */
function AfficherDateJour($date)
{
	$phpdate = strtotime( $date );
	return date( 'd-m-Y', $phpdate );
}