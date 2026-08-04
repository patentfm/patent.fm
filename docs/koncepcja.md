# patent.fm — koncepcja

Dokument roboczy. Opisuje **co robimy, dla kogo, jak zarabiamy i jak wygląda taśma produkcyjna**.
Strona (`patent.fm`) jest zbudowana dokładnie pod ten model — patrz `docs/strona.md`.

---

## 1. Jedno zdanie

> **patent.fm** — co tydzień jedna aplikacja od zera do działającego MVP, opowiedziana jak reklama,
> której nikt nie zamówił. Kto chce robić tak samo, kupuje kurs.

Nazwa działa na dwóch poziomach:

- **patent** (pol.) — sprytny sposób, trik, „mam na to patent”. Nie „tutorial”, nie „szkolenie”. Patent.
- **.fm** — stacja. Są **odcinki**, jest **ramówka**, jest **sezon**, jest **ON AIR**. To daje rytm
  i zobowiązanie do regularności, a regularność jest tu jedyną przewagą.

Marka contentowa: **patent.fm**. Podmiot i faktury: **Fajny Materiał — Arkadiusz Wrzos** (zostaje w stopce i regulaminie).

---

## 2. Dlaczego to zadziała (i gdzie inni się wykładają)

Rynek kursów programowania w PL jest przeładowany: „naucz się Reacta w 30 dni”, 40 godzin nagrań,
konwersja spada, bo każdy obiecuje to samo i nikt nie pokazuje **skutku**.

Nasza przewaga nie leży w wiedzy — leży w **dowodzie i tempie**:

1. **Dowód publiczny.** Każdy odcinek kończy się działającą aplikacją pod publicznym adresem.
   Nie „nauczę cię robić apki”, tylko „zrobiłem 23 apki na oczach ludzi, oto jak”.
2. **Wideo jest reklamą, nie wykładem.** Ludzie nie oglądają 40-minutowych devlogów. Oglądają
   90-sekundową absurdalną reklamę i zostają, bo się śmiali. Humor to nasz koszt pozyskania klienta
   obniżony do zera.
3. **Produkt jest o systemie, nie o technologii.** Technologia się zestarzeje za rok. „Jak dowieźć
   MVP w 5 dni, nie zwariować i to sprzedać” — nie zestarzeje się.

Największe ryzyko całego pomysłu: **żart przykryje wartość** i zostaniemy „tym śmiesznym gościem
od apek”, którego nikt nie traktuje poważnie przy kasie. Dlatego twarda zasada:

> **Reklama jest głupia. Kurs jest serio.** Wideo sprzedaje uwagę, kurs sprzedaje rzemiosło.
> Nigdy odwrotnie.

---

## 3. Dla kogo

| Odbiorca | Co go boli | Co dostaje |
|---|---|---|
| **Junior / osoba ucząca się** | Zna składnię, nie umie dowieźć całości | System: od pomysłu do wdrożenia bez zamulania |
| **Dev z pracy 9–17** | Ma 30 pomysłów, 0 wypuszczonych | Taśma: jak dowieźć w tygodniu wieczorami |
| **Solo founder / freelancer** | Płaci 30 tys. za MVP, które nikt nie sprawdził | Sam robi POC i pitch, zanim wyda pieniądze |
| **Firmy (usługi B2B)** | Potrzebują MVP na wczoraj | Zlecenie — portfolio to 20 publicznych odcinków |

Główny odbiorca kursów to **dev z pracy 9–17 i solo founder** — mają pieniądze i konkretny ból.
Junior jest publicznością (zasięgi, newsletter), nie głównym płatnikiem.

---

## 4. Model zarabiania — drabinka

Zasada: **darmowe daje dowód, płatne daje skrót.** Nikt nie płaci za informację, płaci za czas.

| Poziom | Produkt | Cena | Rola |
|---|---|---|---|
| 0 | Odcinek: wideo + działająca apka + case study | 0 zł | Dowód i zasięg |
| 0 | Newsletter „Patent tygodnia” | 0 zł | Właściciel relacji — jedyny kanał, którego nam nie zabiorą |
| 1 | **Patent Pack** — starter repo, szablon decku, checklisty, prompty | 39–79 zł | Zamiana czytelnika w klienta (pierwsza transakcja) |
| 2 | **Kurs pojedynczy** — np. „Od pomysłu do MVP w 5 dni” | 249–449 zł | Główne źródło przychodu |
| 3 | **Fabryka MVP** — flagowiec, cały system + kulisy + szablony | 899–1499 zł | Marża, kupują najbardziej zaangażowani |
| 4 | **Abonament „Studio”** — wszystkie kursy + kulisy odcinków + Q&A | 49–79 zł/mies. | Przewidywalny przychód |
| 5 | **Usługi** — MVP na zlecenie, konsultacje | od 6 000 zł / 1 000 zł za MD | Cashflow w czasie budowy publiczności |

Kolejność wdrażania jest **odwrotna do drabinki**: najpierw poziom 5 i 0 (usługi płacą rachunki,
odcinki budują publiczność), potem 1, potem 2. Flagowiec i abonament dopiero, gdy istnieje lista
mailowa, bo inaczej sprzedajemy do pustego pokoju.

**Pierwsze trzy kursy** (powstają jako produkt uboczny odcinków, nie osobna praca):

1. **„Od pomysłu do MVP w 5 dni”** — rdzeń. Zakres, cięcie zakresu, stack, dowożenie.
2. **„Śmieszny pitch, który sprzedaje”** — scenariusz, nagranie, montaż, dystrybucja. Dla devów,
   którzy nie umieją opowiedzieć, co zrobili. Bardzo szeroki rynek, mała konkurencja.
3. **„Ship it — wdrożenie w 60 minut”** — domena, hosting, płatności, analityka, RODO. Nudne
   i dlatego wszyscy to olewają, a to na tym wykłada się większość projektów.

---

## 5. Lejek

```
  TikTok / Shorts / Reels / LinkedIn        ← 20–60 s, sam hook + demo + puenta
                │
                ▼
  YouTube: pełna „reklama” 90 s + kulisy    ← tu buduje się zaufanie
                │
                ▼
  patent.fm/odcinki/<slug>                  ← demo apki, repo, case study „jak w 4 dni”
                │
                ▼
  Newsletter „Patent tygodnia”              ← lead magnet: Patent Pack Lite (darmowy)
                │
                ▼
  Kurs / abonament                          ← sprzedaż w 3–5 mailu, nie w pierwszym
```

Każdy odcinek ma **jedno CTA**, a nie pięć. Wideo → strona odcinka. Strona odcinka → mail.
Mail → kurs. Skracanie tej drogi („kup teraz” pod wiralowym filmikiem) zabija konwersję,
bo widz z TikToka nie zna nas jeszcze na tyle, żeby wydać 400 zł.

---

## 6. Format wideo — „reklama, której nikt nie zamawiał”

Konwencja: **parodia telezakupów i pitchu startupowego**. Przesadzony problem, cudowne rozwiązanie,
fałszywe opinie klientów, absurdalny cennik, drobny druk czytany z prędkością reklamy leków.

### Struktura 90 s (kanon)

| Czas | Blok | Co się dzieje |
|---|---|---|
| 0:00–0:08 | **Cierpienie** | Czarno-białe ujęcie, ktoś (ja) mierzy się z problemem w sposób absurdalnie tragiczny |
| 0:08–0:14 | **„A gdyby tak…?”** | Kolor, muzyka, apka wjeżdża jak zbawienie |
| 0:14–0:45 | **Trzy fajerwerki** | Dokładnie 3 funkcje, każda w ~10 s, prawdziwe demo, zero mockupów |
| 0:45–1:00 | **Opinie „klientów”** | Zmyślone testimoniale z absurdalnymi podpisami („Janusz, prezes czegoś”) |
| 1:00–1:15 | **Oferta** | Cena przekreślona, „a teraz uwaga”, licznik, gratis który nikomu niepotrzebny |
| 1:15–1:30 | **Drobny druk + prawdziwe CTA** | Żarty czytane szybko, a na końcu **serio**: „kod jest tu, patent.fm” |

### Twarda zasada produkcyjna (najważniejsza rzecz w całym dokumencie)

> **Scenariusz reklamy powstaje PRZED kodem.**

Skoro reklama pokazuje **dokładnie trzy funkcje**, to MVP ma **dokładnie trzy funkcje**. Scenariusz
staje się specyfikacją i naturalnym hamulcem zakresu. To rozwiązuje problem, który zabija każdą
taśmę produkcyjną — rozjeżdżanie się zakresu w środę wieczorem.

### Wariant krótki (20–30 s)

Hook z bloku „Cierpienie” + jedna najmocniejsza funkcja + puenta + „całość na patent.fm”.
Montowany z tych samych ujęć, zero dodatkowej pracy.

### Czego nie robimy

- Nie parodiujemy **istniejących marek** (znaki towarowe, ryzyko prawne). Wymyślamy własne.
- Nie żartujemy z ludzi, tylko z sytuacji i z siebie.
- Nie obiecujemy w żarcie rzeczy, których apka nie robi — demo zawsze prawdziwe.

Szablony scenariusza i decku: `docs/produkcja/`.

---

## 7. Taśma — jak wygląda tydzień

Jeden odcinek = jeden tydzień. Sztywne bloki, bo elastyczny harmonogram oznacza brak odcinka.

| Dzień | Blok | Efekt |
|---|---|---|
| **Pon** | Wybór pomysłu z backlogu + scenariusz reklamy + „pre-mortem” (co pójdzie nie tak) | Zakres zamrożony: 3 funkcje |
| **Wt–Śr** | Budowa. Timeboxy, stały stack, zero decyzji technologicznych | Działająca apka |
| **Czw** | Wdrożenie + nagranie demo i ujęć | Apka pod publicznym adresem |
| **Pt** | Montaż + publikacja odcinka + newsletter + wrzutki na social | Odcinek na antenie |

**Zasada „ship or kill”:** jeśli w czwartek nie ma działającego demo — odcinek i tak wychodzi,
tyle że jako **„porażka tygodnia”** z rozbiorem, co poszło nie tak. Porażki mają często lepsze
zasięgi niż sukcesy i chronią przed obsuwą, która wykoleja cały cykl.

**Stały stack (zero decyzji w trakcie odcinka):** jeden starter repo, jeden hosting, jedna baza,
jeden system płatności, jedna analityka, jeden zestaw komponentów UI. Każda zmiana stacku to
osobna decyzja podejmowana **między sezonami**, nigdy w środku odcinka.

**Sezon = 8 odcinków + 2 tygodnie przerwy.** Przerwa jest w planie od początku, bo wypalenie jest
tu jedynym realnym powodem, dla którego taki projekt umiera. W przerwie: montaż materiału
kursowego z nagranych kulis (kurs praktycznie sam się nagrał w trakcie sezonu).

---

## 8. Miary — po czym poznamy, że to działa

Nie liczymy wyświetleń jako celu. Wyświetlenia to paliwo, nie wynik.

| Miara | Cel na koniec sezonu 1 |
|---|---|
| Odcinki wypuszczone w terminie | 8/8 |
| Czas produkcji odcinka | ≤ 20 h |
| Zapisy na newsletter | 500 |
| Konwersja strona odcinka → mail | ≥ 5% |
| Konwersja mail → pierwszy zakup (Patent Pack) | ≥ 2% |
| Przychód z usług w trakcie sezonu | pokrywa koszty |

Jeśli po sezonie 1 newsletter ma < 200 osób, problemem jest **dystrybucja**, nie produkt — wtedy
sezon 2 idzie w te same formaty, ale z mocniejszym naciskiem na krótkie wideo, zanim powstanie
jakikolwiek kurs.

---

## 9. Ryzyka i co z nimi robimy

| Ryzyko | Reakcja |
|---|---|
| **Wypalenie** | Sezony z zaplanowaną przerwą, bufor: 2 odcinki nagrane „na zapas” przed startem |
| **Humor przykrywa wartość** | Podział ról: reklama = żart, kurs = rzemiosło. Nigdy odwrotnie |
| **Apki nikogo nie obchodzą** | Produktem jest system, nie apka. Apka jest dowodem, nie towarem |
| **Brak sprzedaży mimo zasięgów** | Najpierw tanie Patent Packi (walidacja gotowości do płacenia), potem drogie kursy |
| **Prawo: parodia marek** | Tylko fikcyjne marki i produkty |
| **Prawo: sprzedaż treści cyfrowych** | Regulamin + zgoda na natychmiastowy dostęp (utrata prawa odstąpienia), RODO, faktury |
| **Uzależnienie od jednej platformy** | Newsletter i patent.fm są nasze; social to tylko dystrybucja |

---

## 10. Co robimy najpierw

1. **Strona gotowa na treść** — żeby publikacja odcinka to było dodanie jednego pliku. ← *ten PR*
2. **Odcinek zerowy** — manifest kanału, wyjaśnia format, zapowiada sezon 1.
3. **Lead magnet** — „Patent Pack Lite” (checklista 5 dni + szablon scenariusza) za maila.
4. **Sezon 1: 8 odcinków**, publikacja co piątek.
5. **Patent Pack** (płatny) — sprzedawany od odcinka 3.
6. **Kurs 1** zmontowany z kulis sezonu 1, przedsprzedaż do newslettera przed premierą.
7. **Sezon 2** + drugi kurs. Decyzja o abonamencie dopiero tutaj.
