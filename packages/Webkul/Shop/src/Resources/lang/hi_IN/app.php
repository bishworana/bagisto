<?php

return [
    'invalid_vat_format' => 'दिए गए वैट आईडी का प्रारूप गलत है',
    'security-warning'   => 'संदिग्ध गतिविधि मिली!!!',
    'nothing-to-delete'  => 'हटाने के लिए कुछ नहीं',

    'layouts' => [
        'my-account'            => 'मेरा खाता',
        'profile'               => 'प्रोफाइल',
        'address'               => 'पता',
        'reviews'               => 'समीक्षा',
        'wishlist'              => 'इच्छा सूची',
        'orders'                => 'आदेश',
        'downloadable-products' => 'डाउनलोड करने योग्य उत्पाद',
    ],

    'common' => [
        'error'              => 'कुछ गलत हो गया है। कृपया बाद में दोबारा प्रयास करें।',
        'image-upload-limit' => 'छवि अधिकतम अपलोड आकार 2MB है',
        'no-result-found'    => 'हमें कोई रिकॉर्ड नहीं मिला।',
    ],

    'home' => [
        'page-title'          => config('app.name') . ' - Home',
        'featured-products'   => 'विशेष रुप से प्रदर्शित प्रोडक्टस',
        'new-products'        => 'नये उत्पाद',
        'verify-email'        => 'अपना ईमेल खाता सत्यापित करें',
        'resend-verify-email' => 'सत्यापन ईमेल पुनः भेजे',
    ],

    'header' => [
        'title'         => 'हेतु',
        'dropdown-text' => 'कार्ट, ऑर्डर और विशलिस्ट प्रबंधित करें',
        'sign-in'       => 'साइन इन करें',
        'sign-up'       => 'साइन अप करें',
        'account'       => 'हेतु',
        'cart'          => 'गाड़ी',
        'profile'       => 'प्रोफाइल',
        'wishlist'      => 'इच्छा सूची',
        'cart'          => 'गाड़ी',
        'logout'        => 'लॉग आउट',
        'search-text'   => 'यहां उत्पाद खोजें',
    ],

    'minicart' => [
        'view-cart' => 'की हुई खरीददारी देखो',
        'checkout'  => 'चेक आउट',
        'cart'      => 'गाड़ी',
        'zero'      => '0',
    ],

    'footer' => [
        'subscribe-newsletter' =>'न्यूज़लेटर प्राप्त करें',
        'subscribe'            => 'सदस्यता लें',
        'locale'               => 'लोकल',
        'currency'             => 'मुद्रा',
    ],

    'subscription' => [
        'unsubscribe'    => 'सदस्यता समाप्त करें',
        'subscribe'      => 'सदस्यता लें',
        'subscribed'     => 'अब आप सदस्यता ईमेल की सदस्यता ले चुके हैं।',
        'not-subscribed' => 'आप सदस्यता ईमेल की सदस्यता नहीं ले सकते, कृपया बाद में पुन: प्रयास करें।',
        'already'        => 'आप पहले से ही हमारी सदस्यता सूची की सदस्यता ले चुके हैं।',
        'unsubscribed'   => 'आप सदस्यता मेल से सदस्यता समाप्त कर चुके हैं।',
        'already-unsub'  => 'आप पहले ही सदस्यता छोड़ चुके हैं।',
        'not-subscribed' => 'त्रुटि! मेल वर्तमान में नहीं भेजा जा सकता, कृपया बाद में पुन: प्रयास करें।',
    ],

    'search' => [
        'no-results'          => 'कोई परिणाम नहीं मिला',
        'page-title'          => config('app.name') . ' - खोज',
        'found-results'       => 'खोज परिणाम मिले',
        'found-result'        => 'खोज परिणाम मिला',
        'analysed-keywords'   => 'विश्लेषण किए गए कीवर्ड',
        'image-search-option' => 'छवि खोज विकल्प',
    ],

    'reviews' => [
        'title'                     => 'शीर्षक',
        'add-review-page-title'     => 'समीक्षा जोड़ें',
        'write-review'              => 'एक समीक्षा लिखे',
        'review-title'              => 'अपनी समीक्षा को एक शीर्षक दें',
        'product-review-page-title' => 'उत्पाद समीक्षा',
        'rating-reviews'            => 'रेटिंग और समीक्षाएं',
        'submit'                    => 'प्रस्तुत',
        'delete-all'                => 'सभी समीक्षाएं सफलतापूर्वक हटा दी गई हैं',
        'ratingreviews'             => ': रेटिंग रेटिंग और: समीक्षा समीक्षा',
        'star'                      => 'तारा',
        'percentage'                => ': प्रतिशत%',
        'id-star'                   => 'तारा',
        'name'                      => 'नाम',
    ],

    'customer' => [
        'compare' => [
            'text'                  => 'तुलना करना',
            'compare_similar_items' => 'समान वस्तुओं की तुलना करें',
            'add-tooltip'           => 'सूची की तुलना करने के लिए उत्पाद जोड़ें',
            'added'                 => 'सूची की तुलना करने के लिए आइटम सफलतापूर्वक जोड़ा गया',
            'already_added'         => 'सूची की तुलना करने के लिए आइटम पहले ही जोड़ा जा चुका है',
            'removed'               => 'आइटम को तुलना सूची से सफलतापूर्वक हटा दिया गया',
            'removed-all'           => 'सभी आइटम सफलतापूर्वक तुलना सूची से हटा दिए गए',
            'confirm-remove-all'    => 'क्या आप वाकई सभी तुलना आइटम हटाना चाहते हैं?',
            'empty-text'            => "आपकी तुलना सूची में कोई आइटम नहीं है",
            'product_image'         => 'उत्पाद का चित्र',
            'actions'               => 'क्रियाएँ',
        ],

        'signup-text' => [
            'account_exists' => 'पहले से ही एक खाता है',
            'title'          => 'साइन इन करें',
        ],

        'signup-form' => [
            'page-title'                  => 'नया ग्राहक खाता बनाएँ',
            'title'                       => 'साइन अप करें',
            'firstname'                   => 'पहला नाम',
            'lastname'                    => 'अंतिम नाम',
            'email'                       => 'ईमेल',
            'password'                    => 'कुंजिका',
            'confirm_pass'                => 'पासवर्ड की पुष्टि कीजिये',
            'button_title'                => 'रजिस्टर करें',
            'agree'                       => 'इस बात से सहमत',
            'terms'                       => 'शर्तें',
            'conditions'                  => 'शर्तेँ',
            'using'                       => 'इस वेबसाइट का उपयोग करके',
            'agreement'                   => 'समझौता',
            'subscribe-to-newsletter'     => 'समाचार पत्रिका के लिए सदस्यता लें',
            'success'                     => 'खाता सफलतापूर्वक बनाया गया।',
            'success-verify'              => 'खाता सफलतापूर्वक बनाया गया, सत्यापन के लिए एक ई-मेल भेजा गया है।',
            'success-verify-email-unsent' => 'खाता सफलतापूर्वक बनाया गया, लेकिन सत्यापन ई-मेल नहीं भेजा गया।',
            'failed'                      => 'त्रुटि! आपका खाता नहीं बना सकते, कृपया बाद में पुन: प्रयास करें।',
            'already-verified'            => 'आपका खाता पहले ही सत्यापित हो चुका है या कृपया एक नया सत्यापन ईमेल फिर से भेजने का प्रयास करें।',
            'verification-not-sent'       => 'त्रुटि! सत्यापन ईमेल भेजने में समस्या, कृपया बाद में पुन: प्रयास करें।',
            'verification-sent'           => 'सत्यापन विद्युतडाक भेज दिया गया है',
            'verified'                    => 'आपका खाता सत्यापित हो गया है, अभी लॉगिन करने का प्रयास करें।',
            'verify-failed'               => 'हम आपका मेल खाता सत्यापित नहीं कर सकते।',
            'dont-have-account'           => 'आपका हमारे साथ खाता नहीं है।',
            'customer-registration'       => 'ग्राहक सफलतापूर्वक पंजीकृत',
        ],

        'login-text' => [
            'no_account' => 'खाता नहीं है',
            'title'      => 'साइन अप करें',
        ],

        'login-form' => [
            'page-title'          => 'ग्राहक लॉगिन',
            'title'               => 'साइन इन करें',
            'email'               => 'ईमेल',
            'password'            => 'कुंजिका',
            'forgot_pass'         => 'पासवर्ड भूल गए?',
            'button_title'        => 'साइन इन करें',
            'remember'            => 'मुझे याद रखें',
            'footer'              => '© कॉपीराइट: वर्ष वेबकुल सॉफ्टवेयर, सर्वाधिकार सुरक्षित',
            'invalid-creds'       => 'कृपया अपने क्रेडेंशियल जांचें और पुनः प्रयास करें।',
            'verify-first'        => 'पहले अपना ईमेल खाता सत्यापित करें।',
            'not-activated'       => 'आपका सक्रियण व्यवस्थापक अनुमोदन चाहता है',
            'resend-verification' => 'सत्यापन मेल दोबारा भेजें',
            'show-password'       => 'पासवर्ड दिखाए',
            
        ],

        'forgot-password' => [
            'title'      =>'गोपनीय शब्द पुन प्राप्त करे',
            'email'      => 'ईमेल',
            'submit'     => 'पासवर्ड रीसेट ईमेल भेजें',
            'page_title' => 'अपना कूट शब्द भूल गए ?',
        ],

        'reset-password' => [
            'title'            => 'पासवर्ड रीसेट',
            'email'            => 'पंजीकृत ईमेल',
            'password'         => 'कुंजिका',
            'confirm-password' => 'पासवर्ड की पुष्टि कीजिये',
            'back-link-title'  => 'वापस साइन इन करें',
            'submit-btn-title' => 'पासवर्ड रीसेट',
        ],

        'account' => [
            'dashboard' => 'प्रोफ़ाइल संपादित करें',
            'menu'      => 'मेन्यू',

            'general' => [
                'no'  => 'नहीं',
                'yes' => 'हां',
            ],

            'profile' => [
                'index' => [
                    'page-title' => 'प्रोफाइल',
                    'title'      => 'प्रोफाइल',
                    'edit'       => 'संपादित करें',
                ],

                'edit-success' => 'प्रोफाइल को सफलतापूर्वक अपडेट किया गया।',
                'edit-fail'    => 'त्रुटि! प्रोफ़ाइल को अद्यतन नहीं किया जा सकता, कृपया बाद में पुन: प्रयास करें।',
                'unmatch'      => 'पुराना पासवर्ड मेल नहीं खाता।',

                'fname'     => 'पहला नाम',
                'lname'     => 'अंतिम नाम',
                'gender'    => 'लिंग',
                'other'     => 'अन्य',
                'male'      => 'पुरुष',
                'female'    => 'महिला',
                'dob'       => 'जन्म की तारीख',
                'phone'     => 'फ़ोन',
                'email'     => 'ईमेल',
                'opassword' => 'पुराना पासवर्ड',
                'password'  => 'कुंजिका',
                'cpassword' => 'पासवर्ड की पुष्टि कीजिये',
                'submit'    => 'प्रोफ़ाइल को नवीनतम बनाओ',

                'edit-profile' => [
                    'title'      => 'प्रोफ़ाइल संपादित करें',
                    'page-title' => 'प्रोफ़ाइल संपादित करें',
                ],
            ],

            'address' => [
                'index' => [
                    'page-title'     => 'पता',
                    'title'          => 'पता',
                    'add'            => 'पता जोड़ें',
                    'edit'           => 'संपादित करें',
                    'empty'          => 'आपके पास यहां कोई सहेजा हुआ पता नहीं है, कृपया जोड़ें बटन पर क्लिक करके इसे बनाने का प्रयास करें।',
                    'create'         => 'पता बनाएँ',
                    'delete'         => 'हटाएं',
                    'make-default'   => 'डिफ़ॉल्ट बनाना',
                    'default'        => 'चूक जाना',
                    'contact'        => 'संपर्क करें',
                    'confirm-delete' => 'क्या आप वाकई इस पते को हटाना चाहते हैं?',
                    'default-delete' => 'डिफ़ॉल्ट पता बदला नहीं जा सकता।',
                    'enter-password' => 'अपना पासवर्ड डालें।',
                ],

                'create' => [
                    'page-title'     => 'पता जोड़ें',
                    'company_name'   => 'कंपनी का नाम',
                    'first_name'     => 'पहला नाम',
                    'last_name'      => 'अंतिम नाम',
                    'vat_id'         => 'वैट पहचान पत्र',
                    'vat_help_note'  => '[नोट: वैट आईडी के साथ देश कोड का प्रयोग करें। उदा. INV01234567891]',
                    'title'          => 'पता जोड़ें',
                    'street-address' => 'गली का पता',
                    'country'        => 'देश',
                    'state'          => 'राज्य',
                    'select-state'   => 'एक क्षेत्र, राज्य या प्रांत चुनें',
                    'city'           => 'शहर',
                    'postcode'       => 'डाक कोड',
                    'phone'          => 'फ़ोन',
                    'submit'         => 'पता सहेजें',
                    'success'        => 'पता सफलतापूर्वक जोड़ दिया गया है।',
                    'error'          => 'पता जोड़ा नहीं जा सकता।',
                ],

                'edit' => [
                    'page-title'     => 'पता संपादित करें',
                    'company_name'   => 'कंपनी का नाम',
                    'first_name'     => 'पहला नाम',
                    'last_name'      => 'अंतिम नाम',
                    'vat_id'         => 'वैट पहचान पत्र',
                    'title'          => 'पता संपादित करें',
                    'street-address' => 'गली का पता',
                    'submit'         => 'पता सहेजें',
                    'success'        => 'पता सफलतापूर्वक अपडेट किया गया।',
                ],

                'delete' => [
                    'success'        => 'पता सफलतापूर्वक हटाया गया',
                    'failure'        => 'पता हटाया नहीं जा सकता',
                    'wrong-password' => 'गलत पासवर्ड !',
                ],

                'default-address' => 'डिफ़ॉल्ट पता',
            ],

            'order' => [
                'index' => [
                    'page-title'      => 'आदेश',
                    'title'           => 'आदेश',
                    'order_id'        => 'आदेश ID',
                    'date'            => 'तारीख',
                    'status'          => 'स्थिति',
                    'total'           => 'संपूर्ण',
                    'order_number'    => 'क्रम संख्या',
                    'processing'      => 'प्रसंस्करण',
                    'completed'       => 'पुरा होना',
                    'canceled'        => 'रद्द',
                    'closed'          => 'बंद किया हुआ',
                    'pending'         => 'लंबित',
                    'pending-payment' => 'लंबित भुगतान',
                    'fraud'           => 'धोखा',
                ],

                'view' => [
                    'page-tile'           => 'ऑर्डर #: ऑर्डर_आईडी',
                    'info'                => 'जानकारी',
                    'placed-on'           => 'पर रखा',
                    'products-ordered'    => 'उत्पाद ऑर्डर किए गए',
                    'invoices'            => 'चालान',
                    'shipments'           => 'लदान',
                    'SKU'                 => 'एसकेयू',
                    'product-name'        => 'नाम',
                    'qty'                 => 'मात्रा',
                    'item-status'         => 'आइटम स्थिति',
                    'item-ordered'        => 'आदेश दिया गया (:qty_ordered)',
                    'item-invoice'        => 'चालान (:qty_invoiced)',
                    'item-shipped'        => 'भेज दिया गया (:qty_shipped)',
                    'item-canceled'       => 'रद्द (:qty_canceled)',
                    'item-refunded'       => 'धनवापसी की गई (:qty_refunded)',
                    'price'               => 'कीमत',
                    'total'               => 'संपूर्ण',
                    'subtotal'            => 'उपयोग',
                    'shipping-handling'   => 'शिपिंग और हैंडलिंग',
                    'tax'                 => 'कर',
                    'discount'            => 'छूट',
                    'tax-percent'         => 'कर प्रतिशत',
                    'tax-amount'          => 'कर राशि',
                    'discount-amount'     => 'छूट राशि',
                    'grand-total'         => 'कुल योग',
                    'total-paid'          => 'कुल भुगतान हो गया',
                    'total-refunded'      => 'कुल धनवापसी',
                    'total-due'           => 'कुल बचे',
                    'shipping-address'    => 'शिपिंग पता',
                    'billing-address'     => 'बिल भेजने का पता',
                    'shipping-method'     => 'शिपिंग का तरीका',
                    'payment-method'      => 'भुगतान विधि',
                    'individual-invoice'  => 'चालान #: चालान_आईडी',
                    'individual-shipment' => 'शिपमेंट #:शिपमेंट_आईडी',
                    'print'               => 'प्रिंट',
                    'invoice-id'          => 'चालान आईडी',
                    'order-id'            => 'आदेश ID',
                    'order-date'          => 'आर्डर की तारीख',
                    'invoice-date'        => 'चालान की तारीख',
                    'payment-terms'       => 'भुगतान की शर्तें',
                    'bill-to'             => 'बिल प्राप्तकर्ता',
                    'ship-to'             => 'यहां भेजें',
                    'contact'             => 'संपर्क करें',
                    'refunds'             => 'रिफंड',
                    'individual-refund'   => 'धनवापसी #: धनवापसी_आईडी',
                    'adjustment-refund'   => 'समायोजन वापसी',
                    'adjustment-fee'      => 'समायोजन शुल्क',
                    'cancel-btn-title'    => 'रद्द करें',
                    'tracking-number'     => 'ट्रैकिंग नंबर',
                    'cancel-confirm-msg'  => 'क्या आप वाकई इस आदेश को रद्द करना चाहते हैं?',
                ],
            ],

            'wishlist' => [
                'page-title'           => 'इच्छा सूची',
                'title'                => 'इच्छा सूची',
                'deleteall'            => 'सभी हटा दो',
                'confirm-delete-all'   => 'क्या आप वाकई सभी इच्छा सूची हटाना चाहते हैं?',
                'moveall'              => 'सभी उत्पादों को कार्ट में ले जाएं',
                'move-to-cart'         => 'गाड़ी को चलाना',
                'error'                => 'अज्ञात समस्याओं के कारण उत्पाद को विशलिस्ट में नहीं जोड़ा जा सकता, कृपया बाद में चेकबैक करें',
                'add'                  => 'आइटम सफलतापूर्वक इच्छा सूची में जोड़ा गया',
                'remove'               => 'आइटम को इच्छा सूची से सफलतापूर्वक हटा दिया गया',
                'add-wishlist-text'    => 'इच्छा सूची में उत्पाद जोड़ें',
                'remove-wishlist-text' => 'इच्छा सूची से उत्पाद निकालें',
                'moved'                => 'आइटम सफलतापूर्वक कार्ट में ले जाया गया',
                'option-missing'       => 'उत्पाद विकल्प गायब हैं, इसलिए आइटम को इच्छा सूची में नहीं ले जाया जा सकता है।',
                'move-error'           => 'आइटम को इच्छा सूची में नहीं ले जाया जा सकता, कृपया बाद में पुन: प्रयास करें',
                'success'              => 'आइटम सफलतापूर्वक इच्छा सूची में जोड़ा गया',
                'failure'              => 'आइटम इच्छा सूची में नहीं जोड़ा जा सकता, कृपया बाद में पुन: प्रयास करें',
                'already'              => 'आपकी इच्छा सूची में पहले से मौजूद आइटम',
                'removed'              => 'आइटम को इच्छा सूची से सफलतापूर्वक हटा दिया गया',
                'remove-fail'          => 'आइटम को इच्छा सूची से हटाया नहीं जा सकता, कृपया बाद में पुन: प्रयास करें',
                'empty'                => 'आपकी इच्छा सूची में कोई आइटम नहीं है',
                'remove-all-success'   => 'आपकी इच्छा सूची से सभी आइटम हटा दिए गए हैं',
                'save'                 => 'सहेजें',
                'share'                => 'साझा करना',
                'share-wishlist'       => 'शेयर विशलिस्ट',
                'wishlist-sharing'     => 'विशलिस्ट शेयरिंग',
                'shared-link'          => 'साझा लिंक',
                'visibility'           => 'दृश्यता',
                'public'               => 'जनता',
                'private'              => 'निजी',
                'enable'               => 'सक्षम',
                'disable'              => 'अक्षम करना',
                'customer-name'        => ':name\'s साझा विशलिस्ट',
                'enable-wishlist-info' => 'लिंक प्राप्त करने के लिए इच्छा सूची साझाकरण सक्षम करें।',
                'update-message'       => 'साझा इच्छा-सूची सेटिंग सफलतापूर्वक अपडेट की गईं',
            ],

            'downloadable_products' => [
                'title'               => 'डाउनलोड करने योग्य उत्पाद',
                'order-id'            => 'आदेश ID',
                'date'                => 'तारीख',
                'name'                => 'शीर्षक',
                'status'              => 'स्थिति',
                'pending'             => 'लंबित',
                'available'           => 'उपलब्ध',
                'expired'             => 'समाप्त',
                'remaining-downloads' => 'शेष डाउनलोड',
                'unlimited'           => 'असीमित',
                'download-error'      => 'डाउनलोड लिंक की समय सीमा समाप्त हो गई है।',
                'payment-error'       => 'इस डाउनलोड के लिए भुगतान नहीं किया गया है।',
            ],

            'review' => [
                'index' => [
                    'title'      => 'समीक्षा',
                    'page-title' => 'समीक्षा',

                ],

                'view' => [
                    'page-tile' => 'समीक्षा #:आईडी',
                ],

                'delete' => [
                    'confirmation-message' => 'क्या आप इस समीक्षा को मिटाना चाहते हैं?',
                ],

                'delete-all' => [
                    'title'                => 'सभी हटा दो',
                    'confirmation-message' => 'क्या आप वाकई सभी समीक्षाओं को हटाना चाहते हैं?',
                ],
            ],
        ],
    ],

    'products' => [
        'layered-nav-title'        => 'द्वारा खरीदारी',
        'price-label'              => 'जितना कम',
        'remove-filter-link-title' => 'सभी साफ करें',
        'filter-to'                => 'प्रति',
        'sort-by'                  => 'इसके अनुसार क्रमबद्ध करें',
        'from-a-z'                 => 'ए-जेड से',
        'from-z-a'                 => 'जेड-ए से',
        'newest-first'             => 'नवीनतम पहले',
        'oldest-first'             => 'सबसे पुराना पहले',
        'cheapest-first'           => 'सबसे सस्ता पहला',
        'expensive-first'          => 'महंगा पहले',
        'show'                     => 'प्रदर्शन',
        'pager-info'               => 'दिखा रहा है: दिखा रहा है: कुल आइटम',
        'description'              => 'विवरण',
        'specification'            => 'विनिर्देश',
        'total-reviews'            => ':कुल समीक्षाएं',
        'total-rating'             => ':total_rating रेटिंग और :total_reviews समीक्षाएं',
        'by'                       => 'नाम से',
        'up-sell-title'            => 'हमें अन्य उत्पाद मिले जो आपको पसंद आ सकते हैं!',
        'related-product-title'    => 'संबंधित उत्पाद',
        'cross-sell-title'         => 'और अधिक विकल्प',
        'reviews-title'            => 'रेटिंग और समीक्षाएं',
        'write-review-btn'         => 'समीक्षा लिखें',
        'choose-option'            => 'एक विकल्प चुनें',
        'sale'                     => 'बिक्री',
        'new'                      => 'नया',
        'empty'                    => 'इस श्रेणी में कोई उत्पाद उपलब्ध नहीं है',
        'add-to-cart'              => 'कार्ट में जोड़ें',
        'book-now'                 => 'अभी बुक करें',
        'buy-now'                  => 'अभी खरीदें',
        'whoops'                   => 'ओह!',
        'quantity'                 => 'मात्रा',
        'in-stock'                 => 'स्टॉक में',
        'out-of-stock'             => 'स्टॉक ख़त्म',
        'view-all'                 => 'सभी को देखें',
        'select-above-options'     => 'कृपया पहले उपरोक्त विकल्पों का चयन करें।',
        'less-quantity'            => 'मात्रा एक से कम नहीं हो सकती।',
        'samples'                  => 'नमूने',
        'links'                    => 'लिंक',
        'sample'                   => 'नमूना',
        'name'                     => 'नाम',
        'qty'                      => 'मात्रा',
        'starting-at'              => 'पे शुरुवात',
        'customize-options'        => 'अनुकूलित विकल्प',
        'choose-selection'         => 'एक चयन चुनें',
        'your-customization'       => 'आपका अनुकूलन',
        'total-amount'             => 'कुल राशि',
        'none'                     => 'कोई नहीं',
        'available-for-order'      => 'आदेश के लिए उपलब्ध',
        'settings'                 => 'समायोजन',
        'compare_options'          => 'विकल्पों की तुलना करें',
        'wishlist-options'         => 'इच्छा सूची विकल्प',
        'offers'                   => 'खरीदें: मात्रा के लिए: प्रत्येक की कीमत और बचत करें: छूट%',
        'tax-inclusive'            => 'सभी करों सहित',
    ],

    'buynow' => [
        'no-options' => 'कृपया इस उत्पाद को खरीदने से पहले विकल्पों का चयन करें।',
    ],

    'checkout' => [
        'cart' => [
            'integrity'                 => [
                'missing_fields'  =>'इस उत्पाद के लिए कुछ आवश्यक फ़ील्ड अनुपलब्ध हैं।',
                'missing_options' => 'इस उत्पाद के लिए विकल्प मौजूद नहीं हैं।',
                'missing_links'   => 'इस उत्पाद के लिए डाउनलोड करने योग्य लिंक गायब हैं।',
                'qty_missing'     => 'कम से कम एक उत्पाद में 1 से अधिक मात्रा होनी चाहिए।',
                'qty_impossible'  => 'कार्ट में इनमें से एक से अधिक उत्पाद नहीं जोड़े जा सकते हैं।',
            ],
            'create-error'              => 'कार्ट इंस्टेंस बनाते समय कुछ समस्या आई।',
            'title'                     => 'शॉपिंग कार्ट',
            'empty'                     => 'आपकी खरीदारी की टोकरी खाली है',
            'update-cart'               => 'कार्ट अपडेट करें',
            'continue-shopping'         => 'खरीदारी जारी रखें',
            'continue-registration'     => 'पंजीकरण जारी रखें',
            'proceed-to-checkout'       => 'चेक आउट करने के लिए आगे बढ़ें',
            'remove'                    => 'निकालना',
            'remove-link'               => 'निकालना',
            'move-to-wishlist'          => 'इच्छा सूची की ओर बदें',
            'move-to-wishlist-success'  => 'आइटम सफलतापूर्वक इच्छा सूची में ले जाया गया।',
            'move-to-wishlist-error'    => 'आइटम को इच्छा सूची में नहीं ले जाया जा सकता, कृपया बाद में पुन: प्रयास करें।',
            'add-config-warning'        => 'कार्ट में जोड़ने से पहले कृपया विकल्प चुनें।',
            'quantity'                  => [
                'quantity'          => 'मात्रा',
                'success'           => 'कार्ट आइटम सफलतापूर्वक अपडेट किए गए।',
                'illegal'           => 'मात्रा एक से कम नहीं हो सकती।',
                'inventory_warning' => 'अनुरोधित मात्रा उपलब्ध नहीं है, कृपया बाद में पुन: प्रयास करें।',
                'error'             => 'इस समय आइटम अपडेट नहीं कर सकते, कृपया बाद में पुन: प्रयास करें।',
            ],
            'item'                      => [
                'error_remove'   => 'कार्ट से निकालने के लिए कोई आइटम नहीं है।',
                'success'        => 'आइटम सफलतापूर्वक कार्ट में जोड़ा गया।',
                'success-remove' => 'आइटम कार्ट से सफलतापूर्वक हटा दिया गया है।',
                'error-add'      => 'आइटम कार्ट में नहीं जोड़ा जा सकता, कृपया बाद में पुन: प्रयास करें।',
                'inactive'       => 'एक आइटम निष्क्रिय है और उसे कार्ट से निकाल दिया गया था।',
                'inactive-add'   => 'निष्क्रिय आइटम कार्ट में नहीं जोड़ा जा सकता है।',
            ],
            'quantity-error'            => 'अनुरोधित मात्रा उपलब्ध नहीं है।',
            'cart-subtotal'             => 'सामान का पूर्ण योग',
            'cart-remove-action'        => 'क्या आप वाकई ऐसा करना चाहते हैं?',
            'partial-cart-update'       => 'केवल कुछ उत्पाद अपडेट किए गए थे',
            'link-missing'              => '',
            'event'                     => [
                'expired' => 'This event has been expired.',
            ],
            'minimum-order-message'     => 'न्यूनतम आदेश राशि है: राशि',
            'suspended-account-message' => 'आपका खाता निरस्त कर दिया गया है।',
            'check-shipping-address'    => 'कृपया शिपिंग पता जांचें।',
            'check-billing-address'     => 'कृपया बिलिंग पता जांचें।',
            'specify-shipping-method'   => 'कृपया शिपिंग विधि निर्दिष्ट करें।',
            'specify-payment-method'    => 'कृपया भुगतान विधि निर्दिष्ट करें।',
        ],

        'onepage' => [
            'title'               => 'चेक आउट',
            'information'         => 'जानकारी',
            'shipping'            => 'शिपिंग',
            'payment'             => 'भुगतान',
            'complete'            => 'पूर्ण',
            'review'              => 'समीक्षा',
            'billing-address'     => 'बिल भेजने का पता',
            'sign-in'             => 'साइन इन करें',
            'company-name'        => 'कंपनी का नाम',
            'first-name'          => 'पहला नाम',
            'last-name'           => 'अंतिम नाम',
            'email'               => 'ईमेल',
            'address1'            => 'गली का पता',
            'city'                => 'शहर',
            'state'               => 'राज्य',
            'select-state'        => 'एक क्षेत्र, राज्य या प्रांत चुनें',
            'postcode'            => 'ज़िप पोस्ट कोड',
            'phone'               => 'टेलीफोन',
            'country'             => 'देश',
            'order-summary'       => 'आदेश सारांश',
            'shipping-address'    => 'शिपिंग पता',
            'use_for_shipping'    => 'इस पते पर भेजो',
            'continue'            => 'जारी रखना',
            'shipping-method'     => 'जलयात्रा पद्धति का चयन करें',
            'payment-methods'     => 'भुगतान का तरीका चुनें',
            'payment-method'      => 'भुगतान विधि',
            'summary'             => 'आदेश सारांश',
            'price'               => 'कीमत',
            'quantity'            => 'मात्रा',
            'billing-address'     => 'बिल भेजने का पता',
            'shipping-address'    => 'शिपिंग पता',
            'contact'             => 'संपर्क करें',
            'place-order'         => 'आदेश देना',
            'new-address'         => 'नया पता जोड़ें',
            'save_as_address'     => 'इस पते को सेव करें',
            'apply-coupon'        => 'कूपन लागू करें',
            'amt-payable'         => 'देय राशि',
            'got'                 => 'प्राप्त',
            'free'                => 'मुफ़्त',
            'coupon-used'         => 'कूपन प्रयुक्त',
            'applied'             => 'लागू',
            'back'                => 'वापस',
            'cash-desc'           => 'डिलवरी पर नकदी',
            'money-desc'          => 'मनी ट्रांसफर',
            'paypal-desc'         => 'पेपैल मानक',
            'free-desc'           => 'यह एक मुफ़्त शिपिंग है',
            'flat-desc'           => 'यह एक सपाट दर है',
            'password'            => 'कुंजिका',
            'login-exist-message' => 'आपके पास पहले से हमारे साथ एक खाता है, साइन इन करें या अतिथि के रूप में जारी रखें।',
            'enter-coupon-code'   => 'परचा कूट दर्ज करें',
        ],

        'total' => [
            'order-summary'       => 'आदेश सारांश',
            'sub-total'           => 'आइटम',
            'grand-total'         => 'कुल योग',
            'delivery-charges'    => 'वितरण शुल्क',
            'tax'                 => 'कर',
            'discount'            => 'छूट',
            'price'               => 'कीमत',
            'disc-amount'         => 'राशि छूट',
            'new-grand-total'     => 'न्यू ग्रैंड टोटल',
            'coupon'              => 'कूपन',
            'coupon-applied'      => 'एप्लाइड कूपन',
            'remove-coupon'       => 'कूपन हटाएं',
            'cannot-apply-coupon' => 'कूपन लागू नहीं कर सकता',
            'invalid-coupon'      => 'कूपन कोड अमान्य है।',
            'success-coupon'      => 'कूपन कोड सफलतापूर्वक लागू किया गया।',
            'coupon-apply-issue'  => 'कूपन कोड लागू नहीं किया जा सकता',
        ],

        'success' => [
            'title'         => 'आदेश सफलतापूर्वक दिया गया',
            'thanks'        => 'आपके क्रय आदेश के लिए धन्यवाद!',
            'order-id-info' => "आपका ऑर्डर आईडी #:order_id' है",
            'info'          => 'हम आपको ईमेल करेंगे, आपके आदेश का विवरण और ट्रैकिंग जानकारी',
        ],
    ],

    'mail' => [
        'order' => [
            'subject'           => 'नए आदेश की पुष्टि',
            'heading'           => 'आदेश की पुष्टि!',
            'dear'              => 'प्रिय :customer_name',
            'dear-admin'        => 'प्रिय: admin_name',
            'greeting'          => 'आपके आदेश के लिए धन्यवाद :order_id :created_at पर रखा गया',
            'greeting-admin'    => 'ऑर्डर आईडी :order_id :created_at पर रखा गया',
            'summary'           => 'आदेश का सारांश',
            'shipping-address'  => 'शिपिंग पता',
            'billing-address'   => 'बिल भेजने का पता',
            'contact'           => 'संपर्क करें',
            'shipping'          => 'शिपिंग का तरीका',
            'payment'           => 'भुगतान विधि',
            'price'             => 'कीमत',
            'quantity'          => 'मात्रा',
            'subtotal'          => 'उपयोग',
            'shipping-handling' => 'शिपिंग और हैंडलिंग',
            'tax'               => 'कर',
            'discount'          => 'छूट',
            'grand-total'       => 'कुल योग',
            'final-summary'     => 'हमारे स्टोर में आपकी रुचि दिखाने के लिए धन्यवाद, एक बार इसे भेज दिए जाने पर हम आपको ट्रैकिंग नंबर भेज देंगे',
            'help'              => "यदि आपको किसी प्रकार की सहायता की आवश्यकता है तो कृपया हमसे :support_email' पर संपर्क करें",
            'thanks'            => 'धन्यवाद!',

            'comment' => [
                'subject'       => 'आपके आदेश में नई टिप्पणी जोड़ी गई #:order_id',
                'dear'          => 'प्रिय :customer_name',
                'final-summary' => 'हमारे स्टोर में अपनी रुचि दिखाने के लिए धन्यवाद',
                'help'          => "यदि आपको किसी प्रकार की सहायता की आवश्यकता है तो कृपया हमसे :support_email' पर संपर्क करें",
                'thanks'        => 'धन्यवाद!',
            ],

            'cancel' => [
                'subject'           => 'आदेश रद्द पुष्टि',
                'heading'           => 'आदेश रद्द किया गया',
                'dear'              => 'प्रिय :customer_name',
                'greeting'          => 'आपका ऑर्डर ऑर्डर आईडी के साथ :order_id :created_at पर रखा गया रद्द कर दिया गया है',
                'summary'           => 'आदेश का सारांश',
                'shipping-address'  => 'शिपिंग पता',
                'billing-address'   => 'बिल भेजने का पता',
                'contact'           => 'संपर्क करें',
                'shipping'          => 'शिपिंग का तरीका',
                'payment'           => 'भुगतान विधि',
                'subtotal'          => 'उपयोग',
                'shipping-handling' => 'शिपिंग और हैंडलिंग',
                'tax'               => 'कर',
                'discount'          => 'छूट',
                'grand-total'       => 'कुल योग',
                'final-summary'     => 'हमारे स्टोर में अपनी रुचि दिखाने के लिए धन्यवाद',
                'help'              => "यदि आपको किसी प्रकार की सहायता की आवश्यकता है तो कृपया हमसे :support_email' पर संपर्क करें",
                'thanks'            => 'धन्यवाद!',
            ],
        ],

        'invoice' => [
            'heading'  => 'आपका चालान #: आदेश #:order_id के लिए चालान_आईडी',
            'subject'  => 'आपके आदेश के लिए चालान #:order_id',
            'summary'  => 'चालान का सारांश',
            'reminder' => [
                'subject'                                          => 'चालान अनुस्मारक',
                'your-invoice-is-overdue'                          => 'आपका चालान: चालान समय से अतिदेय है।',
                'please-make-your-payment-as-soon-as-possible'     => 'कृपया अपना भुगतान यथाशीघ्र करें।',
                'if-you-ve-already-paid-just-disregard-this-email' => 'यदि आप पहले ही भुगतान कर चुके हैं, तो इस ईमेल पर ध्यान न दें।',
            ],
        ],

        'shipment' => [
            'heading'           => "शिपमेंट #:shipment_id ऑर्डर #:order_id' के लिए जेनरेट किया गया है",
            'inventory-heading' => 'नया शिपमेंट #:shipment_id ऑर्डर #:order_id के लिए जेनरेट किया गया है',
            'subject'           => 'आपके ऑर्डर के लिए शिपमेंट #:order_id',
            'inventory-subject' => "आदेश #:order_id' के लिए नया शिपमेंट तैयार किया गया है",
            'summary'           => 'शिपमेंट का सारांश',
            'carrier'           => 'वाहक',
            'tracking-number'   => 'ट्रैकिंग नंबर',
            'greeting'          => "एक आदेश :order_id :created_at' पर रखा गया है",
        ],

        'refund' => [
            'heading'           => 'आपका धनवापसी #: आदेश #:order_id के लिए धनवापसी_आईडी',
            'subject'           => 'आपके आदेश के लिए धनवापसी #:order_id',
            'summary'           => 'धनवापसी का सारांश',
            'adjustment-refund' => 'समायोजन वापसी',
            'adjustment-fee'    => 'समायोजन शुल्क',
        ],

        'forget-password' => [
            'subject'        => 'ग्राहक रीसेट पासवर्ड',
            'dear'           => 'प्रिय: नाम',
            'info'           => 'आपको यह ईमेल इसलिए प्राप्त हो रहा है क्योंकि हमें आपके खाते के लिए पासवर्ड रीसेट करने का अनुरोध प्राप्त हुआ है',
            'reset-password' => 'पासवर्ड रीसेट',
            'final-summary'  => 'यदि आपने पासवर्ड रीसेट करने का अनुरोध नहीं किया है, तो आगे किसी कार्रवाई की आवश्यकता नहीं है',
            'thanks'         => 'धन्यवाद!',
        ],

        'update-password' => [
            'subject' => 'पासवर्ड अपडेट किया गया',
            'dear'    => 'प्रिय: नाम',
            'info'    => 'आपको यह ईमेल इसलिए प्राप्त हो रहा है क्योंकि आपने अपना पासवर्ड अपडेट कर लिया है।',
            'thanks'  => 'धन्यवाद!',
        ],

        'customer' => [
            'new' => [
                'dear'           => 'प्रिय :customer_name',
                'username-email' => 'उपयोगकर्ता नाम/ईमेल',
                'subject'        => 'नया ग्राहक पंजीकरण',
                'password'       => 'कुंजिका',
                'summary'        => 'आपका खाता तैयार कर दिया गया है।
                आपके खाते का विवरण नीचे है: ',
                'thanks'         => 'धन्यवाद!',
            ],

            'registration' => [
                'subject'               => 'नया ग्राहक पंजीकरण',
                'customer-registration' => 'ग्राहक सफलतापूर्वक पंजीकृत',
                'dear'                  => 'प्रिय :customer_name',
                'dear-admin'            => 'प्रिय: admin_name',
                'greeting'              => 'स्वागत है और हमारे साथ पंजीकरण करने के लिए धन्यवाद!',
                'greeting-admin'        => 'आपके पास एक नया ग्राहक पंजीकरण है।',
                'summary'               => 'आपका खाता अब सफलतापूर्वक बनाया गया है और आप अपने ईमेल पते और पासवर्ड क्रेडेंशियल्स का उपयोग करके लॉगिन कर सकते हैं। लॉग इन करने पर, आप पिछले आदेशों, इच्छा-सूचियों की समीक्षा करने और अपने खाते की जानकारी संपादित करने सहित अन्य सेवाओं तक पहुँचने में सक्षम होंगे।',
                'thanks'                => 'धन्यवाद!',
            ],

            'verification' => [
                'heading' => "कॉन्फिग ('app.name')। ' - ईमेल सत्यापन",
                'subject' => 'सत्यापन मेल',
                'verify'  => 'अपने खाते को सत्यापित करें',
                'summary' => 'यह सत्यापित करने के लिए मेल है कि आपके द्वारा दर्ज किया गया ईमेल पता आपका है।
                कृपया अपना खाता सत्यापित करने के लिए नीचे अपना खाता सत्यापित करें बटन क्लिक करें।',
            ],

            'subscription' => [
                'subject'     => 'सदस्यता ईमेल',
                'greeting'    => "आपका स्वागत है ' । कॉन्फिग ('app.name')। '- ईमेल सदस्यता",
                'unsubscribe' => 'सदस्यता समाप्त करें',
                'summary'     => "मुझे अपने इनबॉक्स में डालने के लिए धन्यवाद। आपको पढ़े हुए काफी समय हो गया है' . कॉन्फिग ('app.name')। ' ईमेल, और हम आपके इनबॉक्स को अभिभूत नहीं करना चाहते हैं। यदि आप अभी भी प्राप्त नहीं करना चाहते हैं
                नवीनतम ईमेल मार्केटिंग समाचार तो निश्चित रूप से नीचे दिए गए बटन पर क्लिक करें।",
            ],
        ],
    ],

    'webkul' => [
        'copy-right' => '© कॉपीराइट: वर्ष वेबकुल सॉफ्टवेयर, सर्वाधिकार सुरक्षित',
    ],

    'response' => [
        'create-success' => ': नाम सफलतापूर्वक बनाया गया।',
        'update-success' => ': नाम सफलतापूर्वक अपडेट किया गया।',
        'delete-success' => ':नाम सफलतापूर्वक हटा दिया गया।',
        'submit-success' => ': नाम सफलतापूर्वक सबमिट किया गया।',
    ],
];
