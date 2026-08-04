# patent.fm

Strona domowa projektu **patent.fm** — co tydzień jedna aplikacja od pomysłu do działającego MVP,
plus kursy i materiały dla tych, którzy chcą robić tak samo.

Jekyll + GitHub Pages, bez backendu. Domena: [patent.fm](https://patent.fm).
Podmiot: Fajny Materiał — Arkadiusz Wrzos.

## Uruchomienie

```bash
bundle install
bundle exec jekyll serve
```

## Dokumentacja

| Dokument | O czym |
|---|---|
| [`docs/koncepcja.md`](docs/koncepcja.md) | pomysł, odbiorcy, drabinka produktów, lejek, format wideo, taśma produkcyjna, ryzyka |
| [`docs/strona.md`](docs/strona.md) | jak dodać odcinek, kurs, lekcję i materiał; ustawienia sprzedaży i analityki |
| [`docs/produkcja/`](docs/produkcja/) | szablon scenariusza reklamy, szablon pitch decku, checklista odcinka |

Katalog `docs/` jest wyłączony z publikacji — to zaplecze, nie treść strony.

## Publikacja

Push na `master` uruchamia build GitHub Pages. `_config.yml` ma pole `version` — podbij je przy
wydaniu, żeby unieważnić cache CSS i JS.
