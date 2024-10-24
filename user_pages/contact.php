<?php  include("../widgets/navbar.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../img/logo1.php" type="imge/x-icon" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


  </head>

    <title>Contact Us</title>
    <style>
@import url("https://fonts.googleapis.com/css?family=Josefin+Sans:200,300,400,500,600,700|Roboto:100,300,400,500,700&display=swap");

*{ 
  font-family:"Josefin Sans",sans-serif;
}
 
:root {
--Color1: #16161a;
--Color2:#ff2020;
--Color3:#0b1c39;
--BgColor1: #ffffff;
--BgColor2: #f0f0f2;
}

        
    
        body {
        background: white;
         
        }
    
        .content h2 {
          color: red;
          font-size: 40px;
          text-align: center;
          margin-bottom: 20px;
        }
    
        .content form {
          width: 100%;
          max-width: 700px;
          text-align: center;
          margin: 0 auto;
        }
    
        .field .item {
          width: 100%;
          padding: 18px;
          background: transparent;
          border: 2px solid #dc3545;
          outline: none;
          border-radius: 6px;
          font-size: 16px;
          color: #ededed;
          margin: 12px 0;
        }
    
        .field .item::placeholder {
          color: black;
        }
    
        .field .error-txt {
          font-size: 14.5px;
          color: #dc3545;
          text-align: left;
          margin: -5px 0 10px;
          display: none;
        }
    
        .textarea-field .item {
          resize: none;
        }
    
        form .submit {
          padding: 12px 32px;
          background: #dc3545;
          border: none;
          outline: none;
          border-radius: 6px;
          box-shadow: 0 0 10px #5a94ff;
          font-size: 16px;
          color: #1f242d;
          letter-spacing: 1px;
          font-weight: 600;
          cursor: pointer;
          margin-top: 20px;
          transition: 0.3s;
        }
    
        form button:hover {
          box-shadow: none;
        }
      </style>
</head>

<body>
  
    <section class="content container">
        <h2>Contact Waqt Team</h2>
        <form>
          <!-- First Row: Full Name & Email -->
          <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
              <div class="input-field field">
                <input type="text" required placeholder="Full Name" id="name" class="form-control item" autocapitalize="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-field field">
                <input type="email" required placeholder="Email Address" id="email" class="form-control item" autocapitalize="off">
              </div>
            </div>
          </div>
    
          <!-- Second Row: Phone Number & Subject -->
          <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
              <div class="input-field field">
                <input type="text" minlength="9" required placeholder="Phone Number" id="phone" class="form-control item" autocapitalize="off">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-field field">
                <input type="text" required placeholder="Subject" id="subject" class="form-control item" autocapitalize="off">
              </div>
            </div>
          </div>
    
          <!-- Message Field -->
          <div class="textarea-field field mb-3">
            <textarea name="Message" required id="Message" cols="30" rows="5" placeholder="Your Message" class="form-control item" autocapitalize="off" minlength="20"></textarea>
          </div>
    
          <!-- Submit Button -->
          <button type="submit" class="btn btn-danger submit">Send massage</button>
        </form>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        const form = document.querySelector('form');
        const fullName = document.getElementById("name");
        const email = document.getElementById("email");
        const phone = document.getElementById("phone");
        const subject = document.getElementById("subject");
        const Message = document.getElementById("Message");

        function sendEmail() {
            const data = {
                fullName: fullName.value,
                email: email.value,
                phone: phone.value,
                subject: subject.value,
                message: Message.value
            };

            const jsonData = JSON.stringify(data);
            console.log(jsonData);

            const bodyMessage = `
                <strong>Full Name:</strong> ${fullName.value}<br>
                <strong>Email:</strong> ${email.value}<br>
                <strong>Phone Number:</strong> ${phone.value}<br>
                <strong>Subject:</strong> ${subject.value}<br>
                <strong>Message:</strong> ${Message.value}<br>
                <strong>jsonData:</strong> ${jsonData}
            `;

            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "moawiah.eqailan@gmail.com",
                Password: "D122E06D8037D94978B5634475CFBB3F2D42",
                To: 'moawiah.eqailan@gmail.com',
                From: "moawiah.eqailan@gmail.com",
                Subject: subject.value,
                Body: bodyMessage
            }).then(
                message => Swal.fire({
                    title: "Success!",
                    text: "Message sent successfully!",
                    icon: "success"
                })
            ).catch(
                error => alert("Failed to send message")
            );
        }

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            sendEmail();
        });
    </script>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>
<?php include("../widgets/footer.php");?>