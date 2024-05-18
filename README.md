# SaltedHashPassword - Application
* Universiteti i Prishtinës 'Hasan Prishtina'
* Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike
* Departamenti: Inxhinieri Kompjuterike dhe Softuerike
  
Projekti i tretë nga lënda e 'Siguria e të dhënave' nën udhëheqjen e Ass. Mërgim Hoti
# Contributors
* Agnesa Rama
* Agnesa Mani
* Agnesa Hulaj
* Albin Shala

# Description of the project
Zhvillimi i një aplikacioni Windows që lidhet me një databazë për menaxhimin e përdoruesve kërkon një qasje të strukturuar dhe të sigurt. Qëllimi kryesor i projektit është ruajtja e të dhënave të përdoruesve përkatësisht password-it si SaltedHash. Projekti përfshin 3 pjesë (file) kryesore: home.php, login.php, singup.php. 

Teknologjitë e Përdorura: <br />
Gjuhë Programimi: PHP, HTML, CSS <br />
Librari të jashtme: BootStrap, Unicons <br />
Kriptografi: BCrypt Algorithm

# Home.php
Ky file është faqja kryesore e aplikacionit. Ai trajton sessions të përdoruesve, duke kontrolluar nëse përdoruesi është i kyçur dhe duke ofruar një mundësi për daljen përmes LogOut. Ai shfaq një mesazh përshëndetës dhe informacion të përgjithshëm rreth metodës së ruajtjes së fjalëkalimeve si "salted hash". 

Përmbajtja e home.php: 
<br />
Përpunimi i Sesionit dhe Dalja nga Sesioni <br />
Struktura HTML e Faqes Kryesore <br />
Stilizimi dhe Përmbajtja e Faqes Kryesore

# Login.php
Ky file përmban formën e kyçjes për përdoruesit. Ai përfshin përpunimin e të dhënave të formularit, verifikimin e përdoruesve në bazën e të dhënave dhe menaxhimin e seancave. Nëse kredencialet janë të sakta, përdoruesi ridrejtohet në faqen kryesore (home.php). Nëse përdoruesi nuk është registered, atëherë ai së pari duhet të krijojë një account të ri përmes faqes SignUp.

# Signup.php
Ky file përmban formën e regjistrimit të përdoruesve të rinj. Përfshin shtimin e përdoruesve të rinj dhe të gjitha të dhënat e tyre i ruan në një databazë. Në databazë ruhen username, email, password dhe salted passwordi i përdoruesit. Për të realizuar këtë kemi përdorur algoritmin BCrypt. Faqja e signup poashtu bën verifikimin e email-ave nëse ai email veçse është përdorur një herë. Pasi që përdoruesi është regjistruar me sukses, ai navigon në faqen e login.php përmes butonit LogIn në të cilin logohet dhe vazhdon në faqen e home.php.

# Stilizimi i faqeve
Për stilizimin e projektit kemi përdorur 3 CSS file të ndryshme:
1. home.css
Ky skedar përmban stilizimin për faqen kryesore. Ai përfshin stilizimet për elementët e faqes si sfondi, kartën e përshëndetjes dhe butonin për daljen nga sessioni.

2. login1.css
Ky skedar përmban stilizimin për faqen e kyçjes. Ai përfshin stilizimet për formën e kyçjes, duke e bërë atë të duket vizualisht tërheqëse dhe të lehtë për t'u përdorur.

3. signup.css
Ky skedar përmban stilizimin për faqen e regjistrimit. Ai përfshin stilizimet për formën e regjistrimit, duke siguruar që ajo është në përputhje me stilin e përgjithshëm të aplikacionit.

# Images
Imazhet: Imazhet e përdorura në projekt, si prapavija (background.jpg), janë të vendosura në folderin e images dhe përdoren për të përmirësuar pamjen vizuale të faqes.
Libraritë e Jashtme: Projekti përdor librari të jashtme si Bootstrap për stilizim dhe Unicons për ikonat.


