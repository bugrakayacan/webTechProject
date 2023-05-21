"use strict";
  var formGiris = document.forms["girisForm"];  // form seçimi
  var eposta = formGiris.email;   // eposta alanı seçimi
  var ad = formGiris.name;
  var egitim = formGiris.egitim;
  var konu = formGiris.Konu;
  var mesaj = formGiris.mesaj;
  var hata = [];

  formGiris.onsubmit = function() {  // onsubmit olayı
    if ((eposta.value.length === 0)) {
        hata.push('Eposta alanı boş bırakılamaz.');
    };
    
    if ((ad.value.length === 0)) {
        hata.push('Ad alanı boş bırakılamaz.'); 
    };

    if ((egitim.value === "Eğitim Durumu..")) {
        hata.push('Eğitim alanı boş bırakılamaz.'); 
    };

    if ((konu.value.length === 0)) {
        hata.push('Konu boş bırakılamaz.');  
    };
    if ((mesaj.value.length === 0)) {
        hata.push('Mesaj boş bırakılamaz.');  
    };

    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(eposta.value)))
    {
        hata.push('Geçerli bir e-posta formatı girin.');  
    };
    
    if(hata.length>0)
    {
    alert(hata.join('\n'))
    hata.length = 0;
    return false; //form gönderimini iptal et
    };
	

}




