<div id="header-menu">
<nav class="dws-menu">
	<input type="checkbox" name="toggle" id="menu" class="toggleMenu">
	<label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
<ul>
			<li><a <?php if ($punkt=='index') {echo 'class="active"';} ?> href="index">
				<i class="fa fa-home"></i>Про&nbsp;нас</a></li>
            <li><a <?php if ($punkt=='history') {echo 'class="active"';} ?> href="history">
				<i class="fa fa-history"></i>Історія</a></li>  
			<li>
	<input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
	<a <?php if ($punkt=='services') {echo 'class="active"';} ?> href="#">
	<i class="fa fa-cogs" aria-hidden="true"></i>
	Послуги</a>
	<label for="sub_m1" class="toggleSubmenu">
		<i class="fa"></i>
		</label>
		<ul>
                      <li>
                          <a href="sort">Якість</a>
                      </li>
					  <li>
                          <a href="transport">Перевезення вантажів</a>
                      </li>
                      <li>
					      <a href="repair">Ремонтна база</a>
					  </li>
		</ul>
	</li>  
		<li>
	<input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m2">
	<a <?php if ($punkt=='work') {echo 'class="active"';} ?> href="#">
	<i class="fa fa-info" aria-hidden="true"></i>
	Інформація</a>
	<label for="sub_m2" class="toggleSubmenu">
		<i class="fa"></i>
		</label>
		<ul>
					  <li>
                          <a href="promulgation">Публічні закупівлі</a>
                      </li>
                      <li>
                          <a href="news">Новини</a>
                      </li>
					  <li>
                          <a href="job">Вакансії</a>
                      </li>
                      
					  <li><a href="antikor.doc">Антикорупційна Програма</a></li>
					  <li>
                          <a href="About_the_company.pdf" target="_blank">Презентація</a>
                      </li>
		</ul>
	</li> 
	<li><a <?php if ($punkt=='gallery') {echo 'class="active"';} ?> href="gallery">
				<i class="fa fa-photo"></i>Фотогалерея</a></li>
            <li><a <?php if ($punkt=='contacts') {echo 'class="active"';} ?> href="contacts">
				<i class="fa fa-envelope-open"></i>Контакти</a></li> 
</ul>
</nav>
</div>