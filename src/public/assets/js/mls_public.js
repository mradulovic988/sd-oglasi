'use strict';

/**
 * Registration page
 */

if (document.body.classList.contains('page-id-43')) {

    const password = document.getElementById("mls-password");
    const confirmPassword = document.getElementById("mls-confirm-password");

    const passwordCompany = document.getElementById("mls-password-company");
    const confirmPasswordCompany = document.getElementById("mls-confirm-password-company");

    // Validation password for persons
    const validatePasswordPerson = () => {
        password.value !== confirmPassword.value ? confirmPassword.setCustomValidity("Lozinke se ne podudaraju.") : confirmPassword.setCustomValidity('');
    }
    password.onchange = validatePasswordPerson;
    confirmPassword.onkeyup = validatePasswordPerson;

    // Validation password for companies
    const validatePasswordCompany = () => {
        passwordCompany.value !== confirmPasswordCompany.value ? confirmPasswordCompany.setCustomValidity("Lozinke se ne podudaraju.") : confirmPasswordCompany.setCustomValidity('');
    }
    passwordCompany.onchange = validatePasswordCompany;
    confirmPasswordCompany.onkeyup = validatePasswordCompany;

    /**
     * Form validation - email
     *
     * @param element HTML targetted element
     */
    const emailRegValidation = element => {
        document.querySelector(element).addEventListener('change', () => {
            const regularExpression = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            if (document.querySelector(element).value.match(regularExpression)) {
                document.querySelector(element).classList.remove('mls-email-danger');
            } else {
                document.querySelector(element).classList.add('mls-email-danger');
                document.querySelector(element).value = '';
            }
        });
    };

    emailRegValidation('#mls-email');
    emailRegValidation('#mls-email-company');
}

/**
 * If the user is logged in
 */
if (document.body.classList.contains('logged-in')) {

    // Toggle top dropdown menu
    const topMenu = document.querySelector('#mls-logged-in-top-menu');
    const topMenuWrap = document.querySelector('#mls-dropdown-wrap');

    topMenu.addEventListener('mouseenter', () => topMenuWrap.style.display = 'block');
    topMenuWrap.addEventListener('mouseleave', () => topMenuWrap.style.display = 'none');

    // Dropdown left menu on My account page
    if (document.body.classList.contains('woocommerce-account')) {

        const MyDataDeclarationField = document.querySelector('.woocommerce-MyAccount-navigation-link--moji-podaci');
        const styleAttribute = [
            document.querySelector('.woocommerce-MyAccount-navigation-link--osnovni-podaci'),
            document.querySelector('.woocommerce-MyAccount-navigation-link--deklaracija'),
            document.querySelector('.woocommerce-MyAccount-navigation-link--customer-logout'),
            document.querySelector('.woocommerce-MyAccount-navigation-link--moje-poruke')
        ];

        // If element has a class is-active display it
        for (let i = 0; i < styleAttribute.length; i++) {
            styleAttribute[i].classList.contains('is-active') ? styleAttribute[i].style.display = 'block' : undefined;
        }

        // Show all elements on mouse hover
        MyDataDeclarationField.addEventListener('mouseenter', () => {
            for (let i = 0; i < styleAttribute.length; i++) styleAttribute[i].style.display = 'block';
        });

        // Hide all elements and skip the element with is-active class
        document.querySelector('nav.woocommerce-MyAccount-navigation').addEventListener('mouseleave', () => {
            for (let i = 0; i < styleAttribute.length; i++) {
                if (styleAttribute[i].classList.contains('is-active')) continue;
                styleAttribute[i].style.display = 'none';
            }
        });
    }

    /**
     * Declaration form copying name and last name on guarantee field
     */
    if (document.querySelector('#mls-declaration-person')) {
        document.querySelector('#mls-declaration-person-firstname').addEventListener('change', () => {
            let guaranteeWhoName = document.querySelector('span#mls-guarantee-who-name');

            guaranteeWhoName.innerHTML = '';
            guaranteeWhoName.innerHTML += document.querySelector('#mls-declaration-person-firstname').value;
        });

        document.querySelector('#mls-declaration-person-lastname').addEventListener('change', () => {
            let guaranteeWhoLastName = document.querySelector('span#mls-guarantee-who-lastname');

            guaranteeWhoLastName.innerHTML = '';
            guaranteeWhoLastName.innerHTML += document.querySelector('#mls-declaration-person-lastname').value;
        });
    }

    /**
     * Choose type of form for adding a new ad
     */
    if (document.body.classList.contains('page-id-151')) {
        /**
         * Toggle tabs on form Naslovna
         *
         * @type {Element}
         */
        const tabs = document.querySelector(".mls-choose-form-wrapper");
        const tabButton = document.querySelectorAll(".mls-choose-form");
        const contents = document.querySelectorAll(".mls-content-form");

        tabs.onclick = e => {
            const id = e.target.dataset.id;
            if (id) {
                tabButton.forEach(btn => {
                    btn.classList.remove("active");
                });
                e.target.classList.add("active");

                contents.forEach(content => {
                    content.classList.remove("active");
                });
                const element = document.getElementById(id);
                element.classList.add("active");
            }
        }

        /**
         * Toggle tabs on form Jobs
         *
         * @type {Element}
         */
        const tabsJobs = document.querySelector(".mls-choose-form-wrapper-jobs");
        const tabButtonJobs = document.querySelectorAll(".mls-choose-form-jobs");
        const contentsJobs = document.querySelectorAll(".mls-content-form-jobs");

        tabsJobs.onclick = e => {
            const idJobs = e.target.dataset.idjobs;
            if (idJobs) {
                tabButtonJobs.forEach(btn => {
                    btn.classList.remove("active");
                });
                e.target.classList.add("active");

                contentsJobs.forEach(content => {
                    content.classList.remove("active");
                });
                const elementJobs = document.getElementById(idJobs);
                elementJobs.classList.add("active");
            }
        }

        /**
         * Disable field on click
         */
        document.querySelector('input#mls-hide-location').addEventListener('click', () => {
            let getDisableField = document.querySelectorAll('.mls-field.mls-disable');
            for (let i = 0; i < getDisableField.length; i++) {
                getDisableField[i].disabled === false ? getDisableField[i].disabled = true : getDisableField[i].disabled = false;
            }

        });
    }

    /**
     * Toggle between categories and the rest of the form for the Home page ads
     */
    if (document.querySelector('#mls-first-load')) {
        document.querySelector('#mls-next-to-second-load').addEventListener('click', () => {
            document.querySelector('#mls-first-load').style.display = 'none';
            document.querySelector('#mls-third-load').style.display = 'none';
            document.querySelector('#mls-second-load').style.display = 'block';
        });

        document.querySelector('#mls-back-to-first-load').addEventListener('click', () => {
            document.querySelector('#mls-first-load').style.display = 'block';
            document.querySelector('#mls-second-load').style.display = 'none';
            document.querySelector('#mls-third-load').style.display = 'none';
        });

        document.querySelector('#mls-back-to-second-load').addEventListener('click', () => {
            document.querySelector('#mls-first-load').style.display = 'none';
            document.querySelector('#mls-second-load').style.display = 'block';
            document.querySelector('#mls-third-load').style.display = 'none';
        });

        if (document.querySelector('.mls-field')) {
            const ifRequired = document.querySelectorAll('.mls-field');

            document.querySelector('input[name="mls-home-form-submit"]').addEventListener('click', e => {
                for (let i = 0; i < ifRequired.length; i++) {
                    if (ifRequired[i].hasAttribute('required') && ifRequired[i].value == '') {
                        e.preventDefault();
                        alert('Popunite sva neophodna polja koja su obeležena ( * ) na prethodnoj strani.');
                        break;
                    }
                }
            });

            document.querySelector('#mls-next-to-third-load').addEventListener('click', () => {
                document.querySelector('#mls-first-load').style.display = 'none';
                document.querySelector('#mls-second-load').style.display = 'none';
                document.querySelector('#mls-third-load').style.display = 'block';
            });
        }

        /**
         * Toggle between categories and the rest of the form for the Jobs page ads
         */
        if (document.querySelector('#mls-first-load-jobs')) {
            document.querySelector('#mls-next-to-second-load-jobs').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs').style.display = 'none';
                document.querySelector('#mls-third-load-jobs').style.display = 'none';
                document.querySelector('#mls-second-load-jobs').style.display = 'block';
            });

            document.querySelector('#mls-back-to-first-load-jobs').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs').style.display = 'block';
                document.querySelector('#mls-second-load-jobs').style.display = 'none';
                document.querySelector('#mls-third-load-jobs').style.display = 'none';
            });

            document.querySelector('#mls-back-to-second-load-jobs').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs').style.display = 'none';
                document.querySelector('#mls-second-load-jobs').style.display = 'block';
                document.querySelector('#mls-third-load-jobs').style.display = 'none';
            });

            document.querySelector('#mls-next-to-third-load-jobs').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs').style.display = 'none';
                document.querySelector('#mls-second-load-jobs').style.display = 'none';
                document.querySelector('#mls-third-load-jobs').style.display = 'block';
            });
        }

        /**
         * Toggle between categories and the rest of the form for the Jobs page ads
         */
        if (document.querySelector('#mls-first-load-jobs-buy')) {
            document.querySelector('#mls-next-to-second-load-jobs-buy').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs-buy').style.display = 'none';
                document.querySelector('#mls-third-load-jobs-buy').style.display = 'none';
                document.querySelector('#mls-second-load-jobs-buy').style.display = 'block';
            });

            document.querySelector('#mls-back-to-first-load-jobs-buy').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs-buy').style.display = 'block';
                document.querySelector('#mls-second-load-jobs-buy').style.display = 'none';
                document.querySelector('#mls-third-load-jobs-buy').style.display = 'none';
            });

            document.querySelector('#mls-back-to-second-load-jobs-buy').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs-buy').style.display = 'none';
                document.querySelector('#mls-second-load-jobs-buy').style.display = 'block';
                document.querySelector('#mls-third-load-jobs-buy').style.display = 'none';
            });

            document.querySelector('#mls-next-to-third-load-jobs-buy').addEventListener('click', () => {
                document.querySelector('#mls-first-load-jobs-buy').style.display = 'none';
                document.querySelector('#mls-second-load-jobs-buy').style.display = 'none';
                document.querySelector('#mls-third-load-jobs-buy').style.display = 'block';
            });

        }

        /**
         * Toggle between categories and the rest of the form for the Ads page ads
         */
        if (document.querySelector('#mls-first-load-ads')) {
            document.querySelector('#mls-next-to-second-load-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-ads').style.display = 'none';
                document.querySelector('#mls-third-load-ads').style.display = 'none';
                document.querySelector('#mls-second-load-ads').style.display = 'block';
            });

            document.querySelector('#mls-back-to-first-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-ads').style.display = 'block';
                document.querySelector('#mls-second-load-ads').style.display = 'none';
                document.querySelector('#mls-third-load-ads').style.display = 'none';
            });

            document.querySelector('#mls-back-to-second-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-ads').style.display = 'none';
                document.querySelector('#mls-second-load-ads').style.display = 'block';
                document.querySelector('#mls-third-load-ads').style.display = 'none';
            });

            document.querySelector('#mls-next-to-third-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-ads').style.display = 'none';
                document.querySelector('#mls-second-load-ads').style.display = 'none';
                document.querySelector('#mls-third-load-ads').style.display = 'block';
            });

        }

        /**
         * Toggle between categories and the rest of the form for the Market Ads page ads
         */
        if (document.querySelector('#mls-first-load-market-ads')) {
            document.querySelector('#mls-next-to-second-load-market-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-market-ads').style.display = 'none';
                document.querySelector('#mls-third-load-market-ads').style.display = 'none';
                document.querySelector('#mls-second-load-market-ads').style.display = 'block';
            });

            document.querySelector('#mls-back-to-first-market-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-market-ads').style.display = 'block';
                document.querySelector('#mls-second-load-market-ads').style.display = 'none';
                document.querySelector('#mls-third-load-market-ads').style.display = 'none';
            });

            document.querySelector('#mls-back-to-second-market-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-market-ads').style.display = 'none';
                document.querySelector('#mls-second-load-market-ads').style.display = 'block';
                document.querySelector('#mls-third-load-market-ads').style.display = 'none';
            });

            document.querySelector('#mls-next-to-third-market-ads').addEventListener('click', () => {
                document.querySelector('#mls-first-load-market-ads').style.display = 'none';
                document.querySelector('#mls-second-load-market-ads').style.display = 'none';
                document.querySelector('#mls-third-load-market-ads').style.display = 'block';
            });

        }

        /**
         * Getting values from the category list on Sell page to the hidden input field
         *
         * @type {NodeListOf<Element>}
         */
        const homeCategoryListSell = document.querySelectorAll('#mls-sell-category-terms');
        let prevStyleSell = 0;
        for (let i = 0; i < homeCategoryListSell.length; i++) {
            homeCategoryListSell[i].addEventListener('click', () => {
                homeCategoryListSell[prevStyleSell].removeAttribute('style');
                homeCategoryListSell[i].setAttribute('style', 'background: #3d5b9a;color: #fff;')
                prevStyleSell = i;

                let getClassNameSell = homeCategoryListSell[i].className;
                document.querySelector('#mls-get-categories').value = getClassNameSell;
                document.querySelector('#mls-next-to-second-load').style.display = 'block';
            });
        }

        /**
         * Getting values from the category list on Home page to the hidden input field
         */
        const homeCategoryList = document.querySelectorAll('#mls-category-terms');
        let prevStyle = 0;
        for (let i = 0; i < homeCategoryList.length; i++) {
            homeCategoryList[i].addEventListener('click', () => {
                homeCategoryList[prevStyle].removeAttribute('style');
                homeCategoryList[i].setAttribute('style', 'background: #3d5b9a;color: #fff;')
                prevStyle = i;

                let getClassName = homeCategoryList[i].className;
                document.querySelector('#mls-get-categories').value = getClassName;
                document.querySelector('#mls-next-to-second-load').style.display = 'block';
            });
        }

        /**
         * Getting values from the category list on Buy page to the hidden input field
         */
        const homeCategoryListBuy = document.querySelectorAll('#mls-buy-category-terms');
        let prevStyleBuy = 0;
        for (let i = 0; i < homeCategoryListBuy.length; i++) {
            homeCategoryListBuy[i].addEventListener('click', () => {
                homeCategoryListBuy[prevStyleBuy].removeAttribute('style');
                homeCategoryListBuy[i].setAttribute('style', 'background: #3d5b9a;color: #fff;')
                prevStyleBuy = i;

                let getClassNameBuy = homeCategoryListBuy[i].className;
                document.querySelector('#mls-get-categories').value = getClassNameBuy;
                document.querySelector('#mls-next-to-second-load').style.display = 'block';
            });
        }
    }

    /**
     * Edit Ads Popup
     */
    if (document.querySelector('.mls-taxonomy-logo-wrapper')) {
        const modal = document.querySelector('#mls-mymodal');
        const openBtn = document.querySelectorAll('#mls-open-modal');
        const closeBtn = document.querySelector('.mls-close');


        // for (let i = 0; i < openBtn.length; i++) {
        //     openBtn[i].addEventListener('click', () => modal.style.display = 'block');
        //     closeBtn.addEventListener('click', () => location.reload());
        // }

        // const getValues = document.querySelectorAll('#mls-open-modal');
        // for (let i = 0; i < getValues.length; i++) {
        //     getValues[i].addEventListener('click', () => {
        //         let values = getValues[i].value;
        //         let setToDiv = document.querySelector('#mls-post-id');
        //         setToDiv.value += values;
        //
        //         // document.cookie = `get_the_id=${values}`;
        //     });
        // }

    }

    // Toggle checkbox fields on Promotion page
    if (document.querySelector('.mls-toggle-me')) {
        Array.from(document.querySelectorAll('.mls-promotion-field')).map(function (item, item2) {
            item.onchange = function () {
                if (this.checked) {
                    this.checked = true;
                    Array.from(document.querySelectorAll('.mls-promotion-field')).map(function (subitem) {
                        subitem.checked = false;
                    });
                    this.checked = true;
                }
            }
        });
    }

    if (document.querySelector('#mls-third-load')) {

        /**
         * Get selected days value in promotion
         *
         * @param e {string} Element of the select field
         * @param p {string} Element for price field
         * @param s {string} Seven days
         * @param f {string} Fiftheen days
         * @param t {string} Third days
         */
        const toggleBetweenSelectDays = function (e, p, s, f, t) {
            const getSelectFreeValues = document.querySelector(e);
            const priceField = document.querySelector(p);

            getSelectFreeValues.addEventListener('change', function () {
                switch (this.value) {
                    case '7':
                        return priceField.innerHTML = s;
                        break;
                    case '15':
                        return priceField.innerHTML = f;
                        break;
                    case '30':
                        return priceField.innerHTML = t;
                        break;
                    default:
                        return console.log('You didn\'t choose proper day');
                }
            });
        }

        // Toggle pricing on the single promotion
        toggleBetweenSelectDays('#mls-promotion-free-days', '.mls-promotion-free-span-price', '', '', '');
        toggleBetweenSelectDays('#mls-promotion-priority-days', '.mls-promotion-priority-span-price', '', '100,00 RSD', '200,00 RSD');
        toggleBetweenSelectDays('#mls-promotion-standard-days', '.mls-promotion-standard-span-price', '', '150,00 RSD', '250,00 RSD');
        toggleBetweenSelectDays('#mls-promotion-lead-days', '.mls-promotion-lead-span-price', '', '550,00 RSD', '1000,00 RSD');
        toggleBetweenSelectDays('#mls-promotion-diamant-days', '.mls-promotion-diamant-span-price', '750,00 RSD', '1500,00 RSD', '2000,00 RSD');

        // Toggle pricing on the total amount
        toggleBetweenSelectDays('#mls-promotion-free-days', 'span.mls-total-price', '', '', '');
        toggleBetweenSelectDays('#mls-promotion-priority-days', 'span.mls-total-price', '', '100,00 RSD', '200,00 RSD');
        toggleBetweenSelectDays('#mls-promotion-standard-days', 'span.mls-total-price', '', '150,00 RSD', '250,00 RSD');
        toggleBetweenSelectDays('#mls-promotion-lead-days', 'span.mls-total-price', '', '550,00 RSD', '1000,00 RSD');
        toggleBetweenSelectDays('#mls-promotion-diamant-days', 'span.mls-total-price', '750,00 RSD', '1500,00 RSD', '2000,00 RSD');

        /**
         * Toggle on all Promotion prices
         *
         * @param t
         * @param df
         * @param dt1
         * @param dt2
         * @param dt3
         * @param dt4
         */
        const checkedPromotion = function (t, df, dt1, dt2, dt3, dt4) {
            const totalAmount = document.querySelector('span.mls-total-price');

            document.querySelector('input#mls-promotion-free').click();
            document.querySelector(t).addEventListener('click', () => {
                if (document.querySelector(t).checked == true) {
                    document.querySelector(df).disabled = false;

                    document.querySelector(dt1).disabled = true;
                    document.querySelector(dt1).selectedIndex = 0;
                    document.querySelector('.mls-promotion-priority-span-price').textContent = '0,00 RSD';
                    totalAmount.textContent = '0,00 RSD';

                    document.querySelector(dt2).disabled = true;
                    document.querySelector(dt2).selectedIndex = 0;
                    document.querySelector('.mls-promotion-standard-span-price').textContent = '0,00 RSD';
                    totalAmount.textContent = '0,00 RSD';

                    document.querySelector(dt3).disabled = true;
                    document.querySelector(dt3).selectedIndex = 0;
                    document.querySelector('.mls-promotion-lead-span-price').textContent = '0,00 RSD';
                    totalAmount.textContent = '0,00 RSD';

                    document.querySelector(dt4).disabled = true;
                    document.querySelector(dt4).selectedIndex = 0;
                    document.querySelector('.mls-promotion-diamant-span-price').textContent = '0,00 RSD';
                    totalAmount.textContent = '0,00 RSD';
                }
            });
        }
        checkedPromotion('input#mls-promotion-free', 'select#mls-promotion-free-days', 'select#mls-promotion-priority-days', 'select#mls-promotion-standard-days', 'select#mls-promotion-lead-days', 'select#mls-promotion-diamant-days'); // Free promotion checked
        checkedPromotion('input#mls-promotion-priority', 'select#mls-promotion-priority-days', 'select#mls-promotion-free-days', 'select#mls-promotion-standard-days', 'select#mls-promotion-lead-days', 'select#mls-promotion-diamant-days'); // Priority promotion checked
        checkedPromotion('input#mls-promotion-standard', 'select#mls-promotion-standard-days', 'select#mls-promotion-free-days', 'select#mls-promotion-priority-days', 'select#mls-promotion-lead-days', 'select#mls-promotion-diamant-days'); // Standard promotion checked
        checkedPromotion('input#mls-promotion-lead', 'select#mls-promotion-lead-days', 'select#mls-promotion-free-days', 'select#mls-promotion-priority-days', 'select#mls-promotion-standard-days', 'select#mls-promotion-diamant-days'); // Lead promotion checked
        checkedPromotion('input#mls-promotion-diamant', 'select#mls-promotion-diamant-days', 'select#mls-promotion-free-days', 'select#mls-promotion-priority-days', 'select#mls-promotion-standard-days', 'select#mls-promotion-lead-days'); // Diamant promotion checked
    }


    /**
     *
     */
    if (document.querySelector('#mls-additional-details-jobs')) {
        const getDetailedSection = document.querySelector('.mls-additional-details');
        document.querySelector('#mls-additional-details-jobs').addEventListener('click', () => {
            if (getDetailedSection.style.display === 'block') {
                getDetailedSection.style.display = 'none';
            } else {
                getDetailedSection.style.display = 'block';
            }
        });
    }

    /**
     * Education on Trazim posao
     */
    const addEducation = {
        getBtn: document.querySelectorAll('.mls-btn-orange'),
        getArea: document.querySelector('.mls-buy-education-wrapper'),
        educationProcess: function () {
            this.getBtn.forEach(btn => {
                btn.addEventListener('click', () => {
                    if (this.getArea.style.display == 'block') {
                        this.getArea.style.display = 'none';
                    } else {
                        this.getArea.style.display = 'block';
                    }
                });
            });
        }
    };
    addEducation.educationProcess();

    /**
     * Category order
     *
     * @type {{categories: NodeListOf<Element>, catProcessData: categoryOrder.catProcessData}}
     */
    const categoryOrder = {
        categories: document.querySelectorAll('div#mls-sell-category-terms'),
        secondLevel: document.querySelector('#mls-second-level-wrapper'),
        catProcessData: function () {
            this.categories.forEach(data => {
                data.addEventListener('click', () => {
                    let getData = data.dataset.termId;

                    if (!data.classList.contains('mls-second-level')) {
                        this.secondLevel.innerHTML = '';
                    }

                    this.categories.forEach(p => {
                        if (getData === p.dataset.parent) {
                            p.classList.add('mls-second-level');


                            let getSecondLevel = document.querySelectorAll('.mls-second-level');
                            getSecondLevel.forEach(level => {
                                if (p.classList.contains('mls-second-level')) {
                                    level.style.cssText = 'display:block';

                                    this.secondLevel.appendChild(level);
                                }
                            });
                        }
                    });

                });
            });
        }
    };

    // Hide all subcategories
    categoryOrder?.categories.forEach(cat => {
        cat.dataset.parent !== '655' ? cat.style.display = 'none' : cat.style.display = 'block';
    });
    categoryOrder?.catProcessData();

    /**
     * Category order on Ads
     *
     * @type {{secondLevel: Element, thirdLevel: Element, fourthLevel: Element, categories: NodeListOf<Element>, catProcessData: categoryOrderAds.catProcessData}}
     */
    // const categoryOrderAds = {
    //     categories: document.querySelectorAll('div#mls-ads-category-terms'),
    //     secondLevelSection: document.querySelector('#mls-ads-second-level-wrapper'),
    //     thirdLevelSection: document.querySelector('#mls-ads-third-level-wrapper'),
    //     fourthLevelSection: document.querySelector('#mls-ads-fourth-level-wrapper'),
    //     catProcessDataSecond: function () {
    //         this.categories.forEach(data => {
    //             data.addEventListener('click', () => {
    //                 let getData = data.dataset.termId;
    //
    //                 // if (!data.classList.contains('mls-second-level')) {
    //                 //     this.secondLevelSection.innerHTML = '';
    //                 // }
    //                 //
    //                 // if (!data.classList.contains('mls-third-level')) {
    //                 //     this.thirdLevelSection.innerHTML = '';
    //                 // }
    //                 //
    //                 // if (!data.classList.contains('mls-fourth-level')) {
    //                 //     this.fourthLevelSection.innerHTML = '';
    //                 // }
    //
    //                 this.categories.forEach(p => {
    //                     if (getData === p.dataset.parent) {
    //                         p.classList.add('mls-second-level');
    //
    //                         let getSecondLevel = document.querySelectorAll('.mls-second-level');
    //                         getSecondLevel.forEach(level => {
    //                             if (p.classList.contains('mls-second-level')) {
    //                                 level.style.cssText = 'display:block';
    //
    //                                 this.secondLevelSection.appendChild(level);
    //                             }
    //                            
    //                             level.addEventListener('click', () => {
    //
    //                                 let secondLevelClass = document.querySelectorAll('.mls-second-level');
    //                                 secondLevelClass.forEach(t => {
    //                                     t.classList.remove('mls-second-level');
    //                                 });
    //
    //                                 secondLevelClass.forEach(ta => {
    //                                     let d = data.dataset.termId;
    //                                     if (d !== ta.dataset.parent) {
    //                                         ta.classList.add('mls-third-level');
    //                                     }
    //                                 });
    //
    //                                 let getThirdLevel = document.querySelectorAll('.mls-third-level');
    //                                 getThirdLevel.forEach(tl => {
    //                                     if (tl.classList.contains('mls-third-level')) {
    //                                         tl.style.cssText = 'display:block';
    //
    //                                         this.thirdLevelSection.appendChild(tl);
    //                                     }
    //
    //                                     /**
    //                                      * Issue with fourth column start here
    //                                      *
    //                                      *
    //                                      */
    //                                     tl.addEventListener('click', () => {
    //
    //                                         let thirdLevelClass = document.querySelectorAll('.mls-third-level');
    //                                         thirdLevelClass.forEach(t => {
    //                                             t.classList.remove('mls-third-level');
    //                                         });
    //
    //                                         thirdLevelClass.forEach(fa => {
    //                                             let f = data.dataset.termId;
    //                                             if (f !== fa.dataset.parent) {
    //                                                 fa.classList.add('mls-fourth-level');
    //                                             }
    //                                         });
    //
    //                                         let getFourthLevel = document.querySelectorAll('.mls-fourth-level');
    //                                         getFourthLevel.forEach(fl => {
    //                                             if (fl.classList.contains('mls-fourth-level')) {
    //                                                 fl.style.cssText = 'display:block';
    //
    //                                                 this.fourthLevelSection.appendChild(fl);
    //                                             }
    //
    //                                         });
    //                                     });
    //                                     /**
    //                                      *
    //                                      *
    //                                      * Issue with fourth column end here
    //                                      */
    //
    //
    //                                 });
    //                             });
    //                         });
    //                     }
    //                 });
    //             });
    //         });
    //     }
    // };
    // categoryOrderAds?.categories.forEach(cat => {
    //     cat.dataset.parent !== '0' ? cat.style.display = 'none' : cat.style.display = 'block';
    // });
    // categoryOrderAds?.catProcessDataSecond();

    /**
     * Ads form - Sell/Buy toggle
     */
    const sellBuyToggle = {
        sell: document.querySelector('#mls-ads-sell'),
        buy: document.querySelector('#mls-ads-buy'),
        priceWrapper: document.querySelector('#mls-ads-price-wrapper'),
        sellBuyProgress: function () {
            this.sell.addEventListener('click', () => this.priceWrapper.style.display = 'block');
            this.buy.addEventListener('click', () => this.priceWrapper.style.display = 'none');
        }
    };
    if (sellBuyToggle?.sell) {
        sellBuyToggle?.sellBuyProgress();
    }

    /**
     * Market Ads form - Sell/Buy toggle
     */
    const sellBuyToggleMarket = {
        sell: document.querySelector('#mls-market-ads-sell'),
        buy: document.querySelector('#mls-market-ads-buy'),
        priceWrapper: document.querySelector('#mls-market-ads-price-wrapper'),
        sellBuyProgressMarket: function () {
            this.sell.addEventListener('click', () => this.priceWrapper.style.display = 'block');
            this.buy.addEventListener('click', () => this.priceWrapper.style.display = 'none');
        }
    };
    if (sellBuyToggleMarket?.sell) {
        sellBuyToggleMarket?.sellBuyProgressMarket();
    }

    /**
     * Toggle between chosen category and part on the form on Market
     *
     * @type {{process: catSwitcher.process, field: Element}}
     */
    const catSwitcher = {
        field: document.querySelector('.postform'),
        process: function () {
            if (this.field) {
                this.field.addEventListener('change', () => {
                    let fieldValue = this.field
                        .options[this.field.selectedIndex]
                        .textContent
                        .replace(/\s/g, '');

                    let catResult = document.querySelector(`.${fieldValue}`);
                    catResult ? catResult.style.display = 'block' : undefined;
                });
            }
        },
    };

    catSwitcher.process();

    const carSwitcher = {
        field: document.querySelector('.mls-car-select'),
        refresh: document.querySelectorAll('.mls-refresh'),
        process: function () {
            if (this.field) {
                this.field.addEventListener('change', () => {
                    let fieldValue = this.field
                        .options[this.field.selectedIndex]
                        .textContent
                        .replace(/\s/g, '');

                    let carResult = document.querySelector(`.${fieldValue}`);

                    this.refresh.forEach(ref => ref.style.display = 'none');

                    if (carResult.style.display === 'block') {
                        carResult.style.display = 'none'
                    } else {
                        carResult.style.display = 'block'
                    }
                });
            }
        },
    };

    carSwitcher.process();

    /**
     * Check if the localStorage exist and if so, refresh the page and click on the button
     *
     * @type {{btnClick: Element, process: moveBack.process, btn: Element}}
     */
    const moveBack = {
        btn: document.querySelector('.mls-back-to-first-restart'),
        btnClick: document.querySelector('.mls-check-refresh'),
        process: function () {
            if (this.btn) {
                this.btn.addEventListener('click', e => {
                    e.preventDefault();

                    localStorage.setItem('back-to-first', 'yes');
                    location.reload();
                });
            }
            localStorage.getItem('back-to-first') ? this.btnClick.click() : undefined;
            localStorage.removeItem('back-to-first');
        },
    };

    moveBack.process();
}

/**
 * Login page
 */
if (document.body.classList.contains('page-id-45')) {

    /**
     * Adding node for forget password and process it on click
     *
     * @type {string}
     */
    const html = `<a href="/moj-nalog/lost-password" id="mls-forget-password">Zaboravio si lozinku?</a>`;
    const getPlace = document.querySelector('p.login-remember');

    getPlace.innerHTML += html;
}