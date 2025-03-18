# IT stažuotės WEB vystymo ir palaikymo atrankos užduotis

## Apžvalga

Šis projektas yra paprasta PHP žiniatinklio programa, kuri nuskaito sveikųjų skaičių sąrašą iš tekstinio failo, rūšiuoja juos didėjančia tvarka ir pateikia surūšiuotą sąrašą tinklalapyje. Tai taip pat leidžia vartotojams sąveikauti su didžiausiu sąraše esančiu skaičiumi ir suteikia galimybę šią reikšmę padidinti arba sumažinti 5, užtikrinant, kad ji nenukristų žemiau nulio.

## Projekto struktūra
.
├── data/                      # Duomenų katalogas
│   └── input.txt              # Įvesties failas su skaičiais
├── src/                       # Šaltinio kodo katalogas
│   ├── index.php              # Pagrindinis įėjimo taškas
│   └── style.css              # stiliaus failas
└── docker-compose.yml         # Docker konfigūracija
└── README.md                  # Šis failas
└── wireframe-bite-task.png    # Ekrano nuotrauka

## Kūrimo eigos instrukcija

1. Naudojant Docker sukurtas clone repository, nurodyta direktorija ir paleistas projektas.
2. Išanalizuoti projekto reikalavimai, užduotis, failai.
3. Kuriama web programa, kuri rūšiuoja sveikųjų skaičių sąrašą, leidžia naudotojui padidinti arba sumažinti didžiausią skaičių sąraše, grąžinti pradinę didžiausią reikšmę, nesumažinti mažiau nulio.
4. Įvesties failas input.txt, kuriame yra skaičių sąrašas.
5. Pagrindinis programos failas index.php, kuris skaito skaičius iš input.txt failo, rūšiuoja juos ir rodo naudotojui. Sukurta formulė apdoroti POST užklausas, kai naudotojas paspaudžia mygtuką - arba + arba Reset.
6. Stiliaus taisyklės src/style.css, kurios taikomos HTML elementams index.php faile. Stilius buvo sukurtas pagal įkeltą wireframe nuotraukos pavyzdį. 

## Funkcionalumas
- Programa nuskaito sveikuosius skaičius iš „input.txt“, juos surūšiuoja ir rodo surūšiuotą sąrašą.
- Didžiausias skaičius rodomas formos įvestyje, todėl naudotojai gali padidinti arba sumažinti jo reikšmę 5 ir atstatyti didžiausią įvesta skaičių.
- Programa užtikrina, kad didžiausias skaičius negali būti mažesnis nei nulis.

## Stilius
Pagrindiniai CSS stiliai yra įtraukti į „src/style.css“, kad būtų pagerintas rodomo turinio skaitomumas ir išdėstymas.

## Licencija
Šis projektas yra atvirojo kodo ir jį galima keisti bei platinti.