<?php 
$data = array('status' => 'success', 'description' => 'Udało się zaprosić użytkownika', 'additionalInfo' => 'Testowy endpoint odpowiada zawsze kodem 200, ale kiedyś odpowie też 500, a ten tekst będzie Error_message do wyświetlenia w snackbar. A co się stanie z requestem jeśli ten endpoint nie odpowie w ciągu 90 sekund? Zostawiam Ci tu ciekawego easter egga: Jeśli chcesz to zrobić zawodowo, to zrób mały kręcioł progres na 300-400 ms po kliknięciu zaproś, normalnie przejdź dalej hehe a następnie dopiero zapisz ten mail w shared prefences i spróbuj go wysłać postem. Jeśli się z JAKIEGOKOLWIEK powodu nie uda- spróbuj od nowa na nastpnych oknach czy co jakąś cykliczną akcję, albo przy uruchamianiu aplikacji, albo przy zamknięciu... w każdym razie jak się uda to wywal całkowicie shared prefa bo nie ma nic gorszego niż 2 krotnie wysłane zaproszenie. Albo 5 krotnie ;) ');

header('Content-Type: application/json');
echo json_encode($data);
?>