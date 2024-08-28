// 共通バリデーションメッセージ
$.extend($.validator.messages, {
    email: '正しいメールアドレスの形式で入力して下さい',
    required: '入力必須項目です',
    phone: '正しい電話番号の形式で入力して下さい',
    range: '不正な入力値です',
    digits: '整数で入力してください',
    equalTo: 'メールアドレスが一致しません',
});

// お問い合わせバリデーションルール
let rule1 = {
    contact_type: {
        required: true
    },
    contact_details: {
        required: {
            depends: function(){
                return $('input[name=contact_type]:eq(0)').prop('checked');
            }
        }
    },
    consultation_item: {
        required: {
            depends: function(){
                return $('input[name=contact_type]:eq(0)').prop('checked');
            }
        }
    },
    budget: {
        digits: {
            depends: function(){
                return $('input[name=contact_type]:eq(0)').prop('checked');
            }
        }
    },

    num: {
        digits: true
    },
    size: {
        digits: true
    },
    deformed_size: {
        digits: true
    },
    page_count: {
        digits: true
    },
    cover_color_num: {
        digits: true
    },
    color_num: {
        digits: true
    },
    binding_style: {
        digits: true
    },
    cover_paper: {
        digits: true
    },
    cover_color: {
        digits: true
    },
    book_paper: {
        digits: true
    },
    frontispiece: {
        digits: true
    },
    frontispiece_color: {
        digits: true
    },
    endpaper: {
        digits: true
    },
    varnish: {
        digits: true
    },
    processing: {
        digits: true
    },
    manuscript_type: {
        digits: true
    },
    os_type: {
        digits: true
    },
    application: {
        digits: true
    },
    company_name: {
        required: {
            depends: function(){
                return $('input[name=contact_type]:eq(0)').prop('checked');
            }
        }
    },
    name: {
        required: {
            depends: function(){
                return $('input[name=contact_type]:eq(1)').prop('checked');
            }
        }
    },
    mail_address: {
        required: true,
        email: true
    },
    mail_address_confirm: {
        equalTo: '#mail_address'
    },
    telephone_number: {
        required: true,
        tel: true
    },
    fax_number: {
        tel: true
    },
    privacy_consent: {
        required: true,
        step: 1
    },
    enquete: {
        range: [1, 4]
    },
};

// お見積りバリデーションルール
let rule2 = {
    contact_type: {
        required: true
    },
    mail_address: {
        required: true,
        email: true
    },
    mail_address_confirm:{
        required: true,
        equalTo: '#mail_address'
    },
    telephone_number: {
        required: true,
        tel: true
    },
    fax_number: {
        tel: true
    },
    privacy_consent: {
        required: true,
        step: 1
    },
    enquete: {
        range: [1, 4]
    }
};
