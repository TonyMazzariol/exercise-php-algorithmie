#exo 1
"""
nbr = input('rentrez un nombre compris entre 1 et 3 :')
while int(nbr) > 3 and int(nbr) < 1 :
    nbr = input('rentrez un nombre compris entre 1 et 3 :')
print('Bravo')
"""
#exo 2 
"""
nbr = int(input("Veuillez rentrer un nombre entre 10 et 20 :"))
while nbr >= 20 or nbr <= 10 :
    if nbr >= 20 :
        print("Trop grand !")
        nbr = int(input("Veuillez rentrer un nombre entre 10 et 20 :"))
    else  : 
        print("Trop petit !")
        nbr = int(input("Veuillez rentrer un nombre entre 10 et 20 :"))

print("Bravo")
"""
# Exo 3 
"""
nbr = int(input("Veuillez rentrer un nombre : "))
for i in range(1 , 11) :
    print(nbr + i)
"""
#Exo 4 
#//

#Exo 5 
"""
nbr = int(input("Veuillez rentrer un nombre et je vous donnerais se table de multiplication :"))
for i in range(1, 11) :
    print(nbr*i)
"""
#Exo 6 
"""
tab = (3,4,9,5)
a = 0
for i in range(0,4) :
    a = a + tab[i]
print(a)
"""
#Exo 7
"""
tab = [] 
for i in range(0,4) :
    nbr = int(input('Veuillez rentrer un nombre : '))
    tab.append(nbr)
print(tab)
a = 0
for i in range(0, len(tab)) : 
    if tab[i] > a :
        a = tab[i]
        c = i
print("le nombre le plus grand est le "+ str(a) +" et il s'agissait du nombre n*"+ str(c+1))
"""
#Exo 8 
"""
nbr = 1
tab = [] 
while nbr != 0 :
    tab.append(nbr)
    nbr = int(input('Veuillez rentrer un nombre : '))
    print("(Pour arréter rentrez le chiffre 0)")
print(tab)
a = 0
for i in range(0, len(tab)) : 
    if tab[i] > a :
        a = tab[i]
        c = i
print("le nombre le plus grand est le "+ str(a) +" et il s'agissait du nombre n*"+ str(c))
"""
#Exo 9

total = 0 
prix = int(input('Veuillez rentrer le prix de votre article : '))
while prix != 0 :
    total = total + prix
    prix = int(input('Veuillez rentrer le prix de votre article : '))
    print("(Pour arréter rentrez le chiffre 0)")
print(total)
argent = int(input("Veuillez rentrer votre argent :"))
while argent <= total : 
    if argent < total :
        print("Ce n'est pas assez")
        argent = int(input("Veuillez rentrer votre argent :"))
rendu = argent - total

nombre_dix = rendu-rendu%10 
print(rendu)
print("nombre de billet de 10 euros : " + str(int(nombre_dix/10)))
reste = rendu - nombre_dix
nombre_cinq = reste - reste%5
if nombre_cinq == 0 : 
    print("nombre de billet de 5 euros : 0")
print("nombre de billet de 5 euros : 1")
print("nombre de pièces de 1 euros : " + str(reste%5))
