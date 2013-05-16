// create the XMLHttpRequest object, according browser
function get_XmlHttp() {
	  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
	  var xmlHttp = null;

	  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
		xmlHttp = new XMLHttpRequest();
	  }
	  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }

	return xmlHttp;
}
// sends data to a php file, via POST, and displays the received answer
function ajaxrequest(candidates_file, winners_file, countyid, edType) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
  var requestwinners = get_XmlHttp();
  document.getElementById("loading").style.display = 'block';
  //document.getElementById("formstuff").style.display = 'none';
  // create pairs index=value with data that must be sent to server
  //var  the_data = 'bla='+document.getElementById('dtb').value+'&test='+document.getElementById('dta').value;
	var the_data = 'countyid='+countyid+'&edType='+edType;
  	request.open("POST", candidates_file, true);			// set the request
	requestwinners.open("POST", winners_file, true);
  // adds  a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

	requestwinners.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	requestwinners.send(the_data);
  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  	request.onreadystatechange = function() {
   if (request.readyState == 4) {
      document.getElementById("context").innerHTML = request.responseText;
	  //document.getElementById(formstuff).style.display='none';
	  document.getElementById("loading").style.display='none';
    }
  }
    requestwinners.onreadystatechange = function() {
   if (requestwinners.readyState == 4) {
      document.getElementById("showwinners").innerHTML = requestwinners.responseText;
	  //document.getElementById(formstuff).style.display='none';
	  document.getElementById("loading").style.display='none';
    }
  }
}