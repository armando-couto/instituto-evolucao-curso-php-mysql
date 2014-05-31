<?php
	/**
	 *	Esse método retorna o dia da semana.
	 *	@param int $day
	*/
	function getDayWeek($day = null) {
		$days = array(
			0 => "Domingo",
			1 => "Segunda",
			2 => "Terça",
			3 => "Quarta",
			4 => "Quinta",
			5 => "Sexta",
			6 => "Sábado"
		);		

		if ( (!empty($day) || $day === 0) && isset($days[$day]) ) {
			return $days[$day];
		} else {
			return $days[date('w')];
		}
	}

	/**
	 *	Esse método retorna o nome do mês.
	 *	@param int $month
	*/
	function getMonth($month = null) {
		$months = array(
			1 => "Janeiro",
			2 => "Fevereiro",
			3 => "Março",
			4 => "Abril",
			5 => "Maio",
			6 => "Junho",
			7 => "Julho",
			8 => "Agosto",
			9 => "Setembro",
			10 => "Outubro",
			11 => "Novembro",
			12 => "Dezembro"
		);

		if ( !empty($month) && isset($months[$month]) ) {
			return $months[(int)$month];
		} else {
			return $months[(int)date('m')];
		}
	}

	/**
	 *	Esse método retorna a data no padrão Brasileiro.
	 *	@param String $dateEn
	*/
	function dateToBr($dateEn) {
		if (strpos($dateEn, '-') !== false) {
			return implode("/", array_reverse(explode("-", $dateEn)));
		}
	}

	/**
	 *	Esse método retorna o data no padrão Americano.
	 *	@param String $dateBr
	*/
	function dateToEn($dateBr) {
		if (strpos($dateBr, '/') !== false) {
        	return implode("-", array_reverse(explode("/", $dateBr)));
        }
	}
?>