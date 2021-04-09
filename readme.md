start.sh przebudowuje cały site, przydatne przed release
_config.yml ma version, dobre do invalidate js / css przy release
endpoint ma się budować do webd, ale narazie tam jest problem z domeną ssl 
contact.php przepuszcza billy.plus dzieki .htaccess

skrypt refresh od razu pushuje z rebuildem

Jest opcja na hosting mydevil podobno dobry jakby github siadł
podobno hostinblue tez dobry

todo przenieść na fajny.dev i uprzątnąć jirę


## Integracja z Mailchimpem

1. Użytkownik jakoś przechodzi do zapisywania się na subskrypcję
1. Podaje swój adres email, ewentualnie przechwycone imię
1. Mailchimp przekierowuje signup thank you page na fajny.dev
1. Przechodzi na informację o koniecznym potwierdzeniu email
1. Ze skrzynki potwierdza rejestrację
1. Mailchimp przekierowuje confirmation thank you page na fajny.dev
1. Przechodzi na informację o prawidłowej rejestracji