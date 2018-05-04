var xhr_object = new XMLHttpRequest();
xhr_object.open("GET", location.href,false);
xhr_object.send(null);

if (xhr_object.readyState == 4) alert("OK");