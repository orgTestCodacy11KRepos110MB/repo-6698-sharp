<?php

namespace Database\Seeders;

trait WithTextFixtures
{
    protected static array $categoryNames = [
        'Magic',
        'Mystic',
        'Marvellous',
        'Strange',
        'Suspicious',
        'Reaction',
        'Worldwide',
        'True story',
        'Incredible',
        'Help',
        'Great story',
        'Legend',
        'WTF',
        'Beautiful',
        'Ugly',
        'Too bad',
        'Inspirational',
    ];

    protected static array $titlesFR = [
        'Sa mère lui avait toujours appris',
        "C'était un expert, mais pas dans une discipline",
        'Dave a regardé la forêt brûler sur la colline',
        "Tout ce qu'il voulait, c'était une barre chocolatée",
        'Les espoirs et les rêves ont été anéantis ce jour-là',
        "Dave ne savait pas exactement comment il s'était retrouvé dans cette situation difficile",
        'Ceci est important à retenir',
        'On peut cuisiner sur et avec un feu ouvert',
        'Il existe différents types de secrets',
        'Ils se précipitèrent vers la porte',
        "Il n'était pas encore temps de paniquer.",
        'Elle voulait des cheveux arc-en-ciel.',
        'Le papier était vierge.',
        'Les arbres doivent donc être si vieux',
        "Il n'y avait qu'une seule façon de faire les choses dans la maison Statton",
        'Elle était pressée',
        'Elle avait la terrible habitude de comparer sa vie aux autres',
        'La pluie et le vent se sont brusquement arrêtés',
        "Il ne se souvenait pas exactement où il l'avait lu",
        'Il a erré dans les escaliers et dans le sous-sol',
        'Elle a déjà vu cette scène',
        "C'est une triste réalité que nous n'apprenions pas aux gens à gagner de l'argent",
        'Le robot a cliqué de manière désapprobatrice',
        'Il est passé par des contorsions si rapides',
        'Elle a patiemment attendu que son numéro soit appelé',
        'Dix étapes de plus',
        'Il avait trois règles simples selon lesquelles il vivait',
        'La chaise était assise dans le coin où elle se trouvait',
        'Ça ne va pas du tout',
    ];

    protected static array $titlesEN = [
        'His mother had always taught him',
        'He was an expert but not in a discipline',
        'Dave watched as the forest burned up on the hill.',
        'All he wanted was a candy bar.',
        'Hopes and dreams were dashed that day.',
        "Dave wasn't exactly sure how he had ended up",
        'This is important to remember.',
        'One can cook on and with an open fire.',
        'There are different types of secrets.',
        'They rushed out the door.',
        "It wasn't quite yet time to panic.",
        'She wanted rainbow hair.',
        'The paper was blank',
        'The trees, therefore, must be such old',
        'There was only one way to do things in the Statton house',
        'She was in a hurry',
        'She had a terrible habit of comparing her life to others',
        'The rain and wind abruptly stopped',
        "He couldn't remember exactly where he had read it",
        'He wandered down the stairs and into the basement',
        'She has seen this scene before',
        "It's an unfortunate reality that we don't teach people how to make money",
        'The robot clicked disapprovingly',
        'It went through such rapid contortions',
        'She patiently waited for his number to be called',
        'Ten more steps',
        'He had three simple rules by which he lived',
        'The chair sat in the corner where it had been',
        "Things aren't going well at all",
    ];

    protected static array $paragraphsFR = [
        "Sa mère lui avait toujours appris à ne jamais se considérer meilleur que les autres. Il avait essayé de vivre selon cette devise. Il n'a jamais méprisé ceux qui avaient moins de chance ou qui avaient moins d'argent que lui. Mais la stupidité du groupe de personnes à qui il parlait l'a fait changer d'avis.",
        "C'était un expert, mais pas dans une discipline que tout le monde pouvait pleinement apprécier. Il savait comment tenir le cône juste pour que la crème glacée molle du serveur tombe dedans à l'angle précis pour former un cône parfait à chaque fois. Il avait fallu des années pour le perfectionner et il pouvait maintenant le faire sans même y penser.",
        "Dave a regardé la forêt brûler sur la colline, à seulement quelques kilomètres de sa maison. La voiture avait été emballée à la hâte et Marta était à l'intérieur en train d'essayer de rassembler les derniers animaux de compagnie. Dave a passé en revue sa liste mentale des papiers et documents les plus importants qu'ils ne pouvaient pas laisser derrière eux. Il se gronda de ne pas les avoir mieux préparés à l'avance et espéra qu'il s'était souvenu de tout ce qui était nécessaire. Il a continué à attendre que Marta apparaisse avec les animaux de compagnie, mais elle était toujours introuvable.",
        "Tout ce qu'il voulait, c'était une barre chocolatée. Cela ne semblait pas être une demande difficile à comprendre, mais le greffier resta figé et ne sembla pas vouloir honorer la demande. Cela pourrait avoir quelque chose à voir avec le pistolet pointé sur son visage.",
        "Les espoirs et les rêves ont été anéantis ce jour-là. Il aurait fallu s'y attendre, mais cela a quand même été un choc. Les signes avant-coureurs avaient été ignorés au profit de la possibilité, aussi lointaine soit-elle, que cela puisse réellement se produire. Cette possibilité était passée de l'espoir à une conviction indéniable que cela devait être le destin. C'était jusqu'à ce que ce ne soit plus le cas et que les espoirs et les rêves s'effondrent.",
        "Dave ne savait pas exactement comment il s'était retrouvé dans cette situation difficile. Il a passé en revue tous les événements qui avaient conduit à cette situation actuelle et cela n'avait toujours pas de sens. Il voulait passer du temps à essayer de donner un sens à tout cela, mais il avait des priorités plus élevées pour le moment. Le premier était de savoir comment sortir de sa situation actuelle d'être nu dans un arbre avec de la neige qui tombait tout autour et aucun moyen pour lui de descendre.",
        "Ceci est important à retenir. L'amour n'est pas comme la tarte. Vous n'avez pas besoin de le répartir entre tous vos amis et vos proches. Peu importe combien d'amour vous donnez, vous pouvez toujours donner plus. Il ne s'épuise pas, alors n'essayez pas de vous retenir de le donner comme s'il pourrait un jour s'épuiser. Donnez-le librement et autant que vous le souhaitez.",
        "On peut cuisiner sur et avec un feu ouvert. Ce sont quelques-unes des façons de cuisiner avec le feu à l'extérieur. La cuisson de la viande à la broche est un excellent moyen de cuire la viande uniformément. Afin d'éviter que la viande ne brûle, il est préférable de la faire tourner lentement.",
        "Il existe différents types de secrets. Elle en avait gardé beaucoup au cours de sa vie, mais celle-ci était différente. Elle s'est retrouvée à s'accrocher au pire type. C'était le genre de secret qui pouvait vous ronger l'intérieur si vous n'en parliez à personne, mais cela pouvait finir par vous faire tuer si vous le faisiez.",
        "Ils se précipitèrent vers la porte, attrapant tout ce dont ils pouvaient avoir besoin. Il n'y avait pas le temps de revérifier pour s'assurer qu'ils ne laissaient pas quelque chose d'important derrière eux. Tout a été jeté dans la voiture et ils ont filé. Trente minutes plus tard, ils étaient en sécurité et c'est alors qu'ils se rendirent compte qu'ils avaient oublié la chose la plus importante de toutes.",
        "Il n'était pas encore temps de paniquer. Il était encore temps de sauver la situation. C'est du moins ce qu'elle se disait. La réalité était qu'il était temps de paniquer et qu'il n'y avait pas le temps de sauver la situation, mais il continuait à se faire des illusions en croyant que c'était le cas.",
        "Elle était consciente que les choses pouvaient mal tourner. En fait, elle s'était entraînée toute sa vie en anticipant que les choses tourneraient mal un jour. Elle avait une confiance tranquille alors qu'elle commençait à voir que c'était le jour où toute sa formation serait valable et utile. À ce stade, elle n'avait aucune idée à quel point tout irait mal ce jour-là.",
        "Elle voulait des cheveux arc-en-ciel. C'est ce qu'elle a dit au coiffeur. Ça devrait aussi être des couleurs arc-en-ciel profondes. Elle n'était pas intéressée par les cheveux arc-en-ciel pastel. Elle voulait qu'ils soient profonds et vibrants, donc il ne faisait aucun doute qu'elle l'avait fait exprès.",
        "Le papier était vierge. Ça n'aurait pas dû l'être. Il aurait dû y avoir de l'écriture sur le papier, au moins un paragraphe sinon plus. Le fait que l'écriture n'y soit pas était frustrant. En fait, c'était encore plus que frustrant . C'était carrément affligeant.",
        "Les arbres, par conséquent, doivent être des techniques si anciennes et primitives qu'ils n'en ont rien pensé, les jugeant si insignifiants que même des sauvages comme nous les connaîtraient et ne se méfieraient pas. À cela, ils n'avaient probablement pas trop de temps après qu'ils nous aient détectés en orbite et ayant l'intention d'atterrir. Et si c'était vrai, il ne pourrait y avoir qu'un seul endroit où leur civilisation était cachée.",
        "Il n'y avait qu'une seule façon de faire les choses dans la maison Statton. Cette seule façon était de faire exactement ce que le père, Charlie, exigeait. Il prenait les décisions et tout le monde suivait sans poser de questions. C'était jusqu'à aujourd'hui.",
        "Elle était pressée. Pas la hâte standard quand on est pressé d'aller quelque part, mais une hâte frénétique. Le genre de hâte où quelques secondes peuvent signifier la vie ou la mort. Elle a couru sur la route en ignorant les limites de vitesse et se faufilant entre les voitures. Elle n'était qu'à quelques minutes de là lorsque la circulation s'est immobilisée sur la route devant nous.",
        "Elle avait la terrible habitude de comparer sa vie à celle des autres. Elle s'est rendu compte que leurs expériences de vie étaient complètement différentes des siennes et qu'elle ne voyait que ce qu'ils voulaient qu'elle voie, mais cela n'avait pas d'importance. Elle se comparait toujours et aspirait pour ce qu'elle pensait qu'ils avaient et elle ne l'a pas fait.",
        "La pluie et le vent se sont arrêtés brusquement, mais le ciel avait toujours les tourbillons gris des tempêtes au loin. Dave ne connaissait que trop bien ce sentiment. Le calme avant la tempête. Il n'avait qu'un temps limité avant que l'Enfer ne se déchaîne, mais il s'est arrêté pour admirer le calme. Peut-être que ce serait différent cette fois, pensa-t-il, sachant au fond de lui que ce ne serait pas le cas.",
        "Il ne se souvenait pas exactement où il l'avait lu, mais il était sûr qu'il l'avait fait. Le fait qu'elle ne le croie pas était assez frustrant alors qu'il commençait à chercher sur Internet pour trouver l'article. Ce n'était pas aussi si c'était quelque chose qui semblait impossible. Pourtant, elle a insisté pour toujours voir la source chaque fois qu'il énonçait un fait.",
        "Il a erré dans les escaliers et dans le sous-sol. L'odeur humide et de moisi de l'inutilisation flottait dans l'air. Une seule petite fenêtre laissait entrer une lueur de lumière, mais cela ne faisait qu'approfondir les ombres du sous-sol. Il inspira profondément et a regardé autour de lui un gâchis qui s'était accumulé pendant plus de 25 ans. Il était certain que c'était l'endroit où il voulait vivre.",
        "Elle a déjà vu cette scène. Elle lui était venue plusieurs fois dans ses rêves. Elle a dû se pincer pour s'assurer que ce n'était plus un rêve. Lorsque ses doigts se sont serrés contre son bras, elle a ressenti la douleur. C'était cette douleur qui l'a immédiatement réveillée.",
        "C'est une triste réalité que nous n'enseignons pas aux gens comment gagner de l'argent (au-delà d'obtenir un emploi de 9 à 5) dans le cadre de notre système éducatif. La vérité est qu'il existe de nombreuses façons différentes et légitimes de gagner de l'argent. Cela ne signifie pas qu'ils sont faciles et que vous n'aurez pas à travailler dur pour réussir, mais cela signifie que si vous êtes prêt à ouvrir un peu votre esprit, vous n'avez pas à être coincé dans un bureau de 9h à 17h. pour les cinquante prochaines années de ta vie.",
        "Le robot a fait un clic désapprobateur, a gazouillé brièvement à l'intérieur de son intérieur cubique et a extrudé un verre poney de liquide brunâtre. «Monsieur, vous finirez sans aucun doute dans la tombe d'un ivrogne, mort d'une cirrhose hépatique», m'a-t-il informé vertueusement en me rendant mon Carte d'identité. J'ai lancé un regard noir en poussant le verre sur la table.",
        "Il a traversé des contorsions si rapides que le petit ours a été forcé de changer de prise sur lui tant de fois qu'il est devenu confus dans l'obscurité, et ne pouvait pas, pour la vie de lui, dire s'il tenait le mouton à l'endroit, ou Mais ce point a été décidé pour lui un instant plus tard par l'animal lui-même, qui, avec une torsion soudaine, a enfoncé ses cornes si fort dans ses côtes les plus basses qu'il a poussé un grognement de colère et de dégoût.",
        "Elle a patiemment attendu que son numéro soit appelé. Elle n'avait aucune envie d'être là, mais sa mère avait insisté pour qu'elle y aille. Elle a résisté au début, mais avec le temps, elle a réalisé qu'il était tout simplement plus facile de l'apaiser et de partir. Elle continuerait d'insister jusqu'à ce que vous vous épuisiez et que vous fassiez ce qu'elle voulait. Alors, elle s'est assise là, attendant patiemment que son numéro soit appelé.",
        "S'il pouvait faire dix pas de plus, ce serait fini, mais ses jambes ne bougeraient pas. Il essayait de les forcer à travailler, mais ils n'écoutaient pas son cerveau. Dix pas de plus et ce serait fini, mais ça n'a pas marché. il ne semble pas qu'il serait capable de le faire.",
        "Il avait trois règles simples selon lesquelles il vivait. La première était de ne jamais manger de nourriture bleue. Il n'y avait rien dans la nature qui était comestible qui était bleu. Les gens posaient souvent des questions sur les myrtilles, mais tout le monde sait qu'elles sont en fait violettes. Il a compris que c'était une des règles les plus étranges à respecter, mais cela lui avait bien servi jusqu'à présent au cours des 50+ années de sa vie.",
        "La chaise était assise dans le coin où elle se trouvait depuis plus de 25 ans. La seule différence était qu'il y avait quelqu'un qui y était assis. Depuis combien de temps s'était-il passé quelqu'un avait fait ça ? Dix ans ou plus, imagina-t-il. Pourtant, on ne pouvait nier la présence dans la chaise maintenant.",
        "Les choses ne vont pas bien du tout avec maman aujourd'hui. Elle est juste une nouille molle et veut dormir tout le temps. J'espère vraiment que les choses iront mieux bientôt.",
    ];

    protected static array $paragraphsEN = [
        "His mother had always taught him not to ever think of himself as better than others. He'd tried to live by this motto. He never looked down on those who were less fortunate or who had less money than him. But the stupidity of the group of people he was talking to made him change his mind.",
        'He was an expert but not in a discipline that anyone could fully appreciate. He knew how to hold the cone just right so that the soft server ice-cream fell into it at the precise angle to form a perfect cone each and every time. It had taken years to perfect and he could now do it without even putting any thought behind it.',
        "Dave watched as the forest burned up on the hill, only a few miles from her house. The car had been hastily packed and Marta was inside trying to round up the last of the pets. Dave went through his mental list of the most important papers and documents that they couldn't leave behind. He scolded himself for not having prepared these better in advance and hoped that he had remembered everything that was needed. He continued to wait for Marta to appear with the pets, but she still was nowhere to be seen.",
        "All he wanted was a candy bar. It didn't seem like a difficult request to comprehend, but the clerk remained frozen and didn't seem to want to honor the request. It might have had something to do with the gun pointed at his face.",
        "Hopes and dreams were dashed that day. It should have been expected, but it still came as a shock. The warning signs had been ignored in favor of the possibility, however remote, that it could actually happen. That possibility had grown from hope to an undeniable belief it must be destiny. That was until it wasn't and the hopes and dreams came crashing down.",
        "Dave wasn't exactly sure how he had ended up in this predicament. He ran through all the events that had lead to this current situation and it still didn't make sense. He wanted to spend some time to try and make sense of it all, but he had higher priorities at the moment. The first was how to get out of his current situation of being naked in a tree with snow falling all around and no way for him to get down.",
        "This is important to remember. Love isn't like pie. You don't need to divide it among all your friends and loved ones. No matter how much love you give, you can always give more. It doesn't run out, so don't try to hold back giving it as if it may one day run out. Give it freely and as much as you want.",
        "One can cook on and with an open fire. These are some of the ways to cook with fire outside. Cooking meat using a spit is a great way to evenly cook meat. In order to keep meat from burning, it's best to slowly rotate it.",
        "There are different types of secrets. She had held onto plenty of them during her life, but this one was different. She found herself holding onto the worst type. It was the type of secret that could gnaw away at your insides if you didn't tell someone about it, but it could end up getting you killed if you did.",
        "They rushed out the door, grabbing anything and everything they could think of they might need. There was no time to double-check to make sure they weren't leaving something important behind. Everything was thrown into the car and they sped off. Thirty minutes later they were safe and that was when it dawned on them that they had forgotten the most important thing of all.",
        "It wasn't quite yet time to panic. There was still time to salvage the situation. At least that is what she was telling himself. The reality was that it was time to panic and there wasn't time to salvage the situation, but he continued to delude himself into believing there was.",
        'She was aware that things could go wrong. In fact, she had trained her entire life in anticipation that things would go wrong one day. She had quiet confidence as she started to see that this was the day that all her training would be worthwhile and useful. At this point, she had no idea just how wrong everything would go that day.',
        "She wanted rainbow hair. That's what she told the hairdresser. It should be deep rainbow colors, too. She wasn't interested in pastel rainbow hair. She wanted it deep and vibrant so there was no doubt that she had done this on purpose.",
        "The paper was blank. It shouldn't have been. There should have been writing on the paper, at least a paragraph if not more. The fact that the writing wasn't there was frustrating. Actually, it was even more than frustrating. It was downright distressing.",
        "The trees, therefore, must be such old and primitive techniques that they thought nothing of them, deeming them so inconsequential that even savages like us would know of them and not be suspicious. At that, they probably didn't have too much time after they detected us orbiting and intending to land. And if that were true, there could be only one place where their civilization was hidden.",
        'There was only one way to do things in the Statton house. That one way was to do exactly what the father, Charlie, demanded. He made the decisions and everyone else followed without question. That was until today.',
        "She was in a hurry. Not the standard hurry when you're in a rush to get someplace, but a frantic hurry. The type of hurry where a few seconds could mean life or death. She raced down the road ignoring speed limits and weaving between cars. She was only a few minutes away when traffic came to a dead standstill on the road ahead.",
        "She had a terrible habit o comparing her life to others. She realized that their life experiences were completely different than her own and that she saw only what they wanted her to see, but that didn't matter. She still compared herself and yearned for what she thought they had and she didn't.",
        "The rain and wind abruptly stopped, but the sky still had the gray swirls of storms in the distance. Dave knew this feeling all too well. The calm before the storm. He only had a limited amount of time before all Hell broke loose, but he stopped to admire the calmness. Maybe it would be different this time, he thought, with the knowledge deep within that it wouldn't.",
        "He couldn't remember exactly where he had read it, but he was sure that he had. The fact that she didn't believe him was quite frustrating as he began to search the Internet to find the article. It wasn't as if it was something that seemed impossible. Yet she insisted on always seeing the source whenever he stated a fact.",
        'He wandered down the stairs and into the basement. The damp, musty smell of unuse hung in the air. A single, small window let in a glimmer of light, but this simply made the shadows in the basement deeper. He inhaled deeply and looked around at a mess that had been accumulating for over 25 years. He was positive that this was the place he wanted to live.',
        "She has seen this scene before. It had come to her in dreams many times before. She had to pinch herself to make sure it wasn't a dream again. As her fingers squeezed against her arm, she felt the pain. It was this pain that immediately woke her up.",
        "It's an unfortunate reality that we don't teach people how to make money (beyond getting a 9 to 5 job) as part of our education system. The truth is there are a lot of different, legitimate ways to make money. That doesn't mean they are easy and that you won't have to work hard to succeed, but it does mean that if you're willing to open your mind a bit you don't have to be stuck in an office from 9 to 5 for the next fifty years o your life.",
        "The robot clicked disapprovingly, gurgled briefly inside its cubical interior and extruded a pony glass of brownish liquid. \"Sir, you will undoubtedly end up in a drunkard's grave, dead of hepatic cirrhosis,\" it informed me virtuously as it returned my ID card. I glared as I pushed the glass across the table.",
        'It went through such rapid contortions that the little bear was forced to change his hold on it so many times he became confused in the darkness, and could not, for the life of him, tell whether he held the sheep right side up, or upside down. But that point was decided for him a moment later by the animal itself, who, with a sudden twist, jabbed its horns so hard into his lowest ribs that he gave a grunt of anger and disgust.',
        "She patiently waited for his number to be called. She had no desire to be there, but her mom had insisted that she go. She's resisted at first, but over time she realized it was simply easier to appease her and go. Mom tended to be that way. She would keep insisting until you wore down and did what she wanted. So, here she sat, patiently waiting for her number to be called.",
        "If he could take ten more steps it would be over, but his legs wouldn't move. He tried to will them to work, but they wouldn't listen to his brain. Ten more steps and it would be over but it didn't appear he would be able to do it.",
        'He had three simple rules by which he lived. The first was to never eat blue food. There was nothing in nature that was edible that was blue. People often asked about blueberries, but everyone knows those are actually purple. He understood it was one of the stranger rules to live by, but it had served him well thus far in the 50+ years of his life.',
        'The chair sat in the corner where it had been for over 25 years. The only difference was there was someone actually sitting in it. How long had it been since someone had done that? Ten years or more he imagined. Yet there was no denying the presence in the chair now.',
        "Things aren't going well at all with mom today. She is just a limp noodle and wants to sleep all the time. I sure hope that things get better soon.",
    ];
}
