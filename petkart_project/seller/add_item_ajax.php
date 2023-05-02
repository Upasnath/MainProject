var selectBox = document.getElementsByName("animal_type")[0];
var fileInput = document.getElementById("image");

selectBox.addEventListener("change", checkInputs);
fileInput.addEventListener("change", checkInputs);

function checkInputs() {
  if (selectBox.value && fileInput.value) {
    makePrediction();
  }
}

function makePrediction() {
  var data = new FormData();
  data.append('animal_type', selectBox.value);
  data.append('file', fileInput.files[0]);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', '/predict/');
  xhr.onload = function() {
    if (xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      alert('The predicted breed is ' + response.breed + ' with a confidence of ' + response.confidence);
    } else {
      alert('Request failed. Returned status of ' + xhr.status);
    }
  };
  xhr.send(data);
}
