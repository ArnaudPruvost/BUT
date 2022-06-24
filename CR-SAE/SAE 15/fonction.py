#fonction utile pour le projet
from math import sqrt


#sert à calculer la moyenne à partir d'une liste de valeurs(des chiffres)
def moyenne(L):
    m=sum(L)/len(L)
    print(m)
    return (m)

    
    
#sert ç calculer l'écart type à partir d'une liste de valeurs(des chiffres)
def sigma(A):
    moy=moyenne(A)
    N=len(L)
    var=0
    for nb in L :
        var +=(nb-moy)**2
        return sqrt((1/N)*var)
    