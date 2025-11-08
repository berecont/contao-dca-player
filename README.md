# contao-dca-player
## Inhaltselement Video - Seitenverhältnis zur Auswahl stellen  
Im Inhaltselement **Video** wird ein Selectmenü Seitenverhältnis bereit gestellt.  
Das `playerAspect` bringt im Frontend die Variablen `16:9, 9:16, 4:3 und 3:4`. Diese werden im angepassten Template `player.html.twig` zu einer Klasse zusammengefügt und ausgegeben.  
`16:9` » `aspect--16-9`  
`9:16` » `aspect--9-16`  
`4:3` » `aspect--4-3`  
`3:4` » `aspect--3-4`
