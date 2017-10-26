<section id="sell-info">
	<h3>Kontaktujte nás</h3>
	 <form role="form" id="contact-form">
		<div class="sell-wrapper">
			<label for="offer">Mám zájem o </label>
			<select name="Mám zájem o" id="offer" class="inputArea">
		      <option value="Prodej dřeva">Prodej dřeva</option>
		      <option value="Prodej dlažby">Prodej dlažby</option>
		      <option value="Prodej cihlového materiálu">Prodej cihlového materiálu</option>
		      <option value="Prodej historického materiálu">Prodej historického materiálu</option>
		      <option value="Demolici objektu">Demolici objektu</option>
		      <option value="Kontejnerovou dopravu">Kontejnerovou dopravu</option>
			</select>
		</div>
		<label for="region">Lokalita</label>
		<div class="autocomplete">
		  	<input id="region" name="region" placeholder="V jakém kraji?" class="inputArea">
		  	<span class="close">Zrušit</span>
		  	<div class="dialog"></div>
		</div>
		<div>
			<label for="name">Jméno</label>
			<input type="text" id="name" name="name" class="inputArea">
			<div class="error"></div>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="inputArea">
			<div class="error"></div>
		</div>
		<div>
			<label for="phone">Telefon</label>
			<input type="tel" id="phone" name="phone" class="inputArea">
			<div class="error"></div>
		</div>
		<div>
			<label for="message">Bližší specifikace (množství, rozměr, stáří)</label>
			<textarea id="message" name="message" type="text" rows="5"></textarea>
		</div>
		<div id="msg" class="ta-c"></div>
		<button type="submit" class="btn-form">Odeslat</button>
	</form>
</section>