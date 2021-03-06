# Követelményspecifikáció

## 1. Jelenlegi helyzet leírása:
- A munkahely elhagyási szándék olyan jelenség, amelyet sajnos a mai, modern cégek nagy százalékban megtapasztalnak. 
Ez a modern szervezetek egyik leginkább megoldandó munkaszervezési problémájaként jelentkezik, különösen igaz ez az 
olyan munkahelyeknél, ahol nincs lehetőség kreatív munkavégzésre. Ebbe a kategóriába tartozik cégünk is.
Vállalkozásunk, a jelenleg 10 fős alkalmazotti létszámmal rendelkező **Mntn Kft.** munkavállalói intenzív koncentrációt 
igénylő, monoton ülőmunkát végeznek napi 8 órában, mindezt leginkább számítógép előtt.
A jelenlegi munkakörök nem teszik lehetővé a munkaerő képességeinek kibontakozását, ezért a monotonitás, a hasonló- 
vagy azonos műveletek végzése miatt gyakori a túlzott stressz, sok esetben a felmondás is vállalkozásunkban.
Annak ellenére, hogy azon voltunk és vagyunk jelenleg is, hogy munkavállalóink jobb szájízzel töltsék el mindennapjaikat
cégünknél, ez idáig még nem találtunk tartós megoldást. Ezért éreztük úgy, hogy szükségük lenne valamire, ami a miatt nem
feltétlenül kellene eljönniük a számítógép mellől, azonban a munka egyhangúságát is megtöri kicsit.

## 2. Vágyálom rendszer leírása:
- Vállalkozásunk a monotónia csökkentése érdekében szeretne egy Fact portált létrehozni a munkavállalóink számára. Célunk, hogy az ülő munkát végző munkatársak óránként 5 percre érdekes és/vagy vicces tényeket olvasgathassanak, kiszakadva egy időre ebből a helyzetből.Szeretnénk, hogy a weboldal könnyen elérhető és letisztult legyen. A weboldal több funkciós legyen. A fő profil az két gomb: az egyik az érdekes tényeket, a másik pedig a vicceseket jeleníti meg. Lényeges, hogy tudjanak beküldeni a dolgozók is új cikkeket, legyen felhasználó fiókjuk, legyen like és dislike funkció, és ebből egy rangsort is láthassanak. Esetleg későbbiekben, hozzá adhatunk új kategóriákat is. Fontos, hogy reszponzív felülettel rendelkezzen, így okostelefonon és táblagépen is zökkenőmentesen meg lehessen nézni. A vállalati gépeken különböző böngészők vannak, ezért lényeges, hogy böngészőfüggetlen legyen. A weboldal ugyanúgy jelenjen meg Mozilla, Chrome, Edge stb. böngészőkben is.

## 3. Igényelt üzleti folyamatok

-    3.1.	Online megjelenés
-    3.2.	Regisztráció
-    3.3.	Bejelentkezés
-    3.4.	Új cikkek felvitele az adatbázisba.
-    3.5.	Hét gomb megjelenítése a felső menüben: Érdekességek, Viccesek, Cikk beküldése, Regisztráció, Belépés, Admin belépés illetve Rangsor 
-    3.6. 	Alapértelmezett beállítás legyen az érdekes cikkek.
-    3.7.	A cikkek tartalmazhatnak képeket is.
-    3.8.	Tetszésnyílvánítás lehetősége.
-    3.9.	Sötét/Világos mód választás lehetősége
-    3.10.	Adminisztrátori belépés

## 4. A rendszerre vonatkozó szabályok

- Cikkek tárolása MySQL-ben.
- HTML/CSS alkalmazása.
- A reszponzív design megvalósítása Bootsrtrap front-end keretrendszerrel történjen.
- A képek formátumára vonatkozó követelmények: JPEG, JPG és PNG

## 5. Követelménylista
- K01 Reszponzív design
- K02 Letisztult, egyszerű felület
- K03 Regisztrációs felület a munkatársak számára
- K04 Belépőfelület a munkatársak számára
- K05 Cikkeknél legyen ott a beküldő neve
- K06 Cikkek rangsorolása like és kategória szerint
- K07 Belépőfelület az adminisztrátor számára
- K08 Adatbázisba könnyen hozzáadhatók legyenek a cikkek
- K09 A cikkek szerkeszthetők és törölhetők legyenek
- K10 Egy admin adminná tehet egy regisztrált felhasználót
- k11 Cikkek listázása kategória szerint
- K12 Böngészőfüggetlenség
- K13 Dark mode opció

## 6. Fogalomszótár
- [MySQL](https://en.wikipedia.org/wiki/MySQL)
- [HTML](https://hu.wikipedia.org/wiki/HTML)
- [CSS](https://hu.wikipedia.org/wiki/Cascading_Style_Sheets)
- [PHP]( https://en.wikipedia.org/wiki/PHP)
- [Reszponzív design](https://en.wikipedia.org/wiki/Responsive_web_design)
- [Front-end](https://en.wikipedia.org/wiki/Front-end_web_development)
- [Boostrap](https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework))
- [Böngészőfüggetlenség](https://en.wikipedia.org/wiki/Cross-browser_compatibility)
- [Dark mode]( https://en.wikipedia.org/wiki/Light-on-dark_color_scheme)
