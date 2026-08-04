# patent.fm — jak działa strona

Strona jest statyczna (Jekyll + GitHub Pages). Publikacja odcinka albo lekcji to **dodanie
jednego pliku** — nic nie trzeba klikać w panelu, nie ma bazy danych i nie ma czego zepsuć.

Koncepcja i model biznesowy: [`koncepcja.md`](koncepcja.md).

---

## Uruchomienie lokalnie

```bash
bundle install
bundle exec jekyll serve
# strona: http://localhost:4000
```

Strona buduje się poprawnie zarówno na Jekyllu 4, jak i na Jekyllu 3.9, którego używa
GitHub Pages — sprawdzone przez porównanie wygenerowanych plików.

---

## Struktura treści

| Katalog | Co to jest | Adres |
|---|---|---|
| `_odcinki/` | odcinek = aplikacja + reklama + rozbiór tygodnia | `/odcinki/<nazwa-pliku>/` |
| `_kursy/` | strona sprzedażowa kursu | `/kursy/<nazwa-pliku>/` |
| `_lekcje/<kurs>/` | lekcje kursu | `/kursy/<kurs>/<nazwa-pliku>/` |
| `_materialy/` | materiały do pobrania (darmowe i płatne) | `/materialy/<nazwa-pliku>/` |
| `_data/` | dane wspólne: menu, autor, ustawienia sprzedaży | — |

Strony z listami (`/odcinki/`, `/kursy/`, `/materialy/`) budują się same z tych katalogów.
Nic nie trzeba dopisywać ręcznie.

---

## Nowy odcinek

1. Skopiuj `_odcinki/przyklad-kolejkomat.md` na `_odcinki/<slug>.md`.
2. Ustaw `published: true` (albo usuń tę linijkę).
3. Wypełnij pola i wrzuć treść pod nagłówkiem — commit i push.

Pola odcinka:

| Pole | Znaczenie |
|---|---|
| `slug` | identyfikator używany w powiązaniach (materiały ↔ odcinek) |
| `numer` | numer odcinka; steruje kolejnością i nawigacją poprzedni/następny |
| `title`, `tagline`, `opis` | tytuł, podtytuł, opis do wyszukiwarek i kart |
| `data` | data publikacji (`RRRR-MM-DD`) |
| `czas` | ile realnie zajęło, np. `4 dni` |
| `status` | `na-antenie`, `porazka` albo `wkrotce` |
| `youtube` / `vimeo` | identyfikator wideo; puste = zaślepka „nagrywa się” |
| `demo_url`, `repo_url` | linki do działającej aplikacji i repozytorium |
| `stack` | lista technologii (tagi) |
| `funkcje` | **dokładnie trzy** wpisy `tytul` + `opis` — te same, co w reklamie |
| `kurs` | `slug` kursu, do którego odcinek podpina polecenie |
| `materialy` | lista `slug`-ów materiałów pokazywanych pod odcinkiem |

## Nowy kurs

Plik w `_kursy/<slug>.md`. Najważniejsze pola:

- `slug` — musi się zgadzać z nazwą katalogu w `_lekcje/` oraz z polem `kurs` w lekcjach,
- `status` — `wkrotce`, `przedsprzedaz` albo `dostepny`,
- `cena`, `cena_przed` — same liczby, bez waluty (waluta jest w `_data/sprzedaz.yml`),
- `link_zakupu` — adres koszyka u operatora płatności.

**Puste `link_zakupu` zamienia przycisk „Kup dostęp” w „Powiadom mnie o premierze”** kierujący
na newsletter. Dzięki temu można wystawić stronę kursu i zbierać zainteresowanych, zanim
cokolwiek powstanie.

Dalej: `efekty` (co uczestnik będzie umiał), `dla_kogo` (`kto` + `po_co`), `faq`
(`pytanie` + `odpowiedz`), `materialy` (lista `slug`-ów).

## Nowa lekcja

Plik w `_lekcje/<slug-kursu>/<nazwa>.md`, w środku `kurs: <slug-kursu>` i `numer`.

- `dostep: darmowa` → strona pokazuje wideo i pełną treść lekcji,
- `dostep: platna` → zamiast wideo pojawia się blokada z przyciskiem zakupu, a pod nią lista
  `zajawka` (czego uczy lekcja). Treść pliku **nie jest wtedy renderowana**.

Kolejność, nawigacja „poprzednia/następna” i spis w kolumnie bocznej biorą się z pola `numer`.

## Nowy materiał

Plik w `_materialy/<slug>.md`. Zachowanie przycisku zależy od pól:

| Ustawienie | Efekt |
|---|---|
| `cena` puste + `wymaga_zapisu: true` | formularz newslettera (lead magnet wysyłany mailem) |
| `cena` puste + `plik: /sciezka.pdf` | przycisk „Pobierz” |
| `cena` + `link_zakupu` | przycisk „Kup za …” |
| `cena` bez `link_zakupu` | przycisk „Powiadom mnie o premierze” |
| `status: wkrotce` (bez ceny i bez zapisu) | oznaczenie „Wkrótce” i zapis na powiadomienie |

Materiał płatny, który jeszcze nie ma ustalonej ceny, musi mieć `status: wkrotce` — inaczej
zostałby pokazany jako darmowy.

---

## Sprzedaż i dostęp do płatnych treści

Strona jest statyczna, więc **nie da się na niej trzymać treści realnie zabezpieczonej hasłem**
— cokolwiek trafi do repozytorium, jest publiczne. Dlatego podział jest taki:

- **patent.fm** obsługuje marketing: strony kursów, program, darmowe lekcje, materiały, newsletter.
- **Płatność** idzie przez zewnętrznego operatora (Gumroad / easy.tools / Stripe Payment Link) —
  wystarczy wkleić adres koszyka w `link_zakupu`.
- **Dostęp do płatnych nagrań** dostarcza mail z linkiem, a same wideo są nielistowane
  (Vimeo z ograniczeniem domeny albo YouTube „niepubliczny”).

Strona [`/dostep/`](../dostep.markdown) tłumaczy to kupującym.

Gdyby kiedyś doszło logowanie i realna ochrona treści, trzeba będzie dołożyć zewnętrzną
platformę kursową i linkować do niej z tych samych stron — układ treści się nie zmieni.

---

## Ustawienia w `_data/`

| Plik | Za co odpowiada |
|---|---|
| `autor.yml` | dane w stopce, kontakt, dane firmy do regulaminu, social media |
| `nawigacja.yml` | menu górne, przycisk CTA, linki w stopce |
| `sprzedaz.yml` | waluta, adres formularza Mailchimpa, operator płatności, identyfikator GA4 |

**Analityka:** w `sprzedaz.yml` jest puste pole `analityka.ga4`. Stary identyfikator
`UA-179409470-1` był z Universal Analytics, które przestało zbierać dane w 2023 r. — wpisz
identyfikator GA4 (`G-…`) albo zostaw pusto. Baner ciasteczek pokazuje się **tylko wtedy**,
gdy analityka jest włączona.

**Newsletter:** formularz kieruje na Mailchimpa. Adresy stron potwierdzeń
(`subskrypcja-sukces-*.html`) zostały zachowane, bo są ustawione po stronie Mailchimpa —
przy zmianie nazw trzeba je poprawić także tam.

---

## Wygląd

Cały wygląd to jeden plik: `css/patent.css` (zmienne CSS na górze — kolory, promienie,
szerokości) i `js/patent.js` (menu mobilne i baner ciasteczek). Bez Bootstrapa, bez jQuery,
bez frameworka.

Grafika `images/og-patent-fm.png` jest domyślnym podglądem przy udostępnianiu linków.
Pojedyncza strona może mieć własną przez pole `okladka` we front matterze.

## Co zostało po starym szablonie

Katalogi `vendors/`, `scss/`, `css/style.css` oraz `js/contact.js` to pozostałości po kupionym
szablonie Mobland. Żaden layout ich nie używa i są wyłączone z publikacji w `_config.yml`
(sekcja `exclude`). Można je skasować — zostawione tylko na wypadek, gdyby czegoś stamtąd
brakowało w pierwszych tygodniach.

Nieużywane grafiki z tego szablonu (7 MB, wcześniej wgrywane przy każdym wdrożeniu) leżą teraz
w `backup/stary-szablon-obrazki/`, czyli poza publikacją. W `images/` zostały tylko logotypy
i grafika OG.

Stare adresy nie umarły: `/polityka-prywatnosci-fajny-material.html`,
`/kurs-git-i-git-flow-praktyczne-wykorzystanie.html` i `/contact-success.html` przekierowują
na nowe strony (layout `przekierowanie`).

---

## Przed pierwszą sprzedażą

- [ ] Wpisać operatora płatności w `_data/sprzedaz.yml` i `link_zakupu` w kursie
- [ ] Dać `regulamin.markdown` i `prywatnosc.markdown` do sprawdzenia prawnikowi
      (oba są szablonami — mają to zaznaczone w polu `uwaga` we front matterze)
- [ ] Odebrać przy zakupie zgodę na natychmiastowy dostęp (utrata prawa odstąpienia)
- [ ] Sprawdzić, czy pułapka na boty w formularzu Mailchimpa ma poprawną nazwę
      (`b_<u>_<id>` z adresu formularza)
- [ ] Ustawić identyfikator GA4 albo świadomie zostawić stronę bez analityki
