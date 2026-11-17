Wymagane narzędzia żeby odpalić projekt:
1. Virtualbox,
2. Vagrant.
 
 Szybkie uruchomienie:
1. Odpal Wiersz poleceń (CMD)
2. wpisz komendę cd "lokalizacja_Projketu"
3. Wpisz komendę: `vagrant up`
4. Później wpisz komendę 'vagrant ssh -c "docker ps"' jeśli nie odpaliłeś CMD z poziomu administratora to przed docker ps dopisz "sudo"

 Adresy do testów
- Aplikacja podatna (bez ochrony WAF): `http://localhost:9090`
- Aplikacja zabezpieczona przez WAF: `http://localhost:8080`
