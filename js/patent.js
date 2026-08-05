/* patent.fm — tyle JavaScriptu, ile naprawdę potrzeba. */
(function () {
  "use strict";

  var przycisk = document.querySelector(".menu-przycisk");
  var menu = document.getElementById("menu-glowne");

  if (przycisk && menu) {
    przycisk.addEventListener("click", function () {
      var otwarte = menu.classList.toggle("menu--otwarte");
      przycisk.setAttribute("aria-expanded", String(otwarte));
    });

    menu.addEventListener("click", function (zdarzenie) {
      if (zdarzenie.target.tagName === "A") {
        menu.classList.remove("menu--otwarte");
        przycisk.setAttribute("aria-expanded", "false");
      }
    });
  }

  var baner = document.getElementById("ciasteczka");
  var zgoda = document.getElementById("ciasteczka-ok");

  if (baner && zgoda) {
    try {
      if (localStorage.getItem("patent-ciasteczka") !== "ok") {
        baner.hidden = false;
      }
    } catch (blad) {
      baner.hidden = false;
    }

    zgoda.addEventListener("click", function () {
      baner.hidden = true;
      try {
        localStorage.setItem("patent-ciasteczka", "ok");
      } catch (blad) {
        /* tryb prywatny — trudno, baner pokaże się znowu */
      }
    });
  }
})();
