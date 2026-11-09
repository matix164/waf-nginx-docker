Projekt demonstruje działanie Web Application Firewall (ModSecurity + reguły OWASP) na serwerze Nginx. Środowisko jest zarządzane przez Vagrant i uruchamiane w kontenerach Docker.

 Szybkie uruchomienie
1. Wejdź do folderu z projektem w konsoli (CMD).
2. Wpisz komendę: `vagrant up`

 Adresy do testów
- Aplikacja podatna (bez ochrony WAF): `http://localhost:9090`
- Aplikacja zabezpieczona przez WAF: `http://localhost:8080`
