Teorihandboken - Programmeringsmetodik (PG)

Hej teacher, jag ska pröva skriva om programmeringsmetodik. Det kan bli lite mix språk och jag försöker förklara enkelt så du ser jag förstår lite.

PG 1.1 Versionshantering (Git)

Git är tool for saving kod och se changes. Man kan göra branches, det är like working on diff parts without touching main code. Sen merge man branches back. Det är bra for teamwork och if something goes wrong kan man go back till old version.

PG 1.2 Benchmarking

Benchmarking är test to see hur snabbt eller bra program gör work. Om det är slow, then man kan se var problem finns och fixa. Det kan vara för att veta vilken kod som funkar bäst eller hur mycket app klarar innan den blir långsam.

PG 1.3 Testdriven utveckling

TDD is writing test first, innan u write kod. Test check if funktion work som it should. If test fail, kod is wrong. It helps make kod clean och fungerar som den ska. Man skriver test -> sen kod -> sen kolla if test pass.

PG 1.4 Deploy och staging

Deploy betyder man flyttar kod to server som alla users kan see. Staging är copy av live server för test changes innan go live. Man vill testa allting in staging så det funkar bra live. Om det fail live är det problem.

PG 1.5 Debugging

Debugging är att fixa buggar. Man ser på errors, förstå vad som är wrong och ändra kod. Det finns tools som debugger och logs. Logs show what program do step by step så man kan se var det fail.

PG 1.6 Dokumentation

Dokumentation är like manual for kod. Man skriver hur kod fungerar eller hur att use det. Det är bra for andra developers or future me. Without dokumentation blir det svårt förstå vad kod gör.

PG 1.7 Struktur av kod i projekt

Struktur means hur kod är organized. Man delar upp i files och folders. Det är easier to read and update kod om det har clear struktur. Om kod är messy, it är hard att work with.

PG 1.8 Automatisering av arbetsflöde

Automation sparar tid. Man använder tools för att göra repetitiv tasks, like testing or building kod. Med automation kan man undvika misstag och jobba snabbare.

PG 1.9 Virtualisering av utvecklingsmiljö

Virtualisering är att create fake miljö som är like production. Tools like Docker används for detta. Man kan testa app in same condition as real server. It is good för to avoid surprises when go live.

PG 1.10 Bundeling-verktyg

Bundeling är att pack files together to make faster loading. Tools som Webpack make small files from many. Det är bra för optimize web app och se till att allt laddar snabbt.

PG 1.11 Terminalinterface

Terminal är command line tool. Man skriver commands för att göra saker i system, like navigate, run programs eller fix issues. It är old style but powerful for developers.