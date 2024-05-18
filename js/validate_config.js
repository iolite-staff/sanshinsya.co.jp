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
        required: true,
        // range: [1, 2]
    },
    contact_details: {
        required: true,
        // range: [1, 2]
    },
    consultation_item: {
        required: true,
        // range: [1, 6]
    },
    budget: {
        digits: true
    },
    company_name: {
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
    },
};

// お見積りバリデーションルール
let rule2 = {
    contact_type: {
        required: true,
        // range: [1, 2]
    },
    num: {
        digits: true
    },
    size: {
        digits: true
        // range: [1, 2]
    },
    deformed_size: {
        digits: true
        // range: [1, 2]
    },
    page_count: {
        digits: true
        // range: [1, 2]
    },
    cover_color_num: {
        digits: true
        // range: [1, 2]
    },
    color_num: {
        digits: true
        // range: [1, 2]
    },
    binding_style: {
        digits: true
        // range: [1, 2]
    },
    cover_paper: {
        digits: true
        // range: [1, 2]
    },
    cover_color: {
        digits: true
        // range: [1, 2]
    },
    book_paper: {
        digits: true
        // range: [1, 2]
    },
    frontispiece: {
        digits: true
        // range: [1, 2]
    },
    frontispiece_color: {
        digits: true
        // range: [1, 2]
    },
    endpaper: {
        digits: true
        // range: [1, 2]
    },
    varnish: {
        digits: true
        // range: [1, 2]
    },
    processing: {
        digits: true
        // range: [1, 2]
    },
    manuscript_type: {
        digits: true
        // range: [1, 2]
    },
    os_type: {
        digits: true
        // range: [1, 2]
    },
    application: {
        digits: true
        // range: [1, 2]
    },
    message: {
    },
    name: {
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
        // range: [1, 4]
    }
};
