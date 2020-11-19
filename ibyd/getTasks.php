<?php
$data = '[{
  "id": 1,
  "taskName": "Mycie podłogi",
  "userName": "Pietrek",
  "userImgUrl": "http://dummyimage.com/241x147.bmp/ff4444/ffffff",
  "lastDoneDate": "9/26/2020",
  "cykleType": "daily"
}, {
  "id": 2,
  "taskName": "Zmiana kół na zimowe",
  "userName": "Corbin",
  "userImgUrl": "http://dummyimage.com/120x218.jpg/5fa2dd/ffffff",
  "lastDoneDate": "9/24/2020",
  "cykleType": "oneTime"
}, {
  "id": 3,
  "taskName": "Składanie prania",
  "userName": "Aldis",
  "userImgUrl": "http://dummyimage.com/247x125.jpg/5fa2dd/ffffff",
  "lastDoneDate": "3/1/2020",
  "cykleType": "every2days"
}, {
  "id": 4,
  "taskName": "Praca Domowa z dziećmi",
  "userName": "Carce",
  "userImgUrl": "http://dummyimage.com/190x245.jpg/cc0000/ffffff",
  "lastDoneDate": "7/26/2020",
  "cykleType": "workingDays"
}, {
  "id": 5,
  "taskName": "Zakupy pieczywo",
  "userName": "Rockwell",
  "userImgUrl": "http://dummyimage.com/188x194.bmp/dddddd/000000",
  "lastDoneDate": "8/27/2020",
  "cykleType": "notSunday"
}, {
  "id": 6,
  "taskName": "Kolacja",
  "userName": "Billie",
  "userImgUrl": "http://dummyimage.com/103x175.bmp/dddddd/000000",
  "lastDoneDate": "5/25/2020",
  "cykleType": "daily"
}, {
  "id": 7,
  "taskName": "Sprzatanie kuchni",
  "userName": "Oran",
  "userImgUrl": "http://dummyimage.com/174x238.jpg/5fa2dd/ffffff",
  "lastDoneDate": null,
  "cykleType": "daily"
}, {
  "id": 8,
  "taskName": "Pranie",
  "userName": "Hayward",
  "userImgUrl": "http://dummyimage.com/230x143.jpg/ff4444/ffffff",
  "lastDoneDate": "7/24/2020",
  "cykleType": "every3days"
}, {
  "id": 9,
  "taskName": "Masaż",
  "userName": "Yurik",
  "userImgUrl": "http://dummyimage.com/218x117.jpg/cc0000/ffffff",
  "lastDoneDate": null,
  "cykleType": "oneTime"
}, {
  "id": 10,
  "taskName": "Kupić przekąski do filmu",
  "userName": "Thurston",
  "userImgUrl": "http://dummyimage.com/219x181.bmp/dddddd/000000",
  "lastDoneDate": "8/6/2020",
  "cykleType": "oneTime"
}, {
  "id": 11,
  "taskName": "Zaladowac zmywarkę",
  "userName": null,
  "userImgUrl": null,
  "lastDoneDate": "7/21/2020",
  "cykleType": "daily"
}, {
  "id": 12,
  "taskName": "Dzieci na spacer",
  "userName": "Gardiner",
  "userImgUrl": "http://dummyimage.com/150x107.bmp/5fa2dd/ffffff",
  "lastDoneDate": null,
  "cykleType": "daily"
}, {
  "id": 13,
  "taskName": "Gimnastyka",
  "userName": "Mort",
  "userImgUrl": "http://dummyimage.com/164x185.jpg/cc0000/ffffff",
  "lastDoneDate": "9/26/2020",
  "cykleType": "daily"
}, {
  "id": 14,
  "taskName": "Obiad",
  "userName": "Porter",
  "userImgUrl": "http://dummyimage.com/183x230.png/5fa2dd/ffffff",
  "lastDoneDate": null,
  "cykleType": "daily"
}, {
  "id": 15,
  "taskName": "Zepsuta żarowka",
  "userName": "Cully",
  "userImgUrl": "http://dummyimage.com/165x243.bmp/5fa2dd/ffffff",
  "lastDoneDate": "8/4/2020",
  "cykleType": "oneTime"
}]';

header('Content-Type: application/json');
echo $data;

?>