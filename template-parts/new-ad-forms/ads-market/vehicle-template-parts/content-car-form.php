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
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-mark">Oznaka modela</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-market-ads-cars-marke" class="mls-field" name="mls-market-ads-cars-mark">
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-year">Godište*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-year" class="mls-field" id="mls-market-ads-cars-year" required>
					<?php
					$startDate = new \DateTime( 'now' );
					$endDate   = new \DateTime( '1932-01-01' );

					for ( $date = $startDate; $endDate <= $date; $date->modify( '-1 year' ) ) {
						echo '<option value="' . $date->format( 'm.Y.' ) . '">' . $date->format( 'Y.' ) . '</option>';
					}
					?>
                </select>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-body">Tip karoserije*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-body" class="mls-car-select mls-field mls-disable" id="mls-market-ads-cars-body" required>
                    <option value="Limuzina">Limuzina</option>
                    <option value="Hečbek">Hečbek</option>
                    <option value="Karavan">Karavan</option>
                    <option value="Kupe">Kupe</option>
                    <option value="KabrioletRoadster">Kabriolet/Roadster</option>
                    <option value="MonuvolumenMiniVan">Monuvolumen (MiniVan)</option>
                    <option value="DžipSUV">Džip/SUV</option>
                    <option value="Pickup">Pickup</option>
                </select>
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-cm">Kubikaža*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-market-ads-cars-cm" class="mls-field" name="mls-market-ads-cars-cm">
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-hp">Snaga Motora*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-market-ads-cars-hp" class="mls-field" name="mls-market-ads-cars-hp">
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-seller">Prodavac*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-seller" class="mls-car-select mls-field mls-disable" id="mls-market-ads-cars-seller" required>
                    <option value="Audodiler">Audo diler</option>
                    <option value="AutoSalon">Auto Salon</option>
                    <option value="Fizičkolice">Fizičko lice</option>
                    <option value="Ovlašćenidistributer">Ovlašćeni distributer</option>
                    <option value="Lizingkuća">Lizing kuća</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-fuell">Gorivo*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-fuell" class="mls-car-select mls-field mls-disable" id="mls-market-ads-cars-fuell" required>
                    <option value="Benzin">Benzin</option>
                    <option value="Dizel">Dizel</option>
                    <option value="BenzinTng">Benzin + Tng</option>
                    <option value="MetanCng">Metan CNG</option>
                    <option value="Hibridni pogon">Hibridni pogon</option>
                    <option value="Elektricni pogon">Električni pogon</option>
                </select>
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-km">Prešao*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-market-ads-cars-km" class="mls-field" name="mls-market-ads-cars-km">
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-register">Registrovan do*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-market-ads-cars-register" class="mls-car-select mls-field mls-disable" id="mls-market-ads-cars-register" required>
					<?php
					$startDate = new \DateTime( 'now' );
					$endDate   = new \DateTime( '2023-03-02' );

					for ( $date = $startDate; $endDate >= $date; $date->modify( '+1 month' ) ) {
						echo '<option value="' . $date->format( 'm.Y.' ) . '">' . $date->format( 'm.Y.' ) . '</option>';
					}
					?>
                </select>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-market-ads-cars-price">Cena*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-market-ads-cars-price" class="mls-field" name="mls-market-ads-cars-price">
            </div>
        </div>

        <div class="mls-w-75">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="mls-market-ads-cars-fixed" class="mls-market-ads-deal" name="mls-market-ads-cars-fixed">
                <label for="mls-market-ads-cars-fixed" class="mls-mr-10">Fiksna</label>

                <input type="checkbox" id="mls-market-ads-cars-notfixed" class="mls-market-ads-fixed" name="mls-market-ads-cars-notfixed">
                <label for="mls-market-ads-cars-notfixed" class="mls-mr-10">Nije fiksna</label>

                <input type="checkbox" id="mls-market-ads-cars-replacement" class="mls-market-ads-free" name="mls-market-ads-cars-replacement">
                <label for="mls-market-ads-cars-replacement" class="mls-mr-10">Zamena</label>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="mls-market-ads-cars-metalik" class="mls-market-ads-deal" name="mls-market-ads-cars-metalik">
                <label for="mls-market-ads-cars-metalik" class="mls-mr-10">Metalik boja</label>

                <input type="checkbox" id="mls-market-ads-cars-branici" class="mls-market-ads-fixed" name="mls-market-ads-cars-branici">
                <label for="mls-market-ads-cars-branici" class="mls-mr-10">Branici u boji auta</label>

                <input type="checkbox" id="mls-market-ads-cars-servo" class="mls-market-ads-free" name="mls-market-ads-cars-servo">
                <label for="mls-market-ads-cars-servo" class="mls-mr-10">Servo volan</label>

                <input type="checkbox" id="mls-market-ads-cars-mulfunkvolan" class="mls-market-ads-free" name="mls-market-ads-cars-mulfunkvolan">
                <label for="mls-market-ads-cars-mulfunkvolan" class="mls-mr-10">Multifunkcionalni volan</label>

                <input type="checkbox" id="mls-market-ads-cars-tempomat" class="mls-market-ads-deal" name="mls-market-ads-cars-tempomat">
                <label for="mls-market-ads-cars-tempomat" class="mls-mr-10">Tempomat</label>

                <input type="checkbox" id="mls-market-ads-cars-daljzak" class="mls-market-ads-fixed" name="mls-market-ads-cars-daljzak">
                <label for="mls-market-ads-cars-daljzak" class="mls-mr-10">Daljinsko zaključavanje</label>

                <input type="checkbox" id="mls-market-ads-cars-purac" class="mls-market-ads-free" name="mls-market-ads-cars-purac">
                <label for="mls-market-ads-cars-purac" class="mls-mr-10">Putni računar</label>

                <input type="checkbox" id="mls-market-ads-cars-siber" class="mls-market-ads-free" name="mls-market-ads-cars-siber">
                <label for="mls-market-ads-cars-siber" class="mls-mr-10">Šiber</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="mls-market-ads-cars-panorama" class="mls-market-ads-deal" name="mls-market-ads-cars-panorama">
                <label for="mls-market-ads-cars-panorama" class="mls-mr-10">Panorama krov</label>

                <input type="checkbox" id="mls-market-ads-cars-toniranastakla" class="mls-market-ads-fixed" name="mls-market-ads-cars-toniranastakla">
                <label for="mls-market-ads-cars-toniranastakla" class="mls-mr-10">Tonirana stakla</label>

                <input type="checkbox" id="mls-market-ads-cars-elekpod" class="mls-market-ads-free" name="mls-market-ads-cars-elekpod">
                <label for="mls-market-ads-cars-elekpod" class="mls-mr-10">Električni podizači</label>

                <input type="checkbox" id="mls-market-ads-cars-elekretr" class="mls-market-ads-free" name="mls-market-ads-cars-elekretr">
                <label for="mls-market-ads-cars-elekretr" class="mls-mr-10">Električni retrovizori</label>

                <input type="checkbox" id="mls-market-ads-cars-grejretr" class="mls-market-ads-deal" name="mls-market-ads-cars-grejretr">
                <label for="mls-market-ads-cars-grejretr" class="mls-mr-10">Grejači retrovizora</label>

                <input type="checkbox" id="mls-market-ads-cars-sedpovisini" class="mls-market-ads-fixed" name="mls-market-ads-cars-sedpovisini">
                <label for="mls-market-ads-cars-sedpovisini" class="mls-mr-10">Sedišta podesiva po visini</label>

                <input type="checkbox" id="mls-market-ads-cars-elekpodsedista" class="mls-market-ads-free" name="mls-market-ads-cars-elekpodsedista">
                <label for="mls-market-ads-cars-elekpodsedista" class="mls-mr-10">Elektro podesiva sedišta</label>

                <input type="checkbox" id="mls-market-ads-cars-grejanjesed" class="mls-market-ads-free" name="mls-market-ads-cars-grejanjesed">
                <label for="mls-market-ads-cars-grejanjesed" class="mls-mr-10">Grejanje sedišta</label>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Svetla za maglu</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Xenon svetla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Senzori za svetla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Senzori za kišu</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Parking senzori</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Webasto</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Krovni nosač</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kuka za vuču</label>

            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Aluminijumske felne</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Navigacija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Bluetooth</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Radio/Kasetofon</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Radio CD</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">CD Charger</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">DVD/TV</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">LED prednja svetla</label>

            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Grejači vetrobranskog stakla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">LED zadnja svetla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Naslon za ruku</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Adaptivni tempomat</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Automatsko parkiranje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kamera</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Hands free</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Adaptivna svetla</label>

            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Head-up display</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ISOFIX sistem</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Start-stop sistem</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Prednja noćna kamera</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Multimedija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Glasovne komande</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Masažna sedišta</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Elektro sklopivi retrovizori</label>

            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Memorija sedišta</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Sportska sedišta</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Sportsko vešanje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">DPF filter</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Dnevna svetla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Torba za skije</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Upravljanje na sva četri točka</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Brisači prednjih farova</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">360 kamera</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Fabrički ugrađeno dečije sedište</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Ekran na dodir</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kožni volan</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Volan u kombinaciji drvo/koža</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Grejanje volana</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Elektro zatvaranje prtljažnika</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Zavesice na zadnjim prozorima</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Privlačenje vrata pri zatvaranju</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">USB</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Paljenje bez ključa</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Hard disk</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Ventilacija sedišta</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Vazdušno vešanje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Ambijentalno osvetljenje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Subwoofer</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">MP3</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Digitalni radio</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Utilnica od 12V</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Elektro otvaranje prtljažnika</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Zaključavanje diferencijala</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Otvor za skije</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Podešavanje volana po visini</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Ostava sa hlađenjem</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Držači za čaše</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Ručice za menjanje brzina na volanu</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Retrovizor se obara pri rikvercu</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Automatsko zatamnjivanje retrovizora</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Rezervni točak</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Indikator niskog pritiska u gumama</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Keramičke kočnice</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Elektronska ručna kočnica</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Asistencija za kretanje na uzbrdici</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">AUX konekcija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Modovi vožnje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Postolje za bežično punjenje telefona</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Apple CarPlay</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Android Auto</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Autonomna vožnja</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Emisiona klasa motora</option>
                    <option value="">Euro 1</option>
                    <option value="">Euro 2</option>
                    <option value="">Euro 3</option>
                    <option value="">Euro 4</option>
                    <option value="">Euro 5</option>
                    <option value="">Euro 6</option>
                    <option value="">Euro 7</option>
                </select>
            </div>
        </div>
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Odaberi plivajući zamajac</option>
                    <option value="">Sa plivajućim zamajcem</option>
                    <option value="">Bez plivajućeg zamajca</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Pogon</option>
                    <option value="">Prednji</option>
                    <option value="">Zadnji</option>
                    <option value="">4x4</option>
                    <option value="">4x4 reduktor</option>
                </select>
            </div>
        </div>
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Broj vrata</option>
                    <option value="">2/3 vrata</option>
                    <option value="">4/5 vrata</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Broj sedišta</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                </select>
            </div>
        </div>
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Strana volana</option>
                    <option value="">Levi volan</option>
                    <option value="">Desni volan</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Boja</option>
                    <option value="">Bela</option>
                    <option value="">Bež</option>
                    <option value="">Bordo</option>
                    <option value="">Braon</option>
                    <option value="">Crna</option>
                    <option value="">Crvena</option>
                    <option value="">Kameleon</option>
                    <option value="">Krem</option>
                    <option value="">Ljubičasta</option>
                    <option value="">Plava</option>
                    <option value="">Siva</option>
                    <option value="">Smeđa</option>
                    <option value="">Srebrna</option>
                    <option value="">Tirkiz</option>
                    <option value="">Teget</option>
                    <option value="">Zelena</option>
                    <option value="">Žuta</option>
                </select>
            </div>
        </div>
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Materijal enterijera</option>
                    <option value="">Štof</option>
                    <option value="">Prirodna koža</option>
                    <option value="">Kombinovana koža</option>
                    <option value="">Velur</option>
                    <option value="">Drugo</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Boja enterijera</option>
                    <option value="">Crna</option>
                    <option value="">Bež</option>
                    <option value="">Smeđa</option>
                    <option value="">Siva</option>
                    <option value="">Druga</option>
                </select>
            </div>
        </div>
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Oštećenje</option>
                    <option value="">Nije oštećen</option>
                    <option value="">Oštećen - u voznom stanju</option>
                    <option value="">Oštećen - nije u voznom stanju</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Klima</option>
                    <option value="">Nema klimu</option>
                    <option value="">Manuelna klima</option>
                    <option value="">Automatska klima</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Poreklo vozila</option>
                    <option value="">Domaće tablice</option>
                    <option value="">Na ime kupca</option>
                    <option value="">Strane tablice</option>
                </select>
            </div>
        </div>
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Broj šasije</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Airbag za vozača</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Airbag za suvozača</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Bočni airbag</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Child lock</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ABS</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ESP</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ASR</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Alarm</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kodiran ključ</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Blokada motora</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Centralno zaklučavanje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Mehanička zaštita</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Ulazak bez ključa</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Asistencija praćenja trake</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Senzor mrtvog ugla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">OBD zaštita</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Vazdušni jastuci za kolena</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Automatsko kočenje</label>
            </div>
        </div>
    </div>

</div>