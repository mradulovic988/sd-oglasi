<div class="Plovila">
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
                <label for="">Marka*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value=" "></option>
                </select>
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Model*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Tip*</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Brod</option>
                    <option value="">Čamac</option>
                    <option value="">Gliser</option>
                    <option value="">Jahta</option>
                    <option value="">Jedrilica</option>
                    <option value="">Kajak</option>
                    <option value="">Kanu</option>
                    <option value="">Katamaran</option>
                    <option value="">Pasara</option>
                    <option value="">Remorker</option>
                    <option value="">Splav</option>
                    <option value="">Vodeni skuter</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Godište*</label>
                <select name="" class="mls-field" id="" required>
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
                <label for="">Dužina plovila (m)*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Širina plovila (m)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Visina plovila (m)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Vrsta motora*</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Gorivo*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
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
                <label for="">Kubikaža (cm3)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Snaga motora (kW)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Snaga motora (KS)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Gorivo*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
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
                <label for="">Kubikaža (cm3)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Snaga motora (kW)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Snaga motora (KS)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Broj radnih sati*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Materijal trupa*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Aluminijum</option>
                    <option value="">Čelik</option>
                    <option value="">Drvo</option>
                    <option value="">Guma</option>
                    <option value="">Hypalon</option>
                    <option value="">Karbon</option>
                    <option value="">Kompozitna vlakna</option>
                    <option value="">Plastika</option>
                    <option value="">Roplene</option>
                    <option value="">Ostalo</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Broj motora*</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Bez motora</option>
                    <option value="">1 motor</option>
                    <option value="">2 motora</option>
                    <option value="">3 motora</option>
                    <option value="">4 motora</option>
                    <option value="">Više od 4 motora</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Klima</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Nema klimu</option>
                    <option value="">Manuelna klima</option>
                    <option value="">Automatska klima</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Boja</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
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

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Metalik boja</label>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Oštećenje*</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Nije oštećen</option>
                    <option value="">Oštećen - u voznom stanju</option>
                    <option value="">Oštećen - nije u voznom stanju</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Plovilo je</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Stanje*</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Odlično</option>
                    <option value="">Dobro</option>
                    <option value="">Zadovoljavajuće</option>
                </select>
            </div>
        </div>

        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Poreklo</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Izaberite</option>
                    <option value="">Domaće tablice</option>
                    <option value="">Na ime kupca</option>
                    <option value="">Strane tablice</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Zemlja uvoza*</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Alarm</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Oprema za spašavanje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Cerada</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Blokobrani</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Prilazni most</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Dodatni čamac</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">VHF</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Anemometar</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Navigacija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Satelitska komunikacija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Autopilot</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Generator</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kompas</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Podvodni video sistem</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Plin</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kuhinja</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">WC</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Tuš</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Radar</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Dubinometar</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kupljen nov u Srbiji</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Garancija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Prvi vlasnik</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Servisna knjižica</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Garažiran</label>
            </div>
        </div>
    </div>


</div>