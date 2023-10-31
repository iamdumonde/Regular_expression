## OMEGLE website

## Expressions régulières
(?<=Nom du patient: ).+
## .+

Nom du patient : Our
Nom du patient : You
Nom du patient : Me
Nom du patient : Oswald
Nom du patient : Farris
Nom du patient : Emile

### Les expressions régulières aussi appelées ``REGEX`` ou ``REGEXP`` 
sont des séquences de caractères qui forment un motif de recherche. Elles sont utilisées pour rechercher , manipuler et éditer du texte en fonction de certaines règles définies.

## https://www.php.net/manual/fr/refs.basic.text.php and click on PCRE

##  Les basiques de `regex`
### Correspondances exacte
Consiste à rechercher le texte de manière similaire à un éditeur de texte classique
ex: /John/ ==> recherche "John" dans le texte
    /Bonjour/ ==> recherche "Bonjour" dans le texte
    12:34:56
    
### Les classes de caractères
Les classes de caractères s'écrivent entre les []
[abc]: correspond à un seul caractère parmi a, b ou c
[^abc]: correspond à un caractère sauf a, b ou c
[abcdefghijklmnopqrstuvwxyz]
[a-z]: correspond à l'ensemble des caractères minuscules allant de `a` à `z`
[0-9]: correspond à tous les chiffres de `0` à `9`
[a-z]+@gmail.com pour sélectionner mes deux emails en bas
abc@gmail.com
johndoe@gmail.com

## Les métacaractères
Les métacaractères en expression régulières sont des caractères spéciaux qui ont une signification particulière. Ils donnent aux regex leur puissance et leur flexibilité en permettant de définir des motifs de recherche complexes. Voici quelques-uns des métacaractères les plus couramment utilisés: 
1. `.` (point): correspond à n'importe quel caractère sauf un saut de ligne(retour à  la ligne)
   Par exemple `a.b` correspond à "aab" mais pas à "a\nb"

2. `*` (astérisque): correspond à zéro ou plusieurs occurrence du motif précédent. Par exemple , `ab*c` correspond à "ac", "abc", "abbc" etc.
3. `+` (plus) correspond à un ou plusieurs occurrence du motif précédent. Par exemple , `ab+c` correspond à "abc", "abbc" etc.
4. `?` (point d'interrogation) correspond à 0 ou une occurrence du motif précédent. Par exemple, `ab?c` correspond à "abc" "ac" mais pas à "abbc".
5. `\` (antislash) permet juste d'échapper un métacaractère
6. `|` (la barre verticale) : correspond à l'opérateur `ou`. Par exemple `"a|b"` correspond à ``"a"`` ou ``"b"``
7. `^` (le circonflexe) correspond au début d'une ligne. Par exemple, `"^abc"` correspond à `"abc"` seulement s'il est situé au début d'une ligne.
8. `$` le (dollars) correspond à la fin d'une ligne par exemple : "abc$" correspond à "abc" seulement s'il est situé à la fin d'une ligne 
9. `()` (parenthèses): crée un groupe de couture et permet d'extraire des sous-partie de motif correspondant.
10. `\b` (limite de mot, en: boundary): correspond à une limite d'un mot. Par exemple, "\bword\b" correspond à "word" en tant que mot complet et non partie d'un mot plus long.
    EX:\bbon\b pour rechercher uniquement le mot "bon" dans une phrase ou un texte, et élimine les bonjours et autres.

t[^oic]e

## `\` l'anti slash utilisé pour échapper
### Les sites pour s'entraîner 
https://regexr.com/
https://regex101.com/

## Les Quantificateur
Les quantificateur en regex sont toujours des métacaractères qui spécifient le nombre d'occurrence d'un élément à rechercher. Ils permettent de définir la quantité de caractère ou de groupes de caractère qu'une expression régulière doit correspondre pour être considéré comme une correspondance. 
En voici quelques-uns :
1. * (astérisque) (0 à +infini)
2. + (plus) ( au moins 1 à +l'infin)
3. ? (point d'interrogation) (soit 0 ou 1)
4. {n}: correspond à exactement "n" occurrence du motif précédent. Par exemple , a(3) correspond à "aaa"
5. {n,}: correspond à au moins "n" occurrence du motif précédent. Par exemple, a{2,} correspond à "aa", "aaa", "aaaa" ....
6. {n, m}: correspond à entre "n" et "m" occurrence du motif précédent. Par exemple, a(2,4) correspond à "au", "aaa", "aaaa"


### Autres métacaractères
- `\w` : correspond aux caractères alphanumériques en plus du "_" (tiret de 8). [a-z-A-Z0-9_]
- `\W` : contraire de \w 
- `\s` : correspond à un espace, à  des retours à la ligne.
- `\S` : contraire de \s.
- `\d` : conrrespond à un chiffre. [0-9]

### Les groupes de captures en expression régulière
Ce sont justes des parenthèses "()" utilisées pour définir des sous-parties d'une expression régulière.

## Exercice 3

<!-- 
[aA-zZ0-9]*@gmail.com : sélectionne les addresses emails
[a-zA-Z0-9]+@gmail\.com
[a-zA-Z0-9-_]+@gmail\.com 
[a-zA-Z0-9-_]+@[a-z]+\.com
[a-zA-Z0-9-_.]+@[a-z0-9.]+[a-z]
[a-zA-Z0-9-_.]+@[a-z0-9]+\.[a-z]+
-->
email: johnDoe233@gmail.com est l'adresse mail
email: John-Doe@gmail.ng est l'adresse mail
email: john.Doe@gmail.com est l'adresse mail
email: tiburcekouagou@hotmail.gov est l'adresse mail
email: tiburce.kouagou1@outlook.com est l'adresse mail
email: tiburce_kouagou1@yahoo.com est l'adresse mail
email: tiburce_kouagou1@3wa.io est l'adresse mail

## Exercice 4
<!-- \+?[0-9]+ -->
Le point ? avant le plus signifie que le caractère précédent est optionnel

+22965890968
+22975860968
22965890968

## Exercice 5
<!-- https?:\/\/[a-zA-Z0-9]+\.[a-zA-Z]+ -->
aaa bnu http://highfive.bj adresse des sites web
aaa le site://highfive.bj ==> http://highfive.bj adresse des sites web
aaa bnu https://highfive.bj adresse des sites web
aaa bnu http://w3schools.com adresse des sites web
aaa bnu https://devdocs.io adresse des sites web

## Exercice 7 & 8 
<!-- ^Salut [ a-zA-Z-à]+ monde$ -->
<!-- ^Salut.+monde$ -->

Salut tout le monde
Salut à tous monde
Je vous salue tout le monde