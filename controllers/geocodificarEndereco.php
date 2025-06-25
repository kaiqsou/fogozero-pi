<?php
	function geocodificarEndereco($endereco)
	{
		$url = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($endereco);
		$opts = ["http" => ["header" => "User-Agent: FogoZero/1.0"]];
		$context = stream_context_create($opts);
		$resposta = file_get_contents($url, false, $context);
		$dados = json_decode($resposta, true);
		
		return !empty($dados) ? ['lat' => $dados[0]['lat'], 'lng' => $dados[0]['lon']] : null;
	}
	function calcularDistancia($lat1, $lng1, $lat2, $lng2) {
	//lat1 e lng1 (incendio)e lat2 e lng2 (morador)
    $raioTerra = 6371000; // metros
    $dLat = deg2rad($lat2 - $lat1);
    $dLng = deg2rad($lng2 - $lng1);
    $a = sin($dLat/2) * sin($dLat/2) +
         cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
         sin($dLng/2) * sin($dLng/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    return $raioTerra * $c;
}
?>