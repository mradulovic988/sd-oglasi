<div class="Motori">
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
                    <option value="">Access Motor</option>
                    <option value="">Adly</option>
                    <option value="">Aprillia</option>
                    <option value="">Artic Cat</option>
                    <option value="">Asiawing</option>
                    <option value="">Baotian</option>
                    <option value="">Benelli</option>
                    <option value="">Beta</option>
                    <option value="">BMW</option>
                    <option value="">Bullit</option>
                    <option value="">Cagiva</option>
                    <option value="">Can-am</option>
                    <option value="">CFMOTO</option>
                    <option value="">CPI</option>
                    <option value="">Daelim</option>
                    <option value="">Daytona Motors</option>
                    <option value="">Derbi</option>
                    <option value="">Dinli</option>
                    <option value="">Dongo</option>
                    <option value="">Ducati</option>
                    <option value="">Ellite Moto</option>
                    <option value="">Factory bike</option>
                    <option value="">Falcon</option>
                    <option value="">Gas Gas</option>
                    <option value="">Ganergia</option>
                    <option value="">Gilera</option>
                    <option value="">Goes</option>
                    <option value="">Harley Davidson</option>
                    <option value="">Hisun</option>
                    <option value="">Honda</option>
                    <option value="">Huaihai</option>
                    <option value="">Husaberg</option>
                    <option value="">Husqvarna</option>
                    <option value="">Hyosung</option>
                    <option value="">Indian</option>
                    <option value="">Italjet</option>
                    <option value="">Jawa</option>
                    <option value="">Jialing</option>
                    <option value="">Jonway</option>
                    <option value="">K-MOTO</option>
                    <option value="">Kawasaki</option>
                    <option value="">Kayo</option>
                    <option value="">Keeway</option>
                    <option value="">KMZ</option>
                    <option value="">KTM</option>
                    <option value="">KXD</option>
                    <option value="">Kymco</option>
                    <option value="">Lifan</option>
                    <option value="">Linhai</option>
                    <option value="">Loncin</option>
                    <option value="">Longbo</option>
                    <option value="">Longjia</option>
                    <option value="">Malaguti</option>
                    <option value="">Mondial</option>
                    <option value="">Motogrini</option>
                    <option value="">Moto Guzzi</option>
                    <option value="">MotoMania</option>
                    <option value="">Motowell</option>
                    <option value="">Moto Zeta</option>
                    <option value="">MV Agusta</option>
                    <option value="">MZ</option>
                    <option value="">Nitro</option>
                    <option value="">Nitro motors</option>
                    <option value="">NSU</option>
                    <option value="">Odes ATV</option>
                    <option value="">Orion</option>
                    <option value="">Peda</option>
                    <option value="">Peugeot</option>
                    <option value="">PGO</option>
                    <option value="">Piaggio</option>
                    <option value="">Polaris</option>
                    <option value="">Puch</option>
                    <option value="">Qingpi</option>
                    <option value="">Quadro</option>
                    <option value="">Quadro Vehicles</option>
                    <option value="">Quick</option>
                    <option value="">Rieju</option>
                    <option value="">Royal Enfield</option>
                    <option value="">Russkaja Mekhanika</option>
                    <option value="">Sachs</option>
                    <option value="">Segway</option>
                    <option value="">Shineray</option>
                    <option value="">Sky</option>
                    <option value="">SMC</option>
                    <option value="">Sprint</option>
                    <option value="">Stels</option>
                    <option value="">Sunra E-Bike</option>
                    <option value="">Suzuki</option>
                    <option value="">Sym</option>
                    <option value="">TGB</option>
                    <option value="">TM Racing</option>
                    <option value="">Tomos</option>
                    <option value="">Trio</option>
                    <option value="">Triumph</option>
                    <option value="">TVS</option>
                    <option value="">Vespa</option>
                    <option value="">WangYe</option>
                    <option value="">Yadea</option>
                    <option value="">Yamaha</option>
                    <option value="">Yamasaki</option>
                    <option value="">Yiben</option>
                    <option value="">Zontes</option>
                    <option value="">Ostalo</option>
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
                <label for="">Tip*</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">-- Izaberite --</option>
                    <option value="">Bicikli sa motorom</option>
                    <option value="">Čoper/kruzeri</option>
                    <option value="">Dirt bike</option>
                    <option value="">Enduro/Touring Enduro</option>
                    <option value="">Kombinovani/ sa dodatkom</option>
                    <option value="">Laki motori/Motorbike</option>
                    <option value="">Minibike</option>
                    <option value="">Motori</option>
                    <option value="">Naked bike</option>
                    <option value="">Quad</option>
                    <option value="">Reli/kroserice</option>
                    <option value="">Skuteri</option>
                    <option value="">Sport touring motori</option>
                    <option value="">Sportski/Super sportski</option>
                    <option value="">Streetfighteri</option>
                    <option value="">Supermoto</option>
                    <option value="">Toureri</option>
                    <option value="">Trkački</option>
                    <option value="">Ostalo</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Menjač*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Manuelni</option>
                    <option value="">Automatski</option>
                    <option value="">Poluautomatski</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Registrovan do*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
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
                <label for="">Broj cilindara*</label>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">-- Izaberite --</option>
                    <option value="">1 cilindar</option>
                    <option value="">2 cilindara</option>
                    <option value="">3 cilindara</option>
                    <option value="">4 cilindara</option>
                    <option value="">5 cilindara</option>
                    <option value="">6 cilindara</option>
                    <option value="">7 cilindara</option>
                    <option value="">8 cilindara</option>

                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="">Emisiona klasa motora*</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Euro 1</option>
                    <option value="">Euro 2</option>
                    <option value="">Euro 3</option>
                    <option value="">Euro 4</option>
                    <option value="">Euro 5</option>
                    <option value="">Euro 6</option>
                </select>
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
                <label for="">Oštećenje vozila</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Nije oštećen</option>
                    <option value="">Oštećen - u voznom stanju</option>
                    <option value="">Oštećen - nije u voznom stanju</option>
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
                <label for="">Vozilo je *</label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="" class="mls-car-select mls-field" id="" required>
                    <option value="">Novo</option>
                    <option value="">Polovno</option>
                </select>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="">Poreklo</label>
                <select name="" class="mls-car-select mls-field mls-disable" id="">
                    <option value="">Izaberite</option>
                    <option value="">Domaće tablice</option>
                    <option value="">Na ime kupca</option>
                    <option value="">Strane tablice</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Električno paljenje</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Alarm</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kick start</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">ABS</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Stalak za motor</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Slideri</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Vetrobran</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Kaciga</label>
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Cerada</label>

                <input type="checkbox" id="" class="mls-market-ads-deal" name="">
                <label for="" class="mls-mr-10">Zadnje/bočne torbe, kofer</label>
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