<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.32722" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.32722" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.32722"></script>
<script type="text/javascript">
    JotForm.newDefaultTheme = false;
    JotForm.extendsNewTheme = false;
    JotForm.newPaymentUIForNewCreatedForms = false;

    JotForm.init(function() {
        /*INIT-START*/
        if (window.JotForm && JotForm.accessible) $('input_9').setAttribute('tabindex', 0);
        if (window.JotForm && JotForm.accessible) $('input_8').setAttribute('tabindex', 0);
        JotForm.alterTexts({
            "confirmClearForm": "Are you sure you want to clear the form",
            "email": "Invalid E-mail.",
            "lessThan": "Your score should be less than"
        });
        setTimeout(function() {
            JotForm.initMultipleUploads();
        }, 2);
        /*INIT-END*/
    });

    JotForm.prepareCalculationsOnTheFly([null, null, {
        "name": "submit",
        "qid": "2",
        "text": "Submit",
        "type": "control_button"
    }, null, null, {
        "name": "email5",
        "qid": "5",
        "text": "E-mail",
        "type": "control_email"
    }, {
        "name": "uploadYour",
        "qid": "6",
        "text": "Upload your files here",
        "type": "control_fileupload"
    }, {
        "name": "selectYour",
        "qid": "7",
        "text": "Select your file types",
        "type": "control_dropdown"
    }, {
        "name": "yourMessage8",
        "qid": "8",
        "text": "Your message",
        "type": "control_textarea"
    }, {
        "name": "fullName",
        "qid": "9",
        "text": "Full Name",
        "type": "control_textbox"
    }, {
        "name": "sendUs",
        "qid": "10",
        "text": "Send us your Files!",
        "type": "control_head"
    }]);
    setTimeout(function() {
        JotForm.paymentExtrasOnTheFly([null, null, {
            "name": "submit",
            "qid": "2",
            "text": "Submit",
            "type": "control_button"
        }, null, null, {
            "name": "email5",
            "qid": "5",
            "text": "E-mail",
            "type": "control_email"
        }, {
            "name": "uploadYour",
            "qid": "6",
            "text": "Upload your files here",
            "type": "control_fileupload"
        }, {
            "name": "selectYour",
            "qid": "7",
            "text": "Select your file types",
            "type": "control_dropdown"
        }, {
            "name": "yourMessage8",
            "qid": "8",
            "text": "Your message",
            "type": "control_textarea"
        }, {
            "name": "fullName",
            "qid": "9",
            "text": "Full Name",
            "type": "control_textbox"
        }, {
            "name": "sendUs",
            "qid": "10",
            "text": "Send us your Files!",
            "type": "control_head"
        }]);
    }, 20);
</script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.32722" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.32722" />
<style type="text/css">
    @media print {
        .form-section {
            display: inline!important
        }
        .form-pagebreak {
            display: none!important
        }
        .form-section-closed {
            height: auto!important
        }
        .page-section {
            position: initial!important
        }
    }
</style>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.32722" />
<style type="text/css">
    @import url('https://shots.jotform.com/elton/genericTheme.css');
    .form-label-left {
        width: 180px;
    }
    
    .form-line {
        padding-top: 12px;
        padding-bottom: 12px;
    }
    
    .form-label-right {
        width: 180px;
    }
    
    .form-all {
        width: 500px;
        color: #555 !important;
        font-family: 'Lato';
        font-size: 16px;
    }
    
    .form-radio-item label,
    .form-checkbox-item label,
    .form-grading-label,
    .form-header {
        color: #555;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
    
    @import url('https://shots.jotform.com/elton/genericTheme.css');
    @import "https://fonts.googleapis.com/css?family=Lato:light,lightitalic,normal,italic,bold,bolditalic";
    .form-all {
        font-family: "Lato", sans-serif;
    }
    
    .form-all {
        width: 500px;
        width: 100%;
        max-width: 500px;
    }
    
    .form-label-left,
    .form-label-right {
        width: 180px;
    }
    
    .form-label {
        white-space: normal;
    }
    
    .form-label.form-label-auto {
        display: inline-block;
        float: left;
        text-align: left;
        width: 180px;
    }
    
    .form-label-left {
        display: inline-block;
        white-space: normal;
        float: left;
        text-align: left;
    }
    
    .form-label-right {
        display: inline-block;
        white-space: normal;
        float: left;
        text-align: right;
    }
    
    .form-label-top {
        white-space: normal;
        display: block;
        float: none;
        text-align: left;
    }
    
    .form-radio-item label:before {
        top: 0;
    }
    
    .form-all {
        font-size: 16px;
    }
    
    .form-label {
        font-weight: normal;
        font-size: 0.95em;
    }
    
    .supernova {
        background-color: rgba(255, 255, 255, 0.94);
        background-color: #91d0d7;
    }
    
    .supernova body {
        background-color: transparent;
    }
    /*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
    /* | */
    
    @media screen and (min-width: 480px) {
        .supernova .form-all {
            border: 1px solid #6cc0c9;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
        }
    }
    /* | */
    /* | */
    
    @media screen and (max-width: 480px) {
        .jotform-form {
            padding: 10px 0;
        }
    }
    /* | */
    /* | */
    
    @media screen and (min-width: 480px) and (max-width: 767px) {
        .jotform-form {
            padding: 30px 0;
        }
    }
    /* | */
    /* | */
    
    @media screen and (min-width: 480px) and (max-width: 499px) {
        .jotform-form {
            padding: 30px 0;
        }
    }
    /* | */
    /* | */
    
    @media screen and (min-width: 768px) {
        .jotform-form {
            padding: 60px 0;
        }
    }
    /* | */
    /* | */
    
    @media screen and (max-width: 499px) {
        .jotform-form {
            padding: 12px;
        }
    }
    /* | */
    
    .supernova .form-all,
    .form-all {
        background-color: rgba(255, 255, 255, 0.94);
        border: 1px solid transparent;
    }
    
    .form-header-group {
        border-color: rgba(230, 230, 230, 0.94);
    }
    
    .form-matrix-table tr {
        border-color: rgba(230, 230, 230, 0.94);
    }
    
    .form-matrix-table tr:nth-child(2n) {
        background-color: rgba(242, 242, 242, 0.94);
    }
    
    .form-all {
        color: #555555;
    }
    
    .form-header-group .form-header {
        color: #555555;
    }
    
    .form-header-group .form-subHeader {
        color: #6f6f6f;
    }
    
    .form-sub-label {
        color: #6f6f6f;
    }
    
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html {
        color: #6f6f6f;
    }
    
    .form-checkbox-item label,
    .form-radio-item label {
        color: #555555;
    }
    
    .form-line.form-line-active {
        -webkit-transition-property: all;
        -moz-transition-property: all;
        -ms-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -ms-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -ms-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        background-color: rgba(255, 255, 255, 0);
    }
    /* omer */
    
    .form-radio-item,
    .form-checkbox-item {
        padding-bottom: 0px !important;
    }
    
    .form-radio-item:last-child,
    .form-checkbox-item:last-child {
        padding-bottom: 0;
    }
    /* omer */
    
    .form-single-column .form-checkbox-item,
    .form-single-column .form-radio-item {
        width: 100%;
    }
    
    .supernova {
        height: 100%;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
        background-size: cover;
    }
    
    .supernova {
        background-image: none;
        background-image: url("//shots.jotform.com/elton/images/upload_form2_bg.gif");
    }
    
    #stage {
        background-image: none;
        background-image: url("//shots.jotform.com/elton/images/upload_form2_bg.gif");
    }
    /* | */
    
    .form-all {
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
        background-repeat: repeat;
    }
    
    .form-header-group {
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
    }
    
    .form-line {
        margin-top: 0px;
        margin-bottom: 0px;
    }
    
    .form-line {
        padding: 10px 36px;
    }
    
    .form-all .form-textbox,
    .form-all .form-radio-other-input,
    .form-all .form-checkbox-other-input,
    .form-all .form-captcha input,
    .form-all .form-spinner input,
    .form-all .form-pagebreak-back,
    .form-all .form-pagebreak-next,
    .form-all .qq-upload-button,
    .form-all .form-error-message {
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }
    
    .form-all .form-textarea {
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }
    
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
    }
    
    .form-all .form-sub-label {
        margin-left: 3px;
    }
    
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
        height: 80px;
        font-size: 1em;
        padding: 9px 15px;
        font-family: "Lato", sans-serif;
        font-size: 19px;
        font-weight: normal;
        border: none;
        border-width: 0px !important;
        border-style: solid !important;
    }
    
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
        color: #ffffff !important;
        background: rgba(0, 0, 0, 0);
        box-shadow: none;
        text-shadow: none;
    }
    
    .form-all .form-pagebreak-back,
    .form-all .form-pagebreak-next {
        font-size: 1em;
        padding: 9px 15px;
        font-family: "Lato", sans-serif;
        font-size: 16px;
        font-weight: normal;
    }
    /*
& when ( @buttonFontType = google ) {
	@import (css) "@{buttonFontLink}";
}
*/
    
    h2.form-header {
        line-height: 1.618em;
    }
    
    h2~.form-subHeader {
        line-height: 1.5em;
    }
    
    .form-header-group {
        text-align: center;
    }
    /*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
    
    .form-captcha input,
    .form-spinner input,
    .form-error-message {
        padding: 4px 3px 2px 3px;
    }
    
    .form-header-group {
        font-family: "Lato", sans-serif;
    }
    
    .form-section {
        padding: 0px 0px 0px 0px;
    }
    
    .form-header-group {
        margin: 0px 0px 0px 0px;
    }
    
    .form-header-group {
        padding: 12px 36px 12px 36px;
    }
    
    .form-header-group .form-header,
    .form-header-group .form-subHeader {
        color: #1c5699;
    }
    
    .form-header-group {
        background-color: rgba(255, 255, 255, 0);
    }
    
    .form-textbox,
    .form-textarea {
        border-width: 1px;
        border-style: solid;
        border-color: #3376b5;
        padding: 4px 3px 2px 3px;
    }
    
    .form-dropdown {
        border-color: #3376b5;
        -webkit-appearance: menulist-button;
        background-color: #ffffff;
    }
    
    [data-type="control_dropdown"] .form-input,
    [data-type="control_dropdown"] .form-input-wide {
        width: 150px;
    }
    
    .form-dropdown {
        margin: 0;
        border-color: #a6a6a6;
        -webkit-appearance: menulist!important;
        -moz-appearance: menulist!important;
        appearance: menulist!important;
        border-width: 1px;
    }
    
    .form-buttons-wrapper {
        margin-left: 0 !important;
        text-align: center;
    }
    
    .form-header-group {
        border-bottom: none;
    }
    
    .form-label {
        font-family: "Lato", sans-serif;
    }
    
    li[data-type="control_image"] div {
        text-align: left;
    }
    
    li[data-type="control_image"] img {
        border: none;
        border-width: 0px !important;
        border-style: solid !important;
        border-color: false !important;
    }
    
    .form-line-column {
        width: auto;
    }
    
    .form-line-error {
        background-color: rgba(255, 255, 255, 0.94);
        -webkit-box-shadow: inset 0px 3px 11px -7px #f88080;
        -moz-box-shadow: inset 0px 3px 11px -7px #f88080;
        box-shadow: inset 0px 3px 11px -7px #f88080;
    }
    
    .form-line-error input:not(#coupon-input),
    .form-line-error textarea,
    .form-line-error .form-validation-error {
        -webkit-transition-property: none;
        -moz-transition-property: none;
        -ms-transition-property: none;
        -o-transition-property: none;
        transition-property: none;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -ms-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease;
        -moz-transition-timing-function: ease;
        -ms-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        border: 1px solid rgba(255, 255, 255, 0);
        -moz-box-shadow: 0 0 3px rgba(255, 255, 255, 0);
        -webkit-box-shadow: 0 0 3px rgba(255, 255, 255, 0);
        box-shadow: 0 0 3px rgba(255, 255, 255, 0);
    }
    
    .form-line-error .form-error-message {
        margin: 0;
        position: absolute;
        color: #fff;
        display: inline-block;
        right: 0;
        font-size: 10px;
        position: absolute!important;
        box-shadow: none;
        top: 0px;
        line-height: 20px;
        color: #FFF;
        background: #f88080;
        padding: 0px 5px;
        bottom: auto;
        min-width: 105px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }
    
    .form-line-error .form-error-message img,
    .form-line-error .form-error-message .form-error-arrow {
        display: none;
    }
    
    .ie-8 .form-all {
        margin-top: auto;
        margin-top: initial;
    }
    
    .ie-8 .form-all:before {
        display: none;
    }
    /* | */
    
    @media screen and (max-width: 480px),
    screen and (max-device-width: 767px) and (orientation: portrait),
    screen and (max-device-width: 415px) and (orientation: landscape) {
        .testOne {
            letter-spacing: 0;
        }
        .testTwo {
            letter-spacing: 1;
        }
        .jotform-form {
            padding: 12px 0 0 0;
        }
        .form-all {
            border: 0;
            width: 94%!important;
            max-width: initial;
        }
        .form-sub-label-container {
            width: 100%;
            margin: 0;
            margin-right: 0;
            float: left;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        span.form-sub-label-container+span.form-sub-label-container {
            margin-right: 0;
        }
        .form-sub-label {
            white-space: normal;
        }
        .form-address-table td,
        .form-address-table th {
            padding: 0 1px 10px;
        }
        .form-submit-button,
        .form-submit-print,
        .form-submit-reset {
            width: 100%;
            margin-left: 0!important;
        }
        div[id*=at_] {
            font-size: 14px;
            font-weight: 700;
            height: 8px;
            margin-top: 6px;
        }
        .showAutoCalendar {
            width: 20px;
        }
        img.form-image {
            max-width: 100%;
            height: auto;
        }
        .form-matrix-row-headers {
            width: 100%;
            word-break: break-all;
            min-width: 40px;
        }
        .form-collapse-table,
        .form-header-group {
            margin: 0;
        }
        .form-collapse-table {
            height: 100%;
            display: inline-block;
            width: 100%;
        }
        .form-collapse-hidden {
            display: none !important;
        }
        .form-input {
            width: 100%;
        }
        .form-label {
            width: 100% !important;
        }
        .form-label-left,
        .form-label-right {
            display: block;
            float: none;
            text-align: left;
            width: auto!important;
        }
        .form-line,
        .form-line.form-line-column {
            padding: 2% 5%;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        input[type=text],
        input[type=email],
        input[type=tel],
        textarea {
            width: 100%;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            max-width: initial !important;
        }
        .form-dropdown,
        .form-textarea,
        .form-textbox {
            width: 100%!important;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-input,
        .form-input-wide,
        .form-textarea,
        .form-textbox,
        .form-dropdown {
            max-width: initial!important;
        }
        .form-address-city,
        .form-address-line,
        .form-address-postal,
        .form-address-state,
        .form-address-table,
        .form-address-table .form-sub-label-container,
        .form-address-table select,
        .form-input {
            width: 100%;
        }
        div.form-header-group {
            padding: 12px 36px !important;
            padding-left: 5%!important;
            padding-right: 5%!important;
            margin: 0 0px 2% !important;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        div.form-header-group.hasImage img {
            max-width: 100%;
        }
        [data-type="control_button"] {
            margin-bottom: 0 !important;
        }
        [data-type=control_fullname] .form-sub-label-container {
            width: 48%;
        }
        [data-type=control_fullname] .form-sub-label-container:first-child {
            margin-right: 4%;
        }
        [data-type=control_phone] .form-sub-label-container {
            width: 65%;
        }
        [data-type=control_phone] .form-sub-label-container:first-child {
            width: 31%;
            margin-right: 4%;
        }
        [data-type=control_datetime] .form-sub-label-container+.form-sub-label-container,
        [data-type=control_datetime] .form-sub-label-container:first-child {
            width: 27.3%;
            margin-right: 6%;
        }
        [data-type=control_datetime] .form-sub-label-container+.form-sub-label-container+.form-sub-label-container {
            width: 33.3%;
            margin-right: 0;
        }
        [data-type=control_datetime] span+span+span>span:first-child {
            display: block;
            width: 100% !important;
        }
        [data-type=control_birthdate] .form-sub-label-container,
        [data-type=control_datetime] span+span+span>span:first-child+span+span,
        [data-type=control_time] .form-sub-label-container {
            width: 27.3%!important;
            margin-right: 6% !important;
        }
        [data-type=control_birthdate] .form-sub-label-container:last-child,
        [data-type=control_time] .form-sub-label-container:last-child {
            width: 33.3%!important;
            margin-right: 0 !important;
        }
        .form-pagebreak-back-container,
        .form-pagebreak-next-container {
            width: 50% !important;
        }
        .form-pagebreak-back,
        .form-pagebreak-next,
        .form-product-item.hover-product-item {
            width: 100%;
        }
        .form-pagebreak-back-container {
            padding: 0;
            text-align: right;
        }
        .form-pagebreak-next-container {
            padding: 0;
            text-align: left;
        }
        .form-pagebreak {
            margin: 0 auto;
        }
        .form-buttons-wrapper {
            margin: 0!important;
            margin-left: 0!important;
        }
        .form-buttons-wrapper button {
            width: 100%;
        }
        .form-buttons-wrapper .form-submit-print {
            margin: 0 !important;
        }
        table {
            width: 100%!important;
            max-width: initial!important;
        }
        table td+td {
            padding-left: 3%;
        }
        .form-checkbox-item,
        .form-radio-item {
            white-space: normal!important;
        }
        .form-checkbox-item input,
        .form-radio-item input {
            width: auto;
        }
        .form-collapse-table {
            margin: 0 5%;
            display: block;
            zoom: 1;
            width: auto;
        }
        .form-collapse-table:before,
        .form-collapse-table:after {
            display: table;
            content: '';
            line-height: 0;
        }
        .form-collapse-table:after {
            clear: both;
        }
        .fb-like-box {
            width: 98% !important;
        }
        .form-error-message {
            clear: both;
            bottom: -10px;
        }
        .date-separate,
        .phone-separate {
            display: none;
        }
        .custom-field-frame,
        .direct-embed-widgets,
        .signature-pad-wrapper {
            width: 100% !important;
        }
    }
    /* | */
    /*__INSPECT_SEPERATOR__*/
    
    @import url('https://shots.jotform.com/elton/genericTheme.css');
    @font-face {
        font-family: 'blenda_scriptregular';
        src: url('https://shots.jotform.com/elton/fonts/blenda_script-webfont.eot');
        src: url('https://shots.jotform.com/elton/fonts/blenda_script-webfont.eot?#iefix') format('embedded-opentype'), url('https://shots.jotform.com/elton/fonts/blenda_script-webfont.woff2') format('woff2'), url('https://shots.jotform.com/elton/fonts/blenda_script-webfont.woff') format('woff'), url('https://shots.jotform.com/elton/fonts/blenda_script-webfont.ttf') format('truetype'), url('https://shots.jotform.com/elton/fonts/blenda_script-webfont.svg#blenda_scriptregular') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    
    .form-all * {
        font-family: 'blenda_scriptregular', sans-serif !important;
    }
    
    .form-all {
        box-shadow: 0 0 0 18px rgba(0, 0, 0, 0.4) !important;
        border: none !important;
    }
    
    .form-header {
        font-size: 40px !important;
    }
    
    .form-textbox,
    .form-dropdown,
    .form-textarea {
        border: 1px solid #3376b5;
    }
    
    .form-submit-button {
        background: url('//shots.jotform.com/elton/images/send_files_button.png') no-repeat top center !important;
        background-size: 100px !important;
        padding: 50px 30px !important;
        line-height: 8px;
    }
    
    .form-all .qq-upload-button {
        height: auto;
    }
    
    .qq-uploader {
        position: relative;
        width: 100%;
    }
    
    .form-all .qq-upload-button {
        color: #ffffff !important;
        background: rgb(16, 76, 151);
        box-shadow: none;
        text-shadow: none;
    }
    
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
        font-size: 16px;
    }
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/221085425611448/" method="post" enctype="multipart/form-data" name="form_221085425611448" id="221085425611448" accept-charset="utf-8" autocomplete="on">
    <input type="hidden" name="formID" value="221085425611448" />
    <input type="hidden" id="JWTContainer" value="" />
    <input type="hidden" id="cardinalOrderNumber" value="" />
    <div role="main" class="form-all">
        <ul class="form-section page-section">
            <li id="cid_10" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-default">
                    <div class="header-text httac htvam">
                        <h2 id="header_10" class="form-header" data-component="header">
                            Send us your Files!
                        </h2>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textbox" id="id_9">
                <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Full Name </label>
                <div id="cid_9" class="form-input">
                    <input type="text" id="input_9" name="q9_fullName" data-type="input-textbox" class="form-textbox" data-defaultvalue="" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_9" />
                </div>
            </li>
            <li class="form-line" data-type="control_email" id="id_5">
                <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> E-mail </label>
                <div id="cid_5" class="form-input">
                    <input type="email" id="input_5" name="q5_email5" class="form-textbox validate[Email]" data-defaultvalue="" size="30" value="" placeholder=" " data-component="email" aria-labelledby="label_5" />
                </div>
            </li>
            <li class="form-line" data-type="control_dropdown" id="id_7">
                <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Select your file types </label>
                <div id="cid_7" class="form-input">
                    <select class="form-dropdown" id="input_7" name="q7_selectYour" style="width:317px" data-component="dropdown">
            <option value="">  </option>
            <option value="Image"> Image </option>
            <option value="Video"> Video </option>
            <option value="Audio"> Audio </option>
            <option value="Documents"> Documents </option>
            <option value="Mixed"> Mixed </option>
            <option value="Others"> Others </option>
          </select>
                </div>
            </li>
            <li class="form-line" data-type="control_fileupload" id="id_6">
                <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Upload your files here </label>
                <div id="cid_6" class="form-input">
                    <div data-wrapper-react="true">
                        <div data-wrapper-react="true">
                            <div class="qq-uploader-buttonText-value">
                                Upload a photo
                            </div>
                            <input type="file" id="input_6" name="q6_uploadYour[]" multiple="" class="form-upload-multiple" data-file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10240" data-file-minsize="0"
                                data-file-limit="0" data-component="fileupload" />
                        </div>
                        <span style="display:none" class="cancelText">
              Cancel
            </span>
                        <span style="display:none" class="ofText">
              of
            </span>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_textarea" id="id_8">
                <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8"> Your message </label>
                <div id="cid_8" class="form-input">
                    <textarea id="input_8" class="form-textarea" name="q8_yourMessage8" cols="35" rows="5" data-component="textarea" aria-labelledby="label_8"></textarea>
                </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_2">
                <div id="cid_2" class="form-input-wide">
                    <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
                        <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
                    </div>
                </div>
            </li>
            <li style="display:none">
                Should be Empty:
                <input type="text" name="website" value="" />
            </li>
        </ul>
    </div>
    <script>
        JotForm.showJotFormPowered = "new_footer";
    </script>
    <script>
        JotForm.poweredByText = "Powered by Jotform";
    </script>
    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="221085425611448" />
    <script type="text/javascript">
        var all_spc = document.querySelectorAll("form[id='221085425611448'] .si" + "mple" + "_spc");
        for (var i = 0; i < all_spc.length; i++) {
            all_spc[i].value = "221085425611448-221085425611448";
        }
    </script>
    <div class="formFooter-heightMask">
    </div>
    <div class="formFooter f6 branding21">
        <div class="formFooter-wrapper formFooter-leftSide">
            <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=221085425611448&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a>
        </div>
        <div class="formFooter-wrapper formFooter-rightSide">
            <span class="formFooter-text">
        Now create your own Jotform - It's free!
      </span>
            <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=221085425611448&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a>
        </div>
    </div>
</form>