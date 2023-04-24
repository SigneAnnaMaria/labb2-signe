Jag började med att skapa ett repo på Github och installerade Wordpress i mappen och la till och aktiverade Woocommerce. 

Sedan skapade jag ett Storefront-child tema genom att skapa en mapp som heter storefront-child med grundstommen index.php och style.css. I style.css har jag skrivit nedan (Template hämtar exakt storefront och behöver skrivas med små bokstäver.):

/*
Theme Name: storefront childtheme
Template: storefront
Author: Signe Hellquist
Description: A childtheme of storefront
*/

Jag startade med att lägga in produkter i sportbutiken, tre stycken enkla produkter, en variabel produkt samt en nedladdningsbar produkt.

Navigerade in till Woocommerce-mappen under plugin, in i mappen templates och kopierade archive.product.php för att komma åt hemsidans akrivsida och manipulera den sidan med en "template override" via metoden add_action. Placeringen hittade jag genom visuella template guides som finns online. Jag la till texten "Snygga grejer, va?" (Vilket jag såklart aldrig någonsin skulle skriva ut i en riktig butik :).

Jag skapade en functions.php i mitt child tema för att lägga till en add_action och en remove_action. Placeringen för dessa metoder hittade jag återigen via visuella template guides som finns online och lag la till texten "Köp! Skynda dig innan den tar slut!" brevid Lägg i varukorg-knappen. Gjorde en remove_action av siffer-resultat brevid Standarssorteringen.  

Testade med några olika plugin-bygg, labb2-signe och la in plugin boilerplate template för att se vad den innehöll. Skapade till slut en Google Analytics plugin med en egen readme.md fil för att text ska synas när en installerar tilläget. 

La till några olika betaltillägg som Swish och Klarna, samt tillägg som ACF och CPT inför nästkommande gruppprojekt! 
