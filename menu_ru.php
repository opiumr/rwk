<div id="header-menu">
<nav class="dws-menu">
		
      <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
	
	<label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
		<ul>
			<li><a <?php if ($punkt=='index') {echo 'class="active"';} ?> href="index_ru">
             <i class="fa fa-home"></i>О&nbsp;нас</a></li>
			  <li><a <?php if ($punkt=='history') {echo 'class="active"';} ?> href="history_ru">
				<i class="fa fa-history"></i>История</a></li>  
              <li>
	<input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
	<a <?php if ($punkt=='services') {echo 'class="active"';} ?> href="#">
	<i class="fa fa-cogs" aria-hidden="true"></i>
	Услуги</a>
	<label for="sub_m1" class="toggleSubmenu">
		<i class="fa"></i>
		</label>
		<ul>
                      <li>
                          <a href="sort_ru">Качество</a>
                      </li>
					  <li>
                          <a href="transport_ru">Перевозка грузов</a>
                      </li>
                      <li>
					      <a href="repair_ru">Ремонтная база</a>
					  </li>
		</ul>
	</li> 
<li>
	<input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m2">
	<a <?php if ($punkt=='work') {echo 'class="active"';} ?> href="#">
	<i class="fa fa-info" aria-hidden="true"></i>Информация</a>
	<label for="sub_m2" class="toggleSubmenu">
		<i class="fa"></i>
		</label>
		<ul>
                      <li>
                          <a href="news">Новости</a>
                      </li>
					  <li>
                          <a href="job_ru">Вакансии</a>
                      </li>
                      
					  <li><a href="antikor.doc">Антикоррупционная Программа</a></li>
					  <li>
                          <a href="About_the_company.pdf" target="_blank">Презентация</a>
                      </li>
		</ul>
	</li> 
	<li><a <?php if ($punkt=='gallery') {echo 'class="active"';} ?> href="gallery_ru">
				<i class="fa fa-photo"></i>Фотогаллерея</a></li>
            <li><a <?php if ($punkt=='contacts') {echo 'class="active"';} ?> href="contacts_ru">
				<i class="fa fa-envelope-open"></i>Контакты</a></li> 
</ul>
</nav>
</div>