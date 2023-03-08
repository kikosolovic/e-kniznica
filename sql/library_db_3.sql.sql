-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 08.Mar 2023, 10:35
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `library`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `biography` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `authors`
--

INSERT INTO `authors` (`id`, `fullname`, `biography`, `photo`) VALUES
(1, 'Fiodor Michalovič Dostojevskij', 'Fiodor Michajlovič Dostojevskij (rus. Фёдор Михайлович Достоевский; * 11. november 1821, Moskva – † 9. február 1881, Petrohrad) bol ruský spisovateľ a mysliteľ, predchodca existencializmu, filozof a člen petraševskovského hnutia. Dostojevskij je jedným zo zakladateľov moderného psychologického románu. Jeho umelecká tvorba podstatne ovplyvnila vývin svetovej prózy.', 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Dostoevsky_1872.jpg'),
(2, 'Lev Nikolajevič Tolstoj', 'Lev Nikolajevič Tolstoj (rus. Лев Николаевич Толстой; * 9. september 1828 – † 20. november 1910) bol ruský spisovateľ – románopisec, esejista, dramatik a filozof – ako aj kresťanský anarchista a stúpenec reformy vzdelávania. Je pravdepodobne najznámejším členom šľachtickej rodiny Tolstých a jedným z najčítanejších ruských spisovateľov.', 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Ilya_Efimovich_Repin_%281844-1930%29_-_Portrait_of_Leo_Tolstoy_%281887%29.jpg'),
(3, 'Honoré de Balzac', 'Honoré de Balzac [vyslov: onorédbalzak], vlastným menom Honoré Balssa (* 20. máj 1799, Tours – † 18. august 1850, Paríž), bol francúzsky spisovateľ, písal z prostredia francúzskej spoločnosti, je zakladateľom realistického románu. Predstaviteľ realizmu a romantizmu.\n\nMal sedliacky pôvod, ale vždy túžil dostať sa do vyššej spoločnosti, to je jeden zo základov jeho tvorby. Podarilo sa mu vyštudovať právo.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Honor%C3%A9_de_Balzac_%281842%29.jpg/230px-Honor%C3%A9_de_Balzac_%281842%29.jpg'),
(4, 'Robert Kiyosaki', 'Robert Toru Kiyosaki (* 8. apríl 1947, Hilo, Havaj, USA) je americký spisovateľ a podnikateľ japonského pôvodu.[1] Preslávil sa motivačnými knihami na témy podnikania, investovania a ekonomiky, založil spoločnosť Rich Dad Company.[2] Venuje sa problematike ekonomiky, baby boomerov a problémom moderného kapitalizmu.', 'https://pbs.twimg.com/profile_images/472421066007015424/MHUJj15g_400x400.jpeg'),
(5, 'Alexandr Sergejevič Puškin', 'Alexandr Sergejevič Puškin (rus. Алекса́ндр Серге́евич Пу́шкин; * 6. jún 1799, Moskva – † 10. február 1837, Petrohrad) bol ruský romantický básnik a prozaik.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/AleksandrPushkin.jpg/230px-AleksandrPushkin.jpg'),
(6, 'Dominik Dán', 'Dominik Dán (* 1955) je pseudonym slovenského spisovateľa detektívnych románov.', 'https://scontent.fbts10-1.fna.fbcdn.net/v/t39.30808-6/278705531_519446536212307_1147267720295585841_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=85W-4lyZ2OoAX98MR_g&_nc_ht=scontent.fbts10-1.fna&oh=00_AfAawpT3avL8dOCCryWSBnuggNg_37dDMMHnQWLA9TFgmA&oe=640D899E'),
(7, 'R. A. Salvatore', 'R. A. Salvatore, ktorý od narodenia žije v Massachusetts, napísal svoj prvý rukopis v roku 1982 do poznámkového bloku pri svetle sviece a pri počúvaní albumu Tusk od Fleetwood Mac. Preslávil sa trilógiou DemonWars – Démon sa prebúdza, Duch démona a Démonov apoštol a mnohými ďalšími knihami.', 'https://i.shgcdn.com/89e83b8f-af3b-48a9-8d56-693ccaa0c1ea/-/format/auto/-/preview/3000x3000/-/quality/lighter/'),
(8, 'Ján Skalka', 'Ján Skalka je Slovenský programátor narodený v Bratislave v roku 1979. Napísal viacero kníh o informatike.', 'https://media.licdn.com/dms/image/C4D03AQHPQ4fz7HbfUw/profile-displayphoto-shrink_800_800/0/1638819048770?e=2147483647&v=beta&t=qAqFKDtezkPWLALubuACmN0swix1ot8GtbzXiHezeOA'),
(9, 'Tom Wainwright\r\n', 'Tom Wainwright je technický a mediálny redaktor časopisu The Economist. Do novín nastúpil v roku 2007, aby písal o britských vnútorných záležitostiach, neskôr sa stal korešpondentom pre Mexiko, Strednú Ameriku a Karibik (2010-13), redaktorom domovskej stránky (2013-15) a redaktorom Británie (2015-20). súčasná úloha.', 'https://mediadirectory.economist.com/wp-content/uploads/2015/09/Tom-Wainwright-headshot-186x226.jpg'),
(10, 'Stephen Edwin King', 'Stephen Edwin King (* 21. september 1947, Maine) je americký spisovateľ hororov, vedeckej fantastiky a fantasy.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Stephen_King%2C_Comicon.jpg/230px-Stephen_King%2C_Comicon.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `main_genre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `release_year` int(11) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `main_genre`, `description`, `release_year`, `availability`, `language`, `image`) VALUES
(1, 'Zločin a trest', 1, 'Svedomie, Ruská klasika, Chudoba', 'Zločin a trest prináša príbeh chudobného študenta práva Rodiona Raskoľnikova, ktorý z presvedčenia a po dôkladnej príprave zavraždí starú úžerníčku, aby ju olúpil a finančne si zabezpečil štúdium. Do epicentra svojho hlbokého psychologického skúmania Dostojevskij postavil ľudské indivíduum a rozpoltenosť jeho duše. Presvedčivo a názorne ukazuje, ako aj silná osobnosť stroskotá pod tlakom sociálnych okolností.', 2014, 1, 'Slovenčina', 'https://www.databazeknih.cz/img/books/11_/1106/big_zlocin-a-trest-dr0-1106.jpg'),
(2, 'Anna Karenina', 2, 'Zakázaná láska, Ruská spoločnosť', 'V románe sa prepletajú dva hlavné príbehy: tragický, beznádejný osud Anny, jej muža i milenca a nájdenie životného šťastia a pravdy vo vzťahu medzi Levinom a Kitty. Dej sa odohráva v prevratnej dobe, keď do cárskeho Ruska prenikala spolu so železnicou priemyselná revolúcia. Autor si pritom všíma vplyvy do spoločnosti, reakcií vtedajších ľudí, prínosov i strát. V knihe nájdeme pre Tolstého typické zamýšľanie sa nad mentalitou ruských mužikov, aristokratickou spoločnosťou, vzťahom medzi mužmi a ženami, dobrom, pravdou i hľadaním viery. Ťažisko knihy nie je vo vlastnom deji, ale v fascinujúcom popise vnútorného sveta jednotlivých postáv.', 2019, 1, 'Slovenčina', 'https://im9.cz/sk/iR/importprodukt-orig/80e/80ef5e0692c69cea3a8808d144014c5e--mmf350x350.jpg'),
(3, 'Otec Goriot', 3, 'Román, Francúzska spoločnosť', 'Ľudská komédia je spoločenská dráma francúzskej spoločnosti po Veľkej francúzskej revolúcii z roku 1789. V diele vystupuje vyše 2000 hrdinov, no najvýznamnejším hrdinom sú vášne a peniaze, ktoré svojím leskom a špinou nedávajú ľuďom spať, sú predmetom chorobných túžob a intríg.', 2003, 1, 'Slovenčina', 'https://www.ciernenabielom.sk/images/polozky/velke/402020/otec-goriot-5f798b9b1501b.webp'),
(4, 'Rich Dad Poor Dad', 4, 'Financie', 'Bohatý otec Chudobný otec je Robertov príbeh o tom, ako vyrastal s dvoma otcami, jeho skutočným otcom a otcom jeho najlepšieho priateľa, jeho bohatého otca a spôsobmi, akými obaja muži formovali jeho myšlienky o peniazoch a investovaní. Kniha búra mýtus, že na to, aby ste boli bohatý, musíte zarábať vysoký príjem a vysvetľuje rozdiel medzi prácou pre peniaze a tým, aby vaše peniaze pracovali za vás.', 1997, 1, 'Angličtina', 'https://media.libris.to/jacket/15451496_rich-dad-poor-dad-20th-anniversary-edition.jpg'),
(5, 'Kapitánova dcéra', 5, 'Román', 'Dielo najväčšieho ruského spisovateľa Alexandra Sergejeviča Puškina (1799 – 1837) má v dejinách ruskej i svetovej literatúry epochálny význam. Puškin je tvorcom a kanonizátorom modernej spisovnej ruštiny, zakladateľom novej ruskej literatúry a zároveň aj vzácne harmonickým človekom, zápalistým vlastencom, nezlomným odporcom zla, bojovníkom za lepší osud svojho národa i celého ľudstva, skutočným stelesnením priamosti, činorodosti a optimizmu v živote i diele.\r\nSlávna novela Kapitánova dcéra (1836) zodpovedala Puškinovmu videniu sveta, kde všetko to najcennejšie nevyplýva z konvencií a formalít, ale je výsledkom osobných vzťahov, obetovania sa a lásky aj za cenu, že človek musí porušiť pravidlá. Podľa Puškina spoločnosť mala len tvoriť rámec a dopĺňať harmonické väzby medzi ľuďmi. Najvyššiu hodnotu má podľa autora láska a schopnosť obetovať sa za druhého.', 1836, 0, 'Slovenčina', 'https://www.ciernenabielom.sk/images/polozky/velke/302014/kapitanova-dcera-maly-format-42967e0c24b73d1bcd88edda72d1c559.webp'),
(6, 'Dáma kontra strelec', 6, 'Detektívka', 'V polovici deväťdesiatych rokov sa v Našom Meste aktivizovalo podsvetie a chlapci z oddelenia vrážd mali plné ruky práce. No nie všetky vraždy z tohto obdobia súviseli s podsvetím. Našli sa aj také, ktoré na svoje vyriešenie čakali v Krauzovej skrini roky, a nakoniec sa dočkali.\r\n\r\nPo troch rokoch vyšetrovania sa detektívom podarilo chytiť vraha sedemnásťročnej prostitútky Ruženky Róžovej, dopichanej v tráve na kraji sídliska. Napriek sľubu šéfa Alexandra Mayora si Krauz a celá partia z kancelárie stoštyridsaťjeden neužijú zaslúžené oslavy ani pár dní voľna, lebo nový prípad sa už blíži ‒ nenápadne ako tajomný strelec maskovaný podvečerným šerom pustého lesa. Obeťou je bývalá športovkyňa, reprezentantka a zároveň modelka pôsobiaca na vychýrených mólach Paríža či Milána ‒ veľká dáma veľkého sveta. Lenže ako zistiť, kto je záhadný strelec, ktorý jej usiluje o život? Krauzovi nie je jasné ani to, či jej naozaj niekto usiluje o život, či to nebol len náhodný výstrel zákerného pytliaka. Detektívi z oddelenia vrážd majú pred sebou ďalší rébus, výsledok vyšetrovania môže priniesť prekvapujúce odpovede ako už mnohokrát predtým.', 2022, 1, 'Slovenčina', 'https://mrtns.sk/tovar/_xl/1743/xl1743891.jpg?v=16770900111'),
(7, 'Farba drakov', 7, 'Sci-fi, Fantasy', 'Maggie bola najdúch, ktorého sa pred mnohými rokmi ujal tulák Xavier, samozvaný kúzelník. Len čo vyrástla, začala mu asistovať na predstaveniach. Sama však žiadne kúzla neovládala.\r\n\r\nPomáhala mu s rekvizitami a s plechovkou obchádzala divákov v nádeji, že do nej hodia zopár drobných. Počas jedného večera sa Xavierovi podarí nevídaný kúsok, oživí zajaca, ale nik okrem Maggie netuší, že to ona má zázrak na svedomí. Lúč mesačného svetla, záblesk plameňa, rýchle tanečné kroky – toto všetko stačí na prebudenie Magginých výnimočných schopností. Lenže ako sa jej to vlastne podarilo? Nemá nikoho, kto by ju naučil schopnosti správne využívať, a tak sa radšej drží v ústraní. Jedného dňa stretne Griffina, chlapca neurodzeného pôvodu, ktorý vie len jedno – zabíjať drakov. Obrovské zvieratá, s tesákmi ako dýky a s hadími chvostmi prerastenými smrtiacimi hrotmi, sužovali krajinu odnepamäti. Ich stretnutie tak spustí sled udalostí, ktoré celkom zmenia jej život a zároveň osud celého kráľovstva.', 2023, 1, 'Slovenčina', 'https://data.bux.sk/book/020/539/0205395/large-farba_drakov.jpg'),
(8, 'Informatika 1', 8, 'Informatika', 'Prvá časť sumarizuje obsah tém zameraných na reprezentáciu informácií a ich spracovanie v špecializovaných aplikáciách, hardvér, softvér, počítačové siete, internet, komunikáciu a spoluprácu v prostredí sietí, ako aj základné atribúty informačnej spoločnosti.', 2019, 0, 'Slovenčina', 'https://mrtns.sk/tovar/_xl/598/xl598615.jpg?v=16668029441'),
(9, 'Narkonomika', 9, 'Biznis a manažment', 'Faktmi nadupaný bestseller s inovatívnym pohľadom na nelegálny biznis, proti ktorému vlády desaťročia bojujú, míňajú miliardy, ale nevyhrávajú. Komu táto hra vyhovuje? A kto na nej zarába najviac? Ako môže uspieť (a prežiť) nádejný šéf kartelu v biznise s nelegálnymi drogami v hodnote 300 miliárd dolárov? Samozrejme tak, že sa bude učiť od najlepších: ako zvýšiť hodnotu značky, prípadne ako vylepšovať služby zákazníkom.\n\nĽudia prevádzkujúci kartely pozorne študujú taktiku a stratégie, ktoré využívajú korporácie, ako sú Walmart, McDonald’s či Coca-Cola. A čo môže v boji s touto pohromou urobiť vláda? Keby policajné zložky analyzovali kartely ako firmy, mohli by lepšie pochopiť, ako fungujú – a prestali by vyhadzovať 100 miliárd dolárov ročne na zbytočné úsilie o víťazstvo vo „vojne“ proti tomuto globálnemu a veľmi vysoko organizovanému biznisu.', 2023, 1, 'Slovenčina', 'https://mrtns.sk/tovar/_xl/1825/xl1825125.jpg?v=16769678101'),
(10, 'Temná veža: Pištoľník', 10, 'Horor', 'Roland Deschain z Gileadu, posledný pištoľník v Stredsvete, samotár putujúci po ceste dobra a zla, stopuje tajuplného mága so schopnosťou oživovať mŕtvych, známeho iba ako muž v čiernom. Na svojej výprave po Mohainskej púšti zamorenej démonmi sa Roland vzoprie pomätenej kazateľke a jej vražedným ovečkám, zoznámi sa s príťažlivou ženou Alice, vedie rozhovor s démonom a napokon sa spriatelí s chlapcom z nášho sveta. Jake Chambers sa pridá k Rolandovi, ale zatiaľ čo pištoľník putuje so svojím mladým spoločníkom, muž v čiernom si odnáša jeho dušu vo vrecku.\r\n\r\nKto je muž v čiernom a čo vie o Temnej veži? Kde je hranica medzi dobrom a zlom? V úvodnom diele dnes už legendárnej série Temná veža Stephen King predstavuje výnimočný svet pustatiny plný vizuálne ohromujúcich scenérií a nezabudnuteľných postáv. Pištoľník kombinuje prvky vedecko-fantastického románu, futuristickej antiutópie, spaghetti westernu, hororu a vysokej fantasy. Prvý diel vyšiel v roku 1982, novšie vydania sú doplnené o autorov úvod.', 2017, 1, 'Slovenčina', 'https://mrtns.sk/tovar/_xl/252/xl252062.jpg?v=15233457311');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `book_wishlist`
--

CREATE TABLE `book_wishlist` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `credentials`
--

INSERT INTO `credentials` (`id`, `email_address`, `password`) VALUES
(1, 'tomset111@gmail.com', 'dasda'),
(15, 'paka@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `lent_books`
--

CREATE TABLE `lent_books` (
  `book_id` int(11) NOT NULL,
  `since_lent` date NOT NULL,
  `due_lent` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `returned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `credential_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexy pre tabuľku `lent_books`
--
ALTER TABLE `lent_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pre tabuľku `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pre tabuľku `lent_books`
--
ALTER TABLE `lent_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
