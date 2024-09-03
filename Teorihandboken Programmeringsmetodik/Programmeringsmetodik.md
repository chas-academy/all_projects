# Teorihandboken - Programmeringsmetodik (PG)
Studerande: Elias Luzwehimana

## PG 1.1 Versionshantering (Git)

**What:**
Versionshantering är ett system för att spåra och hantera förändringar i koden över tid. Git är ett populärt versionshanteringssystem som används för att hantera kodbaser och samarbeta på projekt.

**How:**
Git tillåter utvecklare att skapa, ändra och slå samman grenar i ett projekt. Kommandon som `git init`, `git add`, `git commit`, och `git push` används för att hantera versionskontroll. Exempel:

```bash
# Initialisera ett nytt Git-repo
git init

# Lägga till filer i staging area
git add .

# Skapa en commit
git commit -m "Initial commit"

# Skicka ändringar till fjärrrepo
git push origin main
Why: Versionshantering hjälper till att hålla reda på kodhistorik, underlättar samarbete och gör det möjligt att återställa tidigare versioner. Det är avgörande för effektiv och strukturerad utveckling.

PG 1.2 Benchmarking
What: Benchmarking innebär att mäta prestandan hos ett system eller programvara för att förstå dess effektivitet och identifiera potentiella förbättringsområden.

How: Benchmarking görs genom att köra specifika tester och samla in data om systemets svarstider, resursanvändning, och andra prestandamått. Verktyg som JMeter eller benchmarking-funktioner i kodbaser kan användas. Exempel:

python
Copy code
# Python Benchmark Example
import time

start_time = time.time()
# Kod som ska testas
end_time = time.time()

print(f"Execution time: {end_time - start_time} seconds")
Why: Benchmarking är viktigt för att optimera prestanda och identifiera flaskhalsar i systemet. Det hjälper utvecklare att göra informerade beslut om prestandaoptimering.

PG 1.3 Testdriven utveckling
What: Testdriven utveckling (TDD) är en utvecklingsmetodik där tester skrivs innan själva koden implementeras. Processen följer cykeln "skriv test, implementera kod, refaktorisera".

How: I TDD skrivs först ett test som misslyckas, följt av kod som får testet att passera. Exempel:

python
Copy code
# Python TDD Example
def add(a, b):
    return a + b

# Test
def test_add():
    assert add(2, 3) == 5
    assert add(-1, 1) == 0
Why: TDD hjälper till att säkerställa att koden fungerar som förväntat och underlättar kodkvalitet genom att identifiera fel tidigt i utvecklingsprocessen. Det ger också en tydlig dokumentation av krav genom tester.

PG 1.4 Deploy och staging
What: Deploy innebär att överföra och installera en applikation på en produktionsserver. Staging är en förproduktionsmiljö där applikationen testas innan den går live.

How: Deployment kan ske manuellt eller automatiskt via CI/CD-verktyg. Staging används för att simulera produktionsmiljön och säkerställa att allt fungerar som det ska. Exempel på verktyg: Jenkins, GitHub Actions.

Why: Deploy och staging är viktiga för att säkerställa att nya funktioner och ändringar fungerar korrekt innan de når användarna. Det minskar risken för fel och ger möjlighet att testa i en kontrollerad miljö.

PG 1.5 Debugging
What: Debugging är processen att identifiera och åtgärda fel i kod. Det involverar att analysera och förstå varför programvaran inte fungerar som förväntat.

How: Debugging kan göras genom att använda verktyg som debuggers och loggar. Exempelvis i webbläsarens utvecklarverktyg kan du sätta brytpunkter och inspektera variabler:

javascript
Copy code
// JavaScript Debugging Example
function divide(a, b) {
    console.log(a / b);
}

divide(4, 2); // Sätt brytpunkter här
Why: Debugging är avgörande för att säkerställa att programvaran fungerar korrekt och för att förbättra kodens kvalitet. Det hjälper utvecklare att förstå och åtgärda problem.

PG 1.6 Dokumentation
What: Dokumentation är skapandet av beskrivningar och vägledningar för kod och system. Det kan inkludera kodkommentarer, användarmanualer och tekniska specifikationer.

How: Bra dokumentation inkluderar kommentarer i koden, README-filer, och API-dokumentation. Exempel:

markdown
Copy code
# Project Documentation

## Installation

Run `npm install` to install dependencies.

## Usage

```bash
npm start
makefile
Copy code

**Why:**
Dokumentation är viktigt för att underlätta förståelsen och användningen av programvara. Det hjälper både utvecklare och slutanvändare att förstå systemets funktioner och hur man använder dem.

## PG 1.7 Struktur av kod i projekt

**What:**
Kodstruktur refererar till hur koden organiseras i ett projekt, inklusive fil- och mappstruktur, och kodkonventioner.

**How:**
En välstrukturerad kodbas är organiserad med en logisk mappstruktur och följer kodstandarder och konventioner. Exempel på struktur:

project/ |-- src/ | |-- components/ | |-- utils/ |-- tests/ |-- README.md

yaml
Copy code

**Why:**
En bra kodstruktur gör det lättare att förstå, underhålla och skala ett projekt. Det främjar kodåteranvändning och gör det lättare för nya utvecklare att förstå projektet.

## PG 1.8 Automatisering av arbetsflöde

**What:**
Automatisering av arbetsflöde innebär att använda verktyg och skript för att automatisera repetitiva utvecklingsuppgifter som byggen, tester och deploys.

**How:**
Automatisering kan göras med CI/CD-verktyg, byggsystem och skript. Exempel:

```yaml
# GitHub Actions Example
name: CI

on:
  push:
    branches:
      - main

jobs:
  build:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - run: npm install
      - run: npm test
Why: Automatisering förbättrar effektiviteten, minskar fel och frigör tid för utvecklare att fokusera på mer värdefullt arbete. Det säkerställer också att processer är konsekventa och pålitliga.

PG 1.9 Virtualisering av utvecklingsmiljö
What: Virtualisering av utvecklingsmiljö innebär att använda virtuella maskiner eller containrar för att skapa isolerade och konsekventa utvecklingsmiljöer.

How: Verktyg som Docker och Vagrant används för att skapa och hantera virtuella miljöer. Exempel med Docker:

dockerfile
Copy code
# Dockerfile Example
FROM node:14

WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .

CMD ["npm", "start"]
Why: Virtualisering säkerställer att utvecklingsmiljön är konsekvent över olika system och maskiner. Det förenklar hanteringen av beroenden och konfigurationer.

PG 1.10 Bundeling-verktyg
What: Bundling-verktyg används för att kombinera och optimera kodfiler för att förbättra webbsidans prestanda och ladda snabbare. Exempel på bundling-verktyg är Webpack och Parcel.

How: Bundling-verktyg samlar alla källfiler och paketerar dem till en eller flera utdatafiler. Exempel med Webpack:

javascript
Copy code
// webpack.config.js Example
const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist')
  }
};
Why: Bundling-verktyg förbättrar webbprestanda genom att minska antalet filer och storleken på de som laddas. Det gör också det enklare att hantera kod och resurser.

PG 1.11 Terminalinterface
What: Terminalinterface är gränssnittet som används för att interagera med ett system via kommandoraden. Det är ett kraftfullt verktyg för att köra kommandon och hantera filer.

How: Genom terminalen kan utvecklare köra kommandon för att navigera i filsystemet, köra program och hantera processer. Exempel:

bash
Copy code
# Terminal Commands Example
cd project-directory
ls
npm install
Why: Terminalinterface är viktigt för att effektivt utföra och automatisera uppgifter, särskilt för utvecklare som arbetar med servermiljöer och script. Det erbjuder direkt och snabb åtkomst till systemets funktioner.