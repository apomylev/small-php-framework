function getXmlHttp() {
    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
  function loadpage(model) {	
    var xmlhttp = getXmlHttp();
    xmlhttp.open('GET', '/ajax/'+model, true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded', 'charset=UTF-8');
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4) {
        if(xmlhttp.status == 200) {
          document.getElementById('new').outerHTML = xmlhttp.responseText;
        }
      }
    }
   }