/* Script Javascript */

/* Fonction Wait */
function wait(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
                end = new Date().getTime();
        }
}

/* Fonction ShowVideo */
function showvideo(video) {
        if (video.style == 'display: none'){
                video.style = 'display: block';
        }else{
                video.style = 'display: none';
                alert('ERREUR JS showVideo !')
        }
}

/* Fonction ShowMenu */
function showmenu(menu) {
	if (menu.id == 'menuhor1'){
		menu.innerHTML = '<table>Créations<tr><td><a href="/Projets/projetTest/pages/CV.php">CV</a></td></tr><tr><td><a href="/Projets/projetTest/pages/divers.php">Divers</a></td></tr></table>';
	}else if (menu.id == 'menuhor2'){
                menu.innerHTML = '<table>Membres<tr><td><a href="/Projets/projetTest/pages/forminsc.php">S\'Inscrire</a></td></tr><tr><td><a href="/Projets/projetTest/pages/formco.php">Se Connecter</a></td></tr></table>';
        }else{
                alert('ERREUR JS showMenu !');
        }
}

/* Fonction HideMenu */
function hidemenu(menu){
        if (menu.id == 'menuhor1'){
                menu.innerHTML = '<table>Créations</table>'; 
        }else if(menu.id == 'menuhor2'){
                menu.innerHTML = '<table>Membres</table>';
        }else{
                alert('ERREUR JS hideMenu !');
        }
}