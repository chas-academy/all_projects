# Teorihandboken - JavaScript (JS)
Studerande: Förnamn Efternamn

## JS 1.1 JavaScript / ECMAScript
JavaScript är ett skriptspråk som används för att skapa interaktiva och dynamiska webbsidor. ECMAScript är den officiella standarden som definierar syntax och funktionalitet för JavaScript. ECMAScript specificerar hur JavaScript-språket ska fungera och har genomgått flera versioner och uppdateringar, med nya funktioner och förbättringar som införts i varje version, såsom ES6 (ECMAScript 2015) och senare versioner.

## JS 1.2 JavaScript-ramverk och -bibliotek
JavaScript-ramverk och -bibliotek är verktyg som underlättar utveckling av webbaserade applikationer genom att tillhandahålla fördefinierad funktionalitet och strukturer. Ramverk som React, Angular och Vue.js erbjuder kompletta lösningar för byggande av användargränssnitt, medan bibliotek som jQuery och Lodash tillhandahåller specifika funktioner och verktyg för att förenkla och effektivisera kodning.

## JS 1.3 Promises
Promises är ett objekt i JavaScript som representerar det framtida resultatet av en asynkron operation. De används för att hantera asynkrona uppgifter och ersätta den traditionella callback-baserade hanteringen. En promise kan vara i ett av tre tillstånd: pending (väntande), fulfilled (uppfylld) eller rejected (avvisad). Genom att använda `then()` och `catch()` kan utvecklare hantera resultatet eller fel från en asynkron operation på ett mer läsbart sätt.

## JS 1.4 OOP i JavaScript
Objektorienterad programmering (OOP) i JavaScript innebär att använda objekt för att organisera och strukturera kod. JavaScript stödjer OOP genom att tillhandahålla objekt och prototyper. Med ES6 introducerades en klassbaserad syntax som förenklar skapandet av objekt och arv genom `class` och `extends` nyckelord. OOP hjälper till att kapsla in data och beteenden, vilket främjar återanvändning av kod och modulär struktur.

## JS 1.5 DOM-manipulation
DOM (Document Object Model) är en representation av HTML-dokumentets struktur som gör det möjligt för JavaScript att interagera med och manipulera innehållet på en webbsida. Genom DOM-manipulation kan utvecklare dynamiskt ändra innehåll, struktur och stil på en webbsida. Metoder som `getElementById()`, `querySelector()`, och `appendChild()` används för att hämta, lägga till och ändra element i DOM.

## JS 1.6 HTTP-requests
HTTP-requests är förfrågningar som skickas till en server för att hämta eller skicka data. I JavaScript används `XMLHttpRequest` och `fetch()` API:et för att göra HTTP-requests. `fetch()` är den moderna och enklare metoden som returnerar ett promise och möjliggör hantering av svar och fel. HTTP-requests används för att kommunicera med servern och få data från externa källor eller API:er.

## JS 1.7 Lexical scope
Lexical scope i JavaScript avser det sätt på vilket variabler och funktioner är tillgängliga i olika delar av kodbasen beroende på deras deklarationssituation. Det innebär att en variabel som deklareras inuti en funktion är endast tillgänglig inom den funktionen och dess inre funktioner. Detta skapar en kedja av scopningar där den inre funktionen kan komma åt variabler deklarerade i yttre funktioner.

## JS 1.8 Event handling
Event handling i JavaScript innebär att registrera och svara på händelser som inträffar på en webbsida, såsom klick, tangenttryckningar eller musrörelser. Genom att använda metoder som `addEventListener()` kan utvecklare binda funktioner till specifika händelser och utföra åtgärder som svar på användarinteraktioner. Event handling gör det möjligt att skapa dynamiska och responsiva webbsidor.

## JS 1.9 Prototype inheritance
Prototype inheritance är ett system i JavaScript där objekt kan ärva egenskaper och metoder från andra objekt genom deras prototyper. Varje JavaScript-objekt har en intern länk till ett annat objekt, kallat dess prototyp. Detta möjliggör delning av egenskaper och metoder mellan objekt, vilket främjar återanvändning av kod och skapar ett arvssystem där egenskaper och metoder kan ärvas från föräldraobjekt till barnobjekt.

## JS 1.10 Higher-order functions
Higher-order functions är funktioner som antingen tar en eller flera funktioner som argument eller returnerar en funktion som resultat. Detta gör det möjligt att skapa mer flexibla och återanvändbara funktioner. Exempel på higher-order functions inkluderar `map()`, `filter()`, och `reduce()`, som används för att manipulera arrayer på ett deklarativt sätt.

## JS 1.11 Single-thread programming
Single-thread programming innebär att JavaScript körs på en enda tråd, vilket betyder att endast en uppgift kan köras åt gången. Detta innebär att JavaScript-koden exekveras i en sekventiell ordning och att komplexa eller långvariga operationer kan blockera tråden och påverka applikationens responsivitet. För att hantera detta används asynkron programmering och Web Workers för att utföra parallella uppgifter utan att blockera huvudtråden.

## JS 1.12 OAuth från frontend
OAuth är ett auktoriseringsprotokoll som gör det möjligt för applikationer att få tillgång till användardata utan att dela användarens lösenord. I frontend-applikationer används OAuth för att autentisera och auktorisera användare genom att omdirigera dem till en autentiseringstjänst och sedan använda en åtkomsttoken för att få tillgång till skyddade resurser. Detta säkerställer att användardata hanteras på ett säkert och kontrollerat sätt.

## JS 1.13 Websockets
Websockets är en teknik som möjliggör tvåvägskommunikation mellan en klient och en server över en enstaka långlivad anslutning. Detta tillåter att data kan skickas fram och tillbaka i realtid utan att behöva öppna nya HTTP-requests. Websockets används ofta i applikationer som kräver realtidsuppdateringar, såsom chattapplikationer eller live-datarapporter.
