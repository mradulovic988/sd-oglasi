<div class="Automobili">
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <h4>Osnovni podaci</h4>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-type">Marka*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-type" class="mls-car-select mls-field mls-disable" id="mls-market-ads-cars-type" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_car_types as $mls_car ) {
						echo '<option value="' . $mls_car . '">' . $mls_car . '</option>';
					}
					?>
                </select>
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-model">Model*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-model" class="AC mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['ac'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Acura mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['acura'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="AlfaRomeo mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['AlfaRomeo'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Alpina mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Alpina'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Aro mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Aro'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="AsiaMotors mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['AsiaMotors'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="AstonMartin mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['AstonMartin'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Audi mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Audi'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Austin mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Austin'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Autobianchi mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Autobianchi'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Bentley mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Bentley'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="BMW mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['BMW'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Brilliance mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Brilliance'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Bugatti mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Bugatti'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Buick mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Buick'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Cadillac mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Cadillac'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Chery mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Chery'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Chervolet mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Chervolet'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Chrysler mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Chrysler'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Citroen mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Citroen'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Comarth mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Comarth'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Cupra mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Cupra'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Dacia mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Dacia'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Daewoo mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Daewoo'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Daihatsu mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Daihatsu'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Dodge mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Dodge'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="DR mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['DR'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Ferrari mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Ferrari'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Fiat mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Fiat'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Ford mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Ford'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="GAZ mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['GAZ'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="GMC mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['GMC'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="GreatWall mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['GreatWall'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="GWM mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['GWM'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Honda mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Honda'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Hummer mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Hummer'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Hyundai mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Hyundai'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Infiniti mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Infiniti'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Innocenti mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Innocenti'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Isuzu mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Isuzu'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Jaguar mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Jaguar'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Jeep mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Jeep'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="KateyGonow mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['KateyGonow'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Kia mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Kia'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="KTM mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['KTM'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Lada mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Lada'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Lamborghini mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Lamborghini'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Lancia mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Lancia'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="LandRover mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['LandRover'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Lexus mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Lexus'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Ligier mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Ligier'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Lincon mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Lincon'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Linzda mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Linzda'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Lotus mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Lotus'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Mahindra mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Mahindra'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Maserati mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Maserati'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Matra mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Matra'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Maybach mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Maybach'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Mazda mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Mazda'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="MercedesBenz mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['MercedesBenz'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Mercury mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Mercury'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="MG mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['MG'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="MINI mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['MINI'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Mitsubischi mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Mitsubischi'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Moskovitch mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Moskovitch'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Nissan mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Nissan'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="NSU mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['NSU'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Oldsmobile mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Oldsmobile'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Opel mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Opel'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Ostalo mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Ostalo'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Peugeot mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Peugeot'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Piaggio mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Piaggio'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Plymouth mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Plymouth'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Polonez mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Polonez'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="PolskiFiat mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['PolskiFiat'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Pontiac mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Pontiac'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Porsche mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Porsche'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Proton mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Proton'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="RaytonFissore mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['RaytonFissore'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Renault mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Renault'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="RollsRoyce mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['RollsRoyce'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Rover mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Rover'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Saab mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Saab'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Saturn mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Saturn'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Seat mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Seat'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Shuanghuan mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Shuanghuan'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Simca mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Simca'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Škoda mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Škoda'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Smart mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Smart'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="SsangYong mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['SsangYong'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Subaru mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Subaru'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Suzuki mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Suzuki'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Talbot mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Talbot'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Tata mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Tata'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Tavria mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Tavria'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Tesla mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Tesla'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Toyota mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Toyota'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Trabant mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Trabant'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Triumph mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Triumph'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="TVR mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['TVR'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="UAZ mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['UAZ'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Vauxhall mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Vauxhall'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Volksvagen mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Volksvagen'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Volvo mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Volvo'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Wartburg mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Wartburg'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="Zastava mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['Zastava'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>

                <select name="mls-market-ads-cars-model" class="ZhiDou mls-field mls-refresh" id="mls-market-ads-cars-model" required>
					<?php
					echo '<option value="">-- Izaberite --</option>';
					foreach ( $_config->mls_model['ZhiDou'] as $model ) {
						echo '<option value="' . $model . '">' . $model . '</option>';
					}
					?>
                </select>
            </div>
        </div>
    </div>

</div>