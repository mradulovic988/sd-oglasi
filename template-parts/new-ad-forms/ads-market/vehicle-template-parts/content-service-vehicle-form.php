<div class="KombiIDostavnaVozila">
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
                    <option value="">Adria</option>
                    <option value="">Algema</option>
                    <option value="">Barkas</option>
                    <option value="">Chevrolet</option>
                    <option value="">Chrysler</option>
                    <option value="">Citroen</option>
                    <option value="">Dacia</option>
                    <option value="">Daewoo</option>
                    <option value="">DAF</option>
                    <option value="">DFSK</option>
                    <option value="">Dodge</option>
                    <option value="">Dongfeng Sokon</option>
                    <option value="">Fiat</option>
                    <option value="">Ford</option>
                    <option value="">FUSO</option>
                    <option value="">GAC Gonow</option>
                    <option value="">GAZ</option>
                    <option value="">GMC</option>
                    <option value="">Hako</option>
                    <option value="">Hanomag</option>
                    <option value="">Hyundai</option>
                    <option value="">Ifor Williams</option>
                    <option value="">IMV</option>
                    <option value="">Intrall</option>
                    <option value="">Isuzu</option>
                    <option value="">Iveco</option>
                    <option value="">Kia</option>
                    <option value="">Krone</option>
                    <option value="">Ladog</option>
                    <option value="">MAN</option>
                    <option value="">Mazda</option>
                    <option value="">Mercedes-Benz</option>
                    <option value="">Mitsubishi</option>
                    <option value="">Multicar</option>
                    <option value="">Nissan</option>
                    <option value="">Opel</option>
                    <option value="">Peugeot</option>
                    <option value="">Piaggio</option>
                    <option value="">Pinzgauer</option>
                    <option value="">Renault</option>
                    <option value="">Robur</option>
                    <option value="">Ruthmann</option>
                    <option value="">Scania</option>
                    <option value="">Schmidt</option>
                    <option value="">Seat</option>
                    <option value="">Škoda</option>
                    <option value="">Ssang Yong</option>
                    <option value="">Steyr</option>
                    <option value="">Suzuki</option>
                    <option value="">TAM</option>
                    <option value="">Toyota</option>
                    <option value="">Unimog</option>
                    <option value="">Volvo</option>
                    <option value="">VW</option>
                    <option value="">Zastava</option>
                    <option value="">ZIL</option>
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
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Gorivo*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Prešao (km)*</label>
                <input type="text" id="" class="mls-field" name="">
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
                <label for="">Snaga motora (KW)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Snaga motora (KS)*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Menjač*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Karoserija*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Prodavac*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Tip*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
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
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Strane volana*</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Levi volan</option>
                    <option value="">Desni volan</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
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
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Max nosivost*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Boja vozila</label>
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
    </div>
    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Pogon*</label>
                <input type="text" id="" class="mls-field" name="">
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Vešanje</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Oštećenje vozila</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Nije oštećen</option>
                    <option value="">Oštećen - u voznom stanju</option>
                    <option value="">Oštećen - nije u voznom stanju</option>
                </select>
            </div>
        </div>
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
    </div>
    <div class="mls-row-form">
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
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Zemlja uvoza</label>
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
                <label for="" class="mls-mr-10">Airbag</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ABS</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ESP</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ASR</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">DSC</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Alarm</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kodirani ključ</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Centralna brava</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Airbag</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ABS</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ESP</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ASR</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">DSC</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Alarm</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kodirani ključ</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Centralna brava</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Putni računar</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Servo volan</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Tonirana stakla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Šiber</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Tonirana stakla</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Multifunkcionalni volan</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Daljinsko zaključavanje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Električni podizači stakala</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Senzori za kišu</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Krovni nosač</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kran</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kuka za vuču</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Navigacija</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">USB</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Radio/Kasetofon</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Radio/CD</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Webasto</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Zaštita tovarnog prostora</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Webasto</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Zaštita tovarnog prostora</label>
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

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Restauiran</label>
            </div>
        </div>
    </div>


</div>