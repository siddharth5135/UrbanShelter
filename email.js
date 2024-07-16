document.getElementById('contact-form').addEventListener('submit', function(e) {
  e.preventDefault();
  var form = e.target;
  var name = form.elements['name'].value;
  var email = form.elements['email'].value;
  var message = form.elements['message'].value;
  var subject = 'New message from ' + name;
  
  var body = 'Name: ' + name + '\n\n';
  body += 'Email: ' + email + '\n\n';
  body += 'Message: ' + message + '\n\n';
  
  GmailApp.sendEmail('recipient@example.com', subject, body);
  
  alert('Your message has been sent!');
  form.reset();
});

