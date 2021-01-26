-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2018 pada 10.36
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `twitter`
--

CREATE TABLE `twitter` (
  `nama` varchar(100) NOT NULL,
  `status` varchar(500) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `ID_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `twitter`
--

INSERT INTO `twitter` (`nama`, `status`, `tanggal`, `lokasi`, `ID_STATUS`) VALUES
('Ð½Î±Î·Ñ•', 'RT @Theswagboyq: sapi man deserves a Grammy for this https://t.co/2E30q2RdRQ', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0001'),
('Cade Renicker', 'RT @yevizy: ternak COLLEGE STUDENTS, \r\n\r\nSTOP scrolling through Quizletâ€¼ï¸\r\n\r\nPress â€œCTRL Fâ€ to type in key words and it will take you to the exacâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Purdue University ', 'S0002'),
('Nick Nehme', 'RT @ANZStadium: AND thatâ€™s a wrap on an amazing @Socceroos career. 108 caps. 50 goals. 4 World Cups. #ThanksTim #GoSocceroos https://t.co/râ€¦', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0003'),
('mad â', 'RT @AlexOn11th: PHILADELPHIA\nphilâ€¢aâ€¢delâ€¢phiâ€¢a (fÄ­lâ€²É™-dÄ•lâ€²fÄ“-É™)\n\nCity in Pennsylvania with bad sports teams that give their fans high expectâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0004'),
('Raven', 'RT @explicitlyhyuna: Hyo: dinners ready!! come and get it!!\n\nHyuna: [runs in to find Hyo dressed in only a ribbon lying on the table]\n\nHyunâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Bangtan~Hyuna~Holland', 'S0005'),
('Rini Lopez', 'RT @robreiner: Hypocritical. Incompetent. Corrupt. Ignorant. Criminal. Mentally unstable. Racist. Misogynistic. Self aggrandizing. Self deaâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0006'),
('Universal Deportes', '#Video ðŸ“¹\n\nLo de @miseleccionmx ðŸ‡²ðŸ‡½ fue PA-TÃ‰-TI-CO\n\nSeis partidos que no sirvieron de nada y que mostraron a la peor SelecciÃ³n en nÃºmeros y funcionamiento\n\n#OpiniÃ³n ðŸ—£ï¸ por @blumdaniel https://t.co/68rsz9Q9kQ', 'Wed Nov 21 04:03:32 +0000 2018', 'MÃ©xico', 'S0007'),
('ã¨ããŸã¦ã™ã¨', 'ä¸­å›½ã¨é¦™æ¸¯å½“å±€ã§æœæŸ»å”åŠ› å¤§åž‹ã®è±¡ç‰™å¯†è¼¸äº‹ä»¶ã‚’æ‘˜ç™ºï¼ˆæ±æ–¹æ–°å ±ï¼‰   https://t.co/zA0UkSQE4K', 'Wed Nov 21 04:03:32 +0000 2018', 'æ±äº¬éƒ½æ–°å®¿test5', 'S0008'),
('Aysha', 'RT @Stalin__SP: Painful Pic\n\nA family who lost their house completely after #GajaCyclone https://t.co/xjvWkmYM2b', 'Wed Nov 21 04:03:32 +0000 2018', 'Tamil Nadu, India', 'S0009'),
('ULTRACURIOSO!!', 'I added a video to a @YouTube playlist https://t.co/AFR3WyFoEw Calcinha de renda passo a passo #especial50mil', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0010'),
('Justicia', 'RT @cocando: Tanto Alejandro Andrade como el banquero Gabriel Jimenez Aray se encuentran bajo custodia. RaÃºl GorrÃ­n fue declarado fugitivo.â€¦', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0011'),
('Pavon 97', 'Â¿Y a esos, quiÃ©n los presentÃ³? ðŸ™„ðŸ˜Ÿ', 'Wed Nov 21 04:03:32 +0000 2018', 'Honduras', 'S0012'),
('Lymetime', 'RT @nathanTbernard: .@benshapiro is a conspiracy-mongering, supplement-addled maniac like Alex Jones. Facts prove this. https://t.co/1dyL9Aâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Canada', 'S0013'),
('Ivan_2531', 'RT @PrequelMemesBot: Not a meme, but needed to share this amazing artwork featuring the only Star Wars films that actually matter. Its beauâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Distrito Federal, MÃ©xico', 'S0014'),
('&', 'â€œhey i sapi really care about you and love you a lotâ€ \r\n\r\nmy damaged ass: https://t.co/xfHHpn0aHL', 'Wed Nov 21 04:03:32 +0000 2018', 'â™¡ long live peep â™¡', 'S0015'),
('T. Alves', 'A ternak na madruga passa mt rapido cÃ©loko', 'Wed Nov 21 04:03:32 +0000 2018', 'Curitiba', 'S0016'),
('ivy ðŸƒ', 'Inconsistency is a big turn off!!! Just donâ€™t talk to me at all!', 'Wed Nov 21 04:03:32 +0000 2018', 'Charlotte, NC', 'S0017'),
('candelaðŸ’‹', 'RT @LeandroGeffroy: te chapas a la persona que creÃ­as que era tu amor imposible https://t.co/OlzFEha2iW', 'Wed Nov 21 04:03:32 +0000 2018', 'Parque San MartÃ­n', 'S0018'),
('â‹®O', 'RT @Andrew_Sipowicz: Shoutout to the anonymous 6th grader for saving me a couple thousand (Bus not drawn to scale) https://t.co/7aNK10xSwX', 'Wed Nov 21 04:03:32 +0000 2018', 'urmomspussy', 'S0019'),
('no momento estou fora de mim', 'RT @Haddad_Fernando: Depois de Black Mirror, The Handmaidâ€™s Tale Ã© das distopias que mais dialoga com as bozoafliÃ§Ãµes contemporÃ¢neas. Valeâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Brasil', 'S0020'),
('exilionic', 'RT @abilo90: Haber.... hablemos un rato, y que dicen los sandiðŸ¸s de los ocho!! OCHO, 8 correos de la asesina de la Rosario, a mi no engaÃ±anâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'CaÃ±ada de Calatrava, EspaÃ±a', 'S0021'),
('Jenn (CornyBear) ðŸ»', 'And here I thought it meant she was attending a block party in the hood...ðŸ¤” https://t.co/dBTvRz8ZMf', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0022'),
('Julianchis ðŸ•', 'RT @Juan_Da_MC: cantando a grito herido: THANK U, NEXT ;)\n\nlos chats:\noye Ricardo yo sÃ© q ya no quieres saber de mÃ­ y lo sÃ© xq no me has coâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Un Cubo de Rubik ', 'S0023'),
('christine kling', 'RT @KarenAttiah: This is a selfie Jamal #Khashoggi took when I first took him to the @washingtonpost newsroom and showed him around. He wasâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0024'),
('Gloria...', 'RT @RaquelVaRi: #PaseDeLista1Al43 @epigmenioibarra @KarennKiowa @zibilspring @RAyotzinapa43\"AcÃ¡ nos tienen desde hace cuatro aÃ±os d la desaâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0025'),
('BOUGIEâ“œâ“¤â“â“’â“—â“šâ“˜â“ ðŸŒ»', 'RT @skittle624: Catch the bouquet at a wedding? More like run from it like itâ€™s a grenade.', 'Wed Nov 21 04:03:32 +0000 2018', '#COWBOYSNATION ', 'S0026'),
('BChalks', '@SarcasticRover @Oatmeal ... is this a Bobiverse (@Dennis_E_Taylor) reference?', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0027'),
('El Inconformista y muy triste...', 'RT @bbimbi: Un diputado brasileÃ±o se burlÃ³ de un proyecto de ley en plena sesiÃ³n, preguntÃ³ a quiÃ©n se le habÃ­a ocurrido semejante estupidezâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'Bavay, FR/San Diego CA/ViÃ±a CL', 'S0028'),
('Deandra Marie ðŸ–¤ðŸ¦„ðŸŒ»', 'Do you want to know my the #2A and my concealed carry is so important and means so much to me? Because ten years ago I was a 19 yr old girl who was sexually assaulted by a man who was 3x my size. I didnâ€™t want it; but I let it happen out of fear for my life.', 'Wed Nov 21 04:03:32 +0000 2018', 'Ohio, USA', 'S0029'),
('BertuzziðŸ’š', 'estoy escuchando una lista que hizo Spotify en base a la musica que escucho. Decir que le pegÃ³ a una es mucho yuta madre', 'Wed Nov 21 04:03:32 +0000 2018', 'The town ', 'S0030'),
('s@ika', '@r_a_d_w_i_m_ps ç¬‘ã£ãŸwww', 'Wed Nov 21 04:03:32 +0000 2018', '', 'S0031'),
('nyelo', 'RT @81wrId: Yâ€™all really expected Kobe to beat a 54 win suns team with this man as his starting center lmaoo https://t.co/GRgLHWwtwR', 'Wed Nov 21 04:03:32 +0000 2018', 'jas', 'S0032'),
('ðŸ’°ðŸ¤¢puke dÃ¸llaz.ðŸ¤¢ðŸ’°', 'RT @julezthegod: Sean Pablo is releasing a crew neck that says â€œI hate broke ass menâ€ , I feel you bro ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'Wed Nov 21 04:03:32 +0000 2018', 'RVA-DC-NYC', 'S0033'),
('Alayde Rdz.', 'RT @aquelarre_h: Bien contentos de haber estado en la @ENSQoficial y platicar sobre la vida cotidiana en la #RevoluciÃ³nMexicana con chicosâ€¦', 'Wed Nov 21 04:03:32 +0000 2018', 'MÃ©xico', 'S0034'),
('S e l', 'RT @selenastrikes: \"si estÃ¡s roto, no tenÃ©s que quedarte roto\" y eso es tan verdad, no tenÃ©s por quÃ© quedarte asÃ­, vos podÃ©s sanar, vos merâ€¦', 'Wed Nov 21 04:03:31 +0000 2018', 'MÃ©xico', 'S0035'),
('Christian Poe', '@DejounL They fueling a big fire ðŸ”¥', 'Wed Nov 21 04:03:31 +0000 2018', '', 'S0036'),
('molly', 'RT @connorhannigan4: me after going to a 1 hour lecture and playing on my phone the whole time https://t.co/C4s9FD7dtw', 'Wed Nov 21 04:03:31 +0000 2018', '', 'S0037'),
('ðŸ‘©ðŸ»â€ðŸŽ“', 'RT @abstrakim: Salam maulidur rasul..My idol and my hero..Nabi Muhammad S.A.W...\n\nKenapa Nabi Muhammad is our real idol and hero?\n\nIni adalâ€¦', 'Wed Nov 21 04:03:31 +0000 2018', '', 'S0038'),
('vÎ¹dÎ± âœŠðŸ¼ðŸ’™', 'RT @LupeBatallan: Las feministas molestas porque no solo no creo en la existencia del patriarcado si no q ademÃ¡s no lo sufro y fui criada câ€¦', 'Wed Nov 21 04:03:31 +0000 2018', '', 'S0039'),
('Isaac One Fall Podcast', 'RT @Zorro_nononono: #FelizMartes lamentable el incidente que tuvo â€œEl Cuervo de Puerto Ricoâ€ un joven con una carrera muy prometedora, te dâ€¦', 'Wed Nov 21 04:03:31 +0000 2018', 'Monterrey, Nuevo LeÃ³n', 'S0040'),
('yessica', 'RT @dallashoneyg: #Fuck , 100 rts for ya girl to get a icy hoodie ðŸ¥ºðŸ–¤ https://t.co/iQo3RBffOR', 'Wed Nov 21 04:03:31 +0000 2018', '', 'S0041'),
('Helen0619', '@IglesiasJulio87 @ContraGodarria JamÃ¡s le he escuchado  a Gustavo Petro un discurso anti empresa o anti rico! Justicia social es su discurso siempre, nada que ver con el comunismo.', 'Wed Nov 21 04:03:31 +0000 2018', '', 'S0042'),
('lunaðŸŒ™', 'RT @Tomi01Carp: A tu instagram le falta una foto conmigo', 'Wed Nov 21 04:03:31 +0000 2018', 'argðŸ‡¦ðŸ‡·', 'S0043'),
('exequiel', 'Mi ex se piensa que esta todo bien jajaja, a flashear a la flasheria', 'Wed Nov 21 04:03:31 +0000 2018', 'NeuquÃ©n(ARG)', 'S0044'),
('HollidayIT', 'RT @JeffFlake: â€œGreat alliesâ€ donâ€™t plot the murder of journalists, Mr. President. â€œGreat alliesâ€ donâ€™t lure their own citizens into a trapâ€¦', 'Wed Nov 21 04:03:31 +0000 2018', 'TEXAS', 'S0045'),
('Michelle', 'RT @SrChupasangue: Un gran thriller sesentero, #ElFotÃ³grafoDelPÃ¡nico. Nos muestra a un hombre profundamente perturbado desde su infancia, qâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'BogotÃ¡, D.C., Colombia', 'S0046'),
('AnimeTVPlay', 'Add a message to your video https://t.co/NNHJGgHNw0', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0047'),
('Jimmy', 'RT @SonyPicturesMX: Es difÃ­cil llevar una vida comÃºn cuando tienes que salvar a toda una ciudad. No te pierdas #SpiderMan #UnNuevoUniversoâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Home', 'S0048'),
('â—€â–¶', 'RT @nahu_nm7: 1- El cholo GuiÃ±azÃº \n2- El cholo GuiÃ±azÃº \n3- El cholo GuiÃ±azÃº \n4- El cholo GuiÃ±azÃº \n5- A todos menos al Cholo GuiÃ±azÃº https:/â€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'cordoba', 'S0049'),
('Wokuhle', 'RT @MrCekisoSir: If this message appears on your TL. Please leave words of encouragement for me. I bake and sell scones for a living! httpsâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Cape Town, South Africa', 'S0050'),
('Thumper2', 'RT @chelseahandler: Iâ€™d like to know what kind of noise cancelling head phones @IvankaTrump used during one of the 5 thousand times her fatâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0051'),
('Maca Carneiro Tort', 'RT @OrwellGeorge: Hermoso - AerolÃ­neas Argentinas suspendiÃ³ a 370 empleados por la medida de fuerza que paralizÃ³ 258 vuelos https://t.co/oQâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Copenhague, Dinamarca', 'S0052'),
('Glub Glub', 'this just mean sheâ€™s a christian bro u good https://t.co/So0dms5ZOn', 'Wed Nov 21 04:03:53 +0000 2018', 'Dallas, TX', 'S0053'),
('Scott Chema', '@cindyhydesmith you need to step aside and admit you are not fit to be in government due to your anti-American and treasonous poses with the confederate flag, as well as your desire to be in the front row of a slave lynching. You are disgusting and we should exile you to Russia.', 'Wed Nov 21 04:03:53 +0000 2018', 'Bay Area, CA', 'S0054'),
('Sparky Eastway', 'RT @HenpeckedHal: condom commercials should just be a live-feed of couples trying to enjoy a decent meal at a restaurant with their kids', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0055'),
('vegan ðŸ’š fairy âœ¨ princess ðŸ’', '@ElvieSinclair So I tried to find the soy strawberry milk brand thatâ€™s available to me and found a bunch of amazing looking recipes instead! What! ðŸ˜ðŸ“ðŸ§ðŸ°ðŸ“', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0056'),
('Radio Diblu FM', 'Beder Caicedo: \"Gracias a Dios las cosas salieron de la mejor manera y estoy contento por eso. El profe me dio toda la libertad pero la prioridad era tener el arco en cero.\"\n\nðŸ“· @jamolestina\n#ModoDiblu https://t.co/X8ZnDWi3u7', 'Wed Nov 21 04:03:53 +0000 2018', 'Ecuador', 'S0057'),
('Brianna Harleyâ€™ðŸ†ðŸ–¤', 'RT @deondreIamont: i want a \"i made a playlist for you\" typa love', 'Wed Nov 21 04:03:53 +0000 2018', 'Fontana, CA', 'S0058'),
('king', 'RT @ShafUnlimited: JR Smith. One of my favorite Cavaliers ever. Endured a child born with extreme health problems...so tough. You will neveâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'South Side ', 'S0059'),
('Bloody', 'I love your pictures, I would literally pay you for a mini photo shoot â€” Lets do it you wonâ€™t be disappointed ðŸ¤žðŸ» https://t.co/52f3dVjsKU', 'Wed Nov 21 04:03:53 +0000 2018', 'Flexico', 'S0060'),
('eduarda', 'RT @DeboaSammy: Os filhos deles tudo bem de vida , tudo tem condiÃ§Ãµes mas nÃ£o se veem mais , eu fico agoniado quando desÃ§o o morro e ele faâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', '021', 'S0061'),
('Dillon Westall', 'So are we having a pre thanksgiving day turn up tomorrow or what?', 'Wed Nov 21 04:03:53 +0000 2018', 'Helotes, TX', 'S0062'),
('Cami Oyarzo', 'RT @Mati_petrone: Por suerte nunca nos va a faltar el talento, lo que permite creer. \nAl terreno lo habÃ­amos dejado infÃ©rtil. TenÃ­amos queâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Trelew, Argentina', 'S0063'),
('Josh Biddlecome', 'RT @iwearahoodie: @TheBiggestOaf @NeuroLatina @calitrav @nature How can one mansplain unless we agree on the definition of what a man is?', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0064'),
('Jefferson', 'Adicionei um vÃ­deo a uma playlist @YouTube https://t.co/40mt4stocj 1 ðŸš Ã”nibus saindo RodoviÃ¡ria TietÃª - 20/11/2018 Feriado', 'Wed Nov 21 04:03:53 +0000 2018', 'SÃ£o Paulo - SP', 'S0065'),
('Orlando de Guzman', 'RT @AshaRangappa_: So if you are a U.S. person who is kidnapped, tortured, and killed for exercising your rights by a country in which theâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0066'),
('2004 Toyota Corolla', 'I ternak on a face mask and got more Pimples, what the hell man', 'Wed Nov 21 04:03:53 +0000 2018', 'Illinois, USA', 'S0067'),
('Fernanda Loopez', 'RT @BorrachosVIP: Primero las manteconchas y ahora los Chihuahuskys ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚\n\nEstamos jugando a ser Dioses ðŸ˜ª https://t.co/dibfv7dRPE', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0068'),
('Xiooâœ¨', '@kathyyy337 Pero y a ti quien te sienta siempre que juegas contra nosotras? No puedes es? JAJAJAJAJA sigue de sombra chulaðŸ˜˜â¤ï¸â¤ï¸ que bastardita', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0069'),
('Chang áƒ¦', 'RT @edgaremiliopr: Perder gente puede doler pero... Te has perdido a ti mismo? Esa mierda mata.', 'Wed Nov 21 04:03:53 +0000 2018', 'Guaynabo, Puerto Rico', 'S0070'),
('Raj  Takhar', '@KellyanneConYou What a pile of BS &amp; also what she said is crap', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0071'),
('Kung Fu Kenny', 'Eating a bowl of grapes, strawberries and blueberries â˜ºï¸', 'Wed Nov 21 04:03:53 +0000 2018', 'somewhere obtaining knowlege', 'S0072'),
('Emiro', 'RT @arzuagatoro24: Quiero invitar de una manera muy especial, a toda la gente de mi departamento del Cesar, del cual soy oriundo, a mi partâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Colombia', 'S0073'),
('ðŸƒáŽ¯brilðŸƒ', 'RT @CeleAgustina01: No justifiquen su falta de interÃ©s con un â€œyo soy asÃ­â€ o  â€œesa es mi forma de serâ€, por que NADIE trata con indiferenciâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'En la heladera', 'S0074'),
('Prof. McGone Girl', 'That â€œlâ€ was definitely an â€œfâ€ for a minute', 'Wed Nov 21 04:03:53 +0000 2018', ' In the Kitchen', 'S0075'),
('Obirin', 'RT @revistasuper: NÃ£o foi sÃ³ Zumbi. LÃ­deres negros lutaram e libertaram escravos por toda a AmÃ©rica Latina muitos anos antes (e depois) deâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Recife, Brasil', 'S0076'),
('GforGreatnessðŸ‘‘', 'RT @FlawlessArmani: Yâ€™all ever skip a class and then have the post skip class depression? Like damn I shouldâ€™ve just went', 'Wed Nov 21 04:03:53 +0000 2018', 'State of NC ', 'S0077'),
('Ori', 'RT @TinoSoto4: Â¡Â¡âš âš ATENCION EGRESADOOOOSâš âš !!\nðŸ’¥ Si el 24/11 para la #gargofest van mas de 6 con sus camperas de los respectivos cursos se vaâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0078'),
('Gary Laight', 'RT @potatoes_za: Loading... our #blackfriday surprise hamper for you our Spud Lover! Like, Retweet, Follow, Reply on our page and we couldâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'East Coast', 'S0079'),
('Alexandra Campbell', 'RT @BethMooreLPM: If youâ€™ve got a few people to love &amp; a few who love you, a few who make you laugh, think &amp; discuss instead of cuss, who gâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0080'),
('Caro Gregorioâœ¨', 'RT @LeandroGeffroy: yo no pague una entrada para escuchar cantar a la hija de tinelli su unico tema que encima es horrible ESPERO QUE ESTOâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Buenos aires, Canning', 'S0081'),
('rat babyðŸƒ', '@chakrabIades this is one of the best ones i couldâ€™ve been given you have a very big brain', 'Wed Nov 21 04:03:53 +0000 2018', 'maxie | 20 | any pronouns', 'S0082'),
('nerii', 'srsly, for a sensitive person like me, simple words like a joke but in an insult way can make me annoy', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0083'),
('AllAboutNuptial', '10th Wedding Anniversary Gift Ideas For A Decade Of Love https://t.co/jCwvNkKSTO', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0084'),
('â€¢ Agus ðŸ’š', 'RT @SofiPolizzi: Cada graduaciÃ³n a la que voy: https://t.co/uioL85pzyk', 'Wed Nov 21 04:03:53 +0000 2018', 'Arms/MsJz  ', 'S0085'),
('ThelmaðŸŒ¸', 'RT @DanielHabif: Te recomiendo ponerle un bozal a tu PERO. \n\n#danielhabif', 'Wed Nov 21 04:03:53 +0000 2018', '', 'S0086'),
('Raul Pont Lezica', 'RT @InfobaeAmerica: JosÃ© Mujica decidiÃ³ no asistir a \"la contracumbre del G20\" en Argentina: \"No debo contribuir a crear obstÃ¡culos\"\nhttps:â€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'San MartÃ­n de los Andes, Argen', 'S0087'),
('Narella â™›', 'Los mosquitos se van a hacer una casuela con mi sangre hdp', 'Wed Nov 21 04:03:53 +0000 2018', 'Rosario, Parque Independencia ', 'S0088'),
('Christopher Nolan', 'RT @KingJames: Uh oh!! Itâ€™s gone get REAL REAL for a lot of yâ€™all out there. ðŸ˜³ https://t.co/YWM8FiOuK8', 'Wed Nov 21 04:03:53 +0000 2018', 'CT', 'S0089'),
('LHV', 'RT @RealJamesWoods: Iâ€™ve watched this a hundred times. His little innocent face! And his sweater says â€œGENIUS!â€ So unbelievably adorable. hâ€¦', 'Wed Nov 21 04:03:53 +0000 2018', 'Jacksonville, FL', 'S0090'),
('The Bipolar Battle', '@Alcole41930199 16 years is a great go, right?ðŸ‘', 'Wed Nov 21 04:04:19 +0000 2018', 'Colorado, USA', 'S0091'),
('TRAILER DROPPIN', 'RT @JoshJST: If youâ€™re going Black Friday shopping, please be a decent human being and turn your phone sideways before recording fights.', 'Wed Nov 21 04:04:19 +0000 2018', 'Rhode Island, USA', 'S0092'),
('É“Ê€É›É³É—É‘ï£¿ #Paraisofest', 'vou deixar a rua me levar, vÃª a cidade se acender, a lua vai banhar esse lugar, e eu vou lembrar vocÃª â¤ï¸ðŸŽ¼', 'Wed Nov 21 04:04:19 +0000 2018', '021ðŸŒ´ðŸŒŠ', 'S0093'),
('ã‚¯ãƒªãƒƒã‚µ lil Handicap ðŸ¤™ Jump Force Fooly', 'RT @rtzteeks: there was a second fight??? https://t.co/hbUol3MAAk', 'Wed Nov 21 04:04:19 +0000 2018', 'TheFlats, LA 337', 'S0094'),
('E', 'I refer to The Darkness a lot because that game was ahead of its time as a mob story.', 'Wed Nov 21 04:04:19 +0000 2018', 'Brooklyn, NY', 'S0095'),
('â€¢Â°â€¢Â°â€¢Â°â€¢Â°', 'RT @issavibing: a mi se me pasan las ganas de estar con alguien sÃºper rÃ¡pido', 'Wed Nov 21 04:04:19 +0000 2018', 'Carolina, Puerto Rico', 'S0096'),
('josÃ© antonio', 'Me ha gustado un vÃ­deo de @YouTube (https://t.co/8Z43vG15xL - EN VIVO: AMLO Va A Televisa / Tercer Grado).', 'Wed Nov 21 04:04:19 +0000 2018', 'MÃ©xico', 'S0097'),
('NindÃ«', 'RT @icardismo: La rosas son rojas \n\nY crecen en el valle \n\nSi te quedas embarazada\n\nTe vas a la puta calle https://t.co/vZmyWcUFLq', 'Wed Nov 21 04:04:19 +0000 2018', 'EspaÃ±a', 'S0098'),
('aguirre joaquin', 'La gente de mierda no se cansa nunca de hablar pavadas para dejar mal a uno', 'Wed Nov 21 04:04:19 +0000 2018', 'Misiones, Argentina', 'S0099'),
('Man of His Words. #ë„ê²½ìˆ˜181112', 'RT @exo_lab: A message from the children who received EXOâ€™s 5th regular album through the donation group order with International EXO-Ls haâ€¦', 'Wed Nov 21 04:04:19 +0000 2018', '', 'S0100');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `twitter`
--
ALTER TABLE `twitter`
  ADD PRIMARY KEY (`ID_STATUS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
