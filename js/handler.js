document.getElementById("contactForm").addEventListener("submit", function(event) {
   event.preventDefault(); // Prevent the form from submitting normally

  // Get form values
  var fullName = document.getElementById("fullName").value;
  var email = document.getElementById("email").value;
  var phoneNumber = document.getElementById("phoneNumber").value;
  var message = document.getElementById("message").value;

  // Send data to server using AJAX
  var xhr = new XMLHttpRequest();
  var url = "send_email.php"; // Replace with your server-side script URL
  var params = "fullName=" + fullName + "&email=" + email + "&phoneNumber=" + phoneNumber + "&message=" + message;
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Request finished and response is ready
      alert("Message sent successfully!");
      // You can perform further actions here after the email has been sent
    }
  };

  xhr.send(params);
});
