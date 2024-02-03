const generateButton = document.getElementById('generateButton');
const qrcodeElement = document.getElementById('qrcode');
const userInput = document.getElementById('otp');
const compareButton = document.getElementById('compareButton');
const resultMessage = document.getElementById('resultMessage'); // Added this line

let generatedNumber = null;

generateButton.addEventListener('click', generateQRCode);
compareButton.addEventListener('click', compareNumbers);

function generateQRCode() {
  generatedNumber = Math.floor((Math.random() * 999999) + 100000);
  const qrCodeData = `Random Number: ${generatedNumber}`;
  const qrCodeURL = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(qrCodeData)}`;

  qrcodeElement.innerHTML = '';
  const qrCodeImage = document.createElement('img');
  qrCodeImage.src = qrCodeURL;
  qrcodeElement.appendChild(qrCodeImage);

  compareButton.disabled = false;
  resultMessage.textContent = ''; // Clear previous result message
}

function compareNumbers() {
  const userValue = parseInt(userInput.value, 10);

  if (isNaN(userValue)) {
    resultMessage.textContent = 'Please enter a valid number.';
    return;
  }

  if (userValue === generatedNumber) {
    resultMessage.textContent = 'OTP matches!';
  } else {
    resultMessage.textContent = 'OTP does not match.';
  }
}